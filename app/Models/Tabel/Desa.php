<?php

namespace App\Models\Tabel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;
    protected $table = 'desa';
    protected $fillable = [
        'nama_desa',
        'singkat_desa',
        'nama_kecamatan',
        'nama_kabupaten',
        'nama_provinsi',
        'alamat_desa',
        'dusun',
        'rt',
        'rw',
        'kodepos',
        'alamat_kecamatan',
        'nama_kepala_desa',
        'alamat_kepala_desa',
        'nama_camat',
        'alamat_camat',
        'foto_desa',
        'logo',
        'foto_desa',
    ];


}
