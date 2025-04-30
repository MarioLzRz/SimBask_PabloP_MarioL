<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos de ejemplo para la tabla games
        $games = [
            [
                'home_team_score' => 3,
                'away_team_score' => 1,
                'date' => '2025-04-10 18:00:00',
                'home_team_id' => 1, // Asegúrate de que este ID exista en la tabla teams
                'away_team_id' => 2, // Asegúrate de que este ID exista en la tabla teams
                'league_id' => 1,    // Asegúrate de que este ID exista en la tabla leagues
                'stadium_id' => 2,   // Asegúrate de que este ID exista en la tabla stadiums
                'referee_id' => '123456789', // Asegúrate de que este DNI exista en la tabla referees
            ],
            [
                'home_team_score' => 2,
                'away_team_score' => 2,
                'date' => '2025-04-11 20:00:00',
                'home_team_id' => 3,
                'away_team_id' => 4,
                'league_id' => 2,
                'stadium_id' => 2,
                'referee_id' => '987654321',
            ],
            [
                'home_team_score' => 1,
                'away_team_score' => 0,
                'date' => '2025-04-12 16:00:00',
                'home_team_id' => 5,
                'away_team_id' => 1,
                'league_id' => 3,
                'stadium_id' => 3,
                'referee_id' => '456789123',
            ],
        ];
        // Insertar los datos en la tabla games
        foreach ($games as $game) {
            Game::create($game);
        }
    }
}