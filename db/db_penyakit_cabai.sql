-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 12:45 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penyakit_cabai`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diagnosa`
--

CREATE TABLE `tbl_diagnosa` (
  `id_diagnosa` int(11) NOT NULL,
  `id_jenis_tanaman` int(11) NOT NULL,
  `id_jenis_penyakit` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `kultur_teknis` text NOT NULL,
  `fisik_mekanis` text NOT NULL,
  `kimiawi` text NOT NULL,
  `hayati` text NOT NULL,
  `delete_at` int(11) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp() COMMENT '0= active, 1= non active',
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_diagnosa`
--

INSERT INTO `tbl_diagnosa` (`id_diagnosa`, `id_jenis_tanaman`, `id_jenis_penyakit`, `id_gejala`, `kultur_teknis`, `fisik_mekanis`, `kimiawi`, `hayati`, `delete_at`, `created_time`, `updated_time`) VALUES
(1, 123, 542, 222, 'Bismilah', 'subhnalloh', 'Alhamdulillah', 'astagfirulloh', 0, '2023-07-10 17:00:52', '2023-07-10 17:00:52'),
(2, 0, 0, 0, '11qq', '22ww', '33ee', 'rr44', 1, '2023-07-10 17:37:24', '2023-07-10 17:37:24'),
(3, 0, 0, 0, '11qaq', '112233', '556677', '1234567', 0, '2023-07-10 17:40:12', '2023-07-10 17:40:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `id_gejala` int(11) NOT NULL,
  `id_jenis_tanaman` int(11) NOT NULL,
  `gejala` varchar(250) NOT NULL,
  `delete_at` int(11) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`id_gejala`, `id_jenis_tanaman`, `gejala`, `delete_at`, `created_time`, `updated_time`) VALUES
(1, 1, 'bercak berwarna hitam atau cokelat pada bagian batang, daun', 0, '2023-07-10 15:11:27', '2023-07-10 15:11:27'),
(2, 2, 'Gejala serangan awal dari serangan penyakit', 0, '2023-07-10 16:56:14', '2023-07-10 16:56:14'),
(3, 2, '', 1, '2023-07-10 16:56:28', '2023-07-10 16:56:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_penyakit`
--

CREATE TABLE `tbl_jenis_penyakit` (
  `id_jenis_penyakit` int(11) NOT NULL,
  `code_penyakit` varchar(250) NOT NULL,
  `jenis_penyakit` varchar(250) NOT NULL,
  `delete_at` int(11) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp() COMMENT '0= active, 1= non active',
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jenis_penyakit`
--

INSERT INTO `tbl_jenis_penyakit` (`id_jenis_penyakit`, `code_penyakit`, `jenis_penyakit`, `delete_at`, `created_time`, `updated_time`) VALUES
(1, 'NR001', 'Bercak daun Cercospora.', 0, '2023-07-10 15:49:12', '2023-07-10 15:49:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_tanaman`
--

CREATE TABLE `tbl_jenis_tanaman` (
  `id_jenis_tanaman` int(11) NOT NULL,
  `jenis_tanaman` varchar(250) NOT NULL,
  `delete_at` int(11) NOT NULL COMMENT '0= active, 1= non active',
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jenis_tanaman`
--

INSERT INTO `tbl_jenis_tanaman` (`id_jenis_tanaman`, `jenis_tanaman`, `delete_at`, `created_time`, `updated_time`) VALUES
(1, 'Cabai Hijau', 0, '2023-07-10 14:48:33', '2023-07-10 14:48:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `level` int(11) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `delete_at` int(11) NOT NULL COMMENT '0=active, 1=non active',
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `update_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_users`, `username`, `password`, `level`, `nama_lengkap`, `delete_at`, `created_time`, `update_time`) VALUES
(1, 'admin', 'admin', 1, 'Nauval Banyu Arrachman', 1, '2023-07-10 15:13:48', '2023-07-10 15:13:48'),
(2, 'Nauval_', '', 0, 'Nauval Banyu', 0, '2023-07-10 15:25:14', '2023-07-10 15:25:14'),
(3, 'aman', '', 2, '2023-07-10', 1, '2023-07-10 15:25:25', '2023-07-10 15:25:25'),
(4, 'Rania cantik', '', 4, 'Rania Priyanka', 0, '2023-07-10 15:26:38', '2023-07-10 15:26:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_diagnosa`
--
ALTER TABLE `tbl_diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`);

--
-- Indexes for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `tbl_jenis_penyakit`
--
ALTER TABLE `tbl_jenis_penyakit`
  ADD PRIMARY KEY (`id_jenis_penyakit`);

--
-- Indexes for table `tbl_jenis_tanaman`
--
ALTER TABLE `tbl_jenis_tanaman`
  ADD PRIMARY KEY (`id_jenis_tanaman`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_diagnosa`
--
ALTER TABLE `tbl_diagnosa`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_jenis_penyakit`
--
ALTER TABLE `tbl_jenis_penyakit`
  MODIFY `id_jenis_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_jenis_tanaman`
--
ALTER TABLE `tbl_jenis_tanaman`
  MODIFY `id_jenis_tanaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
