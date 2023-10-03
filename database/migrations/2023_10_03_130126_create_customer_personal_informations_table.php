<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerPersonalInformationsTable extends Migration
{
    public function up(): void
    {
        Schema::create('customer_personal_informations', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')
                  ->foreign('user_id')
                  ->references('id')
                  ->on('users');
            $table->string('last_name', '50');
            $table->string('first_name', '50');
            $table->string('middle_initial', '10');
            $table->string('name_extention', '10');
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

    public function down(): void
    {
        Schema::dropIfExists('customer_personal_informations');
    }
}
