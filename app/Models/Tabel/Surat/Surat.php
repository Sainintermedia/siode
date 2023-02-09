<?php

namespace App\Models\Tabel\Surat;

use App\Models\Tabel\Surat\CetakSurat;
use App\Models\Tabel\Surat\IsiSurat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;
    protected $table = 'surat';
    protected $fillable = ['nama', 'kode_surat', 'kategori_surat', 'deskripsi', 'icon', 'colour', 'tanda_tangan_bersangkutan', 'perihal', 'data_kades', 'tampilkan', 'persyaratan'];
    protected $guarded = [];

    public function isiSurat()
    {
        return $this->hasMany(IsiSurat::class, 'surat_id');
    }

    public function cetakSurat()
    {
        return $this->hasMany(CetakSurat::class, 'surat_id');
    }
}
