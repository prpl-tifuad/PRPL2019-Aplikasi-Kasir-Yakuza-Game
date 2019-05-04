-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2019 pada 20.14
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` varchar(20) NOT NULL,
  `jadwal_shift` varchar(30) NOT NULL,
  `nomor_hp` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `jadwal_shift`, `nomor_hp`) VALUES
('001', '12-12-18 09:00:00', 821991729),
('002', '13-12-18 00:00:00', 821375690),
('003', '14-12-18 12:00:00', 812374647),
('004', '15-12-18 18:00:00', 812341317),
('005', '15-12-2018', 822335343),
('006', '17-12-2018', 817332899),
('007', '20-12-2018', 821305637);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_pc`
--

CREATE TABLE `kategori_pc` (
  `nomor_pc` varchar(20) NOT NULL,
  `kelengkapan_pc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_pc`
--

INSERT INTO `kategori_pc` (`nomor_pc`, `kelengkapan_pc`) VALUES
('1', 'monitor,keyboard,pc,mouse'),
('2', 'monitor,keyboard,pc,mouse,joystick'),
('3', 'monitor,keyboard,pc,mouse,joystick'),
('4', 'monitor,keyboard,pc,mouse,joystick'),
('5', 'monitor,keyboard,pc,mouse,joystick'),
('6', 'monitor,pc,muose,keyboard,joystick,headset'),
('7', 'monitor,pc,muose,keyboard,joystick,headset'),
('8', 'monitor,pc,muose,keyboard,joystick,headset'),
('9', 'monitor,pc,muose,keyboard,joystick,headset');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`) VALUES
('101', 'Gilang Asis Ramadan'),
('102', 'Binta Wahyu'),
('103', 'Dimas Aji'),
('104', 'Abi Fajar'),
('105', 'Lalu Arfi'),
('106', 'Dian Ramadhani'),
('107', 'Tyo Idzhar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_pc`
--

CREATE TABLE `produk_pc` (
  `nama_produk` varchar(20) NOT NULL,
  `jenis_produk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk_pc`
--

INSERT INTO `produk_pc` (`nama_produk`, `jenis_produk`) VALUES
('lg', '30 inch'),
('polytron', '32 inch'),
('samsung', '28 inch');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prosesbayar`
--

CREATE TABLE `prosesbayar` (
  `nomor_pc` varchar(20) NOT NULL,
  `nama_produk` varchar(20) NOT NULL,
  `id_pelanggan` varchar(20) NOT NULL,
  `id_karyawan` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_pemakain` float DEFAULT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prosesbayar`
--

INSERT INTO `prosesbayar` (`nomor_pc`, `nama_produk`, `id_pelanggan`, `id_karyawan`, `tanggal`, `waktu_pemakain`, `harga`) VALUES
('1', 'lg', '105', '006', '2018-12-30', 2, '10000'),
('2', 'polytron', '102', '003', '2018-12-31', 8, '40000'),
('3', 'samsung', '107', '001', '2019-01-02', 3, '15000'),
('4', 'lg', '104', '005', '2019-01-02', 1, '5000'),
('7', 'polytron', '105', '003', '2019-01-03', 1, '5000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `kategori_pc`
--
ALTER TABLE `kategori_pc`
  ADD PRIMARY KEY (`nomor_pc`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `produk_pc`
--
ALTER TABLE `produk_pc`
  ADD PRIMARY KEY (`nama_produk`);

--
-- Indeks untuk tabel `prosesbayar`
--
ALTER TABLE `prosesbayar`
  ADD PRIMARY KEY (`nomor_pc`,`nama_produk`,`id_pelanggan`,`id_karyawan`),
  ADD KEY `nama_produk` (`nama_produk`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `prosesbayar`
--
ALTER TABLE `prosesbayar`
  ADD CONSTRAINT `prosesbayar_ibfk_1` FOREIGN KEY (`nomor_pc`) REFERENCES `kategori_pc` (`nomor_pc`),
  ADD CONSTRAINT `prosesbayar_ibfk_2` FOREIGN KEY (`nama_produk`) REFERENCES `produk_pc` (`nama_produk`),
  ADD CONSTRAINT `prosesbayar_ibfk_3` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `prosesbayar_ibfk_4` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
