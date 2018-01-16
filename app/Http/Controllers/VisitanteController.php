<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
include("Visitantee.php");
class VisitanteController extends Controller
{
     public function index()
      {
          return view('visitante');
	  }

   public function inserir(){
     function __autoload( $nomeDaClasse ){
  if(file_exists( $nomeDaClasse .".php"  )){
    include($nomeDaClasse .".php");
  }
  else{
    echo "Não foi possível carregar a classe";
  }

$nome = $_POST['nome'];
$datadenascimento =  $_POST['datadenascimento'];
$email =  $_POST['email'];
$celular =  $_POST['celular'];
$cep =  $_POST['cep'];
$rua =  $_POST['rua'];
$numero =  $_POST['numero'];
$bairro =  $_POST['bairro'];
$cidade =  $_POST['cidade'];
$estado =  $_POST['estado'];

$novoVisitante = new Visitantee();
$novoVisitante->iniciaVisitante($nome , $datadenascimento , $celular ,	$cep, $rua , $numero , $bairro , $cidade , $estado);
$novoVisitante->insereVisitante();

return view('visitante');
}
}
}
?>
