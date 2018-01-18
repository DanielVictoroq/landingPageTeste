<!DOCTYPE html>
@extends('principal')

@yield('conteudo')

@if(!empty($errors->all()))
<script>
   $(document).ready(()=>{
    esconde();
});
</script>
@endif
      <header class="mensagem">
              @if (session()->has('data'))

                  <h2 class="success-msg">Cadastro Realizado com sucesso</h2>
                  <script>
                      $(document).ready(()=>{
                          refazLayout();
                      });
                  </script>
              @endif

              <ul>
              @foreach($errors->all() as $error )

                   <li>{{$error}}</li>

              @endforeach
              </ul>

      </header>
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
<section id="atendente" >

<h1>Favor efetuar seu cadastro conforme campos abaixo:</h1>
</section>

        <main class="main">
            <div class="card">
                <form class="form" action="adiciona" method="post">
                    <?=csrf_field()?>
                 <div class="formulario">
                        <div class="form-item nome">
                            <label for="nome">Nome </label>
                            <input  type="text" name="nome" id="nome"
                            placeholder="Nome Completo" onkeyup="valida(this)">
                        </div>
                        <div class="form-item email">
                            <label for="email">Email </label>
                            <input  type="email"  name="email" id="email"
                            placeholder="exemplo@gmail.com" onkeyup="valida(this)">
                        </div>
                        <div class="form-item nascimento">
                            <label for="date">Data Nasc</label>
                            <input class="date" type="text"  name="nascimento" id="date"
                            placeholder="Data de Nascimento" onkeyup="valida(this)">
                        </div>
                        <div class="form-item telefone">
                            <label for="telefone">Telefone </label>
                            <input class="phone_with_ddd" type="text"
                            placeholder="ex:31912345678" name="telefone" id="telefone">
                        </div>
                        <div class="form-item Cep">
                            <label for="cep">CEP </label>
                            <input class="cep"  type="text"
                            placeholder="ex:00000000" name="cep" id="cep">
                        </div>
                        <div class="form-item rua">
                            <label for="rua">Rua</label>
                            <input  type="text"  name="rua" id="rua" readonly>
                        </div>
                        <div class="form-item numero">
                          <label for="numero">Numero </label>
                            <input  type="number"  name="numero" id="numero"   >
                        </div>
                        <div class="form-item bairro">
                            <label for="bairro">Bairro </label>
                            <input  type="text" name="bairro" id="bairro"  readonly >
                        </div>
                        <div class="form-item cidade">
                            <label for="cidade">Cidade </label>
                            <input  type="text"  name="cidade" readonly id="cidade"  >
                        </div>
                        <div class="form-item estado">
                            <label for="estado">Estado </label>
                            <input  type="text"  name="estado" readonly id="estado" >
                        </div>
                    </div>
                    <button class="btn" type="submit"><span class="btn-text">CADASTRAR</span></button>

                </form>
            </div>
        </main>

</body>
  </html>
