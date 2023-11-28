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
        Schema::create('with_down_payment_no_interests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_list_price_id')->constrained('product_list_prices')->onDelete('cascade');
            $table->integer('wdpni_term');
            $table->decimal('wdpni_monthly_payment', 10, 2);
            $table->decimal('wdpni_end_price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('with_down_payment_no_interests');
    }
};
