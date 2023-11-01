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
        Schema::create('installment_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('list_price_id')->constrained('list_prices');
            $table->foreignId('down_payment_id')->constrained('down_payments');
            $table->decimal('interest_rate', 8, 5);
            $table->integer('contract_term');
            $table->decimal('monthly_payment', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('installment_prices');
    }
};
