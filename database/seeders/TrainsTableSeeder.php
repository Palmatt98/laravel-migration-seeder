<?php

namespace Database\Seeders;
use Faker\Generator as Faker;

use App\Models\Trains;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 10; $i++) { 
            
            $newTrain = new Trains();
            $newTrain->Stazione_di_partenza = $faker->city . ' ' . 'Station';
            $newTrain->Stazione_di_arrivo = $faker->city . ' ' . 'Station';
            $newTrain->Orario_di_partenza = $faker->time;
            $newTrain->Orario_di_arrivo = $faker->time;
            $newTrain->Codice_Treno = $faker->bothify('TR####');
            $newTrain->Numero_Carrozze = $faker->numberBetween(4, 8);
            $newTrain->In_orario = $faker->boolean;
            $newTrain->Cancellato = $faker->boolean;
            $newTrain->save();
        }
    }
}
