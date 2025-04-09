<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos de ejemplo para la tabla players
        $players = [
            [
                'dni' => '123456789',
                'name' => 'Lionel Messi',
                'position' => 'Forward',
                'number' => 10,
                'height' => 170,
                'weight' => 72,
                'birthdate' => '1987-06-24',
                'team_id' => 1, // Asegúrate de que este ID exista en la tabla teams
            ],
            [
                'dni' => '987654321',
                'name' => 'Cristiano Ronaldo',
                'position' => 'Forward',
                'number' => 7,
                'height' => 187,
                'weight' => 83,
                'birthdate' => '1985-02-05',
                'team_id' => 2,
            ],
            [
                'dni' => '456789123',
                'name' => 'Neymar Jr.',
                'position' => 'Forward',
                'number' => 10,
                'height' => 175,
                'weight' => 68,
                'birthdate' => '1992-02-05',
                'team_id' => 3,
            ],
            [
                'dni' => '789123456',
                'name' => 'Kylian Mbappé',
                'position' => 'Forward',
                'number' => 7,
                'height' => 178,
                'weight' => 73,
                'birthdate' => '1998-12-20',
                'team_id' => 3,
            ],
            [
                'dni' => '321654987',
                'name' => 'Sergio Ramos',
                'position' => 'Defender',
                'number' => 4,
                'height' => 184,
                'weight' => 82,
                'birthdate' => '1986-03-30',
                'team_id' => 4,
            ],
        ];

        // Insertar los datos en la tabla players
        foreach ($players as $player) {
            Player::create($player);
        }
    }
}