@extends('components.layout')

@section('title','Doceria Gardenia')

@section('inicio', 'Bem vindo')

@section('content')
    <!-- Começo do header -->
 
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<div id="mensagem" class="alert alert-success top-0 start-50 translate-middle-x toasts-top-right fixed " style="display: none" >
  
</div>
    <section class="frist-cont">
      <section class="container">
          <div class="conteudo1">
              <h2>A vida é curta! <br> Coma a sobremosa primeiro</h2>
              <hr/>
              <p>Seja Bem-vindo ao site da Doceria Gardêmia. Aqui você 
                  encontrará diversos de nossos deliciosos produtos e um 
                  pouco mais sobre nós.</p>
          </div>
          <div class="conteudo2">
              <form action="">
                 <a href="#conhecer"><button type="button" >conhecer</button></a>
                  <br>
                  <img src="{{ asset('/site/src/img/vector-setaBpttom.png')}}" alt="icon">
              </form>
          </div>
      </section>
  </section>
  <br>
  <!-- Final do primeiro container -->


<!-- Começo do carousel -->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('/site/src/img/1.png')}}" class="d-block w-100" alt="banner de promoção">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('/site/src/img/2.png')}}" class="d-block w-100" alt="Banner com produto">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('/site/src/img/3.png')}}" class="d-block w-100" alt="Banner com produto">
        </div>
      </div>
      <button id="conhecer" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <br>
    <!-- Final do carousel -->


<!-- Começo da Lista de produtos -->
    <section class="third-cont">
        <section class="third-contp2">
          <h2>Produtos</h2>
          <article class="container">
           
            @foreach ( $produtos as $key => $produto ) 
                <div class="card-body">
                  {{ Form::open(array('class' => 'addProduto' )) }}  
                  {{ Form::hidden('produto_id', $produto->id) }}
                  {{ Form::hidden('nome', $produto->nome, array('id' => 'nome' )) }}
                  {{ Form::hidden('valor', $produto->valor) }}  
                  @isset($produto->arquivos->first()->arquivo_name)
                  <img
                  src="{{ asset("storage/{$produto->arquivos->first()->arquivo_name}") }}"
                    alt=""
                  />
                  @endisset
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
          <a href="{{URL::to ('/produtos')}}">mais produtos</a>
      </section>
    </section>
    <br>
    <!-- Começo da Lista de produtos -->

<!-- Começo do Espaço sobre a doceria -->
    <section class="fourth-cont">
      <article class="container">
      
        <img src="{{ asset('/site/src/img/cozinheira.png')}}" alt="Cozinheira">
      
      <div class="cont-right">
        <h2>Sobre nós</h2>
        <h3>Seja Bem-Vindo</h3>
        <p>A Doceria Gardênia é uma micro-empresa que foi criada em outubro de 
          2019 com a participação importante de seus amigos e 
          parentes ao incentivar a produção e início de um <b style="color: #533375; font-weight: bold;">próprio negócio.</b></p>
        <button type="button"> <a href="{{URL::to ('/quemsomos')}}">conhecer</a></button>
      </div>
    </article>
    </section>

<!-- Final do Espaço sobre a doceria -->
<!--Começo do Espaço para por os comentários -->
<section class="slides"> 
  @foreach ($comentarios as $key => $comentario )
    
 
  <div class="body mySlides">
      <div class="sub-body">
      <div class="cliente">
          <img src="{{ asset('/site/src/img/leticia.png')}}" alt="fotodocliente" >
          <ul>
              <li>{{$comentario->nome}}</li>
              <li>cliente</li>
          </ul>
      </div>
      <div class="icons">
          <ul>
              <li><img src="{{ asset('/site/src/img/icon-facebook.png')}}" alt="icon"></li>
              <li><img src="{{ asset('/site/src/img/icon-insta.png')}}" alt="icon"></li>
              <li><img src="{{ asset('/site/src/img/icon-twt.png')}}" alt="icon"></li>
          </ul>
      </div>
  </div>
      <div>
          <p>{{$comentario->comentario}}</p>
      </div>
  </div>
  @endforeach
  
<div class="botoes">
<button class="w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

</section>

  @section('scriptSlide')
  <script>  
   /*Slideshow dos comentários*/
   var slideIndex = 1;
      showDivs(slideIndex);
      
      function plusDivs(n) {
        showDivs(slideIndex += n);
      }
      
      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        x[slideIndex-1].style.display = "block";  
      }

    /*Botão contador dentro dos cards*/
    let addBtn = document.querySelector('#add');
                  let subBtn = document.querySelector('#sub');
                  let qty = document.querySelector('#qtyBox');
            
                  addBtn.addEventListener('click', ()=>{
                    qty.value = parseInt(qty.value) + 1;
                  });
            
                  subBtn.addEventListener('click',()=>{
                    if (qty.value <= 0) {
                      qty.value = 0;
                    }
                    else{
                      qty.value = parseInt(qty.value) -1;
                    }
                  });
                  
  </script>
 @endsection
 
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
         
          $( "#mensagem" ).empty();
          $('#mensagem').show();
          $('#mensagem').append(response.message);


        }
      });

       });



      });
</script>


@endsection
 

 
 