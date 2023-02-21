<?php

namespace Database\Seeders;

use Database\Seeders\AgamaSeed;
use Database\Seeders\CreateAdminUserSeeder;
use Database\Seeders\DesaSeed;
use Database\Seeders\DisabilitasSeed;
use Database\Seeders\GolDarahSeed;
use Database\Seeders\HubunganKeluargaSeed;
use Database\Seeders\JenisKelaminSeed;
use Database\Seeders\KewarganegaraanSeed;
use Database\Seeders\PekerjaanSeed;
use Database\Seeders\PendidikanKeluargaSeed;
use Database\Seeders\PendidikanSeed;
use Database\Seeders\PernikahanSeed;
use Database\Seeders\SakitKronisSeed;
use Database\Seeders\UmurSeed;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UmurSeed::class,
            DisabilitasSeed::class,
            GolDarahSeed::class,
            SakitKronisSeed::class,
            PendidikanSeed::class,
            PekerjaanSeed::class,
            HubunganKeluargaSeed::class,
            AgamaSeed::class,
            PernikahanSeed::class,
            JenisKelaminSeed::class,
            KewarganegaraanSeed::class,
            PendidikanKeluargaSeed::class,
            CreateAdminUserSeeder::class,
            DesaSeed::class,
        ]);
    }
}
