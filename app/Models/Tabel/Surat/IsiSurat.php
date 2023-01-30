<?php

namespace App\Models\Tabel\Surat;

use App\Models\Tabel\Surat\Surat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IsiSurat extends Model
{
    use HasFactory;
    protected $table = 'isi_surat';
    protected $guarded = [];

    public function surat()
    {
        return $this->belongsTo(Surat::class, 'surat_id');
    }
}