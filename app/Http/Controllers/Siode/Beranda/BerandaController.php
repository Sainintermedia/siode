<?php
namespace App\Http\Controllers\Siode\Beranda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {   
        return view('siode.beranda.index');
    }
}
