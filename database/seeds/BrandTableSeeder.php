<?php

use App\Brand;
use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $brand = New Brand;
        $brand -> brand = 'ROLEX';
        $brand -> save();

        $brand1 = New brand;
        $brand1 -> Brand = 'OMEGA';
        $brand1 -> save();

        $brand3 = New brand;
        $brand3 -> Brand = 'CHANEL';
        $brand3 -> save();

        $brand3 = New brand;
        $brand3 -> Brand = 'RUBLOT';
        $brand3 -> save();


    }
}
