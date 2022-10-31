<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encuesta;

class PreguntaController extends Controller
{
    public function create(Encuesta $encuesta)
    {
        return view('pregunta.create',compact('encuesta'));
    }

    public function store(Encuesta $encuesta)
    {
        $datos = request()->validate([
            'pregunta.pregunta' => 'required',
            'respuestas.*.respuesta' => 'required',
        ]);

        $pregunta = $encuesta->preguntas()->create($datos['pregunta']);
        $pregunta->respuestas()->createMany($datos['respuestas']);

        return redirect('/encuestas/'.$encuesta->id);
    }
}
