-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Apr 2023 pada 14.24
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pertemuan1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_fitrah`
--

CREATE TABLE `tbl_fitrah` (
  `nik` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telpon` varchar(20) NOT NULL,
  `jenis_zakat` varchar(100) NOT NULL,
  `jumlah_jiwa` varchar(10) NOT NULL,
  `nominal` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_fitrah`
--

INSERT INTO `tbl_fitrah` (`nik`, `nama`, `no_telpon`, `jenis_zakat`, `jumlah_jiwa`, `nominal`) VALUES
(1231434, 'apit', '2362143234', 'zakat_mal', '3 orang', 1233334),
(12433567, 'Hafiz ', '0814361545', 'zakat_mal', '5 orang', 2147483647),
(124154346, 'mustakim', '121764523', 'zakat_fitrah', '2 orang', 1000000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_fitrah`
--
ALTER TABLE `tbl_fitrah`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_fitrah`
--
ALTER TABLE `tbl_fitrah`
  MODIFY `nik` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124154347;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
