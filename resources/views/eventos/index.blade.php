@extends('layouts.admin')

@section('titulo')
    Eventos
@endsection

@section('Titulo')
Eventos Disponibles
@endsection


@section('contenido')
@php
    $aux = 0

@endphp
<div class="container">
<div class="row">
@foreach($eventos as $evento)
@if($aux !== 4)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$evento->titulo}}</h4>
                        <h6 class="text-muted card-subtitle mb-2">{{$evento->descripcion}}</h6><img src="{{$evento->imagen}}" width="150px">
                        <p class="card-text">Precio: Q.{{$evento->precio * 1.5}}</p><button class="btn btn-primary" type="button">Agregar al carrito</button><a href="/eventos/{{$evento->id}}" class="btn"><i class="fas fa-info"></i></a>
                    </div>
                </div>
            </div>
        @else
    @php
    $aux = 0;
    @endphp

        @endif
@endforeach


</div> <!--- Cerradura Row ---->
</div> <!--- Cerradura Container ---->
@endsection
