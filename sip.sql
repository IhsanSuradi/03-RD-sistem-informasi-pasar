-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2017 at 10:13 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
('dinas', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `deskripsi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama`, `deskripsi`) VALUES
(10, 'cabai', ''),
(13, 'kopi', ''),
(14, 'teh', ''),
(15, 'barang', ''),
(16, 'pare', ''),
(17, '', ''),
(18, 'lskdskd', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pesan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_session` int(11) NOT NULL,
  `notified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id`, `id_list`, `id_session`, `notified`) VALUES
(1, 1, 5, 1),
(2, 1, 5, 1),
(3, 1, 5, 1),
(4, 3, 6, 1),
(19, 1, 7, 1),
(20, 1, 7, 1),
(21, 2, 7, 1),
(22, 1, 10, 1),
(23, 3, 10, 1),
(24, 10, 10, 1),
(25, 1, 11, 1),
(26, 2, 11, 1),
(27, 1, 17, 1),
(28, 2, 17, 1),
(29, 2, 17, 1),
(30, 1, 17, 1),
(31, 2, 17, 1),
(32, 2, 17, 1),
(33, 2, 17, 1),
(34, 2, 17, 1),
(35, 2, 17, 1),
(36, 2, 17, 1),
(37, 1, 17, 1),
(38, 2, 17, 1),
(39, 1, 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `list_barang`
--

CREATE TABLE `list_barang` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `banyak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_barang`
--

INSERT INTO `list_barang` (`id`, `id_barang`, `id_toko`, `harga`, `banyak`) VALUES
(13, 10, 1, 3000, 59),
(16, 13, 1, 2000, 20),
(18, 0, 4, 22222, 20),
(19, 0, 4, 20000, 23),
(20, 18, 1, 434343, 12);

--
-- Triggers `list_barang`
--
DELIMITER $$
CREATE TRIGGER `delete` AFTER DELETE ON `list_barang` FOR EACH ROW DELETE FROM barang WHERE id_barang=OLD.id_barang
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id` int(11) NOT NULL,
  `jenis_toko` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `lokasipasar` varchar(80) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id`, `jenis_toko`, `username`, `password`, `nama`, `email`, `no_hp`, `lokasipasar`, `status`) VALUES
(2, 'Kelontong', 'rukohberjaya', '12345678', 'Rukoh Berjaya', 'rukohberjaya@gmail.com', '082265284726', 'Pasar Rukoh', 1),
(3, 'Sayur-sayuran', 'berkah', '12345', 'Toko Berkah', 'berkah@gmail.com', '082356437634', 'Pasar Setui', 0),
(5, 'Sayur-sayuran', 'transit', '12345', 'Transit', 'transit@yahoo.com', '082245434543', 'Pasar Aceh', 0),
(7, 'Buah-buahan', 'berkah', '12345', 'Berkah', 'berkah@gmail.com', '085345678913', 'Pasar Rukoh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `u_session`
--

CREATE TABLE `u_session` (
  `id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `session_hash` varchar(64) NOT NULL,
  `last_access` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_session`
--

INSERT INTO `u_session` (`id`, `active`, `session_hash`, `last_access`) VALUES
(1, 1, '252677c4e706db71872fe65befc9006bc5c4238234463882184230035a6709bd', '2017-05-19 11:17:38'),
(2, 1, 'da4fae905803005283dad9e96f79d24d15060a7f1d408605b3d425e4bfeaea74', '2017-05-19 12:25:01'),
(3, 1, '64fca864811d7dd8947a78c643d5b2312fe43fc4f3ed1b04c8b7442ec1c0921f', '2017-05-21 02:50:32'),
(4, 1, '11f158bf00b7da52ec67f18bc50d47cdf4d45cc640559f9a5907cf78da543a77', '2017-05-25 13:24:00'),
(5, 1, '64b3ec680e39445796f4b5c4e5675bc0b192c26c3ce9ddd1ee62d0aa80590f7c', '2017-05-25 16:11:59'),
(6, 1, 'affcf90d7418c5e9391a6a687fdfe0031674e39b5c3c6d2ba7ccd80300d95097', '2017-05-25 21:19:02'),
(7, 1, 'b9c6d1fe03a79a96a3e0da715de312c5c3f4d2736b50344e3d4bc732221dad71', '2017-05-26 00:03:05'),
(8, 1, '66be54a9fd8ca7eb9e8e1710143dbb2ae2172aa223360cf6d4865926bc14e39b', '2017-05-25 21:57:44'),
(9, 1, 'dbb6236ec4d66e5faac780e9c8fea8662bda41f61ec0b2ebd50225c4b4977143', '2017-05-26 11:06:22'),
(10, 1, 'd0a58d822c0bac5b98b9b44ff97320ab17713096d8467bea4fa6bedc75fc341b', '2017-05-26 15:56:05'),
(11, 1, '5a0241ed7eba05261253be0e1c4f2c9abe16018a36caa36ae4fe3b2d633a7479', '2017-05-31 00:05:48'),
(12, 1, 'd5be948cbcffe71da24811810a7a920b03efda3ae76e2d477d482196e4d0a950', '2017-05-31 19:16:55'),
(13, 1, '6796d50036604887359e09954f5b9651708f6caa683f393f4a294aede45c3980', '2017-06-02 00:30:11'),
(14, 1, 'a8049d8e84eb4b37500aecbd8cd41867cf857da22c15df033228436a9bf79d8d', '2017-06-07 01:53:30'),
(15, 1, '12a6040e85106266ce58b5fd9abc4b9c97eae654b14233753a799b25ed9d948c', '2017-06-08 14:35:09'),
(16, 1, '0eb397784feaa134d758804bfe712784beec796b3f18c3be7060f9b86c014e10', '2017-06-08 16:59:35'),
(17, 1, 'e7a3bab561a40a3d7bcdbbb678acd3bfb3ef5ea22e5dff27ff96e5183c3b9cf6', '2017-06-08 16:52:34'),
(18, 1, 'b103ff54146c22d398ffab1a4dc1839ca54f6f7536035114609d4ffbd3d4f353', '2017-06-09 01:12:34'),
(19, 1, '0f4fb88301639aaf08d253886bede4237815679e251ffc48decbb425b34ac955', '2017-06-09 01:52:45'),
(20, 1, '9ec3b17a719024474eb42a2dd6ef762096a950bc116d56afb15df661da501ab7', '2017-06-09 02:59:30'),
(21, 1, '145377e1f0600599a4fa94c53618dca93ea63366f45986363c98758a9a335c2c', '2017-06-09 03:12:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_barang`
--
ALTER TABLE `list_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `u_session`
--
ALTER TABLE `u_session`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `list_barang`
--
ALTER TABLE `list_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `u_session`
--
ALTER TABLE `u_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
