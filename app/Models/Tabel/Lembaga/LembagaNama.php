<?php

namespace App\Models\Tabel\Lembaga;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LembagaNama extends Model
{
    use HasFactory;
    protected $table = 'm_lembaga_nama';
    protected $fillable = [
        'lembaga_jabatan_id', 'nama',
    ];
    protected $guarded = [];
}
