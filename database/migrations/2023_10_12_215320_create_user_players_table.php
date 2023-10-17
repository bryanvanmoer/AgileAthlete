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
        Schema::create('user_players', function (Blueprint $table) {
            $table->unsignedInteger('user_player_id')->autoIncrement();
            $table->string('firstname');
            $table->string('lastname');
            $table->timestamp('birth_date')->nullable();
            $table->string('size')->nullable();
            $table->string('weight')->nullable();
            $table->string('description')->nullable();
            $table->string('nationality')->nullable();
            $table->enum('good_hand', ['right', 'left'])->nullable();
            $table->string('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_players');
    }
};
