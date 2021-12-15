<?php

namespace App\Http\Livewire\Ventas;


use App\Models\Venta;
use Livewire\Component;

class VentasMostrar extends Component
{

    public Venta $venta;


    public function render()
    {
        $ventas = Venta::join('usuarios', 'ventas.id_usuario', '=', 'usuarios.id')
        ->where('usuarios.id', '=', $this->venta->id_usuario)
        ->join('telefonos', 'ventas.id_telefono', '=', 'telefonos.id')
        ->where('telefonos.id', '=', $this->venta->id_telefono)->select('usuarios.*', 'telefonos.*')
        ->paginate(5);
        $ventas = $ventas[0];

        return view('livewire.ventas.ventas-mostrar', compact('ventas'));
    }
}
