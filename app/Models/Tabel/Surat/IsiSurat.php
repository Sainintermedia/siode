<?php

namespace App\Models\Tabel\Surat;

use App\Models\Tabel\Surat\Surat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsiSurat extends Model
{
    use HasFactory;
    protected $table = 'isi_surat';
    protected $fillable = [
        'surat_id', 'isi', 'jenis_isi', 'tampilkan',
    ];
    protected $guarded = [];

    public function surat()
    {
        return $this->belongsTo(Surat::class, 'surat_id');
    }
}