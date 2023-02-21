<?php

namespace App\Models\Tabel\Lembaga;

use App\Models\Tabel\Lembaga\LembagaJabatan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lembaga extends Model
{
    use HasFactory;
    protected $table = 'm_lembaga';
    protected $fillable = [
        'nama',
    ];
    protected $guarded = [];

    public function lembagajabatan()
    {
        return $this->hasMany(LembagaJabatan::class, 'lembaga_id', 'id');
    }

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($jabatan) {
            $jabatan->lembagajabatan()->delete();
        });
    }
}
