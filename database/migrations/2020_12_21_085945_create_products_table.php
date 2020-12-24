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
            $table->timestamps();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('brand_id')->constrained();
            $table->string('name', 255);
            $table->integer('price');
            $table->text('description');
            $table->string('status');
            $table->integer('rating')->nullable();
            $table->integer('reviews');
            $table->integer('quantity')->default(0);
        });

        Schema::create('product_photos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->string('photo');
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
