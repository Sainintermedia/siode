<?php

namespace App\Http\Controllers\Siode\Surat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KematianController extends Controller
{
    public function index()
    {   
        return view('siode.suratdesa.formatsurat.kematian');
    }
}