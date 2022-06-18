<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquiposController extends Controller
{
    public function mostrar(){
        /* return view('paginas.equipos'); */
        $e=Equipo::all();
        return view('paginas.equipos', compact('e')); //muestra los datos por defecto
    }
}
