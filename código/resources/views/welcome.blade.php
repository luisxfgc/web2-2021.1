@extends('layouts.main')

@section('title', 'Página Inicial')

@section('content')
<div class="content_shop">
    <div class="content_shop_header">
        <h1>Fiat Uno</h1>
        <span>Ano/modelo 2022</span>
        <div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam odio explicabo suscipit accusantium
                perspiciatis eveniet eum! Consequuntur pariatur, odio ea eveniet cupiditate magnam quam nobis sint
                molestias perferendis, impedit sed aliquid nisi officia quae nulla facilis optio, nostrum eligendi
                tempore aspernatur voluptas sapiente eos neque! Libero et explicabo sit id!</p>
        </div>
    </div>
    <div class="content_shop_info">
        <img src="https://auto.everyeye.it/public/immagini/26082020/fiat_notizia-2.jpg" alt="Carro">
        <h4>Preço: R$42,990,00</h4>
        <button class="btn_form_create">Comprar</button>
    </div>
</div>

@endsection