-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Apr 2023 pada 09.45
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
-- Struktur dari tabel `tbl_bobot`
--

CREATE TABLE `tbl_bobot` (
  `id_bobot` int(11) NOT NULL,
  `nama_bobot` varchar(50) NOT NULL,
  `nilai` int(5) NOT NULL,
  `delete_at` int(11) NOT NULL COMMENT '0=Active, 1=Non Active',
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_bobot`
--

INSERT INTO `tbl_bobot` (`id_bobot`, `nama_bobot`, `nilai`, `delete_at`, `created_time`, `update_time`) VALUES
(1, 'Kehadiran1', 0, 0, '2023-03-30 12:47:48', '2023-03-30 05:47:48'),
(2, 'Kedisplinan', 0, 0, '2023-03-30 12:49:47', '2023-03-30 05:49:47'),
(3, 'Tanggung Jawab', 0, 0, '2023-03-30 12:49:47', '2023-03-30 05:49:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_tanggal_lahir` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `umur` varchar(20) NOT NULL,
  `awal_kerja` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `delete_at` int(11) NOT NULL COMMENT '0=active, 1=non active',
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `update_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id_karyawan`, `username`, `password`, `nama_lengkap`, `tempat_tanggal_lahir`, `level`, `umur`, `awal_kerja`, `alamat`, `delete_at`, `created_time`, `update_time`) VALUES
(1, 'Boy Lase1', '123', 'Yamamoni Lase', '01 januari 2000', 'USER', '23 tahun', 'juni 2018', 'NIAS', 0, '2023-03-28 14:37:22', '2023-03-28 14:37:22'),
(2, 'Arles Zai', '123', 'Arles Jaya Zai', '12 desember 1999', 'USER', '24 Tahun', '2018', 'NIAS', 0, '2023-03-29 21:26:35', '2023-03-29 21:26:35'),
(3, 'Luther', '123', 'Lutherman Hulu', '05 maret 2021', 'USER', '22 tahun', 'januari 2019', 'NIAS', 0, '2023-03-29 21:32:27', '2023-03-29 21:32:27');

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

--
-- Dumping data untuk tabel `tbl_rekomendasi_karyawan`
--

INSERT INTO `tbl_rekomendasi_karyawan` (`id_rekomendasi_karyawan`, `id_karyawan`, `periode_bulan`, `periode_tahun`, `delete_at`, `created_time`, `update_time`) VALUES
(1, 1, '08', 2018, 0, '2023-04-05 12:44:45', '2023-04-05 12:44:45'),
(2, 2, '08', 2019, 0, '2023-04-05 12:44:45', '2023-04-05 12:44:45'),
(3, 3, '08', 2020, 0, '2023-04-05 12:44:45', '2023-04-05 12:44:45');

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
(1, 'Toko Pengasinan', 'Konter', 'Pengasinan', 0, '2023-03-28 14:34:38', '2023-03-28 14:34:38'),
(2, 'Toko Cinangka', 'Konter', 'Cinangka Sawangan', 0, '2023-03-28 14:34:38', '2023-03-28 14:34:38'),
(3, 'Sasmita', 'Konter & Fotocopy', 'Pamulang', 0, '2023-03-28 14:35:20', '2023-03-28 14:35:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_users` int(11) NOT NULL,
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

INSERT INTO `tbl_users` (`id_users`, `nama`, `umur`, `status`, `tgl_lahir`, `alamat`, `delete_at`, `created_time`, `update_time`) VALUES
(1, '', '23 tahun', '', '0000-00-00', 'NIAS', 0, '2023-03-21 22:08:39', '2023-03-21 22:08:39'),
(2, 'Susanti', '20 Tahun', 'Pelajar', '2003-02-03', 'NIAS Sumatera Utara', 0, '2023-03-21 22:40:55', '2023-03-21 22:40:55'),
(3, 'Araman Suryadinata', '16 Tahun', 'Pelajar', '2017-12-10', 'Jl. Pengasinan', 0, '2023-03-21 22:40:55', '2023-03-21 22:40:55'),
(4, 'Innel Gea', '23 Tahun', 'Pelajar', '2000-05-05', 'NIAS, Sumatera Utara', 0, '2023-03-21 22:42:38', '2023-03-21 22:42:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indeks untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `tbl_rekomendasi_karyawan`
--
ALTER TABLE `tbl_rekomendasi_karyawan`
  ADD PRIMARY KEY (`id_rekomendasi_karyawan`);

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
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
  MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_rekomendasi_karyawan`
--
ALTER TABLE `tbl_rekomendasi_karyawan`
  MODIFY `id_rekomendasi_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_toko`
--
ALTER TABLE `tbl_toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
