-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 09:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda_bpsdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda_bidang`
--

CREATE TABLE `agenda_bidang` (
  `id` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `nama_kegiatan` varchar(225) NOT NULL,
  `bidang_penyelenggara` varchar(50) NOT NULL,
  `Jam` time NOT NULL,
  `penyelenggara` varchar(200) NOT NULL,
  `tempat_kegiatan` varchar(225) NOT NULL,
  `buka_acara` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agenda_bidang`
--

INSERT INTO `agenda_bidang` (`id`, `tgl`, `nama_kegiatan`, `bidang_penyelenggara`, `Jam`, `penyelenggara`, `tempat_kegiatan`, `buka_acara`) VALUES
(1, '2023-08-09', 'Pelatihan', 'sekretariat', '09:00:00', 'BPSDM Provinsi Jawa Barat', 'Gedung A', 'ACEP BAMBANG MUTAKIN,S.STP., M.Si.'),
(2, '2023-08-03', 'Webinar', 'Bidang SKPK', '09:00:00', 'BPSDM Provinsi Jawa Barat', 'Gedung B', 'ANGGA MUCHLIS AL-RACHMAT,S.I.P., M.Si.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('superadmin', 'bpsdm@sekretariat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda_bidang`
--
ALTER TABLE `agenda_bidang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
