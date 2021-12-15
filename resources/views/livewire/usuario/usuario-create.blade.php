<div>
    <form wire:submit.prevent="crearUsuario">
        <div class="card bg-light mb-3 mx-auto" style="max-width: 80rem;">
            <div class="card-body">
                <h5 class="card-header">Rellena los campos para completar el registro</h5>
                <p class="card-text"></p>
                @include('livewire.usuario.formulario-usuario')
                <div class="card-footer">
                    <button wire:loading.attr="disabled" wire:target="foto" class="btn btn-success btn-sm">
                        <i class="fas fa-user-plus"></i> Agregar</button>
                    <a href="{{route('usuario.index')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Regresar</a>
                </div>
            </div>
      </div>
    </form>
</div>

