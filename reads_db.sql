-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 09:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_reads`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `status` varchar(15) NOT NULL,
  `tersedia` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `lokasi_buku` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul_buku`, `gambar`, `deskripsi`, `status`, `tersedia`, `kategori`, `lokasi_buku`) VALUES
(1, 'Terpikat', 'terpikat.jpg', 'Kisah ini dimulai sejak Aruna yang tidak sengaja melihat Abian dan seketika ia langsung jatuh cinta pada pandangan pertama kepada laki-laki itu. Aruna dan Abian memiliki sifat yang sangat berbeda. Abian terkenal sebagai sosok laki-laki yang sangat kaku bahkan sangat cuek kepada orang-orang yang tidak memiliki kepentingan dengannya, Abian pun tidak mengerti bagaimana bisa menjalani suatu hubungan.\r\n\r\nAbian adalah salah satu murid yang aktif serta memiliki prestasi yang baik di sekolahnya, dan ia sangat suka belajar atau mencari tahu hal-hal yang tidak ia ketahui. Sedangkan Aruna lebih sering menghabiskan waktunya untuk bermain, untuk bersantai, dan menonton drama Korea. Aruna sendiri bukanlah tipe orang yang suka belajar, karena menurutnya belajar adalah kegiatan yang sangat membosankan.\r\n\r\n\r\nTerpikat adalah kisah tentang Aruna yang mencoba meluluhkan hati Abian awal nya sangat sulit baginya, karena laki-laki itu yang terlalu tertutup, bahkan sangat sulit ditebak. Cara yang ditempuh Aruna untuk lebih dekat dengan Abian adalah dengan belajar bersama.', 'tersedia', 3, 'fiksi remaja', 'rak 3'),
(2, 'Layangan Putus', 'layangan_putus.jpg', 'Seorang gadis remaja polos yang berasal dari daerah, tumbuh, berkembang, dan menemukan cinta di kota besar yang sangat berbeda dengan iklim daerah asalnya. Mimpi sederhananya menyambung pendidikan dan menyelesaikannya tepat waktu, namun berubah setelah ia mengenal sosok lelaki tangguh Lelaki yang mandiri dan berpendirian keras mengenalkannya dengan dunia baru yang belum pernah ia temui. Dunia yang asyik dan menyenangkan yang berbeda total dengan kehidupan remaja di daerah asalnya.\r\n\r\nKinan jatuh cinta dengan sosok fun Aris yang juga memiliki sifat gigih. Aris mengubah caranya memandang dunia. Berdua menyamakan visi dan berjanji dalam ikatan pernikahan. Bersama memulai semua kehidupan dari bawah, Kinan dengan setia mendampingi Aris membangun mimpi mereka. Perubahan pola pikir Aris kembali mengubah cara pandang Kinan terhadap prioritas kehidupan. Kinan tetap setia di sisiAris dan melupakan mimpinya menjadi seorang wanita karier. Memilih merawat keluarga di rumah memenuhi permintaan Aris Dan kembali mengenal Tuhan.\r\n\r\nAris mampu meyakinkan Kinan dengan cukup ia yang bekerja di luar rumah, sudah cukup membawa Kinan, memenuhi mimpinya saat kecil bertualang menaiki balon udara. Kinan jatuh cinta akan keindahan Cappadocia dan balon udara yang menghiasi angkasa. Takdir berkata Iain. Aris menyaksikan keindahan tersebut namun Kinan hanya sanggup menikmati dari foto-foto yang ia temukan di ponsel suaminya. Bersama wanita Iain. Dua belas hari menghilang, Aris kembali ke rumah dengan semua hal baru yang belum pernah diketahui Kinan. Akankah Aris kembali berhasill membuat Kinan mengerti akan pilihannya?', 'tersedia', 2, 'fiksi remaja', 'rak 3'),
(3, 'Sagaras', 'sagaras.jpeg', 'Akhirnya. Siapa orang tua Ali dijawab di buku ini. Ali, bertahun-tahun, berusaha memecahkan misteri itu. Paib dan Seli tentu tidak akan membiarkan Ali sendirian, mereka sahabat sejati. Dan jangan lupakan, Batozar alias Master B, dengan segenap kalimat kasar, seolah tidak peduli, dia selalu siap membela. Tapi bagaimana jika misteri itu terhadang tembok kokoh SagaraSe? Dan mereka harus bertarung hidup-mati lima ronde melawan Ksatria Sagaras? Jangan khawatir, kalian akan tersenyum lebar (dan boleh jadi sambil menangis), saat tiba di halaman terakhir buku ini. Buku ini adalah buku ke-13 dari serial Bumi.', 'tersedia', 3, 'fiksi remaja', 'rak 3'),
(4, 'Laut Bercerita', 'laut_bercerita.jpg', 'Laut Bercerita, novel terbaru Leila S. Chudori, bertutur tentang kisah keluarga yang kehilangan, sekumpulan sahabat yang merasakan kekosongan di dada, sekelompok orang yang gemar menyiksa dan lancar berkhianat, sejumlah keluarga yang mencari kejelasan makam anaknya, dan tentang cinta yang tak akan luntur.', 'tersedia', 2, 'fiksi remaja', 'rak 3'),
(5, 'Merahnya Merah', 'merahnya_merah.jpg', 'Novel Merahnya Merah merupakan karya pertama Iwan Simatupang yang diterbitkan pada tahun 1968. Novel ini mengambil latar pasca revolusi, mengilustrasikan kehidupan para gelandangan yang hidup di semaraknya kota metropolitan beserta permasalahan yang ada. Kisah dimulai ketika ‘Tokoh Kita’ hadir ke gubuk gelandangan.\r\n\r\nTokoh Kita adalah tokoh utama di novel ini. Sebelum masa revolusi, ia adalah seorang calon Rahib, kemudian selama revolusi ia menjadi seorang komandan kompi, dan pada akhir revolusi ia menjadi algojo yang berdarah dingin. Pasca revolusi, ia masuk ke dalam rumah sakit jiwa hingga akhirnya dinyatakan sembuh, lalu menjadi seorang gelandangan.\r\n\r\nSaat menjadi gelandangan itu, sosok Tokoh Kita menjadi orang yang sangat difokuskan. Beriringan dengan Maria, seorang perempuan yang dulunya memiliki impian untuk menjadi seorang juru rawat, tetapi ia merupakan korban dari pelecehan dan penindasan. Maria  menjalani kehidupan menjadi gelandangan dengan cukup baik.\r\n\r\nInilah Merahnya Merah karya Iwan Simatupang yang termasyhur, unik, dan karyanya yang avant-garde. Karangan prosa baru yang pada tiap tokohnya mempunyai pikiran, perasaan, dan tindakan sebagai suatu filsafat yang dipersonifikasikan atau filsafat in action. \r\n\r\nEksistensialisme di dalam novel ini pun sungguh menjadi bentuk aliran yang diikuti dalam filsafat kehidupan. Kebebasan, pilihan hidup, kesepian, dan kesadaran sosial kerap menjadi isu pokok dalam novel Iwan Simatupang.', 'tersedia', 2, 'fiksi remaja', 'rak 3'),
(6, 'Twenty Four Eyes', '24eyes.jpg', 'Twenty Four Eyes terdiri dari sepuluh bab yang membuat cerita di dalamnya semakin menyentuh segi kemanusiaan. Novel karya Sakae Tsuboi ini diklaim sebagai novel antiperang yang tidak menunjukkan sisi gelap dari perang. Sakae hanya memperlihatkan pengaruh perang pada kehidupan orang-orang sesudahnya, bahkan walaupun perang telah berakhir, segala hal yang sudah terjadi selama perang pun mengubah banyak hal, khususnya persoalan pendidikan dan kesehatan.\r\n\r\nNovel ini mengambil kisah melalui sudut pandang anak-anak yang lugu dan guru yang antiperang sehingga akan terasa gamblang bagaimana anak-anak dalam menjalani aktivitas sehari-hari dengan bahasa dan riang walaupun perang tengah berlangsung. Ke-12 anak mengilustrasikan anak-anak dengan berbagai latar belakang keluarga, seperti ada anak dari seorang nelayan, anak orang kaya raya, anak dari pengangkut barang, dan tukang kayu.\r\n\r\nAnak-anak tersebut berkumpul dalam satu kelas. Penulis hendak menyuguhkan ilustrasi hidup pada masa-masa perang yang mana kehidupan di masa itu sangatlah tidak mudah. Dirinya berharap agar perang tidak berlangsung lagi di kehidupan baru kelak.\r\n\r\nSakae Tsuboi menuliskan kisah dalam novel ini pada tahun 1952, setelah dirinya pindah ke Tokyo. Sementara perang yang digambarkan di novel ini berakhir sesudah terjadinya bom atom Hiroshima dan Nagasaki yang membuat Kaisar bertekuk lutut pada pihak asing, tepatnya tahun 1945. Adapun perang yang dimaksud di Jepang berpengaruh pula dengan negara Indonesia, tetapi penulis tidak menyinggung permasalahan tersebut. Ia hanya berfokus dengan kisah anak-anak di Desa Tanjung dan bu guru Oishi.\r\n\r\nMenariknya, sebenarnya novel Twenty Four Eyes telah dialihwahanakan ke dalam bentuk film pada 1954. Kemudian, sebagai bentuk penghormatan pada karya Sakae Tsuboi, Prefektur Kagawa memutuskan Sakae Tsuboi Prize untuk anak-anak dari prefektur tersebut.', 'tersedia', 2, 'fiksi remaja', 'rak 3'),
(7, 'Cerita Anak Ayam', 'anak_ayam.jpg', 'Kalian pasti sudah sering melihatku di berbagai tempat daerah kalian. Tapi, sudahkah kalian tahu ceritaku? Aku yakin kalian pasti belum mengetahui ceritaku.\r\n\r\nAku juga punya petualangan, lho. Yuk, ikuti ceritaku. Kalian akan tahu bagaimana aku lahir, makan, bermain, juga menghindar dari para pemangsa. Dijamin seru, deh!\r\n\r\nDisini, kalian juga akan melihat proses aku tumbuh berkembang bersama dengan teman-teman dan keluargaku yang lain! Sini, sini aku akan ajak kalian berpetualang bersama aku dalam menjalani kehidupanku sebagai anak ayam!\r\n\r\nOh iya, selain itu, kalian akan disuguhkan dengan berbagai aktivitas seru yang akan membuat kalian semakin betah untuk berpetualang bersamaku!\r\n\r\nSiapa yang tidak sabar untuk mengikuti petualanganku?\r\nAyo, ayo kita mulai petualangan kita sekarang!\r\n\r\nBuku Cerita Anak Ayam karya Nabila Anwar akan membawa anak-anak mengikuti petualangan anak ayam yang lucu dan menggemaskan, dilengkapi dengan berbagai aktivitas-aktivitas seru di buku ini yang akan membuat anak semakin tertarik untuk mengikuti perjalanan anak ayam.', 'tersedia', 2, 'cerita anak', 'rak 1'),
(8, 'Kelelawar', 'kelelawar.jpg', 'Seri “Cerita Anak Binatang: Kelelawar” membahas tentang hewan kelelawar, yang dikemas dalam cerita singkat. Disertai pula dengan fakta-fakta tentang kelelawar dan lembar aktivitas yang menambah daya tarik buku ini.\r\n\r\nTampilannya yang interaktif dan dilengkapi ilustrasi penuh warna membuat buku ini sangat cocok untuk dijadikan sebagai sarana belajar yang menyenangkan bagi anak terkait hewan.\r\n\r\nSinopsis Buku\r\n\r\nHai teman-teman! Perkenalkan, Aku kelelawar. Biasanya orang kerap melihatku dengan rasa takut karena rupaku yang menyeramkan. Namun sebenarnya aku sama sekali tidak menyeramkan, kok! Ada sisi lain dariku yang harus kamu ketahui, loh. Dan jangan lupa ketika kalian membaca tentang kisahku, maka kalian aku tahu dimana aku tinggal, makanan apa yang aku makan, dan lain sebagainya! Jangan lupa membaca kisahku pada buku ini, ya. Pasti seru!\r\n\r\n“Alur cerita yang sederhana dan ilustrasi menarik akan membuat pembaca lebih mengerti mengenai dunia hewan. Lembar aktivitas dan fakta-fakta mengenai hewan di bagian akhir buku akan lebih melengkapi wawasan pembaca.”', 'tersedia', 1, 'cerita anak', 'rak 1'),
(9, 'Komunikasi Pendidikan', 'komunikasi_pend.jpg', 'Dalam dunia pendidikan, komunikasi itu memegang peranan penting karena bisa menjaga hubungan antara guru dan murid agar saling terjaga, sehingga tidak ada kesalahpahaman. Selain itu, komunikasi yang baik bisa menghasilkan penyampaian materi pembelajaran yang baik juga.\r\n\r\n\r\nOleh karena itu, bagi para guru sudah seharusnya menerapkan teori komunikasi dalam kegiatan pembelajaran. Dengan membaca buku Komunikasi Pendidikan yang ditulis oleh Nofrion, maka para guru bisa menentukan jenis komunikasi seperti apa yang sesuai dengan kegiatan pembelajaran.\r\n\r\n\r\n\r\n Buku yang ditulis menggunakan bahasa semi formal ini membuat para pembaca seperti membaca sebuah penelitian, sehingga isi dari dalam buku ini bisa diterapkan oleh para guru. Apabila kita membacanya dengan sungguh-sungguh, maka ilmu yang ada di dalam buku ini bisa kita serap untuk diaplikasikan di kegiatan belajar mengajar.', 'tersedia', 1, 'pendidikan', 'rak 5'),
(10, 'Menjadi Guru Profesional', 'guru_profesional.jpg', 'Seorang guru harus memiliki sikap profesional karena dengan sikap itu seorang guru bisa bertanggung jawab terhadap tugas-tugasnya. Untuk menjadi seorang guru yang profesional memang membutuhkan proses, sehingga tak bisa langsung jadi seorang guru profesional. Salah satu cara untuk menjadi guru profesional adalah menambah wawasan dengan membaca buku.\r\n\r\nBuku Menjadi Guru Profesional karya Muhammad Anwar sangat cocok dijadikan sebagai referensi untuk menambahkan wawasan tentang keprofesionalan guru. Keistimewaan dari buku ini terletak pada isinya yang di mana terdapat berbagai macam cara untuk meningkatkan kompetensi guru supaya dapat memberikan informasi dan ilmu pengetahuan dengan baik.\r\n\r\n\r\nAlangkah baiknya, jang menunda-nunda untuk menjadi seorang guru yang profesional supaya informasi dan ilmu pengetahuan dapat diberikan dengan optimal. Jadi, segera dapatkan buku ini di toko buku digital Gramedia.', 'tersedia', 2, 'pendidikan', 'rak 5'),
(11, 'Car and Driver', 'car_driver.jpg', 'Majalah Car and driver adalah sumber yang bagus untuk kamu mencari informasi jika ingin membeli mobil baru atau mencari informasi tentang model lama. Majalah ini berisi informasi tentang setiap model kendaraan dan mencakup bagian tentang perawatan kendaraan, cara belanja yang komparatif, dan aksesori untuk membantu kamu melakukan pembelian berdasarkan informasi. Majalah Car and Driver paling dikenal di bagian uji jalannya. Pada bagian uji jalan ini terdiri dari penilaian berbasis kinerja dalam berbagai kondisi, termasuk kondisi basah dan kering di jalan beraspal dan kasar.\r\n\r\n', 'tersedia', 1, 'majalah', 'rak 6'),
(12, 'Hot Rod', 'hot_rod.jpg', 'Majalah Hot Rod ini cocok untuk kamu! Sebagai majalah Hot Rodding tertua, majalah ini telah menjadi pusat budaya selama lebih dari 70 tahun. Temukan tip penghematan dan saran teknis tentang perawatan, modifikasi, perbaikan, peningkatan mesin, pengecatan, dan banyak lagi. Dapatkan berita industri terbaru dan temukan tren terbaru dalam hot rod Amerika. Sempurna untuk mereka yang menyukai hot rod, stok pro, roket reli, dan otot klasik.', 'tersedia', 1, 'majalah', 'rak 6'),
(13, 'Bermain Bersama Tini', 'tini.jpg', 'Ayo kita bermain bersama Tini dan teman-teman! Nikmati gambar-gambarnya yang indah saat kita ikut dalam berbagai petualangan seru. Tini Ikut Pesta Bunga Tini di Rumah Bibi Lusi Tini Sakit Tini dan Burung Gereja', 'tersedia', 1, 'cerita anak', 'rak 1'),
(14, 'Shirley si Penyihir Cilik', 'shirley.jpg', 'Shirley adalah penyihir cilik yang baik hati. Dengan tongkat ajaibnya, dia sering membantu teman-temannya, walaupun terkadang niat baiknya malah jadi berantakan.', 'tersedia', 1, 'cerita anak', 'rak 1'),
(15, 'Strawberry Shortcake : Piknik Bersama', 'piknik_bersama.jpg', 'Strawberry Shortcake dan teman-temannya akan pergi piknik. Mereka akan pergi piknik ke Air Terjun Berry Bitty. Mereka membawa makanan lezat untuk bekal makan siang. Blueberry Muffin menyiapkan peta dan Orange Blossom membawa kamera. Setelah selai piknik, peta yang Blueberry bawa tertiup angin. Apakah Strawberry Shortcake dan teman-temannya dapat menemukan jalan pulang?', 'tersedia', 1, 'cerita anak', 'rak 1'),
(16, 'My Little Pony: Friendship Is Magic #3', 'litle_pony.jpg', 'Selamat datang di Ponyville, rumah dari Twilight Sparkle, Rainbow Dash, Rarity, Fluttershy, Pinkie Pie, Applejack, dan semua Pony lainnya kesukaanmu! Buku ini adalah seri ketiga dari My Little Pony: Friendship is Magic. Di Ponyville, pada Pony hidup berdampingan dan saling bersahabat. Setiap harinya selalu ada keseruan baru yang mereka lakukan bersama.\r\n\r\nBuku ini memuat cerita menarik dari Ponyville yang tidak akan membuatmu bosan. Petualangan baru sedang menantimu. Baca buku dengan penuh gambar karakter Pony warna-warni ini dan ikutilah petualangan mereka!\r\nAyo kita sama-sama membaca dua kisah seru tentang indahnya persahabatan di dunia My Little Pony!\r\nSerangan Nightmare Rarity 1\r\nAda bahaya baru yang datang di Equestria. Kali ini Twilight Sparkle dan teman-temannya harus bertanding dengan musuh yang sudah lama tidak mereka temui! Dapatkah keajaiban persahabatan menyelamatkan keadaan?\r\nSerangan Nightmare Rarity 2\r\nNightmare Moon kembali, tetapi ada yang berubah semenjak ancaman terakhirnya di Equestria. Sosok baru itu, sosok yang sangat dekat dengan para poni! Apa yang harus dilakukan para poni ketika bahaya sedang mengancam rumah mereka?', 'tersedia', 2, 'cerita anak', 'rak 1'),
(17, 'Daring Duraring Belajar dari Rumah', 'daring.jpg', 'Selama masa pandemi covid-19, hampir setiap kegiatan belajar mengajar dilakukan secara online atau dalam jaringan (daring). Kegiatan belajar mengajar ini bisa dikatakan sebagai suatu hal yang baru, sehingga banyak orang, mulai dari guru, orang tua murid, dan murid untuk beradaptasi dengan kebiasaan baru ini. Oleh sebab itu, tak jarang terdapat beberapa kendala ketika mengikuti kegiatan belajar mengajar, seperti internet yang sedang mati, seorang murid yang sulit untuk bangun pagi, dan masih banyak lagi.\r\n\r\nSetiap kendala dalam kegiatan belajar secara daring ini menghasilkan berbagai macam cerita yang menarik. Selain itu, kegiatan belajar mengajar secara daring bisa menjadi suatu terobosan baru di dunia pendidikan. Supaya para orang tua, guru, dan siswa tidak kesulitan dalam melakukan proses belajar mengajar secara daring, maka dibutuhkan sebuah informasi yang bisa memberikan tips untuk mengatasi masalah atau kendala saat belajar mengajar secara daring.\r\n\r\n\r\n Buku dengan judul Daring Duraring Belajar dari Rumah  karya Momon Sudarma sangat cocok untuk dijadikan sebagai referensi agar permasalahan dan kendala-kendala saat belajar daring dapat teratasi. Meskipun buku ini, memiliki sub bab yang cukup banyak, tetapi tidak mengurangi poin-poin penting untuk mengatasi permasalahan belajar daring.', 'tersedia', 1, 'pendidikan', 'rak 5'),
(18, 'Pendidikan Karakter di Era Milenial', 'karakter.jpg', 'Dalam buku ini membahas mengenai masalah yang banyak terjadi di dunia pendidikan saat ini. Sekarang ini, cara mendidik guru era milenial sangat jarang menggunakan pendekatan untuk mengetahui peserta didiknya sehingga kebanyakan murid memandang guru hanya sebatas menjalankan suatu kewajiban.\r\n\r\nMurid datang ke kelas mendengarkan apa yang diterangkan lalu mereka pulang waktu jam pelajaran habis. Interaksi guru-siswa terbatas pada jam sekolah saja. Masyarakat sekarang lebih mengarah ke individualis masing-masing. Hal inilah yang membuat pendidikan karakter menjadi penting dengan adanya lemahnya karakter-karakter anak bangsa. Untuk itu, buku ini menjadi solusi praktis untuk dunia pendidikan yang bisa diterapkan.', 'tersedia', 1, 'pendidikan', 'rak 5'),
(19, 'Matematika Diskrit', 'mtk.jpg', 'Karena buku ini berkategori umum maka siapa saja dapat membacanya. Namun biasanya buku ini banyak dicari dan dibaca oleh kalangan remaja hingga orang dewasa yang memiliki keterkaitan terhadap ilmu matematika terkhususnya pada cabang ilmu matematika diskrit.\r\n\r\nMatematika diskrit atau diskret adalah cabang matematika yang membahas segala sesuatu yang bersifat diskrit. Diskrit disini artinya tidak saling berhubungan (lawan dari kontinu). Objek yang dibahas dalam Matematika Diskrit - seperti bilangan bulat, graf, atau kalimat logika - tidak berubah secara kontinu, tetapi memiliki nilai yang tertentu dan terpisah. Beberapa hal yang dibahas dalam matematika ini adalah teori himpunan, teori kombinatorial, teori bilangan, permutasi, fungsi, rekursif, teori graf, dan lain-lain. Matematika diskrit merupakan mata kuliah utama dan dasar untuk bidang ilmu komputer atau informatika.\r\n\r\nSinopsis\r\nBuku Matematika Diskrit (Revisi Ketujuh) disusun sebagai buku teks mahasiswa yang mengambil mata kuliah Matematika Diskrit. Matematika Diskrit merupakan mata kuliah yang fundamental dalam pendidikan ilmu komputer atau Teknik Informatika, Bahkan, saat ini Matematika Diskrit merupakan mata kuliah wajib pada program pendidikan yang termasuk ke dalam kelompok teknologi informasi.', 'tersedia', 1, 'pendidikan', 'rak 5'),
(20, 'Femina', 'femina.jpg', 'Majalah fashion Femina ini berasal dari Indonesia yang diterbitkan sejak tahun 1970 dan berada di bawah naungan Femina Group. Femina Group dimiliki oleh seorang kerabat dari sastrawan terkemuka di Indonesia yakni Sutan Takdir Alisjahbana.\r\n\r\n\r\nMajalah ini turut berkembang mengikuti pasaran global dengan menyediakan edisi majalahnya secara daring sehingga dapat dibaca melalui gadget.\r\n\r\nMajalah Femina terbit setiap bulan. Informasi yang termuat dalam majalah ini mencangkup seluruh aspek kehidupan wanita modern, mulai dari gosip, informasi penting, tips parenting, resep makanan, dan lain-lain. Melalui isinya yang menarik dan interaktif tersebut, maka majalah Femina sangat cocok dibaca untuk wanita dewasa yang berprofesi sebagai karyawan,  wirausaha, hingga ibu rumah tangga.', 'tersedia', 1, 'majalah', 'rak 6'),
(21, 'Scarf', 'scarf.jpg', 'Majalah bertajuk Scarf ini memuat konten-konten mengenai fashion khas muslimah dan terbit setiap dua bulan sekali. Majalah Scarf terbit pertama kali pada tahun 2012 di bawah naungan PT Kreasi Kriya.\r\n\r\nKeberadaan majalah Scarf ini tentu saja dapat menjadi jawaban bagi fashion para wanita muslimah di Indonesia karena konten-konten yang termuat di dalamnya banyak membahas mengenai fashion muslimah Indonesia.\r\n\r\nNamun, konten yang dimuat tidak hanya sebatas fashion muslimah saja, tetapi juga kecantikan, make-up, tutorial hijab, padu-padan gaya berpakaian muslimah, hingga travelling. Target pembaca majalah ini para remaja hingga wanita dewasa muslimah.', 'tersedia', 1, 'majalah', 'rak 6'),
(22, 'Her World', 'her_world.jpg', 'Her World adalah rekomendasi majalah fashion terbaik kedua yang terbit secara bulanan. Dalam majalah ini, banyak hal yang dibahas mulai dari lifestyle wanita dewasa, kecantikan, selebriti, berita dan tips terbaru dari mode, makanan, hiburan, dan lain-lain.\r\n\r\nMajalah fashion bertajuk Her World ini telah terbit sejak 1960 yang sebenarnya merupakan majalah asal negara Singapura. Namun, seiring berkembangnya waktu, majalah fashion ini telah membuka cabang di beberapa negara lain, termasuk Indonesia.', 'tersedia', 1, 'majalah', 'rak 6'),
(23, 'Bobo Teman Bermain dan Belajar', 'bobo.jpg', 'Bedug-bedug Nusantara\r\n\r\nSiapa yang suka menabuh bedug? Wah ternyata di berbagai daerah di Indonesia ada beraneka ragam bedug, lo. Teman-teman bisa mengetahui bedugbedug unik itu di Majalah Bobo kali ini. Dan bicara soal hal yang unik, buah ternyata bisa dijadikan olahan makanan yang rasanya unik, yaitu menjadi manisan. Siapa yang menyukainya? Hmm… Apa saja manisan itu, ya? Yuk terus membaca... Sebab Aku Baca, Aku Tahu!', 'tersedia', 1, 'majalah', 'rak 6'),
(24, 'Psikologi Pendidikan', 'psikologi.jpg', 'Buku Psikologi Pendidikan\r\n\r\nBuku yang berjudul Psikologi Pendidikan ini dibagi menjadi enam bab. Bab pertama Psikologi dan Psikologi Pendidikan, mencakup pengertian psikologi dan ruang lingkup psikologi, definisi psikologi pendidikan, manfaat psikologi pendidikan, dan metode psikologi pendidikan. Bab kedua yaitu Hakikat Belajar dan Pembelajaran, Pengertian Belajar, mencakup pengertian hasil belajar, tujuan belajar, macam-macam belajar, faktor yang mempengaruhi hasil belajar, pengaruh minat terhadap kegiatan belajar, pengertian pembelajaran, prinsip pembelajaran, dan kinerja mengajar guru/kinerja mengajar di sekolah dasar. Bab ketiga yaitu Teori Belajar dan Pembelajaran, mencakup teori behaviorisme, teori kognitivisme, teori konstruktivisme, belajar humanistik, dan belajar kecerdasan ganda. Bab keempat yaitu Unsur Belajar dan Pembelajaran, mencakup unsur dinamis pada diri guru, dinamika siswa dalam kelas, dinamika guru dalam kegiatan pembelajaran, upaya pengembangan unsur dinamis siswa dalam proses belajar, masalah-masalah dalam belajar, dan hasil belajar. Bab kelima yaitu Mengelola Proses Belajar dan Pembelajaran, mencakup pengertian belajar dan mengajar di kelas, prinsip belajar, berbagai gaya mengajar di kelas, arti berbagai gaya, mengajar efektif, kemampuan merencanakan pengajaran, kemampuan melaksanakan proses belajar mengajar, dan kemampuan mengevaluasi pelaksanaan penilaian. Bab keenam yaitu Model-Model Mengajar di Kelas, mencakup pengajaran timbal balik.\r\n\r\nKehadiran buku ini merupakan bagian dari sumbangsih pemikiran penulis untuk mengkaji/membahas tentang psikologi pendidikan karena pentingnya psikologi dalam pendidikan menjadi bahasan utama yang dibahas pada buku Psikologi Pendidikan. Banyak orang berpendapat bahwa tujuan pendidikan dasar adalah mempersiapkan generasi muda untuk melanjutkan pendidikan ke jenjang yang lebih tinggi. Pendidikan tinggi akhirnya dimaksudkan untuk mempersiapkan para mahasiswa untuk dapat memperoleh sukses dalam karier dan kehidupan pribadi, serta mampu berpartisipasi di dalam masyarakat. Semua ini kemudian dimaksudkan untuk menjadikan negara lebih maju dari pada negara-negara yang lain', 'tersedia', 1, 'pendidikan', 'rak 5');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam_buku`
--

CREATE TABLE `pinjam_buku` (
  `id` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_pinjam` datetime NOT NULL,
  `tanggal_kembali` datetime NOT NULL,
  `jumlah` int(11) NOT NULL,
  `is_approved` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pinjam_buku`
--

INSERT INTO `pinjam_buku` (`id`, `id_buku`, `id_user`, `tanggal_pinjam`, `tanggal_kembali`, `jumlah`, `is_approved`) VALUES
(1, 1, 4, '2024-05-01 07:58:28', '2024-05-10 02:58:23', 1, '2'),
(2, 4, 5, '2024-04-10 07:58:28', '2024-04-23 07:58:28', 1, '2'),
(3, 6, 6, '2024-04-24 07:58:28', '2024-05-03 07:58:28', 1, '2'),
(4, 12, 7, '2024-01-05 07:58:28', '2024-01-19 07:58:28', 1, '2'),
(5, 9, 8, '2024-04-16 07:58:28', '2024-04-24 07:58:28', 1, '2'),
(6, 7, 9, '2024-05-05 07:58:28', '2024-05-13 07:58:28', 1, '2'),
(7, 3, 9, '2024-03-12 08:26:34', '2024-03-19 08:26:34', 1, '2'),
(8, 5, 7, '2024-02-08 08:26:34', '2024-02-17 08:26:34', 1, '2'),
(9, 22, 8, '2024-03-28 08:26:34', '2024-04-10 08:26:34', 1, '2'),
(10, 18, 4, '2024-02-15 08:26:34', '2024-02-24 08:26:34', 1, '2'),
(11, 19, 7, '2024-04-01 08:31:28', '2024-04-08 08:31:28', 1, '2'),
(12, 3, 5, '2024-02-06 08:31:28', '2024-03-13 08:31:28', 1, '2'),
(13, 14, 4, '2024-02-20 08:31:28', '2024-05-27 08:31:28', 1, '2'),
(14, 17, 7, '2024-02-14 08:34:35', '2024-02-22 08:34:35', 1, '2'),
(15, 20, 4, '2024-04-07 08:34:35', '2024-04-15 08:34:35', 1, '2'),
(16, 1, 9, '2024-03-08 08:36:01', '2024-03-16 08:36:01', 1, '2'),
(17, 15, 4, '2024-03-06 08:37:32', '2024-03-14 08:37:32', 1, '2'),
(18, 1, 10, '2024-04-10 17:04:26', '2024-04-17 17:04:26', 1, '2'),
(19, 4, 11, '2024-04-13 17:06:08', '2024-04-15 17:06:09', 1, '2'),
(20, 1, 12, '2024-04-21 17:06:09', '2024-04-29 17:06:09', 1, '2'),
(21, 6, 10, '2024-04-05 17:06:09', '2024-04-13 17:06:09', 1, '2'),
(22, 9, 14, '2024-05-01 17:06:09', '2024-05-09 17:06:09', 1, '2'),
(23, 13, 15, '2024-05-01 17:06:09', '2024-05-10 17:06:09', 1, '2'),
(24, 3, 16, '2024-04-18 17:06:09', '2024-04-26 17:06:09', 1, '2'),
(25, 1, 17, '2024-05-05 17:06:09', '2024-05-12 17:06:09', 1, '2'),
(26, 8, 18, '2024-02-22 17:06:09', '2024-02-28 17:06:09', 1, '2'),
(27, 11, 19, '2024-02-10 17:06:09', '2024-02-18 17:06:09', 1, '2'),
(28, 2, 20, '2024-04-14 17:06:09', '2024-04-23 17:06:09', 1, '2'),
(29, 5, 11, '2024-04-13 17:06:09', '2024-04-19 17:06:09', 1, '2'),
(30, 18, 20, '2024-05-04 17:06:09', '2024-05-12 17:06:09', 1, '2');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `komentar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `id_buku`, `id_user`, `komentar`) VALUES
(1, 4, 5, 'Sumpah ceritanya bagus banget asli, mau deh baca lagi!'),
(2, 1, 4, 'Ceritanya bagus banget asli, mau deh baca lagi! kapan kapan'),
(3, 1, 9, 'ceritanya seru bngt'),
(4, 3, 9, 'BEEEHH ini mah ga ada tandingan kerennya ! woww'),
(5, 3, 5, 'Pengen baca lagiii, huuu ceritanya seru abis lahhh'),
(6, 17, 7, 'Ya, basic sih tapi oke lah buat ngisi waktu luang'),
(7, 15, 4, 'Buku nyaa lucuu bangett, sumpah baca ini gak bosen sama sekali'),
(8, 6, 6, 'OMGG, THIS ONE IS SO GOOD i love it ! bakal baca lagi sihh '),
(9, 18, 20, 'Buku nya inspiratif banget!!'),
(10, 1, 17, 'Bukuunyaa gilaa keren banget! ceritanya asik gak bikin bosen'),
(11, 1, 12, 'KEREEENNN ABIS\r\nJANJI MW BACA LAGI HUHUUU :))'),
(12, 1, 10, 'apaa ini kok bagus bngt pls !!!! woe harus baca sih'),
(13, 3, 16, 'Ceritanya keren banget, pengen baca terus'),
(14, 4, 11, 'Wowww omgg keren abisss gilaa '),
(15, 9, 14, 'UHUUUYY BIKIN SEMANGAT BLJR BNGT '),
(16, 6, 10, 'omg the book is so amazing ! wow');

