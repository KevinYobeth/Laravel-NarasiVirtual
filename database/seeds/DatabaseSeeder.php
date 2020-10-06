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
        $this->call([
            SeminarDetailsTableSeeder::class,
            UsersTableSeeder::class,
            MotdsTableSeeder::class,
        ]);
    }
}
