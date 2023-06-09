-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2021 pada 05.46
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarpras`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `stock` int(10) NOT NULL,
  `status` enum('tampilkan','sembunyikan','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `name`, `desc`, `stock`, `status`) VALUES
(1, 'bola voli', 'ini bola voli', 35, 'tampilkan'),
(2, 'a', 'b', 7, 'tampilkan'),
(3, 'b', 'a', 5, 'tampilkan'),
(6, 'z', 'z', 10, 'sembunyikan'),
(7, 'q', 'q', 8, 'tampilkan'),
(10, 'qw', 'qw', 0, 'tampilkan'),
(11, 'Laptop HP ', 'Laptop HP ', 8, 'tampilkan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peminjam`
--

CREATE TABLE `tbl_peminjam` (
  `id_peminjam` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_peminjam`
--

INSERT INTO `tbl_peminjam` (`id_peminjam`, `username`, `password`, `name`, `email`) VALUES
(1, 'peminjam', 'VHQJZFQ9A24GaQI5DGELaQ==', 'peminjam', 'peminjam@email.com'),
(30, 'purwa', 'J6mqsm/D+ZPW/0/LsWHQQMT6EwSlp9O6ionun3F6DwSiUUt6670cDXsHzNW206+59GEemoljs93BWQ8KWAN78g==', 'Purwa Sabrang Ramadhan ', 'psr@a.com'),
(38, 'yuda', 'oVSXKtKcnClfbg2TI8pLJnxV8LlGsPCA3MZg6iuZ41efIDG06I59Q+1DGtQwuOsnLApsmbUAN0zePjqm3/QbMA==', 'Yuda Aduy', 'yda@ady.com'),
(39, 'wardah', '9H2YHywNRJMom3YesNU4gorGVRDDbfl6SLTP3UXCpR+fQ//Os+5zOBSoo5GxImCecYkEouP4ERGNKLgEq1u4zA==', 'wardah', 'wardah@gmail.com'),
(40, 'haryanto', 'UjMLMQA3', 'haryanto', 'haryanto@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `id_petugas` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`id_petugas`, `username`, `password`, `name`, `email`, `photo`) VALUES
(1, 'superadmin', 'BiYPYgV1Dn9XMQExB3g=', 'Administrator', 'admin@email.com', ''),
(2, 'petugas', 'BiYPYgV1Dn9XMQExB3g=', 'petugas', 'petugas@email.com', '\r\n'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'admin@admin.com', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pinjam`
--

CREATE TABLE `tbl_pinjam` (
  `id_pinjam` int(10) NOT NULL,
  `id_peminjam` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `jml` int(20) NOT NULL,
  `tgl_pinjam` datetime NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `status` enum('0','1','2','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pinjam`
--

INSERT INTO `tbl_pinjam` (`id_pinjam`, `id_peminjam`, `id_barang`, `jml`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(43, 38, 1, 5, '2018-11-02 21:32:43', '0000-00-00 00:00:00', '1'),
(45, 38, 2, 3, '2018-11-02 21:33:02', '0000-00-00 00:00:00', '0'),
(46, 38, 3, 5, '2018-11-02 23:32:16', '0000-00-00 00:00:00', '0'),
(47, 30, 1, 5, '2018-11-02 23:42:06', '0000-00-00 00:00:00', '0'),
(48, 1, 1, 5, '2021-11-14 13:01:42', '0000-00-00 00:00:00', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_riwayat`
--

CREATE TABLE `tbl_riwayat` (
  `id_pinjam` int(10) NOT NULL,
  `id_peminjam` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `jml` int(20) NOT NULL,
  `tgl_pinjam` datetime NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `status` enum('0','1','2','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tbl_peminjam`
--
ALTER TABLE `tbl_peminjam`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indeks untuk tabel `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_peminjam`
--
ALTER TABLE `tbl_peminjam`
  MODIFY `id_peminjam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  MODIFY `id_petugas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  MODIFY `id_pinjam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
