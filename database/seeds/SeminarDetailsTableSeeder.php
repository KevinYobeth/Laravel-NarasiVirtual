<?php

use Illuminate\Database\Seeder;

class SeminarDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // https://medium.com/dotlocal/belajar-laravel-chapter-8-tutorial-database-seeding-7cffc3aaeefe
        $data = [];

        $data[0] = [
            'name' => 'How to Express Yourself',
            'description' => 'Seminar ini berbicara tentang bagaimana cara-cara mengekspresikan diri melalui karya seni. Seminar ini dibawakan oleh Hana Madness',
            'time' => now(),
            'link' => 'https://us02web.zoom.us/j/82408475691?pwd=cVNycDg1c1BsVHRxcEYyM3QwM2tqdz09',
            'thumbnail' => 'img/ticketHana.png',
            'thumbnailM' => 'img/ticketHanaM.png',
            'price' => 0,
        ];

        $data[1] = [
            'name' => 'How to take Expressive Photos',
            'description' => 'Seminar ini mengajarkan tentang cara-cara untuk memotret foto secara conceptual untuk mendapatkan ekspresi / perasaan yang ingin didapatkan dari subjek. Seminar dibawakan oleh Amanda MargaretSeminar ini mengajarkan tentang cara-cara untuk memotret foto secara conceptual untuk mendapatkan ekspresi / perasaan yang ingin didapatkan dari subjek. Seminar dibawakan oleh Amanda Margaret',
            'time' => now(),
            'link' => '
            https://us02web.zoom.us/j/86278110362?pwd=TStWV29UQ2ZBMTB0UmN0QUwzc3I5QT09',
            'thumbnail' => 'img/ticketAmanda.png',
            'thumbnailM' => 'img/ticketAmandaM.png',
            'price' => 35000,
        ];

        DB::table('seminar_details')->insert($data);
    }
}
