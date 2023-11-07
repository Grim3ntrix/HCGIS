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
        Schema::create('down_payments', function (Blueprint $table) {
            $table->id();
            $table->string('down_payment_rate');
            $table->decimal('down_payment_amount', 10, 2);
            $table->decimal('balance', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('down_payments');
    }
};
