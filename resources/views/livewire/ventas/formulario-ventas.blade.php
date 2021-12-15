<div class="mb-3">
    <label class="form-label">Usuario que adquiere el dispositivo</label>
    <select wire:model="venta.id_usuario" class="form-select">
        @foreach ($usuarios as $usuario )
            <option value="{{$usuario->id}}">{{$usuario->nombre_usuario}}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label">Dispositivo deseado</label>
    <select wire:model="venta.id_telefono" class="form-select">
        @foreach ($telefonos as $telefono )
            <option value="{{$telefono->id}}">{{$telefono->Modelo}}</option>
        @endforeach
    </select>
</div>

