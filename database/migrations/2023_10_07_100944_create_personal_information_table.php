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
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')
                  ->foreign('user_id')
                  ->references('id')
                  ->on('users');
            $table->string('last_name', '50');
            $table->string('first_name', '50');
            $table->string('middle_initial', '10');
            $table->string('name_extension', '10');
            $table->string('gender', '50');
            $table->string('religion', '50');
            $table->date('date_of_birth');
            $table->string('current_address', '100');
            $table->string('zip_code', '20');
            $table->string('marital_status', '50');
            $table->string('spouse', '50')->nullable();
            $table->string('email_address')->unique();
            $table->string('telephone');
            $table->string('phone_number')->unique();
            $table->string('sales_counselor', '50');
            $table->string('agency_manager', '60');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_information');
    }
};
