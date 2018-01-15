<!DOCTYPE html>
<html>
@extends('Bootstrap')
<head>
    <title>Menu</title>
	<img src="logopuc1.jpg" alt="LOGOTIPO" class="img-rounded"  height="150" width="150">
	<h3 class="">Sistema de Cadastro<br/> Pet Shop </h3>
	<link rel="stylesheet" type = "text/css" href="bootstrap.css"/>
</head>
    <style>
        .bg {
            background: url("public\cach.jpg") center center;/*slide.jpg =>you image*/    
            width: 100%;
            height: 100%;
            background-size: cover;
            overflow: hidden;
			background-repeat: no-repeat;
        }
    </style>
<body> 
@if(Session::has('cadastro'))
    <div class="alert alert-info">
      {{Session::get('cadastro')}}
    </div>
@elseif(Session::has('consulta'))
    <div class="alert alert-info">
      {{Session::get('consulta')}}
    </div>
	
@endif
   
 <body align="center"> 
<div class="bg" align="center" >
</div>

<div class="row">
	<form class="col-xs-2" method="GET" action='{{ route( 'cliente/create' )}}'>
	<fieldset>
            <div class="form-group">
                <!-- Submit -->
                <div class="controls">
                   <input type="submit" name="submit" value="Cliente" class="btn btn-primary">
                </div>
            </div>
			</fieldset>
			</form>
			
    <form class="col-xs-2" method="GET" action='{{ route( 'veterinario/create' )}}'>
	<fieldset>
            <div class="form-group">
                <!-- Submit -->
                <div class="controls">
                    <input type="submit" name="submit" value="Veterinario" class="btn btn-primary">
                </div>
            </div>
			</fieldset>
			</form>
    <form class="col-xs-1" method="GET" action='{{ route( 'animal/create' )}}'>
	<fieldset>
            <div class="form-group">
                <!-- Submit -->
                <div class="controls">
                    <input type="submit" name="submit" value="Animal" class="btn btn-primary ">
                </div>
            </div>
			</fieldset>
			</form>
			
    <form class="col-xs-1" method="GET" action='{{ route( 'consulta/create' )}}'>
	<fieldset>
            <div class="form-group">
                <!-- Submit -->
                <div class="controls">
                    <input type="submit" name="submit" value="Agendar Consulta" class="btn btn-primary ">
                </div>
            </div>
			</fieldset>
			</form>
			
    <form class="col-xs-2" method="GET" action='{{ route( 'consulta/update' )}}'>
	<fieldset>
            <div class="form-group">
                <!-- Submit -->
                <div class="controls">
                    <input type="submit" name="submit" value="Consultar" class="btn btn-primary ">
                </div>
            </div>     
		    </fieldset>		
    </form>		

    <form class="col-xs-1" method="GET" action='{{ route( 'produto/create' )}}'>
	<fieldset>
            <div class="form-group">
                <!-- Submit -->
                <div class="controls">
                    <input type="submit" name="submit" value="Produto" class="btn btn-primary ">
                </div>
            </div> 
			</fieldset>
			</form>
			
    <form class="col-xs-1" method="GET" action='{{ route( 'venda/create' )}}'>
	<fieldset>
            <div class="form-group">
                <!-- Submit -->
                <div class="controls">
                    <input type="submit" name="submit" value="Venda" class="btn btn-primary">
                </div>
            </div>
			</fieldset>
    </form>
    </div>
</body>
</html>

