<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitantee extends Model
{
  protected $table = 'visitante';
       protected $fillable=['nome','email', 'nascimento','celular', 'cep','rua', 'numero', 'cidade', 'bairro', 'estado'];
    protected $hidden = [
        '_token'
    ];

  
}conosadoksaodkasodas
