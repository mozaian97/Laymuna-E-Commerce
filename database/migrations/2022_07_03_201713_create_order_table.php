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
      if(!Schema::hasTable('order')){
        Schema::create('order', function (Blueprint $table) {
            $table->increments('Order_Id')->from(152584);
            $table->integer('user_id');
            $table->string('status')->default('Processing');
            $table->string('payment_method');
            $table->string('address');
            $table->decimal('total_cost',10,2);
            $table->integer('items');

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
        Schema::dropIfExists('order');
    }
};
