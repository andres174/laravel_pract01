<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personas;

class PersonasDBController extends Controller
{
    //
    public function guardarPersona(Request $request){
        $persona = new Personas();
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->cedula = $request->cedula;
        $persona->save();
        return view('paginas.persona');

    }

}
