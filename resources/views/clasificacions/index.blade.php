@extends('layouts.admin')

@section('titulo')
    Tickets
@endsection

@section('contenido')

<div class="card shadow">
    <div class="card-header py-3">
        <p class="text-primary m-0 fw-bold">Clasificaciones</p>
    </div>
    <div class="card-body">

<div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
<table class="table my-0" id="dataTable">
<thead>
    <tr>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>
</thead>
<tbody>
@foreach ($clasificacions as $clasificacion)
<tr>
    <td>{{ $clasificacion->nombre }}</td>
    <td>

    <a href="{{ route('clasificacions.edit',$clasificacion->id) }}"><i class="fas fa-pencil-alt" style="font-size: 30px;" title="Editar"></i></a>



            <form action="{{ route('clasificacions.destroy',$clasificacion->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button style="border:0;background:none;" type="submit"><i class="far fa-trash-alt" style="font-size: 30px;" title="Borrar"></i></button>
            </form>

    </td>
</tr>
@endforeach
</tbody>
</div>


</div></div>

</table>

@endsection
