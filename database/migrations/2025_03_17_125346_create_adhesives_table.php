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
        Schema::create('companies', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key (id)
            $table->string('name'); // Company name
            $table->string('type')->nullable(); // Company name
            $table->string('relation')->nullable(); // Relation (if needed)
            $table->string('product_category')->nullable(); // Product category
            $table->unsignedInteger('zone')->nullable(); // Zone
            $table->text('address')->nullable(); // Address
            $table->unsignedInteger('gst')->nullable(); // GST number
            $table->string('city')->nullable(); // City
            $table->unsignedInteger('pincode')->nullable(); // Pincode as Integer
            $table->unsignedInteger('user_id')->nullable(); // Pincode as Integer
            $table->timestamps(); // Created_at & Updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adhesives');
    }
};
