-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2022 pada 18.05
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama_dokter` varchar(100) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `no_tlp` char(15) DEFAULT NULL,
  `lulusan` varchar(255) DEFAULT NULL,
  `kerja` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id`, `nama_dokter`, `gender`, `no_tlp`, `lulusan`, `kerja`, `foto`) VALUES
(8, 'dr. Ridwan Daomara Sllitonga', 1, '082123456705', 'Universitas Gadjah Mada', 'Spesialis Gigi di Rumah Sakit Medika', '62a18ba4324a8.jpg'),
(9, 'Dr.Riri Suryani', 2, '0857098761', 'Universitas Indonesia', 'Dokter Bedah Gigi RS.Medika', '62a18c1e03536.jpg'),
(10, 'Dr. Nani Suryaningsih', 2, '0876543290', 'Universitas Pasundan ', 'Spesialis gigi di RS.Immanuel', '62a18c55cd059.jpg'),
(11, 'Dr. Kismanto Sudarsono', 1, '08124598765', 'Universitas Padjajaran', 'Dokter Gigi Klinik Sehat Sejahtera', '62a18ccabba25.jpg'),
(12, 'Dr. Mega Nurkusuma', 2, '0897654890', 'Institut Teknologi Bandung', 'Spesialis Gigi Puskesmas Bandung', '62a18d1c14c0a.jpg'),
(13, 'dr. Ridho Kusuma', 1, '08567890865', 'Universitas Brawijaya', 'Spesialis Gigi di Brawijaya Hospital Saharjo', '62a18e5d97df1.jpg'),
(14, 'dr. Lita Dwiyanti', 2, '08976534267', 'Universitas Diponegoro', 'Spesialis dokter gigi anak', '62a18eb29e528.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gender`
--

INSERT INTO `gender` (`id`, `nama`) VALUES
(1, 'Laki-Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ktp` char(16) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `foto`, `ktp`, `nama`, `gender`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `telepon`) VALUES
(2, '62a20500821c8.jpg', '3204384208030025', 'Wini', 0, 'Bandung', '2003-08-02', 'Kp.Warung, Ciwidey', '082121918595'),
(3, '62a20e8b08e1c.jpg', '3204384208030026', 'tsqila', 0, 'Bandung', '2003-04-14', 'Lebakmuncang', '082121938765');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(4, 'pw', '$2y$10$elM/GM0UFfX/yYrWthiM6OEgxrSBClrLjBmhVHQEvqhwIwhkRv2r2'),
(8, 'wina', '$2y$10$JQmErAQZcjhHdr8p4GMlXOp7syrw.hNqMeO.vcmLaLx044I0M4DWG'),
(9, 'admin', '$2y$10$4s7Y2OQ/vZ3w7cDuF.qT.uNWx4OYhL2mErNKpD3686B9ak6oweloK'),
(10, 'pw2022', '$2y$10$BZLQOJJtJQIsNtd4W3Iv/uNBMTyCeTY0/x7ZrhZB2w2yi9kwJGSPK'),
(11, 'wkwk', '$2y$10$rjvhcDlRUPT6kVVo/ID2YeTu7cqs4pae4KXDKLR5tpQT40jx0WrHO'),
(12, 'hehe', '$2y$10$6FIYpM7iOpGpWDyIMmRS4O1mmALVxT1uNEFuzRjTKtq4zzDzxIFGK'),
(13, 'paw', '$2y$10$yWBUegrP1X18oXXMhtemPOM4sD9YRJLX4h50lbmS649Jkam03ZAbW'),
(14, 'wini', '$2y$10$iT.bUguqkEwSgw0hCFCxbO/t6bBfBN8UqDwdNcnKpc1cOb7wtQg4y'),
(15, 'cukila', '$2y$10$VpJu33aF8q0PBqrYHmf7JuUL3LyrBD9ArhrfDM.c8MfJTp3E6VATy');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
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
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
