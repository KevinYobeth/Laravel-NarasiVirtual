<?php

use Illuminate\Support\Str;
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
        $data = [];
        $faker = Faker\Factory::create();

        $data[0] = [
            'name' => 'Leonardus Kevin Yobeth',
            'email' => 'leokeviny@gmail.com',
            'nim' => '2201729713',
            'jurusan' => 'Teknik Informatika',
            'email_verified_at' => now(),
            'password' => bcrypt('kevinyobeth'),
            'remember_token' => Str::random(10),
        ];

        // for ($i = 1; $i < 15; $i++) {
        //     $data[$i] = [
        //         'name' => $faker->name,
        //         'email' => $faker->unique()->safeEmail,
        //         'nim' => $faker->numerify('##########'),
        //         'email_verified_at' => now(),
        //         'password' => bcrypt('password'),
        //         'remember_token' => Str::random(10),
        //     ];
        // }

        DB::table('users')->insert($data);
    }
}
