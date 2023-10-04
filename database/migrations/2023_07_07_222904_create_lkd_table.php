<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLkdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lkd', function (Blueprint $table) {
            $table->id();
            $table->string('rt_id');
            $table->integer('rw_id');
            $table->integer('dusun_id');
            $table->string('ketua_rt');
            $table->string('nik_ketua_rt');
            $table->string('ketua_rw');
            $table->string('nik_ketua_rw');
            $table->year('periode_rt_1');
            $table->year('periode_rt_2');
            $table->year('periode_rw_1');
            $table->year('periode_rw_2');
            $table->string('user_id');
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
        Schema::dropIfExists('lkd');
    }
}
