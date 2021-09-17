<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditSellerDuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_seller_dues', function (Blueprint $table) {
            $table->id();
            $table->integer('credit_seller_id')->unsigned();
            $table->date('date_finish')->nullable();
            $table->double('capital',8,2)->default(0); // lo que tiene que pagar en la cuota
            $table->double('abono',8,2)->default(0); // cuando hace un adelanto al pago de la cuota 
            $table->smallInteger('status')->default(0); //El estado en el que se encuentra la cuota, 0 = pendiente, se asignara un numero segun se le vea conveniente
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
        Schema::dropIfExists('credit_seller_dues');
    }
}
