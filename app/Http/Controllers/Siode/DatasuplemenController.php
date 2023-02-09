<?php

namespace App\Http\Controllers\Siode;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DatasuplemenController extends Controller
{
    public function index()
    {   
        return view('siode.kependudukan.data-suplemen.index');
    }
}
