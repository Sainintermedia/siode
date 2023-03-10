<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSarprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sarpras', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 50)->nullable();
            $table->string('sarpras', 100)->nullable();
            $table->string('jumlah', 50)->nullable();
            $table->string('lokasi', 50)->nullable();
            $table->string('kondisi', 50)->nullable();
            $table->string('user_id', 50)->nullable();
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
        Schema::dropIfExists('sarpras');
    }
}
