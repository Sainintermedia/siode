<?php

namespace App\Http\Controllers\Siode\WilayahAdministratif;

use DataTables;
use App\Models\Master\Rt;
use App\Models\Master\Rw;
use App\Models\Master\Dusun;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Tabel\InfoDesa\WilayahRw;
use App\Models\Tabel\KartuKeluargaAnggota;
use App\Models\Tabel\InfoDesa\WilayahDusun;
use App\Models\Master\LembagaKemasyarakatanDesa;
use App\Models\Tabel\InfoDesa\WilayahAdministratif;

class WilayahAdministratifController extends Controller
{
    public function index()
    {
        $dusun = Dusun::get();
        $rw = Rw::get();
        $rt = Rt::get();
        $lkd = LembagaKemasyarakatanDesa::get();
        return view('siode.infodesa.wilayah-administratif.index', compact('dusun', 'rw', 'rt', 'lkd'));
    }

    public function createDusun()
    {
        return view('siode.infodesa.wilayah-administratif.create-dusun');
    }

    public function storeDusun(Request $request)
    {
        $dusun = new Dusun();
        $dusun->nama_dusun = $request->nama_dusun;
        $dusun->user_id = \Auth::user()->id;
        $dusun->save();

        return redirect()
            ->route('siode.infodesa.wilayah-administratif.index')
            ->with('success', 'Data ' . $request->nama_dusun . ' berhasil disimpan.');
    }

    /**
     * BAGIAN RW
     */
    public function createRw(Request $request)
    {
        if ($request->ajax()) {
            $data = KartuKeluargaAnggota::select('id', 'no_nik', 'nama')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return '<button class="btnreg btn bg-gradient-info btn-xs text-sm"
                                        id="selectFamillies" data-no_nik="' .
                        $row->no_nik .
                        '"
                                        data-nama="' .
                        $row->nama .
                        '"
                                        data-dismiss="modal" </button> Pilih';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('siode.infodesa.wilayah-administratif.create-rw');
    }

    public function storeRw(Request $request)
    {
        $rw = new Rw();
        $rw->no_rw = $request->no_rw;
        $rw->ketua_rw = $request->ketua_rw;
        $rw->nik_ketua_rw = $request->nik_ketua_rw;
        $rw->periode_1 = $request->periode_1;
        $rw->periode_2 = $request->periode_2;
        $rw->user_id = \Auth::user()->id;
        $rw->save();
        return redirect()
            ->route('siode.infodesa.wilayah-administratif.index')
            ->with('success', 'Data Rw '.$request->no_rw.' berhasil disimpan');
    }

    public function createRt(Request $request)
    {
        $rw = Rw::get();
        $dusun = Dusun::get();
        if ($request->ajax()) {
            $data = KartuKeluargaAnggota::select('id', 'no_nik', 'nama')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return '<button class="btnreg btn bg-gradient-info btn-xs text-sm"
                                        id="selectFamillies" data-no_nik="' .
                        $row->no_nik .
                        '"
                                        data-nama="' .
                        $row->nama .
                        '"
                                        data-dismiss="modal" </button> Pilih';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('siode.infodesa.wilayah-administratif.create-rt', compact('rw', 'dusun'));
    }

    public function storeRt(Request $request)
    {
        // return $request->all();
        $rt = new Rt();
        $rt->no_rt = $request->no_rt;
        $rt->rw_id = $request->rw_id;
        $rt->dusun_id = $request->dusun_id;
        $rt->ketua_rt = $request->ketua_rt;
        $rt->nik_ketua_rt = $request->nik_ketua_rt;
        $rt->periode_1 = $request->periode_1;
        $rt->periode_2 = $request->periode_2;
        $rt->user_id = \Auth::user()->id;
        $rt->save();

        return redirect()
            ->route('siode.infodesa.wilayah-administratif.index')
            ->with('success', 'Data Rt '.$request->no_rt.' berhasil disimpan');

    }

    public function createLkd(Request $request)
    {

        $rw = Rw::get();
        $rt = Rt::get();
        $dusun = Dusun::get();
        if ($request->ajax()) {
            $data = KartuKeluargaAnggota::select('id', 'no_nik', 'nama')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return '<button class="btnreg btn bg-gradient-info btn-xs text-sm" id="selectFamillies" data-no_nik="' . $row->no_nik .'"
                            data-nama="' .$row->nama .'"
                            data-dismiss="modal" </button> Pilih';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('siode.infodesa.wilayah-administratif.create-lkd', compact('rw', 'dusun', 'rt'));

    }

}
