<?php

namespace App\Models\Tabel\Surat;

use App\Models\Tabel\Surat\IsiSurat;
use App\Models\Tabel\Surat\CetakSurat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Surat extends Model
{
    use HasFactory;
    protected $table = 'surat';
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