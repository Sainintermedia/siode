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
        $kk = KartuKeluargaAnggota::select('id', 'sts_hub_kel')
            ->whereSts_hub_kel(1)
            ->count();
        $pen = KartuKeluargaAnggota::select('id')->count();
        $rt = KartuKeluarga::select('id', 'rt')
            ->get()
            ->groupBy('rt');
        $rw = KartuKeluarga::select('id', 'rw')
            ->get()
            ->groupBy('rw');
        $kp = KartuKeluarga::select('id', 'kp')
            ->get()
            ->groupBy('kp');
        $kkanggotalaki = KartuKeluargaAnggota::select('jenkel')
            ->whereJenkel('1')
            ->count();
        $kkanggotaperempuan = KartuKeluargaAnggota::select('jenkel')
            ->whereJenkel('2')
            ->count();
        return view('siode.dashboard.dashboard', compact('rt', 'rw', 'kk', 'pen', 'kkanggotalaki', 'kkanggotaperempuan'));
    }
}