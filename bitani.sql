-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 04:38 PM
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
-- Database: `bitani`
--

-- --------------------------------------------------------

--
-- Table structure for table `diskusi`
--

CREATE TABLE `diskusi` (
  `id` int(11) NOT NULL,
  `topik` text NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diskusi`
--

INSERT INTO `diskusi` (`id`, `topik`, `komentar`) VALUES
(43, 'bawang', 'goreng/rebus?');

-- --------------------------------------------------------

--
-- Table structure for table `grafik02`
--

CREATE TABLE `grafik02` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `benih` int(11) NOT NULL,
  `bibit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grafik02`
--

INSERT INTO `grafik02` (`id`, `nama`, `kontak`, `benih`, `bibit`) VALUES
(1, 'Garuda Seed', '+6281991879504', 46, 0),
(2, 'Botani Seed', ' +6281299450708', 23, 22),
(3, 'Nusagrow Farm', '+6281314746811', 0, 18),
(4, 'Rumah Bibit Tanaman Uwais', '+6285778672400', 0, 27),
(5, 'Agro Tunas Makmur', '+6285718073779', 31, 12),
(6, 'Super Produk (Hidroponik Shop)', '+628111130243', 42, 0),
(15, 'Elisarta Talenta Agro', '+6281340582187', 0, 23),
(16, 'Asia Agro Sejahtera', '+6282518312664', 20, 18),
(17, 'Benih Dramaga', '+6285211474434', 31, 0),
(18, 'CV. Alam Hijau Makmur', '+6281381366188', 22, 14),
(19, 'TM jawara bibit', '+6287866171170', 13, 0),
(20, 'ZPLANT Official', '+6285211474434', 0, 25);

-- --------------------------------------------------------

--
-- Table structure for table `kalkulator`
--

CREATE TABLE `kalkulator` (
  `id` int(11) NOT NULL,
  `tanaman` text NOT NULL,
  `jarak_panjang` float NOT NULL,
  `jarak_lebar` float NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kalkulator`
--

INSERT INTO `kalkulator` (`id`, `tanaman`, `jarak_panjang`, `jarak_lebar`, `harga`) VALUES
(1, 'Jagung', 0.5, 0.2, 2000),
(3, 'Tomat', 0.4, 0.5, 1000),
(4, 'Kol', 0.6, 0.5, 1000),
(6, 'Wortel', 0.1, 0.1, 1000),
(7, 'Kacang Panjang', 0.2, 0.4, 1000),
(8, 'Pisang', 2, 2, 9000),
(9, 'Alpukat', 5, 5, 45000),
(10, 'Terong', 0.5, 0.7, 6500),
(11, 'Kentang', 0.1, 0.1, 2800),
(12, 'Talas', 0.5, 0.4, 1200),
(13, 'Singkong', 1, 0.7, 1000),
(14, 'Sukun', 3, 5, 15000),
(15, 'Pepaya', 2.5, 2.5, 7000),
(16, 'Mangga', 10, 10, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id` int(11) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `supplier` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `lokasi` text NOT NULL,
  `alamat` text NOT NULL,
  `kontak` mediumtext NOT NULL,
  `longitude` text NOT NULL,
  `latitude` text NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `jenis`, `supplier`, `email`, `lokasi`, `alamat`, `kontak`, `longitude`, `latitude`, `deskripsi`, `gambar`) VALUES
(4, 'Benih', 'Super Produk (Hidroponik Shop)', 'superproduk@gmail.com', 'Kota Bogor', 'Ruko Braja Mustika, Jl. DR. Sumeru No.14, RT.01/RW.01, Menteng, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16111', '08111130243, http://www.superproduk.com/', '-6.5822685', '106.7758371', 'SuperProduk merupakan toko terbesar perlengkapan pertanian khususnya Hidroponik, Greenhouse, Indoor Growing, Vertical Farming, Urban Farming &amp; Teknologi pertanian lainnya. kami berharap dengan adanya SuperProduk, dapat membantu para petani mendapatkan produk pertanian berkualitas &amp; terjangkau, sehingga dapat membantu memajukan pertanian Indonesia.', '65652df44888b.png'),
(6, 'Bibit', 'Multi Agri Sarana', 'multiagrasarana@gmail.com', 'Kota Bogor', 'Jl. Raden Khanafiah No.01, RT.01/RW.05, Cimahpar, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16155', '081210808879, multiagrisarana.com', '-6.5818711', '106.8235106', 'Multi Agri Sarana adalah sebuah perusahaan agribisnis yang bergerak dibidang pengadaan/penyedia benih unggul tanaman buah dan sayuran yang terdiri dari berbagai varietas yang berbeda sesuai dengan kebutuhan Anda, Insya Allah benih yang kami jual ini terjamin kualitas dan mutunya, kami selalu berusaha mengutamakan kepuasan pelanggan kami, semoga usaha kami ini bisa bermanfaat dan saling menguntungkan', '6565437c83538.png'),
(7, 'Bibit', 'Sentra Tani Bogor (Harvin Gree', 'sentratani@gmail.com', 'Kota Bogor', 'No. 4 Perumnas Bantarjati, Kel, Utara, Jl. Palupuh Raya, RT.02/RW.06, Tegal Gundil, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16152', '085311222900, toko.sentratani.com', '-6.5798025', '106.8134019', 'Toko Sentra Tani adalah supplier penyedia bibit, benih, pupuk,dan pestisida ', '6565442f63b9d.png'),
(8, 'Benih dan Bibit', 'Agro Tunas Makmur', 'agrotunas@gmail.com', 'Kota Bogor', 'Jl. Raya Jasinga Tenjo, kp Anyarsati RT. 005/ RW. 001, Cikopomayak, kec Jasinga, Bogor, Bogor 16770', '(+62) 85718073779, agrotunas.co.id', '-6.4663016', '106.4596238', 'CV. Agro Tunas Makmur adalah suppllie penyedia benih pepaya', '656544a7b4bc2.png'),
(9, 'Bibit', 'Elisarta Talenta Agro', 'elisarta@gmail.com', 'Kota Bogor', 'Jl SIliwangi no.144B, Batutulis, Bogor', '(+62) 81340582187, elisartatalentaagro.web.indotrading.com', '-6.6193391', '106.8109462', 'Elisarta Talenta Agro adalah supplier penyedia bibit jahe merah', '656545a975b44.png'),
(10, 'Bibit', 'Lapak Bibit', 'lapakbibit@gmail.com', 'Kabupaten Bogor', 'Muaraberes, nomor 24, Rt 03/04, Kel, Sukahati, Kec. Cibinong, Kabupaten Bogor, Jawa Barat 16913', '081908606999, lapakbibit.com', '106.8080864', '-6.4899448', 'CV. Lapak Bibit adalah supplier penyedia bibit tanaman unggul berkualitas', '6569affc998e5.png'),
(11, 'Bibit', 'Rumah Bibit Tanaman Uwais', 'uwais@gmail.com', 'Kota Bogor', 'Kp. Lebaksari No.42 RT/RW 03/14, RT.01/RW.14, Pamoyanan, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16136', '085778672400', '106.8066747', '-6.6313575', 'Rumah Bibit Tanaman Uwais adalah supplier penyedia bibit dan tanaman buah', '6569f06df208b.png');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_supplier`
--

CREATE TABLE `tabel_supplier` (
  `id` int(11) NOT NULL,
  `jenis` enum('Bibit','Benih','Benih dan Bibit') NOT NULL,
  `supplier` varchar(32) NOT NULL,
  `email` text NOT NULL,
  `lokasi` enum('Kota Bogor','Kabupaten Bogor') NOT NULL,
  `alamat` varchar(159) NOT NULL,
  `kontak` varchar(100) NOT NULL,
  `longitude` text NOT NULL,
  `latitude` text NOT NULL,
  `deskripsi` varchar(419) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tabel_supplier`
--

INSERT INTO `tabel_supplier` (`id`, `jenis`, `supplier`, `email`, `lokasi`, `alamat`, `kontak`, `longitude`, `latitude`, `deskripsi`, `gambar`) VALUES
(1, 'Bibit', 'Garuda Seed', 'garudaseed@gmail.com', '', '106.8162254', '-6.574872400', '106.8162254', '-6.574872400', 'Garuda Seed adalah sebuah merek benih sayuran yang diproduksi dan dikemas oleh PT Mahatani Pertiwi Sejahtera. Produk kami telah dipasarkan ke seluruh Indonesia untuk memenuhi kebutuhan benih nasional yang bermutu dan berkualitas  dengan harga yang terjangkau. Pabrik pengolahan kami berbasis di Kota Bogor, namun mitra produksi kami tersebar di beberapa wilayah pulau Jawa.', ''),
(2, 'Benih dan Bibit', 'Botani Seed IPB', 'botaniseedipb@gmail.com', 'Kota Bogor', 'Jl. Ciremei Ujung No.28, RT.03/RW.03, Babakan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16129', 'Telp (Personal ) : +62 81299450708\r\nTelp (Office) : +6251 8384422\r\nFax. +6251 8310044', '106.8007058', '-6.587215000', 'PT. Botani Seed Indonesia (PT. BSI) adalah perusahaan benih pangan dan hortikultura berbasis inovasi perguruan tinggi Institut Pertanian Bogor (IPB) yang berdiri pada tahun 2016. Dalam pengembangan industri benih hortikultura PT. Botani Seed Indonesia (PT. BSI) mengembangkan industri bibit baru tropika dalam rangka mendukung program Revolusi Oranye yang dicetuskan oleh Presiden RI tahun 2014.', 'botaniseedipb.png'),
(3, 'Bibit', 'NUSAGROW FARM', 'nusagrowfarm@gmail.com', 'Kota Bogor', 'Batuhulung RT 3/1, RT.03/RW.01, Balungbangjaya, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16116', '081314746811', '106.7443255', '-6.563402817', 'Nusagrow Farm adalah supplier yang menyediakan pembibitan Tanaman Buah dan Wisata Petik Jambu Krista', ''),
(4, 'Benih', 'Super Produk (Hidroponik Shop)', 'superproduk@gmail.com', 'Kota Bogor', 'Ruko Braja Mustika, Jl. DR. Sumeru No.14, RT.01/RW.01, Menteng, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16111', '08111130243, http://www.superproduk.com/', '106.775837100', '-6.5822685', 'SuperProduk merupakan toko terbesar perlengkapan pertanian khususnya Hidroponik, Greenhouse, Indoor Growing, Vertical Farming, Urban Farming & Teknologi pertanian lainnya. kami berharap dengan adanya SuperProduk, dapat membantu para petani mendapatkan produk pertanian berkualitas & terjangkau, sehingga dapat membantu memajukan pertanian Indonesia.', '65652df44888b.png'),
(6, 'Bibit', 'Multi Agri Sarana', 'multiagrasarana@gmail.com', 'Kota Bogor', 'Jl. Raden Khanafiah No.01, RT.01/RW.05, Cimahpar, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16155', '081210808879, multiagrisarana.com', '106.823510600', '-6.5818711', 'Multi Agri Sarana adalah sebuah perusahaan agribisnis yang bergerak dibidang pengadaan/penyedia benih unggul tanaman buah dan sayuran yang terdiri dari berbagai varietas yang berbeda sesuai dengan kebutuhan Anda, Insya Allah benih yang kami jual ini terjamin kualitas dan mutunya, kami selalu berusaha mengutamakan kepuasan pelanggan kami, semoga usaha kami ini bisa bermanfaat dan saling menguntungkan', '6565437c83538.png'),
(7, 'Bibit', 'Sentra Tani Bogor (Harvin Green)', 'sentratani@gmail.com', 'Kota Bogor', 'No. 4 Perumnas Bantarjati, Kel, Utara, Jl. Palupuh Raya, RT.02/RW.06, Tegal Gundil, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16152', '085311222900, toko.sentratani.com', '106.813401900', '-6.5798025', 'Toko Sentra Tani adalah supplier penyedia bibit, benih, pupuk,dan pestisida ', '6565442f63b9d.png'),
(8, 'Benih dan Bibit', 'Agro Tunas Makmur', 'agrotunas@gmail.com', 'Kota Bogor', 'Jl. Raya Jasinga Tenjo, kp Anyarsati RT. 005/ RW. 001, Cikopomayak, kec Jasinga, Bogor, Bogor 16770', '(+62) 85718073779, agrotunas.co.id', '106.459623800', '-6.4663016', 'CV. Agro Tunas Makmur adalah suppllie penyedia benih pepaya', '656544a7b4bc2.png'),
(9, 'Bibit', 'Elisarta Talenta Agro', 'elisarta@gmail.com', 'Kota Bogor', 'Jl SIliwangi no.144B, Batutulis, Bogor', '(+62) 81340582187, elisartatalentaagro.web.indotrading.com', '106.810946200', '-6.6193391', 'Elisarta Talenta Agro adalah supplier penyedia bibit jahe merah', '656545a975b44.png'),
(10, 'Bibit', 'Rumah Bibit Tanaman Uwais', 'uwais@gmail.com', 'Kota Bogor', '106.8066747Kp. Lebaksari No.42 RT/RW 03/14, RT.01/RW.14, Pamoyanan, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16136', '085778672400', '106.8066747', '-6.6313575', 'Rumah Bibit Tanaman Uwais adalah supplier penyedia bibit dan tanaman buah', '6569f06df208b.png'),
(11, 'Bibit', 'Lapak Bibit', 'lapakbibit@gmail.com', 'Kabupaten Bogor', 'Muaraberes, nomor 24, Rt 03/04, Kel, Sukahati, Kec. Cibinong, Kabupaten Bogor, Jawa Barat 16913', '081908606999, lapakbibit.com', '106.8080864', '-6.4899448', 'CV. Lapak Bibit adalah supplier penyedia bibit tanaman unggul berkualitas', '6569affc998e5.png');

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `id` int(11) NOT NULL,
  `role` enum('admin','supplier','public') NOT NULL,
  `nama` text NOT NULL,
  `username` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`id`, `role`, `nama`, `username`, `email`, `password`) VALUES
(1, 'admin', 'Kageyama', 'admin', 'admin@gmail.com', 'admin'),
(22, 'supplier', 'Garuda Seed', 'garudaseed', 'garudaseed@gmail.com', '$2y$10$mGZAFH1gNZmPsaXjsdqZjO.okUUmRs2JseHy3i4L1i0LmqTCsxsOa'),
(23, 'supplier', 'Botani Seed IPB', 'botaniseedipb', 'botaniseedipb@gmail.com', '$2y$10$Wdcgh4Y.bti9CUE.mMpo5OsVuee0LjYnMmNrmclxv6SAF0qwRTHA6'),
(24, 'supplier', 'NUSAGROW FARM', 'nusagrowfarm', 'nusagrowfarm@gmail.com', '$2y$10$lSL.kvmWyK58KKSUHP4OB.GdBVefDZxOps0/zan.pRT9oNPq7wbha'),
(26, 'public', 'nama', 'nama', 'nama@gmail.com', '$2y$10$Ihn9TdNTC0eWvB7w3QwQNOCV1HLWDVG0MpQHcqXjEQy7myHCbhTYW'),
(27, 'public', 'wuah', 'wuah', 'wuah@gmail.com', '$2y$10$Hqveq3NDLXmdBFqQieMrAe9Xql0b3EFDpHo054Fb19/tUKhy0A2pm'),
(28, 'supplier', 'Super Produk (Hidroponik Shop)', 'superproduk', 'superproduk@gmail.com', '$2y$10$YfVhofmNoJACP.jbpL./5OS72VR1oI4dXz2tqmSPGv0IVA/j7XaAy'),
(30, 'supplier', 'Multi Agri Sarana', 'multiagrasarana', 'multiagrasarana@gmail.com', '$2y$10$TVT0NMl1ecuMK5sPwTWnk.CGyzFGAO684OY9trudPT/M9flReyCXO'),
(31, 'supplier', 'Sentra Tani Bogor (Harvin Green)', 'sentratani', 'sentratani@gmail.com', '$2y$10$r3Mb06DbAuM2lEyCoqX54.eByM4Q3SnWx4e4QdDekxY4PR7qftjZW'),
(32, 'supplier', 'Agro Tunas Makmur', 'agrotunas', 'agrotunas@gmail.com', '$2y$10$j6Z4tZfqywNzobLCYbvUD.0q27vOqcBnS6U.QU1ajTFfrIBHqgCxK'),
(33, 'supplier', 'Elisarta Talenta Agro', 'elisarta', 'elisarta@gmail.com', '$2y$10$neAQQmCm4jlm0faKaCzKNua.z2Mh0Fc356EPsB/QwlW/HfsBLVAS2'),
(34, 'supplier', 'Lapak Bibit', 'lapakbibit', 'lapakbibit@gmail.com', '$2y$10$E0azf2CrM5q7P5Gh879gUe0mJY4jCUR9JUbk9F9Gv29YZMDJMCX6i'),
(36, 'supplier', 'Rumah Bibit Tanaman Uwais', 'uwais', 'uwais@gmail.com', '$2y$10$r3Mb06DbAuM2lEyCoqX54.eByM4Q3SnWx4e4QdDekxY4PR7qftjZW'),
(37, 'public', 'cia', 'allicia', 'allicia@gmail.com', '$2y$10$neAQQmCm4jlm0faKaCzKNua.z2Mh0Fc356EPsB/QwlW/HfsBLVAS2');

-- --------------------------------------------------------

--
-- Table structure for table `tambahdiskusi`
--

CREATE TABLE `tambahdiskusi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_diskusi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tambahdiskusi`
--

INSERT INTO `tambahdiskusi` (`id`, `id_user`, `id_diskusi`) VALUES
(2, 15, 38),
(3, 17, 39),
(4, 18, 40),
(5, 20, 42),
(6, 26, 43),
(7, 37, 44),
(8, 37, 45);

-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

CREATE TABLE `topik` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text NOT NULL,
  `addeddate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`id`, `blog_id`, `comment_id`, `name`, `description`, `addeddate`) VALUES
(50, 38, 32, 'jk', 'yes', '2023-11-20 15:39:54'),
(52, 38, 0, 'jk', 'ga', '2023-11-21 02:05:41'),
(53, 38, 52, 'jk', 'kali', '2023-11-21 02:05:52'),
(61, 38, 0, 'jk', 'iyaa', '2023-11-21 03:25:23'),
(63, 38, 0, 'test', 'ooh gitu', '2023-11-21 03:30:24'),
(64, 38, 0, 'test', 'ooh gitu', '2023-11-21 03:31:48'),
(65, 38, 0, 'jk', 'haaai', '2023-11-21 03:34:20'),
(66, 38, 0, 'test', 'nihao', '2023-11-21 03:35:27'),
(67, 38, 0, 'admin', 'Waah bagus sekali', '2023-11-24 00:44:05'),
(68, 38, 0, 'nitaa', 'coba', '2023-11-27 05:47:00'),
(69, 38, 68, 'cy', 'hai syg\r\n', '2023-11-27 06:03:36'),
(70, 38, 69, 'jk', 'jgn gnngu cwk gue', '2023-11-27 08:32:20'),
(71, 42, 0, 'nitaa', 'lho', '2023-11-27 08:33:39'),
(72, 42, 0, 'cy', 'hmmm', '2023-11-27 08:40:08'),
(73, 42, 72, 'cy', 'mending bawang mentah', '2023-11-27 08:40:22'),
(74, 43, 0, 'nama', 'mohon jawabannya semua', '2023-11-27 09:29:05'),
(75, 43, 0, 'wuah', 'hehhe', '2023-11-27 09:30:00'),
(76, 43, 74, 'wuah', 'mentah aja kak', '2023-11-27 09:30:15'),
(77, 38, 0, 'admin', 'tes', '2023-11-30 20:50:22'),
(78, 43, 0, 'admin', 'tes', '2023-11-30 21:01:38'),
(79, 43, 0, 'admin', 'tes', '2023-11-30 21:03:14'),
(80, 43, 0, 'admin', 'mentah', '2023-11-30 21:08:23'),
(81, 43, 80, 'wuah', 'ya, boleh', '2023-11-30 21:30:56'),
(82, 43, 0, 'allicia', 'ok', '2023-12-01 14:46:02'),
(83, 43, 0, 'admin', 'Haha', '2023-12-01 15:00:29'),
(84, 43, 0, 'admin', 'Haha', '2023-12-01 15:17:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diskusi`
--
ALTER TABLE `diskusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grafik02`
--
ALTER TABLE `grafik02`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kalkulator`
--
ALTER TABLE `kalkulator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_supplier`
--
ALTER TABLE `tabel_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tambahdiskusi`
--
ALTER TABLE `tambahdiskusi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`,`id_diskusi`);

--
-- Indexes for table `topik`
--
ALTER TABLE `topik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diskusi`
--
ALTER TABLE `diskusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `grafik02`
--
ALTER TABLE `grafik02`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kalkulator`
--
ALTER TABLE `kalkulator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tabel_supplier`
--
ALTER TABLE `tabel_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tambahdiskusi`
--
ALTER TABLE `tambahdiskusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `topik`
--
ALTER TABLE `topik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
