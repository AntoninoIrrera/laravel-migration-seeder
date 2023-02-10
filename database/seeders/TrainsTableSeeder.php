<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i=0; $i < 100 ; $i++) { 
            # code...

            $newTrain = new Train();
            $newTrain->azienda = $faker->word();
            $newTrain->stazione_di_partenza = $faker->word();
            $newTrain->stazione_di_arrivo = $faker->word();
            $newTrain->orario_di_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->orario_di_arrivo = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->codice_treno = $faker->randomNumber(4, true);
            $newTrain->numero_carrozze = $faker->randomDigitNot(0);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->save();
            



        }
    }
}
