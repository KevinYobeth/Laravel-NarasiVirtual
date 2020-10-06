<?php

use Illuminate\Database\Seeder;

class MotdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'message' => 'Photography Seminar: How to Take Expressive Photos by Amanda Margareth is nearing, get your seat now!',
            'link' => '/seminar/register/2'
        ];

        DB::table('motds')->insert($data);
    }
}
