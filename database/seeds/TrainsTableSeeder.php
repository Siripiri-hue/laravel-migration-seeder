<?php

use Illuminate\Database\Seeder;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();

        $train->company = 'Capolinea';
        $train->departure_station = 'Pisa';
        $train->arrival_station = 'Genova';
        $train->departure_time = '2022-04-27 10:29:00';
        $train->arrival_time = '2022-04-27 12:12:00';
        $train->train_code = 'ERTI852647';
        $train->save();
    }
}
