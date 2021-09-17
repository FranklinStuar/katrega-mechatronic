<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->default(-1);
            $table->smallInteger('version')->default(1);
            $table->double('discount_0',8,2 )->default(0); //descuento para subtotal 0
            $table->integer('client_id')->unsigned();
            $table->double('discount_tax',8,2)->default(0); //descuento para subtotal con iva
            $table->double('total_0',8,2)->default(0); //subtotal 0 - descuento para subtotal 0
            $table->double('total_tax',8,2)->default(0); //subtotal con iva - descuento para subtotal con iva
            $table->double('subtotal_0',8,2)->default(0);  
            $table->double('tax',4,2)->default(12);  
            $table->double('subtotal_tax',8,2)->default(0);  
            $table->double('total',8,2)->default(0);  
            $table->dateTime('date_realized');
            $table->text('details')->default(''); // details as json
            $table->integer('proform_id')->unsigned()->nullable();
            $table->enum('status',['active','annulled'])->default('active');  
            $table->string('comment')->nullable(); 
            $table->integer('credit_seller_id')->unsigned()->nullable();
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
        Schema::dropIfExists('sellers');
    }
}
