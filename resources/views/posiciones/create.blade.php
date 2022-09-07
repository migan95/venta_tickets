<form action="{{ route('posiciones.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="posiciones">Codigo</label>
        <input id="posiciones" type="text" name="posiciones" placeholder="posiciones" class="form-control">
    </div>
    
    <button type="submit" value="Crear" class="btn btn-primary">Crear <i class="fas fa-user-plus"></i>
    </button>
</form>
