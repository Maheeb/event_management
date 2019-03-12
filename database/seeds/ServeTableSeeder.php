<?php

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ServeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset the posts table
        DB::table('servs')->truncate();

        // generate 36 dummy posts data
        $servs = [];
        $faker = Factory::create();


        for ($i = 1; $i <= 8; $i++)
        {
            $image = "wh" . rand(1, 8) . ".jpg";

            $servs[] = [

                'title'        => $faker->word,
                'slug'         => $faker->sentence(3),
                'image'        => $image

            ];
        }

        DB::table('servs')->insert($servs);
    }
}
