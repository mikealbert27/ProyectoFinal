<div wire:init="cargandoVenta">
    <div wire:poll>
        <div class="row">
            <div class="col-3 align-self-start">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
                    <input wire:model="search" type="text" class="form-control" placeholder="Buscar..."
                        aria-describedby="addon-wrapping">
                </div>
            </div>

            <div class="col align-self-center">
                <a href="{{ route('ventas.create') }}" type="button" class="btn-sm btn btn-success">
                    <i class="fa fa-plus-circle"></i> Añadir nueva venta</a>
            </div>
        </div>

        @if (count($ventas) > 0)
            <div class="table-responsive mt-2">
                <table class="table table-striped table-light">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Modelo adquirido</th>
                            <th scope="col">Fecha de adquisicion</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ventas as $venta)
                            <tr>
                                <th scope="row">{{ $venta->id }}</th>
                                <td>{{ $venta->nombre_usuario }}</td>
                                <td><span class="badge badge-pill badge-success">{{$venta->Modelo}}</span> </td>
                                <td><span class="badge badge-pill badge-primary">{{ $venta->created_at }}</span> </td>
                                <td>
                                    <a href="{{route('ventas.mostrar', $venta)}}" title="Ver mas" class="btn btn-info btn-sm"><i
                                            class="fa fa-eye"></i></a>
                                    <a href="{{route('ventas.editar', $venta)}}" title="Editar datos" class="btn btn-primary btn-sm"><i
                                            class="fa fa-edit"></i></a>
                                    <a href="{{route('ventas.eliminar', $venta)}}" title="Eliminar datos" class="btn btn-danger btn-sm"><i
                                            class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        {{ $cargando == true ? $ventas->links() : null }}
        </div>
    </div>
</div>
