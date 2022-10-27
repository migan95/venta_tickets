@extends('layouts.admin')

@section('titulo')
    Eventos
@endsection

@section('contenido')

    <form action="{{ route('eventos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="titulo">Nombre</label>
                <input id="titulo" type="text" name="titulo" placeholder="Titulo" class="form-control">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input id="descripcion" type="text" name="descripcion" placeholder="Descripcion" class="form-control">
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input id="precio" type="text" name="precio" placeholder="Precio" class="form-control">
            </div>
        <div class="form-group">
            <label for="imagen">Agregar Imagen</label>
            <input type="file" class="form-control-file" id="imagen" name="imagen" accept=".jpg, .png, .git, .jpeg, .bmp, .tif, .tiff|image/*">
        </div>
            <button type="submit" value="Crear" class="btn btn-primary">Crear <i class="fas fa-user-plus"></i>
            </button>
        </form>

@endsection

