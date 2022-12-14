<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registrarse - Sistema Tickets</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/Nunito.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome-all.min.css')}}">
</head>

<body class="bg-gradient-primary">
<div class="container">
    <div class="card shadow-lg o-hidden border-0 my-5">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-flex">
                    <div class="flex-grow-1 bg-register-image" style="background-image: url('img/dogs/image2.jpeg');"></div>
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="text-dark mb-4">Crea una cuenta!</h4>
                        </div>
                        <form class="user" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-sm-6 col-xxl-12 mb-3 mb-sm-0"><input id="name" class="form-control form-control-user" type="text" placeholder="Nombre y Apellido" name="name" /></div>
                                <div class="col"><input id="telefono" class="form-control form-control-user" type="text" placeholder="5802-5942" name="telefono" /></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6 col-xxl-12 mb-3 mb-sm-0"><input id="dpi" class="form-control form-control-user" type="text" placeholder="2692-86985-0501" name="dpi" /></div>
                                <div class="col"><input id="nit" class="form-control form-control-user" type="text" placeholder="601175-6" name="nit" /></div>
                            </div>
                            <div class="mb-3">
                                <input class="form-control form-control-user" type="email" id="email" aria-describedby="emailHelp" placeholder="Ejemplo@test.com" name="email">
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="password" placeholder="Contrase??a" name="password"></div>
                                <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="password_confirmation" placeholder="Repetir Contrase??a" name="password_confirmation"></div>
                                <input type="hidden" id="role" name="role" value="2">
                            </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Registrarse</button>
                            <hr><a class="btn btn-primary d-block btn-google btn-user w-100 mb-2" role="button"><i class="fab fa-google"></i>&nbsp; Registrarse con Google</a><a class="btn btn-primary d-block btn-facebook btn-user w-100" role="button"><i class="fab fa-facebook-f"></i>&nbsp; Registrarse con Facebook</a>
                            <hr>
                        </form>
                        <div class="text-center"><a class="small" href="{{route('password.request')}}">Olvid?? contrase??a?</a></div>
                        <div class="text-center"><a class="small" href="{{route('dashboard')}}">Ya tienes cuenta? Inicia sesi??n!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/theme.js"></script>
</body>

</html>
