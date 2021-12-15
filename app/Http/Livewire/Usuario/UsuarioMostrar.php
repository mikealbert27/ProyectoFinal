<?php

namespace App\Http\Livewire\Usuario;

use App\Models\Usuarios;
use Livewire\Component;

class UsuarioMostrar extends Component
{
    public $foto;
    public Usuarios $usuario;
    
    public function render()
    {
        return view('livewire.usuario.usuario-mostrar');
    }
}
