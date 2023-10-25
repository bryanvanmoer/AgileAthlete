<?php

use App\Enum\Gender;
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
        Schema::create('players', function (Blueprint $table) {
            $table->uuid('player_id')->primary();
            $table->string('firstname');
            $table->string('lastname');
            $table->timestamp('birthdate')->nullable();
            $table->string('size')->nullable();
            $table->string('weight')->nullable();
            $table->string('description')->nullable();
            $table->string('nationality')->nullable();
            $table->enum('good_hand', ['right', 'left'])->nullable();
            $table->string('location')->nullable();
            $table->string('phone')->nullable();
            $table->enum('gender', Gender::values())->nullable();
            $table->uuid('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
