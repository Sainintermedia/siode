<?php

namespace App\Http\Controllers\Siode\Bukuadministrasidesa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BukuadministrasidesaController extends Controller
{
    public function index()
    {
        return view('siode.dashboard.dashboard', compact('rt', 'ran', 'rw', 'kk', 'pen'));
    }
}