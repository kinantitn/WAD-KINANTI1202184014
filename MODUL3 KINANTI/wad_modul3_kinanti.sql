-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 01:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul3_kinanti`
--

-- --------------------------------------------------------

--
-- Table structure for table `modul3_crud`
--

CREATE TABLE `modul3_crud` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `mulai` time DEFAULT NULL,
  `berakhir` time DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `harga` bigint(20) DEFAULT NULL,
  `benefit` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modul3_crud`
--

INSERT INTO `modul3_crud` (`id`, `name`, `deskripsi`, `gambar`, `kategori`, `tanggal`, `mulai`, `berakhir`, `tempat`, `harga`, `benefit`) VALUES
(5, 'Google Meet', 'Ini adalah event Google Meet.', '1346422715_Google Meet.jpg', 'online', '2020-11-15', '07:00:00', '08:00:00', 'Google Meet', 100000, 'sertifikat'),
(6, 'Zoom Meeting', 'Ini adalah event Zoom Meeting.', '1589395844_Zoom Meeting.jpg', 'online', '2020-11-16', '09:00:00', '10:00:00', 'Zoom Meeting', 120000, 'souvenir,sertifikat'),
(8, 'Google Hangouts', 'Ini adalah event Google Hangouts.', '528209890_Google Hangouts.jpg', 'online', '2020-11-17', '11:00:00', '12:00:00', 'Google Hangouts', 75000, 'souvenir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `modul3_crud`
--
ALTER TABLE `modul3_crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `modul3_crud`
--
ALTER TABLE `modul3_crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
