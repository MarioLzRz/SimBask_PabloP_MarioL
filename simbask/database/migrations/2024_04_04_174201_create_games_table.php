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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->integer('home_team_score')->nullable();
            $table->integer('away_team_score')->nullable();
            $table->dateTime('date');
            
            $table->unsignedBigInteger('home_team_id');
            $table->unsignedBigInteger('away_team_id');
            $table->unsignedBigInteger('league_id');
            $table->unsignedBigInteger('stadium_id');
            $table->unsignedBigInteger('referee_id');

            $table->foreign('home_team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->foreign('away_team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->foreign('league_id')->references('id')->on('leagues')->onDelete('cascade');
            $table->foreign('stadium_id')->references('id')->on('stadiums')->onDelete('cascade');
            $table->foreign('referee_id')->references('id')->on('referees')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
