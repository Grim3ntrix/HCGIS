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
            $table->string('lot_name');
            $table->integer('block');
            $table->integer('phase');
            $table->foreignId('personal_information_id')->constrained('personal_information')->unsigned();
            $table->foreignId('product_id')->constrained('products')->unsigned();    
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
