<div>
    <div class="card mx-auto" style="width: 30rem;"><br>

        <img class="mx-auto" style="width:350px; height:350px;"
        src="{{Storage::disk('public')->url($usuario->foto !=null ?
        $usuario->foto : 'images/usuarios/avatar.png')}}" alt="">

        <div class="card-body">
            <h6 class="card-title text-center mb-1">Nickname del usuario:</h6>
            <p class="card-text text-center">{{$usuario->nombre_usuario}}</p>
            <h6 class="card-title text-center mb-1">Correo Electronico:</h6>
            <p class="card-text text-center">{{$usuario->email}}</p>
            <a href="{{route('usuario.index')}}" class="btn btn-primary d-block">
                <i class="fa fa-undo"></i> Regresar</a>
        </div>
      </div>
</div>
