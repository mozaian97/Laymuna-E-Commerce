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
      if(!Schema::hasTable('cart')){
       Schema::create('cart', function (Blueprint $table) {
           $table->increments('Cart_id');
           $table->integer('product_id');
           $table->integer('user_id');
           $table->string('size');
           $table->integer('quantity')->default('1');
           $table->boolean('Deleted_Status');
           $table->timestamps();
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
        Schema::dropIfExists('cart');
    }
};
