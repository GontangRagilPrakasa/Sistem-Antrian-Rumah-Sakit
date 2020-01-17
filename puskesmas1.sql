-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2018 at 10:38 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `grafik`
--

CREATE TABLE IF NOT EXISTS `grafik` (
  `idteler` varchar(10) NOT NULL,
  `namateler` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idteler`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grafik`
--

INSERT INTO `grafik` (`idteler`, `namateler`, `jumlah`, `waktu`) VALUES
('a', 'Loket A', 3, '2018-02-04 08:35:59'),
('b', 'Loket B', 2, '2018-02-04 08:35:59'),
('c', 'Loket C', 1, '2018-02-04 08:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE IF NOT EXISTS `informasi` (
  `idinfo` int(255) NOT NULL AUTO_INCREMENT,
  `informasi` text NOT NULL,
  PRIMARY KEY (`idinfo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`idinfo`, `informasi`) VALUES
(4, 'Puskesmas (Pusat Kesehatan Masyarakat) adalah suatu organisasi kesehatan fungsional yang merupakan pusat pengembangan kesehatan masyarakat yang juga membina peran serta masyarakat di samping memberikan pelayanan secara menyeluruh dan terpadu kepada masyarakat di wilayah kerjanya dalam bentuk kegiatan pokok.');

-- --------------------------------------------------------

--
-- Table structure for table `tallera`
--

CREATE TABLE IF NOT EXISTS `tallera` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nomor` int(100) NOT NULL,
  `kodeteler` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tallera`
--

INSERT INTO `tallera` (`id`, `nomor`, `kodeteler`) VALUES
(26, 1, 'a'),
(27, 2, 'a'),
(28, 3, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tallerb`
--

CREATE TABLE IF NOT EXISTS `tallerb` (
  `idb` int(100) NOT NULL AUTO_INCREMENT,
  `nomorb` int(100) NOT NULL,
  `kodeteler` varchar(10) NOT NULL,
  PRIMARY KEY (`idb`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tallerb`
--

INSERT INTO `tallerb` (`idb`, `nomorb`, `kodeteler`) VALUES
(15, 1, 'b'),
(16, 2, 'b');

-- --------------------------------------------------------

--
-- Table structure for table `tallerc`
--

CREATE TABLE IF NOT EXISTS `tallerc` (
  `idc` int(100) NOT NULL AUTO_INCREMENT,
  `nomorc` int(100) NOT NULL,
  `kodeteler` varchar(10) NOT NULL,
  PRIMARY KEY (`idc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tallerc`
--

INSERT INTO `tallerc` (`idc`, `nomorc`, `kodeteler`) VALUES
(20, 1, 'c');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(2, 'admin', 'admin', 'admin'),
(3, 'user', 'user', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
