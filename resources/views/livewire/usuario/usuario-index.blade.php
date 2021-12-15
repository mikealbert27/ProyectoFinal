<div wire:init="cargandoPage">
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
                <a href="{{ route('usuario.create') }}" type="button" class="btn-sm btn btn-success">
                    <i class="fa fa-plus-circle"></i> Añadir Usuario</a>
            </div>
        </div>

        @if (count($usuarios) > 0)
            <div class="table-responsive mt-2">
                <table class="table table-striped table-light">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Nombre de usuario</th>
                            <th scope="col">Email</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <th scope="row">{{ $usuario->id }}</th>
                                <th>
                                    <img style="border-radius: 50px; width:70px; height:70px;"
                                        src="{{ Storage::disk('public')->url($usuario->foto != null ? $usuario->foto : 'images/usuarios/avatar.png') }}"
                                        alt="">
                                </th>
                                <td>{{ $usuario->nombre_usuario }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>
                                    <a href="{{route('usuario.mostrar', $usuario)}}" title="Ver mas" class="btn btn-info btn-sm"><i
                                            class="fa fa-eye"></i></a>
                                    <a href="{{route('usuario.edit', $usuario)}}" title="Editar datos" class="btn btn-primary btn-sm"><i
                                            class="fa fa-edit"></i></a>
                                    <a href="{{route('usuario.delete', $usuario)}}" title="Eliminar datos" class="btn btn-danger btn-sm"><i
                                            class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <img class="mx-auto d-block" style="width: 350px; height: 350px;"
                    src="{{ Storage::disk('public')->url('images/otros/cargando.gif') }}" alt="">
        @endif

        {{ $cargando == true ? $usuarios->links() : null }}
    </div>

</div>

</div>


