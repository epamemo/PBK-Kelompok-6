-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2020 pada 18.45
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`Id`, `Email`, `Nama`, `Pwd`) VALUES
(1, 'admin@mail.com', 'Admin 1', 'admin1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahasa`
--

CREATE TABLE `bahasa` (
  `id_bahasa` int(10) UNSIGNED NOT NULL,
  `Bahasa` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban_juis`
--

CREATE TABLE `jawaban_juis` (
  `id_kuis` int(255) NOT NULL,
  `jawaban` text NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuis`
--

CREATE TABLE `kuis` (
  `id_kuis` int(10) UNSIGNED NOT NULL,
  `Soal` text NOT NULL,
  `Jawaban` text NOT NULL,
  `Level` int(128) NOT NULL,
  `Bahasa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kuis`
--

INSERT INTO `kuis` (`id_kuis`, `Soal`, `Jawaban`, `Level`, `Bahasa`) VALUES
(1, 'apakah aksara jawa ada ?', 'ada', 1, 'jawa'),
(2, 'Bahsa khas jawa barat', 'sunda', 1, 'sunda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(10) UNSIGNED NOT NULL,
  `Judul` varchar(40) NOT NULL,
  `Tipe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nama` varchar(60) NOT NULL,
  `E_mail` varchar(40) NOT NULL,
  `Level` int(1) NOT NULL,
  `Pwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `Nama`, `E_mail`, `Level`, `Pwd`) VALUES
(1, 'zakki', 'mahatirzakki@gmail.com', 2, 'yeamploww');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id_video` int(10) UNSIGNED NOT NULL,
  `Judul` varchar(40) NOT NULL,
  `Url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`id_bahasa`);

--
-- Indeks untuk tabel `kuis`
--
ALTER TABLE `kuis`
  ADD PRIMARY KEY (`id_kuis`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bahasa`
--
ALTER TABLE `bahasa`
  MODIFY `id_bahasa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kuis`
--
ALTER TABLE `kuis`
  MODIFY `id_kuis` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
