<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // reset the users table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        // generate 3 users/author
        $faker = Factory::create();

        DB::table('users')->insert([
            [
                'name' => "Maheeb",

                'email' => "johndoe@test.com",
                'password' => bcrypt('maheeb'),
                'bio' => $faker->text(rand(100,200)),
                'image'=>"te2.jpg",

            ],
            [
                'name' => "Rafsan",

                'email' => "pranto@test.com",
                'password' => bcrypt('maheeb'),
                'bio' => $faker->text(rand(100,200)),
                 'image'=>"te3.jpg",
            ],
            [
                'name' => "Akash",

                'email' => "akash@test.com",
                'password' => bcrypt('maheeb'),
                'bio' => $faker->text(rand(100,200)),
                'image'=>"te2.jpg",
            ],
        ]);
    }
}
