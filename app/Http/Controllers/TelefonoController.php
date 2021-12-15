<?php

namespace App\Http\Controllers;
use App\Models\Telefono;

use Illuminate\Http\Request;

class TelefonoController extends Controller
{
    protected $paginationTheme = 'bootstrap';

    public function index(){

        $telefonos = Telefono::paginate(2);

        return view('Telefono.index', compact('telefonos'));
    }


    public function registroTelefono(){
        $telefono = new Telefono();
        $telefono-> Modelo = 'Huawei P30';
        $telefono-> SistemaOperativo = 'MIUI';
        $telefono-> Compañia = 'AT&T';
        $telefono-> Almacenamiento = '128GB';
        $telefono-> CantidadEnStock = 1;
        $telefono-> Descripcion = 'Celular Huawei P30 con 6Gb de Ram y 3 camaras';
        $telefono->save();

        return 'Registro de celular con exito';
    }
}
