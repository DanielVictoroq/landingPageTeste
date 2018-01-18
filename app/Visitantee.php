<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitantee extends Model
{
       protected $fillable=['nome','email', 'nascimento','telefone', 'cep','rua', 'numero', 'cidade', 'bairro', 'estado'];
    protected $hidden = [
        '_token'
    ];
}
