<?php

namespace App\Http\Livewire\Telefono;

use phpDocumentor\Reflection\Types\Nullable;

class ReglasValidacion
{
    public static function Reglas(){
        return[
            'telefono.Modelo' => 'required|string',
            'telefono.SistemaOperativo' => 'required|string',
            'telefono.Compania' => 'required|string',
            'telefono.Almacenamiento' => 'required|string',
            'telefono.CantidadEnStock' => 'required|string',
            'telefono.Descripcion' => 'required|string',
            'foto' => 'nullable|image'
        ];
    }
}
