-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2018 at 07:15 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `idinfo` int(255) NOT NULL,
  `informasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`idinfo`, `informasi`) VALUES
(4, 'Puskesmas (Pusat Kesehatan Masyarakat) adalah suatu organisasi kesehatan fungsional yang merupakan pusat pengembangan kesehatan masyarakat yang juga membina peran serta masyarakat di samping memberikan pelayanan secara menyeluruh dan terpadu kepada masyarakat di wilayah kerjanya dalam bentuk kegiatan pokok.');

-- --------------------------------------------------------

--
-- Table structure for table `tallera`
--

CREATE TABLE `tallera` (
  `id` int(100) NOT NULL,
  `nomor` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tallera`
--

INSERT INTO `tallera` (`id`, `nomor`) VALUES
(17, 1),
(18, 2),
(19, 3),
(20, 4),
(21, 5),
(22, 6),
(23, 7),
(24, 8),
(25, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tallerb`
--

CREATE TABLE `tallerb` (
  `idb` int(100) NOT NULL,
  `nomorb` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tallerb`
--

INSERT INTO `tallerb` (`idb`, `nomorb`) VALUES
(11, 1),
(12, 2),
(13, 3),
(14, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tallerc`
--

CREATE TABLE `tallerc` (
  `idc` int(100) NOT NULL,
  `nomorc` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tallerc`
--

INSERT INTO `tallerc` (`idc`, `nomorc`) VALUES
(13, 1),
(14, 2),
(15, 3),
(16, 4),
(17, 5),
(18, 6),
(19, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(2, 'admin', 'admin', 'admin'),
(3, 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`idinfo`);

--
-- Indexes for table `tallera`
--
ALTER TABLE `tallera`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tallerb`
--
ALTER TABLE `tallerb`
  ADD PRIMARY KEY (`idb`);

--
-- Indexes for table `tallerc`
--
ALTER TABLE `tallerc`
  ADD PRIMARY KEY (`idc`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `idinfo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tallera`
--
ALTER TABLE `tallera`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tallerb`
--
ALTER TABLE `tallerb`
  MODIFY `idb` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tallerc`
--
ALTER TABLE `tallerc`
  MODIFY `idc` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
