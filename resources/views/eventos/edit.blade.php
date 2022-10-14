@extends('layouts.admin')

@section('titulo')
    Eventos
@endsection

@section('contenido')


<form action="{{ route('eventos.update', $evento->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input id="titulo" type="text" name="titulo" placeholder="Titulo" value="{{ $evento->titulo }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <input id="descripcion" type="text" name="descripcion" placeholder="descripcion" value="{{ $evento->descripcion }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="imagen">Portada</label>
        <input id="imagen" type="text" name="imagen" placeholder="imagen" value="{{ $evento->imagen }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="precio">Precio Costo</label>
        <input id="precio" type="text" name="precio" placeholder="precio" value="{{ $evento->precio }}" class="form-control">
    </div>

    <button type="submit" value="Editar" class="btn btn-primary">Editar <i class="fas fa-user-plus"></i>
    </button>
</form>
@endsection
