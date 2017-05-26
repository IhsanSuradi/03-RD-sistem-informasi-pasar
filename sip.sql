-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2017 at 06:41 AM
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
(1, 'cabe', 'cabe merah'),
(2, 'tomat', 'tomat merah'),
(3, 'jambu', 'jambu merah');

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
  `id_session` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id`, `id_list`, `id_session`) VALUES
(1, 1, 5),
(2, 1, 5),
(3, 1, 5),
(4, 3, 6),
(19, 1, 7),
(20, 1, 7),
(21, 2, 7);

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
(1, 1, 1, 10000, 50),
(2, 1, 2, 9000, 30),
(3, 2, 1, 22000, 15),
(4, 2, 2, 23400, 43),
(5, 3, 1, 12900, 3),
(6, 3, 2, 56000, 34);

-- --------------------------------------------------------

--
-- Table structure for table `pasar`
--

CREATE TABLE `pasar` (
  `id_pasar` varchar(30) NOT NULL,
  `nama_pasar` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Daging', 'meugang', '12345', 'Sie Meugang', 'meugang@gmail.com', '0822646237', 'Pasar Aceh', 0),
(2, 'Kelontong', 'rukohberjaya', '12345678', 'Rukoh Berjaya', 'rukohberjaya@gmail.com', '082265284726', 'Pasar Rukoh', 1);

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
(9, 1, 'dbb6236ec4d66e5faac780e9c8fea8662bda41f61ec0b2ebd50225c4b4977143', '2017-05-26 11:06:22');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `pasar`
--
ALTER TABLE `pasar`
  ADD PRIMARY KEY (`id_pasar`);

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
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `list_barang`
--
ALTER TABLE `list_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `u_session`
--
ALTER TABLE `u_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
