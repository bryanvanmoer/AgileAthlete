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
        Schema::create('universal_users', function (Blueprint $table) {
            $table->unsignedInteger('universal_user_id')->autoIncrement();
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('admin');
            $table->timestamps();

            /* Foreign Keys */
            $table->unsignedInteger('user_player_id')->nullable();
            $table->foreign('user_player_id')->references('user_player_id')->on('user_players');

            $table->unsignedInteger('user_club_id')->nullable();
            $table->foreign('user_club_id')->references('user_club_id')->on('user_clubs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universal_users');
    }
};
