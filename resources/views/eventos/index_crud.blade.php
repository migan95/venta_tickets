@extends('layouts.admin')

@section('titulo')
    Eventos
@endsection

@section('contenido')

<div class="card shadow">
    <div class="card-header py-3">
        <p class="text-primary m-0 fw-bold">Eventos</p>
    </div>
    <div class="card-body">

<div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
<table class="table my-0" id="dataTable">
<thead>
    <tr>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Portada</th>
        <th>Precio</th>
        <th>Acciones</th>
    </tr>
</thead>
<tbody>
@foreach ($eventos as $evento)
<tr>
    <td>{{ $evento->titulo }}</td>
    <td>{{$evento->descripcion}}</td>
    <td>
        <img src="{{$evento->imagen}}" width="150px" heigth="70px">
    </td>
    <td>Q. {{$evento->precio * 1.5}}</td>
    <td>

    <table>
        <tr>
            <td>
                <a href="{{ route('eventos.edit',$evento->id) }}"><i class="fas fa-pencil-alt" style="font-size: 30px;" title="Editar"></i></a>
            </td>

            <td>
                <form action="{{ route('eventos.destroy',$evento->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button style="border:0;background:none;" type="submit"><i class="far fa-trash-alt" style="font-size: 30px;" title="Borrar"></i></button>
                </form>
            </td>
        </tr>
    </table>

    </td>
</tr>
@endforeach
</tbody>
</div>


</div></div>

</table>

@endsection
