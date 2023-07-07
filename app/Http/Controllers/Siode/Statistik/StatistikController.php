<?php

namespace App\Http\Controllers\Siode\Statistik;

use App\Models\Master\RtRw;
use Illuminate\Http\Request;
use App\Models\Tabel\KartuKeluarga;
use App\Http\Controllers\Controller;
use App\Models\Tabel\KartuKeluargaAnggota;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

class StatistikController extends Controller
{

    public function index()
    {
        $kk = KartuKeluargaAnggota::where('sts_hub_kel', 1)->count();
        $pen = KartuKeluargaAnggota::count();
        $rt = KartuKeluarga::select('id', 'rt')->get()->groupBy('rt')->count();
        $rw = KartuKeluarga::select('id', 'rw')->get()->groupBy('rw')->count();
        $kp = KartuKeluarga::select('id', 'kp')->get()->groupBy('kp')->count();
        $kkanggotalaki = KartuKeluargaAnggota::where('jenkel', '1')->count();
        $kkanggotaperempuan = KartuKeluargaAnggota::where('jenkel', '2')->count();

        // Prepare data for Pie Chart
        $data = [
            'Kartu Keluarga' => $kk,
            'Penduduk' => $pen,
            'RW' => $rw,
            'RT' => $rt,
            'Kampung' => $kp,
            'KK Anggota Laki-laki' => $kkanggotalaki,
            'KK Anggota Perempuan' => $kkanggotaperempuan,
          
        ];

        return view('siode.statistik.index', compact('data'));
    }
}
