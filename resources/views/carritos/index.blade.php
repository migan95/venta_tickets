<html>
<body>
<h1>{{Session::get('mensaje') ?? ' '}}<h1>
@if(!empty($eventos))
@php
    $total = 0
@endphp
@foreach ($eventos as $evento)
<h5>Evento: {{ $evento->nombre }}</h5>
<h6>Tickets</h6>
<table>
    <tr>
        <th>Cantidad</th>
        <th>Localizacion</th>
        <th>Precio</th>
    </tr>
    @foreach ($evento->tickets as $ticket)
    <tr>
        <td>1</td>
        <td>{{ $ticket->posicion }}</td>
        <td>{{ $ticket->precio }}</td>
        @php
            $total = $total + $ticket->precio
        @endphp
        <td>
            <form action="{{ route('carritos.destroy',$ticket->carrito_id) }}" METHOD="POST">
                @csrf
                @method('DELETE')
                <button type="submit">eliminar</button>
            </form>
            <form action="{{ route('tickets.update',$ticket->id) }}" method="POST">
                <input type="hidden" id="id" type="text" name="id" value="{{ $ticket->id }}">
                <input type="hidden" id="user_id" type="text" name="user_id" value="{{ 1 }}">
                @csrf
                @method('PUT')
                <button type="submit">Comprar</button>
            </form>
        </td>
    </tr>
    @endforeach
    <tr>
        <td></td>
        <td>Total:</td>
        <td>{{ $total }}</td>
        <td>
        </td>
    </tr>
</table>
@endforeach

@endif
</body>
</html>
