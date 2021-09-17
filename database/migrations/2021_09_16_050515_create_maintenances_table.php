<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->default(-1);
            $table->smallInteger('version')->default(1);
            $table->dateTime('date_realized');
            $table->text('details')->default(''); // details as json
            $table->string('comment')->nullable(); 
            $table->integer('client_id')->unsigned();
            $table->integer('car_id')->unsigned();
            $table->integer('proform_id')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maintenances');
    }
}
