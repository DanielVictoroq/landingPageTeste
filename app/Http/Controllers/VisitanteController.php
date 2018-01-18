<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\VisitanteRequest;
use Illuminate\Support\Facades\Input;
use  App\Visitantee;
use App\Http\VisitanteDAO;
class VisitanteController extends Controller
{
     public function index()
      {
          return view('visitante');
	  }
    protected function adicionarVisitante()
    {
    	try
        {
            $visitanteDAO = new visitanteDAO;
        	$visitante = $visitanteDAO->inserir();
            return redirect('/')->with('cadastro', 'Cadastro realizado com sucesso!');
        }
        catch(Exception $e)
        {
            Log::error($e);
        }
    }
}
?>
