<?php

namespace App\Http\Controllers\Siode\Bukuadministrasidesa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class BukupendudukController extends Controller
{
    public function index()
    {   
        return view('siode.bukuadministrasidesa.penduduk.index');
    }
}
