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
        Schema::create('obituaries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('order_id')->constrained('orders');
            $table->string('obituary_code');
            $table->string('fullname');
            $table->string('date_of_death');
            $table->string('cause_of_death');
            $table->string('place_of_residence');
            $table->string('occupation');
            $table->string('education');
            $table->string('military_service');
            $table->string('survivor');
            $table->string('funeral_arrangement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obituaries');
    }
};
