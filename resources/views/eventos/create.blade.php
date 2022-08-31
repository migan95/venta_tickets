<form action="{{ route('eventos.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input id="nombre" type="text" name="nombre" placeholder="Nombre" class="form-control">
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
        <label for="costo">Costo</label>
        <input id="costo" type="text" name="costo" placeholder="Costo" class="form-control">
    </div>
    
    <button type="submit" value="Crear" class="btn btn-primary">Crear <i class="fas fa-user-plus"></i>
    </button>
</form>
