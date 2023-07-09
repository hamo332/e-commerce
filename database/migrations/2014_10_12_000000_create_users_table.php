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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('Mohamed');
            $table->string('email')->unique()->default('immuslim844@gmail.com');
            $table->string('phone')->default('01023329598');
            $table->string('image')->default('something.png');
            $table->integer('role')->default(0);
            $table->string('address');
            $table->integer('post_code');
            $table->string('gender');
            $table->softDeletes();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default('$2y$10$VE.ssL5dc74PK3Blj3n8IuD9akdSUU9k9x6xaCKS0OPUEY0O4py5y');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
