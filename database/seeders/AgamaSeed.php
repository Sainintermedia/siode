<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AgamaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $religion = [
            [
                'nama' => 'ISLAM'
            ],
            [
                'nama' => 'KRISTEN'
            ],
            [
                'nama' => 'KATHOLIK'
            ],
            [
                'nama' => 'HINDU'
            ],
            [
                'nama' => 'BUDHA'
            ],
            [
                'nama' => 'KONGHUCU'
            ],
            [
                'nama' => 'Kepercayaan Terhadap Tuhan YME / Lainnya'
            ],
        ];
        \DB::table('m_agama')->insert($religion);
    }
}