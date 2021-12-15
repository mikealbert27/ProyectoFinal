<div>
    <form wire:submit.prevent="editarUsuario">
        <div class="card bg-light mb-3 mx-auto" style="max-width: 70rem;">
            <div class="card-body">
                <div class="card-header">Modifica tus datos</div>
                <p class="card-text"></p>
                @include('livewire.usuario.formulario-usuario')
                <div class="card-footer">
                    <button wire:loading.attr="disabled" wire:target="foto" class="btn btn-success btn-sm">
                        <i class="fa fa-edit"></i> Modificar</button>
                    <a href="{{route('usuario.index')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Regresar</a>
                </div>
            </div>
      </div>
    </form>
</div>
