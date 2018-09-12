<!DOCTYPE html>
@extends('principal')

@section('page')

 <header class="mensagem">
        @if (session()->has('data'))
            <h2 class="success-msg">Cadastro Realizado com sucesso</h2>
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
<section id="viewformulario" >
<h1>Efetue seu cadastro e faça uma parceria conosco</h1>
<main class="main">
    <form class="form" action="visitante" method="post">
        <?=csrf_field()?>
     <div class="formulario">
            <div class="form-item nome">
                <input  type="text" name="nome" id="nome"
                placeholder="Nome Completo" onkeyup="valida(this)">
            </div>
            <div class="form-item email">
                <input  class="email  "type="email"  name="email" id="email"
                 placeholder="exemplo@gmail.com" onkeyup="valida(this)" >
            </div>
            <div class="form-item nascimento">
                <input class="date" type="text"  name="nascimento" id="date" placeholder="Data de Nascimento" onkeyup="valida(this)">
            </div>
            <div class="form-item telefone">
                <input class="phone_with_ddd" type="text"
                placeholder="Telefone ex:31912345678" name="celular" id="celular">
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
                <input  type="text"  name="cidade"  id="cidade" placeholder="Cidade" readonly >
            </div>
            <div class="form-item estado">
                <input  type="text"  name="estado"  id="estado" placeholder="Estado" readonly>
            </div>
        </div>
        <button class="btn" type="submit"><span class="btn-text">ENVIAR</span></button>
        <a>testee</a>

    </form>
  </main>
</section>
</body>
