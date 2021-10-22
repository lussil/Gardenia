<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="{{asset('/site/src/style.css')}}">
    <link rel="stylesheet" href="{{asset('/site/src/normalize.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Doceria Gardenia</title>
</head>
<body>
    <!-- Começo do header -->
    <header id="header" class="header">
      <a id="logo" class="logo" href="">
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
          <script src="script.js"></script>
        </button>
        <ul id="menu" class="menu" role="menu">
         <li><a href="{{URL::to ('produto/create')}}">inicio</a></li>
          <li><a href="{{URL::to ('produto/create')}}">quem somos</a></li>
          <li><a href="{{URL::to ('produto/create')}}">produtos</a></li> 
         <li><a href="{{URL::to ('produto/create')}}">promoção</a></li> 
         <li><a href="{{URL::to ('produto/create')}}">contato</a></li> 
          <li>
            <a href="{{URL::to ('produto/create')}}"><img src="{{ asset('/site/src/img/icon-carrinho.png')}}" alt="" srcset="" /></a>
          </li>
        </ul>
      </nav>
    </header>
    <br>
    <!-- Final do header -->