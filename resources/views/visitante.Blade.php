<!DOCTYPE html>
 <html>

      <head>
          <meta charset="UTF-8">
          <title>Cadastro Visitante</title>
          <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
          <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Poiret+One|Righteous" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
          <link rel="stylesheet" type="text/css" href="/css/form.scss">
          <script src="/js/jquery.correios.min.js"></script>
          <script src="/js/jquery.mask.js"></script>
          <script src="/js/principal.js"></script>
      </head>
<body>
<h2>Consultoria Tec</h2>
<h4>O seu sucesso é o nosso sucesso!!</h4>
<div class="background">
</div>
<div class="background2">
</div>
<p>
  <p class="texto">Aqui temos o que você precisa para se dar bem em seu negócio, damos consultoria em todas as áreas que envolvem tecnologia
    , com profissionais altamente capacitados e 100% atualizado com o que há de novo no mercado tecnológico.</p>
    <p class="texto-negri">Cadastre-se agora mesmo! </p>
</p>
<div class="rodape">
<h3>Consultoria Tec</h3>
</div>
<section id="viewformulario" >
<h1>Favor efetuar seu cadastro conforme campos abaixo:</h1>
    <form class="form" action="create" method="post">
        <?=csrf_field()?>
     <div class="formulario">
            <div class="form-item nome">
                <input  type="text" name="nome" id="nome"
                placeholder="Nome Completo" onkeyup="valida(this)">
            </div>
            <div class="form-item email">
                <input  class="email  "type="email"  name="email" id="email"
                 placeholder="exemplo@gmail.com" onkeyup="valida(this)">
            </div>
            <div class="form-item nascimento">
                <input class="date" type="text"  name="nascimento" id="date" placeholder="Data de Nascimento" onkeyup="valida(this)">
            </div>
            <div class="form-item telefone">
                <input class="phone_with_ddd" type="text"
                placeholder="Telefone ex:31912345678" name="telefone" id="telefone">
            </div>
            <div class="form-item Cep">
                <input class="cep"  type="text"
                placeholder="CEP" name="cep" id="cep">
            </div>
            <div class="form-item rua">
                <input  type="text"  name="rua" id="rua"   placeholder="Rua.." readonly>
            </div>
            <div class="form-item numero">
                <input  type="number"  name="numero" id="numero"    placeholder="Número" >
            </div>
            <div class="form-item bairro">
                <input  type="text" name="bairro" id="bairro"   placeholder="Bairro" readonly >
            </div>
            <div class="form-item cidade">
                <input  type="text"  name="cidade" readonly id="cidade" placeholder="Cidade" >
            </div>
            <div class="form-item estado">
                <input  type="text"  name="estado" readonly id="estado" placeholder="Estado" >
            </div>
        </div>
        <button class="btn" type="submit"><span class="btn-text">ENVIAR</span></button>

    </form>
</section>
</body>
  </html>
