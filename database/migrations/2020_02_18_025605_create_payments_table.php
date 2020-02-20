<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('transaction_id')->nullable();
            $table->foreign('transaction_id')->references('id')->on('transactions');
            $table->string('codTransacao', 100)->nullable();
            $table->unsignedBigInteger('maquineta_id')->nullable();
            $table->foreign('maquineta_id')->references('id')->on('maquinetas');
            $table->string('serialNumber')->nullable();
            $table->unsignedBigInteger('plano_id')->nullable();
            $table->foreign('plano_id')->references('id')->on('planos');
            $table->float('valor')->nullable();
            $table->string('status', 50)->nullable();
            $table->string('comprovante')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
