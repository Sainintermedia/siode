<?php

namespace App\Http\Controllers\Siode\Lembaga;

use App\Http\Controllers\Controller;
use App\Models\Tabel\Lembaga\Lembaga;
use App\Models\Tabel\Lembaga\LembagaJabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LembagaController extends Controller
{
    public function index()
    {
        $lembaga = Lembaga::get();
        return view('siode.infodesa.lembaga.index', compact('lembaga'));
    }

    public function store(Request $request)
    {
        $lembaga = new Lembaga();
        $lembaga->nama = $request->nama;
        $lembaga->save();

        return redirect()
            ->back()
            ->with('success', 'Data berhasil disimpan !');
    }
    public function createJabatan(Request $request, $id, $slug)
    {
        // return $slug;
        $lembaga = Lembaga::get();
        $lembagafind = Lembaga::with('lembagajabatan')->findOrFail($id);
        return view('siode.infodesa.lembaga.detail', compact('lembaga', 'lembagafind'));
    }

    public function storeJabatan(Request $request)
    {
        $lembagajabatan = new LembagaJabatan();
        $lembagajabatan->lembaga_id = $request->lembaga_id;
        $lembagajabatan->nama_jabatan = $request->nama_jabatan;
        $lembagajabatan->save();
        return redirect()
            ->back()
            ->with('success', 'Data berhasil disimpan !');
    }

    public function editJabatan(Request $request, $jabatan)
    {
        $lembaga = Lembaga::with('lembagajabatan')->findOrFail($jabatan);
        return view('siode.infodesa.lembaga.edit-struktur', compact('lembaga'));
    }

    public function updateJabatan(Request $request, $jabatan)
    {
        $lembaga = Lembaga::whereId($jabatan)->update([
            'nama' => $request->nama,
        ]);

        LembagaJabatan::whereLembaga_id($jabatan)->delete();
        for ($i = 0; $i < count($request->nama_jabatan); $i++) {
            $lembagajabatan = new LembagaJabatan();
            $lembagajabatan->lembaga_id = $jabatan;
            $lembagajabatan->nama_jabatan = $request->nama_jabatan[$i];
            $lembagajabatan->save();
        }

        $item = Lembaga::findOrFail($jabatan);

        return redirect()
            ->route('siode.infodesa.lembaga.createJabatan', ['id' => $item->id, Str::slug($item->nama)])
            ->with('success', 'Struktur berhasil di ubah');
    }

    public function destroy(Request $request, $lembaga)
    {
        $lembaga = Lembaga::findOrFail($lembaga)->delete();

        return redirect()->route('siode.infodesa.lembaga.index');
    }
}
