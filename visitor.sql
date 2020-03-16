-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2020 at 09:15 AM
-- Server version: 8.0.18
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitor`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(45) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nim`, `nama`, `alamat`, `email`) VALUES
(37, 'Darma Riduan', 'Medan', 'Lorem ipsum', 'Laki-laki'),
(38, 'Maya', 'Kisaran', 'Lorem ipsum Gitu Loh', 'Perempuan'),
(39, 'Mahabatan', 'Medan', 'Testing', 'Laki-laki'),
(40, 'test', 'test', 'test', 'Laki-laki'),
(41, 'test', 'test', 'asdasdas', 'Laki-laki'),
(42, 'xx', 'xx', 'xx', 'Laki-laki'),
(43, 'test', 'test', ' asjdnk', 'Laki-laki'),
(44, 'test', 'test', 'asda', 'Laki-laki'),
(45, 'test', 'test', 'asda', 'Laki-laki'),
(46, 'dfdsg', 'dvdvd', 'dfdf', 'Perempuan'),
(47, 'asd', 'asd', 'sds', 'Laki-laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
