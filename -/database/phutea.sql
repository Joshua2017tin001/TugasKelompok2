-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2018 at 09:01 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phutea`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblogin`
--

CREATE TABLE `tblogin` (
  `Id` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Telp` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblogin`
--

INSERT INTO `tblogin` (`Id`, `Pass`, `Nama`, `Telp`, `Email`) VALUES
('dian', 'maungapain', 'Adianto', '083873738579', 'dian.dzxn98@gmail.com'),
('adianto', 'asdjkl', 'dian', '098019283', 'asldkjdalskj@gmail.com'),
('asldhasdj', 'aslkdjlaskdjlj', 'alskdjlkasjlkj', '128983', 'aksdjlaskj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbpesan`
--

CREATE TABLE `tbpesan` (
  `id` varchar(50) NOT NULL,
  `taro` int(3) NOT NULL,
  `bgum` int(3) NOT NULL,
  `gre` int(3) NOT NULL,
  `tipegre` int(3) NOT NULL,
  `thai` int(3) NOT NULL,
  `tipethai` int(3) NOT NULL,
  `jalan` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `rtrw` varchar(255) NOT NULL,
  `kodepos` int(5) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kodepesanan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbpesan`
--
ALTER TABLE `tbpesan`
  ADD PRIMARY KEY (`kodepesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbpesan`
--
ALTER TABLE `tbpesan`
  MODIFY `kodepesanan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
