<?php

namespace App\Http\Controllers\Siode\Surat;

use Illuminate\Http\Request;
use App\Models\Tabel\Surat\Surat;
use App\Http\Controllers\Controller;

class SuratController extends Controller
{
    public function index()
    {
        $surat = Surat::latest()->get();
        return view('siode.suratdesa.surat.index', compact('surat'));
    }

    public function create()
    {
        return view('siode.suratdesa.surat.create');
    }

    public function store(Request $request)
    {
        return $request->all();
    }
}