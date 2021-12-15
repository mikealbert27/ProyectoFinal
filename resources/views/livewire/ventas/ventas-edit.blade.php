<div>
    <form wire:submit.prevent="editarVenta">
        <div class="card bg-light mb-3 mx-auto" style="max-width: 70rem;">
            <div class="card-body">
                <h6 class="card-header">Modifica los datos de venta</h6>
                <p class="card-text"></p>
                @include('livewire.ventas.formulario-ventas')
                <div class="card-footer">
                    <button class="btn btn-success btn-sm">
                        <i class="fa fa-edit"></i> Guardar</button>
                    <a href="{{route('ventas')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Regresar</a>
                </div>
            </div>
      </div>
    </form>
</div>
