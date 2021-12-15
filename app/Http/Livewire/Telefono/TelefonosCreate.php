<?php

namespace App\Http\Livewire\Telefono;

use App\Http\Livewire\Telefono\ReglasValidacion;
use App\Models\Telefono;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class TelefonosCreate extends Component
{
    use WithFileUploads;
    public Telefono $telefono;
    public $foto;

    public function mount(){

        $this->telefono = new Telefono();

    }

    public function render()
    {
        return view('livewire.telefono.telefonos-create');
    }

    public function creartelefono(){
        $this->validate();
        if($this->foto != null) {
            $this->telefono->foto = Storage::disk('public')->put('images/telefonos', $this->foto);
        }
        $this->telefono->save();
        $this->emit('celular', '¡Dispositivo registrado exitosamente!');

    }

    protected function rules(){

        return ReglasValidacion::Reglas();
    }
}
