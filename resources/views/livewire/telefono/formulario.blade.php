<div class="row">
    <div class="col-4">

        <div wire:loading wire:target="foto" class="align-items-center mx-auto" >
            <strong>Cargando...</strong>
            <div class="spinner-border ms-auto d-block" role="status" aria-hidden="false"></div>
        </div>

        @if ($foto != null)
            <img src="{{$foto->temporaryUrl()}}" height="230px" width="230px" alt="">
        @else
            <img src="{{Storage::disk('public')->url($telefono->Foto != null ? $telefono->Foto : 'images/telefonos/noimage.jpg')}}"
            height="230px" width="230px" alt="">
        @endif

        <form>
            <div class="form-group">
              <label for="exampleFormControlFile1">Selecciona una imagen</label>
              <input wire:model="foto" type="file" class="form-control-file" id="exampleFormControlFile1">
              @error('foto')<span class="text-danger">{{$message}}</span> @enderror
            </div>
          </form>
    </div>
        <div class="col-6 mx-auto">
            <form>
                <div class="form-group">
                  <label>Modelo:</label>
                  <input wire:model.defer="telefono.Modelo" type="text" class="form-control">
                  @error('telefono.Modelo')<span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <label>Sistema Operativo:</label>
                    <input wire:model.defer="telefono.SistemaOperativo" type="text" class="form-control">
                    @error('telefono.SistemaOperativo')<span class="text-danger">{{ $message }}</span> @enderror
                </div>
                  <div class="form-group">
                    <label>Compañia:</label>
                    <input wire:model.defer="telefono.Compania" type="text" class="form-control">
                    @error('telefono.Compania')<span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label>Almacenamiento:</label>
                    <input wire:model.defer="telefono.Almacenamiento" type="text" class="form-control">
                    @error('telefono.Almacenamiento')<span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label>Cantidad en Stock:</label>
                    <input wire:model.defer="telefono.CantidadEnStock" type="text" class="form-control">
                    @error('telefono.CantidadEnStock')<span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label>Descripcion:</label>
                    <input wire:model.defer="telefono.Descripcion" type="text" class="form-control">
                    @error('telefono.Descripcion')<span class="text-danger">{{ $message }}</span> @enderror
                </div><br>
              </form>
        </div>
</div>
