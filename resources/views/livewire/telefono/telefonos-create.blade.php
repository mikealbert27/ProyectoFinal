<div>
    <form wire:submit.prevent="creartelefono">
        <div class="card bg-light mb-3 mx-auto" style="max-width: 80rem;">
            <div class="card-body">
                <h5 class="card-header">Datos del dispositivo a agregar</h5>
                <p class="card-text"></p>
                @include('livewire.telefono.formulario')
                <div class="card-footer">
                    <button wire:loading.attr="disabled" wire:target="foto" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Guardar</button>
                    <a href="{{route('telefono.index')}}" class="btn btn-secondary btn-sm"><i class="fa fa-undo"></i> Regresar</a>
                </div>
            </div>
      </div>
    </form>
</div>
