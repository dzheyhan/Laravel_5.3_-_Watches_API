<?php

use App\watch_model;
use Illuminate\Database\Seeder;

class ModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brand =  New watch_model;
        $brand -> model = 'Datejust Lady';
        $brand -> brand_id = '1';
        $brand -> save();

        $brand2 =  New watch_model;
        $brand2 -> model = 'Air King';
        $brand2 -> brand_id = '1';
        $brand2 -> save();

        $brand3 =  New watch_model;
        $brand3 -> model = 'Seamaster Planet Ocean';
        $brand3 -> brand_id = '2';
        $brand3 -> save();

        $brand3 =  New watch_model;
        $brand3 -> model = 'BIG BANG';
        $brand3 -> brand_id = '4';
        $brand3 -> save();

        $brand4 =  New watch_model;
        $brand4 -> model = 'J-12 Black';
        $brand4 -> brand_id = '3';
        $brand4 -> save();

        $brand5 =  New watch_model;
        $brand5 -> model = 'White Lady';
        $brand5 -> brand_id = '3';
        $brand5 -> save();

    }
}
