<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Venta;
use Livewire\Component;
use Livewire\WithPagination;

class VentasIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $cargando = false;

    public function render()
    {

        $usuarios = ($this->cargando == true) ? Venta::where('id_usuario', 'LIKE', '%' . $this->search . '%')
        ->orwhere('id_telefono', 'LIKE', '%' . $this->search . '%')
        ->paginate(5) : [];

        $ventas = ($this->cargando == true) ? Venta::join('usuarios', 'ventas.id_usuario', '=', 'usuarios.id')
        ->join('telefonos', 'ventas.id_telefono', '=', 'telefonos.id')
        ->select('ventas.*', 'usuarios.nombre_usuario', 'usuarios.email', 'telefonos.Modelo')->paginate(5) : [];
        return view('livewire.ventas.ventas-index', compact('ventas'));
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function cargandoVenta(){
        $this->cargando=true;
    }
}
