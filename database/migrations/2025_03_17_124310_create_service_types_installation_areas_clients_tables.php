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
        Schema::create('service_types', function (Blueprint $table) {
            $table->id(); // Primary Key (id)
            $table->string('name');
            $table->unsignedBigInteger('user_id'); 
            $table->timestamps();
        });

        // Create installation_areas table
        Schema::create('installation_areas', function (Blueprint $table) {
            $table->id(); // Primary Key (id)
            $table->string('name');
            $table->unsignedBigInteger('user_id'); 
            $table->timestamps();
        });

        // Create clients table
        Schema::create('clients', function (Blueprint $table) {
            $table->id(); // Primary Key (id)
            $table->string('full_name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('delivery_address')->nullable();
            $table->string('city')->nullable();
            $table->string('pincode')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->string('gst_no')->nullable();
            $table->unsignedBigInteger('user_id'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
        Schema::dropIfExists('installation_areas');
        Schema::dropIfExists('service_types');
    }
};
