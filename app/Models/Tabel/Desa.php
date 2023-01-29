<?php

namespace App\Models\Tabel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;
    protected $table= 'desa';
    protected $fillable = [
        'nama_desa',
        'nama_kecamatan',
        'nama_kabupaten',
        'nama_provinsi',
        'alamat_desa',
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