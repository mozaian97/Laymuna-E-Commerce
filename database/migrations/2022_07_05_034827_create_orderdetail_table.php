<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('orderdetail')){
        Schema::create('orderdetail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('quantity')->default('1');
            $table->string('price');
            $table->string('total');
            $table->integer('number_of_items')->default('1');
            $table->timestamps();
            $table->foreign('order_id')->references('Order_Id')->on('order');
            $table->foreign('product_id')->references('Product_id')->on('products');
        });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderdetail');
    }
};
