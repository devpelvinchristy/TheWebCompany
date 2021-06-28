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
            $table->id('id')->nullable();
            $table->string('product_image')->nullable();
            $table->string('product_category')->nullable();
            $table->string('product_name')->nullable();
            $table->string('product_subcategory')->nullable();
            $table->integer('product_subcategoryid')->nullable();
            $table->integer('product_maincategoryid')->nullable();
            $table->string('product_details')->nullable();
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
