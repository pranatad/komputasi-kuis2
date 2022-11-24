-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 03 Jul 2019 pada 03.25
-- Versi server: 10.3.14-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id9226201_multi_user`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kode_brg` int(11) NOT NULL,
  `nama_brg` varchar(10) NOT NULL,
  `jenis_brg` varchar(10) NOT NULL,
  `harga` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_barang`
--

CREATE TABLE `detail_barang` (
  `kode_det_brg` int(11) NOT NULL,
  `kode_brg` int(4) NOT NULL,
  `stok_brg` int(3) NOT NULL,
  `id_bag_gudang` int(4) NOT NULL,
  `tgl_det_brg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_beli_barang`
--

CREATE TABLE `detail_beli_barang` (
  `kode_beli_brg` int(11) NOT NULL,
  `kode_brg` int(4) NOT NULL,
  `tgl_beli` varchar(10) NOT NULL,
  `qty` int(3) NOT NULL,
  `id_bag_pembelian` int(4) NOT NULL,
  `id_bag_keuangan` int(4) NOT NULL,
  `id_faktur` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_jual_barang`
--

CREATE TABLE `detail_jual_barang` (
  `kode_jual_brg` int(11) NOT NULL,
  `kode_brg` int(4) NOT NULL,
  `qty` int(3) NOT NULL,
  `id_bag_pemasaran` int(4) NOT NULL,
  `id_bag_keuangan` int(4) NOT NULL,
  `tgl_jual` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `faktur_pembelian`
--

CREATE TABLE `faktur_pembelian` (
  `id_faktur` int(11) NOT NULL,
  `tgl_faktur` varchar(10) NOT NULL,
  `id_bag_keuangan` int(4) NOT NULL,
  `id_bag_pembelian` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_keuangan`
--

CREATE TABLE `laporan_keuangan` (
  `kode_keuangan` int(11) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `tgl_laporan` varchar(10) NOT NULL,
  `total` int(3) NOT NULL,
  `id_bag_keuangan` int(4) NOT NULL,
  `id_bag_pembelian` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan_barang`
--

CREATE TABLE `permintaan_barang` (
  `kode_per_brg` int(11) NOT NULL,
  `kode_brg` int(4) NOT NULL,
  `id_bag_pemasaran` int(4) NOT NULL,
  `id_bag_gudang` int(4) NOT NULL,
  `qty` int(4) NOT NULL,
  `tgl_per_brg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'pemasaran', 'pemasaran', 'pemasaran1', 'pemasaran'),
(2, 'keuangan', 'keuangan', 'keuangan2', 'keuangan'),
(3, 'pembelian', 'pembelian', 'pembelian3', 'pembelian'),
(4, 'gudang', 'gudang', 'gudang4', 'gudang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_brg`),
  ADD KEY `nama_brg` (`nama_brg`);

--
-- Indeks untuk tabel `detail_barang`
--
ALTER TABLE `detail_barang`
  ADD PRIMARY KEY (`kode_det_brg`),
  ADD KEY `kode_brg` (`kode_brg`);

--
-- Indeks untuk tabel `detail_beli_barang`
--
ALTER TABLE `detail_beli_barang`
  ADD PRIMARY KEY (`kode_beli_brg`),
  ADD KEY `kode_brg` (`kode_brg`);

--
-- Indeks untuk tabel `detail_jual_barang`
--
ALTER TABLE `detail_jual_barang`
  ADD PRIMARY KEY (`kode_jual_brg`),
  ADD KEY `kode_brg` (`kode_brg`);

--
-- Indeks untuk tabel `faktur_pembelian`
--
ALTER TABLE `faktur_pembelian`
  ADD PRIMARY KEY (`id_faktur`),
  ADD KEY `tgl_faktur` (`tgl_faktur`);

--
-- Indeks untuk tabel `laporan_keuangan`
--
ALTER TABLE `laporan_keuangan`
  ADD PRIMARY KEY (`kode_keuangan`),
  ADD KEY `periode` (`periode`);

--
-- Indeks untuk tabel `permintaan_barang`
--
ALTER TABLE `permintaan_barang`
  ADD PRIMARY KEY (`kode_per_brg`),
  ADD KEY `kode_brg` (`kode_brg`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `kode_brg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_barang`
--
ALTER TABLE `detail_barang`
  MODIFY `kode_det_brg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_beli_barang`
--
ALTER TABLE `detail_beli_barang`
  MODIFY `kode_beli_brg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_jual_barang`
--
ALTER TABLE `detail_jual_barang`
  MODIFY `kode_jual_brg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `faktur_pembelian`
--
ALTER TABLE `faktur_pembelian`
  MODIFY `id_faktur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `laporan_keuangan`
--
ALTER TABLE `laporan_keuangan`
  MODIFY `kode_keuangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `permintaan_barang`
--
ALTER TABLE `permintaan_barang`
  MODIFY `kode_per_brg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
