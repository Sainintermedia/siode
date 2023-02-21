<?php

namespace App\Models\Tabel\InfoDesa;

use App\Models\Tabel\InfoDesa\WilayahAdministratif;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WilayahAdministratif extends Model
{
    use HasFactory;
    protected $table = 'wilayah_administratifs';
    protected $fillable = ['nama'];
    public function detailWilayahAdministratif()
    {
        return $this->hasMany(WilayahAdministratif::class);
    }
}
