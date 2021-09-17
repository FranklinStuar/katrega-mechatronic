<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditSellerPaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_seller_pays', function (Blueprint $table) {
            $table->id();
            $table->integer('credit_seller_id')->unsigned();
            $table->dateTime('day_pay')->nullable();
            $table->double('cost',8,2)->default(0); // monto del pago al credito
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
        Schema::dropIfExists('credit_seller_pays');
    }
}
