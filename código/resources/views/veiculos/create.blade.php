@extends('layouts.main')

@if(Request::is('*/edit'))
  @section('title', 'Editar veículo')
@else
  @section('title', 'Cadastrar veículo')
@endif

@section('content')

@if(Request::is('*/edit'))
<section class="content_container">
  <div class="content_header">
    <a href="{{ route('veiculos.index')}}" class="btn_back">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
        style="fill: rgba(255, 255, 255);transform: ;msFilter:;">
        <path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path>
      </svg>
    </a>
    <h1>Edite dos dados do veículo</h1>
  </div>
  <form action="{{ route("veiculos.update") }}" class="form_create" method="POST">
    @csrf
    @method('PUT')
    <div class="form_item">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" value="{{ $produto->nome}}" maxlength="50" autocomplete="off">
    </div>
    <div class="form_item">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" value="{{ $produto->email}}" maxlength="50" autocomplete="off">
    </div>
    <div class="form_item">
      <label for="telefone">Telefone</label>
      <input type="tel" name="telefone" id="telefone" value="{{ $produto->telefone}}" maxlength="9" autocomplete="off">
    </div>
    <div class="form_item">
      <label for="ano">Endereço</label>
      <input type="text" name="endereco" id="endereco" value="{{ $produto->endereco}}" maxlength="100" autocomplete="off">
    </div>
    <div class="form_item">
      <label for="cep">CEP</label>
      <input type="text" name="cep" id="cep" placeholder="Insira seu CEP" value="{{$produto->cep}}" maxlength="10" autocomplete="off">
    </div>
    <div class="form_item">
      <label for="cpf">CPF</label>
      <input type="text" name="cpf" id="cpf" value="{{ $produto->cpf }}" maxlength="15" autocomplete="off" onkeyup="cpf_mask()">
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
    <a href="{{ route('veiculos.index')}}" class="btn_back">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
        style="fill: rgba(255, 255, 255);transform: ;msFilter:;">
        <path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path>
      </svg>
    </a>
    <h1>Realize o cadastro do Veículo</h1>
  </div>
  <form action="{{ route('veiculos.add') }}" class="form_create" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form_item">
      <div class="form_image_item">
        <span>Adicione uma imagem do veículo</span>
        <label for="image" class="input_image">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: rgb(255, 255, 255);transform: ;msFilter:;"><path d="M4 5h13v7h2V5c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h8v-2H4V5z"></path><path d="m8 11-3 4h11l-4-6-3 4z"></path><path d="M19 14h-2v3h-3v2h3v3h2v-3h3v-2h-3z"></path></svg>
          <span>Imagem</span>
          <input type="file" name="image" id="image">
        </label>
      </div>
    </div>
    <div class="form_item">
      <label for="nome">Nome</label>
      <input class="@error('nome') input_invalid @enderror" type="text" name="nome" id="nome"
        placeholder="Nome do veículo" maxlength="50">
      @error('nome')
      <div class="input_alert">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form_item">
      <label for="marca">Marca</label>
      <input class="@error('marca') input_invalid @enderror" type="text" name="marca" id="marca"
        placeholder="Marca do veículo" maxlength="50">
      @error('marca')
      <div class="input_alert">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form_item">
      <label for="ano">Ano</label>
      <input class="@error('ano') input_invalid @enderror" type="text" name="ano" id="ano"
        placeholder="Ano do veículo" maxlength="10">
      @error('ano')
      <div class="input_alert">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form_item">
      <label for="modelo">Modelo</label>
      <input class="@error('modelo') input_invalid @enderror" type="text" name="modelo" id="modelo"
        placeholder="Modelo do veículo" maxlength="50">
      @error('modelo')
      <div class="input_alert">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form_item">
      <label for="cor">Cor</label>
      <input class="@error('cor') input_invalid @enderror" type="text" name="cor" id="cor" placeholder="Cor do veículo" maxlength="20">
      @error('cor')
      <div class="input_alert">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form_item">
      <label for="placa">Placa</label>
      <input class="@error('placa') input_invalid @enderror" type="text" name="placa" id="placa" placeholder="Insira o número da placa" maxlength="50" autocomplete="off">
      @error('placa')
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