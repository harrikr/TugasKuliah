-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2017 at 05:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wonosobomembaca`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbuku`
--

CREATE TABLE `dbuku` (
  `kodeBuku` int(5) NOT NULL,
  `judulBuku` varchar(32) DEFAULT NULL,
  `pengarang` varchar(32) DEFAULT NULL,
  `penerbit` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbuku`
--

INSERT INTO `dbuku` (`kodeBuku`, `judulBuku`, `pengarang`, `penerbit`) VALUES
(8, 'SLKAJFCBJIK', 'BHHJ', 'BUKI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbuku`
--
ALTER TABLE `dbuku`
  ADD PRIMARY KEY (`kodeBuku`),
  ADD UNIQUE KEY `kodeBuku` (`kodeBuku`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
