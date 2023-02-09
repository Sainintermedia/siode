<?php

namespace App\Http\Controllers\Siode\Surat;

// use Barryvdh\DomPDF\PDF;
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
        $surat = Surat::with('isiSurat')->withCount('cetakSurat as count')->paginate(25);

        return view('siode.suratdesa.cetak-surat.index', compact('surat'));
    }

    public function indexView(Request $request, $id)
    {
        $surat = Surat::with('isiSurat')->find($id);
        $cetakSurat = CetakSurat::where('surat_id', $id)
            ->with('DetailCetak')
            ->orderByDesc('id')
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
        $year = Carbon::now()->isoFormat('Y');
        $cetaksurat = CetakSurat::whereSurat_id($id)->whereYear('created_at', $year)->count('nomor');
        $no = $cetaksurat;
        $auto = substr(4, $no);
        $auto = abs($cetaksurat + 1);
        $nosurat = substr($no, 3, 0) . str_repeat(0, 3 - strlen($auto)) . $auto;

        $surat = Surat::find($id);
        $desa = Desa::find(1);
        if ($slug != Str::slug($surat->nama)) {
            return abort(404, 'Halaman Tidak Ditemukan');
        }
        // return $surat;
        return view('siode.suratdesa.cetak-surat.create', compact('surat', 'desa', 'nosurat'));
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
        $cetaksurat = CetakSurat::whereSurat_id($id)->count('nomor');
        $no = $cetaksurat;
        $auto = substr(4, $no);
        $auto = abs($cetaksurat + 1);
        $nosurat = substr($no, 3, 0) . str_repeat(0, 3 - strlen($auto)) . $auto;

        $tanggal = Carbon::now()->isoFormat('dddd, D MMMM Y');
        $pdf = PDF::loadView('siode.suratdesa.cetak-surat.show', compact('surat', 'desa', 'request', 'logo', 'tanggal', 'nosurat'))->setPaper([0, 0, 609.449, 935.433]);
        if ($surat->tampilkan == 1) {
            $cetakSurat = CetakSurat::create([
                'surat_id' => $id,
                'nomor' => $nosurat,
                'user_id' => \Auth::user()->id,
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

    public function edit(CetakSurat $cetakSurat)
    {
        // return $cetakSurat;
        return view('siode.suratdesa.cetak-surat.edit', compact('cetakSurat'));
    }

    public function update(Request $request, CetakSurat $cetakSurat)
    {
        $request->validate([
            'nomor' => ['nullable', 'numeric', 'min:1'],
            'isian.*' => ['required'],
        ]);

        $cetakSurat->update(['nomor' => $request->nomor]);

        DetailCetak::where('cetak_surat_id', $cetakSurat->id)->delete();

        foreach ($request->isian as $isian) {
            DetailCetak::create([
                'cetak_surat_id' => $cetakSurat->id,
                'isian' => $isian,
            ]);
        }

        return back()->with('success', 'Detail cetak surat berhasil diperbarui');
    }

    public function show(CetakSurat $cetakSurat)
    {
        // return $cetakSurat;
        $desa = Desa::find(1);
        $surat = Surat::find($cetakSurat->surat_id);
        $image = (string) Image::make(public_path(Storage::url($desa->logo)))->encode('jpg');
        $logo = (string) Image::make($image)->encode('data-url');
        // $tanggal = tgl(date('Y-m-d', strtotime($cetakSurat->created_at)));
        $tanggal = Carbon::now()->isoFormat('dddd, D MMMM Y');

        $pdf = PDF::loadView('siode.suratdesa.cetak-surat.detail', compact('surat', 'desa', 'cetakSurat', 'logo', 'tanggal'))->setPaper(array(0, 0, 609.449, 935.433));
        return $pdf->stream($surat->nama . '.pdf');
    }

    public function arsip(Request $request, CetakSurat $cetakSurat)
    {
        $cetakSurat->arsip = $request->arsip;
        $cetakSurat->save();
        return back()->with('success', 'Detail cetak surat berhasil ' . ($request->arsip == 1 ? 'diarsipkan' : 'dinonarsipkan'));
    }

    public function destroy(CetakSurat $cetakSurat)
    {
        $cetakSurat->delete();
        return back()->with('success', 'Detail cetak surat berhasil dihapus');
    }
}
