<?php

namespace Database\Seeders;

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
        $data = [];

        $data[0] = [
            'message' => 'Photography Seminar: How to Take Expressive Photos by Amanda Margareth is nearing, get your seat now!',
            'link' => '/seminar/register/2',
        ];

        $data[1] = [
            'message' => 'Today on NARASI',
            'link' => 'https://us02web.zoom.us/j/82408475691?pwd=cVNycDg1c1BsVHRxcEYyM3QwM2tqdz09',
        ];

        DB::table('motds')->insert($data);
    }
}
