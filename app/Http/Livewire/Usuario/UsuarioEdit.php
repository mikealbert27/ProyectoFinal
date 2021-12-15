<?php

namespace App\Http\Livewire\Usuario;

use App\Models\Usuarios;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Http\Livewire\Usuario\ReglasDeValidacion;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UsuarioEdit extends Component
{
    use WithFileUploads;
    public $foto;
    public Usuarios $usuario;
    public $password;
    public $confirmar_password;

    public function render()
    {
        return view('livewire.usuario.usuario-edit');
    }

    public function editarUsuario(){
        $this->validate();
        if ($this->foto != null) {
            if ($this->usuario->foto != null) {
                Storage::disk('public')->delete($this->usuario->foto);
        }
        $this->usuario->foto = Storage::disk('public')->put('images/usuarios', $this->foto);
    }
        if ($this->password){
            $this->usuario->password = Hash::make($this->password);
        }
        $this->emit('Modificado', '¡Modificacion realizada exitosamente!');
        $this->usuario->save();


    }

    public function rules(){
        return ReglasDeValidacion::ReglasUser($this->usuario->id);
    }
}
