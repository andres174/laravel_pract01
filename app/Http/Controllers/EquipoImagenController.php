<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipoImagenController extends Controller
{
    //
    public function mostrarEquipoImagen(){
        return view('paginas.equipos_imagen');
    }
}
