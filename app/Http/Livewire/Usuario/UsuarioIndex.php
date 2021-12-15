<?php

namespace App\Http\Livewire\Usuario;

use App\Models\Usuarios;
use Livewire\Component;
use Livewire\WithPagination;

class UsuarioIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $cargando = false;

    public function render()
    {
        $usuarios = ($this->cargando == true) ? Usuarios::where('nombre_usuario', 'LIKE', '%' . $this->search . '%')
        ->orwhere('email', 'LIKE', '%' . $this->search . '%')
        ->paginate(5) : [];
        return view('livewire.usuario.usuario-index', compact('usuarios'));
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function cargandoPage(){
        $this->cargando=true;
    }
}
