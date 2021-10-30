@extends('components.layout')


@section('content')
    <!-- Começo do header -->
 
    <div class="CTT-contGeral" id="gabtud">
      <div class="CTT-contForm" id="gab">
        <form>
          <label for="nome">Digite seu nome</label> <br />
          <input
            type="text"
            id="nome"
            name="nome"
            placeholder="Ex: João"
            size="50"
          />
          <br />

          <label for="numero">Digite seu número</label> <br />
          <input
            type="text"
            id="numero"
            name="numero"
            placeholder="Ex: (21)99999-9999"
          />
          <br />

          <label for="email"> Digite seu email</label> <br />
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Ex: joao@gmail.com"
            size="50"
          />
          <br />

          <label for="endereco">Digite seu endereço</label> <br />
          <input
            type="text"
            id="endereco"
            name="endereco"
            placeholder="Ex: Rua São Clemente"
            size="50"
          />
          <br />

          <label for="mensagem">Digite sua mensagem</label> <br />
          <textarea
            id="mensagem"
            name="mensagem"
            placeholder="Digite aqui"
            cols="51"
            rows="5"
          ></textarea>
          <br />

          <button type="submit" name="enviar">Enviar</button>
        </form>
      </div>

      <div class="CTT-contcContatos" id="textoContato">
        <h1>Contatos</h1>
        <p>entre em contato conosco</p>
        <br />
        <h2>Celular:</h2>
        <p>
          +55 (21)9999-99999 <br />
          +55 (21)9999-99999
        </p>
        <br />
        <h2>E-mail:</h2>
        <p>comercial@gmail.com</p>
        <br />
        <h2>Redes socias</h2>
        <div class="imgContato">
          <a href=""><img src="src/img/icon-facebook.png" alt="" /></a>
          <a href=""
            ><img src="src/img/icon-insta.png" class="icon-center" alt=""
          /></a>
          <a href=""><img src="src/img/icon-twt.png" alt="" /></a>
        </div>
      </div>
      </div>
    </div>
    

 @endsection