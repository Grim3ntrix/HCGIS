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
            $table->unsignedBigInteger('list_price_id')
                    ->foreign('list_price_id')
                    ->references('id')
                    ->on('list_prices');
            $table->decimal('interest_rate',10,2);
            $table->string('loan_term');
            $table->integer('monthly_payment');
            $table->integer('total_price');
            $table->unsignedBigInteger('created_by')
                    ->foreign('created_by')
                    ->references('id')
                    ->on('users');
            $table->unsignedBigInteger('updated_by')
                    ->foreign('updated_by')
                    ->references('id')
                    ->on('users');
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
