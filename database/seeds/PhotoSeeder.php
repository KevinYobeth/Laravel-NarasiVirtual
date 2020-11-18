<?php

use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // NARASI Seeder (0)

        // Pamdik - Pengajar Seeder (1)
        $pamdikPengajarPhotographer =
            [
                'Sayyid Ahmad Sidqi',
                'Juan Luckminto',
                'Steven Tanjaya',
                'Ishika Gurnani',
                'Eric Samuel Suwatan',
                'Juan Luckminto',
                'Eric Samuel Suwatan',
                'Eric Samuel Suwatan',
                'Felicia Christine Tardy',
                'Ferdinand Michael',
                'Erasmus Krisna',
                'Reynaldo Prayogo',
                'Reynaldo Prayogo',
                'Ferdinand Michael',
                'Gabriele Aurellia Susanto',
                'Eric Samuel Suwatan',
                'Muhammad Rizky',
                'Christopher',
                'Farrel Amadeus Maleakhi',
                'Farrel Amadeus Maleakhi',
                'Eric Samuel Suwatan',
                'Eric Samuel Suwatan',
                'Felicia Christine Tardy',
                'Felicia Christine Tardy',
                'Eric Samuel Suwatan'
            ];

        $pamdikPengajarTitle =
            [
                'Fokus',
                'Browntus',
                'Beauty of Bromo',
                'Lights✨',
                'Percaya Diri',
                'Cheer Up',
                '24mm',
                'Menggapai',
                'Freedom',
                'Golden Palace',
                'Magic',
                'Kejaiban Semesta',
                'Menanti Disini',
                'Art of Drifting',
                'Matahari dan Gunung',
                'Immune Boost',
                'Jalan Malioboro',
                'Keep on Rockin',
                'On Stage',
                'Menua Bersama',
                'Jendela Dunia',
                'Forest',
                'That Day and That Moment',
                'The Golden Pearl',
                'Pramuka'
            ];

        $pamdikPengajarCaption =
            [
                'Cobalah untuk fokus maka kita akan menemukan ketenangan didalamnya',
                'Food photography ini mempromosikan brownies rasa lotus dengan konsep minimalis dan estetis',
                'Ini merupakan pengalaman saya pertama kali ke bromo , disini saya dari subuh menunggu sampai matahari terbit . disaat waktu terus berjalan , saya melihat begitu indahnya bromo dipagi hari dicampur matahari yang baru terbit .',
                'Hunting saat KLOT (Klifonara Outing)',
                'Siapa ini ? Dia Hanin Dhiya. Momen ini ditangkap saat penutupan acara TEETANZ9 di sekolah lama saya. Butuh kepercayaan diri yang hebat untuk maju ke dekat Hanin. Alhasil, dengan usaha itu saya dapat mendapatkan foto ini.',
                'Dalam foto ini saya ingin menunjukkan ekspresi wajah tertawa dari seorang pria yang sedang berbicara dengan temannya.',
                '24mm. Lensa ini merupakan Fixed Wide Lens pertama yang saya beli dengan uang sendiri. Saya banyak menghasilkan foto bagus dengan lensa ini.',
                'Dua orang remaja sedang memperebutkan sebuah bola basket di suatu pertandingan.',
                'Langit biru dan cuaca yang cerah, membawa kedamaian dan suka cita dalam hatinya. Tugu itu seperti bersorak, "Mari, berbahagialah kita semua atas kebebasan yang telah kita peroleh!"',
                'Foto ini diambil saat sedang bepergian ke Thailand dan kebetulan dapet angle yang cocok',
                'Hippity Hoppity Whoop the image now gone',
                '-',
                '-',
                'Pengemudi yang ahli dalam mengendalikan kendaraannya',
                'Ingin menangkap pemandangan matahari pagi di pegunungan.',
                'Selama pandemi Covid-19 ini, imunitas tubuh sangat perlu dijaga. Bisa dengan cara jaga pola makan. Pola makan yang bagaimana? Dengan mengonsumsi buah dan sayur, kesehatan badan kita akan terjaga karena mengandung antioksidan dan vitamin yang baik untuk tubuh kita.',
                'jalan jalan terakhir di masa SMA',
                'Seorang musisi yang sedang menghidupi jiwa nya dan membuat dunia menjadi "ada".',
                '-',
                'Saat saya mengelili kota Semarang, saya melihat kakek nenek yang hidup dalam kondisi sederhana dan masih menjalani hidupnya bersama-sama. Kemudian saya tertarik untuk mengabadikan momen tersebut',
                'Mata. Dengan mata, kita dapat melihat keindahan dunia ini. Tetapi banyak juga kerusakan yang kita dapat lihat dari dunia ini. Maka itu, jagalah mata kita dengan baik karena sudah dianugerahi mata.',
                'Beli gudek di Jogjakarta , Beli markisa di Medan Kalau kalian memang pemuda , Mari bersama lesarikan hutan',
                'Dia yang di foto sedang mengabadikan momen yang dilihatnya. Begitu pula dengan aku, yang di kala itu sedang duduk memandangi dirinya dan mengabadikan momen itu melalui lensa ini.',
                'Matahari senja yang berada tepat di "bawah" tugu bagaikan sebuah mutiara emas yang bersinar dengan terang. Begitu ia melihatnya, ia tidak dapat melepas pandangannya dan langsung mengabadikan momen tersebut.',
                'Sebagai anggota Pramuka sejati, buanglah semua keraguan di hati. Jagalah alam dengan segenap hati, itulah Pramuka yang sejati.'
            ];

        $pamdikPengajarIG =
            [
                'said_sidqi',
                'juanluckminto',
                'steventan10',
                'ishika.gurnani',
                'ericsswtn',
                'juanluckminto',
                'ericsswtn',
                'ericsswtn',
                'felicia_ct',
                'ferdinanddmichael',
                '-',
                'reynaldoprayogo',
                'reynaldoprayogo',
                'ferdinanddmichael',
                'gabrieleaurellia',
                'ericsswtn',
                'deenrizky',
                'chriswidyatmadja',
                'farrelamadeus',
                'farrelamadeus',
                'ericsswtn',
                'ericsswtn',
                'felicia_ct',
                'felicia_ct',
                'ericsswtn'
            ];

        $pamdikPengajar = [];

        for ($i = 0; $i < 25; $i++) {
            $pamdikPengajar[$i] = [
                'photographer' => $pamdikPengajarPhotographer[$i],
                'title' => $pamdikPengajarTitle[$i],
                'caption' => $pamdikPengajarCaption[$i],
                'instagramID' => $pamdikPengajarIG[$i],
                'category' => 1,
                'directory' => 'img/subm/pamdik/pm-m-' . ($i + 1) . '.jpg',
            ];
        }

        DB::table('photos')->insert($pamdikPengajar);

        // Pamdik - Pengajar Seeder (2)
        $pamdikPengajarPhotographer =
            [
                'Albert Joseph Scriven',
                'Albert Joseph Scriven',
                'M Tubagus Rizky',
                'Bernard Adhitya Kurniawan',
                'Bernard Adhitya Kurniawan',
                'Bernard Adhitya Kurniawan',
                'Afif Panji',
                'Benaya',
                'Benaya',
                'Benaya',
                'Benaya',
                'Martinus Nathanael',
                'Martinus Nathanael',
                'Martinus Nathanael',
                'Steven Tandianus',
                'Steven Tandianus',
                'Brandon White',
                'M Tubagus Rizky',
                'Brandon White',
                'Ellen Andrea Berliandra',
                'Albert Joseph Scriven',
                'Albert Joseph Scriven',
                'Albert Joseph Scriven',
                'Ardiyanto',
                'Ardiyanto'
            ];

        $pamdikPengajarTitle =
            [
                'The Flow',
                'Small Waves',
                'Noisy Silent',
                'Insecure',
                'Best Friends Under the Sunset',
                'Blooming Rose',
                'Jump High',
                'Ah, Sunset, My Love',
                'Santai',
                'Ari Lesmana Stage Photo',
                'La Vie En Fleurs',
                'Blitzing',
                'Tunnel Vision',
                'Heart of Fire',
                'Never Too Old',
                'Strolling in The Metropolitan',
                'Vibrant Street',
                'Chilhood Dream',
                'The Waterfall',
                'Into The City Lights',
                'Under the Sea',
                'Boat\'s Eye',
                'Sea\'s Choco Milk',
                'City of Stars',
                'Kota Casablanca'
            ];

        $pamdikPengajarCaption =
            [
                'Melihat indahnya laut biru dari atas tebing',
                'Pantai yang di kelilingi tebing, di datangi ombak kecil dari laut.',
                'Pagi cerah dengan kebisingan kota yang telah bangun dari tidurnya, Ancol pantai selalu ramai dipenuhi keluarga di akhir pekan (anjay bacot banget isinya)',
                'Seorang wanita yang menatap kosong keluar jendela, takut dan ragu menatap masa depan yang kelam',
                'Dua sahabat baik yang sedang air bermain di pantai dibawah matahari senja',
                'Sebuah beauty shot yang ingin menampilkan kecantikan seorang wanita, diiringi dengan bunga-bunga yang mengembang sebagai komplemen',
                'Current Hobbies',
                'Lagi Sunset aja',
                'This photo was taken when some of us were hunting photos for our Exhibition, Narasi.',
                'Enjoying Ari Lesmana at Indonesian Idol',
                'Waiting for a man to give me flowers be like . . . Imma buy it myself, sorry',
                'Foto ini menggambarkan sebuah mobil yang bergerak cepat melewati suasana kota di malam hari',
                'Foto ini adalah sebuah mobil yang melaju cepat di bawah underpass Tomang yang diambil dari atas jalan raya melalui lubang saluran air',
                'Foto ini memperlihatkan bentuk api yang menyerupai sebuah hati di sebuah pertunjukkan Kuda Lumping. Sebagaimana hati yang membara melambangkan semangat pertunjukkan Kuda Lumping dan orang Indonesia.',
                'No matter how old you are, you are never banned from living your young dream',
                'Menyambut pagi hari minggu dengan berkeliling mencari keunikan kota ini.',
                'Rasa penasaran akan hasil yang dihasilkan dari sebuah kamera telepon pintar terekam jelas dalam foto ini pada malam hari di jantung kota yang serba cepat dan terstruktur.',
                'Sore dimana setiapa anak milenial biasanya sibuk dengan gadget, tapi di lain sisi ada juga anak-anak yang menikmati hari-harinya mengejar sebuah impian',
                'Aku menemukan sebuah air terjun di tengah tengah luasnya hutan pinus yang terisolasi dari hutan beton',
                'Pemandangan kota Seoul dari seberang sungai Han pada malam hari. Dimana orang-orang mulai menikmati sisa hari bersama dengan orang-orang kesayangan mereka, jauh dari keramaian kota.',
                'Coba iseng celupin lensa ke air laut',
                'Mau keluar prahu, ada nahkoda di depan perahunya',
                'Di pantai ngeliat banyak busa hasil dari ombak, ternyata lucu juga kalo di foto freeze',
                'Bosen dirumah jadinya jalan" ke daerah jaksel.',
                'Bangunan yang terlihat seperti kosong/jendela tidak ada yang dinyalakan diantara banyak bangunan lain yang terang benerang'
            ];

        $pamdikPengajarIG =
            [
                'Albertjsc',
                'Albertjsc',
                'tbagusrizky',
                'sinnohvan',
                'branndonwhitte',
                'sinnohvan',
                'afifpanji',
                'Benayaokta',
                'Benayaokta',
                'Benayaokta',
                'Benayaokta',
                'minus.a.r.t',
                'minus.a.r.t',
                'minus.a.r.t',
                'z3kalia',
                'z3kalia',
                'Brandonwhite',
                'tbagusrizky',
                'branndonwhitte',
                'ellenandrea_',
                'Albertjsc',
                'Albertjsc',
                'Albertjsc',
                'Ardi_yanto43',
                'Ardi_yanto43'
            ];

        $pamdikPengajar = [];

        for ($i = 0; $i < 25; $i++) {
            $pamdikPengajar[$i] = [
                'photographer' => $pamdikPengajarPhotographer[$i],
                'title' => $pamdikPengajarTitle[$i],
                'caption' => $pamdikPengajarCaption[$i],
                'instagramID' => $pamdikPengajarIG[$i],
                'category' => 2,
                'directory' => 'img/subm/pamdik/pm-p-' . ($i + 1) . '.jpg',
            ];
        }

        DB::table('photos')->insert($pamdikPengajar);
    }
}
