@extends('layouts.admin')

@section('Titulo')
    CRUD Usuarios
@endsection

@section('contenido')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Usuarios</p>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="tabla-usuarios">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>DPI</th>
                        <th>NIT</th>
                        <th>Telefono</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td><img class="rounded-circle me-2" width="30" height="30" src="{{asset($user->imagen)}}">{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role}}</td>
                            <td>{{$user->dpi}}</td>
                            <td>{{$user->nit}}</td>
                            <td>{{$user->telefono}}</td>
                            <td><a href="{{route('users.edit',$user->id)}}"><i class="fas fa-pencil-alt" style="font-size: 30px;" title="Editar"></i></a></td>
                            <td>
                            <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button style="border:0;background:none;" type="submit"><i class="far fa-trash-alt" style="font-size: 30px;" title="Borrar"></i></button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td><strong>Nombres</strong></td>
                        <td><strong>Email</strong></td>
                        <td><strong>Role</strong></td>
                        <td><strong>DPI</strong></td>
                        <td><strong>NIT</strong></td>
                        <td><strong>Telefono</strong></td>
                        <td><strong>Editar</strong></td>
                        <td><strong>Borrar</strong></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection


@section('footer')
    <script type="text/javascript">
        $(document).ready( function () {
            $('#tabla-usuarios').DataTable();
        } );
    </script>
@endsection
