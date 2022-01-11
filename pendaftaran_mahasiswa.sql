-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 02:02 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambil_jurusan`
--

CREATE TABLE `ambil_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(30) NOT NULL,
  `angkatan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ambil_jurusan`
--

INSERT INTO `ambil_jurusan` (`id_jurusan`, `nama_jurusan`, `angkatan`) VALUES
(1, 'Sistem Informasi', 2020),
(2, 'Teknik Elektro', 2020),
(3, 'Akuntansi', 2019),
(5, 'Bahasa Inggris', 2021),
(7, 'Ilmu Komunikasi', 2021);

-- --------------------------------------------------------

--
-- Table structure for table `calon_mahasiswa`
--

CREATE TABLE `calon_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` enum('Islam','Kristen','Hindu','Budha','Atheis') NOT NULL,
  `alamat` text NOT NULL,
  `nomor_hp` bigint(20) NOT NULL,
  `email` char(50) NOT NULL,
  `sekolah_asal` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon_mahasiswa`
--

INSERT INTO `calon_mahasiswa` (`id_mahasiswa`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `nomor_hp`, `email`, `sekolah_asal`, `username`, `password`, `id_jurusan`) VALUES
(20510008, 'Ainaini Azzahra', '2001-12-13', 'P', 'Islam', 'Desa Belung', 62882009287910, 'ainainiazzahra5@gmail.com', 'SMK Diponegoro Tumpang', 'Azzahra', 'Azzahra', 1),
(20510010, 'Angkasa Jaya', '2002-06-16', 'L', 'Islam', 'Kota Surabaya', 812763876923, 'jaya@gmail.com', 'SMK Negeri Surabaya', 'Jaya', 'jaya', 2);

-- --------------------------------------------------------

--
-- Table structure for table `data_ukm`
--

CREATE TABLE `data_ukm` (
  `nama_ukm` varchar(100) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_ukm`
--

INSERT INTO `data_ukm` (`nama_ukm`, `id_mahasiswa`) VALUES
('KIPRAH (Kominitas Pena Merah)', 20510008);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambil_jurusan`
--
ALTER TABLE `ambil_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `calon_mahasiswa`
--
ALTER TABLE `calon_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `data_ukm`
--
ALTER TABLE `data_ukm`
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambil_jurusan`
--
ALTER TABLE `ambil_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `calon_mahasiswa`
--
ALTER TABLE `calon_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20510011;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calon_mahasiswa`
--
ALTER TABLE `calon_mahasiswa`
  ADD CONSTRAINT `calon_mahasiswa_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `ambil_jurusan` (`id_jurusan`);

--
-- Constraints for table `data_ukm`
--
ALTER TABLE `data_ukm`
  ADD CONSTRAINT `data_ukm_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `calon_mahasiswa` (`id_mahasiswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
