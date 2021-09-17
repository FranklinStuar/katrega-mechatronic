<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('identification',13);
            $table->string('name',80);
            $table->string('phone',15);
            $table->string('email',100);
            $table->string('address');
            $table->boolean('final_user')->default(false);
            $table->boolean('isactive')->default(true);
            $table->enum('type',['person','company'])->default('person');
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
        Schema::dropIfExists('clients');
    }
}
