<?php

namespace App\Http\Controllers\Siode\Bukuadministrasidesa\Umum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BukuaparatpemerintahdesaController extends Controller
{
    public function index()
    {
        return view('siode.bukuadministrasidesa.umum.buku-aparat-pemerintah-desa.index');
    }
    public function create()
    {
        return view('siode.bukuadministrasidesa.umum.buku-aparat-pemerintah-desa.create');
    }
}
