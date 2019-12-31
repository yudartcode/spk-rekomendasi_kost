-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2019 at 05:49 AM
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
(30, 'agung', 3, 4, 500000, 4, 3, 5),
(31, 'yuda', 1, 1.2, 230000, 1, 2, 3),
(32, 'dodo', 2.6, 3.3, 330000, 3, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `temp_bobot`
--

CREATE TABLE `temp_bobot` (
  `id` int(11) NOT NULL,
  `kriteria` varchar(191) NOT NULL,
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

INSERT INTO `temp_bobot` (`id`, `kriteria`, `jarak_kampus`, `jarak_market`, `harga`, `kebersihan`, `keamanan`, `fasilitas`) VALUES
(3, 'jarak_kampus', 1, 5, 5, 5, 3, 3),
(4, 'jarak_market', 0.2, 1, 1, 1, 0.33, 0.33),
(5, 'harga', 0.2, 1, 1, 1, 0.33, 0.33),
(6, 'kebersihan', 0.2, 1, 1, 1, 0.33, 0.33),
(7, 'keamanan', 0.33, 3, 3, 3, 1, 1),
(8, 'fasilitas', 0.33, 3, 3, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `temp_bobot_normal`
--

CREATE TABLE `temp_bobot_normal` (
  `id` int(11) NOT NULL,
  `jarak_kampus` double NOT NULL,
  `jarak_market` double NOT NULL,
  `harga` double NOT NULL,
  `kebersihan` double NOT NULL,
  `keamanan` double NOT NULL,
  `fasilitas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_bobot_normal`
--

INSERT INTO `temp_bobot_normal` (`id`, `jarak_kampus`, `jarak_market`, `harga`, `kebersihan`, `keamanan`, `fasilitas`) VALUES
(2, -0.21053, -0.10526, -0.26316, 0.15789, 0.15789, 0.10526);

-- --------------------------------------------------------

--
-- Table structure for table `temp_d_neg`
--

CREATE TABLE `temp_d_neg` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `dNegatif` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp_d_pos`
--

CREATE TABLE `temp_d_pos` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `dPositif` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temp_nilai_pref`
--

CREATE TABLE `temp_nilai_pref` (
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
-- Dumping data for table `temp_nilai_pref`
--

INSERT INTO `temp_nilai_pref` (`id`, `nama`, `jarak_kampus`, `jarak_market`, `harga`, `kebersihan`, `keamanan`, `fasilitas`) VALUES
(10, 'agung', 0, 0, 0, 1, 1, 1),
(11, 'yuda', 1, 1, 1, 0, 0, 0),
(12, 'dodo', 0.2, 0.25, 0.62963, 0.66667, 0, 0.5);

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

-- --------------------------------------------------------

--
-- Table structure for table `temp_normalisasi_kriteria`
--

CREATE TABLE `temp_normalisasi_kriteria` (
  `id` int(11) NOT NULL,
  `kriteria` varchar(191) NOT NULL,
  `jarak_kampus` double NOT NULL,
  `jarak_market` double NOT NULL,
  `harga` double NOT NULL,
  `kebersihan` double NOT NULL,
  `keamanan` double NOT NULL,
  `fasilitas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_normalisasi_kriteria`
--

INSERT INTO `temp_normalisasi_kriteria` (`id`, `kriteria`, `jarak_kampus`, `jarak_market`, `harga`, `kebersihan`, `keamanan`, `fasilitas`) VALUES
(1, 'jarak_kampus', 0.44248, 0.35714, 0.35714, 0.35714, 0.50083, 0.50083),
(2, 'jarak_market', 0.0885, 0.07143, 0.07143, 0.07143, 0.05509, 0.05509),
(3, 'harga', 0.0885, 0.07143, 0.07143, 0.07143, 0.05509, 0.05509),
(4, 'kebersihan', 0.0885, 0.07143, 0.07143, 0.07143, 0.05509, 0.05509),
(5, 'keamanan', 0.14602, 0.21429, 0.21429, 0.21429, 0.16694, 0.16694),
(6, 'fasilitas', 0.14602, 0.21429, 0.21429, 0.21429, 0.16694, 0.16694);

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
-- Indexes for table `temp_bobot_normal`
--
ALTER TABLE `temp_bobot_normal`
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
-- Indexes for table `temp_nilai_pref`
--
ALTER TABLE `temp_nilai_pref`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_normalisasi`
--
ALTER TABLE `temp_normalisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_normalisasi_kriteria`
--
ALTER TABLE `temp_normalisasi_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kost`
--
ALTER TABLE `kost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `temp_bobot`
--
ALTER TABLE `temp_bobot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `temp_bobot_normal`
--
ALTER TABLE `temp_bobot_normal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `temp_d_neg`
--
ALTER TABLE `temp_d_neg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `temp_d_pos`
--
ALTER TABLE `temp_d_pos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `temp_nilai_pref`
--
ALTER TABLE `temp_nilai_pref`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `temp_normalisasi`
--
ALTER TABLE `temp_normalisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `temp_normalisasi_kriteria`
--
ALTER TABLE `temp_normalisasi_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
