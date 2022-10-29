<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Barang;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Barang::create([
            'nama' => 'Death Stranding',
            'harga' => 850000,
            'genre' => 'Adventure, Action-shooter, Sci-Fi',
            'stok' => 25,
            'image' => 'death_stranding.jpeg',
            'deskripsi' => 'Dunia fantasi Death Stranding adalah Amerika Serikat yang kini tak layak huni secara terbuka. Akibat peristiwa Death Stranding, manusia harus berlindung di dalam kota bawah tanah dari udara luar yang memberikan banyak efek. Hujan atau timefall bisa membuat benda yang disentuhnya cepat usang, termasuk manusia.'
        ]);

        Barang::create([
            'nama' => 'Red Dead Redemption 2',
            'harga' => 900000,
            'genre' => 'Open world, Action-adventure',
            'stok' => 30,
            'image' => 'red_dead_redemption2.jpeg',
            'deskripsi' => 'Berperan sebagai Arthur Morgan – salah satu orang terpercaya dalam gang Van Der Linde yang dipimpin oleh Dutch Van Der Linde. Kekacauan perampokan gang Van Der Linde di Blackwater akhirnya memaksa Dutch dan para pengikutnya kabur melarikan diri. Kekacauan tersebut merupakan pukulan telak bagi gang Van Der Linde, dimana banyak anggotanya yang tewas karena insiden tersebut. Tanpa uang, gang ini tak berdaya, akhirnya Dutch bersama dengan para pengikutnya, termasuk Arthur memutuskan untuk melakukan berbagai perampokan demi membuat para anggota Van Der Linde tetap bertahan.'
        ]);

        Barang::create([
            'nama' => 'Far Cry 5',
            'harga' => 800000,
            'genre' => 'First-person shooter, Adventure',
            'stok' => 15,
            'image' => 'far_cry5.jpeg',
            'deskripsi' => 'Di seri kelima ini, Ubisoft coba menyuguhkan sebuah cerita yang berbeda dengan menampilkan sosok antagonis yang karismatik sekaligus mematikan, yaitu Joseph Seed alias “The Father”, banyak yang berfikir bahwa Joseph Seed hanyalah sekedar karakter psikopat yang fanatik & gila, sedangkan kami melihatnya sosok karakter dengan kepribadian dan motif yang kuat.'
        ]);

        Barang::create([
            'nama' => 'Stray',
            'harga' => 500000,
            'genre' => 'Adventure game, Indie game, Puzzle',
            'stok' => 50,
            'image' => 'stray.jpg',
            'deskripsi' => 'Game petualangan dengan sudut pandang orang ketiga, di mana player bermain sebagai seekor kucing oranye dengan latar dunia era cyberpunk.'
        ]);

        Barang::create([
            'nama' => 'The Witcher 3: The Wild Hunt',
            'harga' => 450000,
            'genre' => 'Adventure, Fantasy, Drama',
            'stok' => 23,
            'image' => 'the_witcher3.jpg',
            'deskripsi' => 'Melanjutkan kisah dari The Witcher 2 dengan dunia yang mulai berubah sejak aksinya yang terakhir, Geralt of Rivia – sang Witcher yang kisah perjalanannya mengalun lewat alunan musik para Bard dari seluruh penjuru The Continent – akhirnya memutuskan untuk mulai menyelesaikan konflik personalnya sendiri. Kembalinya ingatan yang sempat hilang membuat Geralt mengingat sosok wanita yang tak bisa ia lupakan begitu saja – Yennefer. Namun di atas semuanya, ia secara konsisten mendapatkan mimpi buruk soal datangnya Wild Hunt. Rombongan pasukan misterius dengan armor berwarna hitam, yang kedatangannya cukup untuk membekukan dan membunuh nafas hidup apapun yang berada di dekat mereka.'
        ]);

        Barang::create([
            'nama' => 'Grand Theft Auto V',
            'harga' => 230000,
            'genre' => 'Open world, Action-adventure',
            'stok' => 17,
            'image' => 'gtav.jpg',
            'deskripsi' => 'Selamat datang di Los Santos, rumah dan medan pertempuran bagi Michael Townley, Trevor Philips, dan Franklin Clinton. Aksi perampokan sembilan tahun lalu di North Yankton yang dilakukan oleh Michael dan Trevor bersama dengan dua kru lainnya berakhir bencana. Disergap dengan kekuatan polisi yang masif, Michael yang tengah terluka akhirnya meminta Trevor untuk menyelamatkan diri dan akhirnya menghilang dalam kabut. Sembilan tahun setelahnya, kedua “sejoli” ini hadir dengan kesimpulan yang sama – bahwa masing-masing dari teman mereka telah tewas dalam tragedi tersebut. Namun siapa yang menyangka bahwa Michael ternyata berhasil menyelamatkan diri, berlindung sebagai saksi di bawah FIB, dan meraih kekayaan. Sementara di sudut kota yang lain, Trevor yang tidak pernah mengetahui nasib Michael, harus berjuang dan memulai bisnis narkotikanya dari awal.'
        ]);
    }
}
