<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sub_title');
            $table->tinyInteger('category_id');
            $table->string('slug');
            $table->tinyInteger('is_new')->default(0); // Defaults to 0 (not new)
            $table->string('brand_name')->nullable();
            $table->json('materials')->nullable();
            $table->tinyInteger('in_stock')->default(1); // Defaults to 1 (in stock)
            $table->decimal('price', 10, 2);
            $table->decimal('special_price', 10, 2)->nullable();
            $table->longText('description');
            $table->decimal('discount', 10, 2)->default(0);
            $table->string('discount_type')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->json('meta_keywords')->nullable();
            $table->timestamps();
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
