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
        Schema::create('no_down_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_list_price_id')->constrained('product_list_prices')->onDelete('cascade');
            $table->integer('ndp_term');
            $table->decimal('ndp_annual_interest', 10, 2);
            $table->decimal('ndp_monthly_payment', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('no_down_payments');
    }
};
