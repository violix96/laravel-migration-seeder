<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $train = new Train();
            $train->azienda = $faker->company();
            $train->stazione_di_partenza = $faker->city;
            $train->stazione_di_arrivo = $faker->city;
            $train->data_di_partenza = $faker->dateTimeBetween('now', '+1 year')->format('Y-m-d H:i:s');
            $train->orario_di_partenza = $faker->time;
            $train->orario_di_arrivo = $faker->time;
            $train->codice_treno = $faker->bothify('??###');
            $train->numero_carrozze = $faker->numberBetween(2, 30);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }
    }
}
