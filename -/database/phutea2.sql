-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 04:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phutea2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblogin`
--

CREATE TABLE `tblogin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblogin`
--

INSERT INTO `tblogin` (`id`, `username`, `pass`, `nama`, `telp`, `email`) VALUES
(1, 'admin', '12345', 'admin', '123123123', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbpesan`
--

CREATE TABLE `tbpesan` (
  `id` int(11) NOT NULL,
  `tbproduk_id` varchar(50) NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `jalan` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `rtrw` varchar(255) NOT NULL,
  `kodepos` int(5) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `kodepesanan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbproduk`
--

CREATE TABLE `tbproduk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` varchar(50) NOT NULL,
  `tipe_produk` varchar(50) NOT NULL,
  `foto_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbproduk`
--

INSERT INTO `tbproduk` (`id`, `nama_produk`, `harga_produk`, `tipe_produk`, `foto_produk`) VALUES
(1, 'Thai Tea', '8000', 'minuman', '136045.jpg'),
(2, 'Green Tea', '8000', 'minuman', '136046.jpg'),
(5, 'Bubble Gum', '9000', 'pudding', 'PudingBubbleGum-crop.jpeg'),
(6, 'Taro', '9000', 'pudding', 'PudingTaro-crop.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbpesan`
--
ALTER TABLE `tbpesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbpesan_user_id_foreign` (`user_id`),
  ADD KEY `tbpesan_tbproduk_id_foreign` (`tbproduk_id`);

--
-- Indexes for table `tbproduk`
--
ALTER TABLE `tbproduk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblogin`
--
ALTER TABLE `tblogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbpesan`
--
ALTER TABLE `tbpesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `tbproduk`
--
ALTER TABLE `tbproduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
