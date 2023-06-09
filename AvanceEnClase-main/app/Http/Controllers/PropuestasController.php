<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propuesta;

class EquipoController extends Controller
{
    public function propuestas(){
        $propuestas = Propuesta::all();
        return view('propuestas.propuestas',compact('propuestas'));
    }

    public function store(Request $request){
        //dd($request->entrenador);
        $propuesta = new Equipo();
        $propuesta->nombre = $request->nombre;
        $propuesta->descripcion = $request->descripcion;
        $propuesta-> save();
        return redirect()->route('propuestas.propuestas');
    }

}
