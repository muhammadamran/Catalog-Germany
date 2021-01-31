-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 31, 2021 at 05:44 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_catalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `nama_kategori`, `status`, `created_at`) VALUES
(1, 'New', '1', '2021-01-03 14:11:14'),
(6, 'All', '1', '2021-01-17 12:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keranjang`
--

CREATE TABLE `tbl_keranjang` (
  `id` int(11) NOT NULL,
  `kode_transaksi` varchar(225) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_produk` int(11) NOT NULL,
  `catatan` text DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `size` varchar(225) NOT NULL,
  `harga` double NOT NULL,
  `status` enum('0','1','2') DEFAULT NULL,
  `date_add` datetime NOT NULL,
  `kode_transaksi_c` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kritiksaran`
--

CREATE TABLE `tbl_kritiksaran` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(255) DEFAULT NULL,
  `nama_belakang` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log`
--

CREATE TABLE `tbl_log` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `login_datetime` datetime DEFAULT NULL,
  `role_akses` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_log`
--

INSERT INTO `tbl_log` (`id`, `username`, `status`, `login_datetime`, `role_akses`) VALUES
(1, 'amranmhd10@gmail.com', 'Login', '2021-01-03 15:19:21', 'Member'),
(2, 'amranmhd10@gmail.com', 'Login', '2021-01-03 15:26:36', 'Member'),
(3, 'amranmhd10@gmail.com', 'Login', '2021-01-03 15:44:31', 'Member'),
(4, 'amranmhd10@gmail.com', 'Login', '2021-01-03 15:45:26', 'Member'),
(5, 'amranmhd10@gmail.com', 'Login', '2021-01-03 15:46:45', 'Member'),
(6, 'amranmhd10@gmail.com', 'Login', '2021-01-03 15:49:23', 'Member'),
(7, 'member@gmail.com', 'Login', '2021-01-03 15:50:12', 'Superadmin'),
(8, 'member@gmail.com', 'Login', '2021-01-03 15:51:16', 'Admin'),
(9, 'amranmhd10@gmail.com', 'Login', '2021-01-03 16:02:49', 'Member'),
(10, 'member@gmail.com', 'Login', '2021-01-03 16:03:39', 'Admin'),
(11, 'amranmhd10@gmail.com', 'Login', '2021-01-03 18:40:00', 'Member'),
(12, 'member@gmail.com', 'Login', '2021-01-03 18:40:34', 'Admin'),
(13, 'member@gmail.com', 'Login', '2021-01-03 19:23:12', 'Admin'),
(14, 'member@gmail.com', 'Login', '2021-01-03 19:25:39', 'Admin'),
(15, 'member@gmail.com', 'Login', '2021-01-03 19:30:36', 'Admin'),
(16, 'super@super.com', 'Login', '2021-01-03 19:36:53', 'Member'),
(17, 'super@super.com', 'Login', '2021-01-03 19:37:54', 'Superadmin'),
(18, 'super@super.com', 'Login', '2021-01-03 19:42:05', 'Superadmin'),
(19, 'super@super.com', 'Login', '2021-01-03 20:31:24', 'Superadmin'),
(20, 'amranmhd10@gmail.com', 'Login', '2021-01-03 21:34:58', 'Member'),
(21, 'member@gmail.com', 'Login', '2021-01-03 22:32:43', 'Admin'),
(22, 'amranmhd10@gmail.com', 'Login', '2021-01-12 15:22:13', 'Member'),
(23, 'super@super.com', 'Login', '2021-01-12 15:41:32', 'Superadmin'),
(24, 'super@super.com', 'Login', '2021-01-15 23:00:34', 'Superadmin'),
(25, 'super@super.com', 'Login', '2021-01-16 03:37:57', 'Superadmin'),
(26, 'super@super.com', 'Login', '2021-01-16 04:33:37', 'Superadmin'),
(27, 'amranmhd10@gmail.com', 'Login', '2021-01-16 09:38:36', 'Member'),
(28, 'amranmhd10@gmail.com', 'Login', '2021-01-16 09:55:14', 'Member'),
(29, 'amranmhd10@gmail.com', 'Login', '2021-01-16 10:22:33', 'Member'),
(30, 'amranmhd10@gmail.com', 'Login', '2021-01-16 12:30:41', 'Member'),
(31, 'super@super.com', 'Login', '2021-01-16 12:53:11', 'Superadmin'),
(32, 'amranmhd10@gmail.com', 'Login', '2021-01-16 13:00:17', 'Member'),
(33, 'amranmhd10@gmail.com', 'Login', '2021-01-16 15:18:39', 'Member'),
(34, 'super@super.com', 'Login', '2021-01-17 12:56:49', 'Superadmin'),
(35, 'amranmhd10@gmail.com', 'Login', '2021-01-17 13:58:53', 'Member'),
(36, 'amranmhd10@gmail.com', 'Login', '2021-01-17 23:15:21', 'Member'),
(37, 'amranmhd10@gmail.com', 'Login', '2021-01-18 01:53:12', 'Member'),
(38, 'super@super.com', 'Login', '2021-01-18 10:52:07', 'Superadmin'),
(39, 'amranmhd10@gmail.com', 'Login', '2021-01-18 15:10:29', 'Member'),
(40, 'member@gmail.com', 'Login', '2021-01-31 19:45:31', 'Admin'),
(41, 'super@super.com', 'Login', '2021-01-31 19:48:18', 'Superadmin'),
(42, 'super@super.com', 'Login', '2021-01-31 21:00:20', 'Superadmin'),
(43, 'super@super.com', 'Login', '2021-01-31 23:35:56', 'Superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_love`
--

CREATE TABLE `tbl_love` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` enum('0','1','2') DEFAULT NULL,
  `date_add` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notif`
--

CREATE TABLE `tbl_notif` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_transaksi` varchar(200) NOT NULL,
  `kode_transaksi` varchar(200) NOT NULL,
  `status` enum('0','1','2','3','4','5') NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perusahaan`
--

CREATE TABLE `tbl_perusahaan` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `nama_perusahaan` varchar(255) DEFAULT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `no_telpon` varchar(255) DEFAULT NULL,
  `link_fb` varchar(255) DEFAULT NULL,
  `link_instagram` varchar(255) DEFAULT NULL,
  `link_twitter` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `footer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_perusahaan`
--

INSERT INTO `tbl_perusahaan` (`id`, `logo`, `nama_perusahaan`, `slogan`, `no_telpon`, `link_fb`, `link_instagram`, `link_twitter`, `email`, `footer`) VALUES
(1, 'logo_catalog2_1612097702.png', 'Catalog', 'Catalog ....', '0000', 'https://www.facebook.com/catalog', 'https://www.instagram.com/catalog/', 'https://twitter.com', 'catalog@gmail.com', 'Seragam POS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `kd_kategori` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `cover` varchar(225) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `status` enum('1','2','3') DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `berat` varchar(255) DEFAULT NULL,
  `stok` varchar(255) DEFAULT NULL,
  `diskon` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id`, `nama_produk`, `kd_kategori`, `deskripsi`, `cover`, `gambar`, `status`, `harga`, `berat`, `stok`, `diskon`, `created_at`) VALUES
(10, 'Product 1', '1', '<p>Write about product ...</p>\r\n', '1_1612102841.png', '[\"1_1612102841.png\",\"1_1612102841.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:37:43'),
(11, 'Product 2', '1', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', '2_1612102899.png', '[\"2_1612102899.png\"]', '1', '0', '0', '0', '100', '2021-01-31 22:55:14'),
(12, 'Product 3', '1', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', '3_1612102927.png', '[\"3_1612102927.png\"]', '1', '0', '0', '0', '0', '2021-01-31 21:22:07'),
(13, 'Product 4', '1', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', '4_1612102958.png', '[\"4_1612102958.png\"]', '1', '0', '0', '0', '0', '2021-01-31 21:22:38'),
(14, 'Product 5', '1', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', '5_1612102984.png', '[\"5_1612102984.png\"]', '1', '0', '0', '0', '0', '2021-01-31 21:23:04'),
(15, 'Product 6', '1', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', '6_1612104054.png', '[\"6_1612104054.png\"]', '1', '0', '0', '0', '0', '2021-01-31 21:40:54'),
(16, 'Product 7', '1', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', '7_1612104081.png', '[\"7_1612104081.png\"]', '1', '0', '0', '0', '0', '2021-01-31 21:41:21'),
(17, 'Product 8', '1', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', '8_1612104112.png', '[\"8_1612104112.png\"]', '1', '0', '0', '0', '0', '2021-01-31 21:41:52'),
(18, 'Product 9', '1', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', '9_1612104954.png', '[\"9_1612104954.png\"]', '1', '0', '0', '0', '0', '2021-01-31 21:55:54'),
(19, 'Product 10', '1', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', '10_1612104984.png', '[\"10_1612104984.png\"]', '1', '0', '0', '0', '0', '2021-01-31 21:56:24'),
(20, 'Product 11', '1', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', '11_1612105011.png', '[\"11_1612105011.png\"]', '1', '0', '0', '0', '0', '2021-01-31 21:56:51'),
(21, 'Product 12', '1', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', '12_1612105038.png', '[\"12_1612105038.png\"]', '1', '0', '0', '0', '0', '2021-01-31 21:57:18'),
(22, 'Product 13', '1', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', '13_1612105281.png', '[\"13_1612105281.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:01:21'),
(23, 'Product 14', '1', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', '14_1612105312.png', '[\"14_1612105312.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:01:52'),
(24, 'Product 15', '1', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', '15_1612105345.png', '[\"15_1612105345.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:02:25'),
(25, 'Product 16', '1', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', '16_1612105377.png', '[\"16_1612105377.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:02:57'),
(26, 'Product 17', '1', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', '17_1612105401.png', '[\"17_1612105401.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:03:21'),
(27, 'Product 1', '6', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', 'A-1_1612106183.png', '[\"A-1_1612106183.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:16:23'),
(28, 'Product 2', '6', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', 'A-2_1612106219.png', '[\"A-2_1612106219.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:16:59'),
(29, 'Product 3', '6', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', 'A-3_1612106249.png', '[\"A-3_1612106249.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:17:29'),
(30, 'Product 4', '6', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', 'A-4_1612106285.png', '[\"A-4_1612106285.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:18:05'),
(31, 'Product 5', '6', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', 'A-5_1612106312.png', '[\"A-5_1612106312.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:18:32'),
(32, 'Product 6', '6', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', 'A-6_1612106350.png', '[\"A-6_1612106350.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:19:10'),
(33, 'Product 7', '6', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', 'A-7_1612106377.png', '[\"A-7_1612106377.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:19:37'),
(34, 'Product 8', '6', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', 'A-8_1612106409.png', '[\"A-8_1612106409.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:20:09'),
(35, 'Product 9', '6', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', 'A-9_1612106450.png', '[\"A-9_1612106450.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:20:50'),
(36, 'Product 10', '6', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', 'A-10_1612106477.png', '[\"A-10_1612106477.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:21:17'),
(37, 'Product 11', '6', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', 'A-11_1612106503.png', '[\"A-11_1612106503.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:21:43'),
(38, 'Product 12', '6', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', 'A-12_1612106531.png', '[\"A-12_1612106531.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:22:11'),
(39, 'Product 13', '6', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', 'A-13_1612106559.png', '[\"A-13_1612106559.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:22:39'),
(40, 'Product 14', '6', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', 'A-14_1612106595.png', '[\"A-14_1612106595.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:23:15'),
(41, 'Product 15', '6', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', 'A-15_1612106623.png', '[\"A-15_1612106623.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:23:43'),
(42, 'Product 16', '6', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', 'A-16_1612106653.png', '[\"A-16_1612106653.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:24:13'),
(43, 'Product 17', '6', '<p>Write about product ...</p>\r\n\r\n<p> </p>\r\n', 'A-17_1612106683.png', '[\"A-17_1612106683.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:24:43'),
(44, 'Product 18', '6', '<p>file:///opt/lampp/htdocs/app-learning/project-consultan/seragampos/assets/img/produk/1_1610441072.jpg</p>\r\n', 'A-1_1612108722.png', '[\"A-2_1612108722.png\",\"A-3_1612108722.png\",\"A-4_1612108722.png\",\"A-5_1612108722.png\",\"A-5_1612108722.psd\",\"A-6_1612108722.png\",\"A-7_1612108722.png\",\"A-8_1612108722.png\",\"A-9_1612108722.png\",\"A-10_1612108722.png\"]', '1', '0', '0', '0', '0', '2021-01-31 22:58:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id` int(11) NOT NULL,
  `id_user` int(200) DEFAULT NULL,
  `id_transaksi` varchar(255) NOT NULL,
  `kode_transaksi` varchar(225) DEFAULT NULL,
  `nama_perusahaan` varchar(225) DEFAULT NULL,
  `negara` varchar(225) DEFAULT NULL,
  `provinsi` varchar(225) DEFAULT NULL,
  `kabupaten` varchar(225) DEFAULT NULL,
  `kecamatan` varchar(225) DEFAULT NULL,
  `kelurahan` varchar(225) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `alamat_opsi` text DEFAULT NULL,
  `kodepos` varchar(225) DEFAULT NULL,
  `telepon` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `privasi` enum('0','1') DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `status_transaksi` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `nama_depan` varchar(150) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(150) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role` varchar(150) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `email`, `nama_depan`, `nama_belakang`, `no_hp`, `username`, `password`, `image`, `role`, `status`, `created_at`) VALUES
(37, 'admin@gmail.com', 'Test', 'Admin', '08987656787', 'member@gmail.com', '4297f44b13955235245b2497399d7a93', '', 'Admin', '1', '2021-01-03 02:01:38'),
(42, 'super@super.com', 'Superadmin', 'Test', '084561278', 'super@super.com', '4297f44b13955235245b2497399d7a93', 'user-1_1609677528.jpg', 'Superadmin', '1', '2021-01-03 07:01:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_keranjang`
--
ALTER TABLE `tbl_keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kritiksaran`
--
ALTER TABLE `tbl_kritiksaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_log`
--
ALTER TABLE `tbl_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_love`
--
ALTER TABLE `tbl_love`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_notif`
--
ALTER TABLE `tbl_notif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_perusahaan`
--
ALTER TABLE `tbl_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_keranjang`
--
ALTER TABLE `tbl_keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kritiksaran`
--
ALTER TABLE `tbl_kritiksaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_log`
--
ALTER TABLE `tbl_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_love`
--
ALTER TABLE `tbl_love`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_notif`
--
ALTER TABLE `tbl_notif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_perusahaan`
--
ALTER TABLE `tbl_perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
