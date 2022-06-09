-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 05 Jun 2022 pada 10.06
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kendaraan`
--

CREATE TABLE `tbl_kendaraan` (
  `id` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `tarif` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kendaraan`
--

INSERT INTO `tbl_kendaraan` (`id`, `jenis`, `tarif`) VALUES
(1, 'Motor', 2000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_parkir`
--

CREATE TABLE `tbl_parkir` (
  `id_parkir` varchar(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `pemilik` varchar(50) NOT NULL,
  `plat` varchar(12) NOT NULL,
  `waktu_masuk` datetime NOT NULL,
  `waktu_keluar` datetime DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_parkir`
--

INSERT INTO `tbl_parkir` (`id_parkir`, `id_petugas`, `id_kendaraan`, `pemilik`, `plat`, `waktu_masuk`, `waktu_keluar`, `status`) VALUES
('p-3633', 1, 1, 'Zainul', 'BB 123 JAN', '2022-05-05 17:04:00', NULL, 0),
('p-9344', 1, 1, 'Fajar', 'BK 1020 AIR', '2022-06-05 17:03:00', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`id_petugas`, `nama`, `jk`, `hp`, `email`, `username`, `password`, `level`) VALUES
(1, 'aaa', 'Laki-Laki', '0895611024559', 'faaa', 'master', 'eb0a191797624dd3a48fa681d3061212', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_kendaraan`
--
ALTER TABLE `tbl_kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_parkir`
--
ALTER TABLE `tbl_parkir`
  ADD PRIMARY KEY (`id_parkir`);

--
-- Indeks untuk tabel `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_kendaraan`
--
ALTER TABLE `tbl_kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
