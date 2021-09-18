<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code')->index();
            $table->string('barcode')->nullable()->index();
            $table->string('name')->index();
            $table->boolean('tax')->default(true);
            $table->boolean('sale_stock_null')->default(true);
            $table->string('presentation')->nullable();
            $table->string('measurement',50)->nullable();
            $table->string('package',50)->nullable();
            $table->integer('stock')->default(0);
            $table->enum('type',['p','s']);//product, service
            $table->boolean('purchase')->default(0);
            $table->boolean('sale')->default(0);
            $table->double('cost',8,2)->default(0);
            $table->double('price',8,2)->default(0);
            $table->boolean('isactive')->default(true);
            $table->string('comments')->nullable();
            $table->smallInteger('reserved')->default(0);
            $table->string('reserved_details')->default("{}");
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
        Schema::dropIfExists('products');
    }
}
