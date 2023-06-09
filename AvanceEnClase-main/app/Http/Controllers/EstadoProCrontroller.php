<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstadoPropuesta;
use App\Models\Propuesta;

class EstadoProController extends Controller
{
    public function index(){
        $estadopropuestas = EstadoPropuesta::all();
        $propuestas = Propuesta::all();
        return view ('estadopropuestas.estadopro',compact('estadopropuestas','propuestas'));
    }

    public function store(Request $request){
        $estadopropuesta = new EstadoPropuesta();
        $estadopropuesta->nombrepropuesta=$request->nombrepropuesta;
        $estadopropuesta->nombrealumno=$request->nombrealumno;
        $estadopropuesta->descripcion=$request->descripcion;
        $estadopropuesta->estadofinal=$request->estadofinal;
        $estadopropuesta->propuesta_id=$request->propuesta;
        $estadopropuesta->save();
        return redirect()->route('estadopropuestas.estadopro');

    }
}
