<?php

namespace App\Http\Controllers\Siode\Bukuadministrasidesa\Umum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class BukutanahkasdesaController extends Controller
{
    public function index()
    {
        return view('siode.bukuadministrasidesa.umum.buku-tanah-kas-desa.index');
    }
    public function create()
    {
        return view('siode.bukuadministrasidesa.umum.buku-tanah-kas-desa.create');
    }
}
