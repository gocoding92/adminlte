-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 01:01 PM
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
  `id_jenis_penyakit` varchar(250) NOT NULL,
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

INSERT INTO `tbl_diagnosa` (`id_diagnosa`, `id_jenis_penyakit`, `kultur_teknis`, `fisik_mekanis`, `kimiawi`, `hayati`, `delete_at`, `created_time`, `updated_time`) VALUES
(7, '2', 'Penggunaan benih sehat, penggiliran tanaman, perbaikan drainase dan  sanitasi terhadap lingkungan. ', 'Mengeradikasi tanaman terserang dengan cara dicabut dan dimusnahkan', 'Apabila tetap tidak dapat menekan serangan penyakit, maka dapat  menggunakan fungisida efektif yang telah terdaftar dan mendapatkan izin  dari Menteri Pertanian, seperti : Saco P dan Anaconda 50 WP.', 'Pemanfaatan agens antagonis Trichoderma spp. Dan Gliocladium spp.  yang diaplikasikan pada kantong pesemaian sebanyak 5 gram per kantong, 3  hari sebelum penanaman benih atau bersamaan dengan penanaman benih. ', 0, '2023-07-24 16:03:14', '2023-07-24 16:03:14'),
(8, '7', 'Pergiliran tanaman, perbaikan aerasi tanah dengan pembuatan guludan  setinggi 40 – 50 cm, penurunan pH tanah dengan memberi belerang,  penggunaan benih sehat serta sanitasi dengan mengeradikasi tanaman  terserang dan sisa tanaman sakit dengan cara dicabut dan dimusnahkan.', '', 'Apabila tetap tidak dapat menekan serangan penyakit, maka dapat  menggunakan bakterisida efektif yang telah terdaftar dan mendapatkan izin  dari Menteri Pertanian, seperti : Bactocyn 150 L dan Stamycin 20 WP.', 'a. Pemanfaatan agens antagonis Trichoderma spp. dan Gliocladium spp.  yang diaplikasikan pada kantong pesemaian sebanyak 5 gram per kantong, 3 hari sebelum penanaman benih atau bersamaan dengan  penanaman benih.  b. Pemanfaatan mikroba antagonis Pseudomonas fluorescens. ', 0, '2023-07-24 16:04:47', '2023-07-24 16:04:47'),
(9, 'Bercak Daun Cercospora (Cercospora capsici Heald et Wolf)	', 'a. Pemilihan bibit yang bebas patogen, perbaikan drainase,dan sanitasi  terhadap lingkungan.  b. Pola tanam : - menanam pada musim kemarau  -  pergiliran tanaman dengan tanaman non Solanaceae.', 'Mengeradikasi tanaman terserang dengan cara dicabut dan dimusnahkan. ', 'Apabila tetap tidak dapat menekan serangan penyakit, maka dapat  menggunakan fungisida efektif yang telah terdaftar dan mendapatkan izin  dari Menteri Pertanian, seperti : Acrobat 50 WP, Broconil 75 WP, Daconil  500 F, Fitozeb 80 WP, Greenville 80 WP, Haticol 70 WP, Scorpio 250 EC,  Velimex 80 WP dan lain-lain. ', '', 0, '2023-07-24 16:08:33', '2023-07-24 16:08:33'),
(10, 'Antraknosa/Penyakit Patek (Colletotrichum capsici (Syd.) Bult. Et. Bisby)	', 'a. Penggunaan benih sehat, perendaman benih dalam air panas ± 55°C  selama 30 menit.  b. Pola tanam : - menanam pada musim kemarau  -  pergiliran tanaman dengan tanaman non solanaceae.  c. Perbaikan drainase serta sanitasi dan pemusnahan gulma dan buah cabai  yang terserang penyakit. ', '', 'Apabila tetap tidak dapat menekan serangan penyakit dan gejala  serangan semakin meluas, maka dapat menggunakan fungisida efektif yang  telah terdaftar dan mendapatkan izin dari Menteri Pertanian, seperti : Agronil  75 WP, Belvo 80 WDG, Conasol 50 SC, Daconil 500 F, Judo 70 WP,  Promaneb 80 WP, Topsin M 500 F, Velimex 80 WP dan lain-lain.', 'a. Pemanfaatan agens antagonis Trichoderma spp. dan Gliocladium spp.  yang diaplikasikan pada kantong pesemaian sebanyak 5 gram per kantong, 3 hari sebelum penanaman benih atau bersamaan dengan  penanaman benih.  b. Pemanfaatan mikroba antagonis Pseudomonas fluorescens dan Bacillus  subtilis yang diaplikasikan mulai fase pembuangan hingga 2 minggu  setelah pembuangan dengan selang waktu 1 minggu. ', 0, '2023-07-24 16:09:32', '2023-07-24 16:09:32'),
(12, 'Busuk Buah (Fruit rot)	', 'a. Pemilihan bibit yang bebas patogen, perbaikan drainase,dan sanitasi  terhadap lingkungan.  b. Pola tanam : - menanam pada musim kemarau  -  pergiliran tanaman dengan tanaman non Solanaceae. ', 'Mengeradikasi tanaman terserang dengan cara dicabut dan dimusnahkan. ', 'Apabila tetap tidak dapat menekan serangan penyakit, maka dapat  menggunakan fungisida efektif yang telah terdaftar dan mendapatkan izin  dari Menteri Pertanian, seperti : Acrobat 50 WP, Broconil 75 WP, Daconil  500 F, Fitozeb 80 WP, Greenville 80 WP, Haticol 70 WP, Scorpio 250 EC,  Velimex 80 WP dan lain-lain', '', 0, '2023-07-24 16:15:22', '2023-07-24 16:15:22'),
(16, 'Virus Mosaik', 'a. Menggunakan bibit tanaman yang sehat (tidak mengandung virus) atau  bukan berasal dari daerah terserang.  b. Pemupukan yang berimbang, yaitu 150 – 200 kg Urea, 450 – 500 kg Za,  100 – 150 kg TSP, 100 – 150 kg KCL, 20 – 30 tonpupuk organik per  hektar.                                                              c. Imunisasi tanaman cabai dengan virus CMV yang dilemahkan dengan  satelit virus CARNA-5 dapat menahan serangan CMV yang lebih ganas  d. Sanitasi terhadap lingkungan, terutama mengendalikan gulma yang  dapat menjadi tanaman inang virus. ', 'a. Penggunaan mulsa plastik perak di dataran tinggi dan jerami didataran  rendah mengurangi infestasi serangga afid yang berperan sebagai vektor  virus.  b. Pemusnahan terhadap tanaman muda yang terinfeksi virus. ', '', '', 0, '2023-07-24 16:20:35', '2023-07-24 16:20:35'),
(17, 'Virus Kuning', 'a. Menggunakan bibit tanaman yang sehat (tidak mengandung virus) atau  bukan berasal dari daerah terserang.  b. Melakukan rotasi tanaman dengan tanaman bukan inang virus (terutama  bukan dari famili Solanaceae seperti tomat, cabai, kentang, tembakau  dan famili Cucurbitaceae seperti mentimun).  c. Melakukan sanitasi lingkungan, terutama mengendalikan tumbuhan  pengganggu/gulma berdaun lebar dari jenis babadotan, gulma bunga  kancing dan ciplukan yang dapat menjadi tanaman inang virus. ', 'a. Penggunaan mulsa perak di dataran tinggi dan jerami didatarn rendah  mengurangi infestasi serangga pengisap daun.  b. Eradikasi tanaman sakit, yaitu tanaman yang menunjukkan gejala segera  dicabut dan dimusnahkan supaya tidak menjadi sumber penularan ke  tanaman lain yang sehat. ', '', '', 0, '2023-07-24 16:24:11', '2023-07-24 16:24:11'),
(18, 'Virus Kuning', 'a. Menggunakan bibit tanaman yang sehat (tidak mengandung virus) atau  bukan dari daerah terserang. b. Melakukan rotasi / pergiliran tanaman dengan tanaman bukan inang virus  (terutama bukan famili Solanaceae, seperti : tomat, cabai, kentang  tembakau dan famili Cucurbitaceae seperti : mentimun).  c. Melakukan sanitasi lingkungan, terutama mengendalikan tanaman  pengganggu/gulma. ', 'a. Penggunaan mulsa plastik perak di dataran tinggi dan jerami didataran  rendah mengurangi infestasi serangga afid yang berperan sebagai vektor  virus.  b. Eradikasi tanaman sakit, yaitu tanaman yang menunjukkan gejala segera  dicabut dan dimusnahkan. ', '', '', 0, '2023-07-24 16:25:11', '2023-07-24 16:25:11'),
(19, 'Tungau Kuning (Polyphagotarsonemus latus Banks) ', 'Sanitasi terhadap lingkungan.', 'Mengeradikasi bagian tanaman terserang dan memusnahkannya. ', 'Apabila berdasarkan hasil pengamatan tanaman contoh, serangan  mencapai lebih atau sama dengan 15 % per tanaman contoh, maka dapat digunakan pestisida efektif yang tedaftar dan berdasarkan izin dari Menteri Pertanian untuk menekan populasi, seperti :  Apollo 500 SC, Mesurol 50 WP, Mitisun 570 WP, Pegasus 500 EC,Terminator 135 EC dan Tokuthion 500 EC. ', 'Apabila berdasarkan hasil pengamatan tanaman contoh, serangan  mencapai lebih atau sama dengan 15 % per tanaman contoh, maka dapat digunakan pestisida efektif yang tedaftar dan berdasarkan izin dari Menteri Pertanian untuk menekan populasi, seperti :  Apollo 500 SC, Mesurol 50 WP, Mitisun 570 WP, Pegasus 500 EC,Terminator 135 EC dan Tokuthion 500 EC. ', 0, '2023-07-24 16:26:05', '2023-07-24 16:26:05'),
(20, 'Trips (Thrips parvispinus Karny)	', 'Membakar sisa jerami/mulsa yang dipakai selama pertanaman, serta  melakukan sanitasi dan pemusnahan bagian tanaman yang terserang', 'a. Penggunaan mulsa plastik yang dikombinasikan dengan tanaman  perangkap caisin dapat menunda serangan yang biasanya terjadi pada  umur 14 hari setelah tanam.  b. Penggunaan perangkap likat warna biru, putih atau kuning sebanyak 40  buah per hektar atau 2 buah per 500 m² dipasang ditengah pertanaman  sejak tanaman berumur 2 minggu. Setiap minggu perangkap diolesi  dengan oli atau perekat. Perangkap likat dipasang dengan ketinggian  sedikit diatas tajuk tanaman. ', 'Apabila berdasarkan hasil pengamatan tanaman contoh, serangan  mencapai lebih atau sama dengan 15 % per tanaman contoh, maka dapat  digunakan pestisida efektif yang tedaftar dan berdasarkan izin dari Menteri  Pertanian untuk menekan populasi, seperti : Abuki 50 SL, Agrimec 18 EC,  Amirid 200 SL, Anwavin 500 EC, Delouse 200 SL, Demolish 18 EC,    Lavista 200 EC, Regent 50 SC dan Sidamec 20 EC dan lain-lain.  ', 'Pemanfaatan musuh alami predator Coccinella repanda, Amblysius  cucumeris, Orius minutes, Arachnidea dan patogen Entomophtora SP', 0, '2023-07-24 16:27:04', '2023-07-24 16:27:04'),
(21, 'Kutu Daun Persik (Myzus persicae Sulz.)	', 'Sanitasi dan pemusnahan gulma dan bagian tanaman yang terserang dengan  cara dibakar. ', 'a. Menggunakan kain kassa / kelambu baik di bedengan pesemaian maupun  di lapangan.  b. Penggunaan perangkap air berwarna kuning sebanyak 40 buah per hektar  atau 2 buah per 500 m² dipasang ditengah pertanaman sejak tanaman  berumur 2 minggu.', 'Apabila berdasarkan hasil tanaman contoh, jumlah kutu daun lebih dari  7 ekor per 10 daun contoh atau serangan mencapai lebih atau sama dengan  15 % pertanaman contoh, maka dapat menggunakan insektisida yang efektif  yang telah terdaftar dan mendapatkan izin dari Menteri Pertanian, seperti :  Marshal 200 EC, Padan 50 SP, Tetrin 30 EC dan Voltage 560 EC. ', 'Pemanfaatan musuh alami parasitoid Aphidius sp., predator kumbang  Coccinella transversalis, Menochillus sexmaculata, Chrysopa sp., larva  Syrphidae, Harmonia octomaculata, Microphis lineate, Veranius sp. Dan  patogen Entomophthora sp., Verticillium sp. ', 0, '2023-07-24 16:32:59', '2023-07-24 16:32:59'),
(22, 'Kutu Kebul (Bemisia tabaci)	', 'a. Menanam pinggiran lahan dengan tanaman jagung atau bunga matahari  sebagai barier dan memperbanyak popolasi agens hayati.  b. Pergiliran (rotasi) tanaman dengan tanaman bukan inang virus (terutama  bukan famili Solanaceae seperti tomat, cabai, kentang dan Cucurbitaceae  seperti mentimun).                          c. Sanitasi lingkungan, terutama mengendalikan gulma daun lebar  babadotan dan ciplukan yang dapat menjadi tanaman inang virus.  d. Tumpang sari antara tanaman sayuran, cabai dengan tagetes untuk  mengurangi resiko serangan. ', 'Pemasangan perangkap likat berwarna kuning (40 buah per ha), pemasangan  kelambu di pembibitan sampai di pertanaman terutama saat populasi tinggi /  musim kemarau dan sisa tanaman terserang dikumpulkan dan dibakar. ', 'Apabila tetap tidak dapat menekan populasi hama, maka dapat  menggunakan insektisida efektif yang telah terdaftar dan mendapatkan izin  dari Menteri Pertanian, seperti : Actara 25 WG dan Pegasus 500 SC. ', 'a. Kumbang predator Menochilus sexmaculatus (Coccinelidae), mampu  memangsa 200 – 400 ekor nimfa kutu kebul.  b. Tabuhan parasitoid nimfa Encarcia formosa serangga betinanya mampu  menghasilkan telur sebanyak 100 – 200 butir, untuk tanaman cabai 1 ekor  E. formosa setiap 4 tanaman/minggu dilakukan selama 8 – 10 minggu.  c. Untuk meningkatkan musuh alami dilapangan diperlukan pelepasan  parasitoid dan predator secara berkala', 0, '2023-07-24 16:33:56', '2023-07-24 16:33:56'),
(23, 'Ulat Grayak (Spodoptera litura F.)	', 'Sanitasi lahan dari gulma dan melakukan pengolahan lahan yang intensif. ', 'a. Pembutitan, mengumpulkan larva atau pupa dan bagian tanaman yang  terserang kemudian memusnahkannya.  b. Penggunaan perangkap feromonoid seks untuk ngengat sebanyak 40 buah  per hektar atau 2 buah per 500 m² dipasang ditengah pertanaman sejak  tanaman berumur 2 minggu. ', 'Apabila berdasarkan hasi pengamatan tanaman contoh, serangan  mencapai lebih atau sama dengan 12,5 % per tanaman contoh, maka dapat  menggunakan insektisida efektif yang telah terdaftar dan mendapat izin dari Menteri Pertanian untuk menekan populasi hama, seperti :  Actan 400 SL,  Amonite 25 EC, Barrier 20 SP, Cucak Rowo 25 EC, Daitona 400 EC, Gladiator 25 EC, Matador 25 EC, Prozinon 600 EC, Trajet 25 EC, Veto 650 EC dan lain-lain. ', 'Pemanfaatan musuh alami pathogen Sl-NPV (Spodoptera litura –  Nuclear Polyhedrosis Virus), predator Sycanus sp., Andrallus spinideus,  Selonepnis geminada, parasitoid Apanteles sp., Telenomus spodopterae,  Microplistis similis, Peribeae sp. ', 0, '2023-07-24 16:34:42', '2023-07-24 16:34:42'),
(24, 'Ulat Buah (Helicoverpa armigera Hubner)	', 'Sanitasi lahan dari gulma serta sanitasi terhadap buah yang  terserang/berlubang untuk dikumpulkan dan dimusnahkan. ', '', 'Apabila tetap tidak dapat menekan populasi hama, maka dapat  menggunakan insektisida efektif yang telah terdaftar dan mendapatkan izin  dari Menteri Pertanian, seperti : Bima 10 WP dan Proaxis 15 SC.', 'Memanfaatkan musuh alami yang dapat menyerang ulat buah, antara  lain : parasitoid telur Trichogramma nana, parasitoid larva  Diadegma  argenteopilosa, cendawan Metharrhizium dan nematode parasit serangga  (“Entomophagous nematodes”). ', 0, '2023-07-24 16:35:18', '2023-07-24 16:35:18'),
(25, 'Lalat Buah (Bactrocera sp)	', 'a. Pencacahan (pembongkaran) tanah sekitar tanaman agar kepompong yang  berada di dalam tanah terkena sinar matahari, terganggu hidupnya dan  akhirnya mati.  b. Sanitasi buah yang terserang baik yang gugur maupun yang masih berada  dipohon, dikumpulkan dan dimusnahkan dengan cara dibakar atau  dibenamkan dalam tanah.', 'Penggunaan perangkap dengan atraktan Metil Eugenol (ME) atau  minyak Melaleuca brachteata (MMB) dengan dosis 1 ml / perangkap  sebanyak 40 buah per hektar atau 2 buah per 500 m² yang dipasang ditengah  partanaman sejak tanaman berumur 2 minggu. Setiap 2 minggu atraktan  ditambah. Perangkap dipasang dengan ketinggian ± 50 cm (sedikit diatas  tajuk tanaman). ', 'Apabila tetap tidak dapat menekan populasi hama, maka dapat  menggunakan insektisida efektif yang telah terdaftar dan mendapatkan izin  dari Menteri Pertanian, seperti : Bima 10 WP dan Bestox 50 EC. ', 'Pemanfaatan musuh alami parasitoid famili Braconidae (Biosteres sp.,  Opius sp.), predator famili Formicidae (semut), Arachnidae (laba-laba),  Staphylinidae (kumbang), Dermaptera (cecopet). ', 0, '2023-07-24 16:35:56', '2023-07-24 16:35:56'),
(30, '1', '1', '2', '3', '1', 1, '2023-08-15 17:59:01', '2023-08-15 17:59:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `id_gejala` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `id_jenis_tanaman` int(11) NOT NULL,
  `gejala` varchar(250) NOT NULL,
  `delete_at` int(11) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`id_gejala`, `id_penyakit`, `id_jenis_tanaman`, `gejala`, `delete_at`, `created_time`, `updated_time`) VALUES
