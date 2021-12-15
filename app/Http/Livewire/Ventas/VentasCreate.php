<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Telefono;
use App\Models\Usuarios;
use App\Models\Venta;
use Livewire\Component;

class VentasCreate extends Component
{
    public Venta $venta;

    public function mount(){
        $this->venta = new Venta();
    }
    public function render()
    {
        $telefonos = Telefono::all();
        $usuarios = Usuarios::all();
        return view('livewire.ventas.ventas-create', compact('telefonos', 'usuarios'));
    }

    public function crearVenta(){
        $this->validate();
        $this->venta->save();
        $this->emit('Guardado', '¡Venta realizada exitosamente!');

    }

    public function rules(){
       return ReglasVentas::reglas();
    }
}
