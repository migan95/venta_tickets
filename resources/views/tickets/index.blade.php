<html>
<h1>Mensaje: {{Session::get('mensaje') ?? ' '}}<h1>

<h2>Tickets comprados</h2>
<hr>
<table class="table table-hover">
<tr>
    <th>ID</th>
    <th>Costo</th>
    <th>Precio</th>
    <th>Posicion</th>
    <th>Codigo</th>
    <th>Evento ID</th>
</tr>
@foreach ($ticketsComprados as $ticket)
<tr>
    <td>{{ $ticket->id }}</td>
    <td>{{ $ticket->costo }}</td>
    <td>{{ $ticket->precio }}</td>
    <td>{{ $ticket->posicion }}</td>
    <td>{{ $ticket->codigo }}</td>
    <td>{{ $ticket->evento_id }}</td>
</tr>
@endforeach
</table>

<h2>Tickets Disponibles</h2>
<hr>
<table class="table table-hover">
<tr>
    <th>ID</th>
    <th>Costo</th>
    <th>Precio</th>
    <th>Posicion</th>
    <th>Codigo</th>
    <th>Evento ID</th>
    <th>Ordena</th>
</tr>
@foreach ($ticketsDisponibles as $ticket)
<tr>
    <td>{{ $ticket->id }}</td>
    <td>{{ $ticket->costo }}</td>
    <td>{{ $ticket->precio }}</td>
    <td>{{ $ticket->posicion }}</td>
    <td>{{ $ticket->codigo }}</td>
    <td>{{ $ticket->evento_id }}</td>
    <td>
        <form action="{{ route('carritos.store') }}" method="POST">
            <input type="hidden" id = 'ticket_id' name = 'ticket_id' value="{{ $ticket->id }}">
            @csrf
            <button type="submit">Agregar a carrito</button>
        </form>
    </td>
</tr>
@endforeach
</table>
</body>
</html>
