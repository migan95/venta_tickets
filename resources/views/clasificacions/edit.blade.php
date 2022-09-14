<form action="{{ route('clasificacions.update', $clasificacion->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input id="nombre" type="text" name="nombre" placeholder="Nombre" value="{{ $clasificacion->nombre }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="edad_minima">Edad Minima</label>
        <input id="edad_minima" type="text" name="edad_minima" placeholder="edad_minima" value="{{ $clasificacion->edad_minima }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="edad_maxima">Edad Maxima</label>
        <input id="edad_maxima" type="text" name="edad_maxima" placeholder="edad_maxima" value="{{ $clasificacion->edad_maxima }}" class="form-control">
    </div>

    <button type="submit" value="Crear" class="btn btn-primary">Editar <i class="fas fa-user-plus"></i>
    </button>
</form>
