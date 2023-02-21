<?php

namespace Database\Seeders;

use App\Models\Tabel\Desa;
use Illuminate\Database\Seeder;

class DesaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Desa::create([
            'nama_desa' => 'Cisoka',
            'singkat_desa' => 'csk',
            'nama_kecamatan' => 'Cisoka',
            'nama_kabupaten' => 'Tangerang',
            'nama_provinsi' => 'Banten',
            'alamat_desa' => 'Jl. Raya Cisoka',
            'kodepos' => '15730',
            'alamat_kecamatan' => 'Cisoka',
            'nama_kepala_desa' => 'Sain Intermedia',
            'alamat_kepala_desa' => 'Cisoka',
            'nama_camat' => 'Sain Intermedia',
            'alamat_camat' => 'Cisoka',
            'foto_desa' => 'foto.jpg',
            'logo' => 'logo.png',
        ]);

    }
}
