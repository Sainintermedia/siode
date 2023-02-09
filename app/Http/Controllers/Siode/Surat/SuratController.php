<?php

namespace App\Http\Controllers\Siode\Surat;

use App\Http\Controllers\Controller;
use App\Models\Tabel\Desa;
use App\Models\Tabel\Surat\IsiSurat;
use App\Models\Tabel\Surat\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SuratController extends Controller
{
    public function index()
    {
        $surat = Surat::latest()->get();
        return view('siode.suratdesa.surat.index', compact('surat'));
    }

    public function create()
    {
        return view('siode.suratdesa.surat.create');
    }

    public function edit(Surat $surat)
    {
        return view('siode.suratdesa.surat.edit', compact('surat'));
    }

    public function store(Request $request)
    {
        // return $request->all();
        $validator = $this->validationSurat($request);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->all(),
            ]);
        }

        $dataSurat = $this->dataSurat($request);

        $surat = Surat::create($dataSurat);

        $this->createIsiSurat($request, $surat);

        // return response()->json([
        //     'success' => true,
        //     'message' => 'Surat berhasil ditambahkan',
        // ]);
        return redirect()
            ->route('siode.surat.surat.index')
            ->with('success', 'Master surat berhasil dibuat');

    }

    private function validationSurat($request)
    {
        return Validator::make($request->all(), [
            'nama' => ['required', 'max:64'],
            'icon' => ['required', 'max:64'],
            'isian.*' => ['required'],
        ]);
    }
    private function dataSurat($request)
    {
        $dataSurat = [
            'nama' => $request->nama,
            'kode_surat' => $request->kode_surat,
            'kategori_surat' => $request->kategori_surat,
            'icon' => $request->icon,
            'colour' => $request->colour,
            'deskripsi' => $request->deskripsi,
            'persyaratan' => $request->persyaratan,
            'perihal' => $request->perihal,
            'data_kades' => $request->data_kades,
            'tampilkan' => $request->tampilkan_surat,
            'tanda_tangan_bersangkutan' => $request->tanda_tangan_bersangkutan,
        ];

        return $dataSurat;
    }

    private function createIsiSurat($request, $surat)
    {
        for ($i = 1; $i < count($request->isian); $i++) {
            IsiSurat::create([
                'surat_id' => $surat->id,
                'isi' => $request->isian[$i],
                'jenis_isi' => $request->jenis_isi[$i],
                'tampilkan' => $request->tampilkan[$i],
            ]);
        }
    }

    public function destroy(Surat $surat)
    {
        $surat->delete();
        return redirect()
            ->back()
            ->with('success', 'Surat berhasil dihapus');
    }

    public function update(Request $request, Surat $surat)
    {
        $validator = $this->validationSurat($request);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->all(),
            ]);
        }

        $dataSurat = $this->dataSurat($request);

        $surat->update($dataSurat);

        IsiSurat::where('surat_id', $surat->id)->delete();

        $this->createIsiSurat($request, $surat);

        // return response()->json([
        //     'success' => true,
        //     'message' => 'Surat berhasil diperbarui',
        // ]);
        return redirect()
            ->route('siode.surat.surat.index')
            ->with('success', 'Master surat berhasil diubah');

    }

    public function layanan_surat()
    {
        $surat = Surat::latest()->get();
        $desa = Desa::find(1);
        return view('siode.suratdesa.surat.layanan-surat', compact('surat', 'desa'));
    }
}
