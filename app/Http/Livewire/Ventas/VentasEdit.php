<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Telefono;
use App\Models\Usuarios;
use App\Models\Venta;
use Livewire\Component;

class VentasEdit extends Component
{
    public Venta $venta;

    public function render()
    {
        $telefonos = Telefono::all();
        $usuarios = Usuarios::all();
        return view('livewire.ventas.ventas-edit', compact('usuarios', 'telefonos'));
    }

    public function editarVenta(){
        $this->validate();
        $this->emit('Modificado', '¡Modificacion realizada exitosamente!');
        $this->venta->save();



    }


    public function rules(){
        return ReglasVentas::reglas();
    }
}
