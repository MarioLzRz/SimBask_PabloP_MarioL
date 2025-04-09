<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos de ejemplo para la tabla teams
        $teams = [
            [
                'name' => 'Real Madrid',
                'abbreviation' => 'RMD',
                'founded_year' => 1902,
                'league_id' => 1, // Asegúrate de que este ID exista en la tabla leagues
            ],
            [
                'name' => 'FC Barcelona',
                'abbreviation' => 'FCB',
                'founded_year' => 1899,
                'league_id' => 1, // Asegúrate de que este ID exista en la tabla leagues
            ],
            [
                'name' => 'Paris Saint-Germain',
                'abbreviation' => 'PSG',
                'founded_year' => 1970,
                'league_id' => 2, // Asegúrate de que este ID exista en la tabla leagues
            ],
            [
                'name' => 'Boca Juniors',
                'abbreviation' => 'BOC',
                'founded_year' => 1905,
                'league_id' => 4, // Asegúrate de que este ID exista en la tabla leagues
            ],
            [
                'name' => 'Kashima Antlers',
                'abbreviation' => 'KAS',
                'founded_year' => 1947,
                'league_id' => 5, // Asegúrate de que este ID exista en la tabla leagues
            ],
        ];

        // Insertar los datos en la tabla teams
        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}