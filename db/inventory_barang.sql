-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Apr 2023 pada 09.44
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_barang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `id_jenis_barang` varchar(20) NOT NULL,
  `delete_at` int(11) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `harga`, `qty`, `deskripsi`, `id_jenis_barang`, `delete_at`, `created_time`, `updated_time`) VALUES
(1, 'Maspion Frypan 18cm 1', '9900', 200, 'Panci Serbaguna', '1', 0, '2023-03-30 12:03:52', '2023-03-30 12:03:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_barang`
--

CREATE TABLE `tbl_jenis_barang` (
  `id_jenis_barang` int(11) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL,
  `delete_at` int(11) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_jenis_barang`
--

INSERT INTO `tbl_jenis_barang` (`id_jenis_barang`, `nama_jenis`, `delete_at`, `created_time`, `updated_time`) VALUES
(1, 'Kitchen set 4', 0, '0000-00-00 00:00:00', '2023-03-30 13:01:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_log_history_barang`
--

CREATE TABLE `tbl_log_history_barang` (
  `id_log_history` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `type_barang` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `delete_at` int(11) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `update_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_log_history_barang`
--

INSERT INTO `tbl_log_history_barang` (`id_log_history`, `id_barang`, `type_barang`, `deskripsi`, `delete_at`, `created_time`, `update_time`) VALUES
(1, 1, 'Masuk', 'Kulkas Masuk 3 stock', 0, '2023-04-05 12:39:13', '2023-04-05 12:39:13'),
(2, 1, 'Keluar', 'TV Keluar 2 stock', 0, '2023-04-05 12:39:13', '2023-04-05 12:39:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `delete_at` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `delete_at`, `username`, `password`, `nama_lengkap`, `level`, `created_time`, `updated_time`) VALUES
(2, 0, 'Armans1233343242', '12320', 'Arman suryadinata wew', 'admin', '2023-03-30 13:14:34', '2023-03-30 13:14:34'),
(3, 0, 'Boy', '12312', 'Boy Lase', 'sales', '2023-04-05 13:30:29', '2023-04-05 13:30:29'),
(4, 0, 'Gibran', '12323', 'Gibran sohputro', 'sales', '2023-04-05 13:31:40', '2023-04-05 13:31:40'),
(5, 0, 'Aman', '12332', 'Maman aman', 'sales', '2023-04-05 13:32:50', '2023-04-05 13:32:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(2) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `umur` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `delete_at` int(5) NOT NULL COMMENT '0=active,1=non active',
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `umur`, `status`, `tgl_lahir`, `alamat`, `delete_at`, `created_time`, `updated_time`) VALUES
(1, 'kodir', '30 Tahun', 'Karyawan Swasta', '1993-10-22', 'Jl.Serpong Utama raya', 0, '2023-03-21 22:05:07', '2023-03-21 22:05:07'),
(2, 'syukron aje', '25 tahun', 'Karyawan Kontrak', '1998-09-23', 'Jl.Pd. Betung Raya', 0, '2023-03-21 22:30:01', '2023-03-21 22:30:01'),
(3, 'Charly van haouten', '29', 'Karyawan Lepas', '1994-02-22', 'Jl.Ciledug Raya', 0, '2023-03-21 22:32:33', '2023-03-21 22:32:33'),
(4, 'Dhea Amanda', '30 Tahun', 'Karyawan kontrak', '1993-07-23', 'Jl. Srengseng Raya', 0, '2023-03-21 22:34:06', '2023-03-21 22:34:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tbl_jenis_barang`
--
ALTER TABLE `tbl_jenis_barang`
  ADD PRIMARY KEY (`id_jenis_barang`);

--
-- Indeks untuk tabel `tbl_log_history_barang`
--
ALTER TABLE `tbl_log_history_barang`
  ADD PRIMARY KEY (`id_log_history`);

--
-- Indeks untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=811979;

--
-- AUTO_INCREMENT untuk tabel `tbl_jenis_barang`
--
ALTER TABLE `tbl_jenis_barang`
  MODIFY `id_jenis_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=811979;

--
-- AUTO_INCREMENT untuk tabel `tbl_log_history_barang`
--
ALTER TABLE `tbl_log_history_barang`
  MODIFY `id_log_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
