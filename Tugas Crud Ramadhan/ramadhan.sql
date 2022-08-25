-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Apr 2022 pada 10.11
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ramadhan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `tanggal` date NOT NULL,
  `imsyak` time DEFAULT NULL,
  `subuh` time DEFAULT NULL,
  `dzuhur` time DEFAULT NULL,
  `ashar` time DEFAULT NULL,
  `maghrib` time DEFAULT NULL,
  `isya` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`tanggal`, `imsyak`, `subuh`, `dzuhur`, `ashar`, `maghrib`, `isya`) VALUES
('2022-04-03', '04:06:00', '04:16:00', '11:35:00', '14:51:00', '17:35:00', '18:45:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_berbuka`
--

CREATE TABLE `menu_berbuka` (
  `tanggal` date NOT NULL,
  `menu_takjil` tinytext DEFAULT NULL,
  `menu_berbuka` tinytext DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `menu_berbuka`
--

INSERT INTO `menu_berbuka` (`tanggal`, `menu_takjil`, `menu_berbuka`, `tempat`) VALUES
('2022-04-03', 'KURMA', 'SOTO AYAM', 'RUMAH'),
('2022-04-04', 'KOLAK PISANG', 'RAWON', 'RUMAH'),
('2022-04-05', 'ES DEGAN', 'BAKSO', 'RUMAH'),
('2022-04-06', 'KUE BASAH', 'AYAM GORENG', 'RUMAH HIFZI'),
('2022-04-07', 'GORENGAN', 'AYAM GEPREK', 'RUMAH'),
('2022-04-08', 'PUDDING BUAH', 'SATE AYAM', 'RUMAH'),
('2022-04-09', 'PISANG GORENG', 'SAYUR SOP', 'SEKOLAH'),
('2022-04-10', 'TAHU KRISPY', 'KIKIL', 'RUMAH'),
('2022-04-11', 'BOBOA', 'SOP BUNTUT', 'BUKA BERSAMA'),
('2022-04-12', 'SOP BUAH', 'IGA BAKAR', 'RUMAH'),
('2022-04-13', 'SALAD BUAH', 'BEBEK GORENG', 'RUMAH'),
('2022-04-14', 'JUS BUAH', 'AYAM BAKAR', 'RUMAH ANDI'),
('2022-04-15', 'KEBAB', 'IKAN GORENG', 'RUMAH'),
('2022-04-16', 'KURMA', 'NASI GORENG', 'RUMAH'),
('2022-04-17', 'KOLAK PISANG', 'LALAPAN LELE', 'WARUNG'),
('2022-04-18', 'ES DEGAN', 'NASI PECEL', 'RUMAH'),
('2022-04-19', 'KUE BASAH', 'SOTO AYAM', 'RUMAH DHANI'),
('2022-04-20', 'GORENGAN', 'RAWON', 'RUMAH'),
('2022-04-21', 'PUDDING BUAH', 'BAKSO', 'RUMAH'),
('2022-04-22', 'PISANG GORENG', 'AYAM GORENG', 'RUMAH'),
('2022-04-23', 'TAHU KRISPY', 'AYAM GEPREK', 'RUMAH'),
('2022-04-24', 'BOBOA', 'SATE AYAM', 'BUKA BERSAMA'),
('2022-04-25', 'SOP BUAH', 'SAYUR SOP', 'RUMAH'),
('2022-04-26', 'SALAD BUAH', 'KIKIL', 'RUMAH RAFIF'),
('2022-04-27', 'JUS BUAH', 'SOP BUNTUT', 'RUMAH'),
('2022-04-28', 'KEBAB', 'IGA BAKAR', 'RUMAH'),
('2022-04-29', 'KURMA', 'BEBEK GORENG', 'RUMAH BUDHE'),
('2022-04-30', 'KOLAK PISANG', 'AYAM BAKAR', 'RUMAH'),
('2022-05-01', 'ES DEGAN', 'IKAN GORENG', 'RUMAH'),
('2022-05-02', 'KUE BASAH', 'NASI GORENG', 'RUMAH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sholat_terawih`
--

CREATE TABLE `sholat_terawih` (
  `tanggal` date NOT NULL,
  `imam` varchar(100) DEFAULT NULL,
  `masjid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sholat_terawih`
--

INSERT INTO `sholat_terawih` (`tanggal`, `imam`, `masjid`) VALUES
('2022-04-03', 'ACHMAD IMAM', 'NURUTTAQWA'),
('2022-04-04', 'MACHMUDI MUHAIMIN', 'DARUL HUDA'),
('2022-04-05', 'GUFRON ABDILLAH', 'BAITUL JANNAH'),
('2022-04-06', 'ALI MURTADLO', 'MUHAJIRIN'),
('2022-04-07', 'HAFIDZ MUBAROK', 'ANSHORULLAH'),
('2022-04-08', 'ACHMAD GHIFARI', 'AINUL YAQIN'),
('2022-04-09', 'RUSLI SIFAK', 'JABAL ROHMAH'),
('2022-04-10', 'RAFIF MUBAROK', 'ULUL ALBAB'),
('2022-04-11', 'SALMAN AL FARISI', 'ATTANWIR'),
('2022-04-12', 'NAZRAN FITRONI', 'NURUL HUDA'),
('2022-04-13', 'SYARIF ABDILLAH', 'AL-IKHLAS'),
('2022-04-14', 'NOOR MUBAROK', 'SABILILLAH'),
('2022-04-15', 'IMAM SYAFIUDIN', 'AL GHIFARI'),
('2022-04-16', 'RIZAL  RAMLI', 'NURUTTAQWA'),
('2022-04-17', 'ACHMAD FATHONI', 'DARUL HUDA'),
('2022-04-18', 'ACHMAD IMAM', 'BAITUL JANNAH'),
('2022-04-19', 'MACHMUDI MUHAIMIN', 'MUHAJIRIN'),
('2022-04-20', 'GUFRON ABDILLAH', 'ANSHORULLAH'),
('2022-04-21', 'ALI MURTADLO', 'AINUL YAQIN'),
('2022-04-22', 'HAFIDZ MUBAROK', 'JABAL ROHMAH'),
('2022-04-23', 'ACHMAD GHIFARI', 'ULUL ALBAB'),
('2022-04-24', 'RUSLI SIFAK', 'ATTANWIR'),
('2022-04-25', 'RAFIF MUBAROK', 'NURUL HUDA'),
('2022-04-26', 'SALMAN AL FARISI', 'AL-IKHLAS'),
('2022-04-27', 'NAZRAN FITRONI', 'SABILILLAH'),
('2022-04-28', 'SYARIF ABDILLAH', 'AL GHIFARI'),
('2022-04-29', 'NOOR MUBAROK', 'NURUTTAQWA'),
('2022-04-30', 'IMAM SYAFIUDIN', 'DARUL HUDA'),
('2022-05-01', 'RIZAL  RAMLI', 'BAITUL JANNAH'),
('2022-05-02', 'ACHMAD FATHONI', 'MUHAJIRIN');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`tanggal`);

--
-- Indeks untuk tabel `menu_berbuka`
--
ALTER TABLE `menu_berbuka`
  ADD PRIMARY KEY (`tanggal`);

--
-- Indeks untuk tabel `sholat_terawih`
--
ALTER TABLE `sholat_terawih`
  ADD PRIMARY KEY (`tanggal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
