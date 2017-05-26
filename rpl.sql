-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 Mei 2017 pada 15.27
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `id_kat` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `deskripsi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `id_kat`, `nama`, `deskripsi`) VALUES
(1, 1, 'cabe', 'cabe merah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kat_barang`
--

CREATE TABLE `kat_barang` (
  `id_kat` int(11) NOT NULL,
  `nama_kat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_session` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id`, `id_list`, `id_session`) VALUES
(18, 1, 7),
(19, 1, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_barang`
--

CREATE TABLE `list_barang` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `banyak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_barang`
--

INSERT INTO `list_barang` (`id`, `id_barang`, `id_toko`, `harga`, `banyak`) VALUES
(1, 1, 1, 10000, 50),
(2, 1, 2, 9000, 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasar`
--

CREATE TABLE `pasar` (
  `id_pasar` varchar(30) NOT NULL,
  `nama_pasar` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `id` int(11) NOT NULL,
  `id_jenis_toko` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`id`, `id_jenis_toko`, `nama`, `alamat`, `status`) VALUES
(1, '1', 'Barokah Jaya', 'Pasar Setui', 1),
(2, '2', 'Rukoh Berjaya', 'Pasar Rukoh', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `u_session`
--

CREATE TABLE `u_session` (
  `id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `session_hash` varchar(64) NOT NULL,
  `last_access` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `u_session`
--

INSERT INTO `u_session` (`id`, `active`, `session_hash`, `last_access`) VALUES
(1, 1, '', '2017-05-19 17:52:53'),
(2, 1, '', '2017-05-19 17:52:53'),
(3, 1, '', '2017-05-19 17:52:53'),
(4, 1, '74989aa0a5c4b098ee3a6fd64e7066c0a95712789c8c08f6f47ca8c50a7f3260', '2017-05-19 17:52:53'),
(5, 1, 'e1b425fdaf0a700b77aofd64dd1228aa9a335fbba2deecaa33dd228e7a8b9845', '2017-05-19 17:52:53'),
(6, 1, '4dfb2f6b4ebc07649457f1a47fede03f9863f5959f11ab31fe4cea15ba7ec7c0', '2017-05-19 17:52:53'),
(7, 1, 'bfbb5cec2b870dc40eb3821797f1830eddb67db4934fbf6c2a493424846218b3', '2017-05-19 20:26:04'),
(8, 1, '184d2f8b3b8875b6838adce80d98bd2d57907f1c22709cde7def2538c617dbdd', '2017-05-19 19:33:49'),
(9, 1, '58d59391fc7034acac20b4a496a1944413199d9fea2387ce215ea64a8136a6e9', '2017-05-19 18:12:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `kat_barang`
--
ALTER TABLE `kat_barang`
  ADD PRIMARY KEY (`id_kat`);

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
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kat_barang`
--
ALTER TABLE `kat_barang`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `list_barang`
--
ALTER TABLE `list_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
