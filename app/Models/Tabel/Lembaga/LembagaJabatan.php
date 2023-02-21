<?php

namespace App\Models\Tabel\Lembaga;

use App\Models\Tabel\Lembaga\LembagaNama;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LembagaJabatan extends Model
{
    use HasFactory;
    protected $table = 'm_lembaga_jabatan';
    protected $fillable = [
        'lembaga_id', 'nama_jabatan',
    ];
    protected $guarded = [];

    public function lembaganama()
    {
        return $this->hasMany(LembagaNama::class, 'lembaga_jabatan_id', 'id');
    }
}
