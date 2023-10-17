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
        Schema::create('user_clubs', function (Blueprint $table) {
            $table->unsignedInteger('user_club_id')->autoIncrement();
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamp('creation_date')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('url_website')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('street')->nullable();
            $table->string('street_number')->nullable();
            $table->string('postal_code')->nullable();
            $table->timestamps();

            /* Foreign Key */
            $table->unsignedInteger('sport_id');
            $table->foreign('sport_id')->references('sport_id')->on('sports');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_clubs');
    }
};
