<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
	public function inserir()
    {
      $data = Input::all();
        try
        {
            DB::beginTransaction();
            $visitante = $this->setData();
            $visitante->save();
            DB::commit();
            return $visitante;
            return redirect('/')->with('cadastro', 'Cadastro realizado com sucesso!');
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }
	    public function setData($visitante='')
    {
        if(empty($visitante))
        $visitantea = new VisitanteController();
        if(!empty($nome = Input::get('nome')))
        {
            $visitantea->nome = $nome;
        }
        if(!empty($email = Input::get('email`')))
        {
            $visitantea->email = $email;
        }
        if(!empty($datadenascimento = Input::get('datadenascimento')))
        {
            $visitantea->datadenascimento = $datadenascimento;
        }
        if(!empty($celular = Input::get('celular')))
        {
            $visitantea->celular = $celular;
        }
        if(!empty($cep = Input::get('cep')))
        {
            $visitantea->cep = $cep;
        }
		        if(!empty($rua = Input::get('rua')))
        {
            $visitantea->rua = $rua;
        }
		        if(!empty($bairro = Input::get('bairro')))
        {
            $visitantea->bairro = $bairro;
        }
		        if(!empty($cidade = Input::get('cidade')))
        {
            $visitantea->cidade = $cidade;
        }
		        if(!empty($estado = Input::get('estado')))
        {
            $visitantea->estado = $estado;
        }
        return $visitantea;
    }

}
