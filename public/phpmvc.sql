-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 03:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `id` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`id`, `nama`, `jenis_kelamin`, `alamat`) VALUES
(7, 'Ivan Zuwanta', 'Laki-laki', 'surondakan'),
(15, 'wahyu tri wulansari', 'Perempuan', 'kedungsigit'),
(16, 'fikrotu dwi f', 'Perempuan', 'trenggalek');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nama`, `jenis_kelamin`, `alamat`) VALUES
(60, 'Alvin top ahmad djaelani', 'Laki-laki', 'Sumbergedong'),
(64, 'arkan arya reza maulana', 'Laki-laki', 'pule'),
(65, 'Aan Fakturohman', 'Laki-laki', 'pule'),
(66, 'ade tata subekti', 'Laki-laki', 'ngantru'),
(70, 'Eka nanda susila', 'Laki-laki', 'pule'),
(71, 'arya endsha wira setya', 'Laki-laki', 'ngerjo'),
(72, 'Daffa oriendra', 'Laki-laki', 'dongko'),
(73, 'dino ronggo warsito', 'Laki-laki', 'dongko'),
(74, 'alfinanda rangga satriya', 'Laki-laki', 'pule'),
(75, 'aditya fajar nur arifin', 'Laki-laki', 'mlinjon'),
(76, 'ahmad fadli ardianto', 'Laki-laki', 'mlinjon'),
(77, 'cello javan amilova', 'Laki-laki', 'trenggalek'),
(78, 'eka nur wahyu dyanto', 'Laki-laki', 'trenggalek'),
(79, 'achmad rozaki', 'Laki-laki', 'trenggalek');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(20) NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `jurusan`) VALUES
(3, 'Rekayasa Perangkat Lunak'),
(25, 'Design pemodelan dan informasi bangunan'),
(26, 'Teknik pemanasan, tata udara, dan pendinginan'),
(27, 'Teknik konstruksi dan perumahan.'),
(28, 'Teknik pengelasan.'),
(29, 'Akuntansi'),
(30, 'Kuliner.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
