@extends('layouts.admin')

@section('titulo')
    Tickets
@endsection

@section('contenido')
    @if(!empty($eventos))
    @php
        $total = 0
    @endphp
    @foreach ($eventos as $evento)
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold">Evento: {{ $evento->nombre }}</p>
            </div>
            <div class="card-body">
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable">
                        <thead>
                        <tr>
                            <th>Cantidad</th>
                            <th>Localizacion</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($evento->tickets as $ticket)
                        <tr>
                            <td>1</td>
                            <td>{{ $ticket->posicion }}</td>
                            <td>{{ number_format($ticket->precio, 2, '.', ',') }}</td>
                            @php
                                $total = $total + $ticket->precio
                            @endphp
                            <td>
                            <form style='display:inline;' action="{{ route('tickets.update',$ticket->id) }}" method="POST">
                                <input type="hidden" id="id" type="text" name="id" value="{{ $ticket->id }}">

                                @csrf
                                @method('PUT')
                                <button style="border:0;background:none;" alt="Comprar" type="submit"><i class="fa fa-money-bill-wave" alt="Comprar"></i></button>
                            </form>

                            <span> &nbsp; &nbsp; </span>

                            <form style='display:inline;' action="{{ route('carritos.destroy',$ticket->carrito_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button style="border:0;background:none;" type="submit"><i class="far fa-trash-alt" alt="Eliminar"></i></button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endforeach
    @else
    <p class="text-primary m-0 fw-bold">Sin eventos</p>
    @endif
@endsection
