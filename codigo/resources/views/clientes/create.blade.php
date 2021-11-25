@extends('layouts.main')

@section('title', "Cadastrar Clientes")

@section('content')

<div class="row p-2 text-center">
    <div class="col-12">
        <h2>Cadastro de Clientes</h2>
    </div>
</div>
<div class="row">
    <form class="form-floating" action="{{ route('store') }}" method="post" class="pb-2">
        @csrf
        <div class="form-floating mb-2">
            <input type="text" class="form-control" name="nome" id="nome" placeholder="nome">
            <label for="floatingInput">Nome</label>
        </div>
        
        <div class="form-floating mb-2">
            <input type="text" name="debito" id="debito" class="form-control" placeholder="debito">
            <label for="debito">Débito</label>
        </div>
        
        <div class="form-floating mb-4">
            <input type="text" name="descricao" id="descricao" class="form-control" placeholder="descricao">
            <label for="descricao">Descrição</label>
        </div>
        <div class="w-100 d-flex justify-content-center flex-column">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</div>

@endsection
