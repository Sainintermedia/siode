<?php

namespace App\Http\Controllers\Siode\Bukuadministrasidesa\Penduduk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class BukumutasipendudukController extends Controller
{
    public function index()
    {
        return view('siode.bukuadministrasidesa.penduduk.buku-induk-penduduk.index');
    }
    public function create()
    {
        return view('siode.bukuadministrasidesa.penduduk.buku-induk-penduduk.create');
    }
}
