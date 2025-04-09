<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\League;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos de ejemplo para la tabla leagues
        $leagues = [
            [
                'name' => 'Liga Nacional',
                'year' => 1929,
            ],
            [
                'name' => 'Liga Internacional',
                'year' => 1960,
            ],
            [
                'name' => 'Liga Europea',
                'year' => 1955,
            ],
            [
                'name' => 'Liga Sudamericana',
                'year' => 1960,
            ],
            [
                'name' => 'Liga Asiática',
                'year' => 1967,
            ],
        ];

        // Insertar los datos en la tabla leagues
        foreach ($leagues as $league) {
            League::create($league);
        }
    }
}