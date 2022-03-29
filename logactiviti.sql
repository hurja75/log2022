-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Mar 2022 pada 06.25
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logactiviti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity`
--

CREATE TABLE `activity` (
  `idactivity` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `kategori` varchar(30) DEFAULT NULL,
  `tindakan` text DEFAULT NULL,
  `lamanonaktif` int(11) DEFAULT NULL,
  `kondisiakhir` varchar(50) DEFAULT NULL,
  `images` varchar(99) DEFAULT NULL,
  `namauser` varchar(40) DEFAULT NULL,
  `namait` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `activity`
--

INSERT INTO `activity` (`idactivity`, `tanggal`, `lokasi`, `kategori`, `tindakan`, `lamanonaktif`, `kondisiakhir`, `images`, `namauser`, `namait`) VALUES
(16, '2022-03-23', 'PRL', 'Kerusakan/Pergantian', 'Memprbaiki jaringan', 3, 'normal', 'b84f0030d557dfd8fedb029b51a801af.jpg', 'Imran', '3'),
(17, '2022-03-28', 'BRT', 'Kerusakan/Pergantian', 'Perbaikan UPS', 70, 'Normal kembali', 'a1638266e33bd12d198a1749e6d7aca4.jpg', 'Irfan Ariawan', '3'),
(18, '2022-03-29', 'TLB01099', 'Perawatan Rutin Baru', 'Perawatan ruti', 5, 'Belum normal', '7b9de5579437b561176e8eb087ee8643.jpg', 'Jamaluddin D', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `checklist`
--

CREATE TABLE `checklist` (
  `idchecklist` int(11) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `namalokasi` varchar(50) DEFAULT NULL,
  `hybrid` varchar(20) DEFAULT NULL,
  `gto` varchar(20) DEFAULT NULL,
  `tfi` varchar(20) DEFAULT NULL,
  `ups` varchar(20) DEFAULT NULL,
  `plaza` varchar(20) DEFAULT NULL,
  `rtm` varchar(20) DEFAULT NULL,
  `barrier` varchar(20) DEFAULT NULL,
  `readerunik` varchar(20) DEFAULT NULL,
  `printer` varchar(20) DEFAULT NULL,
  `cameradom` varchar(20) DEFAULT NULL,
  `cameracapture` varchar(20) DEFAULT NULL,
  `jaringanseksi4` varchar(20) DEFAULT NULL,
  `jaringanseksi12` varchar(20) DEFAULT NULL,
  `jaringanseksi3` varchar(20) DEFAULT NULL,
  `cameraseksi12` varchar(20) DEFAULT NULL,
  `cameraseksi4` varchar(20) DEFAULT NULL,
  `cameraseksi3` varchar(20) DEFAULT NULL,
  `namait` varchar(50) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `checklist`
--

INSERT INTO `checklist` (`idchecklist`, `tanggal`, `namalokasi`, `hybrid`, `gto`, `tfi`, `ups`, `plaza`, `rtm`, `barrier`, `readerunik`, `printer`, `cameradom`, `cameracapture`, `jaringanseksi4`, `jaringanseksi12`, `jaringanseksi3`, `cameraseksi12`, `cameraseksi4`, `cameraseksi3`, `namait`, `keterangan`) VALUES
(7, '2022-02-07 00:00:00', 'KLB', 'Baik', 'Rusak', 'Rusak', 'Rusak', 'Baik', 'Rusak', 'Rusak', 'Baik', 'Rusak', 'Rusak', 'Rusak', 'Baik', 'Rusak', 'Rusak', 'Rusak', 'Rusak', 'Rusak', 'Masriadi', 'Barrierr rusak akibat kelistrikan over teganganfhtjghjghjhmhmhjmhjmhjmhjmhjmhjmhjmhjmhjmjhmjhhjmhjmhhmhjmhjmjhmhjmhjmhjmhjmhjmhjmjhmhjmhjmjhmhjmhjm'),
(8, '2022-02-01 00:00:00', 'KLB', 'Baik', 'Rusak', 'Rusak', 'Baik', 'Baik', 'Baik', 'Rusak', 'Rusak', 'Rusak', 'Rusak', 'Rusak', 'Rusak', 'Rusak', 'Rusak', 'Rusak', 'Rusak', 'Rusak', 'Kaharuddin', 'fghfghfhfhfhfh'),
(9, '2022-02-12 00:00:00', 'BRK', 'Baik', 'Rusak', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Masriadi', 'Normal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `it`
--

CREATE TABLE `it` (
  `idit` int(11) NOT NULL,
  `namait` varchar(50) DEFAULT NULL,
  `ttd` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `it`
--

INSERT INTO `it` (`idit`, `namait`, `ttd`) VALUES
(1, 'Hurja', NULL),
(2, 'Masriadi', NULL),
(3, 'Kaharuddin', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(11) NOT NULL,
  `namakategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`idkategori`, `namakategori`) VALUES
