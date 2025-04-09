<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coach;

class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos de ejemplo para la tabla coaches
        $coaches = [
            [
                'dni' => '123456789',
                'name' => 'Pep Guardiola',
                'age' => 52,
                'experience_years' => 20,
                'team_id' => 1, // Asegúrate de que este ID exista en la tabla teams
            ],
            [
                'dni' => '987654321',
                'name' => 'Carlo Ancelotti',
                'age' => 63,
                'experience_years' => 30,
                'team_id' => 2, // Asegúrate de que este ID exista en la tabla teams
            ],
            [
                'dni' => '456789123',
                'name' => 'Diego Simeone',
                'age' => 53,
                'experience_years' => 15,
                'team_id' => 3, // Asegúrate de que este ID exista en la tabla teams
            ],
            [
                'dni' => '789123456',
                'name' => 'Jürgen Klopp',
                'age' => 56,
                'experience_years' => 25,
                'team_id' => 4, // Asegúrate de que este ID exista en la tabla teams
            ],
            [
                'dni' => '321654987',
                'name' => 'Zinedine Zidane',
                'age' => 50,
                'experience_years' => 10,
                'team_id' => 5, // Asegúrate de que este ID exista en la tabla teams
            ],
        ];

        // Insertar los datos en la tabla coaches
        foreach ($coaches as $coach) {
            Coach::create($coach);
        }
    }
}