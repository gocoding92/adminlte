-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2023 pada 13.10
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

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
-- Struktur dari tabel `tbl_alternatif`
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
-- Dumping data untuk tabel `tbl_alternatif`
--

INSERT INTO `tbl_alternatif` (`id_alternatif`, `id_rekomendasi_karyawan`, `id_karyawan`, `periode_bulan`, `periode_tahun`, `delete_at`, `create_time`, `update_time`) VALUES
(1, '83e94148c988495ca15ff7fa42eab309', 1, '10', 2023, 0, '2023-10-23 21:09:52', '2023-10-23 21:09:52'),
(2, '83e94148c988495ca15ff7fa42eab309', 9, '10', 2023, 0, '2023-10-23 21:09:52', '2023-10-23 21:09:52'),
(3, '83e94148c988495ca15ff7fa42eab309', 10, '10', 2023, 0, '2023-10-23 21:09:52', '2023-10-23 21:09:52'),
(4, '83e94148c988495ca15ff7fa42eab309', 11, '10', 2023, 0, '2023-10-23 21:09:52', '2023-10-23 21:09:52'),
(5, '83e94148c988495ca15ff7fa42eab309', 12, '10', 2023, 0, '2023-10-23 21:09:52', '2023-10-23 21:09:52'),
(6, 'c9c9721dbdf2dbf7f14339259606a982', 1, '10', 2023, 0, '2023-10-23 21:11:39', '2023-10-23 21:11:39'),
(7, 'c9c9721dbdf2dbf7f14339259606a982', 9, '10', 2023, 0, '2023-10-23 21:11:39', '2023-10-23 21:11:39'),
(8, 'c9c9721dbdf2dbf7f14339259606a982', 10, '10', 2023, 0, '2023-10-23 21:11:39', '2023-10-23 21:11:39'),
(9, 'c9c9721dbdf2dbf7f14339259606a982', 11, '10', 2023, 0, '2023-10-23 21:11:39', '2023-10-23 21:11:39'),
(10, 'c9c9721dbdf2dbf7f14339259606a982', 12, '10', 2023, 0, '2023-10-23 21:11:39', '2023-10-23 21:11:39'),
(11, 'f9545f5a91c33c787ee764e4cae139f5', 1, '10', 2023, 0, '2023-10-23 21:19:40', '2023-10-23 21:19:40'),
(12, 'f9545f5a91c33c787ee764e4cae139f5', 9, '10', 2023, 0, '2023-10-23 21:19:40', '2023-10-23 21:19:40'),
(13, 'f9545f5a91c33c787ee764e4cae139f5', 10, '10', 2023, 0, '2023-10-23 21:19:40', '2023-10-23 21:19:40'),
(14, 'f9545f5a91c33c787ee764e4cae139f5', 11, '10', 2023, 0, '2023-10-23 21:19:40', '2023-10-23 21:19:40'),
(15, 'f9545f5a91c33c787ee764e4cae139f5', 12, '10', 2023, 0, '2023-10-23 21:19:40', '2023-10-23 21:19:40'),
(16, 'fe739de2f7e30251589424f4b7cc3eb3', 1, '10', 2023, 0, '2023-10-23 21:20:56', '2023-10-23 21:20:56'),
(17, 'fe739de2f7e30251589424f4b7cc3eb3', 9, '10', 2023, 0, '2023-10-23 21:20:56', '2023-10-23 21:20:56'),
(18, 'fe739de2f7e30251589424f4b7cc3eb3', 10, '10', 2023, 0, '2023-10-23 21:20:56', '2023-10-23 21:20:56'),
(19, 'fe739de2f7e30251589424f4b7cc3eb3', 11, '10', 2023, 0, '2023-10-23 21:20:56', '2023-10-23 21:20:56'),
(20, 'fe739de2f7e30251589424f4b7cc3eb3', 12, '10', 2023, 0, '2023-10-23 21:20:56', '2023-10-23 21:20:56'),
(21, '6b3a9c6bb403aa67eda6a08ebd0fe7b5', 1, '10', 2023, 0, '2023-10-23 21:24:32', '2023-10-23 21:24:32'),
(22, '6b3a9c6bb403aa67eda6a08ebd0fe7b5', 9, '10', 2023, 0, '2023-10-23 21:24:32', '2023-10-23 21:24:32'),
(23, '6b3a9c6bb403aa67eda6a08ebd0fe7b5', 10, '10', 2023, 0, '2023-10-23 21:24:32', '2023-10-23 21:24:32'),
(24, '6b3a9c6bb403aa67eda6a08ebd0fe7b5', 11, '10', 2023, 0, '2023-10-23 21:24:32', '2023-10-23 21:24:32'),
(25, '6b3a9c6bb403aa67eda6a08ebd0fe7b5', 12, '10', 2023, 0, '2023-10-23 21:24:32', '2023-10-23 21:24:32'),
(26, 'da5d1036ec7ad1dfa5c673609a7c59fb', 1, '10', 2023, 0, '2023-10-23 21:27:09', '2023-10-23 21:27:09'),
(27, 'da5d1036ec7ad1dfa5c673609a7c59fb', 9, '10', 2023, 0, '2023-10-23 21:27:09', '2023-10-23 21:27:09'),
(28, 'da5d1036ec7ad1dfa5c673609a7c59fb', 10, '10', 2023, 0, '2023-10-23 21:27:09', '2023-10-23 21:27:09'),
(29, 'da5d1036ec7ad1dfa5c673609a7c59fb', 11, '10', 2023, 0, '2023-10-23 21:27:09', '2023-10-23 21:27:09'),
(30, 'da5d1036ec7ad1dfa5c673609a7c59fb', 12, '10', 2023, 0, '2023-10-23 21:27:09', '2023-10-23 21:27:09'),
(31, '1940c35f9f671aad48fe92c982083077', 1, '10', 2023, 0, '2023-10-23 21:29:12', '2023-10-23 21:29:12'),
(32, '1940c35f9f671aad48fe92c982083077', 9, '10', 2023, 0, '2023-10-23 21:29:12', '2023-10-23 21:29:12'),
(33, '1940c35f9f671aad48fe92c982083077', 10, '10', 2023, 0, '2023-10-23 21:29:12', '2023-10-23 21:29:12'),
(34, '1940c35f9f671aad48fe92c982083077', 11, '10', 2023, 0, '2023-10-23 21:29:12', '2023-10-23 21:29:12'),
(35, '1940c35f9f671aad48fe92c982083077', 12, '10', 2023, 0, '2023-10-23 21:29:12', '2023-10-23 21:29:12'),
(36, '4cbcde746ab7267dd6708ce1fcf644b0', 1, '11', 2023, 0, '2023-11-23 22:26:51', '2023-11-23 22:26:51'),
(37, '4cbcde746ab7267dd6708ce1fcf644b0', 9, '11', 2023, 0, '2023-11-23 22:26:51', '2023-11-23 22:26:51'),
(38, '4cbcde746ab7267dd6708ce1fcf644b0', 11, '11', 2023, 0, '2023-11-23 22:26:51', '2023-11-23 22:26:51'),
(39, '4cbcde746ab7267dd6708ce1fcf644b0', 12, '11', 2023, 0, '2023-11-23 22:26:51', '2023-11-23 22:26:51'),
(40, '0bc287367e9d199d7e9a75a239a14b98', 1, '11', 2023, 0, '2023-11-24 09:59:15', '2023-11-24 09:59:15'),
(41, '0bc287367e9d199d7e9a75a239a14b98', 9, '11', 2023, 0, '2023-11-24 09:59:16', '2023-11-24 09:59:16'),
(42, '0bc287367e9d199d7e9a75a239a14b98', 10, '11', 2023, 0, '2023-11-24 09:59:16', '2023-11-24 09:59:16'),
(43, '0bc287367e9d199d7e9a75a239a14b98', 11, '11', 2023, 0, '2023-11-24 09:59:16', '2023-11-24 09:59:16'),
(44, '0bc287367e9d199d7e9a75a239a14b98', 13, '11', 2023, 0, '2023-11-24 09:59:16', '2023-11-24 09:59:16'),
(45, '0bc287367e9d199d7e9a75a239a14b98', 1, '11', 2023, 0, '2023-11-24 10:09:46', '2023-11-24 10:09:46'),
(46, '0bc287367e9d199d7e9a75a239a14b98', 9, '11', 2023, 0, '2023-11-24 10:09:46', '2023-11-24 10:09:46'),
(47, '0bc287367e9d199d7e9a75a239a14b98', 10, '11', 2023, 0, '2023-11-24 10:09:46', '2023-11-24 10:09:46'),
(48, '0bc287367e9d199d7e9a75a239a14b98', 11, '11', 2023, 0, '2023-11-24 10:09:46', '2023-11-24 10:09:46'),
(49, '0bc287367e9d199d7e9a75a239a14b98', 13, '11', 2023, 0, '2023-11-24 10:09:46', '2023-11-24 10:09:46'),
(50, 'df73cb5007d1ef73fdee58fe4c6fc562', 1, '11', 2023, 0, '2023-11-24 10:11:36', '2023-11-24 10:11:36'),
(51, 'df73cb5007d1ef73fdee58fe4c6fc562', 9, '11', 2023, 0, '2023-11-24 10:11:36', '2023-11-24 10:11:36'),
(52, 'df73cb5007d1ef73fdee58fe4c6fc562', 10, '11', 2023, 0, '2023-11-24 10:11:36', '2023-11-24 10:11:36'),
(53, 'df73cb5007d1ef73fdee58fe4c6fc562', 11, '11', 2023, 0, '2023-11-24 10:11:36', '2023-11-24 10:11:36'),
(54, 'df73cb5007d1ef73fdee58fe4c6fc562', 13, '11', 2023, 0, '2023-11-24 10:11:36', '2023-11-24 10:11:36'),
(55, '854d2386df469564e841f621e02e8a93', 64, '11', 2023, 0, '2023-11-24 10:21:07', '2023-11-24 10:21:07'),
(56, '854d2386df469564e841f621e02e8a93', 65, '11', 2023, 0, '2023-11-24 10:21:07', '2023-11-24 10:21:07'),
(57, '854d2386df469564e841f621e02e8a93', 66, '11', 2023, 0, '2023-11-24 10:21:08', '2023-11-24 10:21:08'),
(58, '854d2386df469564e841f621e02e8a93', 67, '11', 2023, 0, '2023-11-24 10:21:08', '2023-11-24 10:21:08'),
(59, '854d2386df469564e841f621e02e8a93', 68, '11', 2023, 0, '2023-11-24 10:21:08', '2023-11-24 10:21:08'),
(60, '676f25ac97ccab62480ec84e66f5e72e', 33, '11', 2023, 0, '2023-11-24 10:39:48', '2023-11-24 10:39:48'),
(61, '676f25ac97ccab62480ec84e66f5e72e', 34, '11', 2023, 0, '2023-11-24 10:39:48', '2023-11-24 10:39:48'),
(62, '676f25ac97ccab62480ec84e66f5e72e', 35, '11', 2023, 0, '2023-11-24 10:39:48', '2023-11-24 10:39:48'),
(63, '676f25ac97ccab62480ec84e66f5e72e', 36, '11', 2023, 0, '2023-11-24 10:39:48', '2023-11-24 10:39:48'),
(64, '676f25ac97ccab62480ec84e66f5e72e', 37, '11', 2023, 0, '2023-11-24 10:39:48', '2023-11-24 10:39:48'),
(65, '196e070623dded59756c9cbeb2907570', 1, '11', 2023, 0, '2023-11-24 18:54:15', '2023-11-24 18:54:15'),
(66, '196e070623dded59756c9cbeb2907570', 15, '11', 2023, 0, '2023-11-24 18:54:16', '2023-11-24 18:54:16'),
(67, '196e070623dded59756c9cbeb2907570', 21, '11', 2023, 0, '2023-11-24 18:54:16', '2023-11-24 18:54:16'),
(68, '196e070623dded59756c9cbeb2907570', 25, '11', 2023, 0, '2023-11-24 18:54:16', '2023-11-24 18:54:16'),
(69, '196e070623dded59756c9cbeb2907570', 35, '11', 2023, 0, '2023-11-24 18:54:16', '2023-11-24 18:54:16'),
(70, '8e41c9d93391bb4be4b239c19d8376b2', 27, '11', 2023, 0, '2023-11-24 19:20:13', '2023-11-24 19:20:13'),
(71, '8e41c9d93391bb4be4b239c19d8376b2', 28, '11', 2023, 0, '2023-11-24 19:20:13', '2023-11-24 19:20:13'),
(72, '8e41c9d93391bb4be4b239c19d8376b2', 29, '11', 2023, 0, '2023-11-24 19:20:13', '2023-11-24 19:20:13'),
(73, '8e41c9d93391bb4be4b239c19d8376b2', 30, '11', 2023, 0, '2023-11-24 19:20:13', '2023-11-24 19:20:13'),
(74, '8e41c9d93391bb4be4b239c19d8376b2', 31, '11', 2023, 0, '2023-11-24 19:20:13', '2023-11-24 19:20:13'),
(75, '8ab3dc01fe9422965bc16d3e2d7dbb43', 1, '12', 2023, 0, '2023-12-05 13:13:35', '2023-12-05 13:13:35'),
(76, '8ab3dc01fe9422965bc16d3e2d7dbb43', 9, '12', 2023, 0, '2023-12-05 13:13:36', '2023-12-05 13:13:36'),
(77, '8ab3dc01fe9422965bc16d3e2d7dbb43', 10, '12', 2023, 0, '2023-12-05 13:13:36', '2023-12-05 13:13:36'),
(78, '8ab3dc01fe9422965bc16d3e2d7dbb43', 11, '12', 2023, 0, '2023-12-05 13:13:36', '2023-12-05 13:13:36'),
(79, '8ab3dc01fe9422965bc16d3e2d7dbb43', 12, '12', 2023, 0, '2023-12-05 13:13:36', '2023-12-05 13:13:36'),
(80, '7671a05fdba81c65a1ba946734644d58', 21, '12', 2023, 0, '2023-12-13 15:00:54', '2023-12-13 15:00:54'),
(81, '7671a05fdba81c65a1ba946734644d58', 22, '12', 2023, 0, '2023-12-13 15:00:54', '2023-12-13 15:00:54'),
(82, '7671a05fdba81c65a1ba946734644d58', 23, '12', 2023, 0, '2023-12-13 15:00:55', '2023-12-13 15:00:55'),
(83, '7671a05fdba81c65a1ba946734644d58', 24, '12', 2023, 0, '2023-12-13 15:00:55', '2023-12-13 15:00:55'),
(84, '7671a05fdba81c65a1ba946734644d58', 25, '12', 2023, 0, '2023-12-13 15:00:55', '2023-12-13 15:00:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bobot`
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
-- Dumping data untuk tabel `tbl_bobot`
--

INSERT INTO `tbl_bobot` (`id_bobot`, `id_kriteria`, `nama_bobot`, `keterangan`, `nilai`, `delete_at`, `created_time`, `update_time`) VALUES
(1, 0, 'Kehadiran2', '', 0, 1, '2023-03-30 12:47:48', '2023-03-30 05:47:48'),
(2, 0, 'Kedisplinan', '', 0, 0, '2023-03-30 12:49:47', '2023-03-30 05:49:47'),
(3, 0, 'Tanggung Jawab', '', 0, 0, '2023-03-30 12:49:47', '2023-03-30 05:49:47'),
(4, 0, 'Kesopanan', '', 4, 0, '2023-04-06 15:40:58', '2023-04-06 08:40:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hasil_rekomendasi`
--

CREATE TABLE `tbl_hasil_rekomendasi` (
  `id_hasil_rekomedasi` int(11) NOT NULL,
  `id_rekomendasi_karyawan` text NOT NULL,
  `nama_karyawan_saw` varchar(255) NOT NULL,
  `nama_karyawan_wp` varchar(255) NOT NULL,
  `nilai_karyawan_saw` varchar(255) NOT NULL,
  `nilai_karyawan_wp` varchar(255) NOT NULL,
  `periode_bulan` varchar(255) NOT NULL,
  `periode_tahun` varchar(255) NOT NULL,
  `delete_at` int(11) NOT NULL COMMENT '0=active, 1= non active',
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_hasil_rekomendasi`
--

INSERT INTO `tbl_hasil_rekomendasi` (`id_hasil_rekomedasi`, `id_rekomendasi_karyawan`, `nama_karyawan_saw`, `nama_karyawan_wp`, `nilai_karyawan_saw`, `nilai_karyawan_wp`, `periode_bulan`, `periode_tahun`, `delete_at`, `created_time`, `updated_time`) VALUES
(1, '1940c35f9f671aad48fe92c982083077', 'Fefan Hulu', 'Yamamoni Lase', '24.583333333333', '0.275', '10', '2023', 0, '2023-10-23 21:30:02', '2023-10-23 21:30:02'),
(2, 'df73cb5007d1ef73fdee58fe4c6fc562', 'Yamamoni Lase', 'Yamamoni Lase', '23', '0.629', '11', '2023', 0, '2023-11-24 10:18:20', '2023-11-24 10:18:20'),
(3, '854d2386df469564e841f621e02e8a93', 'Delfan Zebua', 'Delfan Zebua', '43.2', '0.955', '11', '2023', 0, '2023-11-24 10:22:05', '2023-11-24 10:22:05'),
(4, '676f25ac97ccab62480ec84e66f5e72e', 'Enjelina Situmeang', 'Elsa Arjayanda', '32.3', '0.461', '11', '2023', 0, '2023-11-24 10:41:54', '2023-11-24 10:41:54'),
(5, '8ab3dc01fe9422965bc16d3e2d7dbb43', 'Andi Hulu', 'Andi Hulu', '22.75', '0.328', '12', '2023', 0, '2023-12-05 13:16:14', '2023-12-05 13:16:14'),
(6, '7671a05fdba81c65a1ba946734644d58', 'Teti Lafau', 'Hengki Laia', '34.333333333333', '0.313', '12', '2023', 0, '2023-12-13 15:01:50', '2023-12-13 15:01:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_karyawan`
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
-- Dumping data untuk tabel `tbl_karyawan`
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
-- Struktur dari tabel `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` varchar(100) NOT NULL,
  `atribut` varchar(100) NOT NULL,
  `delete_at` int(11) NOT NULL COMMENT '0=Active, 1=Non Active',
  `created_time` datetime NOT NULL,
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id_kriteria`, `kriteria`, `atribut`, `delete_at`, `created_time`, `updated_time`) VALUES
(1, 'amam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Keterlambatann', 'Costt', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '(C1) Keterlambatan', 'Cost', 0, '0000-00-00 00:00:00', '2023-11-23 21:19:14'),
(4, '(C2) Jam Kerja', 'Benefit', 0, '0000-00-00 00:00:00', '2023-11-23 21:19:26'),
(5, '(C3) Over Time', 'Benefit', 0, '0000-00-00 00:00:00', '2023-11-23 21:20:04'),
(6, '(C4) Teguran', 'Cost', 0, '0000-00-00 00:00:00', '2023-11-23 21:22:10'),
(7, '(C5) Lama Bekerja', 'Benefit', 0, '0000-00-00 00:00:00', '2023-11-23 21:22:43'),
(8, '(C6) Absensi', 'Cost', 0, '0000-00-00 00:00:00', '2023-11-23 21:23:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai_alternatif`
--

CREATE TABLE `tbl_nilai_alternatif` (
  `id_nilai_alternatif` int(11) NOT NULL,
  `id_rekomendasi_karyawan` text NOT NULL,
  `a1_c1` float NOT NULL,
  `a1_c2` float NOT NULL,
  `a1_c3` float NOT NULL,
  `a1_c4` float NOT NULL,
  `a1_c5` float NOT NULL,
  `a1_c6` float NOT NULL,
  `a2_c1` float NOT NULL,
  `a2_c2` float NOT NULL,
  `a2_c3` float NOT NULL,
  `a2_c4` float NOT NULL,
  `a2_c5` float NOT NULL,
  `a2_c6` float NOT NULL,
  `a3_c1` float NOT NULL,
  `a3_c2` float NOT NULL,
  `a3_c3` float NOT NULL,
  `a3_c4` float NOT NULL,
  `a3_c5` float NOT NULL,
  `a3_c6` float NOT NULL,
  `a4_c1` float NOT NULL,
  `a4_c2` float NOT NULL,
  `a4_c3` float NOT NULL,
  `a4_c4` float NOT NULL,
  `a4_c5` float NOT NULL,
  `a4_c6` float NOT NULL,
  `a5_c1` float NOT NULL,
  `a5_c2` float NOT NULL,
  `a5_c3` float NOT NULL,
  `a5_c4` float NOT NULL,
  `a5_c5` float NOT NULL,
  `a5_c6` float NOT NULL,
  `create_time` datetime NOT NULL DEFAULT current_timestamp(),
  `update_timr` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_nilai_alternatif`
--

INSERT INTO `tbl_nilai_alternatif` (`id_nilai_alternatif`, `id_rekomendasi_karyawan`, `a1_c1`, `a1_c2`, `a1_c3`, `a1_c4`, `a1_c5`, `a1_c6`, `a2_c1`, `a2_c2`, `a2_c3`, `a2_c4`, `a2_c5`, `a2_c6`, `a3_c1`, `a3_c2`, `a3_c3`, `a3_c4`, `a3_c5`, `a3_c6`, `a4_c1`, `a4_c2`, `a4_c3`, `a4_c4`, `a4_c5`, `a4_c6`, `a5_c1`, `a5_c2`, `a5_c3`, `a5_c4`, `a5_c5`, `a5_c6`, `create_time`, `update_timr`) VALUES
(1, '83e94148c988495ca15ff7fa42eab309', 3, 2, 2, 3, 3, 4, 4, 3, 2, 2, 2, 2, 3, 2, 2, 2, 2, 2, 4, 3, 3, 3, 3, 3, 4, 4, 4, 2, 2, 3, '2023-10-23 21:10:50', '2023-10-23 21:10:50'),
(2, 'c9c9721dbdf2dbf7f14339259606a982', 2, 2, 3, 4, 4, 3, 4, 3, 3, 3, 3, 3, 5, 5, 4, 4, 4, 4, 4, 4, 3, 5, 4, 4, 4, 4, 3, 3, 3, 3, '2023-10-23 21:12:32', '2023-10-23 21:12:32'),
(3, 'f9545f5a91c33c787ee764e4cae139f5', 2, 2, 3, 3, 3, 3, 4, 4, 4, 3, 3, 2, 3, 3, 3, 3, 3, 2, 3, 3, 3, 3, 3, 4, 4, 4, 3, 3, 3, 3, '2023-10-23 21:20:29', '2023-10-23 21:20:29'),
(4, 'fe739de2f7e30251589424f4b7cc3eb3', 2, 3, 3, 3, 3, 3, 3, 3, 2, 3, 4, 4, 3, 3, 3, 3, 3, 4, 4, 4, 3, 3, 3, 3, 3, 3, 3, 3, 3, 4, '2023-10-23 21:21:44', '2023-10-23 21:21:44'),
(5, '6b3a9c6bb403aa67eda6a08ebd0fe7b5', 3, 4, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2, 3, 3, 3, 3, 3, 3, 4, 3, 3, 3, 3, 2, 4, 3, 3, 3, 3, 2, '2023-10-23 21:25:17', '2023-10-23 21:25:17'),
(6, 'da5d1036ec7ad1dfa5c673609a7c59fb', 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, '2023-10-23 21:27:52', '2023-10-23 21:27:52'),
(7, '1940c35f9f671aad48fe92c982083077', 3, 4, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 4, 2, 2, 1, 4, 3, 4, '2023-10-23 21:30:02', '2023-10-23 21:30:02'),
(8, '4cbcde746ab7267dd6708ce1fcf644b0', 1, 5, 5, 3, 5, 5, 3, 4, 5, 3, 5, 5, 4, 5, 5, 5, 2, 3, 4, 0, 3, 4, 4, 2, 0, 0, 0, 0, 0, 0, '2023-11-23 22:29:11', '2023-11-23 22:29:11'),
(9, 'df73cb5007d1ef73fdee58fe4c6fc562', 5, 4, 3, 5, 4, 5, 5, 3, 2, 5, 3, 4, 4, 2, 2, 5, 3, 4, 4, 4, 2, 5, 2, 3, 3, 1, 3, 5, 2, 3, '2023-11-24 10:18:19', '2023-11-24 10:18:19'),
(10, '854d2386df469564e841f621e02e8a93', 1, 2, 4, 3, 4, 2, 2, 2, 5, 2, 2, 4, 3, 2, 1, 1, 2, 5, 1, 3, 2, 2, 1, 2, 5, 5, 3, 5, 5, 5, '2023-11-24 10:22:04', '2023-11-24 10:22:04'),
(11, '676f25ac97ccab62480ec84e66f5e72e', 2, 5, 2, 1, 4, 3, 3, 4, 4, 3, 4, 4, 2, 4, 2, 5, 2, 2, 4, 3, 4, 3, 2, 5, 3, 3, 4, 2, 4, 3, '2023-11-24 10:41:54', '2023-11-24 10:41:54'),
(12, '8ab3dc01fe9422965bc16d3e2d7dbb43', 3, 3, 3, 2, 3, 2, 1, 3, 4, 3, 3, 3, 2, 3, 3, 3, 4, 2, 3, 4, 3, 2, 2, 3, 3, 3, 4, 5, 2, 2, '2023-12-05 13:16:12', '2023-12-05 13:16:12'),
(13, '7671a05fdba81c65a1ba946734644d58', 1, 2, 5, 3, 4, 4, 3, 4, 4, 4, 3, 3, 4, 3, 5, 4, 3, 3, 3, 3, 4, 4, 4, 4, 2, 3, 3, 4, 4, 3, '2023-12-13 15:01:49', '2023-12-13 15:01:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai_bobot`
--

CREATE TABLE `tbl_nilai_bobot` (
  `id_nilai_bobot` int(11) NOT NULL,
  `id_rekomendasi_karyawan` text NOT NULL,
  `bobot1` float NOT NULL,
  `bobot2` float NOT NULL,
  `bobot3` float NOT NULL,
  `bobot4` float NOT NULL,
  `bobot5` float NOT NULL,
  `bobot6` float NOT NULL,
  `create_time` datetime NOT NULL DEFAULT current_timestamp(),
  `update_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_nilai_bobot`
--

INSERT INTO `tbl_nilai_bobot` (`id_nilai_bobot`, `id_rekomendasi_karyawan`, `bobot1`, `bobot2`, `bobot3`, `bobot4`, `bobot5`, `bobot6`, `create_time`, `update_time`) VALUES
(1, '83e94148c988495ca15ff7fa42eab309', 3, 4, 4, 3, 3, 4, '2023-10-23 21:10:50', '2023-10-23 21:10:50'),
(2, 'c9c9721dbdf2dbf7f14339259606a982', 3, 3, 3, 3, 3, 3, '2023-10-23 21:12:32', '2023-10-23 21:12:32'),
(3, 'f9545f5a91c33c787ee764e4cae139f5', 2, 4, 3, 3, 3, 3, '2023-10-23 21:20:29', '2023-10-23 21:20:29'),
(4, 'fe739de2f7e30251589424f4b7cc3eb3', 3, 4, 4, 3, 3, 3, '2023-10-23 21:21:44', '2023-10-23 21:21:44'),
(5, '6b3a9c6bb403aa67eda6a08ebd0fe7b5', 3, 4, 4, 4, 3, 3, '2023-10-23 21:25:17', '2023-10-23 21:25:17'),
(6, 'da5d1036ec7ad1dfa5c673609a7c59fb', 3, 3, 3, 3, 3, 3, '2023-10-23 21:27:52', '2023-10-23 21:27:52'),
(7, '1940c35f9f671aad48fe92c982083077', 3, 5, 4, 4, 3, 4, '2023-10-23 21:30:02', '2023-10-23 21:30:02'),
(8, 'df73cb5007d1ef73fdee58fe4c6fc562', 2, 3, 4, 1, 5, 4, '2023-11-24 10:18:19', '2023-11-24 10:18:19'),
(9, '854d2386df469564e841f621e02e8a93', 5, 3, 2, 1, 4, 2, '2023-11-24 10:22:05', '2023-11-24 10:22:05'),
(10, '676f25ac97ccab62480ec84e66f5e72e', 4, 3, 2, 4, 2, 3, '2023-11-24 10:41:54', '2023-11-24 10:41:54'),
(11, '8ab3dc01fe9422965bc16d3e2d7dbb43', 3, 3, 2, 2, 3, 3, '2023-12-05 13:16:13', '2023-12-05 13:16:13'),
(12, '7671a05fdba81c65a1ba946734644d58', 4, 4, 3, 4, 4, 4, '2023-12-13 15:01:49', '2023-12-13 15:01:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai_normalisasi`
--

CREATE TABLE `tbl_nilai_normalisasi` (
  `id_nilai_normalisasi` int(11) NOT NULL,
  `id_rekomendasi_karyawan` text NOT NULL,
  `a1_c1` float NOT NULL,
  `a1_c2` float NOT NULL,
  `a1_c3` float NOT NULL,
  `a1_c4` float NOT NULL,
  `a1_c5` float NOT NULL,
  `a1_c6` float NOT NULL,
  `a2_c1` float NOT NULL,
  `a2_c2` float NOT NULL,
  `a2_c3` float NOT NULL,
  `a2_c4` float NOT NULL,
  `a2_c5` float NOT NULL,
  `a2_c6` float NOT NULL,
  `a3_c1` float NOT NULL,
  `a3_c2` float NOT NULL,
  `a3_c3` float NOT NULL,
  `a3_c4` float NOT NULL,
  `a3_c5` float NOT NULL,
  `a3_c6` float NOT NULL,
  `a4_c1` float NOT NULL,
  `a4_c2` float NOT NULL,
  `a4_c3` float NOT NULL,
  `a4_c4` float NOT NULL,
  `a4_c5` float NOT NULL,
  `a4_c6` float NOT NULL,
  `a5_c1` float NOT NULL,
  `a5_c2` float NOT NULL,
  `a5_c3` float NOT NULL,
  `a5_c4` float NOT NULL,
  `a5_c5` float NOT NULL,
  `a5_c6` float NOT NULL,
  `create_time` datetime NOT NULL DEFAULT current_timestamp(),
  `update_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_nilai_normalisasi`
--

INSERT INTO `tbl_nilai_normalisasi` (`id_nilai_normalisasi`, `id_rekomendasi_karyawan`, `a1_c1`, `a1_c2`, `a1_c3`, `a1_c4`, `a1_c5`, `a1_c6`, `a2_c1`, `a2_c2`, `a2_c3`, `a2_c4`, `a2_c5`, `a2_c6`, `a3_c1`, `a3_c2`, `a3_c3`, `a3_c4`, `a3_c5`, `a3_c6`, `a4_c1`, `a4_c2`, `a4_c3`, `a4_c4`, `a4_c5`, `a4_c6`, `a5_c1`, `a5_c2`, `a5_c3`, `a5_c4`, `a5_c5`, `a5_c6`, `create_time`, `update_time`) VALUES
(1, '83e94148c988495ca15ff7fa42eab309', 1, 0.5, 0.5, 1.5, 1, 2, 1.33333, 0.75, 0.5, 1, 0.666667, 1, 1, 0.5, 0.5, 1, 0.666667, 1, 1.33333, 0.75, 0.75, 1.5, 1, 1.5, 1.33333, 1, 1, 1, 0.666667, 1.5, '2023-10-23 21:10:50', '2023-10-23 21:10:50'),
(2, 'c9c9721dbdf2dbf7f14339259606a982', 1, 0.4, 0.75, 1.33333, 1, 1, 2, 0.6, 0.75, 1, 0.75, 1, 2.5, 1, 1, 1.33333, 1, 1.33333, 2, 0.8, 0.75, 1.66667, 1, 1.33333, 2, 0.8, 0.75, 1, 0.75, 1, '2023-10-23 21:12:32', '2023-10-23 21:12:32'),
(3, 'f9545f5a91c33c787ee764e4cae139f5', 1, 0.5, 0.75, 1, 1, 1.5, 2, 1, 1, 1, 1, 1, 1.5, 0.75, 0.75, 1, 1, 1, 1.5, 0.75, 0.75, 1, 1, 2, 2, 1, 0.75, 1, 1, 1.5, '2023-10-23 21:20:29', '2023-10-23 21:20:29'),
(4, 'fe739de2f7e30251589424f4b7cc3eb3', 1, 0.75, 1, 1, 0.75, 1, 1.5, 0.75, 0.666667, 1, 1, 1.33333, 1.5, 0.75, 1, 1, 0.75, 1.33333, 2, 1, 1, 1, 0.75, 1, 1.5, 0.75, 1, 1, 0.75, 1.33333, '2023-10-23 21:21:44', '2023-10-23 21:21:44'),
(5, '6b3a9c6bb403aa67eda6a08ebd0fe7b5', 1, 1, 1, 1, 1, 1.5, 1, 0.75, 1, 1, 1, 1, 1, 0.75, 1, 1, 1, 1.5, 1.33333, 0.75, 1, 1, 1, 1, 1.33333, 0.75, 1, 1, 1, 1, '2023-10-23 21:25:17', '2023-10-23 21:25:17'),
(6, 'da5d1036ec7ad1dfa5c673609a7c59fb', 1, 1, 1, 1, 1, 1.5, 1.5, 1, 1, 1, 1, 1, 1.5, 1, 1, 1, 1, 1.5, 1.5, 1, 1, 1, 1, 1.5, 1.5, 1, 1, 1, 1, 1.5, '2023-10-23 21:27:52', '2023-10-23 21:27:52'),
(7, '1940c35f9f671aad48fe92c982083077', 1.5, 1, 1, 1, 1, 1, 1.5, 0.75, 1, 1, 1, 1, 1.5, 0.75, 1, 1, 1, 1, 1.5, 0.75, 1, 1, 1, 1.33333, 1, 0.5, 0.333333, 1.33333, 1, 1.33333, '2023-10-23 21:30:02', '2023-10-23 21:30:02'),
(8, 'df73cb5007d1ef73fdee58fe4c6fc562', 1.66667, 1, 1, 1, 1, 1.66667, 1.66667, 0.75, 0.666667, 1, 0.75, 1.33333, 1.33333, 0.5, 0.666667, 1, 0.75, 1.33333, 1.33333, 1, 0.666667, 1, 0.5, 1, 1, 0.25, 1, 1, 0.5, 1, '2023-11-24 10:18:19', '2023-11-24 10:18:19'),
(9, '854d2386df469564e841f621e02e8a93', 1, 0.4, 0.8, 3, 0.8, 1, 2, 0.4, 1, 2, 0.4, 2, 3, 0.4, 0.2, 1, 0.4, 2.5, 1, 0.6, 0.4, 2, 0.2, 1, 5, 1, 0.6, 5, 1, 2.5, '2023-11-24 10:22:04', '2023-11-24 10:22:04'),
(10, '676f25ac97ccab62480ec84e66f5e72e', 1, 1, 0.5, 1, 1, 1.5, 1.5, 0.8, 1, 3, 1, 2, 1, 0.8, 0.5, 5, 0.5, 1, 2, 0.6, 1, 3, 0.5, 2.5, 1.5, 0.6, 1, 2, 1, 1.5, '2023-11-24 10:41:54', '2023-11-24 10:41:54'),
(11, '8ab3dc01fe9422965bc16d3e2d7dbb43', 3, 0.75, 0.75, 1, 0.75, 1, 1, 0.75, 1, 1.5, 0.75, 1.5, 2, 0.75, 0.75, 1.5, 1, 1, 3, 1, 0.75, 1, 0.5, 1.5, 3, 0.75, 1, 2.5, 0.5, 1, '2023-12-05 13:16:13', '2023-12-05 13:16:13'),
(12, '7671a05fdba81c65a1ba946734644d58', 1, 0.5, 1, 1, 1, 1.33333, 3, 1, 0.8, 1.33333, 0.75, 1, 4, 0.75, 1, 1.33333, 0.75, 1, 3, 0.75, 0.8, 1.33333, 1, 1.33333, 2, 0.75, 0.6, 1.33333, 1, 1, '2023-12-13 15:01:49', '2023-12-13 15:01:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai_perangkingan`
--

CREATE TABLE `tbl_nilai_perangkingan` (
  `id_nilai_perangkingan` int(11) NOT NULL,
  `id_rekomendasi_karyawan` text NOT NULL,
  `a1` float NOT NULL,
  `a2` float NOT NULL,
  `a3` float NOT NULL,
  `a4` float NOT NULL,
  `a5` float NOT NULL,
  `create_time` datetime NOT NULL DEFAULT current_timestamp(),
  `update_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_nilai_perangkingan`
--

INSERT INTO `tbl_nilai_perangkingan` (`id_nilai_perangkingan`, `id_rekomendasi_karyawan`, `a1`, `a2`, `a3`, `a4`, `a5`, `create_time`, `update_created`) VALUES
(1, '83e94148c988495ca15ff7fa42eab309', 22.5, 18, 16, 23.5, 23, '2023-10-23 21:10:50', '2023-10-23 21:10:50'),
(2, 'c9c9721dbdf2dbf7f14339259606a982', 16.45, 18.3, 24.5, 22.65, 18.9, '2023-10-23 21:12:32', '2023-10-23 21:12:32'),
(3, 'f9545f5a91c33c787ee764e4cae139f5', 16.75, 20, 17.25, 20.25, 20.75, '2023-10-23 21:20:29', '2023-10-23 21:20:29'),
(4, 'fe739de2f7e30251589424f4b7cc3eb3', 18.25, 20.1667, 20.75, 22.25, 20.75, '2023-10-23 21:21:44', '2023-10-23 21:21:44'),
(5, '6b3a9c6bb403aa67eda6a08ebd0fe7b5', 22.5, 20, 21.5, 21, 21, '2023-10-23 21:25:17', '2023-10-23 21:25:17'),
(6, 'da5d1036ec7ad1dfa5c673609a7c59fb', 19.5, 19.5, 21, 21, 21, '2023-10-23 21:27:52', '2023-10-23 21:27:52'),
(7, '1940c35f9f671aad48fe92c982083077', 24.5, 23.25, 23.25, 24.5833, 20.5, '2023-10-23 21:30:02', '2023-10-23 21:30:02'),
(8, 'df73cb5007d1ef73fdee58fe4c6fc562', 23, 18.3333, 16.9167, 15.8333, 14.25, '2023-11-24 10:18:19', '2023-11-24 10:18:19'),
(9, '854d2386df469564e841f621e02e8a93', 16, 20.8, 24.2, 12.4, 43.2, '2023-11-24 10:22:05', '2023-11-24 10:22:05'),
(10, '676f25ac97ccab62480ec84e66f5e72e', 18.5, 30.4, 31.4, 32.3, 24.3, '2023-11-24 10:41:54', '2023-11-24 10:41:54'),
(11, '8ab3dc01fe9422965bc16d3e2d7dbb43', 20, 17, 18.75, 21.5, 22.75, '2023-12-05 13:16:13', '2023-12-05 13:16:13'),
(12, '7671a05fdba81c65a1ba946734644d58', 22.3333, 30.7333, 34.3333, 32.0667, 26.1333, '2023-12-13 15:01:50', '2023-12-13 15:01:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_normalisasi_bobot`
--

CREATE TABLE `tbl_normalisasi_bobot` (
  `id_normalisasi_bobot` int(11) NOT NULL,
  `id_rekomendasi_karyawan` text NOT NULL,
  `w1` float NOT NULL,
  `w2` float NOT NULL,
  `w3` float NOT NULL,
  `w4` float NOT NULL,
  `w5` float NOT NULL,
  `w6` float NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_normalisasi_bobot`
--

INSERT INTO `tbl_normalisasi_bobot` (`id_normalisasi_bobot`, `id_rekomendasi_karyawan`, `w1`, `w2`, `w3`, `w4`, `w5`, `w6`, `created_time`, `updated_time`) VALUES
(1, '83e94148c988495ca15ff7fa42eab309', 0.143, 0.19, 0.19, 0.143, 0.143, 0.19, '2023-10-23 21:10:50', '2023-10-23 21:10:50'),
(2, 'c9c9721dbdf2dbf7f14339259606a982', 0.167, 0.167, 0.167, 0.167, 0.167, 0.167, '2023-10-23 21:12:33', '2023-10-23 21:12:33'),
(3, 'f9545f5a91c33c787ee764e4cae139f5', 0.111, 0.222, 0.167, 0.167, 0.167, 0.167, '2023-10-23 21:20:29', '2023-10-23 21:20:29'),
(4, 'fe739de2f7e30251589424f4b7cc3eb3', 0.15, 0.2, 0.2, 0.15, 0.15, 0.15, '2023-10-23 21:21:44', '2023-10-23 21:21:44'),
(5, '6b3a9c6bb403aa67eda6a08ebd0fe7b5', 0.143, 0.19, 0.19, 0.19, 0.143, 0.143, '2023-10-23 21:25:17', '2023-10-23 21:25:17'),
(6, 'da5d1036ec7ad1dfa5c673609a7c59fb', 0.167, 0.167, 0.167, 0.167, 0.167, 0.167, '2023-10-23 21:27:52', '2023-10-23 21:27:52'),
(7, '1940c35f9f671aad48fe92c982083077', 0.13, 0.217, 0.174, 0.174, 0.13, 0.174, '2023-10-23 21:30:02', '2023-10-23 21:30:02'),
(8, 'df73cb5007d1ef73fdee58fe4c6fc562', 0.105, 0.158, 0.211, 0.053, 0.263, 0.211, '2023-11-24 10:18:20', '2023-11-24 10:18:20'),
(9, '854d2386df469564e841f621e02e8a93', 0.294, 0.176, 0.118, 0.059, 0.235, 0.118, '2023-11-24 10:22:05', '2023-11-24 10:22:05'),
(10, '676f25ac97ccab62480ec84e66f5e72e', 0.222, 0.167, 0.111, 0.222, 0.111, 0.167, '2023-11-24 10:41:54', '2023-11-24 10:41:54'),
(11, '8ab3dc01fe9422965bc16d3e2d7dbb43', 0.188, 0.188, 0.125, 0.125, 0.188, 0.188, '2023-12-05 13:16:13', '2023-12-05 13:16:13'),
(12, '7671a05fdba81c65a1ba946734644d58', 0.174, 0.174, 0.13, 0.174, 0.174, 0.174, '2023-12-13 15:01:50', '2023-12-13 15:01:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rekomendasi_karyawan`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sub_kriteria`
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
-- Struktur dari tabel `tbl_toko`
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
-- Dumping data untuk tabel `tbl_toko`
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
-- Struktur dari tabel `tbl_users`
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
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`id_users`, `username`, `password`, `nama`, `umur`, `status`, `tgl_lahir`, `alamat`, `delete_at`, `created_time`, `update_time`) VALUES
(1, 'boylase3@gmail.com', '123', 'boy lase', '23 tahun', 'Pelajar', '2000-01-01', 'NIAS', 1, '2023-03-21 22:08:39', '2023-03-21 22:08:39'),
(2, 'admin', '123', 'Susanti', '20 Tahun', 'Pelajar', '2003-02-03', 'NIAS Sumatera Utara', 0, '2023-03-21 22:40:55', '2023-03-21 22:40:55'),
(3, '', '', 'Araman Suryadinata', '16 Tahun', 'Pelajar', '2017-12-10', 'Jl. Pengasinan', 0, '2023-03-21 22:40:55', '2023-03-21 22:40:55'),
(4, '', '', 'Innel Gea', '23 Tahun', 'Pelajar', '2000-05-05', 'NIAS, Sumatera Utara', 0, '2023-03-21 22:42:38', '2023-03-21 22:42:38'),
(5, '', '', 'boy1', '23', 'Pelajar', '2023-04-11', 'Depok, Jakarta', 0, '2023-04-06 13:40:53', '2023-04-06 13:40:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_vektor_s`
--

CREATE TABLE `tbl_vektor_s` (
  `id_vektor_s` int(11) NOT NULL,
  `id_rekomendasi_karyawan` text NOT NULL,
  `s1` float NOT NULL,
  `s2` float NOT NULL,
  `s3` float NOT NULL,
  `s4` float NOT NULL,
  `s5` float NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_vektor_s`
--

INSERT INTO `tbl_vektor_s` (`id_vektor_s`, `id_rekomendasi_karyawan`, `s1`, `s2`, `s3`, `s4`, `s5`, `created_time`, `updated_time`) VALUES
(1, '83e94148c988495ca15ff7fa42eab309', 291.08, 122.444, 58.421, 698.536, 542.537, '2023-10-23 21:10:50', '2023-10-23 21:10:50'),
(2, 'c9c9721dbdf2dbf7f14339259606a982', 396.183, 699.474, 5041.84, 2955.42, 946.376, '2023-10-23 21:12:33', '2023-10-23 21:12:33'),
(3, 'f9545f5a91c33c787ee764e4cae139f5', 216.347, 828.503, 334.489, 699.453, 946.425, '2023-10-23 21:20:29', '2023-10-23 21:20:29'),
(4, 'fe739de2f7e30251589424f4b7cc3eb3', 335.755, 606.795, 698.733, 948.281, 698.733, '2023-10-23 21:21:44', '2023-10-23 21:21:44'),
(5, '6b3a9c6bb403aa67eda6a08ebd0fe7b5', 701.566, 336.319, 517.428, 454.036, 454.036, '2023-10-23 21:25:17', '2023-10-23 21:25:17'),
(6, 'da5d1036ec7ad1dfa5c673609a7c59fb', 334.499, 334.499, 516.987, 516.987, 516.987, '2023-10-23 21:27:52', '2023-10-23 21:27:52'),
(7, '1940c35f9f671aad48fe92c982083077', 703.261, 517.361, 517.361, 700.432, 115.703, '2023-10-23 21:30:02', '2023-10-23 21:30:02'),
(8, 'df73cb5007d1ef73fdee58fe4c6fc562', 4643.75, 1276.82, 658.489, 641.602, 162.929, '2023-11-24 10:18:20', '2023-11-24 10:18:20'),
(9, '854d2386df469564e841f621e02e8a93', 104.175, 202.035, 35.298, 10.486, 7520.19, '2023-11-24 10:22:05', '2023-11-24 10:22:05'),
(10, '676f25ac97ccab62480ec84e66f5e72e', 139.138, 1714.82, 212.982, 1055.67, 599.561, '2023-11-24 10:41:54', '2023-11-24 10:41:54'),
(11, '8ab3dc01fe9422965bc16d3e2d7dbb43', 217.192, 201.146, 290.911, 294.429, 490.448, '2023-12-05 13:16:14', '2023-12-05 13:16:14'),
(12, '7671a05fdba81c65a1ba946734644d58', 303.859, 1278.55, 1608.92, 1730.97, 612.656, '2023-12-13 15:01:50', '2023-12-13 15:01:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_vektor_v`
--

CREATE TABLE `tbl_vektor_v` (
  `id_vektor_v` int(11) NOT NULL,
  `id_rekomendasi_karyawan` text NOT NULL,
  `v1` float NOT NULL,
  `v2` float NOT NULL,
  `v3` float NOT NULL,
  `v4` float NOT NULL,
  `v5` float NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_vektor_v`
--

INSERT INTO `tbl_vektor_v` (`id_vektor_v`, `id_rekomendasi_karyawan`, `v1`, `v2`, `v3`, `v4`, `v5`, `created_time`, `updated_time`) VALUES
(1, '83e94148c988495ca15ff7fa42eab309', 0.17, 0.071, 0.034, 0.408, 0.317, '2023-10-23 21:10:50', '2023-10-23 21:10:50'),
(2, 'c9c9721dbdf2dbf7f14339259606a982', 0.039, 0.07, 0.502, 0.294, 0.094, '2023-10-23 21:12:33', '2023-10-23 21:12:33'),
(3, 'f9545f5a91c33c787ee764e4cae139f5', 0.072, 0.274, 0.111, 0.231, 0.313, '2023-10-23 21:20:29', '2023-10-23 21:20:29'),
(4, 'fe739de2f7e30251589424f4b7cc3eb3', 0.102, 0.185, 0.212, 0.288, 0.212, '2023-10-23 21:21:44', '2023-10-23 21:21:44'),
(5, '6b3a9c6bb403aa67eda6a08ebd0fe7b5', 0.285, 0.137, 0.21, 0.184, 0.184, '2023-10-23 21:25:17', '2023-10-23 21:25:17'),
(6, 'da5d1036ec7ad1dfa5c673609a7c59fb', 0.151, 0.151, 0.233, 0.233, 0.233, '2023-10-23 21:27:53', '2023-10-23 21:27:53'),
(7, '1940c35f9f671aad48fe92c982083077', 0.275, 0.203, 0.203, 0.274, 0.045, '2023-10-23 21:30:02', '2023-10-23 21:30:02'),
(8, 'df73cb5007d1ef73fdee58fe4c6fc562', 0.629, 0.173, 0.089, 0.087, 0.022, '2023-11-24 10:18:20', '2023-11-24 10:18:20'),
(9, '854d2386df469564e841f621e02e8a93', 0.013, 0.026, 0.004, 0.001, 0.955, '2023-11-24 10:22:05', '2023-11-24 10:22:05'),
(10, '676f25ac97ccab62480ec84e66f5e72e', 0.037, 0.461, 0.057, 0.284, 0.161, '2023-11-24 10:41:54', '2023-11-24 10:41:54'),
(11, '8ab3dc01fe9422965bc16d3e2d7dbb43', 0.145, 0.135, 0.195, 0.197, 0.328, '2023-12-05 13:16:14', '2023-12-05 13:16:14'),
(12, '7671a05fdba81c65a1ba946734644d58', 0.055, 0.231, 0.291, 0.313, 0.111, '2023-12-13 15:01:50', '2023-12-13 15:01:50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_alternatif`
--
ALTER TABLE `tbl_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indeks untuk tabel `tbl_hasil_rekomendasi`
--
ALTER TABLE `tbl_hasil_rekomendasi`
  ADD PRIMARY KEY (`id_hasil_rekomedasi`);

--
-- Indeks untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `tbl_nilai_alternatif`
--
ALTER TABLE `tbl_nilai_alternatif`
  ADD PRIMARY KEY (`id_nilai_alternatif`);

--
-- Indeks untuk tabel `tbl_nilai_bobot`
--
ALTER TABLE `tbl_nilai_bobot`
  ADD PRIMARY KEY (`id_nilai_bobot`);

--
-- Indeks untuk tabel `tbl_nilai_normalisasi`
--
ALTER TABLE `tbl_nilai_normalisasi`
  ADD PRIMARY KEY (`id_nilai_normalisasi`);

--
-- Indeks untuk tabel `tbl_nilai_perangkingan`
--
ALTER TABLE `tbl_nilai_perangkingan`
  ADD PRIMARY KEY (`id_nilai_perangkingan`);

--
-- Indeks untuk tabel `tbl_normalisasi_bobot`
--
ALTER TABLE `tbl_normalisasi_bobot`
  ADD PRIMARY KEY (`id_normalisasi_bobot`);

--
-- Indeks untuk tabel `tbl_rekomendasi_karyawan`
--
ALTER TABLE `tbl_rekomendasi_karyawan`
  ADD PRIMARY KEY (`id_rekomendasi_karyawan`);

--
-- Indeks untuk tabel `tbl_sub_kriteria`
--
ALTER TABLE `tbl_sub_kriteria`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indeks untuk tabel `tbl_toko`
--
ALTER TABLE `tbl_toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indeks untuk tabel `tbl_vektor_s`
--
ALTER TABLE `tbl_vektor_s`
  ADD PRIMARY KEY (`id_vektor_s`);

--
-- Indeks untuk tabel `tbl_vektor_v`
--
ALTER TABLE `tbl_vektor_v`
  ADD PRIMARY KEY (`id_vektor_v`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_alternatif`
--
ALTER TABLE `tbl_alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT untuk tabel `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
  MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_hasil_rekomendasi`
--
ALTER TABLE `tbl_hasil_rekomendasi`
  MODIFY `id_hasil_rekomedasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_nilai_alternatif`
--
ALTER TABLE `tbl_nilai_alternatif`
  MODIFY `id_nilai_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_nilai_bobot`
--
ALTER TABLE `tbl_nilai_bobot`
  MODIFY `id_nilai_bobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_nilai_normalisasi`
--
ALTER TABLE `tbl_nilai_normalisasi`
  MODIFY `id_nilai_normalisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_nilai_perangkingan`
--
ALTER TABLE `tbl_nilai_perangkingan`
  MODIFY `id_nilai_perangkingan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_normalisasi_bobot`
--
ALTER TABLE `tbl_normalisasi_bobot`
  MODIFY `id_normalisasi_bobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_rekomendasi_karyawan`
--
ALTER TABLE `tbl_rekomendasi_karyawan`
  MODIFY `id_rekomendasi_karyawan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_sub_kriteria`
--
ALTER TABLE `tbl_sub_kriteria`
  MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_toko`
--
ALTER TABLE `tbl_toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_vektor_s`
--
ALTER TABLE `tbl_vektor_s`
  MODIFY `id_vektor_s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_vektor_v`
--
ALTER TABLE `tbl_vektor_v`
  MODIFY `id_vektor_v` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
