<?php

namespace App\Http\Controllers\Siode\Statistik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatistikController extends Controller
{

    public function index()
    {   
        return view('siode.statistik.index');
    }
}
