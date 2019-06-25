<?php

namespace App\Http\Controllers;
use App\Idioma;

use Illuminate\Http\Request;

class IdiomaController extends Controller
{
    public function index (Request $request) {
        return view('idioma.index');
    }
    public function retornar(Request $request) {

    }
}
