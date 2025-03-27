-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2025 at 01:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `npm` bigint(55) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `kelas` varchar(55) NOT NULL,
  `telepon` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`npm`, `nama`, `fakultas`, `jurusan`, `kelas`, `telepon`) VALUES
(23082010045, 'Dea Kusuma Ningrum', 'Fakultas Ilmu Komputer', 'Sistem Informasi', 'B', '08636728881'),
(23082010053, 'Ahmad Rifqi Abdurrahman', 'Fakultas Ilmu Komputer', 'Sistem Informasi', 'B', '08728366472'),
(23082010054, 'Mohammad Bayu Rizki', 'Fakultas Ilmu Komputer', 'Sistem Informasi', 'B', '087721893340'),
(23082010057, 'Raditya Bagus Pradana', 'Fakultas Ilmu Komputer', 'Sistem Informasi', 'B', '085517784773'),
(23082010079, 'Primo De Lakone', 'Fakultas Ilmu Komputer', 'Sistem Informasi', 'B', '0888217738'),
(220723982299, 'Rendy Oktovian Paling tampan', 'FISIP', 'IKOM', 'A', '0877726672');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`npm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
