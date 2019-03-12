<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('galleries')->truncate();

        // generate 36 dummy posts data
        $gals = [];
        $faker = Factory::create();
        $count =1;

        for ($i = 1; $i <= 9; $i++)
        {
            $image = "g" . $count++ . ".jpg";

            $gals[] = [
                'image'        => $image,
                'title'        => $faker->word,
                'et'         => $faker->sentence(3),


            ];
        }

        DB::table('galleries')->insert($gals);
    }
}
