<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CeleShopMVP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer></script>
</head>

@livewireScripts
@livewireStyles
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        @if (Auth::check())
        <div class="container-fluid">
            <a class="navbar-brand text-info" href=""><img style="border-radius: 50px; width:50px; height:50px;" src="{{ Storage::disk('public')->url(Auth::user()->foto ? Auth::user()->foto : 'images/usuarios/avatar.jpg')}}"> {{Auth::user()->nombre_usuario}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        @endif

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @if (Auth::check())
                <ul class="mb-2 navbar-nav me-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light active" aria-current="page" href="{{route('telefono.index')}}">Telefonos</a>
                      </li>
                    <li class="nav-item active">
                      <a class="nav-link text-light" href="{{route('usuario.index')}}">Usuarios</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="{{route('ventas')}}">Ventas</a>
                      </li>
                    @livewire('login.logout')
                  </ul>
                @endif
            </div>
          </nav><br>
        </div>

     <div class="container">
        {{$slot}}
     </div>

@livewireScripts
@livewireStyles

    <script>
        livewire.on('alerta', mensaje=> {

            Swal.fire({
                icon: 'error',
                title: 'Ocurrio un error',
                text: mensaje,
            })
        });

         livewire.on('Guardado', mensaje=> {

            Swal.fire({

                icon: 'success',
                title: mensaje,
                timer: 1500
            })
        });
        livewire.on('Modificado', mensaje=> {

        Swal.fire({

        icon: 'info',
        title: mensaje,
        timer: 1500
            })
        });

        livewire.on('Eliminado', mensaje=> {
            Swal.fire({
            title: mensaje,
            icon: 'warning',
            timer: 1500
            })
        });

        livewire.on('celular', mensaje=> {
            Swal.fire({
            title: mensaje,
            icon: 'success',
            timer: 1500
            })
        });

        livewire.on('usuario', mensaje=> {
            Swal.fire({
            title: mensaje,
            icon: 'success',
            timer: 1500
            })
        });
        
    </script>
</body>
</html>
