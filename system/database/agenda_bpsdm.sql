-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 11:12 AM
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
(32, '2023-11-23', 'Webinar', 'Bidang PKTU', '09:00:00', 'Gedung A', 'Drs.  CEPI MAHDI,M.M.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `no` int(11) NOT NULL,
  `nip` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_jabatan` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`no`, `nip`, `nama`, `nama_jabatan`) VALUES
(10, 195808231986031008, 'H.  DADANG SUHARTO,S.H., M.M.', 'WIDYAISWARA AHLI MADYA'),
(17, 195902251986031007, 'Dr. Drs. H  ENDJANG NAFFANDY,M.Si', 'WIDYAISWARA AHLI MADYA'),
(18, 195912061983031007, 'Dr. Drs. H.  DUDUNG ABDULLAH PASTEUR,M.M.Pd.', 'WIDYAISWARA AHLI MADYA'),
(19, 196001041986111001, 'Dr. MUNA`IM,M.M.Pd.', 'WIDYAISWARA AHLI MADYA'),
(20, 196010311981011002, 'Dr. Ir. H.  ADANG KURNIADI,M.M.', 'WIDYAISWARA AHLI MADYA'),
(21, 196212151985011002, 'Drs. H.  YAYAT SUPRIATNA,M.Si.', 'WIDYAISWARA AHLI MADYA'),
(22, 196308231990032006, ' ELLY RUSTINY DACHLAN,S.T., M.T.', 'WIDYAISWARA AHLI MADYA'),
(23, 196309181991032002, 'Dr.  ISYE NURIYAH AGINDAWATI,S.H., M.Kn.M.H', 'WIDYAISWARA AHLI MADYA'),
(24, 196312211992021001, 'Drs. H.  ASEP YUSUF WIBISANA,M.M.A.', 'WIDYAISWARA AHLI MADYA'),
(25, 196312311992031084, 'Dr. TARLI SUPRIYATNA,S.E., M.M.', 'WIDYAISWARA AHLI MADYA'),
(26, 196402261993032003, 'Dra.  TURWELIS,S.Pd., M.Si.', 'WIDYAISWARA AHLI MADYA'),
(27, 196407251989011001, 'Drs.  RADEN HENDI HENDYANA,M.Si.', 'WIDYAISWARA AHLI MADYA'),
(28, 196411011991031004, ' AJANG ZAENAL AFANDI,S.T., M.T.', 'WIDYAISWARA AHLI MADYA'),
(29, 196610021990021001, 'Drs.  SRI WIDODO,M.M.Pd.', 'WIDYAISWARA AHLI MADYA'),
(16, 196610241994031003, 'Dr.  H. EEP SAEFUL ROJAB FANSURI,M.Pd.', 'WIDYAISWARA AHLI MADYA'),
(15, 196612161994031007, 'Dr. Ir.  SUJATMOKO,Dipl., W.R.Eng., M.Sc.', 'WIDYAISWARA AHLI MADYA'),
(9, 196707171998032003, 'Dr. Ir. DEWI YULIANI,M.T.', 'WIDYAISWARA AHLI MADYA'),
(8, 196711082000121005, ' TATANG,S.Pd., M.M.Pd.', 'WIDYAISWARA AHLI MADYA'),
(4, 196804091987031004, 'Drs.  CEPI MAHDI,M.M.', 'KEPALA BIDANG PENGEMBANGAN KOMPETENSI TEKNIS UMUM'),
(7, 196905131997031005, ' RULLY TRILENGGONO,S.T., M.T.', 'WIDYAISWARA AHLI MADYA'),
(6, 196909081996031006, ' H. ASEP SAEPULOH,S.T., M.T.', 'KEPALA BIDANG PENGEMBANGAN KOMPETENSI MANAJERIAL'),
(11, 196911041998021001, 'Dr.  WAWAN SUWANDI,S.Pd., M.Pd.', 'WIDYAISWARA AHLI MADYA'),
(12, 197101301998032003, 'Rd. SRI UNTARI,S.Pt., M.P.', 'WIDYAISWARA AHLI MADYA'),
(1, 197203181998031007, ' HERY ANTASARI,ST., MDP', 'KEPALA BADAN'),
(13, 197209081993031004, 'Drs. BUDY HERMAWAN,M.Si.', 'WIDYAISWARA AHLI MADYA'),
(14, 197311011999012001, ' NOVI SOVIYANTI,S.Sos., M.A.P.', 'WIDYAISWARA AHLI MADYA'),
(5, 197504192002121006, ' TUGIMAN,S.E., M.M.', 'KEPALA BIDANG SERTIFIKASI KOMPETENSI DAN PENGELOLAAN KELEMBAGAAN\r'),
(2, 197506281993111001, ' YUDI KUNCORO,A.P., M.M.', 'SEKRETARIS'),
(3, 197903102008012005, ' WIDYANINGSIH,S.E., M.M.', 'KEPALA BIDANG PENGEMBANGAN KOMPETENSI TEKNIS SUBSTANTIF'),
(30, 198011182000121001, ' ACEP BAMBANG MUTAKIN,S.STP., M.Si.', 'WIDYAISWARA AHLI MADYA');

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
(22, '2023-11-27', 'HUT RI 80', '08:00:00', 'Istana Merdeka', ' H. ASEP SAEPULOH,S.T., M.T.', 98654612, '4__23-28_Priyo_Sutopo_(Dedy,_Zainal)1.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `role_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `role_id`) VALUES
('admin', 'bpsdmjabar', 'Admin', '1'),
('sekretariat', 'sekretariatbpsdm', 'Sekretariat', '2'),
('superadmin', 'bpsdm@sekretariat', 'Admin', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda_bidang`
--
ALTER TABLE `agenda_bidang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nip`,`nama`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `undangan`
--
ALTER TABLE `undangan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
