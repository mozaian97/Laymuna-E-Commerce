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
      if(!Schema::hasTable('products')){
        Schema::create('products', function (Blueprint $table) {
          $table->increments('Product_id');
          $table->string("name");
          $table->decimal("price",10,2);
          $table->integer("Subcategory_id")->unsigned();
          $table->integer("Category_id")->unsigned();
          $table->string("description",2000);
          $table->string("image");
          $table->string('size')->nullable();
          $table->boolean('Deleted_Status')->default('0');
          $table->foreign("Category_id")->references('Category_ID')->on('category');
          $table->foreign("Subcategory_id")->references('Subcategory_ID')->on('subcategory');
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
        Schema::dropIfExists('product');
    }
};
