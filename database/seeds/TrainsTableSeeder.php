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
        for ($i = 0; $i < 500; $i++)
        {
            $train = new Train();

            $train->company = $faker->company(); 
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->date('2022_m_d') . ' ' . $faker->time('H_i_00');
            $train->arrival_time = $faker->date('2022_m_d') . ' ' . $faker->time('H_i_00');
            $train->train_code = $faker->bothify('???#######');
            $train->carriage_number = $faker->randomDigit();
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();
            $train->save();
        }
    }
}
