-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Des 2017 pada 23.51
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(30) NOT NULL,
  `pass_admin` varchar(50) NOT NULL,
  `nama_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `pass_admin`, `nama_admin`) VALUES
('admin', 'admin', 'admin'),
('admin2', 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` int(200) NOT NULL,
  `harga_barang` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `jumlah_barang`, `harga_barang`) VALUES
('C100', 'Silver Queen md size', 8000, 12000),
('M100', 'Indomie Goreng', 2000, 2500),
('M101', 'Mie Sedap Goreng', 2100, 2500),
('S100', 'Sosis So Nice', 500, 20000),
('T100', 'Tisu', 5200, 2500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangkeluar`
--

CREATE TABLE `barangkeluar` (
  `no_barang_keluar` int(30) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `id_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` int(200) NOT NULL,
  `harga_barang` int(200) NOT NULL,
  `total_harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barangkeluar`
--

INSERT INTO `barangkeluar` (`no_barang_keluar`, `tanggal_keluar`, `id_barang`, `nama_barang`, `jumlah_barang`, `harga_barang`, `total_harga`) VALUES
(3, '2017-12-01', 'T100', 'Tisu', 100, 2500, 250000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangmasuk`
--

CREATE TABLE `barangmasuk` (
  `no_barang_masuk` int(30) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `id_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` int(200) NOT NULL,
  `harga_barang` int(200) NOT NULL,
  `total_harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barangmasuk`
--

INSERT INTO `barangmasuk` (`no_barang_masuk`, `tanggal_masuk`, `id_barang`, `nama_barang`, `jumlah_barang`, `harga_barang`, `total_harga`) VALUES
(9, '2017-12-11', 'T100', 'Tisu', 1000, 2500, 2500000),
(10, '2017-12-13', 'M101', 'Mie Sedap Goreng', 100, 2500, 250000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` varchar(30) NOT NULL,
  `pass_kasir` varchar(50) NOT NULL,
  `nama_kasir` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `pass_kasir`, `nama_kasir`) VALUES
('k1', 'kasir', 'kasir'),
('k2', 'kasir2', 'kasir2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `no_log` int(30) NOT NULL,
  `tanggal` datetime NOT NULL,
  `Id_user` varchar(30) NOT NULL,
  `nama_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`no_log`, `tanggal`, `Id_user`, `nama_user`) VALUES
(1, '2017-11-14 09:31:18', 'admin', 'admin'),
(2, '2017-12-16 12:55:31', 'admin', 'admin'),
(3, '2017-12-16 13:55:56', 'admin', 'admin'),
(4, '2017-12-16 14:09:03', 'admin', 'admin'),
(5, '2017-12-16 15:36:23', 'admin', 'admin'),
(6, '2017-12-16 15:37:31', 'admin', 'admin'),
(7, '2017-12-16 16:29:51', 'admin', 'admin'),
(8, '2017-12-16 17:59:01', 'k1', 'kasir'),
(9, '2017-12-16 17:59:16', 'admin', 'admin'),
(10, '2017-12-16 18:19:22', 'admin', 'admin'),
(11, '2017-12-17 08:00:29', 'k1', 'kasir'),
(12, '2017-12-17 08:01:04', 'k1', 'kasir'),
(13, '2017-12-17 08:05:20', 'k1', 'kasir'),
(14, '2017-12-17 08:05:39', 'k1', 'kasir'),
(15, '2017-12-17 08:07:06', 'admin', 'admin'),
(16, '2017-12-17 08:07:16', 'k1', 'kasir'),
(17, '2017-12-17 08:07:56', 'k1', 'kasir'),
(18, '2017-12-17 08:08:08', 'k1', 'kasir'),
(19, '2017-12-17 08:09:25', 'k1', 'kasir'),
(20, '2017-12-17 08:13:57', 'k1', 'kasir'),
(21, '2017-12-17 08:50:13', 'admin', 'admin'),
(22, '2017-12-17 09:13:57', 'admin', 'admin'),
(23, '2017-12-17 09:17:19', 'admin', 'admin'),
(24, '2017-12-17 09:19:47', 'admin', 'admin'),
(25, '2017-12-17 09:27:01', 'admin', 'admin'),
(26, '2017-12-17 09:28:49', 'admin', 'admin'),
(27, '2017-12-17 09:40:59', 'admin2', 'admin2'),
(28, '2017-12-17 20:14:11', 'admin', 'admin'),
(29, '2017-12-17 20:46:10', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logjual`
--

CREATE TABLE `logjual` (
  `no_logjual` int(30) NOT NULL,
  `id_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_barang` int(200) NOT NULL,
  `jumlah_barang` int(30) NOT NULL,
  `total_harga` int(30) NOT NULL,
  `id_kasir` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `logjual`
--

INSERT INTO `logjual` (`no_logjual`, `id_barang`, `nama_barang`, `harga_barang`, `jumlah_barang`, `total_harga`, `id_kasir`, `tanggal`) VALUES
(1, 'T100', 'tisu', 2500, 10, 25000, 'k1', '2017-12-15 20:43:47'),
(2, 'M101', 'Mie Sedap Goreng', 2000, 10, 20000, 'k1', '2017-12-16 20:45:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(50) NOT NULL,
  `nama_pegawai` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_tlp` text,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `tempat_lahir`, `tanggal_lahir`, `no_tlp`, `alamat`) VALUES
('admin', 'admin', 'Garut', '1997-02-13', '082315810923', 'Jl. Otista Kp. Tanjung RT/04 RW/02 Tarogong Kaler Garut'),
('admin2', 'admin2', 'Sukabumi', '1997-11-13', '098781234786', 'Jl. Fiala Kp. Muama RT/12 RW/14 kelopa Bandung'),
('k1', 'kasir', 'Bandung', '1997-05-15', '085219870938\r\n', 'Jl. Derada Kelurahan Annata RT/09 RW08 Derara Bandung\r\n'),
('k2', 'kasir2', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp`
--

CREATE TABLE `temp` (
  `no` int(30) NOT NULL,
  `id_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_barang` int(100) NOT NULL,
  `jumlah_barang` int(30) NOT NULL,
  `sub_total` int(100) NOT NULL,
  `kasir` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  ADD PRIMARY KEY (`no_barang_keluar`);

--
-- Indexes for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  ADD PRIMARY KEY (`no_barang_masuk`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`no_log`);

--
-- Indexes for table `logjual`
--
ALTER TABLE `logjual`
  ADD PRIMARY KEY (`no_logjual`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  MODIFY `no_barang_keluar` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  MODIFY `no_barang_masuk` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `no_log` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `logjual`
--
ALTER TABLE `logjual`
  MODIFY `no_logjual` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `no` int(30) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
