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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade');
            $table->string('name');
            $table->string('description');
            $table->float('price');
            $table->integer('quantity');
            $table->float('discount');
            $table->integer('rating');
            $table->integer('status');
            $table->integer('featured');
            $table->integer('best_rated');
            $table->integer('trend');
            $table->integer('sale');
            $table->string('image_path');
            $table->integer('type'); // 1:clothes, 2:shoes, 3:accessories 4:makeup
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
};
