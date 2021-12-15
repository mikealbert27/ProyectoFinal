<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function ValidaEdad($edad=null){
        if ($edad == null) {
            return 'Validacion de la edad';
        }elseif ($edad >= 100) {
            return 'Error, edad no valida';
        }elseif($edad >= 18){
            return 'Eres mayor de edad';
        }elseif($edad < 18){
            return 'Eres menor de edad';
        }
    }
}
