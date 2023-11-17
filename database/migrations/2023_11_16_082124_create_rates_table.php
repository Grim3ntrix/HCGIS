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
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->decimal('one_year_rate', 8, 2);
            $table->decimal('two_year_rate', 8, 2);
            $table->decimal('three_year_rate', 8, 2);
            $table->decimal('four_year_rate', 8, 2);
            $table->decimal('five_year_rate', 8, 2);
            $table->decimal('spot_cash_rate', 8, 2);
            $table->decimal('at_need_rate', 8, 2);
            $table->decimal('down_payment_rate', 8, 2);
            $table->decimal('penalty_rate', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rates');
    }
};
