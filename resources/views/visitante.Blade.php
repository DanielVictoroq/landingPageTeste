<!DOCTYPE html>
 <html>
      <head>
          <meta charset="UTF-8">
          <title>Cadastro Visitante</title>
          <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
          <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      </head>
<body>
<script src="jquery.js"></script>
<script src="jquery.correios.min.js"></script>
<section id="view-formulario" class="formulario">
<h1>Cadastro de Visitante</h1>
{!! Form::open(['route'=>'visitante/create', 'method'=>'post'])!!}

@include('input',['label'=>'Nome','input'=>'nome', 'attributes' => ['placeholder'=> 'Nome Completo'] ])
@include('input',['label'=>'E-mail','input'=>'email', 'attributes' => ['placeholder'=> 'example@example.com'] ])
@include('input',['label'=>'Telefone','input'=>'celular', 'attributes' => ['placeholder'=> ''] ])
@include('date',['label'=>'Data de Nascimento','input'=>'datadenascimento', 'attributes' => ['placeholder'=> ''] ])
@include('input',['label'=>'CEP','input'=>'cep', 'attributes' => ['placeholder'=> 'CEP'] ])
@include('input',['label'=>'Rua','input'=>'rua', 'attributes' => ['placeholder'=> ''] ])
@include('input',['label'=>'Número','input'=>'numero', 'attributes' => ['placeholder'=> ''] ])
@include('input',['label'=>'Cidade','input'=>'cidade', 'attributes' => ['placeholder'=> ''] ])
@include('input',['label'=>'UF','input'=>'Estado', 'attributes' => ['placeholder'=> ''] ])

{!!Form::submit('Enviar')!!}
{!!Form::close()!!}
</section>
<script>
jQuery(function($){
    correios.init( 'TNAGKTXBjltetcFkw5c482suOfLojTc3', '7duzOc6zV3gSssHm2Z0uhUsLU0j3rUUb97hgVPqcJ1bPRzoN' );
    $('cep').correios( 'rua', 'bairro', 'cidade', 'estado','loading');
});
(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define(['jquery'], factory);
    } else if (typeof module === 'object' && module.exports) {
        // Node/CommonJS
        module.exports = function( root, jQuery ) {
            if ( jQuery === undefined ) {
                // require('jQuery') returns a factory that requires window to
                // build a jQuery instance, we normalize how we use modules
                // that require this pattern but the window provided is a noop
                // if it's defined (how jquery works)
                if ( typeof window !== 'undefined' ) {
                    jQuery = require('jquery');
                }
                else {
                    jQuery = require('jquery')(root);
                }
            }
            factory(jQuery);
            return jQuery;
        };
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function( $ ){

    correios = {
        init: function( app_key, app_secret ) {
            window.correios_app_key = app_key;
            window.correios_app_secret = app_secret;
        }
    }

   $.fn.correios = function( endereco, bairro, cidade, uf, loading ) {

       var err;
       if(typeof correios_app_key === 'undefined') { console.log('Informe o app_key da sua aplicação dos Correios.'); err = true; }
       if(typeof correios_app_secret === 'undefined') { console.log('Informe o app_secret da sua aplicação dos Correios.'); err = true; }
       if (err) return false;

       window.c_endereco = endereco;
       window.c_bairro = bairro;
       window.c_cidade = cidade;
       window.c_uf = uf;
       window.c_loading = loading;

       $(this).on('keyup', function(){

           cep = $(this).val().replace(/[^0-9]/g,'');

           if (cep.length == 8){

                if(c_loading) $( c_loading ).show();

                $.getJSON( "https://webmaniabr.com/api/1/cep/"+cep+"/?app_key="+correios_app_key+"&app_secret="+correios_app_secret, function( data ) {

                    if (c_loading) $( c_loading ).hide();
                    if (c_endereco) $( endereco ).val( data.endereco );
                    if (c_bairro) $( bairro ).val( data.bairro );
                    if (c_cidade) $( cidade ).val( data.cidade );
                    if (c_uf) $( uf ).val( data.uf );

                });

           }

       });

       return this;

   };
}));
</script>
</body>
  </html>
