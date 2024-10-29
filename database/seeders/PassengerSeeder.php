<?php

namespace Database\Seeders;
use App\Models\Train;
use App\Models\Passenger;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $trains = Train::all();

        if ($trains->isEmpty()) {
            return;
        }

        foreach (range(1, 20) as $index) {
            Passenger::create([
                'nome' => $faker->firstName,
                'cognome' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'eta' => $faker->numberBetween(18, 80),
                'train_id' => $faker->randomElement($trains)->id,
            ]);
        }
    }
}
