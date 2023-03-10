<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendidikanKeluargaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $famedu = [
            [
                'nama' => 'TIDAK / BELUM SEKOLAH'
            ],
            [
                'nama' => 'BELUM TAMAT SD/SEDERAJAT'
            ],
            [
                'nama' => 'TAMAT SD / SEDERAJAT'
            ],
            [
                'nama' => 'SLTP/SEDERAJAT'
            ],
            [
                'nama' => 'SLTA / SEDERAJAT'
            ],
            [
                'nama' => 'DIPLOMA I / II'
            ],
            [
                'nama' => 'AKADEMI/ DIPLOMA III/S. MUDA'
            ],
            [
                'nama' => 'DIPLOMA IV/ STRATA I'
            ],
            [
                'nama' => 'STRATA II'
            ],
            [
                'nama' => 'STRATA III'
            ],
        ];
        \DB::table('m_pendidikan_keluarga')->insert($famedu);
    }
}