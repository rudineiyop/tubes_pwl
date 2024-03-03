<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class PostsTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \DB::table('posts')->truncate();

        \DB::table('posts')->insert([
            [
                'genre_id' => "4",
                'author_id' => "3",
                'title' => "Harry Potter",
                'slug' => "harry-potter",
                'post_view' => 0,
                'excerpt' => "Cerpen ini mengisahkan tentang petualangan seorang penyihir remaja bernama Harry Potter dan sahabatnya, Ronald Bilius Weasley dan Hermione Jean Granger, yang merupakan pelajar di Sekolah Sihir Hogwarts.",
                'body' => "Harry memulai tahun ketiganya di Hogwarts dengan tidak cukup menyenangkan. Secara ceroboh dia menyihir bibi Merge, kemudian melarikan diri. Di tengah perjalanannya, dia membaca berita tentang kaburnya seorang tawanan berbahaya, Sirius Black, yang dirumorkan ingin membunuhnya. Mr. Weasley kemudian memintanya untuk mengucapkan janji yang aneh, bahwa tak peduli apapun yang dia dengar, dia tidak akan pergi untuk mencari Black. Kebingungan, Harry mengiyakan saja. Dalam perjalanan kembali ke sekolah, Harry melihat Dementor, makhluk penghisap jiwa, berkeliaran di sekitar Hogwarts sebagai perlindungan terhadap Black. Pengaruh Dementor terhadap Harry jauh lebih besar dibandingkan terhadap siswa-siswa Hogwarts, karena masa kecilnya yang suram. Setiap kali mereka mendekat, Harry akan kolaps. Profesor Lupin, guru Pertahanan terhadap Sihir Hitam yang baru, kemudian mengajarinya mantra Patronus, satu-satunya mantra yang dapat digunakan untuk melawan Dementor.
                Sekolah tahun ketiga dimulai, dan merekapun tenggelam dalam tugas. Di tengah-tengah itu, Ron dan Hermione terlibat dalam percekcokan kecil akibat perilaku hewan peliharaan mereka. Hermione mengambil kelas yang sangat banyak, bahkan teman-temannya bingung bagaimana dia bisa mengikuti semua kelas yang diambilnya. Di tengah kepadatan aktivitasnya itu kucing Hermione, Crookshanks, berulang-ulang berusaha memakan tikus Ron, Scabbers; sehingga dua sahabat itu tak henti-hentinya beradu argumen tentang hewan peliharaan mereka. Perdebatan mereka terhenti setelah mereka menemukan ekor Scabbers terlihat di antara mulut Crookshanks, yang membuat hati Ron hancur.  
                Harry mendapat panggilan dari Black ketika dia diam-diam masuk kastil. Pada akhir tahun beberapa kejadian berlangsung beruntun dialami Harry dan teman-temannya. Tikus Ron, Scabbers, ternyata masih hidup, dan ternyata merupakan jelmaan dari penyihir, Peter Pettigrew, orang yang disangka sudah mati.
                Harry kemudian juga mengetahui bahwa yang menghianati orang tuanya bukanlah Sirius Black, melainkan Peter. Sayangnya Peter berhasil melarikan diri di kegelapan malam, sehingga lolos dari hukuman akibat kejahatannya.",
                'created_at' =>now(),
            ],
            [
                'genre_id' => "4",
                'author_id' => "1",
                'title' => "Cindelaras",
                'slug' => "cindelaras",
                'post_view' => 0,
                'excerpt' => "Cerpen ini mengisahkan tentang petualangan seorang penyihir remaja bernama Harry Potter dan sahabatnya, Ronald Bilius Weasley dan Hermione Jean Granger, yang merupakan pelajar di Sekolah Sihir Hogwarts.",
                'body' => "Harry memulai tahun ketiganya di Hogwarts dengan tidak cukup menyenangkan. Secara ceroboh dia menyihir bibi Merge, kemudian melarikan diri. Di tengah perjalanannya, dia membaca berita tentang kaburnya seorang tawanan berbahaya, Sirius Black, yang dirumorkan ingin membunuhnya. Mr. Weasley kemudian memintanya untuk mengucapkan janji yang aneh, bahwa tak peduli apapun yang dia dengar, dia tidak akan pergi untuk mencari Black. Kebingungan, Harry mengiyakan saja. Dalam perjalanan kembali ke sekolah, Harry melihat Dementor, makhluk penghisap jiwa, berkeliaran di sekitar Hogwarts sebagai perlindungan terhadap Black. Pengaruh Dementor terhadap Harry jauh lebih besar dibandingkan terhadap siswa-siswa Hogwarts, karena masa kecilnya yang suram. Setiap kali mereka mendekat, Harry akan kolaps. Profesor Lupin, guru Pertahanan terhadap Sihir Hitam yang baru, kemudian mengajarinya mantra Patronus, satu-satunya mantra yang dapat digunakan untuk melawan Dementor.
                Sekolah tahun ketiga dimulai, dan merekapun tenggelam dalam tugas. Di tengah-tengah itu, Ron dan Hermione terlibat dalam percekcokan kecil akibat perilaku hewan peliharaan mereka. Hermione mengambil kelas yang sangat banyak, bahkan teman-temannya bingung bagaimana dia bisa mengikuti semua kelas yang diambilnya. Di tengah kepadatan aktivitasnya itu kucing Hermione, Crookshanks, berulang-ulang berusaha memakan tikus Ron, Scabbers; sehingga dua sahabat itu tak henti-hentinya beradu argumen tentang hewan peliharaan mereka. Perdebatan mereka terhenti setelah mereka menemukan ekor Scabbers terlihat di antara mulut Crookshanks, yang membuat hati Ron hancur.  
                Harry mendapat panggilan dari Black ketika dia diam-diam masuk kastil. Pada akhir tahun beberapa kejadian berlangsung beruntun dialami Harry dan teman-temannya. Tikus Ron, Scabbers, ternyata masih hidup, dan ternyata merupakan jelmaan dari penyihir, Peter Pettigrew, orang yang disangka sudah mati.
                Harry kemudian juga mengetahui bahwa yang menghianati orang tuanya bukanlah Sirius Black, melainkan Peter. Sayangnya Peter berhasil melarikan diri di kegelapan malam, sehingga lolos dari hukuman akibat kejahatannya.",
                'created_at' =>now(),
            ],
            [
                'genre_id' => "2",
                'author_id' => "3",
                'title' => "Cinderella",
                'slug' => "cinderella",
                'post_view' => 0,
                'excerpt' => "Cerpen ini mengisahkan tentang petualangan seorang penyihir remaja bernama Harry Potter dan sahabatnya, Ronald Bilius Weasley dan Hermione Jean Granger, yang merupakan pelajar di Sekolah Sihir Hogwarts.",
                'body' => "Harry memulai tahun ketiganya di Hogwarts dengan tidak cukup menyenangkan. Secara ceroboh dia menyihir bibi Merge, kemudian melarikan diri. Di tengah perjalanannya, dia membaca berita tentang kaburnya seorang tawanan berbahaya, Sirius Black, yang dirumorkan ingin membunuhnya. Mr. Weasley kemudian memintanya untuk mengucapkan janji yang aneh, bahwa tak peduli apapun yang dia dengar, dia tidak akan pergi untuk mencari Black. Kebingungan, Harry mengiyakan saja. Dalam perjalanan kembali ke sekolah, Harry melihat Dementor, makhluk penghisap jiwa, berkeliaran di sekitar Hogwarts sebagai perlindungan terhadap Black. Pengaruh Dementor terhadap Harry jauh lebih besar dibandingkan terhadap siswa-siswa Hogwarts, karena masa kecilnya yang suram. Setiap kali mereka mendekat, Harry akan kolaps. Profesor Lupin, guru Pertahanan terhadap Sihir Hitam yang baru, kemudian mengajarinya mantra Patronus, satu-satunya mantra yang dapat digunakan untuk melawan Dementor.
                Sekolah tahun ketiga dimulai, dan merekapun tenggelam dalam tugas. Di tengah-tengah itu, Ron dan Hermione terlibat dalam percekcokan kecil akibat perilaku hewan peliharaan mereka. Hermione mengambil kelas yang sangat banyak, bahkan teman-temannya bingung bagaimana dia bisa mengikuti semua kelas yang diambilnya. Di tengah kepadatan aktivitasnya itu kucing Hermione, Crookshanks, berulang-ulang berusaha memakan tikus Ron, Scabbers; sehingga dua sahabat itu tak henti-hentinya beradu argumen tentang hewan peliharaan mereka. Perdebatan mereka terhenti setelah mereka menemukan ekor Scabbers terlihat di antara mulut Crookshanks, yang membuat hati Ron hancur.  
                Harry mendapat panggilan dari Black ketika dia diam-diam masuk kastil. Pada akhir tahun beberapa kejadian berlangsung beruntun dialami Harry dan teman-temannya. Tikus Ron, Scabbers, ternyata masih hidup, dan ternyata merupakan jelmaan dari penyihir, Peter Pettigrew, orang yang disangka sudah mati.
                Harry kemudian juga mengetahui bahwa yang menghianati orang tuanya bukanlah Sirius Black, melainkan Peter. Sayangnya Peter berhasil melarikan diri di kegelapan malam, sehingga lolos dari hukuman akibat kejahatannya.",
                'created_at' =>now(),
            ],
            [
                'genre_id' => "4",
                'author_id' => "4",
                'title' => "Malin Kundang",
                'slug' => "malin-kundang",
                'post_view' => 0,
                'excerpt' => "Cerpen ini mengisahkan tentang petualangan seorang penyihir remaja bernama Harry Potter dan sahabatnya, Ronald Bilius Weasley dan Hermione Jean Granger, yang merupakan pelajar di Sekolah Sihir Hogwarts.",
                'body' => "Harry memulai tahun ketiganya di Hogwarts dengan tidak cukup menyenangkan. Secara ceroboh dia menyihir bibi Merge, kemudian melarikan diri. Di tengah perjalanannya, dia membaca berita tentang kaburnya seorang tawanan berbahaya, Sirius Black, yang dirumorkan ingin membunuhnya. Mr. Weasley kemudian memintanya untuk mengucapkan janji yang aneh, bahwa tak peduli apapun yang dia dengar, dia tidak akan pergi untuk mencari Black. Kebingungan, Harry mengiyakan saja. Dalam perjalanan kembali ke sekolah, Harry melihat Dementor, makhluk penghisap jiwa, berkeliaran di sekitar Hogwarts sebagai perlindungan terhadap Black. Pengaruh Dementor terhadap Harry jauh lebih besar dibandingkan terhadap siswa-siswa Hogwarts, karena masa kecilnya yang suram. Setiap kali mereka mendekat, Harry akan kolaps. Profesor Lupin, guru Pertahanan terhadap Sihir Hitam yang baru, kemudian mengajarinya mantra Patronus, satu-satunya mantra yang dapat digunakan untuk melawan Dementor.
                Sekolah tahun ketiga dimulai, dan merekapun tenggelam dalam tugas. Di tengah-tengah itu, Ron dan Hermione terlibat dalam percekcokan kecil akibat perilaku hewan peliharaan mereka. Hermione mengambil kelas yang sangat banyak, bahkan teman-temannya bingung bagaimana dia bisa mengikuti semua kelas yang diambilnya. Di tengah kepadatan aktivitasnya itu kucing Hermione, Crookshanks, berulang-ulang berusaha memakan tikus Ron, Scabbers; sehingga dua sahabat itu tak henti-hentinya beradu argumen tentang hewan peliharaan mereka. Perdebatan mereka terhenti setelah mereka menemukan ekor Scabbers terlihat di antara mulut Crookshanks, yang membuat hati Ron hancur.  
                Harry mendapat panggilan dari Black ketika dia diam-diam masuk kastil. Pada akhir tahun beberapa kejadian berlangsung beruntun dialami Harry dan teman-temannya. Tikus Ron, Scabbers, ternyata masih hidup, dan ternyata merupakan jelmaan dari penyihir, Peter Pettigrew, orang yang disangka sudah mati.
                Harry kemudian juga mengetahui bahwa yang menghianati orang tuanya bukanlah Sirius Black, melainkan Peter. Sayangnya Peter berhasil melarikan diri di kegelapan malam, sehingga lolos dari hukuman akibat kejahatannya.",
                'created_at' =>now(),
            ],
            [
                'genre_id' => "5",
                'author_id' => "3",
                'title' => "KKN di desa Penari",
                'slug' => "kkn-di-desa-penari",
                'post_view' => 0,
                'excerpt' => "Cerpen ini mengisahkan tentang petualangan seorang penyihir remaja bernama Harry Potter dan sahabatnya, Ronald Bilius Weasley dan Hermione Jean Granger, yang merupakan pelajar di Sekolah Sihir Hogwarts.",
                'body' => "Harry memulai tahun ketiganya di Hogwarts dengan tidak cukup menyenangkan. Secara ceroboh dia menyihir bibi Merge, kemudian melarikan diri. Di tengah perjalanannya, dia membaca berita tentang kaburnya seorang tawanan berbahaya, Sirius Black, yang dirumorkan ingin membunuhnya. Mr. Weasley kemudian memintanya untuk mengucapkan janji yang aneh, bahwa tak peduli apapun yang dia dengar, dia tidak akan pergi untuk mencari Black. Kebingungan, Harry mengiyakan saja. Dalam perjalanan kembali ke sekolah, Harry melihat Dementor, makhluk penghisap jiwa, berkeliaran di sekitar Hogwarts sebagai perlindungan terhadap Black. Pengaruh Dementor terhadap Harry jauh lebih besar dibandingkan terhadap siswa-siswa Hogwarts, karena masa kecilnya yang suram. Setiap kali mereka mendekat, Harry akan kolaps. Profesor Lupin, guru Pertahanan terhadap Sihir Hitam yang baru, kemudian mengajarinya mantra Patronus, satu-satunya mantra yang dapat digunakan untuk melawan Dementor.
                Sekolah tahun ketiga dimulai, dan merekapun tenggelam dalam tugas. Di tengah-tengah itu, Ron dan Hermione terlibat dalam percekcokan kecil akibat perilaku hewan peliharaan mereka. Hermione mengambil kelas yang sangat banyak, bahkan teman-temannya bingung bagaimana dia bisa mengikuti semua kelas yang diambilnya. Di tengah kepadatan aktivitasnya itu kucing Hermione, Crookshanks, berulang-ulang berusaha memakan tikus Ron, Scabbers; sehingga dua sahabat itu tak henti-hentinya beradu argumen tentang hewan peliharaan mereka. Perdebatan mereka terhenti setelah mereka menemukan ekor Scabbers terlihat di antara mulut Crookshanks, yang membuat hati Ron hancur.  
                Harry mendapat panggilan dari Black ketika dia diam-diam masuk kastil. Pada akhir tahun beberapa kejadian berlangsung beruntun dialami Harry dan teman-temannya. Tikus Ron, Scabbers, ternyata masih hidup, dan ternyata merupakan jelmaan dari penyihir, Peter Pettigrew, orang yang disangka sudah mati.
                Harry kemudian juga mengetahui bahwa yang menghianati orang tuanya bukanlah Sirius Black, melainkan Peter. Sayangnya Peter berhasil melarikan diri di kegelapan malam, sehingga lolos dari hukuman akibat kejahatannya.",
                'created_at' =>now(),
            ],
            [
                'genre_id' => "5",
                'author_id' => "4",
                'title' => "Petualangan Dora",
                'slug' => "petualangan-dora",
                'post_view' => 0,
                'excerpt' => "Cerpen ini mengisahkan tentang petualangan seorang penyihir remaja bernama Harry Potter dan sahabatnya, Ronald Bilius Weasley dan Hermione Jean Granger, yang merupakan pelajar di Sekolah Sihir Hogwarts.",
                'body' => "Harry memulai tahun ketiganya di Hogwarts dengan tidak cukup menyenangkan. Secara ceroboh dia menyihir bibi Merge, kemudian melarikan diri. Di tengah perjalanannya, dia membaca berita tentang kaburnya seorang tawanan berbahaya, Sirius Black, yang dirumorkan ingin membunuhnya. Mr. Weasley kemudian memintanya untuk mengucapkan janji yang aneh, bahwa tak peduli apapun yang dia dengar, dia tidak akan pergi untuk mencari Black. Kebingungan, Harry mengiyakan saja. Dalam perjalanan kembali ke sekolah, Harry melihat Dementor, makhluk penghisap jiwa, berkeliaran di sekitar Hogwarts sebagai perlindungan terhadap Black. Pengaruh Dementor terhadap Harry jauh lebih besar dibandingkan terhadap siswa-siswa Hogwarts, karena masa kecilnya yang suram. Setiap kali mereka mendekat, Harry akan kolaps. Profesor Lupin, guru Pertahanan terhadap Sihir Hitam yang baru, kemudian mengajarinya mantra Patronus, satu-satunya mantra yang dapat digunakan untuk melawan Dementor.
                Sekolah tahun ketiga dimulai, dan merekapun tenggelam dalam tugas. Di tengah-tengah itu, Ron dan Hermione terlibat dalam percekcokan kecil akibat perilaku hewan peliharaan mereka. Hermione mengambil kelas yang sangat banyak, bahkan teman-temannya bingung bagaimana dia bisa mengikuti semua kelas yang diambilnya. Di tengah kepadatan aktivitasnya itu kucing Hermione, Crookshanks, berulang-ulang berusaha memakan tikus Ron, Scabbers; sehingga dua sahabat itu tak henti-hentinya beradu argumen tentang hewan peliharaan mereka. Perdebatan mereka terhenti setelah mereka menemukan ekor Scabbers terlihat di antara mulut Crookshanks, yang membuat hati Ron hancur.  
                Harry mendapat panggilan dari Black ketika dia diam-diam masuk kastil. Pada akhir tahun beberapa kejadian berlangsung beruntun dialami Harry dan teman-temannya. Tikus Ron, Scabbers, ternyata masih hidup, dan ternyata merupakan jelmaan dari penyihir, Peter Pettigrew, orang yang disangka sudah mati.
                Harry kemudian juga mengetahui bahwa yang menghianati orang tuanya bukanlah Sirius Black, melainkan Peter. Sayangnya Peter berhasil melarikan diri di kegelapan malam, sehingga lolos dari hukuman akibat kejahatannya.",
                'created_at' =>now(),
            ],
            
        ]);
        
    }
}
