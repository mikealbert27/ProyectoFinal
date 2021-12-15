<div>
    <div class="card mx-auto" style="width: 30rem;"><br>
        
        <img class="mx-auto" style="width:350px; height:350px;"
        src="{{Storage::disk('public')->url($ventas->foto !=null ?
        $ventas->foto : 'images/usuarios/avatar.png')}}" alt="">

        <div class="card-body">
            <h6 class="card-title text-center mb-1">Nickname del usuario:</h6>
            <p class="card-text text-center">{{$ventas->nombre_usuario}}</p>
            <h6 class="card-title text-center mb-1">Telefono adquirido:</h6>
            <p class="card-text text-center">{{$ventas->Modelo}}</p>
            <h6 class="card-title text-center mb-1">Fecha de actualizacion:</h6>
            <p class="card-text text-center">{{$venta->updated_at}}</p>
            <a href="{{route('ventas')}}" class="btn btn-primary d-block">
                <i class="fa fa-undo"></i> Regresar</a>
        </div>
      </div>
</div>
