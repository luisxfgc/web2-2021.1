@extends('layouts.main')

@if(Request::is('*/edit'))
  @section('title', 'Editar funcionário')
@else
  @section('title', 'Cadastrar funcionário')
@endif

@section('content')

@if(Request::is('*/edit'))
<section class="content_container">
  <div class="content_header">
    <a href="{{ route('funcionarios.index')}}" class="btn_back"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255);transform: ;msFilter:;"><path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path></svg>
    </a>
    <h1>Edite dos dados do funcionário</h1>
  </div>
    <form action="{{ route("funcionarios.update") }}" class="form_create" method="POST">
      @csrf
      @method('PUT')
      <div class="form_item">
        <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" value="{{ $funcionario->nome}}">
    </div>
    <div class="form_item">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" value="{{ $funcionario->email}}">
    </div>
    <div class="form_item">
      <label for="telefone">Telefone</label>
      <input type="tel" name="telefone" id="telefone" value="{{ $funcionario->telefone}}">
    </div>
    <div class="form_item">
      <label for="endereco">Endereço</label>
      <input type="text" name="endereco" id="endereco" value="{{ $funcionario->endereco }}">
    </div>
    <div class="form_item">
      <label for="cpf">CPF</label>
      <input type="text" name="cpf" id="cpf" placeholder="Insira o seu CPF" value="{{$funcionario->cpf}}">
    </div>
    <div class="form_item">
      <label for="cpf">Cargo</label>
      <input type="text" name="cargo" id="cargo" value="{{ $funcionario->cargo}}">
    </div>
    <button type="submit" class="btn_form_create">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" style="fill: rgb(255, 255, 255);transform: ;msFilter:;"><path d="M4 21a1 1 0 0 0 .24 0l4-1a1 1 0 0 0 .47-.26L21 7.41a2 2 0 0 0 0-2.82L19.42 3a2 2 0 0 0-2.83 0L4.3 15.29a1.06 1.06 0 0 0-.27.47l-1 4A1 1 0 0 0 3.76 21 1 1 0 0 0 4 21zM18 4.41 19.59 6 18 7.59 16.42 6zM5.91 16.51 15 7.41 16.59 9l-9.1 9.1-2.11.52z"></path></svg>
      <span>Editar</span>
    </button>
  </form>
</section>

@else


<section class="content_container">
  <div class="content_header">
    <a href="{{ route('funcionarios.index')}}" class="btn_back"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255);transform: ;msFilter:;"><path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path></svg></a>
    <h1>Realize o cadastro do funcionário</h1>
  </div>
    <form action="{{ route('funcionarios.add') }}" class="form_create" method="POST">
      @csrf
    <div class="form_item">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Nome completo">
      </div>
    <div class="form_item">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="aaa@example.com">
      </div>
    <div class="form_item">
        <label for="telefone">Telefone</label>
        <input type="tel" name="telefone" id="telefone" placeholder="(xx) x xxxx - xxxx">
      </div>
    <div class="form_item">
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" id="endereco" placeholder="Rua A, N° 1">
      </div>
    <div class="form_item">
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00">
    </div>
    <div class="form_item">
        <label for="cep">Cargo</label>
        <input type="text" name="cargo" id="cargo" placeholder="Insira o cargo">
    </div>
    <button type="submit" class="btn_form_create">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);transform: ;msFilter:;"><path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path></svg>
      <span>Cadastrar</span>
    </button>
  </form>
</section>

@endif
@endsection
