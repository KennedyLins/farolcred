<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->float('1x');
            $table->float('2x');
            $table->float('3x');
            $table->float('4x');
            $table->float('5x');
            $table->float('6x');
            $table->float('7x');
            $table->float('8x');
            $table->float('9x');
            $table->float('10x');
            $table->float('11x');
            $table->float('12x');
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
        Schema::dropIfExists('planos');
    }
}
