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
    Schema::create('samples', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('company_id');  // Updated to company_id as foreign key
        $table->string('sample_name')->nullable();
        $table->decimal('sample_cost', 10, 2)->nullable();
        $table->decimal('length', 8, 2)->nullable();
        $table->decimal('width', 8, 2)->nullable();
        $table->decimal('thickness', 8, 2)->nullable();
        $table->string('image')->nullable();
        $table->timestamps();
        
        // Define foreign key constraints
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');  // Foreign key reference
        
    });
}

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('samples');
    }
};
