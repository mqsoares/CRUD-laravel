@extends('clients.layout')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Clientes</h2>
                    </div>
                    <div class="card-body">
                        <a href="" class="btn btn-success">Add Cliente</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Tel</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Miqueias</td>
                                    <td>mqseraos@gmail.com</td>
                                    <td>83 99653-2700</td>
                                    <td>
                                        <a href="" class="btn btn-primary">Visualizar</a>
                                        <a href="" class="btn btn-warning">Editar</a>
                                        <a href="" class="btn btn-danger">Apagar</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
