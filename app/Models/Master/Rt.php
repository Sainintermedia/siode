<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rt extends Model
{
    use HasFactory;
    protected $table = 'rt';
    protected $fillable = [
        'no_rt','rw_id','dusun_id','ketua_rt','nik_ketua_rt','periode_1','periode_2','user_id'
    ];
}
