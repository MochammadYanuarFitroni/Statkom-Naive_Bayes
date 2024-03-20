-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jan 2021 pada 06.14
-- Versi server: 8.0.21
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalpro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datalatih`
--

CREATE TABLE `datalatih` (
  `Id` int NOT NULL,
  `Nama_Mahasiswa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `N_PMP` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `N_Ind` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `N_Ing` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `N_Mat` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Bekerja` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Organisasi` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Jarak_Rumah` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `IPK` varchar(11) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datalatih`
--

INSERT INTO `datalatih` (`Id`, `Nama_Mahasiswa`, `N_PMP`, `N_Ind`, `N_Ing`, `N_Mat`, `Bekerja`, `Organisasi`, `Jarak_Rumah`, `IPK`) VALUES
(1, 'Dadang', 'Sedang', 'Besar', 'Kecil', 'Sedang', 'Ya', 'Tidak', 'Jauh', 'Kurang'),
(7, 'Rina Nuraeni', 'Sedang', 'Cukup', 'Kecil', 'Kecil', 'Tidak', 'Tidak', 'Jauh', 'Rekomendasi'),
(14, 'Arif', 'Besar', 'Cukup', 'Besar', 'Sedang', 'Ya', 'Tidak', 'Jauh', 'Rekomendasi'),
(15, 'Gultom', 'Cukup', 'Cukup', 'Besar', 'Sedang', 'Ya', 'Tidak', 'Jauh', 'Rekomendasi'),
(16, 'eko', 'Cukup', 'Cukup', 'Besar', 'Sedang', 'Ya', 'Tidak', 'Jauh', 'Rekomendasi'),
(17, 'Bella', 'Cukup', 'Cukup', 'Sedang', 'Sedang', 'Tidak', 'Tidak', 'Jauh', 'Kurang'),
(18, 'Hartoko', 'Besar', 'Cukup', 'Besar', 'Sedang', 'Tidak', 'Ya', 'Jauh', 'Rekomendasi'),
(19, 'Rifki', 'Besar', 'Cukup', 'Sedang', 'Besar', 'Tidak', 'Ya', 'Jauh', 'Rekomendasi'),
(20, 'Adit', 'Cukup', 'Cukup', 'Besar', 'Sedang', 'Tidak', 'Ya', 'Jauh', 'Rekomendasi'),
(21, 'Joni', 'Cukup', 'Cukup', 'Sedang', 'Besar', 'Tidak', 'Ya', 'Jauh', 'Rekomendasi'),
(22, 'Yanuar', 'Kecil', 'Cukup', 'Sedang', 'Sedang', 'Tidak', 'Tidak', 'Jauh', 'Kurang'),
(23, 'Sanusi', 'Kecil', 'Cukup', 'Sedang', 'Sedang', 'Tidak', 'Tidak', 'Jauh', 'Kurang'),
(24, 'Mustafa', 'Kecil', 'Cukup', 'Sedang', 'Sedang', 'Tidak', 'Tidak', 'Jauh', 'Kurang'),
(25, 'Wahyu', 'Cukup', 'Cukup', 'Sedang', 'Sedang', 'Tidak', 'Tidak', 'Jauh', 'Kurang'),
(26, 'Faisal', 'Cukup', 'Cukup', 'Besar', 'Sedang', 'Tidak', 'Tidak', 'Jauh', 'Rekomendasi'),
(27, 'Dendy', 'Cukup', 'Cukup', 'Besar', 'Sedang', 'Tidak', 'Tidak', 'Jauh', 'Rekomendasi'),
(28, 'Raden', 'Besar', 'Cukup', 'Sedang', 'Sedang', 'Tidak', 'Tidak', 'Jauh', 'Rekomendasi'),
(29, 'Rio', 'Kecil', 'Cukup', 'Sedang', 'Sedang', 'Tidak', 'Tidak', 'Jauh', 'Kurang'),
(30, 'Alif', 'Besar', 'Cukup', 'Sedang', 'Sedang', 'Tidak', 'Tidak', 'Jauh', 'Rekomendasi'),
(31, 'Rahman', 'Cukup', 'Cukup', 'Kecil', 'kecil', 'Tidak', 'Tidak', 'Jauh', 'Kurang'),
(32, 'Budi', 'Besar', 'Cukup', 'Sedang', 'Sedang', 'Tidak', 'Tidak', 'Jauh', 'Rekomendasi'),
(33, 'Rizqi', 'Sedang', 'Kecil', 'Kecil', 'Kecil', 'Tidak', 'Tidak', 'Jauh', 'Kurang'),
(34, 'Daffa', 'Besar', 'Cukup', 'Sedang', 'Sedang', 'Tidak', 'Tidak', 'Jauh', 'Rekomendasi'),
(35, 'Adim', 'Cukup', 'Cukup', 'Sedang', 'Sedang', 'Tidak', 'Tidak', 'Jauh', 'Rekomendasi'),
(36, 'Rizal', 'Kecil', 'Cukup', 'Besar', 'Besar', 'Tidak', 'Tidak', 'Dekat', 'Rekomendasi'),
(37, 'Adam', 'Kecil', 'Cukup', 'Besar', 'Sedang', 'Tidak', 'Tidak', 'Dekat', 'Rekomendasi'),
(38, 'Brian', 'Kecil', 'Cukup', 'Besar', 'Besar', 'Tidak', 'Tidak', 'Dekat', 'Rekomendasi'),
(39, 'Huda', 'Besar', 'Cukup', 'Besar', 'Sedang', 'Tidak', 'Tidak', 'Dekat', 'Rekomendasi'),
(40, 'Hakim', 'Besar', 'Besar', 'Kecil', 'Sedang', 'Tidak', 'Tidak', 'Dekat', 'Rekomendasi'),
(41, 'Royyan', 'Kecil', 'Besar', 'Kecil', 'Cukup', 'Tidak', 'Tidak', 'Dekat', 'Rekomendasi'),
(42, 'Lukman', 'Besar', 'Kecil', 'Kecil', 'Cukup', 'Tidak', 'Tidak', 'Jauh', 'Kurang'),
(43, 'Kharisma', 'Sedang', 'Besar', 'Kecil', 'Kecil', 'Tidak', 'Tidak', 'Jauh', 'Kurang'),
(44, 'Bagas', 'Sedang', 'Kecil', 'Kecil', 'Kecil', 'Tidak', 'Tidak', 'Dekat', 'Kurang'),
(45, 'Hardiyono', 'Sedang', 'Kecil', 'Kecil', 'Kecil', 'Tidak', 'Tidak', 'Dekat', 'Rekomendasi'),
(46, 'Lintang', 'Sedang', 'Kecil', 'Besar', 'Besar', 'Tidak', 'Tidak', 'Dekat', 'Rekomendasi'),
(47, 'Nawang', 'Sedang', 'Kecil', 'Cukup', 'Besar', 'Ya', 'Ya', 'Dekat', 'Rekomendasi'),
(48, 'Danil', 'Besar', 'Sedang', 'Cukup', 'Kecil', 'Tidak', 'Tidak', 'Dekat', 'Kurang'),
(49, 'Dimas', 'Besar', 'Sedang', 'Cukup', 'Kecil', 'Tidak', 'Tidak', 'Dekat', 'Kurang'),
(50, 'Andre', 'Besar', 'Sedang', 'Cukup', 'Cukup', 'Ya', 'Ya', 'Dekat', 'Rekomendasi'),
(51, 'Andiko', 'Besar', 'Kecil', 'Besar', 'Cukup', 'Ya', 'Ya', 'Dekat', 'Rekomendasi'),
(52, 'Rosyid', 'Kecil', 'Besar', 'Besar', 'Cukup', 'Ya', 'Tidak', 'Dekat', 'Kurang'),
(53, 'Agung', 'Kecil', 'Sedang', 'Kecil', 'Besar', 'Ya', 'Ya', 'Dekat', 'Rekomendasi'),
(54, 'Fachrul', 'Sedang', 'Besar', 'Kecil', 'Kecil', 'Ya', 'Tidak', 'Dekat', 'Kurang'),
(55, 'Ilham', 'Sedang', 'Kecil', 'Kecil', 'Besar', 'Ya', 'Tidak', 'Dekat', 'Kurang'),
(56, 'Firman', 'Sedang', 'Kecil', 'Kecil', 'Besar', 'Ya', 'Tidak', 'Dekat', 'Kurang'),
(57, 'Hanif', 'Sedang', 'Besar', 'Besar', 'Cukup', 'Ya', 'Ya', 'Dekat', 'Rekomendasi'),
(58, 'Radja', 'Sedang', 'Besar', 'Sedang', 'Sedang', 'Ya', 'Ya', 'Dekat', 'Rekomendasi'),
(59, 'Vito', 'Sedang', 'Besar', 'Sedang', 'Kecil', 'Ya', 'Ya', 'Dekat', 'Rekomendasi'),
(60, 'Afif', 'Sedang', 'Besar', 'Besar', 'Kecil', 'Ya', 'Ya', 'Dekat', 'Rekomendasi'),
(61, 'Fatwa', 'Sedang', 'Besar', 'Besar', 'Cukup', 'Ya', 'Ya', 'Dekat', 'Rekomendasi'),
(62, 'Hendra', 'Sedang', 'Besar', 'Besar', 'Cukup', 'Ya', 'Ya', 'Dekat', 'Rekomendasi'),
(63, 'Hamida', 'Besar', 'Kecil', 'Cukup', 'Kecil', 'Ya', 'Ya', 'Dekat', 'Kurang'),
(64, 'Fajar', 'Besar', 'Kecil', 'Cukup', 'Kecil', 'Ya', 'Ya', 'Dekat', 'Kurang'),
(65, 'Setya', 'Besar', 'Kecil', 'Kecil', 'Kecil', 'Ya', 'Ya', 'Dekat', 'Kurang'),
(66, 'Dicky', 'Besar', 'Kecil', 'Kecil', 'Cukup', 'Ya', 'Ya', 'Dekat', 'Kurang'),
(67, 'Putra', 'Besar', 'Kecil', 'Kecil', 'Cukup', 'Ya', 'Ya', 'Dekat', 'Kurang'),
(68, 'Clara', 'Besar', 'Besar', 'Sedang', 'Kecil', 'Ya', 'Tidak', 'Dekat', 'Rekomendasi'),
(69, 'Fahri', 'Kecil', 'Besar', 'Cukup', 'Kecil', 'Ya', 'Tidak', 'Dekat', 'Rekomendasi'),
(70, 'Reza', 'Kecil', 'Besar', 'Cukup', 'Kecil', 'Ya', 'Tidak', 'Dekat', 'Rekomendasi'),
(71, 'Satria', 'Kecil', 'Besar', 'Cukup', 'Besar', 'Ya', 'Tidak', 'Dekat', 'Rekomendasi'),
(72, 'Kevin', 'Kecil', 'Besar', 'Besar', 'Cukup', 'Ya', 'Ya', 'Dekat', 'Rekomendasi'),
(73, 'Aldo', 'Kecil', 'Besar', 'Sedang', 'Cukup', 'Tidak', 'Ya', 'Dekat', 'Rekomendasi'),
(74, 'Beni', 'Sedang', 'Besar', 'Sedang', 'Besar', 'Tidak', 'Ya', 'Dekat', 'Rekomendasi'),
(75, 'Egi', 'Besar', 'Besar', 'Sedang', 'Kecil', 'Tidak', 'Ya', 'Dekat', 'Rekomendasi'),
(76, 'Raka', 'Besar', 'Sedang', 'Sedang', 'Besar', 'Ya', 'Ya', 'Dekat', 'Rekomendasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datauji`
--

CREATE TABLE `datauji` (
  `Id` int NOT NULL,
  `nama_calon` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `N_PMP` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `N_Ind` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `N_Ing` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `N_Mat` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Bekerja` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `Organisasi` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `Jarak_Rumah` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `hasil_rekom` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `hasil_kurang` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `hasil` varchar(11) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datauji`
--

INSERT INTO `datauji` (`Id`, `nama_calon`, `N_PMP`, `N_Ind`, `N_Ing`, `N_Mat`, `Bekerja`, `Organisasi`, `Jarak_Rumah`, `hasil_rekom`, `hasil_kurang`, `hasil`) VALUES
(4, 'Anto', 'Cukup', 'Cukup', 'Sedang', 'Sedang', 'Tidak', 'Tidak', 'Jauh', '0.0010', '0.0007', 'Rekomendasi'),
(10, 'yanuar', 'Besar', 'Sedang', 'Cukup', 'Besar', 'Tidak', 'Ya', 'Jauh', '0.00006', '0.00003', 'Rekomendasi'),
(11, 'halo', 'Sedang', 'Besar', 'Kecil', 'Sedang', 'Tidak', 'Ya', 'Jauh', '0.00040', '0.00045', 'Kurang'),
(12, 'Anto1', 'Besar', 'Cukup', 'Besar', 'Sedang', 'Ya', 'Tidak', 'Jauh', '0.00218', '0.00023', 'Rekomendasi'),
(14, 'Anto2', 'Kecil', 'Sedang', 'Kecil', 'Sedang', 'Ya', 'Tidak', 'Dekat', '0.00012', '0.00053', 'Kurang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datalatih`
--
ALTER TABLE `datalatih`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `datauji`
--
ALTER TABLE `datauji`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datalatih`
--
ALTER TABLE `datalatih`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT untuk tabel `datauji`
--
ALTER TABLE `datauji`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
