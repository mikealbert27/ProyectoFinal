<div class="row">
    <div class="col-4">

        <div wire:loading wire:target="foto" class="align-items-center mx-auto" >
            <strong>Cargando...</strong>
            <div class="spinner-border ms-auto d-block" role="status" aria-hidden="false"></div>
        </div>

        @if ($foto != null)
            <img style="border-radius: 50px;" src="{{$foto->temporaryUrl()}}" height="230px" width="230px" alt="">
        @else
            <img style="border-radius: 50px;" src="{{Storage::disk('public')->url($usuario->foto != null ? $usuario->foto : 'images/usuarios/avatar.png')}}"
            height="230px" width="230px" alt="">
        @endif

        <form>
            <div class="form-group">
              <label for="exampleFormControlFile1">Tu foto de perfil</label>
              <input wire:model="foto" type="file" class="form-control-file" id="exampleFormControlFile1">
              @error('foto')<span class="text-danger">{{$message}}</span> @enderror
            </div>
          </form>
    </div>

        <div class="col-6 mx-auto ">
            <form>
                <div class="form-group">
                  <label>Nombre de usuario:</label>
                  <input wire:model.defer="usuario.nombre_usuario" type="text" class="form-control">
                  @error('usuario.nombre_usuario')<span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="form-group">
                    <label>Correo electronico:</label>
                    <input wire:model.defer="usuario.email" type="text" class="form-control">
                    @error('usuario.email')<span class="text-danger">{{ $message }}</span> @enderror
                </div>
                  <div class="form-group">
                    <label>Contraseña:</label>
                    <input wire:model.defer="password" type="password" class="form-control">
                    @error('password')<span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label>Confirmar contraseña:</label>
                    <input wire:model.defer="confirmar_password" type="password" class="form-control">
                    @error('confirmar_password')<span class="text-danger">{{ $message }}</span> @enderror
                </div>
              </form>
        </div>
</div>
