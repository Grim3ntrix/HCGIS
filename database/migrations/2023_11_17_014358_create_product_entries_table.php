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
            $table->string('down_payment_option');
            $table->decimal('down_payment_amount', 10, 2);
            $table->decimal('balance', 10, 2);
            $table->string('product_list_price_mode');
            $table->string('term');
            $table->string('phase');
            $table->decimal('at_need', 10, 2);
            $table->decimal('spot_cash', 10, 2);
            $table->decimal('wdp_interest', 10, 2);
            $table->decimal('wdp_monthly', 10, 2);
            $table->decimal('wdp_end_amount', 10, 2);
            $table->decimal('ndp_interest', 10, 2);
            $table->decimal('ndp_monthly', 10, 2);
            $table->decimal('ndp_end_amount', 10, 2);
            $table->decimal('wdpni_interest', 10, 2);
            $table->decimal('wdpni_monthly', 10, 2);
            $table->decimal('wdpni_end_amount', 10, 2);
            $table->decimal('ndpni_interest', 10, 2);
            $table->decimal('ndpni_monthly', 10, 2);
            $table->decimal('ndpni_end_amount', 10, 2);
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
