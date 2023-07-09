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
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('disc');
            $table->string('image');
            $table->json('gallery')->nullable();
            $table->string('rent_number');
            $table->string('created_by');
            $table->string('updated_by');
            $table->boolean('status');
            $table->enum('processes', ['accepted', 'disabled', 'processed', 'Cancelled']);
            $table->softDeletes();
            $table->enum('purpose', ['sale', 'buy']);
            $table->string('price');
            $table->enum('timeframe', ['hour', 'day', 'week', 'month', 'year']);
            $table->string('discount')->default(0);
            $table->enum('creator', ['admin', 'user']);
            $table->integer('section_id')->nullable()->default(NULL);
            $table->integer('brand_id')->nullable()->default(NULL);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rents');
    }
};
