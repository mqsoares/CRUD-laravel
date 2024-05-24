@extends('clients.layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Editar Cliente</h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('clients/' . $clients->id) }}" method="post">
                        {!! csrf_field() !!}
                        @method("PATCH")
                        <input type="hidden" name="id" id="id" class="form-control mb-3" value="{{ $clients->id }}">
                        <label>Nome</label><br>
                        <input type="text" name="name" id="name" class="form-control mb-3" value="{{ $clients->name }}">
                        <label>Email</label><br>
                        <input type="text" name="email" id="email" class="form-control mb-3" value="{{ $clients->email }}">
                        <label>Telefone</label><br>
                        <input type="text" name="phone" id="phone" class="form-control mb-4" value="{{ $clients->phone }}">
                        <input type="submit" class="btn btn-success w-25" value="Editar"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
