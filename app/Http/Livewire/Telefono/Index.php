<?php

namespace App\Http\Livewire\Telefono;

use App\Models\Telefono;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $cargado = false;

    public function render()
    {

        $telefonos = ($this->cargado == true) ? Telefono::where('Modelo', 'LIKE', '%' . $this->search . '%')
        ->orwhere('SistemaOperativo', 'LIKE', '%' . $this->search . '%')
        ->orwhere('Compania', 'LIKE', '%' . $this->search . '%')
        ->orwhere('Almacenamiento', 'LIKE', '%' . $this->search . '%')
        ->paginate(2) : [];
        return view('livewire.telefono.index', compact('telefonos'));
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function cargando(){
        $this->cargado=true;
    }
}
