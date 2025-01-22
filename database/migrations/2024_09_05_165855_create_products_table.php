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
        Schema::create('products', function (Blueprint $table) {
            $table->id();                                     // Primary key
            $table->string('title');                         // Tool title
            $table->text('description');                     // Tool description
            $table->decimal('rental_price', 8, 2);           // Rental price (e.g., 9999.99)
            $table->string('condition');                     // Condition (e.g., new, used)
            $table->string('availability');                  // Availability status
            $table->string('category');                      // Category of the tool
            $table->integer('quantity')->default(0);         // Quantity (integer, default 0)
            $table->string('image');                         // Path to image file
            $table->timestamps();                            // Created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
