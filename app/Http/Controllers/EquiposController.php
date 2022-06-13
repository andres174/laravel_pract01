<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquiposController extends Controller
{
    public function mostrar(){
        return view('paginas.equipos');
    }
}
