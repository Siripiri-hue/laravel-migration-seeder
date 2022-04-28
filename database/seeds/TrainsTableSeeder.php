<?php

use Illuminate\Database\Seeder;
use App\Train;
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
        $train = new Train();

        $train->company = $faker->company(); 
        $train->departure_station = $faker->city();
        $train->arrival_station = $faker->city();
        $train->departure_time = $faker->date() . ' ' . $faker->time();
        $train->arrival_time = $faker->date() . ' ' . $faker->time();
        $train->train_code = $faker->bothify('???#######');
        $train->carriage_number = $faker->randomNumber(2, false);
        $train->on_time = $faker->boolean();
        $train->cancelled = $faker->boolean();
        $train->save();
    }
}
