-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 08:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

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
  `tempat_kegiatan` varchar(225) NOT NULL,
  `buka_acara` varchar(400) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agenda_bidang`
--

INSERT INTO `agenda_bidang` (`id`, `tgl`, `nama_kegiatan`, `bidang_penyelenggara`, `Jam`, `tempat_kegiatan`, `buka_acara`, `status`) VALUES
(5, '2023-07-24', 'Pelatihan', 'Bidang SKPK', '09:00:00', 'Gedung A', 'ACEP BAMBANG MUTAKIN,S.STP., M.Si.', 1),
(7, '2023-08-09', 'Diklat', 'Bidang SKPK', '09:00:00', 'Gedung B', 'DJADJAT SUDRAJAT,S.H., M.Si.', 1),
(18, '2023-08-07', 'Webinar', 'Bidang SKPK', '08:30:00', 'Gedung A', '', 0),
(20, '2023-09-04', 'Apel pagi', 'Bidang PKTI', '07:30:00', 'Lapangan Apel', 'Pemimpin apel: DENNY SUMIOK,\r\nPembina apel: AJANG ZAENAL AFANDI,S.T., M.T.\r\nMC: ENDANG RAHMAWATI,', 1),
(23, '2023-08-14', 'Webinar', 'Sekretariat', '09:00:00', 'Gedung B', 'DJADJAT SUDRAJAT,S.H., M.Si.', 2),
(25, '2023-08-21', 'Webinar', 'Bidang SKPK', '09:00:00', 'Gedung B', 'DJADJAT SUDRAJAT,S.H., M.Si.', 1),
(26, '2023-08-22', 'Podcast', 'Bidang PKTI', '10:00:00', 'CC', 'ACEP BAMBANG MUTAKIN,S.STP., M.Si.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `undangan`
--

CREATE TABLE `undangan` (
  `id` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `judul_undangan` varchar(225) NOT NULL,
  `jam_pelaksanaan` time NOT NULL,
  `tempat_pelaksana` varchar(225) NOT NULL,
  `yang_ditugaskan` varchar(225) NOT NULL,
  `nomor_surat` int(11) NOT NULL,
  `pdf` varchar(500) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `undangan`
--

INSERT INTO `undangan` (`id`, `tgl`, `judul_undangan`, `jam_pelaksanaan`, `tempat_pelaksana`, `yang_ditugaskan`, `nomor_surat`, `pdf`, `status`) VALUES
(14, '2023-08-14', 'coba1', '11:42:00', 'CC', 'HENDRA SETIAWAN,S.Sos.I.', 986546, 'FROM_PENDAFTARAN_KP-14.pdf', 1),
(16, '2023-08-21', 'coba2', '11:09:00', 'CC', 'HENDRA SETIAWAN,S.Sos.I.', 98654612, 'FROM_PENDAFTARAN_KP-111.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `role_id`) VALUES
('admin', 'bpsdmjabar', '1'),
('sekretariat', 'sekretariatbpsdm', '2'),
('superadmin', 'bpsdm@sekretariat', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda_bidang`
--
ALTER TABLE `agenda_bidang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `undangan`
--
ALTER TABLE `undangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda_bidang`
--
ALTER TABLE `agenda_bidang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `undangan`
--
ALTER TABLE `undangan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
