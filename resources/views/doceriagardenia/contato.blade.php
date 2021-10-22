


<x-layout>
  
    
</x-layout>


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
    <h1 style="text-align: center;">Contatos</h1>
    <br>
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