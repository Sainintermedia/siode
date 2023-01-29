<?php

namespace App\Http\Controllers\Siode\Bukuadministrasidesa;

use App\Models\Master\Sarpras;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BukukearsipanController extends Controller
{
    public function index()
    {   
        return view('siode.bukuadministrasidesa.kearsipan.index');
    }
    public function petalokasi()
    {   
        return view('siode.bukuadministrasidesa.kearsipan.petalokasi');
    }
    public function sarpras()
    {   
        $sarpras = Sarpras::paginate(10);

        return view('siode.bukuadministrasidesa.kearsipan.sarpras',compact('sarpras'));
    }
    public function sarprascreate()
    {
       
        return view('siode.bukuadministrasidesa.kearsipan.sarprascreate');
    }
    public function sarprasstore(Request $request)
    {
       
            $sarpras = new Sarpras();
            $sarpras->kode = $request->kode;
            $sarpras->sarpras = $request->sarpras;
            $sarpras->jumlah = $request->jumlah;
            $sarpras->lokasi = $request->lokasi;
            $sarpras->kondisi = $request->kondisi;
            $sarpras->user_id = \Auth::user()->id;
            $sarpras->save();
            return redirect()
                ->route('siode.arsip-desa.kearsipan.sarpras.sarpras')
                ->with('success', 'Data berhasil disimpan !');
    }
}
