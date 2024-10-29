<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            $trains[] = [
                'azienda' => $faker->company,
                'stazione_partenza' => $faker->city,
                'stazione_arrivo' => $faker->city,
                'orario_partenza' => $faker->dateTimeBetween('now', '+1 days'),
                'orario_arrivo' => $faker->dateTimeBetween('+1 days', '+2 days'),
                'codice_treno' => $faker->bothify('??###'),
                'numero_carrozze' => $faker->numberBetween(5, 15),
                'in_orario' => $faker->boolean(80),
                'cancellato' => $faker->boolean(10),
            ];

        }
    }
}
