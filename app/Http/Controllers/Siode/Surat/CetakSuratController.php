<?php

namespace App\Http\Controllers\Siode\Surat;

use App\Http\Controllers\Controller;
use App\Models\Tabel\Desa;
use App\Models\Tabel\Surat\CetakSurat;
use App\Models\Tabel\Surat\DetailCetak;
use App\Models\Tabel\Surat\Surat;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CetakSuratController extends Controller
{
    public function index()
    {
        $surat = Surat::with('isiSurat')->paginate(25);

        return view('siode.suratdesa.cetak-surat.index', compact('surat'));
    }

    public function indexView(Request $request, $id)
    {
        $surat = Surat::with('isiSurat')->find($id);
        $cetakSurat = CetakSurat::where('surat_id', $id)
            ->orderBy('id', 'desc')
            ->paginate(25);
        if ($request->cari) {
            $cetakSurat = CetakSurat::where('surat_id', $surat->id)
                ->whereHas('detailCetak', function ($detailCetak) use ($request) {
                    $detailCetak->where('isian', 'like', "%{$request->cari}%");
                })
                ->orderBy('id', 'desc')
                ->paginate(25);
        }
        $cetakSurat->appends($request->only('cari'));
        return view('siode.suratdesa.cetak-surat.index-view', compact('surat', 'cetakSurat'));
    }
    public function create(Request $request, $id, $slug)
    {
        $surat = Surat::find($id);
        $desa = Desa::find(1);
        if ($slug != Str::slug($surat->nama)) {
            return abort(404, 'Halaman Tidak Ditemukan');
        }
        // return $surat;
        return view('siode.suratdesa.cetak-surat.create', compact('surat', 'desa'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'isian.*' => ['required'],
        ]);

        $desa = Desa::find(1);
        $surat = Surat::find($id);
        $image = (string) Image::make(public_path(Storage::url($desa->logo)))->encode('jpg');
        $logo = (string) Image::make($image)->encode('data-url');
        // $tanggal = tgl(date('Y-m-d'));
        $tanggal = Carbon::now()->isoFormat('dddd, D MMMM Y');
        $pdf = PDF::loadView('siode.suratdesa.cetak-surat.show', compact('surat', 'desa', 'request', 'logo', 'tanggal'))->setPaper([0, 0, 609.449, 935.433]);
        if ($surat->tampilkan == 1) {
            $cetakSurat = CetakSurat::create([
                'surat_id' => $id,
            ]);

            foreach ($request->isian as $isian) {
                DetailCetak::create([
                    'cetak_surat_id' => $cetakSurat->id,
                    'isian' => $isian,
                ]);
            }

            $surat->save();
        }

        return $pdf->stream($surat->nama . '.pdf');
    }
}