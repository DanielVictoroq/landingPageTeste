<!DOCTYPE html>
 <html>
      <head>
          <meta charset="UTF-8">
          <title>Cadastro Visitante</title>
          <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
          <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

      </head>
<body>
<script src="jquery.js"></script>
<script src="jquery.correios.min.js"></script>
<h2>BEM VINDO AO SISTEMA DE CADASTRO</h2>
<div class="background">
</div>
<section id="view-formulario" class="formulario">

<h1>Favor efetuar seu cadastro conforme campos abaixo:</h1>
{!! Form::open(['route'=>'visitante/create', 'method'=>'post'])!!}

@include('input',['input'=>'nome', 'attributes' => ['placeholder'=> 'Nome Completo']])
@include('input',['input'=>'email', 'attributes' => ['placeholder'=> 'example@example.com'] ])
@include('input',['input'=>'celular', 'attributes' => ['placeholder'=> 'Celular']  ])
@include('date',['input'=>'datadenascimento', 'attributes' => ['placeholder'=> 'Data de Nascimento']])
@include('input',['input'=>'cep', 'attributes' => ['placeholder'=> 'CEP']])
@include('input',['input'=>'rua', 'attributes' => ['placeholder'=> 'Rua..']])
@include('input',['input'=>'numero', 'attributes' => ['placeholder'=> 'Número']])
@include('input',['input'=>'cidade', 'attributes' => ['placeholder'=> 'Cidade']])
@include('input',['input'=>'Estado', 'attributes' => ['placeholder'=> 'UF']])

{!!Form::submit('Enviar')!!}

{!!Form::close()!!}
</section>
</body>
  </html>
