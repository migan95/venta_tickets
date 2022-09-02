<form action="{{ route('clientestatuses.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input id="nombre" type="text" name="nombre" placeholder="Nombre" class="form-control">
    </div>
    
    <button type="submit" value="Crear" class="btn btn-primary">Crear <i class="fas fa-user-plus"></i>
    </button>
</form>
