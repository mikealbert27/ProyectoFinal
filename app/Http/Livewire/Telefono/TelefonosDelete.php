<?php

namespace App\Http\Livewire\Telefono;

use Livewire\Component;
use App\Models\Telefono;

class TelefonosDelete extends Component
{
    public $foto;
    public Telefono $telefono;

    public function render()
    {
        return view('livewire.telefono.telefonos-delete');
    }

    public function telefonoEliminar(){
        $this->emit('Eliminado', '¡Los datos se borraron!');
        $this->telefono->delete();
        return redirect(route('telefono.index'));
    }
}
