@extends('layouts.main')

@if(Request::is('*/edit'))
@section('title', 'Editar Cliente')
@else
@section('title', 'Cadastrar Cliente')
@endif

@section('content')

@if(Request::is('*/edit'))
<section class="content_container">
  <div class="content_header">
    <a href="{{ route('clientes.index')}}" class="btn_back">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
        style="fill: rgba(255, 255, 255);transform: ;msFilter:;">
        <path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path>
      </svg>
    </a>
    <h1>Edite dos dados do cliente</h1>
  </div>
  <form action="{{ route('clientes.update') }}" class="form_create" method="POST">
    @csrf
    @method('PUT')
    <div class="form_item">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" value="{{ $cliente->nome}}" maxlength="50" autocomplete="off">
    </div>
    <div class="form_item">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" value="{{ $cliente->email}}" maxlength="50" autocomplete="off">
    </div>
    <div class="form_item">
      <label for="telefone">Telefone</label>
      <input type="tel" name="telefone" id="telefone" value="{{ $cliente->telefone}}" maxlength="9" autocomplete="off">
    </div>
    <div class="form_item">
      <label for="endereco">Endereço</label>
      <input type="text" name="endereco" id="endereco" value="{{ $cliente->endereco}}" maxlength="100" autocomplete="off">
    </div>
    <div class="form_item">
      <label for="cep">CEP</label>
      <input type="text" name="cep" id="cep" placeholder="Insira seu CEP" value="{{$cliente->cep}}" maxlength="10" autocomplete="off">
    </div>
    <div class="form_item">
      <label for="cpf">CPF</label>
      <input type="text" name="cpf" id="cpf" value="{{ $cliente->cpf }}" maxlength="15" autocomplete="off" onkeyup="cpf_mask()">
    </div>
    <button type="submit" class="btn_form_create">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"
        style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
        <path
          d="M4 21a1 1 0 0 0 .24 0l4-1a1 1 0 0 0 .47-.26L21 7.41a2 2 0 0 0 0-2.82L19.42 3a2 2 0 0 0-2.83 0L4.3 15.29a1.06 1.06 0 0 0-.27.47l-1 4A1 1 0 0 0 3.76 21 1 1 0 0 0 4 21zM18 4.41 19.59 6 18 7.59 16.42 6zM5.91 16.51 15 7.41 16.59 9l-9.1 9.1-2.11.52z">
        </path>
      </svg>
      <span>Editar</span>
    </button>
  </form>
</section>

@else

<section class="content_container">
  <div class="content_header">
    <a href="{{ route('clientes.index')}}" class="btn_back">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
        style="fill: rgba(255, 255, 255);transform: ;msFilter:;">
        <path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path>
      </svg>
    </a>
    <h1>Realize o cadastro do cliente</h1>
  </div>
  <form action="{{ route('clientes.add') }}" class="form_create" method="POST">
    @csrf
    <div class="form_item">
      <label for="nome">Nome</label>
      <input class="@error('nome') input_invalid @enderror" type="text" name="nome" id="nome"
        placeholder="Nome completo" maxlength="50" autocomplete="off">
      @error('nome')
      <div class="input_alert">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form_item">
      <label for="email">Email</label>
      <input class="@error('email') input_invalid @enderror" type="email" name="email" id="email"
        placeholder="aaa@example.com" maxlength="50" autocomplete="off">
      @error('email')
      <div class="input_alert">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form_item">
      <label for="telefone">Telefone</label>
      <input class="@error('telefone') input_invalid @enderror" type="tel" name="telefone" id="telefone"
        placeholder="(xx) x xxxx - xxxx" maxlength="9" autocomplete="off">
      @error('telefone')
      <div class="input_alert">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form_item">
      <label for="endereco">Endereço</label>
      <input class="@error('endereco') input_invalid @enderror" type="text" name="endereco" id="endereco"
        placeholder="Rua A, N° 1" maxlength="100" autocomplete="off">
      @error('endereco')
      <div class="input_alert">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form_item">
      <label for="cep">CEP</label>
      <input class="@error('cep') input_invalid @enderror" type="text" name="cep" id="cep" placeholder="Insira seu CEP" maxlength="8" autocomplete="off">
      @error('cep')
      <div class="input_alert">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form_item">
      <label for="cpf">CPF</label>
      <input class="@error('cpf') input_invalid @enderror" type="text" name="cpf" id="cpf" placeholder="000.000.000-00" maxlength="15" autocomplete="off">
      @error('cpf')
      <div class="input_alert">
        {{$message}}
      </div>
      @enderror
    </div>
    <button type="submit" class="btn_form_create">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
        style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
        <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
      </svg>
      <span>Cadastrar</span>
    </button>
  </form>
</section>

@endif
@endsection