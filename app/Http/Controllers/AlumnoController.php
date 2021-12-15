<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function crear()
    {
        $alumno = new Alumno();
        $alumno->expediente = '16818812';
        $alumno->nombre = 'Pedro Martinez';
        $alumno->carrera = 'Ingeniero en sistemas';
        $alumno->edad = 30;
        $alumno->save();

        return 'se creo con exito';
    }
}
