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
        Schema::create('block_quantities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_entry_id')->constrained('product_entries')->onDelete('cascade');
            $table->integer('block_quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('block_quantities');
    }
};
