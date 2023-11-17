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
        Schema::create('product_list_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rate_id')->constrained('rates');
            $table->string('product_list_price_code');
            $table->string('product_type');
            $table->string('product_category');
            $table->decimal('list_price', 10, 2);
            $table->longText('product_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_list_prices');
    }
};
