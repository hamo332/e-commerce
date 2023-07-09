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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rent_id')->default(0);
            $table->unsignedBigInteger('product_id')->default(0);
            $table->unsignedBigInteger('user_id');
            $table->integer('amount');
            $table->string('message');
            $table->string('address');
            $table->string('booking_number');
            $table->enum('processes', ['accepted', 'disabled', 'processed', 'Cancelled'])->default('processed');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rent_books');
    }
};
