-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2026 pada 12.13
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cobaprojek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akta`
--

CREATE TABLE `akta` (
  `id` int(11) NOT NULL,
  `no_akta` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jk` varchar(20) NOT NULL,
  `ayah` varchar(100) NOT NULL,
  `ibu` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `anak_ke` varchar(10) DEFAULT NULL,
  `hari` varchar(20) DEFAULT NULL,
  `tanggal_catat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `akta`
--

INSERT INTO `akta` (`id`, `no_akta`, `nama`, `tempat`, `tanggal`, `jk`, `ayah`, `ibu`, `alamat`, `anak_ke`, `hari`, `tanggal_catat`) VALUES
(1, 'AKTA-20260428-570', 'naput', 'Magelang', '2006-11-09', 'Perempuan', 'Arif', 'Les', 'Gejagan', NULL, NULL, NULL),
(2, 'AKTA-20260428-813', 'naput', 'Magelang', '2006-11-09', 'Perempuan', 'Arif', 'les', 'gjgj', '1', 'kms', '2007-02-09'),
(3, 'AKTA-20260428-739', 'naput', 'Magelang', '2222-11-09', 'Perempuan', 'Arif', 'Les', 'gjg', '1', 'kms', '9999-09-08'),
(4, 'AKTA-20260429-219', 'naput', 'Magelang', '2006-11-09', 'Perempuan', 'Arif', 'Les', 'gjgg', '1', 'kms', '2000-02-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nik`, `username`, `password`) VALUES
(1, '4534344535', '123mput', '334455'),
(2, '2131313', 'naput', '1122');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akta`
--
ALTER TABLE `akta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akta`
--
ALTER TABLE `akta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
