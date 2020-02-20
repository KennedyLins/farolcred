<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('maquineta_id')->nullable();
            $table->foreign('maquineta_id')->references('id')->on('maquinetas');
            $table->string('data', 25);
            $table->string('codTransacao', 100);
            $table->integer('tipo');
            $table->integer('status');
            $table->float('valorBruto');
            $table->float('valorLiquido');
            $table->integer('parcelas');
            $table->string('serialNumber')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
