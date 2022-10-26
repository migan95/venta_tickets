<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Forgotten Password - Brand</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/Nunito.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome-all.min.css')}}">
</head>

<body class="bg-gradient-primary">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex">
                            <div class="flex-grow-1 bg-password-image" style="background-image: url('img/dogs/image1.jpeg');"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-2">Olvidó contraseña?</h4>
                                    @if(session('status'))
                                        <p class="mb-4" style="color: green">Un link de verificación ha sido enviado al correo electronico proporcionado!</p>
                                    @else
                                        <p class="mb-4">Por favor ingrese su correo en la parte inferior para recibir un link de recuperación de contraseña</p>
                                    @endif
                                </div>
                                <form class="user" method="POST" action="{{route('password.email')}}">
                                    @csrf
                                    <div class="mb-3"><input class="form-control form-control-user" type="email" id="email" aria-describedby="emailHelp" placeholder="Correo Electrónico" name="email"></div><button class="btn btn-primary d-block btn-user w-100" type="submit">Reiniciar contraseña</button>
                                </form>
                                <div class="text-center">
                                    <hr><a class="small" href="{{route('register')}}">No tienes cuenta?</a>
                                </div>
                                <div class="text-center"><a class="small" href="{{route('dashboard')}}">Ya tienes cuenta? Inicia Sesión!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/theme.js')}}"></script>
</body>

</html>
