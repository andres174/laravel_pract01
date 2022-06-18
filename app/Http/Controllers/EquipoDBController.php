<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquipoDBController extends Controller
{
    //
    public function guardarEquipo(Request $request){
        $equipo = new Equipo();
        $equipo->nombreEquipo = $request->nombreEquipo;
        $equipo->imagenS = $request->imagenS;
        $equipo->save();
        return back();
    }
    public function showEquiposS(){
        /* $e=Equipo::all();
        return view('paginas.equipos', compact('e')); */
    }
    public function editEquipo($id){
        //dd($id);
        $equipo = Equipo::find($id);
        $e=Equipo::all();                       // revisar eso sin enviar la e
        return view('paginas.edit-equipo', compact('e'), compact('equipo'));
        //return view('paginas.equipos'/* , compact('equipo') */);
    }

    public function updateEquipo(Request $request, $id){
        $equipo = Equipo::find($id);
        $equipo->nombreEquipo = $request->nombreEquipo;
        $equipo->imagenS = $request->imagenS;
        $equipo->save();
        return redirect('equipos');
    }
}
