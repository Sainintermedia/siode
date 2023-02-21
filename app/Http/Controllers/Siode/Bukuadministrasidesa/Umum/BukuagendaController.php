<?php

namespace App\Http\Controllers\Siode\Bukuadministrasidesa\Umum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BukuagendaController extends Controller
{
    public function index()
    {
        return view('siode.bukuadministrasidesa.umum.buku-agenda.index');
    }
    public function create()
    {
        return view('siode.bukuadministrasidesa.umum.buku-agenda.create');
    }
}
