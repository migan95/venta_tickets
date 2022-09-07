<html>
<body>
<h1>Mensaje: {{Session::get('mensaje') ?? ' '}}<h1>
<table class="table table-hover">
@foreach ($clasificacions as $clasificacion)
<tr>
    <td>{{ $clasificacion->nombre }}</td>
    <td>
        <form action="{{ route('clasificacions.destroy',$clasificacion->id) }}" method="POST">
            <a href="{{ route('clasificacions.show',$clasificacion->id) }}">ver</a>
            <a href="{{ route('clasificacions.edit',$clasificacion->id) }}">editar</a>

            @csrf
            @method('DELETE')
            <button type="submit">eliminar</button>
        </form>
    </td>
</tr>
@endforeach
</table>
</body>
</html>
