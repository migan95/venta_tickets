<form action="{{ route('tickets.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="precio">Precio</label>
        <input id="precio" type="text" name="precio" placeholder="precio" class="form-control">
    </div>
    <div class="form-group">
        <label for="costo">Costo</label>
        <input id="costo" type="text" name="costo" placeholder="costo" class="form-control">
    </div>
    <div class="form-group">
        <label for="posicion">Posicion</label>
        <input id="posicion" type="text" name="posicion" placeholder="posicion" class="form-control">
    </div>
    <div class="form-group">
        <label for="codigo">Codigo</label>
        <input id="codigo" type="text" name="codigo" placeholder="codigo" class="form-control">
    </div>
    
    <button type="submit" value="Crear" class="btn btn-primary">Crear <i class="fas fa-user-plus"></i>
    </button>
</form>
