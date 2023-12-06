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
        Schema::create('product_entries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_list_price_id')->constrained('product_list_prices')->onDelete('cascade');
            $table->string('product_list_price_code');
            $table->string('product_entry_code');
            $table->foreignId('phase_id')->constrained('phases');
            $table->decimal('down_payment_amount', 10, 2)->nullable();
            $table->decimal('balance', 10, 2)->nullable();
            $table->string('product_list_price_mode');
            $table->string('term')->nullable();
            $table->decimal('at_need', 10, 2)->nullable();
            $table->decimal('spot_cash', 10, 2)->nullable();
            $table->decimal('wdp_interest', 10, 2)->nullable();
            $table->decimal('wdp_monthly', 10, 2)->nullable();
            $table->decimal('wdp_end_amount', 10, 2)->nullable();
            $table->decimal('ndp_interest', 10, 2)->nullable();
            $table->decimal('ndp_monthly', 10, 2)->nullable();
            $table->decimal('ndp_end_amount', 10, 2)->nullable();
            $table->decimal('wdpni_monthly', 10, 2)->nullable();
            $table->decimal('wdpni_end_amount', 10, 2)->nullable();
            $table->decimal('ndpni_monthly', 10, 2)->nullable();
            $table->decimal('ndpni_end_amount', 10, 2)->nullable();
            $table->enum('status', ['available','sold'])->default('available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_entries');
    }
};
