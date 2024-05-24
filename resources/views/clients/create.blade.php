@extends('clients.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Cadastrar Novo Cliente</h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('client') }}" method="post">
                        {!!  csrf_field() !!}
                        <label>Nome</label><br>
                        <input type="text" name="name" id="name" class="form-control mb-3">
                        <label>Email</label><br>
                        <input type="email" name="email" id="email" class="form-control mb-3">
                        <label>Telefone</label><br>
                        <input type="text" name="phone" id="phone" class="form-control mb-4">
                        <input type="submit" class="btn btn-success w-25" value="Salvar"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
