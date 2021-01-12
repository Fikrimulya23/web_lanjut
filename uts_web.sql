-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 07:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) UNSIGNED NOT NULL,
  `Judul` varchar(128) NOT NULL,
  `Deskripsi` varchar(1000) NOT NULL,
  `Penulis` varchar(128) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `Harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `Judul`, `Deskripsi`, `Penulis`, `Jumlah`, `gambar`, `Harga`) VALUES
(1, 'Sebuah Seni untuk Bersikap Bodo Amat', 'Meskipun judulnya “Sebuah Seni untuk Bersikap Bodo Amat”, namun buku satu ini tidak mengajarkan seseorang untuk bersikap bodo amat dengan segala sesuatu yang terjadi di sekitarnya. Justru penulis ingin membuka pikiran kita bahwa ada hal-hal penting yang dirasa tidak perlu dipersoalkan dalam hidup. Buku ini mengajarkan kita untuk lebih cuek dengan hal-hal yang kurang penting melalui sebuah seni. Penulis juga menambahkan cerita-cerita yang menghibur dan ‘kekinian’, serta humor yang cadas. Buku ini merupakan tamparan di wajah yang menyegarkan untuk kita semua, supaya kita bisa mulai menjalani kehidupan yang lebih memuaskan, dan apa adanya.', 'Mark Manson', 23, '', 15000),
(3, 'KKN Di Desa Penari', 'Siapa sih yang belum pernah mendengar kisah misteri KKN di Desa Penari yang viral baru-baru ini di jagat maya? Nah karena mendapat banyak sorotan, kisah yang menceritakan kejadian nyata ini akhirnya diterbitkan menjadi sebuah novel misteri lho. Novelnya pun telah beredar dari awal September lalu.', 'Simpleman', 7, '', 10000),
(6, 'Habibie & Ainun Edisi Khusus (3 Buah puisi B J Habibie & foto foto Esklusif)', 'Novel Habibie & Ainun Edisi Khusus ini merupakan salah satu novel best seller yang diluncurkan dari tahun 2010 di Jakarta. Menceritakan berbagai kisah cinta menarik antara Pak Habibie dan Ibu Ainun. Mulai dari perjumpaan keduanya yang menjadi awal segalanya, keseharian dalam mengarungi bahtera rumah tangga hingga kejadian memilukan tatkala sang takdir Ilahi memisahkan keduanya.', 'Bacharuddin Jusuf Habibie', 9, '', 12000),
(7, 'dosa dosa yang lalu', 'Kami (Bukan) Sarjana Kertas adalah sebuah novel fiksi yang dikemas secara ringan dan diiringi humor-humor khas anak kampus. Di dalamnya terdapat banyak tokoh yang menjadi representasi jenis-jenis mahasiswa yang sering kita temui saat kuliah. Mereka bersama menempuh pendidikan yang menantang di sebuah kampus yang bobrok. Pada akhirnya, keputusan-keputusan yang mereka ambil akan membuat kita merenungi tentang apakah kita sendiri telah memilih jalan yang tepat untuk hidup kita.', 'J.S. Khairen', 7, '', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2020-12-02-175805', 'App\\Database\\Migrations\\Book', 'default', 'App', 1606932173, 1);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `nama_peminjam` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `nama_peminjam` varchar(128) NOT NULL,
  `pengembalian` varchar(50) NOT NULL,
  `id_buku` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `judul`, `nama_peminjam`, `pengembalian`, `id_buku`) VALUES
(1, '12', 'asa', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `level` int(1) NOT NULL DEFAULT 2,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `saldo` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `level`, `email`, `password`, `saldo`) VALUES
(6, 'Fikri', 1, 'fikrimulya1@gmail.com', '$2y$10$XNJjEzEFcwM4qQPVIWPlFeyY2Krh8ki1Apb43Wid1x8nnSue4gzzi', 30000),
(7, 'Fikri', 2, 'fikrimulya2@gmail.com', '$2y$10$Ke5XM4YaFt5hEF.tpIlv9uzViShY3NqT.TLE4A1qlLi.ErXv3C7QG', 25000),
(8, 'Fikri 3', 2, 'fikrimulya3@gmail.com', '$2y$10$XSOhFqoyfDC4XaIQNhIYc.DRLDUBRzFWDlOsTeh.KL2HiQxKfzpBq', 0),
(9, 'padil', 2, 'padil@gmail.com', '$2y$10$zx3EjEdjg6j.Jk/.HzhmLO9FQHAz9.ewiYBEfostL5.6gi9JGNnpu', 0),
(10, 'Fikri', 2, 'fikrimulya4@gmail.com', '$2y$10$bVj7O3DnlKH4JcLajM/pfOdSHtFG0VZHzbX6aSuwsrkcuQ7gMxhSS', 0),
(11, 'admin', 1, 'admin@gmail.com', '$2y$10$aoq6hS02tKktT5Bm7.Syn.jWplTignNR7OTky8UIUKwOxNaEwX.0y', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
