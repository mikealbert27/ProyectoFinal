<?php

namespace App\Http\Livewire\Telefono;

use App\Models\Telefono;
use Livewire\Component;

class TelefonosMostrar extends Component
{
    public $foto;
    public Telefono $telefono;
    public function render()
    {
        return view('livewire.telefono.telefonos-mostrar');
    }
}
