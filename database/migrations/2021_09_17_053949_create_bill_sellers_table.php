<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_sellers', function (Blueprint $table) {
            $table->id();
            $table->string('serial',30); // serial from config company
            $table->smallInteger('version')->default(1);
            $table->string('client'); // as json // name, identification, address, email, phone
            $table->string('values'); // as json // total, subtotal, discount, taxt
            $table->dateTime('date_realized');
            $table->text('details')->default(''); // details as json
            $table->integer('seller_id')->unsigned()->nullable();
            $table->enum('status',['active','annulled'])->default('active');  
            $table->string('comment')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_sellers');
    }
}
