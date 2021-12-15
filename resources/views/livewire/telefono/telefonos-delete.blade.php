<div>
    <div class="mx-auto card" style="width: 30rem;"><br>
        <img class="card-img-top mx-auto" style="width:350px; height:350px;"
        src="{{ Storage::disk('public')->url($telefono->Foto != null ? $telefono->Foto : 'images/usuarios/avatar.png') }}">
        <div class="card-body">
            <h6 class="card-title text-center mb-1">Modelo del telefono celular:</h6>
            <p class="card-title text-center">{{$telefono->Modelo}}</p>
            <h6 class="card-title text-center mb-1">Sistema operativo:</h6>
            <p class="card-text text-center">{{$telefono->SistemaOperativo}}</p>
            <h6 class="card-text text-center">¿Estas seguro que deseas eliminarlo?</h6>
            <div class="col-md-12 text-center">
                <button wire:click="telefonoEliminar" class="btn btn-danger btn-sm">
                    <i class="fas fa-trash-alt"></i> Eliminar</button>
                <a href="{{route('telefono.index')}}" class="btn btn-secondary btn-sm">
                    <i class="fa fa-undo"></i> Cancelar</a>
            </div>
        </div>
    </div>
</div>
