<div>
    <form wire:submit.prevent="editartelefono">
        <div class="card bg-light">
            <div class="card-body">
                <h5 class="card-header">Datos del dispositivo a modificar</h5>
                <p class="card-text"></p>
                @include('livewire.telefono.formulario')
                <div class="card-footer">
                    <button class="btn btn-primary btn-sm"><i class="far fa-edit"></i> Modificar</button>
                    <a href="{{route('telefono.index')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Regresar</a>
                </div>
            </div>
      </div>
    </form>
</div>
