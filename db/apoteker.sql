-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 09:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apoteker`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diagnosa`
--

CREATE TABLE `tbl_diagnosa` (
  `id_diagnosa` int(20) NOT NULL,
  `code_diagnosa` varchar(20) NOT NULL,
  `nama_diagnosa` varchar(225) NOT NULL,
  `delete_at` int(2) NOT NULL COMMENT '0 = active, 1 = non-active',
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_diagnosa`
--

INSERT INTO `tbl_diagnosa` (`id_diagnosa`, `code_diagnosa`, `nama_diagnosa`, `delete_at`, `created_time`, `updated_time`) VALUES
(1, 'A', 'Asma', 0, '2023-04-05 14:22:14', '2023-04-05 14:22:14'),
(2, 'P', 'Pusing', 0, '2023-04-05 14:22:14', '2023-04-05 14:22:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_tanggal_lahir` varchar(100) NOT NULL,
  `umur` varchar(20) NOT NULL,
  `awal_kerja` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `delete_at` int(11) NOT NULL COMMENT '0 = active, 1 = non-active',
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id_karyawan`, `username`, `password`, `nama_lengkap`, `tempat_tanggal_lahir`, `umur`, `awal_kerja`, `level`, `jabatan`, `alamat`, `delete_at`, `created_time`, `updated_time`) VALUES
(1, 'Admin', 'Admin', 'Super Admin', '', '', '', '999', 'Super Admin', '', 0, '2023-03-28 14:29:54', '2023-03-28 14:29:54'),
(2, 'gibran', 'gibran', '', 'Jakarta, 19 Juli', '22 Tahun', '28 Maret 2021', 'Karyawan', '', 'Jakarta', 0, '2023-03-28 14:36:43', '2023-03-28 14:36:43'),
(3, 'soputra', 'soputra', 'Soputra', 'Depok, 1 Desember', '25 Tahun', '23 Januari', 'Karyawan', 'Karyawan', 'Depok', 0, '2023-03-28 14:36:43', '2023-03-28 14:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(225) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `delete_at` int(11) NOT NULL COMMENT '0 = active, 1 = non-active',
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_obat`
--

INSERT INTO `tbl_obat` (`id_obat`, `nama_obat`, `qty`, `harga`, `delete_at`, `created_time`, `updated_time`) VALUES
(1, 'Admin', 0, '', 1, '2023-03-28 14:31:16', '2023-03-28 14:31:16'),
(2, 'Puyer', 99, 'Rp. 25000', 0, '2023-03-28 14:39:14', '2023-03-28 14:39:14'),
(3, 'Panadol', 10, '1000', 0, '2023-03-28 14:39:14', '2023-03-28 14:39:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL,
  `delete_at` int(11) NOT NULL COMMENT '0 = active, 1 = non-active',
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `username`, `password`, `nama_lengkap`, `level`, `delete_at`, `created_time`, `updated_time`) VALUES
(1, 'Admin', 'Admin', 'Super Admin', '999', 1, '2023-03-28 14:31:45', '2023-03-28 14:31:45'),
(2, 'gibran', 'gibran', 'Gibran', 'Karyawan', 0, '2023-03-28 14:40:09', '2023-03-28 14:40:09'),
(3, 'soputra', 'soputra', 'Soputra', 'Karyawan', 0, '2023-03-28 14:40:09', '2023-03-28 14:40:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit`
--

CREATE TABLE `tbl_unit` (
  `id_unit` int(20) NOT NULL,
  `nama_unit` varchar(225) NOT NULL,
  `delete_at` int(2) NOT NULL COMMENT '0 = active, 1 = non-active',
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_unit`
--

INSERT INTO `tbl_unit` (`id_unit`, `nama_unit`, `delete_at`, `created_time`, `updated_time`) VALUES
(1, 'Medis', 0, '2023-04-05 14:24:02', '2023-04-05 14:24:02'),
(2, 'Rawat Inap', 0, '2023-04-05 14:24:02', '2023-04-05 14:24:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_users` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `umur` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `delete_at` int(5) NOT NULL COMMENT '0 = active, 1 = non active',
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_users`, `nama`, `umur`, `status`, `tgl_lahir`, `alamat`, `delete_at`, `created_time`, `updated_time`) VALUES
(1, 'Admin', '-', '-', '2023-03-01', '-', 1, '2023-03-21 22:05:17', '2023-03-21 22:05:17'),
(2, 'Soputra', '25 Tahun', 'Pengangguran', '2005-03-11', 'Tangsel', 0, '2023-03-21 22:30:11', '2023-03-21 22:30:11'),
(3, 'Gibran', '22 Tahun', 'Mahasiswa Teladan', '2000-07-19', 'Depok', 0, '2023-03-21 22:32:10', '2023-03-21 22:32:10'),
(4, 'Arman', '30 Tahun', 'Mahasiswa', '2023-03-01', 'Tanggerang', 0, '2023-03-24 20:32:29', '2023-03-24 20:32:29'),
(5, 'Lase', '22 Tahun', 'Mahasiswa', '2023-03-02', 'Nias', 0, '2023-03-24 20:32:29', '2023-03-24 20:32:29'),
(6, 'Aman', '20 Tahun', 'Pengangguran', '2023-03-03', 'Bogor', 0, '2023-03-24 20:32:29', '2023-03-24 20:32:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_diagnosa`
--
ALTER TABLE `tbl_diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  ADD PRIMARY KEY (`id_unit`);

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
  MODIFY `id_diagnosa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  MODIFY `id_unit` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
