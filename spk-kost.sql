-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 11:34 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk-kost`
--

-- --------------------------------------------------------

--
-- Table structure for table `kost`
--

CREATE TABLE `kost` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `jarak_kampus` double NOT NULL,
  `jarak_market` double NOT NULL,
  `harga` double NOT NULL,
  `kebersihan` int(3) NOT NULL,
  `keamanan` int(3) NOT NULL,
  `fasilitas` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kost`
--

INSERT INTO `kost` (`id`, `nama`, `jarak_kampus`, `jarak_market`, `harga`, `kebersihan`, `keamanan`, `fasilitas`) VALUES
(1, 'nama 0', 2, 2, 2, 2, 2, 2),
(2, 'nama 1', 1, 1, 1, 1, 1, 1),
(3, 'nama 2', 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `temp_bobot`
--

CREATE TABLE `temp_bobot` (
  `id` int(11) NOT NULL,
  `jarak_kampus` double NOT NULL,
  `jarak_market` double NOT NULL,
  `harga` double NOT NULL,
  `kebersihan` double NOT NULL,
  `keamanan` double NOT NULL,
  `fasilitas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_bobot`
--

INSERT INTO `temp_bobot` (`id`, `jarak_kampus`, `jarak_market`, `harga`, `kebersihan`, `keamanan`, `fasilitas`) VALUES
(1, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `temp_d_neg`
--

CREATE TABLE `temp_d_neg` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `jarak_kampus` double NOT NULL,
  `jarak_market` double NOT NULL,
  `harga` double NOT NULL,
  `kebersihan` double NOT NULL,
  `keamanan` double NOT NULL,
  `fasilitas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp_d_pos`
--

CREATE TABLE `temp_d_pos` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `jarak_kampus` double NOT NULL,
  `jarak_market` double NOT NULL,
  `harga` double NOT NULL,
  `kebersihan` double NOT NULL,
  `keamanan` double NOT NULL,
  `fasilitas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp_normalisasi`
--

CREATE TABLE `temp_normalisasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `jarak_kampus` double NOT NULL,
  `jarak_market` double NOT NULL,
  `harga` double NOT NULL,
  `kebersihan` double NOT NULL,
  `keamanan` double NOT NULL,
  `fasilitas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_normalisasi`
--

INSERT INTO `temp_normalisasi` (`id`, `nama`, `jarak_kampus`, `jarak_market`, `harga`, `kebersihan`, `keamanan`, `fasilitas`) VALUES
(10, 'nama 0', 1.3333333333333333, 1.3333333333333333, 1.3333333333333333, 1.3333333333333333, 1.3333333333333333, 1.3333333333333333),
(11, 'nama 1', 0.6666666666666666, 0.6666666666666666, 0.6666666666666666, 0.6666666666666666, 0.6666666666666666, 0.6666666666666666),
(12, 'nama 2', 1.3333333333333333, 1.3333333333333333, 1.3333333333333333, 1.3333333333333333, 1.3333333333333333, 1.3333333333333333);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kost`
--
ALTER TABLE `kost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_bobot`
--
ALTER TABLE `temp_bobot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_d_neg`
--
ALTER TABLE `temp_d_neg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_d_pos`
--
ALTER TABLE `temp_d_pos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_normalisasi`
--
ALTER TABLE `temp_normalisasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kost`
--
ALTER TABLE `kost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `temp_bobot`
--
ALTER TABLE `temp_bobot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temp_d_neg`
--
ALTER TABLE `temp_d_neg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_d_pos`
--
ALTER TABLE `temp_d_pos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_normalisasi`
--
ALTER TABLE `temp_normalisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
