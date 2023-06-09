<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Propuesta;


class PropuestasController extends Controller
{
    public function propuestas()
    {
        $propuestas = Propuesta::all();
        return view('propuestas.propuestas', compact('propuestas'));
    }
    public function store(Request $request)
    {
        $propuesta = new Propuesta();
        $propuesta->nombre = $request->nombre;
        $propuesta->descripcion = $request->descripcion;
        $propuesta->save();

        return redirect()->route('propuestas.propuestas');
    }
}
