<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encuesta;

class FormularioController extends Controller
{
    public function show(Encuesta $encuesta, $slug)
    {
        $encuesta->load('preguntas.respuestas');
        return view('formulario.show', compact('encuesta'));
    }

    public function store(Encuesta $encuesta)
    {
        $datos = request()->validate([
            'elecciones.*.respuesta_id' => 'required',
            'elecciones.*.pregunta_id' => 'required',
            'formulario.nombre' => 'required',
            'formulario.correo' => 'required',
        ]);
        $formulario = $encuesta->formularios()->create($datos['formulario']);
        $formulario->respuestas()->createMany($datos['elecciones']);

        return 'Thank you!';
    }
}
