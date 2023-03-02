-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2023 at 11:52 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thevillaes`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) DEFAULT NULL,
  `tanggal_pemesanan` date DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `kode_villa` int(11) DEFAULT NULL,
  `status_bayar` enum('sudah','belum') DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `level` enum('admin','petugas','user') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `level`) VALUES
(0, '', 'kia12@gmail.com', '81dc9bdb52d04dc20036', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `villa`
--

CREATE TABLE `villa` (
  `kode_villa` int(5) NOT NULL,
  `nama_villa` varchar(65) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `fasilitas` text NOT NULL,
  `harga` int(11) NOT NULL,
  `tipe_villa` enum('silver','gold','platinum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `villa`
--

INSERT INTO `villa` (`kode_villa`, `nama_villa`, `lokasi`, `gambar`, `fasilitas`, `harga`, `tipe_villa`) VALUES
(8, 'aaaa', 'dadhasid', '', 'adewfdwef', 221323, 'gold'),
(9, 'bbb', 'dsbdf', '', 'fdbfdb', 345435, 'silver');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` int(11) DEFAULT NULL,
  `nama_wilayah` varchar(20) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `villa`
--
ALTER TABLE `villa`
  ADD PRIMARY KEY (`kode_villa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `villa`
--
ALTER TABLE `villa`
  MODIFY `kode_villa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
