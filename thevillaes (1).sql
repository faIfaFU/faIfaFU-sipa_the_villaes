-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2023 at 01:24 AM
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
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `level` enum('admin','user') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `level`) VALUES
(1, '', 'kia12@gmail.com', '81dc9bdb52d04dc20036', 'user'),
(2, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(3, '', 'bisha@gmail.com', '37851501ab813cd174b1', 'user'),
(4, '', 'yu@gmail.com', '385d04e7683a033fcc6c', 'user');

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
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_villa` int(2) NOT NULL,
  `tipe_villa` enum('villa_jagung','vila_segitiga') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `villa`
--

INSERT INTO `villa` (`kode_villa`, `nama_villa`, `lokasi`, `gambar`, `fasilitas`, `deskripsi`, `harga`, `jumlah_villa`, `tipe_villa`) VALUES
(11, 'Villa Jagung', 'Bogor', 'gb.png', '1 kamar tidur', '', 100, 0, ''),
(13, 'Villa Segitiga', 'jllll', '4380899.jpg', 'wwwww', '', 2222, 0, ''),
(18, '', '', '', '', '', 0, 0, ''),
(19, 'Villa Jagung', 'jakut', '', 'ayoyoyo', '', 123333, 0, ''),
(20, 'Villa Jagung', 'ssss', '', 'sss', '', 0, 0, ''),
(21, 'aadudu', 'jateng', '', 'ddffee', '', 0, 0, ''),
(22, 'Villa Jagung', 'jawa', '', 'aaaaaa', '', 0, 0, 'villa_jagung'),
(23, '', '', '', '', '', 0, 0, '');

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `villa`
--
ALTER TABLE `villa`
  ADD PRIMARY KEY (`kode_villa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `villa`
--
ALTER TABLE `villa`
  MODIFY `kode_villa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
