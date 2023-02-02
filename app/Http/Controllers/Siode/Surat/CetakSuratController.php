<?php

namespace App\Http\Controllers\Siode\Surat;

use App\Http\Controllers\Controller;
use App\Models\Tabel\Desa;
use App\Models\Tabel\Surat\CetakSurat;
use App\Models\Tabel\Surat\DetailCetak;
use App\Models\Tabel\Surat\Surat;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CetakSuratController extends Controller
{
    public function create(Request $request, $id, $slug)
    {
        // return $slug;
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
        $tanggal = tgl(date('Y-m-d'));
        $pdf = PDF::loadView('cetak-surat.show', compact('surat', 'desa', 'request', 'logo', 'tanggal'))->setPaper(array(0, 0, 609.449, 935.433));
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