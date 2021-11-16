@extends('layouts.main')

@section('title', "Mostrar Clientes")

@section('content')
    <section class="container d-flex flex-column p-4 align-items-sm-center">
            <h1>PÁGINA DE CLIENTES</h1>

        <table class="table table-hover text-center p-2">
            <tr>
                <th>ID</th>
                <th>Nome do Cliente</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Ações</th>

            </tr>
            @foreach ($clientes as $cliente)
            <tr class="text-capitalize">
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->endereco}}</td>
                <td>{{$cliente->telefone}}</td>
                <td>
                    <button>Alterar</button>
                    <button>Excluir</button>
                </td>
            </tr>
                @endforeach
        </table>
    </section>
@endsection