(1, 'Perbaikan'),
(2, 'Kerusakan/Pergantian'),
(3, 'Kerusakan Minor'),
(4, 'Kerusakan Mayor'),
(5, 'Pemasangan Baru'),
(6, 'Perawatan Rutin'),
(7, 'Penambahan Tinta'),
(8, 'Remote Dekstop/LC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `iduser` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`iduser`, `email`, `password`) VALUES
(1, 'menara@gmail.com', '112233');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `idlokasi` char(50) NOT NULL,
  `namalokasi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`idlokasi`, `namalokasi`) VALUES
('BRB', 'Bira Barat'),
('BRK', 'Biringkanaya'),
('BRT', 'Bira Timur'),
('CBY', 'Cambaya'),
('KLB', 'Kaluku Bodoa'),
('PRL', 'Parangloe'),
('TLB', 'Tallo Barat'),
('TLT', 'Tallo Timur'),
('TMA', 'Tamalanrea');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` char(5) NOT NULL,
  `namauser` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `namauser`) VALUES
('30123', 'A.M Arif'),
('30120', 'Ade Saputra'),
('30110', 'Ahmad Mihdar'),
('30114', 'Akbar'),
('30133', 'Andriska Ryan'),
('30105', 'Arianto Kasim'),
('30126', 'Aswir Alimran'),
('30119', 'Awaluddin'),
('30145', 'Baharuddin'),
('30142', 'Dion Trioko'),
('30127', 'Eddy Hermawan'),
('30134', 'Fahri Husain'),
('30117', 'Ferianto'),
('30129', 'H. Muh Faisal'),
('30137', 'Ilham'),
('30107', 'Imran'),
('30103', 'Indra Rahim'),
('30101', 'Irfan Ariawan'),
('30115', 'Jamaluddin D'),
('30150', 'Ka.Bang Tol BMN'),
('30160', 'Ka.Bang Tol JTSE'),
('30112', 'Kasriadi'),
('30143', 'Muh. Nurhidayatullah'),
('30108', 'Muhammad'),
('30138', 'Muslimin'),
('30136', 'Nurdin'),
('30125', 'Putra Selamat'),
('30113', 'Rahmat Muin'),
('30140', 'Rahmatullah'),
('30139', 'Ruslan'),
('30111', 'Samsir'),
('30170', 'Sanniha'),
('30131', 'Slametriadi'),
('30128', 'Sugianto'),
('30135', 'Syafruddin'),
('30118', 'Wahyu Ashari'),
('30116', 'Wahyu DS'),
('30106', 'Zaenal'),
('30141', 'Zulkifli Abdullah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`idactivity`) USING BTREE;

--
-- Indeks untuk tabel `checklist`
--
ALTER TABLE `checklist`
  ADD PRIMARY KEY (`idchecklist`) USING BTREE;

--
-- Indeks untuk tabel `it`
--
ALTER TABLE `it`
  ADD PRIMARY KEY (`idit`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`iduser`) USING BTREE;

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`idlokasi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`) USING BTREE,
  ADD KEY `KSPT` (`namauser`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activity`
--
ALTER TABLE `activity`
  MODIFY `idactivity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `checklist`
--
ALTER TABLE `checklist`
  MODIFY `idchecklist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `it`
--
ALTER TABLE `it`
  MODIFY `idit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
