@extends('layouts.admin')

@section('Titulo')
    Perfil de Usuario
@endsection

@section('contenido')
    @parent
    <div class="row mb-3">
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="{{asset('img/dogs/image2.jpeg')}}" width="160" height="160">
                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Cambiar Foto</button></div>
                </div>
            </div>
            <div class="card shadow mb-4"></div>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Información de Usuario</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="username"><strong>Usuario</strong></label><input class="form-control" type="text" id="username" placeholder="Usuario" name="username" value="{{$usuario->email}}"></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="email"><strong>Correo Electronico</strong></label><input class="form-control" type="email" id="email" placeholder="Correo Electronico" name="email" value="{{$usuario->email}}"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>Nombres</strong><br></label><input class="form-control" type="text" id="first_name" placeholder="Nombres" name="first_name" value="{{$usuario->name}}"></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="last_name"><strong>Apellidos</strong><br></label><input class="form-control" type="text" id="last_name" placeholder="Apellidos" name="last_name"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>NIT</strong><br></label><input class="form-control" type="text" id="nit" placeholder="NIT" name="nit" value="{{$usuario->nit}}"></div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3"><label class="form-label" for="last_name"><strong>DPI</strong><br></label><input class="form-control" type="text" id="dpi" placeholder="DPI" name="dpi" value="{{$usuario->dpi}}"></div>
                                    </div>
                                </div>
                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Guardar Información</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="card shadow"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 class="mb-4">Historial Tickets</h1>
        <div class="col-md-12">
            <div class="table-responsive">
                <!---
                <table class="table">
                    <thead>
                    <tr>
                        <th>Evento</th>
                        <th>Tipo de Evento</th>
                        <th>Ubicacion</th>
                        <th>Fecha</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Matrix</td>
                        <td>Pelicula</td>
                        <td>Cinepolis Miraflores</td>
                        <td>29/10/2022</td>
                    </tr>
                    <tr>
                        <td>Cata Vinos</td>
                        <td>Comida</td>
                        <td>Quesos y Vinos&nbsp;</td>
                        <td>29/10/2022</td>
                    </tr>
                    </tbody>
                </table>
                --->
            </div>
        </div>
    </div>
@endsection
