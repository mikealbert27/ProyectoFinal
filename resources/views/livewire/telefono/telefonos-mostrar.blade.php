<div>
    <div class="card mx-auto" style="width: 30rem;">

        <img class="mx-auto" style="width:350px; height:350px;"
        src="{{Storage::disk('public')->url($telefono->Foto !=null ?
        $telefono->Foto : 'images/telefonos/noimage.jpg')}}" alt="">

        <div class="card-body">
            <h6 class="card-title text-center mb-1">Modelo del telefono celular:</h6>
            <p class="card-title text-center">{{$telefono->Modelo}}</p>
            <h6 class="card-title text-center mb-1">Descripcion del dispositivo:</h6>
            <p class="card-text text-center">{{$telefono->Descripcion}}</p>
            <a href="{{route('telefono.index')}}" class="btn btn-primary d-block">
                <i class="fa fa-undo"></i> Regresar</a>
        </div>
      </div>
</div>
