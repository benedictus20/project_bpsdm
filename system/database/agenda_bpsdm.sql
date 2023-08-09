-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2023 pada 03.28
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

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
-- Struktur dari tabel `agenda_bidang`
--

CREATE TABLE `agenda_bidang` (
  `id` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `nama_kegiatan` varchar(225) NOT NULL,
  `bidang_penyelenggara` varchar(50) NOT NULL,
  `Jam` time NOT NULL,
  `penyelenggara` varchar(200) NOT NULL,
  `tempat_kegiatan` varchar(225) NOT NULL,
  `buka_acara` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `agenda_bidang`
--

INSERT INTO `agenda_bidang` (`id`, `tgl`, `nama_kegiatan`, `bidang_penyelenggara`, `Jam`, `penyelenggara`, `tempat_kegiatan`, `buka_acara`) VALUES
(5, '2023-07-24', 'Pelatihan', 'Bidang SPK', '09:00:00', 'BPSDM Provinsi Jawa Barat', 'Gedung A', 'ACEP BAMBANG MUTAKIN,S.STP., M.Si.'),
(7, '2023-08-09', 'Diklat', 'SKPK', '09:00:00', 'BPSDM Provinsi Jawa Barat', 'Gedung B', 'DJADJAT SUDRAJAT,S.H., M.Si.'),
(18, '2023-08-07', 'Webinar', 'Bidang PKTU', '08:30:00', '', 'Gedung A', ''),
(20, '2023-09-04', 'Apel pagi', 'Bidang SPK', '07:30:00', '', 'Lapangan Apel', 'Pemimpin apel: DENNY SUMIOK,\r\nPembina apel: AJANG ZAENAL AFANDI,S.T., M.T.\r\nMC: ENDANG RAHMAWATI,');

-- --------------------------------------------------------

--
-- Struktur dari tabel `undangan`
--

CREATE TABLE `undangan` (
  `id` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `judul_undangan` varchar(225) NOT NULL,
  `jam_pelaksanaan` time NOT NULL,
  `tempat_pelaksana` varchar(225) NOT NULL,
  `yang_ditugaskan` varchar(225) NOT NULL,
  `nomor_surat` int(11) NOT NULL,
  `pdf` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `role_id`) VALUES
('admin', 'bpsdmjabar', '1'),
('sekretariat', 'sekretariatbpsdm', '2'),
('superadmin', 'bpsdm@sekretariat', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda_bidang`
--
ALTER TABLE `agenda_bidang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `undangan`
--
ALTER TABLE `undangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda_bidang`
--
ALTER TABLE `agenda_bidang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `undangan`
--
ALTER TABLE `undangan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
