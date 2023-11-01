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
        Schema::create('purchase_details', function (Blueprint $table) {
            $table->id();
            $table->date('reservation_date');
            $table->date('contract_date');
            $table->foreignId('personal_information_id')->constrained('personal_informations')->unsigned();
            $table->foreignId('installment_price_id')->constrained('installment_prices')->unsigned();
            $table->foreignId('list_price_id')->constrained('list_prices')->unsigned();        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_details');
    }
};
