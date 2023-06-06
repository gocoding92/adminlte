-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 07:24 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penilaian_karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alternatif`
--

CREATE TABLE `tbl_alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `id_rekomendasi_karyawan` text NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `periode_bulan` varchar(20) NOT NULL,
  `periode_tahun` int(11) NOT NULL,
  `delete_at` int(11) NOT NULL COMMENT '0=active, 1=non active',
  `create_time` datetime NOT NULL DEFAULT current_timestamp(),
  `update_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_alternatif`
--

INSERT INTO `tbl_alternatif` (`id_alternatif`, `id_rekomendasi_karyawan`, `id_karyawan`, `periode_bulan`, `periode_tahun`, `delete_at`, `create_time`, `update_time`) VALUES
(1, '72ceecfe7874f14fc586f974e6988b06', 1, '05', 2023, 0, '2023-05-11 20:52:33', '2023-05-11 20:52:33'),
(2, '72ceecfe7874f14fc586f974e6988b06', 9, '05', 2023, 0, '2023-05-11 20:52:33', '2023-05-11 20:52:33'),
(3, '72ceecfe7874f14fc586f974e6988b06', 10, '05', 2023, 0, '2023-05-11 20:52:33', '2023-05-11 20:52:33'),
(4, '72ceecfe7874f14fc586f974e6988b06', 11, '05', 2023, 0, '2023-05-11 20:52:33', '2023-05-11 20:52:33'),
(5, '72ceecfe7874f14fc586f974e6988b06', 12, '05', 2023, 0, '2023-05-11 20:52:33', '2023-05-11 20:52:33'),
(6, '1fd585913fb190e98328fc8d9f271a9d', 10, '05', 2023, 0, '2023-05-11 20:53:26', '2023-05-11 20:53:26'),
(7, '1fd585913fb190e98328fc8d9f271a9d', 11, '05', 2023, 0, '2023-05-11 20:53:26', '2023-05-11 20:53:26'),
(8, '1fd585913fb190e98328fc8d9f271a9d', 13, '05', 2023, 0, '2023-05-11 20:53:26', '2023-05-11 20:53:26'),
(9, 'dec6d385a1cfeb3c3f1cd09c0973cd27', 9, '05', 2023, 0, '2023-05-18 11:33:59', '2023-05-18 11:33:59'),
(10, 'dec6d385a1cfeb3c3f1cd09c0973cd27', 10, '05', 2023, 0, '2023-05-18 11:33:59', '2023-05-18 11:33:59'),
(11, '35bd1b88bf1d1113bdcca94c78db2d93', 1, '05', 2023, 0, '2023-05-22 18:25:49', '2023-05-22 18:25:49'),
(12, '35bd1b88bf1d1113bdcca94c78db2d93', 12, '05', 2023, 0, '2023-05-22 18:25:49', '2023-05-22 18:25:49'),
(13, '295294306bf6f912d1f8863a8365a215', 1, '05', 2023, 0, '2023-05-22 18:42:43', '2023-05-22 18:42:43'),
(14, '295294306bf6f912d1f8863a8365a215', 9, '05', 2023, 0, '2023-05-22 18:42:43', '2023-05-22 18:42:43'),
(15, '295294306bf6f912d1f8863a8365a215', 10, '05', 2023, 0, '2023-05-22 18:42:43', '2023-05-22 18:42:43'),
(16, '295294306bf6f912d1f8863a8365a215', 11, '05', 2023, 0, '2023-05-22 18:42:43', '2023-05-22 18:42:43'),
(17, '295294306bf6f912d1f8863a8365a215', 12, '05', 2023, 0, '2023-05-22 18:42:43', '2023-05-22 18:42:43'),
(18, '571f4f7d37c2865a7a022ee4719b205f', 1, '05', 2023, 0, '2023-05-25 17:49:41', '2023-05-25 17:49:41'),
(19, '571f4f7d37c2865a7a022ee4719b205f', 9, '05', 2023, 0, '2023-05-25 17:49:41', '2023-05-25 17:49:41'),
(20, '571f4f7d37c2865a7a022ee4719b205f', 11, '05', 2023, 0, '2023-05-25 17:49:41', '2023-05-25 17:49:41'),
(21, '571f4f7d37c2865a7a022ee4719b205f', 12, '05', 2023, 0, '2023-05-25 17:49:41', '2023-05-25 17:49:41'),
(22, '571f4f7d37c2865a7a022ee4719b205f', 17, '05', 2023, 0, '2023-05-25 17:49:41', '2023-05-25 17:49:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bobot`
--

CREATE TABLE `tbl_bobot` (
  `id_bobot` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama_bobot` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `nilai` int(5) NOT NULL,
  `delete_at` int(11) NOT NULL COMMENT '0=Active, 1=Non Active',
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bobot`
--

INSERT INTO `tbl_bobot` (`id_bobot`, `id_kriteria`, `nama_bobot`, `keterangan`, `nilai`, `delete_at`, `created_time`, `update_time`) VALUES
(1, 0, 'Kehadiran2', '', 0, 1, '2023-03-30 12:47:48', '2023-03-30 05:47:48'),
(2, 0, 'Kedisplinan', '', 0, 0, '2023-03-30 12:49:47', '2023-03-30 05:49:47'),
(3, 0, 'Tanggung Jawab', '', 0, 0, '2023-03-30 12:49:47', '2023-03-30 05:49:47'),
(4, 0, 'Kesopanan', '', 4, 0, '2023-04-06 15:40:58', '2023-04-06 08:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_tanggal_lahir` varchar(100) NOT NULL,
  `umur` varchar(20) NOT NULL,
  `awal_kerja` varchar(100) NOT NULL,
  `alamat_asal` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `nomor_hp` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `delete_at` int(11) NOT NULL COMMENT '0=active, 1=non active',
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `update_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id_karyawan`, `nama_lengkap`, `tempat_tanggal_lahir`, `umur`, `awal_kerja`, `alamat_asal`, `status`, `nomor_hp`, `jenis_kelamin`, `alamat`, `delete_at`, `created_time`, `update_time`) VALUES
(1, 'Yamamoni Lase', '01 januari 2000', '23 tahun', '2018-06-03', 'NIAS', 'Palajar', '082311141068', 'Laki-Laki', 'Pengasinan', 0, '2023-03-28 14:37:22', '2023-03-28 14:37:22'),
(2, 'Arles Jaya Zai', '12 desember 1999', '24 Tahun', '2018', '', '', '', '', 'NIAS', 1, '2023-03-29 21:26:35', '2023-03-29 21:26:35'),
(3, 'Lutherman Hulu', '05 maret 2021', '22 tahun', 'januari 2019', '', '', '', '', 'NIAS', 1, '2023-03-29 21:32:27', '2023-03-29 21:32:27'),
(4, '', '2023-04-05', '', 'juni 2018', '', '', '', '', '', 1, '2023-04-09 14:33:09', '2023-04-09 14:33:09'),
(5, 'Ruth Innel Gea', '2000-05-05', '23 Tahun', '2018-06-10', 'NIAS', 'Pelajar', '085288939270', '', 'Sasmita, Pamulang', 1, '2023-05-09 20:35:50', '2023-05-09 20:35:50'),
(6, 'Ruth Innel Gea', '2023-05-22', '25 Tahun', '2023-05-19', 'asw', 'dwwdwd', '085288939270', 'Laki-Laki', 'dsdsds', 1, '2023-05-09 20:38:11', '2023-05-09 20:38:11'),
(7, 'Ruth Innel Gea', '2000-01-01', '23 Tahun', '2018-06-10', 'NIAS', 'Pelajar', '085288939270', 'Perempuan', 'Sasmita, Pamulang', 1, '2023-05-09 21:07:29', '2023-05-09 21:07:29'),
(8, 'Yamamoni Lase', '2000-01-01', '23 Tahun', '2018-06-03', 'NIAS', 'Lajang', '082311141068', 'Laki-Laki', 'Pengasinan', 1, '2023-05-11 11:16:54', '2023-05-11 11:16:54'),
(9, 'Ruth Innel Gea', '2000-05-07', '23 Tahun', '2018-12-21', 'NIAS', 'Lajang', '085288939270', 'Perempuan', 'Pengasinan', 0, '2023-05-11 11:17:49', '2023-05-11 11:17:49'),
(10, 'Arles Jaya Zai', '1999-12-12', '23 Tahun', '0019-12-28', 'NIAS', 'Lajang', '082232658941', 'Laki-Laki', 'Cinangka', 0, '2023-05-11 11:23:01', '2023-05-11 11:23:01'),
(11, 'Fefan Hulu', '2002-10-15', '20 Tahun', '2022-02-15', 'Nias', 'Lanjang', '082154679520', 'Laki-Laki', 'Cinangka', 0, '2023-05-11 11:24:09', '2023-05-11 11:24:09'),
(12, 'Andi Hulu', '2002-02-20', '21 Tahun', '2022-02-15', 'NIAS', 'Lajang', '088854612354', 'Laki-Laki', 'Cinangka', 0, '2023-05-11 11:25:20', '2023-05-11 11:25:20'),
(13, 'Lutherman Hulu', '2001-03-21', '22 Tahun', '2019-01-02', 'NIAS', 'Lajang', '085236458791', 'Laki-Laki', 'Sasmita, Pamulang', 0, '2023-05-11 11:26:29', '2023-05-11 11:26:29'),
(14, 'Julfan Hulu', '2004-06-13', '18 Tahun', '2022-02-15', 'NIAS', 'Lajang', '085642137594', 'Laki-Laki', 'Sasmita Pamulang', 0, '2023-05-11 11:28:53', '2023-05-11 11:28:53'),
(15, 'Friska Hulu', '2003-04-25', '20 Tahun', '2020-03-21', 'NIAS', 'Lajang', '085256435487', 'Perempuan', 'Sasmita, Pamulang', 0, '2023-05-11 11:30:35', '2023-05-11 11:30:35'),
(16, 'Ani Hulu', '2004-10-15', '18 Ta', '', '', '', '', '0', '', 1, '2023-05-11 11:31:06', '2023-05-11 11:31:06'),
(17, 'Ani Hulu', '2004-10-15', '18 Tahun', '2021-02-12', 'NIAS', 'Lajang', '081215468523', 'Perempuan', 'Sasmita, Pamulang', 0, '2023-05-11 11:32:05', '2023-05-11 11:32:05'),
(18, 'Rahmat Laia', '1997-04-02', '26 Tahun', '2019-02-07', 'NIAS', 'Lajang', '085345678521', 'Laki-Laki', 'Jl. Merpati Raya', 0, '2023-05-11 11:33:17', '2023-05-11 11:33:17'),
(19, 'Fadri Hulu', '2002-08-12', '21 Tahun', '2022-06-05', 'NIAS', 'Lajang', '082123564879', 'Laki-Laki', 'Jl. Merpati Raya', 0, '2023-05-11 11:34:13', '2023-05-11 11:34:13'),
(20, 'Todi Hulu', '2001-12-03', '22 Tahun', '2022-06-05', 'NIAS', 'Lajang', '082352645871', 'Perempuan', 'Jl. Merpati Raya', 0, '2023-05-11 11:35:26', '2023-05-11 11:35:26'),
(21, 'Mesrawati Hulu', '2004-04-05', '19 Tahun', '2023-01-28', 'NIAS', 'Lajang', '085263548975', 'Perempuan', 'Pondok Aren', 0, '2023-05-11 11:37:08', '2023-05-11 11:37:08'),
(22, 'Iman Laia', '2003-05-06', '20 Tahun ', '2023-01-07', 'NIAS', 'Lajang', '082356459873', 'Laki-Laki', 'Pondok Aren', 0, '2023-05-11 11:38:06', '2023-05-11 11:38:06'),
(23, 'Teti Lafau', '2000-07-05', '22 Tahun', '2020-11-12', 'NIAS', 'Lajang', '082345126540', 'Perempuan', 'Mujair', 0, '2023-05-11 11:39:32', '2023-05-11 11:39:32'),
(24, 'Hengki Laia', '2001-05-13', '22 Tahun', '2020-02-12', 'NIAS', 'Lajang', '082315452689', 'Laki-Laki', 'Mujair', 0, '2023-05-11 11:40:42', '2023-05-11 11:40:42'),
(25, 'Julianus Lafau', '1999-12-02', '23 Tahun', '2018-12-12', 'NIAS', 'Lajang', '082312654861', 'Laki-Laki', 'Legoso', 0, '2023-05-11 11:41:46', '2023-05-11 11:41:46'),
(26, 'Liusman Lafau', '2001-11-12', '21 Tahun', '2019-12-12', 'NIAS', 'Lajang', '085326545897', 'Laki-Laki', 'Legoso', 0, '2023-05-11 11:42:45', '2023-05-11 11:42:45'),
(27, 'Sozanolo Lafau', '2001-03-15', '22 Tahun', '2019-12-12', 'NIAS', 'Lajang', '082356458978', 'Laki-Laki', 'Serua', 0, '2023-05-11 11:43:38', '2023-05-11 11:43:38'),
(28, 'Ester Laia', '2001-01-06', '22 Tahun', '2019-02-03', 'NIAS', 'Lajang', '082354678951', 'Perempuan', 'Serua', 0, '2023-05-11 11:45:06', '2023-05-11 11:45:06'),
(29, 'Anna Mey Latif Gea', '2003-05-27', '19 Tahun', '2021-06-12', 'NIAS', 'Lajang', '081396119687', 'Perempuan', 'Siliwangi', 0, '2023-05-11 12:43:40', '2023-05-11 12:43:40'),
(30, 'Yernia Wati Nazara', '2004-01-07', '19 Tahun', '2022-06-23', 'Medan', 'Lajang', '085836182285', 'Perempuan', 'Siliwangi', 0, '2023-05-11 12:44:51', '2023-05-11 12:44:51'),
(31, 'Aris Yusdi', '2000-06-07', '22 Tahun', '2018-10-01', 'Aceh Barat', 'Lajang', '081267889521', 'Laki-Laki', 'Siliwangi', 0, '2023-05-11 12:46:48', '2023-05-11 12:46:48'),
(32, 'Mohammad Syafik', '1999-03-28', '24 Tahun', '2018-12-02', 'Aceh Singkil', 'Lajang', '081118239431', 'Laki-Laki', 'Siliwangi', 0, '2023-05-11 12:48:17', '2023-05-11 12:48:17'),
(33, 'Nur Aini', '1999-02-15', '24 Tahun', '2018-12-03', 'Aceh Singkil', 'Lajang', '081293753692', 'Perempuan', 'Siliwangi', 0, '2023-05-11 12:49:30', '2023-05-11 12:49:30'),
(34, 'Elsa Arjayanda', '2000-03-25', '23 Tahun', '2019-07-27', 'Aceh Selatan', 'Lajang', '081316562045', 'Perempuan', 'Witan Harja', 0, '2023-05-11 12:51:24', '2023-05-11 12:51:24'),
(35, 'Irwansyah', '2000-08-15', '22 Tahun', '2018-02-09', 'Aceh Barat', 'Lajang', '081282758167', 'Laki-Laki', 'Witana Harja', 0, '2023-05-11 12:53:11', '2023-05-11 12:53:11'),
(36, 'Enjelina Situmeang', '2001-03-05', '21 Tahun', '2021-01-15', 'Jambi', 'Lajang', '08788870722', 'Perempuan', 'Witana Harja', 0, '2023-05-11 12:54:14', '2023-05-11 12:54:14'),
(37, 'Enjela Marici Bluta Koban', '2001-01-26', '22 Tahun', '2018-12-07', 'Lembata', 'Lajang', '085718087859', 'Perempuan', 'Witana Harja', 0, '2023-05-11 12:55:38', '2023-05-11 12:55:38'),
(38, 'Agus Ayomi', '2002-08-14', '20 Tahun', '2022-08-22', 'Papua Barat', 'Lajang', '081345768908', 'Laki-Laki', 'Witana Harja', 0, '2023-05-11 12:58:23', '2023-05-11 12:58:23'),
(39, 'Muhammad Hafiz', '2002-07-30', '20 Tahun', '2022-03-01', 'Padang', 'Lajang', '081802071973', 'Laki-Laki', 'Muncul', 0, '2023-05-11 12:59:36', '2023-05-11 12:59:36'),
(40, 'Dio Pratama', '1999-09-07', '23 Tahun', '2017-06-11', 'Padang', 'Lajang', '081514131211', 'Laki-Laki', 'Muncul', 0, '2023-05-11 13:00:34', '2023-05-11 13:00:34'),
(41, 'Marlina Halawa', '1995-03-26', '28 Tahun', '2017-12-11', 'NIAS', 'Lajang', '081370307516', 'Perempuan', 'Muncul', 0, '2023-05-11 13:16:46', '2023-05-11 13:16:46'),
(42, 'Purnawan Kristanto', '1998-03-10', '25 Tahun', '2018-09-06', 'Cirebon', 'Lajang', '085276574550', 'Laki-Laki', 'BPI Pamulang', 0, '2023-05-11 13:20:25', '2023-05-11 13:20:25'),
(43, 'Evi Fatmawati', '2001-12-09', '21 Tahun', '2020-02-27', 'Maluku', 'Lajang', '082248330397', 'Perempuan', 'BPI Pamulang', 0, '2023-05-11 13:21:30', '2023-05-11 13:21:30'),
(44, 'Feberianus Hulu', '1995-02-22', '28', '2018-04-04', 'NIAS', 'Lajang', '085275446314', 'Laki-Laki', 'BPI Pamulang', 0, '2023-05-11 13:22:25', '2023-05-11 13:22:25'),
(45, 'Lukman Wakum', '2002-12-29', '21 Tahun', '2021-10-23', 'Biak', 'Lajang', '089560363050', 'Laki-Laki', 'BPI Pamulang', 0, '2023-05-11 13:23:26', '2023-05-11 13:23:26'),
(46, 'Hadi Husadi', '2002-12-09', '20 Tahun', '2022-10-10', 'Banjarmasin', 'Lajang', '085276514283', 'Laki-Laki', 'BPI Pamulang', 0, '2023-05-11 13:26:04', '2023-05-11 13:26:04'),
(47, 'Dina Maria', '2002-05-25', '21 Tahun', '2018-12-17', 'Biak', 'Lajang', '085361726775', 'Perempuan', 'Jombang', 0, '2023-05-11 13:27:00', '2023-05-11 13:27:00'),
(48, 'Yunita Qmur', '1998-08-17', '25 Tahun', '2019-08-25', 'Biak', 'Lajang', '082294545989', 'Perempuan', 'Jombang', 0, '2023-05-11 13:27:50', '2023-05-11 13:27:50'),
(49, 'Faris Kurniawan', '1998-04-15', '26 Tahun', '2018-06-12', 'NIAS', 'Lajang', '085944294527', 'Laki-Laki', 'Jombang', 0, '2023-05-11 13:28:55', '2023-05-11 13:28:55'),
(50, 'Raka Bumi', '1998-02-28', '25 Tahun', '2019-04-14', 'Jakarta', 'Lajang', '082229199928', 'Laki-Laki', 'Ciputat', 0, '2023-05-11 16:07:06', '2023-05-11 16:07:06'),
(51, 'Wilson Giovan Batee', '1997-12-22', '25 Tahun', '2017-09-09', 'NIAS', 'Lajang', '082283045621', 'Laki-Laki', 'Ciputat', 0, '2023-05-11 16:11:07', '2023-05-11 16:11:07'),
(52, 'Fajar Oja Pratama', '1992-07-05', '24 Tahun', '2018-07-18', 'Aceh Barat', 'Lajang', '087787658463', 'Laki-Laki', 'Ciputat', 0, '2023-05-11 16:21:05', '2023-05-11 16:21:05'),
(53, 'Rabiatul Adhewiyyah Berutu', '2000-07-26', '22 Tahun', '2022-02-02', 'Aceh Singkil', 'Lajang', '082265784562', 'Perempuan', 'Ciputat', 0, '2023-05-11 16:22:05', '2023-05-11 16:22:05'),
(54, 'Anggun Muliana', '1999-09-13', '24 Tahun', '2018-12-24', 'Aceh Barat', 'Lajang', '082229113482', 'Perempuan', 'Ciputat', 0, '2023-05-11 16:23:22', '2023-05-11 16:23:22'),
(55, 'Cut Mutia', '1997-09-23', '25 Tahun', '2019-11-03', 'Aceh Besar', 'Lajang', '082360208005', 'Perempuan', 'Oskar Pamulang', 0, '2023-05-11 16:24:18', '2023-05-11 16:24:18'),
(56, 'Desi Mariana Zebua', '2000-10-12', '22 Tahun', '2018-12-26', 'NIAS', 'Lajang', '082152036754', 'Perempuan', 'Oskar Pamulang', 0, '2023-05-11 16:25:18', '2023-05-11 16:25:18'),
(57, 'Putri Oktaviani', '1999-01-10', '24 Tahun', '2020-08-13', 'Aceh Besar', 'Lajang', '085349909676', 'Perempuan', 'Oskar Pamulang', 0, '2023-05-11 16:26:22', '2023-05-11 16:26:22'),
(58, 'Gibran Putra Jaya', '1999-10-04', '23 Tahun', '2018-12-28', 'Kalimantan', 'Lajang', '081269011715', 'Laki-Laki', 'Serua', 0, '2023-05-11 16:27:36', '2023-05-11 16:27:36'),
(59, 'Krisman Hulu', '2003-08-05', '19 Tahun', '2022-05-21', 'NIAS', 'Lajang', '081396759992', 'Laki-Laki', 'Serua', 0, '2023-05-11 16:28:26', '2023-05-11 16:28:26'),
(60, 'Alwin Putra Novtika Lahagu', '2003-12-12', '19 Tahun', '2022-04-19', 'NIAS', 'Lajang', '081264280054', 'Laki-Laki', 'Serua', 0, '2023-05-11 16:29:21', '2023-05-11 16:29:21'),
(61, 'Nadya Valeria', '1995-12-15', '27 Tahun', '2018-12-31', 'Surabaya', 'Lajang', '081260071196', 'Perempuan', 'Kedaung', 0, '2023-05-11 16:30:56', '2023-05-11 16:30:56'),
(62, 'Iklima Fatima Zara', '2000-10-02', '22 Tahun', '2018-03-19', 'Aceh Barat', 'Lajang', '081252860743', 'Perempuan', 'Kedaung', 0, '2023-05-11 16:32:06', '2023-05-11 16:32:06'),
(63, 'Miftahul Jannah', '1999-03-20', '24 Tahun', '2019-01-02', 'Aceh Selatan', 'Lajang', '085260856296', 'Perempuan', 'Kedaung', 0, '2023-05-11 16:33:09', '2023-05-11 16:33:09'),
(64, 'Annisa Aziza Bastiar', '2000-01-27', '23 Tahun', '2020-02-09', 'Aceh Barat', 'Lajang', '082283236533', 'Perempuan', 'Limo', 0, '2023-05-11 16:34:05', '2023-05-11 16:34:05'),
(65, 'Glen El Jonatan ', '2003-02-11', '20 Tahun', '2019-01-04', 'NIAS', 'Lajang', '087798753159', 'Laki-Laki', 'Limo', 0, '2023-05-11 16:35:04', '2023-05-11 16:35:04'),
(66, 'Erra Meilani Sinaga', '1998-05-06', '25 Tahun', '2019-08-16', 'Balige', 'Lajang', '081264563436', 'Perempuan', 'Limo', 0, '2023-05-11 16:37:04', '2023-05-11 16:37:04'),
(67, 'Ikram Arifin', '1998-07-30', '24 Tahun', '1998-01-06', 'Aceh Barat', 'Lajang', '081269992327', 'Laki-Laki', 'SK', 0, '2023-05-11 16:38:04', '2023-05-11 16:38:04'),
(68, 'Delfan Zebua', '1998-02-18', '25 Tahun', '2017-04-07', 'NIAS', 'Lajang', '082216194509', 'Laki-Laki', 'SK', 0, '2023-05-11 16:38:57', '2023-05-11 16:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` varchar(100) NOT NULL,
  `atribut` varchar(100) NOT NULL,
  `delete_at` int(11) NOT NULL COMMENT '0=Active, 1=Non Active',
  `created_time` datetime NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_alternatif`
--

CREATE TABLE `tbl_nilai_alternatif` (
  `id_nilai_alternatif` int(11) NOT NULL,
  `id_rekomendasi_karyawan` text NOT NULL,
  `a1-c1` int(5) NOT NULL,
  `a1-c2` int(5) NOT NULL,
  `a1-c3` int(5) NOT NULL,
  `a1-c4` int(5) NOT NULL,
  `a1-c5` int(5) NOT NULL,
  `a1-c6` int(5) NOT NULL,
  `a2-c1` int(5) NOT NULL,
  `a2-c2` int(5) NOT NULL,
  `a2-c3` int(5) NOT NULL,
  `a2-c4` int(5) NOT NULL,
  `a2-c5` int(5) NOT NULL,
  `a2-c6` int(5) NOT NULL,
  `a3-c1` int(5) NOT NULL,
  `a3-c2` int(5) NOT NULL,
  `a3-c3` int(5) NOT NULL,
  `a3-c4` int(5) NOT NULL,
  `a3-c5` int(5) NOT NULL,
  `a3-c6` int(5) NOT NULL,
  `a4-c1` int(5) NOT NULL,
  `a4-c2` int(5) NOT NULL,
  `a4-c3` int(5) NOT NULL,
  `a4-c4` int(5) NOT NULL,
  `a4-c5` int(5) NOT NULL,
  `a4-c6` int(5) NOT NULL,
  `a5-c1` int(5) NOT NULL,
  `a5-c2` int(5) NOT NULL,
  `a5-c3` int(5) NOT NULL,
  `a5-c4` int(5) NOT NULL,
  `a5-c5` int(5) NOT NULL,
  `a5-c6` int(5) NOT NULL,
  `create_time` datetime NOT NULL DEFAULT current_timestamp(),
  `update_timr` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_bobot`
--

CREATE TABLE `tbl_nilai_bobot` (
  `id_nilai_bobot` int(11) NOT NULL,
  `id_rekomendasi_karyawan` text NOT NULL,
  `bobot1` int(5) NOT NULL,
  `bobot2` int(5) NOT NULL,
  `bobot3` int(5) NOT NULL,
  `bobot4` int(5) NOT NULL,
  `bobot5` int(5) NOT NULL,
  `bobot6` int(5) NOT NULL,
  `create_time` datetime NOT NULL DEFAULT current_timestamp(),
  `update_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_normalisasi`
--

CREATE TABLE `tbl_nilai_normalisasi` (
  `id_nilai_normalisasi` int(11) NOT NULL,
  `id_rekomendasi_karyawan` text NOT NULL,
  `a1-c1` int(5) NOT NULL,
  `a1-c2` int(5) NOT NULL,
  `a1-c3` int(5) NOT NULL,
  `a1-c4` int(5) NOT NULL,
  `a1-c5` int(5) NOT NULL,
  `a1-c6` int(5) NOT NULL,
  `a2-c1` int(5) NOT NULL,
  `a2-c2` int(5) NOT NULL,
  `a2-c3` int(5) NOT NULL,
  `a2-c4` int(5) NOT NULL,
  `a2-c5` int(5) NOT NULL,
  `a2-c6` int(5) NOT NULL,
  `a3-c1` int(5) NOT NULL,
  `a3-c2` int(5) NOT NULL,
  `a3-c3` int(5) NOT NULL,
  `a3-c4` int(5) NOT NULL,
  `a3-c5` int(5) NOT NULL,
  `a3-c6` int(5) NOT NULL,
  `a4-c1` int(5) NOT NULL,
  `a4-c2` int(5) NOT NULL,
  `a4-c3` int(5) NOT NULL,
  `a4-c4` int(5) NOT NULL,
  `a4-c5` int(5) NOT NULL,
  `a4-c6` int(5) NOT NULL,
  `a5-c1` int(5) NOT NULL,
  `a5-c2` int(5) NOT NULL,
  `a5-c3` int(5) NOT NULL,
  `a5-c4` int(5) NOT NULL,
  `a5-c5` int(5) NOT NULL,
  `a5-c6` int(5) NOT NULL,
  `create_time` datetime NOT NULL DEFAULT current_timestamp(),
  `update_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_perangkingan`
--

CREATE TABLE `tbl_nilai_perangkingan` (
  `id_nilai_perangkingan` int(11) NOT NULL,
  `id_rekomendasi_karyawan` text NOT NULL,
  `a1` int(5) NOT NULL,
  `a2` int(5) NOT NULL,
  `a3` int(5) NOT NULL,
  `a4` int(5) NOT NULL,
  `a5` int(5) NOT NULL,
  `create_time` datetime NOT NULL DEFAULT current_timestamp(),
  `update_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekomendasi_karyawan`
--

CREATE TABLE `tbl_rekomendasi_karyawan` (
  `id_rekomendasi_karyawan` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `periode_bulan` varchar(50) NOT NULL,
  `periode_tahun` int(11) NOT NULL,
  `delete_at` int(11) NOT NULL COMMENT '0=active, 1=non active',
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `update_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rekomendasi_karyawan`
--

INSERT INTO `tbl_rekomendasi_karyawan` (`id_rekomendasi_karyawan`, `id_karyawan`, `periode_bulan`, `periode_tahun`, `delete_at`, `created_time`, `update_time`) VALUES
(1, 1, '08', 2018, 0, '2023-04-05 12:44:45', '2023-04-05 12:44:45'),
(2, 2, '08', 2019, 0, '2023-04-05 12:44:45', '2023-04-05 12:44:45'),
(3, 3, '08', 2020, 0, '2023-04-05 12:44:45', '2023-04-05 12:44:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_kriteria`
--

CREATE TABLE `tbl_sub_kriteria` (
  `id_bobot` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama_bobot` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `nilai_bobot` int(11) NOT NULL,
  `delete_at` int(11) NOT NULL COMMENT '0=active, 1=non active',
  `created_time` datetime NOT NULL,
  `update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_toko`
--

CREATE TABLE `tbl_toko` (
  `id_toko` int(11) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `delete_at` int(11) NOT NULL COMMENT '0=Active, 1=Non Active',
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `update_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_toko`
--

INSERT INTO `tbl_toko` (`id_toko`, `nama_toko`, `deskripsi`, `alamat`, `delete_at`, `created_time`, `update_time`) VALUES
(1, 'Toko Pengasinan', 'Konter & Pegadaian', 'Pengasinan', 1, '2023-03-28 14:34:38', '2023-03-28 14:34:38'),
(2, 'Toko Cinangka', 'Konter & Pegadaian', 'Cinangka Sawangan', 1, '2023-03-28 14:34:38', '2023-03-28 14:34:38'),
(3, 'Toko Sasmita', 'Konter & Fotocopy', 'Pamulang', 1, '2023-03-28 14:35:20', '2023-03-28 14:35:20'),
(4, '', '', 'HNJNJNHNJNJN', 1, '2023-04-06 14:48:12', '2023-04-06 14:48:12'),
(5, 'Toko Merpati', 'Konter & Pegadaian', 'Merpati', 1, '2023-04-06 15:02:01', '2023-04-06 15:02:01'),
(6, 'Zay Cell', 'Konter, Pegadaian & BRILink', 'Pengasinan', 0, '2023-05-11 19:11:28', '2023-05-11 19:11:28'),
(7, 'Zay Cell', 'Konter, Fotocopy & BRILink	', 'Sasmita, Pamulang', 0, '2023-05-11 19:11:58', '2023-05-11 19:11:58'),
(8, 'Zay Cell', 'Konter, Pegadaian & BRILink', 'Cinangka', 0, '2023-05-11 19:12:36', '2023-05-11 19:12:36'),
(9, 'Zay Cell', 'Konter, Pegadaian & BRILink', 'Jl. Merpati Raya', 0, '2023-05-11 19:13:07', '2023-05-11 19:13:07'),
(10, 'NIA Cell', 'Konter, Pegadaian & BRILink', 'Pondok Aren', 0, '2023-05-11 19:13:43', '2023-05-11 19:13:43'),
(11, 'Zay Cell', 'Konter, Pegadaian & BRILink', 'Mujair', 0, '2023-05-11 19:14:11', '2023-05-11 19:14:11'),
(12, 'Zay Cell', 'Konter, Pegadaian & BRILink', 'Legoso', 0, '2023-05-11 19:14:34', '2023-05-11 19:14:34'),
(13, 'Zay Cell', 'Konter, Pegadaian & BRILink', 'Serua', 0, '2023-05-11 19:14:46', '2023-05-11 19:14:46'),
(14, 'Zay Cell', 'Konter, Pegadaian & BRILink', 'Siliwangi', 0, '2023-05-11 19:15:00', '2023-05-11 19:15:00'),
(15, 'Zay Cell', 'Konter, Pegadaian & BRILink', 'Witana Harja', 0, '2023-05-11 19:15:25', '2023-05-11 19:15:25'),
(16, 'Zay Cell', 'Konter, Pegadaian & BRILink', 'Muncul', 0, '2023-05-11 19:15:49', '2023-05-11 19:15:49'),
(17, 'Zay Cell', 'Konter, Pegadaian & BRILink', 'BPI Pamulang', 0, '2023-05-11 19:15:59', '2023-05-11 19:15:59'),
(18, 'Zay Cell', 'Konter, Pegadaian & BRILink', 'Jombang', 0, '2023-05-11 19:16:09', '2023-05-11 19:16:09'),
(19, 'Zay Cell', 'Konter, Pegadaian & BRILink', 'Ciputat', 0, '2023-05-11 19:16:18', '2023-05-11 19:16:18'),
(20, 'Zay Cell', 'Konter, Pegadaian & BRILink', 'Oskar, Pamulang', 0, '2023-05-11 19:16:29', '2023-05-11 19:16:29'),
(21, 'Zay Cell', 'Konter, Pegadaian & BRILink', 'Kedaung', 0, '2023-05-11 19:16:47', '2023-05-11 19:16:47'),
(22, 'Zay Cell', 'Konter, Pegadaian & BRILink', 'Limo', 0, '2023-05-11 19:16:57', '2023-05-11 19:16:57'),
(23, 'Zay Cell', 'Konter, Pegadaian & BRILink', 'SK', 0, '2023-05-11 19:17:15', '2023-05-11 19:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `umur` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `delete_at` int(5) NOT NULL COMMENT '0=active,1=non active',
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `update_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_users`, `username`, `password`, `nama`, `umur`, `status`, `tgl_lahir`, `alamat`, `delete_at`, `created_time`, `update_time`) VALUES
(1, 'boylase3@gmail.com', '123', 'boy lase', '23 tahun', 'Pelajar', '2000-01-01', 'NIAS', 0, '2023-03-21 22:08:39', '2023-03-21 22:08:39'),
(2, '', '', 'Susanti', '20 Tahun', 'Pelajar', '2003-02-03', 'NIAS Sumatera Utara', 0, '2023-03-21 22:40:55', '2023-03-21 22:40:55'),
(3, '', '', 'Araman Suryadinata', '16 Tahun', 'Pelajar', '2017-12-10', 'Jl. Pengasinan', 0, '2023-03-21 22:40:55', '2023-03-21 22:40:55'),
(4, '', '', 'Innel Gea', '23 Tahun', 'Pelajar', '2000-05-05', 'NIAS, Sumatera Utara', 0, '2023-03-21 22:42:38', '2023-03-21 22:42:38'),
(5, '', '', 'boy1', '23', 'Pelajar', '2023-04-11', 'Depok, Jakarta', 0, '2023-04-06 13:40:53', '2023-04-06 13:40:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alternatif`
--
ALTER TABLE `tbl_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tbl_nilai_alternatif`
--
ALTER TABLE `tbl_nilai_alternatif`
  ADD PRIMARY KEY (`id_nilai_alternatif`);

--
-- Indexes for table `tbl_nilai_bobot`
--
ALTER TABLE `tbl_nilai_bobot`
  ADD PRIMARY KEY (`id_nilai_bobot`);

--
-- Indexes for table `tbl_nilai_normalisasi`
--
ALTER TABLE `tbl_nilai_normalisasi`
  ADD PRIMARY KEY (`id_nilai_normalisasi`);

--
-- Indexes for table `tbl_nilai_perangkingan`
--
ALTER TABLE `tbl_nilai_perangkingan`
  ADD PRIMARY KEY (`id_nilai_perangkingan`);

--
-- Indexes for table `tbl_rekomendasi_karyawan`
--
ALTER TABLE `tbl_rekomendasi_karyawan`
  ADD PRIMARY KEY (`id_rekomendasi_karyawan`);

--
-- Indexes for table `tbl_sub_kriteria`
--
ALTER TABLE `tbl_sub_kriteria`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indexes for table `tbl_toko`
--
ALTER TABLE `tbl_toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_alternatif`
--
ALTER TABLE `tbl_alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
  MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_nilai_alternatif`
--
ALTER TABLE `tbl_nilai_alternatif`
  MODIFY `id_nilai_alternatif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_nilai_bobot`
--
ALTER TABLE `tbl_nilai_bobot`
  MODIFY `id_nilai_bobot` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_nilai_normalisasi`
--
ALTER TABLE `tbl_nilai_normalisasi`
  MODIFY `id_nilai_normalisasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_nilai_perangkingan`
--
ALTER TABLE `tbl_nilai_perangkingan`
  MODIFY `id_nilai_perangkingan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_rekomendasi_karyawan`
--
ALTER TABLE `tbl_rekomendasi_karyawan`
  MODIFY `id_rekomendasi_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_sub_kriteria`
--
ALTER TABLE `tbl_sub_kriteria`
  MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_toko`
--
ALTER TABLE `tbl_toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
