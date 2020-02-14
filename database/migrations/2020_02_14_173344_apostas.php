<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Apostas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aposta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('email')->unique();
            $table->integer('cep');
            $table->string('estado');
            $table->string('cidade');
            $table->string('rua');
            $table->integer('numero');
            $table->integer('aposta');

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
        Schema::dropIfExists('aposta');
    }
}
