-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Mei 2018 pada 20.08
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robby`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_karyawan`
--

CREATE TABLE `admin_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `user_nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_karyawan`
--

INSERT INTO `admin_karyawan` (`id_karyawan`, `user_nama`, `password`) VALUES
(1, 'robby', '2442');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `foto` varchar(70) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`foto`, `nik`, `nama`, `alamat`, `divisi`, `email`, `nomor`, `jenis_kelamin`, `status`) VALUES
('3x4-Danamound.jpg', 'NIK001', 'RIANA', 'ANTAPANI KIDUL', 'SDM', '@gmail.com', '081920232434', 'Perempuan', 'BELUM MENIKAH'),
('27038.jpg', 'NIK002', 'JHON', 'CICADAS', 'LOGISTIK', '@gmail.com', '081834353234', 'Laki-Laki', 'MENIKAH'),
('3681318365_a4f32d9567_z.jpg', 'NIK004', 'SITI', 'GEDEBAGE', 'SDM', '@gmail.com', '@yahoo.com', 'Perempuan', 'BELUM MENIKAH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_karyawan`
--
ALTER TABLE `admin_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_karyawan`
--
ALTER TABLE `admin_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
