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
            $table->unsignedBigInteger('product_type_id');
            $table->unsignedBigInteger('product_category_id');
            $table->integer('pre_need_price_spot_cash');
            $table->integer('pre_need_price_contract_price');
            $table->integer('at_need_price');
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
        Schema::dropIfExists('list_prices');
    }
};
