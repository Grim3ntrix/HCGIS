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
            $table->foreignId('product_type_id')->constrained('product_types')->onDelete('cascade');
            $table->foreignId('product_category_id')->constrained('product_categories')->onDelete('cascade');
            $table->foreignId('list_price_id')->constrained('list_prices')->onDelete('cascade');
            $table->foreignId('down_payment_id')->constrained('down_payments')->onDelete('cascade');
            $table->longText('description');
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
