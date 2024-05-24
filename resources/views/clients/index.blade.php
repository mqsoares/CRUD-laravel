@extends('clients.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Clientes</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/clients/create') }}" class="btn btn-success w-25">Add Cliente</a>
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
                        @foreach ($clients as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>
                                    <a href="" class="btn btn-primary">Visualizar</a>
                                    <a href="" class="btn btn-warning">Editar</a>
                                    <a href="" class="btn btn-danger">Apagar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
