<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
   
    <link rel="stylesheet" href="{{asset('/site/src/style.css')}}">
    <link rel="stylesheet" href="{{asset('/site/src/normalize.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="stylesheet" href="http://localhost/gardenia/public/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/gardenia/public/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="http://localhost/gardenia/public/vendor/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
     <header id="header" class="header">
      <a id="logo" class="logo" href="{{URL::to ('produto/create')}}">
        <img id="logo" class="logo" src="{{ asset('/site/src/img/logo-gardênia.png')}}" alt="" />
      </a>
      <nav id="nav" class="nav">
        <button
          id="btn-mobile" class="btn-mobile"
          aria-label="Abrir menu"
          aria-haspopup="true"
          aria-controls="menu"
          aria-expanded="false"
        >
          <span id="hamburger" class="hamburguer"></span>
         
        </button>
        <ul id="menu" class="menu" role="menu">
         <li><a href="{{URL::to ('/')}}">inicio</a></li>
          <li><a href="{{URL::to ('/quemsomos')}}">quem somos</a></li>
          <li><a href="{{URL::to ('/produtos')}}">produtos</a></li> 
         <li><a href="{{URL::to ('/promocoes')}}">promoção</a></li> 
         <li><a href="{{URL::to ('/contato')}}">contato</a></li> 
          <li>
            <a href="{{URL::to ('/carrinho')}}"><img src="{{ asset('/site/src/img/icon-carrinho.png')}}" alt="" srcset="" /></a>
          </li>
        </ul>
      </nav>
    </header>

    <br>
    <h1  style="text-align: center;">@yield('inicio')  </h1>
    <br>

    
   
@yield('content')




  <footer>
    <section class="container">
    <div>
        <h3>sobre</h3>
        <p>A Doceria Gardênia é uma micro-empresa que foi criada em 
            outubro de 2019 com a participação importante de seus amigos 
            e parentes ao incentivar a produção e início de um próprio negócio. </p>
    </div>
    
    <div>
        <h3>redes sociais</h3>
            <div class="icons">
        <a href=""><img src="{{ asset('/site/src/img/icon-facebook.png')}}" alt=""></a>
        <a href=""><img src="{{ asset('/site/src/img/icon-insta.png')}}" class="icon-center" alt=""></a>
        <a href=""><img src="{{ asset('/site/src/img/icon-twt.png')}}" alt=""></a>
            </div>
    </div>
    <div>
        <h3>pagamento</h3>
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
    </div>
    <div>
      <h3>contato</h3>
      <ol>
          <li><a href="">(21) 98210-9100</a></li>
         
          <li><a href="doceria.gardeniaa@gmail.com">doceria.gardeniaa@gmail.com</a></li>
      </ol>
  </div>
</section>
</footer>
<!-- Final do footer -->
<!-- Começo do copy -->
<section class="copy">
    
        <p><small>doceriagardenia - 2021 alguns direitos reservados</small></p>

</section>
<!-- Final do copy -->


<script>
                   
 /*Menu Hamburguer*/
const btnMobile = document.getElementById("btn-mobile");
function toggleMenu(event) {
  if (event.type == "touchstart") event.preventDefault();
  const nav = document.getElementById("nav");
  nav.classList.toggle("active");
  const active = nav.classList.contains("active");
  event.currentTarget.setAttribute("aria-expanded", active);
  if (active) {
    event.currentTarget.setAttribute("aria-label", "fechar menu");
  } else {
    event.currentTarget.setAttribute("aria-label", "abrir menu");
  }
}
btnMobile.addEventListener("click", toggleMenu);
btnMobile.addEventListener("touchstart", toggleMenu);

</script>
    
 

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@yield('scriptSlide')
@yield('script')
<script>

	  $("#CEP").focusout(function(){
    $("#rua").removeAttr('readonly');
    $("#bairro").removeAttr('readonly');
    
		$.ajax({
			url: 'https://viacep.com.br/ws/'+ $('#CEP').val()+'/json/unicode/',
			dataType: 'json',
			success: function(resposta){
				$("#rua").val(resposta.logradouro);
				$("#bairro").val(resposta.bairro);
				$("#numero").focus();
			}
		});
	});
  </script>
</body>
</html>