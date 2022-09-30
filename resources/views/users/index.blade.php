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
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                <option value="10" selected="">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>&nbsp;</label></div>
                </div>
                <div class="col-md-6">
                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Buscar"></label></div>
                </div>
            </div>
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>DPI</th>
                        <th>NIT</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><img class="rounded-circle me-2" width="30" height="30" src="{{asset('img/avatars/avatar3.jpeg')}}">Miguel Leon</td>
                        <td>mleons2@miumg.edu.gt</td>
                        <td>Administrador</td>
                        <td>2692869850501</td>
                        <td>6011756<br></td>
                        <td>30726021</td>
                        <td><i class="fas fa-pencil-alt" style="font-size: 30px;" title="Editar"></i><i class="far fa-trash-alt" style="font-size: 30px;" title="Borrar"></i></td>
                    </tr>
                    <tr></tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td><strong>Nombres</strong></td>
                        <td><strong>Email</strong></td>
                        <td><strong>Role</strong></td>
                        <td><strong>DPI</strong></td>
                        <td><strong>NIT</strong></td>
                        <td><strong>Telefono</strong></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                </div>
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