-- --------------------------------------------------------

--
-- Table structure for table `reward`
--

CREATE TABLE `reward` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `reward` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reward`
--

INSERT INTO `reward` (`id`, `id_user`, `reward`) VALUES
(1, 4, 'Buku tulis 1 pak'),
(2, 7, 'Kotak pensil');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL,
  `is_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `username`, `password`, `is_admin`) VALUES
(1, 'Nabila Nur Azizah', 'bila', 'bila123', 1),
(2, 'Tsabita Irene Adielia', 'bita', 'bita123', 1),
(3, 'Yumna Putri Nurjanah', 'nana', 'nana123', 1),
(4, 'Thalita Oktavia', 'via', 'via123', 0),
(5, 'Raffi Ahmad', 'raffi', 'raffi123', 0),
(6, 'Salsabila Anjani', 'ani', 'ani123', 0),
(7, 'Maulana Irsyad', 'lana', 'lana123', 0),
(8, 'Pelita Indah ', 'lita', 'lita123', 0),
(9, 'Novels Nur Aini', 'aini', 'aini123', 0),
(10, 'Sabrina Melani', 'lani', 'lani123', 0),
(11, 'Pembayun Maya', 'ayun', 'ayun123', 0),
(12, 'Evitria Salma', 'evi', 'evi123', 0),
(13, 'Rosita Rahayu', 'sita', 'sita123', 0),
(14, 'Pradita Susanti', 'dita', 'dita123', 0),
(15, 'Zulfina Nabila', 'fina', 'fina123', 0),
(16, 'Siti Amanda', 'siti', 'siti123', 0),
(17, 'Aan Sumedang', 'aan', 'aan123', 0),
(18, 'Fadi Andika', 'fadi', 'fadi123', 0),
(19, 'Tania Syifa', 'nia', 'nia123', 0),
(20, 'Nurcahyo Ahmad', 'nur', 'nur123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjam_buku`
--
ALTER TABLE `pinjam_buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `reward`
--
ALTER TABLE `reward`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pinjam_buku`
--
ALTER TABLE `pinjam_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reward`
--
ALTER TABLE `reward`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pinjam_buku`
--
ALTER TABLE `pinjam_buku`
  ADD CONSTRAINT `pinjam_buku_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`),
  ADD CONSTRAINT `pinjam_buku_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `reward`
--
ALTER TABLE `reward`
  ADD CONSTRAINT `reward_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
