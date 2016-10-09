<?php

use App\Watch;
use Illuminate\Database\Seeder;

class WatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $watch =  New Watch;
        $watch -> brand_id = '1';
        $watch -> model_id = '1';
        $watch -> movement = 'Automatic';
        $watch -> gender = 'Mens Timepiece';
        $watch -> price = '20000';
        $watch -> available = '1';
        $watch -> case_size = '44';
        $watch -> w_case = 'Ceramic';
        $watch -> bracelet = 'Ceramic';
        $watch -> glass = 'Sapphire';
        $watch -> year = '2008';
        $watch -> save();

        $watch1 =  New Watch;
        $watch1 -> brand_id = '1';
        $watch1 -> model_id = '2';
        $watch1 -> movement = 'Automatic';
        $watch1 -> gender = 'Herrenuhr';
        $watch1 -> price = '3050';
        $watch1 -> available = '1';
        $watch1 -> case_size = '33';
        $watch1 -> w_case = 'Ceramic';
        $watch1 -> bracelet = 'Ceramic';
        $watch1 -> glass = '';
        $watch1 -> year = '';
        $watch1 -> save();

        $watch2 =  New Watch;
        $watch2 -> brand_id = '2';
        $watch2 -> model_id = '1';
        $watch2 -> movement = 'Automatic';
        $watch2 -> gender = 'Damenuhr';
        $watch2 -> price = '8700';
        $watch2 -> available = '0';
        $watch2 -> case_size = '15';
        $watch2 -> w_case = 'Stainless Steel';
        $watch2 -> bracelet = 'Stainless Steel';
        $watch2 -> glass = 'Sapphire';
        $watch2 -> year = '2016';
        $watch2 -> save();


        $watch =  New Watch;
        $watch -> brand_id = '2';
        $watch -> model_id = '1';
        $watch -> movement = 'Automatic';
        $watch -> gender = 'Damenuhr';
        $watch -> price = '9000';
        $watch -> available = '1';
        $watch -> case_size = '45';
        $watch -> w_case = 'Stainless Steel';
        $watch -> bracelet = 'Stainless Steel';
        $watch -> glass = 'Sapphire';
        $watch -> year = '2015';
        $watch -> save();

        $watch =  New Watch;
        $watch -> brand_id = '3';
        $watch -> model_id = '1';
        $watch -> movement = 'Automatic';
        $watch -> gender = 'Damenuhr';
        $watch -> price = '2055';
        $watch -> available = '0';
        $watch -> case_size = '44';
        $watch -> w_case = 'Stainless Steel';
        $watch -> bracelet = 'Stainless Steel';
        $watch -> glass = 'Stainless Steel';
        $watch -> year = '2014';
        $watch -> save();

        $watch =  New Watch;
        $watch -> brand_id = '3';
        $watch -> model_id = '2';
        $watch -> movement = 'Automatic';
        $watch -> gender = 'Damenuhr';
        $watch -> price = '3850';
        $watch -> available = '1';
        $watch -> case_size = '35';
        $watch -> w_case = 'Stainless Steel';
        $watch -> bracelet = 'Stainless Steel';
        $watch -> glass = 'Stainless Steel';
        $watch -> year = '2000';
        $watch -> save();

    }
}
