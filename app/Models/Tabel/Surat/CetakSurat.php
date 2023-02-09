<?php

namespace App\Models\Tabel\Surat;

use App\Models\Tabel\Surat\DetailCetak;
use App\Models\Tabel\Surat\Surat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CetakSurat extends Model
{
    use HasFactory;
    protected $table = 'cetak_surat';
    protected $fillable = [
        'surat_id', 'nomor', 'arsip',
    ];
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