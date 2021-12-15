<?php

namespace App\Http\Livewire\Usuario;

use phpDocumentor\Reflection\Types\Nullable;

class ReglasDeValidacion
{
    public static function ReglasUser($id = null){

        $validarPassword = ($id) ? 'nullable|min:8' : 'required|min:8';
        return[
            'usuario.nombre_usuario' => 'required|string',
            'usuario.email' => 'required|email|unique:usuarios,email,' . $id,
            'password' => $validarPassword,
            'confirmar_password' => 'same:password',
            'foto' => 'nullable|image'
        ];
    }
}
