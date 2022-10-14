<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Sistema Tickets</title>
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/Nunito.css")}}">
    <link rel="stylesheet" href="{{asset("fonts/fontawesome-all.min.css")}}">
</head>

<body class="bg-gradient-primary">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-10">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex">
                            <div class="flex-grow-1 bg-login-image" style="background-image: url('img/dogs/image3.jpeg')";></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    @if(session('mensaje'))
                                        <h4 class="text-dark mb-4">{{session('mensaje')}}</h4>
                                    @else
                                        <h4 class="text-dark mb-4" dusk="titulo-login">Bienvenido!</h4>
                                    @endif
                                </div>
                                <form class="user" method="POST" action="/login">
                                    @csrf
                                    <div class="mb-3"><input class="form-control form-control-user" type="email" id="email" aria-describedby="emailHelp" placeholder="Correo Electronico" name="email"></div>
                                    <div class="mb-3"><input class="form-control form-control-user" type="password" id="password" placeholder="Contraseña" name="password"></div>
                                    <div class="mb-3">
                                        <div class="custom-control custom-checkbox small">
                                            <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Recordarme</label></div>
                                        </div>
                                    </div><button class="btn btn-primary d-block btn-user w-100" type="submit" dusk="boton-login">Iniciar Sesión</button>
                                    <hr><a class="btn btn-primary d-block btn-google btn-user w-100 mb-2" role="button"><i class="fab fa-google"></i>&nbsp; Iniciar con Google</a><a class="btn btn-primary d-block btn-facebook btn-user w-100" role="button"><i class="fab fa-facebook-f"></i>&nbsp; Iniciar con Facebook</a>
                                    <hr>
                                </form>
                                <div class="text-center"><a class="small" href="{{route('password.request')}}">Olvidó contraseña?</a></div>
                                <div class="text-center"><a class="small" href="{{route('register')}}">Registrate!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
<script src="{{asset("js/bs-init.js")}}"></script>
<script src="{{asset("js/theme.js")}}"></script>
</body>

</html>
