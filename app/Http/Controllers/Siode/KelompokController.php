<?php

namespace App\Http\Controllers\Siode;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KelompokController extends Controller
{
    public function index()
    {   
        return view('siode.kependudukan.kelompok.index');
    }
}