(1, 2, 17, 'Daun Menguning', 0, '2023-07-17 16:00:24', '2023-07-17 16:00:24'),
(2, 2, 16, 'Warna jaringan akar coklat', 0, '2023-07-17 16:00:41', '2023-07-17 16:00:41'),
(3, 2, 18, 'Warna jaringan batang coklat', 0, '2023-07-17 16:00:51', '2023-07-17 16:00:51'),
(4, 2, 16, 'Akar membusuk', 0, '2023-07-17 16:00:57', '2023-07-17 16:00:57'),
(5, 2, 19, 'Buah kecil', 0, '2023-07-17 16:02:10', '2023-07-17 16:02:10'),
(6, 2, 19, 'Buah Gugur', 0, '2023-07-17 16:03:05', '2023-07-17 16:03:05'),
(7, 3, 17, 'Daun Layu', 0, '2023-07-17 16:27:45', '2023-07-17 16:27:45'),
(8, 3, 18, 'Jaringan sekuler bawah batang kecoklatan', 0, '2023-07-17 16:27:56', '2023-07-17 16:27:56'),
(9, 3, 16, 'Akar menjadi Kecoklatan', 0, '2023-07-17 16:28:11', '2023-07-17 16:28:11'),
(10, 3, 19, 'Warna buah kekuningan', 0, '2023-07-17 16:28:20', '2023-07-17 16:28:20'),
(11, 3, 19, 'Buah membusuk', 0, '2023-07-17 16:28:30', '2023-07-17 16:28:30'),
(12, 1, 17, 'Terdapat bercak bulat dan kering pada daun', 0, '2023-07-17 16:28:40', '2023-07-17 16:28:40'),
(13, 1, 17, 'Bercak pada daun berwarna pucat sampai putih', 0, '2023-07-17 16:28:50', '2023-07-17 16:28:50'),
(14, 1, 17, 'Bercak pada daun menyerupai mata kodok (frogeyes) ', 0, '2023-07-17 16:29:00', '2023-07-17 16:29:00'),
(15, 1, 18, 'Terdapat bercak pada batang ', 0, '2023-07-17 16:29:11', '2023-07-17 16:29:11'),
(16, 4, 19, 'Bercak kecil coklat kehitaman pada buah', 0, '2023-07-17 16:29:24', '2023-07-17 16:29:24'),
(17, 4, 19, 'Buah keriput', 0, '2023-07-17 16:29:34', '2023-07-17 16:29:34'),
(18, 4, 19, 'Warna kulit buah seperti jerami padi', 0, '2023-07-17 16:29:50', '2023-07-17 16:29:50'),
(19, 5, 19, 'Terdapat bercak kecil kebasah-basahan pada buah ', 0, '2023-07-17 16:30:00', '2023-07-17 16:30:00'),
(20, 5, 19, 'Buah mengering', 0, '2023-07-17 16:30:11', '2023-07-17 16:30:11'),
(21, 5, 20, 'Biji yang  terserang menjadi coklat', 0, '2023-07-17 16:30:22', '2023-07-17 16:30:22'),
(22, 5, 20, 'biji yang terserang menjadi keriput ', 0, '2023-07-17 16:30:31', '2023-07-17 16:30:31'),
(23, 6, 17, 'Daun melengkung ke bawah ', 0, '2023-07-17 16:31:38', '2023-07-17 16:31:38'),
(24, 6, 17, 'Daun berwarna hijau pekat ', 0, '2023-07-17 16:31:49', '2023-07-17 16:31:49'),
(25, 6, 17, 'Permukaan daun tidak rata', 0, '2023-07-17 16:31:58', '2023-07-17 16:31:58'),
(26, 6, 17, 'Daun terkesan regas seperti kerupuk ', 0, '2023-07-17 16:32:08', '2023-07-17 16:32:08'),
(27, 6, 17, 'Daun mati', 0, '2023-07-17 16:32:23', '2023-07-17 16:32:23'),
(28, 6, 21, 'Bunga dan Bakal buah berguguran', 0, '2023-07-17 16:32:45', '2023-07-17 16:32:45'),
(29, 7, 17, 'Warna daun belang ', 0, '2023-07-17 16:32:55', '2023-07-17 16:32:55'),
(30, 7, 17, 'Daun cekung ', 0, '2023-07-17 16:33:03', '2023-07-17 16:33:03'),
(31, 7, 17, 'Daun mengeriting ', 0, '2023-07-17 16:33:14', '2023-07-17 16:33:14'),
(32, 7, 17, 'Daun memanjang ', 0, '2023-07-17 16:33:21', '2023-07-17 16:33:21'),
(33, 7, 17, 'Bentuk daun menyempit', 0, '2023-07-17 16:33:30', '2023-07-17 16:33:30'),
(34, 7, 18, ' pertumbuhan tanaman terhambat ', 0, '2023-07-17 16:33:38', '2023-07-17 16:33:38'),
(35, 8, 17, 'Helai daun mengalami  “vein clearing”', 0, '2023-07-17 16:33:48', '2023-07-17 16:33:48'),
(36, 8, 17, 'Pucuk daun berwarna kuning jelas', 0, '2023-07-17 16:33:56', '2023-07-17 16:33:56'),
(37, 8, 17, 'tulang daun menebal', 0, '2023-07-17 16:34:12', '2023-07-17 16:34:12'),
(38, 8, 17, 'Daun menggulung keatas', 0, '2023-07-17 16:34:23', '2023-07-17 16:34:23'),
(39, 8, 17, 'Daun menyusut', 0, '2023-07-17 16:34:32', '2023-07-17 16:34:32'),
(40, 9, 17, 'Warna daun berubah menjadi warna tembaga/kecoklatan', 0, '2023-07-17 16:34:43', '2023-07-17 16:34:43'),
(41, 9, 17, 'Daun terpuntir', 0, '2023-07-17 16:34:53', '2023-07-17 16:34:53'),
(42, 9, 21, 'Tunas dan bunga gugur ', 0, '2023-07-17 16:35:02', '2023-07-17 16:35:02'),
(43, 10, 17, 'Permukaan bawah daun berwarna keperak-perakan', 0, '2023-07-17 16:35:11', '2023-07-17 16:35:11'),
(44, 10, 17, ' Bercak daun berwarna putih', 0, '2023-07-17 16:35:21', '2023-07-17 16:35:21'),
(45, 10, 17, 'Daun mengering ', 0, '2023-07-17 16:35:28', '2023-07-17 16:35:28'),
(46, 10, 17, 'Daun keriput ', 0, '2023-07-17 16:35:40', '2023-07-17 16:35:40'),
(47, 10, 17, 'Daun timbul benjolan seperti tumor ', 0, '2023-07-17 16:35:49', '2023-07-17 16:35:49'),
(48, 10, 18, 'Pucuk tanaman mati', 0, '2023-07-17 16:35:56', '2023-07-17 16:35:56'),
(49, 11, 18, 'Tanaman menjadi keriput ', 0, '2023-07-17 16:36:10', '2023-07-17 16:36:10'),
(50, 13, 17, 'Warna daun kekuningan', 0, '2023-07-17 16:36:19', '2023-07-17 16:36:19'),
(51, 12, 17, 'Sel-sel dan jaringan daun rusak daerah', 0, '2023-07-17 16:36:33', '2023-07-17 16:36:33'),
(52, 12, 17, 'Bercak nekrotik pada daun ', 0, '2023-07-17 16:36:47', '2023-07-17 16:36:47'),
(53, 13, 17, 'Daun transparan', 0, '2023-07-17 16:36:55', '2023-07-17 16:36:55'),
(54, 13, 19, 'Timbul lubang yang tidak beraturan pada buah ', 0, '2023-07-17 16:37:03', '2023-07-17 16:37:03'),
(55, 13, 17, 'Daun rusak ', 0, '2023-07-17 16:37:14', '2023-07-17 16:37:14'),
(56, 13, 18, 'Tanaman gundul', 0, '2023-07-17 16:37:25', '2023-07-17 16:37:25'),
(57, 14, 19, 'Buah berlubang ', 0, '2023-07-17 16:37:37', '2023-07-17 16:37:37'),
(58, 15, 19, 'Terdapat titik coklat kehitaman pada pangkal buah', 0, '2023-07-17 16:37:47', '2023-07-17 16:37:47'),
(59, 15, 19, 'Pangkal buah berlubang ', 0, '2023-07-17 16:39:32', '2023-07-17 16:39:32'),
(60, 15, 19, ' Buah jatuh ke tanah ', 0, '2023-07-17 16:39:40', '2023-07-17 16:39:40'),
(61, 0, 17, 'Daun menjadi kering dan warna daun seperti terbakar', 0, '2023-07-17 16:40:02', '2023-07-17 16:40:02'),
(62, 0, 17, ' Bercak daun berwarna putih atau kelabu ', 1, '2023-07-17 16:40:13', '2023-07-17 16:40:13'),
(63, 0, 17, 'Bercak daun memebentuk zona berwarna ungu jika sudah parah', 0, '2023-07-17 16:40:24', '2023-07-17 16:40:24'),
(64, 0, 17, 'Ujung daun kering ', 1, '2023-07-17 16:40:33', '2023-07-17 16:40:33'),
(65, 9, 17, 'Daun menebal', 0, '2023-07-17 16:41:32', '2023-07-17 16:41:32'),
(66, 1, 16, '123', 1, '2023-07-24 17:56:48', '2023-07-24 17:56:48'),
(67, 1, 17, 'Daun Menguning', 1, '2023-07-25 16:41:09', '2023-07-25 16:41:09'),
(68, 0, 16, 'peler', 1, '2023-07-26 15:25:00', '2023-07-26 15:25:00'),
(69, 1, 20, 'bercak berwarna hitam atau cokelat pada bagian batang, daun', 1, '2023-08-07 16:04:33', '2023-08-07 16:04:33'),
(70, 15, 17, 'Gejala serangan awal dari serangan penyakit 1', 1, '2023-08-07 16:09:38', '2023-08-07 16:09:38'),
(71, 10, 17, 'Daun mengeriting ', 0, '2023-08-15 15:33:38', '2023-08-15 15:33:38'),
(72, 10, 17, 'hehehe', 0, '2023-08-15 15:34:11', '2023-08-15 15:34:11'),
(73, 11, 18, 'Tanaman Kerdil', 0, '2023-08-15 15:36:42', '2023-08-15 15:36:42');

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
(1, 'NR001', 'Bercak Daun Cercospora (Cercospora capsici Heald et Wolf)', 0, '2023-07-10 15:49:12', '2023-07-10 15:49:12'),
(2, 'NR002', 'Penyakit Layu Fusarium (Fusarium oxysporum f. sp. Melongenae Schlecht)', 0, '2023-07-17 15:51:10', '2023-07-17 15:51:10'),
(3, 'NR003', 'Layu Bakteri (Ralstonia (Pseudomonas solanacearum E.F.Sm)', 0, '2023-07-17 15:51:35', '2023-07-17 15:51:35'),
(4, 'NR004', 'Antraknosa/Penyakit Patek (Colletotrichum capsici (Syd.) Bult. Et. Bisby)', 0, '2023-07-17 15:52:25', '2023-07-17 15:52:25'),
(5, 'NR005', 'Busuk Buah (Fruit rot) ', 0, '2023-07-17 15:53:41', '2023-07-17 15:53:41'),
(6, 'NR006', 'Virus Kerupuk', 0, '2023-07-17 15:53:54', '2023-07-17 15:53:54'),
(7, 'NR007', 'Virus Mosaik', 0, '2023-07-17 15:54:11', '2023-07-17 15:54:11'),
(8, 'NR008', 'Virus Kuning', 0, '2023-07-17 15:54:45', '2023-07-17 15:54:45'),
(9, 'NR009', 'Tungau Kuning (Polyphagotarsonemus latus Banks) ', 0, '2023-07-17 15:55:01', '2023-07-17 15:55:01'),
(10, 'NR010', 'Trips (Thrips parvispinus Karny) ', 0, '2023-07-17 15:55:30', '2023-07-17 15:55:30'),
(11, 'NR011', 'Kutu Daun Persik (Myzus persicae Sulz.)', 0, '2023-07-17 15:55:47', '2023-07-17 15:55:47'),
(12, 'NR012', 'Kutu Kebul (Bemisia tabaci) ', 0, '2023-07-17 15:55:59', '2023-07-17 15:55:59'),
(13, 'NR013', 'Ulat Grayak (Spodoptera litura F.)', 0, '2023-07-17 15:56:26', '2023-07-17 15:56:26'),
(14, 'NR014', 'Ulat Buah (Helicoverpa armigera Hubner) ', 0, '2023-07-17 15:56:45', '2023-07-17 15:56:45'),
(15, 'NR015', 'Lalat Buah (Bactrocera sp)', 0, '2023-07-17 15:56:57', '2023-07-17 15:56:57');

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
(16, 'Akar', 0, '2023-07-17 16:21:25', '2023-07-17 16:21:25'),
(17, 'Daun', 0, '2023-07-17 16:21:31', '2023-07-17 16:21:31'),
(18, 'Batang', 0, '2023-07-17 16:22:20', '2023-07-17 16:22:20'),
(19, 'Buah/Umbi', 0, '2023-07-17 16:22:41', '2023-07-17 16:22:41'),
(20, 'Biji', 0, '2023-07-17 16:23:05', '2023-07-17 16:23:05'),
(21, 'Bunga', 0, '2023-07-17 16:23:59', '2023-07-17 16:23:59');

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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'Nauval Banyu Arrachman', 1, '2023-07-10 15:13:48', '2023-07-10 15:13:48'),
(2, 'Nauval_', 'Nauval_', 0, 'Nauval Banyu', 0, '2023-07-10 15:25:14', '2023-07-10 15:25:14'),
(4, 'Rania cantik', 'Rania', 4, 'Rania Priyanka', 0, '2023-07-10 15:26:38', '2023-07-10 15:26:38');

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
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tbl_jenis_penyakit`
--
ALTER TABLE `tbl_jenis_penyakit`
  MODIFY `id_jenis_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_jenis_tanaman`
--
ALTER TABLE `tbl_jenis_tanaman`
  MODIFY `id_jenis_tanaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
