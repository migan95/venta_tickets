<form action="{{ route('ticketposiciones.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="posicion">Posicion</label>
        <input id="posicion" type="text" name="posicion" placeholder="posicion" class="form-control">
    </div>
    
    <button type="submit" value="Crear" class="btn btn-primary">Crear <i class="fas fa-user-plus"></i>
    </button>
</form>
