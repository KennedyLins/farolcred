<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('plano_id');
            $table->foreign('plano_id')->references('id')->on('planos');
            $table->string('nome', 100);
            $table->string('cpf_cnpj', 15);
            $table->string('endereco', 150);
            $table->string('fone');
            $table->string('email');
            $table->string('responsavel', 100)->nullable();
            $table->string('segmento', 100)->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
