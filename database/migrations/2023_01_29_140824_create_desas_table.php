<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_desa', 100)->nullable();
            $table->string('singkat_desa', 100)->nullable();
            $table->string('nama_kecamatan', 100)->nullable();
            $table->string('nama_kabupaten', 100)->nullable();
            $table->string('nama_provinsi', 100)->nullable();
            $table->string('alamat_desa', 150)->nullable();
            $table->string('kodepos', 20)->nullable();
            $table->string('alamat_kecamatan', 150)->nullable();
            $table->string('nama_kepala_desa', 100)->nullable();
            $table->string('alamat_kepala_desa', 150)->nullable();
            $table->string('nama_camat', 100)->nullable();
            $table->string('alamat_camat', 150)->nullable();
            $table->string('foto_desa', 100)->nullable();
            $table->string('logo', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desa');
    }
}