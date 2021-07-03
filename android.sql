-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Feb 2021 pada 14.36
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `android`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` text,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, 'agrobis', 1, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_cekharian`
--

CREATE TABLE `tabel_cekharian` (
  `id` int(11) NOT NULL,
  `tanggal_waktu_cek` datetime NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `alamat_kandang` varchar(100) NOT NULL,
  `kode_kandang` varchar(150) NOT NULL,
  `kode_blok` varchar(100) NOT NULL,
  `jumlah_ayam` varchar(100) NOT NULL,
  `umur_ayam` varchar(100) NOT NULL,
  `tanggal_ayam_masuk` date NOT NULL,
  `kondisi_ayam` varchar(100) NOT NULL,
  `jumlah_ayam_sakit` varchar(100) DEFAULT NULL,
  `gejala_sakit` varchar(100) DEFAULT NULL,
  `jam_pakan` time NOT NULL,
  `jam_ganti_minum` time NOT NULL,
  `jam_ganti_vitamin` time NOT NULL,
  `jumlah_pakan` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_cekharian`
--

INSERT INTO `tabel_cekharian` (`id`, `tanggal_waktu_cek`, `nama_petugas`, `alamat_kandang`, `kode_kandang`, `kode_blok`, `jumlah_ayam`, `umur_ayam`, `tanggal_ayam_masuk`, `kondisi_ayam`, `jumlah_ayam_sakit`, `gejala_sakit`, `jam_pakan`, `jam_ganti_minum`, `jam_ganti_vitamin`, `jumlah_pakan`, `latitude`, `longitude`, `file`, `slug`, `id_user`) VALUES
(1, '2021-02-05 15:31:15', 'nurhilal hamdi', 'Jl. Merdeka', 'KDG0008', 'BLK3300', '680 Ekor', '33 Hari', '2020-08-09', 'Sehat', '0 Ekor', 'Tidak Ada Gejala', '04:00:00', '05:00:00', '06:00:00', '10 Kilogram', '-4.0127714', '119.6266792', '1612510263314.jpg', '', 1),
(2, '2021-02-05 17:18:52', 'nurhilal hamdi', 'Jl Berkah', 'KDG8000', 'BLK5000', '350 Ekor', '11 Hari', '2020-02-02', 'Sehat', '0 Ekor', 'Tidak Ada Gejala', '04:00:00', '05:00:00', '06:00:00', '6 Kilogram', '-4.0127718', '119.6266827', '1612516725647.jpg', '', 1),
(3, '2021-02-01 13:10:22', 'bro', 'Jl. Merdeka', '002asdasdasd', '001asda', '120 ekor', '12 hari', '0000-00-00', 'sehat', '0', '0', '10:00:00', '11:00:00', '12:00:00', '12', '12010210', '120120', '20201229_153922.jpg', '', 1),
(4, '2021-02-01 13:10:22', 'bro', 'Jl. Merdeka', '002asdasdasd', '001asda', '120 ekor', '12 hari', '0000-00-00', 'sehat', '0', '0', '10:00:00', '11:00:00', '12:00:00', '12', '12010210', '120120', 'http://localhost/PurnamaCI/Test/1212.png', '', 1),
(5, '2021-02-06 15:39:31', 'nurhilal hamdi', 'Jl. Cikampek', 'KDG1234', 'BLK4321', '806 Ekor', '11 Hari', '0000-00-00', 'Sehat', '0 Ekor', 'Tidak Ada Gejala', '01:00:00', '02:00:00', '03:00:00', '25 Kilogram', '-4.0127715', '119.6266797', 'http://localhost/PurnamaCI/Test/1612597163207.jpg', '', 1),
(6, '2021-02-06 15:43:30', 'nurhilal hamdi', 'Jl. cipayu', 'KDG9990', 'BLK0008', '360 Ekor', '39 Hari', '2020-08-06', 'Sehat', '0 Ekor', 'Tidak Ada Gejala', '06:00:00', '07:00:00', '08:00:00', '13 Kilogram', '-4.0127723', '119.6266776', 'http://localhost/PurnamaCI/Test/1612597401588.jpg', '', 1),
(7, '2021-02-11 11:52:03', 'nurhilal hamdi', 'jl. surabaya', 'KDG001', 'BLK200', '206 Ekor', '12 Hari', '2020-02-02', 'Sehat', '0 Ekor', 'Tidak Ada Gejala', '02:00:00', '04:00:00', '05:00:00', '5 Kilogram', '-4.0121504', '119.6270849', 'http://localhost/PurnamaCI/Test/1613015513042.jpg', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_ceksampel`
--

CREATE TABLE `tabel_ceksampel` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tanggal_waktu_sampel` datetime NOT NULL,
  `kode_kandang` varchar(150) NOT NULL,
  `kode_blok` varchar(150) NOT NULL,
  `jumlah_ayam` varchar(150) NOT NULL,
  `umur_ayam` varchar(150) NOT NULL,
  `kondisi_ayam` varchar(150) NOT NULL,
  `bobot_rata_rata` varchar(150) NOT NULL,
  `jenis_ayam_sampel` varchar(150) NOT NULL,
  `bobot_ayam_sampel` varchar(150) NOT NULL,
  `jumlah_ayam_sampel` varchar(150) NOT NULL,
  `latitude` varchar(150) NOT NULL,
  `longitude` varchar(150) NOT NULL,
  `file` varchar(250) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_ceksampel`
--

INSERT INTO `tabel_ceksampel` (`id`, `nama`, `tanggal_waktu_sampel`, `kode_kandang`, `kode_blok`, `jumlah_ayam`, `umur_ayam`, `kondisi_ayam`, `bobot_rata_rata`, `jenis_ayam_sampel`, `bobot_ayam_sampel`, `jumlah_ayam_sampel`, `latitude`, `longitude`, `file`, `id_user`) VALUES
(1, 'Nurhilal Hamdi', '0000-00-00 00:00:00', '100', '200', '29', '12', 's', '123', '', '', '', '', '', '', 1),
(2, 'Nurhilal Hamdi', '0000-00-00 00:00:00', '100', '200', '29', '12', 's', '123', '', '', '', '', '', '', 1),
(3, 'nurhilal hamdi', '2021-02-11 12:13:45', 'KDG88', 'BLK55', '3 Ekor', '10 Hari', '23', '31.0', '', '', '', '', '', '', 1),
(4, 'Nurhilal Hamdi', '0000-00-00 00:00:00', '100', '200', '29', '12', 's', '123', 'qwe', '1231', '412', '1241', '14', 'http://localhost/PurnamaCI/Test/C.png', 1),
(5, 'Nurhilal Hamdi', '0000-00-00 00:00:00', '100', '200', '29', '12', 's', '123', 'qwe', '1231', '412', '1241', '14', 'http://localhost/PurnamaCI/Test/CekSampelFileA.png', 1),
(6, 'Nurhilal Hamdi', '0000-00-00 00:00:00', '100', '200', '29', '12', 's', '123', 'qwe', '1231', '412', '1241', '14', 'http://localhost/PurnamaCI/Test/CekSampelFile/A.png', 1),
(7, 'Nurhilal Hamdi', '0000-00-00 00:00:00', '100', '200', '29', '12', 's', '123', 'qwe', '1231', '412', '1241', '14', 'http://localhost/PurnamaCI/Test/CekSampelFile/B.png', 1),
(8, 'nurhilal hamdi', '2021-02-13 14:35:01', 'KDG99', 'BLK08', '66 Ekor', '14 Hari', 'sff', '15.5', 'Ayam Sedang', '93', '6', '-4.0127699', '119.6266898', 'http://localhost/PurnamaCI/Test/CekSampelFile/1613198088912.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `no_telephone` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nama`, `username`, `alamat`, `email`, `no_telephone`, `password`) VALUES
(1, 'nurhilal hamdi', 'hamdi_hilal', 'Jl. Ahmad Yani', 'hamdihilal@gmail.com', '081142106248', '17304026ec041b63447355f3f4c2fd99');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_cekharian`
--
ALTER TABLE `tabel_cekharian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tabel_ceksampel`
--
ALTER TABLE `tabel_ceksampel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_cekharian`
--
ALTER TABLE `tabel_cekharian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tabel_ceksampel`
--
ALTER TABLE `tabel_ceksampel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_cekharian`
--
ALTER TABLE `tabel_cekharian`
  ADD CONSTRAINT `tabel_cekharian_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tabel_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_ceksampel`
--
ALTER TABLE `tabel_ceksampel`
  ADD CONSTRAINT `tabel_ceksampel_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tabel_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
