<?php

namespace App\Models\Tabel\Surat;

use App\Models\Tabel\Surat\CetakSurat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailCetak extends Model
{
    use HasFactory;
    protected $table = 'detail_cetak';
    protected $fillable = [
        'cetak_surat_id', 'isian',
    ];
    protected $guarded = [];

    public function detailCetak()
    {
        return $this->belongsTo(CetakSurat::class);
    }
}