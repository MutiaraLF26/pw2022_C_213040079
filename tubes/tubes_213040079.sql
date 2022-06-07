-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 03:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_213040079`
--

-- --------------------------------------------------------

--
-- Table structure for table `drama`
--

CREATE TABLE `drama` (
  `id` int(11) NOT NULL,
  `judul_drama` varchar(100) NOT NULL,
  `genre` int(100) NOT NULL,
  `sinopsis` longtext NOT NULL,
  `sutradara` varchar(100) NOT NULL,
  `actors` varchar(255) NOT NULL,
  `rating_usia` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drama`
--

INSERT INTO `drama` (`id`, `judul_drama`, `genre`, `sinopsis`, `sutradara`, `actors`, `rating_usia`, `gambar`) VALUES
(2, 'While you  were Sleepingg', 3, 'Seorang wanita muda bermimpi yang dapat memprediksi masa depan bertemu seorang yang tiba-tiba mengembangkan kemampuan yang sama.', 'Oh Choong-hwan', 'Lee jong-sukBae SuzyJung Hae-inLee Sang-yeobKo Sung-hee', '18+', '629f4a032c106.jpg'),
(38, 'Descendants of the Sun', 1, 'Drama ini bercerita tentang kisah cinta yang berkembang antara seorang ahli bedah dan seorang kapten pasukan khusus.', 'Lee Eung-bok', 'song jong ki , song hye kyo', '18+', '629f36a1387a7.jpg'),
(39, 'Extraordinary You', 3, 'Eun Dan-oh yang bersekolah di sebuah akademi bergengsi.  Suatu hari, ia mengetahui bahwa dia dan semua orang di sekolahnya sebenarnya adalah karakter dalam manhwa yang berjudul Secret.  Ia memiliki kondisi jantung yang semakin memburuk, Dan-oh adalah karakter pendukung yang ditakdirkan segera meninggal dalam cerita ini.', 'Kim Sang Hyub dan Kim Sang Woo', 'Rowoon, Kim Hye Yoon, Lee Jae wook', '18+', '629f37c5755fe.jpg'),
(40, 'Strong Girl Bong-soon	', 3, 'Bong-Soon lahir dengan kekuatan seperti manusia super.  Kekuatannya adalah turun temurun dan hanya diturunkan kepada para wanita di keluarganya. Suatu hari, Bong-Soon membantu seorang sopir bus yang sedang diserang oleh seorang preman. Disitulah dia bertemua Min-Hyuk, Min-Hyuk adalah CEO perusahaan game video Ainsoft. Dia baru-baru ini menerima ancaman anonim dan bahkan diikuti oleh orang yang tidak dikenal. Min-Hyuk percaya Bong-Soon akan menjadi pengawal yang hebat dengan kekuatannya yang luar biasa. Selain menawarkan bayaran tinggi kepada Bong-Soon, ia bahkan  menawarkannya kesempatan untuk bekerja di departemen perencanaan perusahaan game-nya jika ia berhasil.', 'Lee Hyung-min', 'Park Bo-young, Park Hyung Sik, Ji Soo', '18+', '629f45fc30831.jpg'),
(41, 'What&#039;s Wrong with Secretary Kim', 1, 'Park Seo-joon adalah direktur narsis dari perusahaan keluarganya.  Sekretarisnya yang sangat cakap dan sabar, Park Min-young telah bekerja keras untuknya selama 9 tahun, memutuskan sudah waktunya untuk meninggalkan perusahaan  dan mulai fokus pada hidupnya sendiri.	', 'Park Joon-hwa', 'Park Seo Joon, Park Min-young, Lee Tae-hwan', '18+', '629f39450f073.jpg'),
(42, 'vincenzo', 6, 'Vincenzo Cassano adalah pengacara Italia dan petugas mafia yang pindah kembali ke Korea karena konflik dalam  organisasinya. Dia akhirnya berpapasan dengan seorang pengacara berlidah tajam bernama Cha-young, dan keduanya bergabung dalam menggunakan metode jahat  untuk menjatuhkan penjahat yang tidak dapat dihukum oleh hukum.', 'Kim Hee-won', 'Song Jong Ki, Jeon Yeo-been', '18+', '629f39ca261e6.jpg'),
(43, 'Snowdrop', 4, 'Pada tahun 1987, ketika gas air mata meledak seperti petasan, seorang pria berdarah melompat ke asrama perguruan  tinggi wanita dan seorang mahasiswi memperlakukannya dengan berpikir dia adalah seorang mahasiswa aktivis yang berjuang untuk generasi.  Berdasarkan catatan tulisan tangan seorang pria yang melarikan diri dari kamp penjara politik di Korea Utara.', 'Jo Hyun-tak', 'Jung Hae-in, Kim ji-soo', '18+', '629f3a637ef89.jpg'),
(44, 'Start-up', 1, 'Start Up merupakan drama romantis yang menceritakan kehidupan pemuda yang sedang berusaha memulai bisnis usaha rintisan atau start up. Adalah Seo Dal Mi seorang gadis yang bercita-cita menjadi seperti Steve Jobs. Ia bekerja paruh waktu sambil membantu neneknya berjualan.   Awalnya Dal Mi hidup bahagia bersama kakaknya, Won In Jae (Kang Han Na). Namun karena perceraian orangtuanya mereka harus terpisah. Dal Mi memilih tinggal bersama ayah dan neneknya. Sementara In Jae memilih ibunya. Keduanya masih sering bertemu meski sudah tak serumah.  Namun ibu In Jae memutuskan menikah lagi dengan pria kaya. Perubahan hidup In Jae yang menjadi anak orang kaya merubah sifatnya. Ia menjadi angkuh dan melupakan Dal Mi. Akhirnya Dal Mi pun ikut membenci kakaknya itu.  Kesedihan Dal Mi karena kehilangan sosok kakak membuat neneknya ikut sedih. Neneknya akhirnya meminta Ji Pyeong yang secara kebetulan dirawat olehnya untuk menjadi sahabat pena Dal Mi. Di sini kisah cinta pertama Dal Mi dimulai.', 'Oh Choong Wan', 'Nam Joo-hyuk, Kim Seon-ho, Bae Suzy', '18+', '629f3b2b449bb.jpg'),
(45, 'Hometown Cha-Cha-Cha', 5, 'Yoon Hye-Jin (Shin Min-a) bekerja sebagai dokter gigi. Dia adalah orang yang realistis,  tetapi karena haknya, yang hanya sebagian kecil dari pikirannya, hidupnya berubah. Dia akhirnya pindah ke desa tepi laut Gongjin. Di sana, Yoon Hye-Jin bertemu  Hong Du-Sik (Kim Seon-ho). Dia menjadi penasaran tentang pria itu. Hong Du-Sik disebut Tuan Hong oleh penduduk setempat. Dia adalah pria yang tampan dan pintar.  Secara resmi, dia menganggur, tetapi dia selalu tampak sibuk. Jika seseorang membutuhkan bantuan, Hong Du-Sik adalah orang pertama yang muncul dan  memberikan bantuan.', 'Yu Je-won', 'Kim seon-ho, Shin Min-a, Km Ji-hyun', '18+', '629f3bcb9170d.jpg'),
(46, 'Business Proposal', 1, 'Business Proposal mengisahkan Shin Ha-ri (Kim Se-jeong) yang merupakan karyawan perusahaan.  Ia bekerja sebagai peneliti dalam mengembangkan makanan atau menu-menu baru untuk produk perusahaan tersebut.  Shin Ha-ri bersahabat dengan Jin Young-seo (Seol In-A) yang merupakan wanita karier dengan latar belakang keluarga kaya raya.  Hal itu membuat Jin Young-seo kerap diminta keluarga untuk kencan buta dengan pewaris perusahaan lainnya. Namun, Jin Young-seo  tidak pernah mau menghadiri kencan buta itu karena ia ingin menjalin hubungan dengan pria yang ia sukai dan temui sendiri, bukan lewat perjodohan.  Sehingga, Jin Young-seo selalu meminta bantuan Shin Ha-ri untuk menggantikannya hadir di kencan buta tersebut. S hin Ha-ri pun kerap melakukan &#039;kegilaan&#039; supaya laki-laki yang dijodohkan itu kabur bahkan menyebarkan rumor mengenai Jin Young-seo.', 'Park Seon Seo', 'Ahn Hyo-Seop, Kim se-joang', '18+', '629f3c7ee3383.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `nama_genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_genre`, `nama_genre`) VALUES
(1, 'romantis'),
(2, 'komedi'),
(3, 'fantasi'),
(4, 'laga'),
(5, 'komedi romantis'),
(6, 'komedi hitam');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, '', '$2y$10$Qe3VAoXYEfVSsrTOcA7Zje2le4q9i.EpW7JOJqRNWFgFQJ/JzEidS'),
(2, 'admin', '$2y$10$Qr7jd/W8PewloGznEnUsPukEHtUv2j3gB6ozxAUUM8OpyUyTvPiY.'),
(3, 'mutiara.laelani@gmail.com', '$2y$10$31Vj5nTDlt/4tFssomMuVOYVro/mwO4ZG3jl3RvTVr.BSl2cL.53.'),
(4, 'aa', '$2y$10$62WJoN/ob9isP.MQpYp/kOFbksztTY/tywyk0Puw3TIexzkwfoyv.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drama`
--
ALTER TABLE `drama`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre` (`genre`) USING BTREE;

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drama`
--
ALTER TABLE `drama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `drama`
--
ALTER TABLE `drama`
  ADD CONSTRAINT `genre` FOREIGN KEY (`genre`) REFERENCES `genre` (`id_genre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
