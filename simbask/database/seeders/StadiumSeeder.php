<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stadium;

class StadiumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos de ejemplo para la tabla stadiums
        $stadiums = [
            [
                'name' => 'Estadio Nacional',
                'capacity' => 50000,
                'location' => 'Madrid, España',
                'team_id' => 1, // Asegúrate de que este ID exista en la tabla teams
            ],
            [
                'name' => 'Estadio Internacional',
                'capacity' => 60000,
                'location' => 'París, Francia',
                'team_id' => 2, // Asegúrate de que este ID exista en la tabla teams
            ],
            [
                'name' => 'Estadio Olímpico',
                'capacity' => 70000,
                'location' => 'Roma, Italia',
                'team_id' => 3, // Asegúrate de que este ID exista en la tabla teams
            ],
            [
                'name' => 'Estadio Monumental',
                'capacity' => 80000,
                'location' => 'Buenos Aires, Argentina',
                'team_id' => 4, // Asegúrate de que este ID exista en la tabla teams
            ],
            [
                'name' => 'Estadio Asiático',
                'capacity' => 55000,
                'location' => 'Tokio, Japón',
                'team_id' => 5, // Asegúrate de que este ID exista en la tabla teams
            ],
        ];

        // Insertar los datos en la tabla stadiums
        foreach ($stadiums as $stadium) {
            Stadium::create($stadium);
        }
    }
}