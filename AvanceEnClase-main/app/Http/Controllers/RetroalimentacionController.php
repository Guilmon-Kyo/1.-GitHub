<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Retroalimentacion;


class RetroalimentacionController extends Controller
{
    public function retroalimentacion()
    {
        $retroalimentacion = Retroalimentacion::all();
        return view('retroalimentacion.retroalimentacion', compact('retroalimentacion'));
    }
    public function store(Request $request)
    {
        $retroalimentacion = new Retroalimentacion();
        $retroalimentacion->nombreproyecto = $request->nombreproyecto;
        $retroalimentacion->alumnos = $request->alumnos;
        $retroalimentacion->mensaje = $request->mensaje;
        $retroalimentacion->save();

        return redirect()->route('retroalimentacion.retroalimentacion');
    }
}
