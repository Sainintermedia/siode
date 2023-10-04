<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LembagaKemasyarakatanDesa extends Model
{
    use HasFactory;
    protected $table = 'lkd';
    protected $fillable = [
        'rt_id','rw_id','dusun_id','ketua_rt','nik_ketua_rt','ketua_rw','nik_ketua_rw','periode_rt_1','periode_rt_2','periode_rw_1','periode_rw_2','user_id'
    ];
}