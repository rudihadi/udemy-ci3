-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2023 at 09:05 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nama`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nama`
--

CREATE TABLE `tbl_nama` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(25) NOT NULL,
  `nama_belakang` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kontak` int(15) NOT NULL,
  `biodata` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nama`
--

INSERT INTO `tbl_nama` (`id`, `nama_depan`, `nama_belakang`, `tanggal_lahir`, `kontak`, `biodata`) VALUES
(1, 'Rudi', 'Hadi Syahfitrah', '1995-03-05', 987654321, 'IT Support'),
(2, 'Kartika', 'Dewi', '1995-01-19', 987, 'Admin Gudang'),
(3, 'Tika', '', '2023-09-07', 987, 'IT Support');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_nama`
--
ALTER TABLE `tbl_nama`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_nama`
--
ALTER TABLE `tbl_nama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
