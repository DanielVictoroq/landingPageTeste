<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisitanteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'nome' => 'required|between:5,50',
            'email' => 'required|email',
            'nascimento' => 'required',
            'celular' => 'required|max:15|min:15',
            'cep' => 'required|max:9|min:9',
            'numero' => 'required|numeric|min:1',
            'rua' => 'required',
            'cidade' => 'required',
            'bairro' => 'required',
            'estado' => 'required'
        ];
    }

    public function messages(){
        return [
            'required' => 'O campo :attribute é obrigatório!',
            'nome.between' => 'O campo nome deve conter entre 5 e 50 caracteres!',
            'email.email' => 'O campo email deve ser no formato correto!',
            'celular.max' => 'O campo telefone deve conter 10 caracteres numéricos!',
            'celular.min' => 'O campo telefone deve conter 10 caracteres numéricos!',
            'cep.min' => 'O campo cep deve conter 8 caracteres numéricos!',
            'cep.max' => 'O campo cep deve conter 8 caracteres numéricos!',
            'numero.min' => 'O campo numero não pode ser <= 0!'

        ];
    }
}
