@extends('layouts.main')

@section('title', "Mostrar Fornecedores")

@section('content')
    <section class="fornecedorHeader">
            <h1>Página de Fornecedores</h1>

        <table style="width:80%; margin-top: 2rem;">
            <tr>
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
                    <button>Alterar</button>
                    <button>Excluir</button>
                </td>
            </tr>
                @endforeach
        </table>
    </section>
@endsection
