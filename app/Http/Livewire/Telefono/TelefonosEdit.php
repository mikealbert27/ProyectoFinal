<?php

namespace App\Http\Livewire\Telefono;

use App\Http\Livewire\Telefono\ReglasValidacion;
use App\Models\Telefono;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class TelefonosEdit extends Component
{
    use WithFileUploads;
    public Telefono $telefono;
    public $foto;

    public function render()
    {
        return view('livewire.telefono.telefonos-edit');
    }

    public function editartelefono(){
        $this->validate();
        if ($this->foto != null) {
            if ($this->telefono->foto != null) {
                Storage::disk('public')->delete($this->telefono->foto);
        }
        $this->telefono->foto = Storage::disk('public')->put('images/telefonos', $this->foto);
    }
        $this->telefono->save();
        $this->emit('Modificado', '¡Modificacion realizada exitosamente!');

    }

    protected function rules(){
        return ReglasValidacion::Reglas();
    }
}
