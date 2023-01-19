<?php

namespace App\Http\Controllers\Siode\Dashboard;

use App\Models\Master\RtRw;
use Illuminate\Http\Request;
use App\Models\Tabel\KartuKeluarga;
use App\Http\Controllers\Controller;
use App\Models\Tabel\KartuKeluargaAnggota;

class DashboardController extends Controller
{
    public function index()
    {
        // $rtrt = RtRw::with(['keluargart' => function ($q){
        //     $q->withCount('kartukeluargaanggota');
        // }])->get();

        
        $kk = KartuKeluarga::select('id')->count();
        $pen = KartuKeluargaAnggota::select('id')->count();
        $rt = KartuKeluarga::select('rt')->get()->groupBy('rt');
        $rw = KartuKeluarga::select('rw')->get()->groupBy('rw');
        $kp = KartuKeluarga::select('kp')->get()->groupBy('kp');
        $kkanggotalaki = KartuKeluargaAnggota::select('jenkel')->whereJenkel('1')->count();
        $kkanggotaperempuan = KartuKeluargaAnggota::select('jenkel')->whereJenkel('2')->count();
        return view('siode.dashboard.dashboard', compact('rt', 'rw', 'kk', 'pen','kkanggotalaki','kkanggotaperempuan'));
    }
}