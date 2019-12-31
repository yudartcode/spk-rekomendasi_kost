-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2019 at 07:45 AM
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
-- Table structure for table `temp_d_neg`
--

CREATE TABLE `temp_d_neg` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `dNegatif` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_d_neg`
--

INSERT INTO `temp_d_neg` (`id`, `nama`, `dNegatif`) VALUES
(13, 'agung', 3.1469435490011577),
(14, 'yuda', 3.4033541637331837),
(15, 'dodo', 2.4945135726028833);

-- --------------------------------------------------------

--
-- Table structure for table `temp_d_pos`
--

CREATE TABLE `temp_d_pos` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `dPositif` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_d_pos`
--

INSERT INTO `temp_d_pos` (`id`, `nama`, `dPositif`) VALUES
(13, 'agung', 3.4033541637331837),
(14, 'yuda', 3.1469435490011577),
(15, 'dodo', 2.51443925607679);

-- --------------------------------------------------------

--
-- Table structure for table `temp_nilai_pref`
--

CREATE TABLE `temp_nilai_pref` (
  `id` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `val` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_nilai_pref`
--

INSERT INTO `temp_nilai_pref` (`id`, `nama`, `val`) VALUES
(13, 'agung', 0.48043),
(14, 'yuda', 0.51957),
(15, 'dodo', 0.49801);

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
(49, 'agung', 0.7328, 3.75757, 3.8958, 3.92232, 2.18282, 2.12132),
(50, 'yuda', 0.24427, 1.12727, 1.79207, 0.98058, 1.45521, 1.27279),
(51, 'dodo', 0.63509, 3.09999, 2.57123, 2.94174, 1.45521, 1.69706);

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
  `fasilitas` double NOT NULL,
  `avg` double DEFAULT NULL,
  `matrix_aw` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_normalisasi_kriteria`
--

INSERT INTO `temp_normalisasi_kriteria` (`id`, `kriteria`, `jarak_kampus`, `jarak_market`, `harga`, `kebersihan`, `keamanan`, `fasilitas`, `avg`, `matrix_aw`) VALUES
(19, 'jarak_kampus', 0.44248, 0.35714, 0.35714, 0.35714, 0.50083, 0.50083, 0.41926, 2.57449),
(20, 'jarak_market', 0.0885, 0.07143, 0.07143, 0.07143, 0.05509, 0.05509, 0.06883, 0.4138478),
(21, 'harga', 0.0885, 0.07143, 0.07143, 0.07143, 0.05509, 0.05509, 0.06883, 0.4138478),
(22, 'kebersihan', 0.0885, 0.07143, 0.07143, 0.07143, 0.05509, 0.05509, 0.06883, 0.4138478),
(23, 'keamanan', 0.14602, 0.21429, 0.21429, 0.21429, 0.16694, 0.16694, 0.18713, 1.1320858),
(24, 'fasilitas', 0.14602, 0.21429, 0.21429, 0.21429, 0.16694, 0.16694, 0.18713, 1.1320858);

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
-- AUTO_INCREMENT for table `temp_d_neg`
--
ALTER TABLE `temp_d_neg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `temp_d_pos`
--
ALTER TABLE `temp_d_pos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `temp_nilai_pref`
--
ALTER TABLE `temp_nilai_pref`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `temp_normalisasi`
--
ALTER TABLE `temp_normalisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `temp_normalisasi_kriteria`
--
ALTER TABLE `temp_normalisasi_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
