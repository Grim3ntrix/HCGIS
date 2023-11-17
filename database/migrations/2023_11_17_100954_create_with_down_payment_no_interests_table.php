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
            $table->foreignId('product_list_price_id')->constrained('product_list_prices');
            $table->integer('term');
            $table->decimal('monthly_payment', 10, 2);
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
