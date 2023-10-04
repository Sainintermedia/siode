<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    use HasFactory;
    protected $table = 'rw';
    protected $fillable = [
        'no_rw','ketua_rw','nik_ketua_rw','periode_1','periode_2','user_id'
    ];
}
