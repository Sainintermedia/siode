<?php

namespace App\Http\Controllers\Siode\Bukuadministrasidesa\Umum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeraturandesaController extends Controller
{
    public function index()
    {
        return view('siode.bukuadministrasidesa.umum.peraturan-desa.index');
    }
    public function create()
    {
        return view('siode.bukuadministrasidesa.umum.peraturan-desa.create');
    }
}
