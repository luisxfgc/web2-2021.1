@extends('layouts.main')

@section('title', "Cadastrar Fornecedores")

@section('content')
    <section class="w-75 m-auto">
        <div class="mb-4">
            <h2>Cadastro de Fornecedores</h2>
        </div>
        <form action="{{ route('fornecedorstore') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>

            <div class="form-group">
                <label for="cnpj">CNPJ</label>
                <input type="text" name="cnpj" id="cnpj" class="form-control">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" id="descricao" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </section>
@endsection
