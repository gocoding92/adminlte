-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2023 pada 16.29
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
(1, 'fb2546aa8802a06e48bf7fc847eda3dd', 0.399, 0.157, 0.112, 0.296, 0.037, '2023-06-20 21:03:09', '2023-06-20 21:03:09');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_vektor_v`
--
ALTER TABLE `tbl_vektor_v`
  ADD PRIMARY KEY (`id_vektor_v`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_vektor_v`
--
ALTER TABLE `tbl_vektor_v`
  MODIFY `id_vektor_v` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
