<?php

namespace App\Models\Tabel\InfoDesa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WilayahRw extends Model
{
    use HasFactory;
    protected $table = 'wilayah_rws';
    protected $fillable = [
        'no_rw',
        'ketua_rw',
        'nik_rw',
    ];
}
