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
    <title>Quem Somos Doceria Gardenia</title>
</head>
<body>
    <header id="header" class="header">
    <a id="logo" class="logo" href="{{ route('site.index') }}">
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
          <li><a href="{{ route('site.index') }}">inicio</a></li>
          <li><a href="{{ route('site.quemSomos') }}">quem somos</a></li>
          <li><a href="{{ route('site.produtos') }}">produtos</a></li>
          <li><a href="{{ route('site.promocao') }}">promoção</a></li>
          <li><a href="{{ route('site.contato') }}">contato</a></li>
          <li>
            <a href="{{ route('site.carrinho') }}"><img src="{{ asset('/site/src/img/icon-carrinho.png')}}" alt="" srcset="" /></a>
          </li>
        </ul>
        </nav>
      </header>
    <br>
    <h1 style="text-align: center;">Quem Somos</h1>
    <section class="intro-quemsomos">
      <img
        src="https://static.zerochan.net/Levi.Ackerman.full.2271834.jpg"
        alt=""
        srcset=""
      />
    </section>
    <br />

    <section class="QS-containerGeral">
      <ul>
        <li class="QS-containerConteudo">
            <article>
            <div class="infromacoes">
              <h2>Gardênia</h2>
              <p>
                A Doceria Gardênia é uma micro-empresa que foi criada em outubro
                de 2019 e seu nome oficial foi dado em fevereiro de 2020. Em seu
                nascimento tiveram participação importante de seus amigos e
                parentes, que passaram a incentivar na produção e início de um
                próprio negócio. A partir de uma pesquisa em sua comunidade,
                observou-se que seu produto tinha potencial para ganhar lugar no
                mercado. Seu objetivo foi verificar a qualidade de seus produtos
                primários (Donuts e Bolos) e após os positivos resultados, o
                produto que obteve mais destaque foi o donuts. Tornando-se o
                "Queridinho da casa".
              </p>
            </div>
            <img
              src="https://static1.purebreak.com.br/articles/0/49/71/0/@/216582-gravacoes-de-deadpool-2-devem-comecar-200x200-3.jpg"
              alt="Donuts"
            />
          </article>
        </li>
        <br />

        <li class="QS-containerConteudo">
            <article>
          <img
            src="https://static1.purebreak.com.br/articles/0/49/71/0/@/216582-gravacoes-de-deadpool-2-devem-comecar-200x200-3.jpg"
            alt="Donuts"
          />
          <div class="infromacoes">
            <h2>Missão</h2>
            <p>
              Para entregar um produto nesses padrões, uso materiais de boa
              qualidade, faço uma boa higiene no local de trabalho e sempre faço
              pesquisa de preço p manter o custo-benefício dos clientes
            </p>
          </div>
          <article/>
        </li>
        <br />

        <li class="QS-containerConteudo">
            <article>
          <div class="infromacoes">
            <h2>Visão</h2>
            <p>
              Sucesso pra mim não é necessariamente ficar rica, vejo isso como a
              consequência de um bom trabalho. Sucesso para mim é fazer algo e
              ter pessoas satisfeitas com isso. Ter clientes satisfeitos não tem
              preço, é ótimo receber bons feedbacks e ver um cliente fidelizar.
            </p>
          </div>
          <img
            src="https://static1.purebreak.com.br/articles/0/49/71/0/@/216582-gravacoes-de-deadpool-2-devem-comecar-200x200-3.jpg"
            alt="Donuts"
          />
          <article/>
        </li>
        <br />

        <li class="QS-containerConteudo">
            <article>
          <img
            src="https://static1.purebreak.com.br/articles/0/49/71/0/@/216582-gravacoes-de-deadpool-2-devem-comecar-200x200-3.jpg"
            alt="Donuts"
          />
          <div class="infromacoes">
            <h2>Valores</h2>
            <p>
              Um produto artesanal de boa qualidade, com cuidado nos mínimos
              detalhes, ou seja, o produto é bonito visualmente, gostoso e com
              um ótimo custo-benefício para o cliente, sempre.
            </p>
          </div>
          <article/>
        </li>
      </ul>
    </section>
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
            <a href=""><img src="src/img/icon-facebook.png" alt=""></a>
            <a href=""><img src="src/img/icon-insta.png" class="icon-center" alt=""></a>
            <a href=""><img src="src/img/icon-twt.png" alt=""></a>
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
              <li><a href="">(21) 9999-9999</a></li>
              <li><a href="">(21) 9999-9999</a></li>
              <li><a href="mailto:comercial@gmail.com">comercial@gmail.com</a></li>
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
 if (event.type === "touchstart") event.preventDefault();
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
</body>
</html>