<?php

namespace App\Models\Tabel\Surat;

use App\Models\Tabel\Surat\CetakSurat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailCetak extends Model
{
    use HasFactory;
    protected $table = 'detail_cetak';
    protected $guarded = [];

    public function detailCetak()
    {
        return $this->belongsTo(CetakSurat::class);
    }
}