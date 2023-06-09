<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Profesor;


class TablaProfeController extends Controller
{
    public function profesores()
    {
        $tablaprofesores = Profesor::all();
        return view('tablaprofe.tablaprofesor', compact('tablaprofesores'));
    }
    public function store(Request $request)
    {
        $tablaprofesor = new Profesor();
        $tablaprofesor->nombre = $request->nombre;
        $tablaprofesor->ramo = $request->ramo;
        $tablaprofesor->save();

        return redirect()->route('tablaprofe.tablaprofesor');
    }
}
