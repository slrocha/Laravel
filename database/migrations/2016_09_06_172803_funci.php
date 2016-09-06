<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Funci extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('funci', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf')->unique();;
            $table->string('dt_nascimento');
            $table->string('sexo');
            $table->string('nomePai');
            $table->string('nomeMae');
            $table->string('obs');
            $table->rememberToken();
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
        Schema::drop('funci');
    }
}
