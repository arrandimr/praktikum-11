-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 Apr 2020 pada 13.18
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum10`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarmhs`
--

CREATE TABLE `daftarmhs` (
  `nisn` varchar(20) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `tglregis` date DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `jeniskel` varchar(15) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_akta` varchar(20) DEFAULT NULL,
  `kewarganegaraan` varchar(3) DEFAULT NULL,
  `negara` text NOT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `anak` varchar(3) DEFAULT NULL,
  `kebutuhan_khusus` varchar(5) DEFAULT NULL,
  `jeniskebutuhan` text NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `rt` varchar(5) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL,
  `dusun` varchar(15) DEFAULT NULL,
  `desa` varchar(15) DEFAULT NULL,
  `kecamatan` varchar(15) DEFAULT NULL,
  `kdpos` varchar(8) DEFAULT NULL,
  `kepemilikan` varchar(20) DEFAULT NULL,
  `transport` varchar(20) DEFAULT NULL,
  `no_kks` varchar(15) DEFAULT NULL,
  `kps` varchar(10) DEFAULT NULL,
  `no_kps` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftarmhs`
--

INSERT INTO `daftarmhs` (`nisn`, `nama`, `email`, `tglregis`, `no_telp`, `jeniskel`, `nik`, `tempat_lahir`, `tgl_lahir`, `no_akta`, `kewarganegaraan`, `negara`, `agama`, `anak`, `kebutuhan_khusus`, `jeniskebutuhan`, `alamat`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `kdpos`, `kepemilikan`, `transport`, `no_kks`, `kps`, `no_kps`) VALUES
('45671220', 'Sulistiyo Widodo', 'arrandimuhamadriesta12@gmail.com', '2020-04-04', '085231274554', 'Laki - Laki', '3515141206000002', 'sidoarjo', '2020-04-02', 'awe123456', 'WNI', '', 'Islam', '4', 'TIDAK', '', 'awawfafwwa', '03', '02', 'kweni', 'anggaswangi', 'sukodono', '61258', 'Rumah orang tua', 'Jalan kaki', '2564', 'bukan', ''),
('45671221', 'arrandi', 'arrandimuhamadriesta12@gmail.com', '2020-04-04', '085231274554', 'Laki - Laki', '3515141206000004', 'sidoarjo', '2020-04-11', 'adw123', 'WNI', '', 'Islam', '2', 'TIDAK', '', 'awawdwd', '03', '02', 'kweni', 'anggaswangi', 'sukodono', '61258', 'Rumah orang tua', 'Jalan kaki', '649841', 'pener', '5484848'),
('45671222', 'arrandi', 'arrandimuhamadriesta12@gmail.com', '2020-04-04', '085231274554', 'Laki - Laki', '13214352442', 'sidoarjo', '2020-04-04', 'awe123456', 'WNI', 'Indonesia', 'Islam', '2', 'YA', 'hyper', 'fhfhy', '03', '02', 'kweni', 'anggaswangi', 'sukodono', '61258', 'Rumah orang tua', 'Jalan kaki', '649841', 'penerima', '5156111'),
('admin', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarmhs`
--
ALTER TABLE `daftarmhs`
  ADD PRIMARY KEY (`nisn`),
  ADD UNIQUE KEY `nik` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
