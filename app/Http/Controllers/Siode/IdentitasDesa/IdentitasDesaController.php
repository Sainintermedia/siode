<?php

namespace App\Http\Controllers\Siode\IdentitasDesa;

use App\Models\Tabel\Desa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravolt\Indonesia\Models\Province;

class IdentitasDesaController extends Controller
{
    public function index()
    {
        $desa = Desa::findOrFail(1);
        $provinces = Province::where('code', '36')->pluck('name', 'code');
        return view('siode.infodesa.identitas-desa.index', compact('provinces','desa'));
    }
}