<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramasController extends Controller
{
    public function programas(){
        $programas = [
            ['titulo' => 'Programa intensivo - Ciencias de la vida y de la salud.'],
            ['titulo' => 'Programa intensivo - Ciencias Básicas y Tecnológicas'],
            ['titulo' => 'Programa intensivo - Ciencias de la Persona'],
            ['titulo' => 'Programa intensivo - Ciencias Económicas'],
            ['titulo' => 'Programa formativo - Academia PreUniversitaria'],
        ];
        return view('landing.programas',compact('programas'));
    }
}
