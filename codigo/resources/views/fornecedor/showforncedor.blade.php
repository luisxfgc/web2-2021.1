@extends('layouts.main')

@section('title', "Mostrar Fornecedores")

@section('content')
<section>
    <div class="col-12 text-center p-2">
        <h1>Fornecedores Cadastrados</h1>
    </div>

    <table class="table table-bordered table-hover text-center m-auto p-2 mt-2">
        <tr class="table-dark">
            <th>ID</th>
            <th>Nome do Fornecedor</th>
            <th>CNPJ</th>
            <th>Descrição</th>
            <th>Ações</th>

        </tr>
        <tr>
            @foreach ($fornecedor as $fornecedores)
            <td>{{$fornecedores->id}}</td>
            <td>{{$fornecedores->nome}}</td>
            <td>{{$fornecedores->cnpj}}</td>
            <td>{{$fornecedores->descricao}}</td>
            <td>
            <button type="button" class="btn btn-primary">Alterar</button>
            <button type="button" class="btn btn-danger">Excluir</button>
            </td>
        </tr>
            @endforeach
    </table>
</section>
@endsection
