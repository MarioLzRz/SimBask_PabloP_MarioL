<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Referee;

class RefereeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos de ejemplo para la tabla referees
        $referees = [
            [
                'dni' => '123456789',
                'name' => 'Juan Pérez',
                'age' => 40,
                'experience_years' => 15,
            ],
            [
                'dni' => '987654321',
                'name' => 'María López',
                'age' => 35,
                'experience_years' => 10,
            ],
            [
                'dni' => '456789123',
                'name' => 'Carlos García',
                'age' => 45,
                'experience_years' => 20,
            ],
            [
                'dni' => '789123456',
                'name' => 'Ana Martínez',
                'age' => 30,
                'experience_years' => 8,
            ],
            [
                'dni' => '321654987',
                'name' => 'Luis Fernández',
                'age' => 50,
                'experience_years' => 25,
            ],
        ];

        // Insertar los datos en la tabla referees
        foreach ($referees as $referee) {
            Referee::create($referee);
        }
    }
}