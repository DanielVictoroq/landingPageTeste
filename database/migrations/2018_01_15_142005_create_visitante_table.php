<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitante', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nome', 255);
			$table->date('datadenascimento' , 255);
			$table->string('email' , 255);
            $table->string('celular',11), 255;
			$table->string('cep',8) , 255;
			$table->string('rua') , 255;
            $table->string('bairro') , 255;
            $table->string('cidade') , 255;
            $table->string('estado'), 255 ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitante');
    }
}
