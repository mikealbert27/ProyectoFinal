<?php

namespace App\Http\Livewire\Usuario;

use App\Models\Usuarios;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Http\Livewire\Usuario\ReglasDeValidacion;
use Illuminate\Support\Facades\Hash;

class UsuarioCreate extends Component
{
    use WithFileUploads;
    public Usuarios $usuario;
    public $foto;
    public $password;
    public $confirmar_password;

    public function mount(){
        $this->usuario = new Usuarios();
    }

    public function render()
    {
        return view('livewire.usuario.usuario-create');
    }

    public function crearUsuario(){
        $this->validate();
        $this->usuario->password = Hash::make($this->password);
        if($this->foto != null) {
            $this->usuario->foto = Storage::disk('public')->put('images/usuarios', $this->foto);
        }
        $this->usuario->save();
        $this->emit('usuario', '¡Usuario agregado exitosamente!');
    }

    protected function rules(){

        return ReglasDeValidacion::ReglasUser();
    }
}
