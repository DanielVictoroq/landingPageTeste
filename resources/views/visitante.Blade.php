<!DOCTYPE html>
 <html>
      <head>
          <meta charset="UTF-8">
          <title>Cadastro Visitante</title>
          <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
          <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
      </head>
<body>
<section id="view-formulario" class="formulario">
<h1>Cadatro de Visitante</h1>
{!! Form::open(['route'=>'visitante/create', 'method'=>'post'])!!}
<label>
{!!Form::text ('nome',null, ['class'=>'input', 'placeholder'=>"Nome Completo"]);!!}
</label>
<label>
{!!Form::text ('email',null, ['class'=>'input', 'placeholder'=>"E-mail"]);!!}
</label>
<label>
{!!Form::text ('celular',null, ['class'=>'input', 'placeholder'=>"(ddd)número"]);!!}
</label>
<label>
{!!Form::date ('datadenascimento',null, ['class'=>'input']);!!}
</label>
<label>
{!!Form::text ('cep',null, ['class'=>'input','placeholder'=>"CEP"]);!!}
</label>
<label>
{!!Form::text ('rua',null, ['class'=>'input','placeholder'=>"RUA"]);!!}
</label>
<label>
{!!Form::text ('bairro',null, ['class'=>'input','placeholder'=>"Bairro"]);!!}
</label>
<label>
{!!Form::text ('cidade',null, ['class'=>'input', 'placeholder'=>"Cidade"]);!!}
</label>
<label>
{!!Form::text ('Estado',null, ['class'=>'input', 'placeholder'=>"Estado"]);!!}
</label>
{!!Form::submit('Enviar')!!}
{!!Form::close()!!}
</section>
</body>
  </html>
