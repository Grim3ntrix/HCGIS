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
        Schema::create('list_prices', function (Blueprint $table) {
            $table->id();
            $table->decimal('contract_price', 10, 2);
            $table->decimal('spot_cash', 10, 2);
            $table->decimal('at_need_price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_prices');
    }
};
