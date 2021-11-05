@extends('components.layout')

@section('title','Doceria Gardenia - Conheça Nossos Maravilhosos Podutos')

@section('inicio', 'Produto')

@section('content')

<div id="mensagem" class="alert alert-success top-0 start-50 translate-middle-x toasts-top-right fixed " style="display: none" >
  
</div>

    <section class="third-cont">
      <section class="third-contp2">
       
        <article class="container">
       
        @foreach ( $produtos as $key => $produto )
              
        {{-- <div class="card card-primary col-5">
          {{ Form::open(array('class' => 'addProduto' )) }}  
          {{ Form::hidden('produto_id', $produto->id) }}
          {{ Form::hidden('nome', $produto->nome, array('id' => 'nome' )) }}
          {{ Form::hidden('valor', $produto->valor) }}
            <div class="card-body">
              <div class="form-group">
                {{ $produto->nome}}
              </div>
              <div class="form-group">
                {{ $produto->valor}}
              </div>
              <div class="form-group">
                {{ $produto->descricao}}
              </div>    
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <div class="row g-3">
                <div class="col-12">
                  {{ Form::label('quantidade', 'Quantidade' , ['class' => 'form col-12 ']) }} 
                 
                </div>
                <div class="col-4">
                  {{ Form::number('quantidade', 1, array('class' => 'form-control ', 'min' => '1')) }}
                </div>
                <div class="col-4">
                  {{ Form::submit('Adicionar ao Carrinho', array('class' => 'btn btn-primary ' )) }}
                </div>
              </div>
            </div>
            {{ Form::close() }} --}}



             
            <div class="card-body">
              {{ Form::open(array('class' => 'addProduto' )) }}  
              {{ Form::hidden('produto_id', $produto->id) }}
              {{ Form::hidden('nome', $produto->nome, array('id' => 'nome' )) }}
              {{ Form::hidden('valor', $produto->valor) }}  
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
                  
                  {{ Form::number('quantidade', 1, array( 'min' => '1' )) }}
              
                  <button class="carrinho" type="submit">
                  <img src="{{ asset('/site/src/img/icon-carrinho.png')}}" alt="" />
              </button>
                </div>
              </div>
              {{ Form::close() }}
            </div>  
       
     
            
              @endforeach
        </article>
    </section>
  </section>

@endsection

@section('script')

<script>

$(function()
      {
       $('form[class="addProduto"]').submit(function(event)
       {
        event.preventDefault();
        setTimeout(function() {
   $('#mensagem').fadeOut(1000);
}, 2000);

      $.ajax({
        type: "post",
        url: "{{ route('doceriagardenia.addProduto') }}",
        data: $(this).serialize(),
        dataType: "json",
        success: function (response) {
         
          $("#mensagem" ).empty();
          $('#mensagem').show();
          $('#mensagem').append(response.message);


        }
      });

       });



      });
</script>


@endsection
