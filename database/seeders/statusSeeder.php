<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slug = [
            'EXPYSL', 'MTHAWR', 'SLFPRT', 'SLFLVE', 'VTLPHS',
            'BTYPRT', 'CPTEMT', 'VRTEXH', 'ARTOBW', 'FLMPHT', 'INSPBN'
        ];

        $seminarName = [
            'Expressing Yourself', 'Mental Health Awareness', 'Self Portrait', 'Self Love', 'Virtual Photoshoot',
            'Editing Beauty Portrait', 'Capturing Emotions', 'Keliling Virtual Exhibition',
            'The Art of Black and White', 'Film Photography', 'In Sight Pameran Besar NARASI'
        ];

        $data = [];

        for ($i = 0; $i < 11; $i++) {
            $data[$i] = [
                'slug' => $slug[$i],
                'eventName' => $seminarName[$i]
            ];
        }

        DB::table('statuses')->insert($data);
    }
}
