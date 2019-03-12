<?php

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PartyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parties')->truncate();

        // generate 36 dummy posts data
        $parties = [];
        $faker = Factory::create();
        $st ="-";

        $dt = Carbon::now();
        $mz = $dt->toTimeString();
        $mc = $dt->addHour(rand(2,5));
        $mt = rand(0,12).":".rand(0,59)."-".rand(0,12).":".rand(0,59);

        for ($i = 1; $i <= 3; $i++)
        {
            $image = "e" . rand(1, 3) . ".jpg";

            $parties[] = [
                'author_id'    => rand(1, 3),
                'image'        => $image,
                'title'        => $faker->sentence(4),
                'et'         => $faker->text,
                'duration'   => $mt,
                'loc' =>  $faker->city,


            ];
        }

        DB::table('parties')->insert($parties);
    }
}
