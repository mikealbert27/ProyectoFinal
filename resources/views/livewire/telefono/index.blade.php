<div wire:init="cargando">

    <div wire:poll>
        <div class="row">
            <div class="col-3 align-self-start">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
                    <input wire:model="search" type="text" class="form-control" placeholder="Buscar..." aria-label="Username" aria-describedby="addon-wrapping">
                  </div>
            </div>

            <div class="col align-self-center">
                <a href="{{route('telefono.create')}}" type="button" class="btn-sm btn btn-success">
                    <i class="fa fa-plus-circle"></i> Añadir datos</a>
            </div>
        </div>

            @if (count($telefonos)>0)
            <div class = "table-responsive mt-3">
                <table class="table table-striped  table-light">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Sistema Operativo</th>
                        <th scope="col">Compañia</th>
                        <th scope="col">Almacenamiento</th>
                        <th scope="col">Cantidad en Stock</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($telefonos as $telefono)
                        <tr>
                            <th scope="row">{{$telefono->id}}</th>
                            <th>
                                <img style="width:60px; height:60px;"
                                src="{{Storage::disk('public')->url($telefono->Foto !=null ? $telefono->Foto : 'images/telefonos/noimage.jpg')}}"
                                alt="">
                            </th>
                            <td>{{$telefono->Modelo}}</td>
                            <td>{{$telefono->SistemaOperativo}}</td>
                            <td>{{$telefono->Compania}}</td>
                            <td>{{$telefono->Almacenamiento}}</td>
                            <td>{{$telefono->CantidadEnStock}}</td>
                            <td>{{$telefono->Descripcion}}</td>
                            <td>
                                <a href="{{route('telefono.mostrar', $telefono)}}" title="Ver mas" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="{{route('telefono.edit', $telefono)}}" title="Editar datos" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{route('telefono.delete', $telefono)}}" title="Eliminar datos" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                        @endforeach

                    </tbody>
                  </table>
                  @else
                  <img class ="mx-auto d-block" style="width: 350px; height: 350px;" src="{{Storage::disk('public')->url('images/otros/cargando.gif')}}" alt="">
            @endif


                  {{$cargado == true ? $telefonos->links() : null}}
            </div>
        </div>
    </div>
</div>
