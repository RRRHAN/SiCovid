-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Apr 2020 pada 19.29
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_corona`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `foto`) VALUES
(7, 'RaihanF', 'r', 'r', 'Raihan_r.jpg'),
(8, 'Lewandowski', 'l', 'l', 'Lewandowski_l.jpg'),
(11, 'messi', 'm', 'm', 'messi_m.jfif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `suhu` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama`, `umur`, `alamat`, `suhu`, `id_provinsi`, `id_status`) VALUES
(1, 'fulan', 31, 'jl. bubbirrrf', 40, 20, 2),
(2, 'lorem', 24, 'jl. hhuvu', 37, 15, 4),
(4, 'jbevbjwev', 45, 'okokok', 36, 17, 4),
(6, 'ok', 34, 'jl. ok', 37, 3, 1),
(7, 'kamuu', 23, 'jl. okok', 36, 14, 4),
(8, 'ok', 34, 'jl jalan', 36, 7, 3),
(9, 'dia', 24, 'jl. suhat', 35, 19, 1),
(10, 'dolor', 32, 'jl. mana', 35, 9, 2),
(11, 'bukan saya', 34, 'jl. mana hayo', 37, 5, 2),
(12, 'kamu', 34, 'jl. mana', 37, 13, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `singkatan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `provinsi`, `singkatan`) VALUES
(1, 'Aceh', 'AC'),
(2, 'Bengkulu', 'BE'),
(3, 'Jambi', 'JA'),
(4, 'Kepulauan bangka belitung', 'BB'),
(5, 'Kepulauan Riau', 'KR'),
(6, 'Lampung', 'LA'),
(7, 'Riau', 'RI'),
(8, 'Sumatra barat', 'SB'),
(9, 'Sumatra selatan', 'SS'),
(10, 'Sumatra utara', 'SU'),
(11, 'Banten', 'BT'),
(12, 'Gorontalo', 'GO'),
(13, 'Jakarta', 'JK'),
(14, 'Jawa barat', 'JB'),
(15, 'Jawa tengah', 'JT'),
(16, 'Jawa timur', 'JI'),
(17, 'Kalimantan Barat', 'KB'),
(18, 'Kalimantan selatan', 'KS'),
(19, 'Kalimantan Tengah', 'KT'),
(20, 'Kalimantan timur', 'KI'),
(21, 'Kalimantan Utara', 'KU'),
(22, 'Maluku', 'MA'),
(23, 'Maluku Utara', 'MU'),
(24, 'Bali', 'BA'),
(25, 'Nusa tenggara barat', 'NB'),
(26, 'Nusa tenggara timur', 'NT'),
(27, 'Papua', 'PA'),
(28, 'Papua barat', 'PB'),
(29, 'Sulawesi Barat', 'SR'),
(30, 'Sulawesi Selatan', 'SN'),
(31, 'Sulawesi tengah', 'ST'),
(32, 'Sulawesi tenggara', 'SG'),
(33, 'Sulawesi Utara', 'SA'),
(34, 'Yogyakarta', 'YO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'ODP'),
(2, 'PDP'),
(3, 'Positif'),
(4, 'Sembuh');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `provinsi` (`id_provinsi`),
  ADD KEY `status` (`id_status`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
