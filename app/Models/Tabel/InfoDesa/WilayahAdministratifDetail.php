<?php

namespace App\Models\Tabel\InfoDesa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WilayahAdministratifDetail extends Model
{
    use HasFactory;
    protected $table = 'wilayah_administratif_details';
    protected $fillable = ['dusun_id', 'rt', 'rw', 'ketua', 'nik_ketua'];

    public function penduduk()
    {
        return $this->hasMany('App\Penduduk');
    }

    public function dusun()
    {
        return $this->belongsTo('App\Dusun');
    }
}
