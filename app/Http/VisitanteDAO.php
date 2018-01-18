<?php

namespace App\Http\DAO;
use App\Http\DAO\DAO;
use DB;
use App\Visitantee;
use Illuminate\Support\Facades\Input;

class VisitanteDAO implements DAO
{
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
        $visitante = new Visitante();
        if(!empty($nome = Input::get('nome')))
        {
            $visitante->nome = $nome;
        }
        if(!empty($email = Input::get('email')))
        {
            $visitante->email = $email;
        }
        if(!empty($datadenascimento = Input::get('datadenascimento ')))
        {
            $visitante->datadenascimento = $datadenascimento;
        }
        if(!empty($telefone = Input::get('telefone')))
        {
            $visitante->telefone = $telefone;
        }
        if(!empty($cep = Input::get('cep')))
        {
            $visitante->cep = $cep;
        }
		if(!empty($rua = Input::get('rua')))
        {
            $visitante->rua = $rua;
        }
		if(!empty($numero = Input::get('numero')))
        {
            $visitante->numero = $numero;
        }
        if(!empty($cidade = Input::get('cidade')))
        {
            $visitante->cidade = $cidade;
        }
				if(!empty($estado = Input::get('estado')))
        {
            $visitante->estado = $estado;
        }
        return $visitante;
    }

}
