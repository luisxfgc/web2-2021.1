@extends('layouts.main')

@section('title', "Cadastrar Fornecedores")

@section('content')
    <section class="w-75 m-auto">
        <div class="mb-4">
            <h2>Cadastro de Fornecedores</h2>
        </div>
        <form class="form-floating" action="{{ route('fornecedorstore') }}" method="post" class="pb-2">
            @csrf
            <div class="form-floating mb-2">
                <input type="text" class="form-control" name="nome" id="nome" placeholder="nome">
                <label for="floatingInput">Nome</label>
            </div>
        
            <div class="form-floating mb-2">
                <input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="cnpj">
                <label for="debito">CNPJ</label>
            </div>
            
            <div class="form-floating mb-4">
                <input type="text" name="descricao" id="descricao" class="form-control" placeholder="descricao">
                <label for="descricao">Descrição</label>
            </div>
            <div class="w-100 d-flex justify-content-center flex-column">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </section>
@endsection