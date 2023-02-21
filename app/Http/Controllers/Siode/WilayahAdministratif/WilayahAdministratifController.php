<?php

namespace App\Http\Controllers\Siode\WilayahAdministratif;

use App\Http\Controllers\Controller;
use App\Models\Tabel\InfoDesa\WilayahAdministratif;
use App\Models\Tabel\InfoDesa\WilayahDusun;
use App\Models\Tabel\InfoDesa\WilayahRw;
use App\Models\Tabel\KartuKeluargaAnggota;
use DataTables;
use Illuminate\Http\Request;

class WilayahAdministratifController extends Controller
{
    public function index()
    {
        // $wilayah = WilayahAdministratif::latest()->get();
        $wilayahrw = WilayahRw::orderBy('id')->get();
        $wilayahdusun = WilayahDusun::orderBy('id')->get();
        return view('siode.infodesa.wilayah-administratif.index', compact('wilayahrw', 'wilayahdusun'));
    }

    /**
     * BAGIAN RW
     */
    public function createRw(Request $request)
    {
        if ($request->ajax()) {
            $data = KartuKeluargaAnggota::select('id', 'no_nik', 'nama')->get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    // $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-xs">Pilih</a>';
                    $btn = '<button class="btnreg btn bg-gradient-info btn-sm text-sm"
                                        id="selectFamillies" data-no_nik="' . $row->no_nik . '"
                                        data-nama="' . $row->nama . '"
                                        data-dismiss="modal" </button> Pilih';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('siode.infodesa.wilayah-administratif.create-rw');
    }

    public function storeRw(Request $request)
    {
        $wilayahrw = new WilayahRw();
        $wilayahrw->no_rw = $request->no_rw;
        $wilayahrw->nik_rw = $request->nik_rw;
        $wilayahrw->ketua_rw = $request->ketua_rw;
        $wilayahrw->save();
        return redirect()
            ->route('siode.infodesa.wilayah-administratif.index')
            ->with('success', 'Data berhasil disimpan');

    }

    /**
     * BAGIAN DUSUN
     */
    public function create()
    {
        $wilayahrw = WilayahRw::pluck('no_rw', 'id');

        return view('siode.infodesa.wilayah-administratif.create', compact('wilayahrw'));
    }

    public function store(Request $request)
    {
        $wilayahdusun = new WilayahDusun();
        $wilayahdusun->rw_id = $request->no_rw;
        $wilayahdusun->nama = $request->nama;
        $wilayahdusun->save();
        return redirect()
            ->route('siode.infodesa.wilayah-administratif.index')
            ->with('success', 'Data berhasil disimpan');

    }

    public function edit(WilayahAdministratif $wilayah_administratif)
    {

    }

    /**
     * BAGIAN RT
     */

}
