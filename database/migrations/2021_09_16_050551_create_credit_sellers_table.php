<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_sellers', function (Blueprint $table) {
            $table->id();
            $table->double('adelanto',8,2)->default(0); // cuanto paga por adelantado o el pago inicial para pedir credito
            $table->double('total_inicial',8,2)->default(0); // total inicial indica que el monto que empieza a pagar sin tener el interes que se le asigne
            $table->double('total_final',8,2)->default(0); // total que termina pagando con el interes integrado, si no se quiere poner interes va el mismo numero que inicial
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->dateTime('fecha_pagado')->nullable(); // fecha real en la que se termina de pagar
            $table->smallInteger('status')->default(0); //El estado en el que se encuentra el pago, 0 = pendiente, se asignara un numero segun se le vea conveniente
            $table->integer('seller_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credit_sellers');
    }
}
