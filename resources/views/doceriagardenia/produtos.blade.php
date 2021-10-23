@extends('components.layout')

@section('title','Doceria Gardenia - Contatos')

@section('content')

<br>
    <h1 style="text-align: center;">Produtos</h1>
    <br>

    <section class="third-cont">
      <section class="third-contp2">
       
        <article class="container">

        @foreach ( $produtos as $key => $produto )
              
              <div class="card-body">
                <img
                  src="{{ asset('/site/src/img/chocotone.png')}}"
                  alt=""
                />
                <div class="card-inf">
                  <h5>{{$produto->nome}}</h5>
                  <p> {{$produto->descricao}}</p>
                </div>
                <div class="card-footer">
                  <p>
                    <span id="price">R${{$produto->valor}}</span>
                  </p>
                  <div class="quantity">
                    <button id="sub">-</button>
                    <input type="text" id="qtyBox" value="0" />
                    <button id="add">+</button>
                    <img src="{{ asset('/site/src/img/icon-carrinho.png')}}" alt="" />
                  </div>
                </div>
              </div>  
  
              @endforeach
        </article>
    </section>
  </section>

@endsection