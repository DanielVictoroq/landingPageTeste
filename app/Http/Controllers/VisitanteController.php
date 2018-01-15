<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitanteController extends Controller
{
     public function index()
      {
          return view('welcome');
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
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode()); 
        }
    }
	    public function setData($visitante='')
    {
        if(empty($visitante))
        $animal = new Animal();    
        if(!empty($nome = Input::get('nome')))
        {
            $visitante->nome = $nome;
        }
        if(!empty($email = Input::get('email`')))
        {
            $visitante->raca = $raca;
        }
        if(!empty($datanascimento = Input::get('datadenascimento')))
        {
            $visitante->datadenascimento = $datadenascimento;
        }
        if(!empty($celular = Input::get('celular')))
        {
            $visitante->celular = $celular;
        }
        if(!empty($cep = Input::get('cep')))
        {
            $visitante->cep = $cep;
        }
		        if(!empty($rua = Input::get('rua')))
        {
            $visitante->rua = $rua;
        }
		        if(!empty($bairro = Input::get('bairro')))
        {
            $visitante->bairro = $bairro;
        }
		        if(!empty($cidade = Input::get('cidade')))
        {
            $visitante->cidade = $cidadeo;
        }
		        if(!empty($estado = Input::get('estado')))
        {
            $visitante->estado = $estado;
        }
        return $visitante;
    }
}
