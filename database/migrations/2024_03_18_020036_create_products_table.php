<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('name');
            $table->integer('price');
            $table->integer('sold_quantity');
            $table->integer('remain_quantity');
            $table->text('description')->nullable();
            $table->string('image_path')->nullable();
            $table->unsignedInteger('category_id');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on("categories")->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};