<?php

namespace App\Models\Tabel\Surat;

use App\Models\Tabel\Surat\Surat;
use App\Models\Tabel\Surat\DetailCetak;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CetakSurat extends Model
{
    use HasFactory;
    protected $table = 'cetak_surat';
    protected $guarded = [];

    public function surat()
    {
        return $this->belongsTo(Surat::class);
    }

    public function detailCetak()
    {
        return $this->hasMany(DetailCetak::class);
    }
}