@extends('layouts.main')

@section('title', "Mostrar Clientes")

@section('content')
<div class="row p-2 text-center">
    <div class="col-12">
        <h2>Clientes Cadastrados</h2>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table table-bordered table-hover text-center m-auto p-2 mt-2">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome do Cliente</th>
                    <th>Débito</th>
                    <th>Descrição</th>
                    <th>Ações</th>
        
                </tr>
            </thead>
        
            @foreach ($clientes as $cliente)
            <tr class="text-capitalize">
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->debito}}</td>
                <td>{{$cliente->descricao}}</td>
                <td>
                <button type="button" class="btn btn-sm btn-primary">Alterar</button>
                <button type="button" class="btn btn-sm btn-danger">Excluir</button>
                </td>
            </tr>
                @endforeach
        </table>
    </div>
</div>
@endsection
