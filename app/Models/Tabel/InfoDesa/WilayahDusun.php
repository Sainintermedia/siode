<?php

namespace App\Models\Tabel\InfoDesa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WilayahDusun extends Model
{
    use HasFactory;
    protected $table = 'wilayah_dusuns';
    protected $fillable = [
        'rw_id', 'nama',
    ];
}
