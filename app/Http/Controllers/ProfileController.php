<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //Mostramos los datos del postulante
    public function index () {
        return view('profile.index');
    }
    //donde el postulante podra actualizar sus datos
    public function update () {

    }
}
