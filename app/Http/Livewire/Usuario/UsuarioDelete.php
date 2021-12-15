<?php

namespace App\Http\Livewire\Usuario;

use App\Models\Usuarios;
use Livewire\Component;

class UsuarioDelete extends Component
{
    public $foto;
    public Usuarios $usuario;

    public function render()
    {
        return view('livewire.usuario.usuario-delete');
    }

    public function eliminarUsuario(){
        $this->emit('Eliminado', '¡Los datos se borraron!');
        $this->usuario->delete();
        return redirect(route('usuario.index'));
    }
}
