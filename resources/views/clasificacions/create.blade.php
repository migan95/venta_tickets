<form action="{{ route('clasificacions.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input id="nombre" type="text" name="nombre" placeholder="Nombre" class="form-control">
    </div>
    <div class="form-group">
        <label for="edad_minima">Edad Minima</label>
        <input id="edad_minima" type="text" name="edad_minima" placeholder="edad_minima" class="form-control">
    </div>
    <div class="form-group">
        <label for="edad_maxima">Edad Maxima</label>
        <input id="edad_maxima" type="text" name="edad_maxima" placeholder="edad_maxima" class="form-control">
    </div>
    
    <button type="submit" value="Crear" class="btn btn-primary">Crear <i class="fas fa-user-plus"></i>
    </button>
</form>
