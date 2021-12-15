<div>
    <div class="mx-auto card" style="width: 30rem;"><br>

        <img class="mx-auto" style="width:350px; height:350px;"
        src="{{Storage::disk('public')->url($ventas->foto !=null ?
        $ventas->foto : 'images/usuarios/avatar.png')}}" alt="">

        
        <div class="card-body">
            <h6 class="card-title text-center mb-1">Nickname del usuario:</h6>
            <p class="card-title text-center">{{$ventas->nombre_usuario}}</p>
            <h6 class="card-title text-center mb-1">Modelo adquirido:</h6>
            <p class="card-text text-center">{{$ventas->Modelo}}</p>
            <h6 class="card-text text-center">¿Estas seguro que deseas eliminar la compra?</h6>
            <div class="col-md-12 text-center">
                <button wire:click="eliminarVenta" class="btn btn-danger btn-sm center">
                    <i class="fas fa-trash-alt"></i> Eliminar</button>
                <a href="{{route('ventas')}}" class="btn btn-secondary btn-sm">
                    <i class="fa fa-undo"></i> Cancelar</a>
            </div>
        </div>
    </div>
</div>
