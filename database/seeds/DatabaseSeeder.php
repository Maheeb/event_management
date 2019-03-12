<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ServeTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PartyTableSeeder::class);
        $this->call(GalleryTableSeeder::class);
    }
}
