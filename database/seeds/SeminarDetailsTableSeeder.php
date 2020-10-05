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
            'link' => 'https://us02web.zoom.us/j/87428399482?pwd=NzR1WEo5MXRVL0w4SzQ5TzRmUE5Jdz09',
            'thumbnail' => '\/thumbnail/',
            'price' => 0,
        ];

        $data[1] = [
            'name' => 'How to take Expressive Photos',
            'description' => 'Seminar ini mengajarkan tentang cara-cara untuk memotret foto secara conceptual untuk mendapatkan ekspresi / perasaan yang ingin didapatkan dari subjek. Seminar dibawakan oleh Amanda MargaretSeminar ini mengajarkan tentang cara-cara untuk memotret foto secara conceptual untuk mendapatkan ekspresi / perasaan yang ingin didapatkan dari subjek. Seminar dibawakan oleh Amanda Margaret',
            'time' => now(),
            'link' => 'https://us02web.zoom.us/j/87428399482?pwd=NzR1WEo5MXRVL0w4SzQ5TzRmUE5Jdz09',
            'thumbnail' => '\/thumbnail/',
            'price' => 35000,
        ];

        $data[2] = [
            'name' => 'KLASIK: Being Aware of Mental Illness',
            'description' => 'KLIFONARA Ngobrol Asik',
            'time' => now(),
            'link' => 'https://us02web.zoom.us/j/87428399482?pwd=NzR1WEo5MXRVL0w4SzQ5TzRmUE5Jdz09',
            'thumbnail' => '\/thumbnail/',
            'price' => 0,
        ];

        $data[3] = [
            'name' => 'KLASIK: Self Portrait',
            'description' => 'KLIFONARA Ngobrol Asik',
            'time' => now(),
            'link' => 'https://us02web.zoom.us/j/87428399482?pwd=NzR1WEo5MXRVL0w4SzQ5TzRmUE5Jdz09',
            'thumbnail' => '\/thumbnail/',
            'price' => 0,
        ];

        $data[4] = [
            'name' => 'KLASIK: Seputar Portrait Photography',
            'description' => 'KLIFONARA Ngobrol Asik',
            'time' => now(),
            'link' => 'https://us02web.zoom.us/j/87428399482?pwd=NzR1WEo5MXRVL0w4SzQ5TzRmUE5Jdz09',
            'thumbnail' => '\/thumbnail/',
            'price' => 0,
        ];

        $data[5] = [
            'name' => 'Sharing Virtual Photoshoot',
            'description' => 'Sharing dibawakan oleh Anggota KLIFONARA',
            'time' => now(),
            'link' => 'https://us02web.zoom.us/j/87428399482?pwd=NzR1WEo5MXRVL0w4SzQ5TzRmUE5Jdz09',
            'thumbnail' => '\/thumbnail/',
            'price' => 0,
        ];

        DB::table('seminar_details')->insert($data);
    }
}
