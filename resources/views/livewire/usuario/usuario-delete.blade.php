<div>
    <div class="mx-auto card" style="width: 30rem;"><br>
        <img class="card-img-top mx-auto" style="width:350px; height:350px;"
        src="{{ Storage::disk('public')->url($usuario->foto != null ? $usuario->foto : 'images/usuarios/avatar.png') }}">
        <div class="card-body">
            <h6 class="card-title text-center mb-1">Nickname del usuario:</h6>
            <p class="card-title text-center">{{$usuario->nombre_usuario}}</p>
            <h6 class="card-title text-center mb-1">Correo Electronico:</h6>
            <p class="card-text text-center">{{$usuario->email}}</p>
            <h6 class="card-text text-center">¿Estas seguro que deseas eliminarlo?</h6>
            <div class="col-md-12 text-center">
                <button wire:click="eliminarUsuario" class="btn btn-danger btn-sm center">
                    <i class="fas fa-trash-alt"></i> Eliminar</button>
                <a href="{{route('usuario.index')}}" class="btn btn-secondary btn-sm">
                    <i class="fa fa-undo"></i> Cancelar</a>
            </div>
        </div>
    </div>
</div>
