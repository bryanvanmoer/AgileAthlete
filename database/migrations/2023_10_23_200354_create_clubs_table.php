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
        Schema::create('clubs', function (Blueprint $table) {
            $table->uuid('club_id')->primary();
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamp('creation_date')->nullable();
            $table->string('phone')->nullable();
            $table->string('url_website')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('country');
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('street')->nullable();
            $table->string('street_number')->nullable();
            $table->uuid('user_id');
            $table->uuid('sport_id');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('sport_id')->references('sport_id')->on('sports');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};
