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
            $table->uuid('user_id')->primary();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('firstname');
            $table->string('lastname');
            $table->timestamp('birthdate')->nullable();
            $table->string('size')->nullable();
            $table->string('weight')->nullable();
            $table->string('description')->nullable();
            $table->string('nationality')->nullable();
            $table->enum('good_hand', ['left', 'right', 'both'])->nullable();
            $table->string('location')->nullable();
            $table->string('phone')->nullable();
            $table->timestamp('password_changed_at')->nullable();
            $table->enum('gender',['man','woman','other'])->nullable();
            $table->boolean('admin');
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
