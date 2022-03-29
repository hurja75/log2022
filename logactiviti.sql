-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for logactiviti
CREATE DATABASE IF NOT EXISTS `logactiviti` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `logactiviti`;

-- Dumping structure for table logactiviti.activity
CREATE TABLE IF NOT EXISTS `activity` (
  `idactivity` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `kategori` varchar(30) DEFAULT NULL,
  `tindakan` text DEFAULT NULL,
  `lamanonaktif` int(11) DEFAULT NULL,
  `kondisiakhir` varchar(50) DEFAULT NULL,
  `images` varchar(99) DEFAULT NULL,
  `namauser` varchar(40) DEFAULT NULL,
  `namait` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idactivity`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table logactiviti.activity: ~3 rows (approximately)
/*!40000 ALTER TABLE `activity` DISABLE KEYS */;
INSERT INTO `activity` (`idactivity`, `tanggal`, `lokasi`, `kategori`, `tindakan`, `lamanonaktif`, `kondisiakhir`, `images`, `namauser`, `namait`) VALUES
	(16, '2022-03-23', 'PRL', 'Kerusakan/Pergantian', 'Memprbaiki jaringan', 3, 'normal', 'b84f0030d557dfd8fedb029b51a801af.jpg', 'Imran', '3'),
	(17, '2022-03-28', 'BRT', 'Kerusakan/Pergantian', 'Perbaikan UPS', 70, 'Normal kembali', 'a1638266e33bd12d198a1749e6d7aca4.jpg', 'Irfan Ariawan', '3'),
	(18, '2022-03-29', 'TLB01099', 'Perawatan Rutin Baru', 'Perawatan ruti', 5, 'Belum normal', '7b9de5579437b561176e8eb087ee8643.jpg', 'Jamaluddin D', '2');
/*!40000 ALTER TABLE `activity` ENABLE KEYS */;

-- Dumping structure for table logactiviti.checklist
CREATE TABLE IF NOT EXISTS `checklist` (
  `idchecklist` int(11) NOT NULL AUTO_INCREMENT,
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
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`idchecklist`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table logactiviti.checklist: ~1 rows (approximately)
/*!40000 ALTER TABLE `checklist` DISABLE KEYS */;
INSERT INTO `checklist` (`idchecklist`, `tanggal`, `namalokasi`, `hybrid`, `gto`, `tfi`, `ups`, `plaza`, `rtm`, `barrier`, `readerunik`, `printer`, `cameradom`, `cameracapture`, `jaringanseksi4`, `jaringanseksi12`, `jaringanseksi3`, `cameraseksi12`, `cameraseksi4`, `cameraseksi3`, `namait`, `keterangan`) VALUES
	(7, '2022-02-07 00:00:00', 'KLB', 'Baik', 'Rusak', 'Rusak', 'Rusak', 'Baik', 'Rusak', 'Rusak', 'Baik', 'Rusak', 'Rusak', 'Rusak', 'Baik', 'Rusak', 'Rusak', 'Rusak', 'Rusak', 'Rusak', 'Masriadi', 'Barrierr rusak akibat kelistrikan over teganganfhtjghjghjhmhmhjmhjmhjmhjmhjmhjmhjmhjmhjmjhmjhhjmhjmhhmhjmhjmjhmhjmhjmhjmhjmhjmhjmjhmhjmhjmjhmhjmhjm'),
	(8, '2022-02-01 00:00:00', 'KLB', 'Baik', 'Rusak', 'Rusak', 'Baik', 'Baik', 'Baik', 'Rusak', 'Rusak', 'Rusak', 'Rusak', 'Rusak', 'Rusak', 'Rusak', 'Rusak', 'Rusak', 'Rusak', 'Rusak', 'Kaharuddin', 'fghfghfhfhfhfh'),
	(9, '2022-02-12 00:00:00', 'BRK', 'Baik', 'Rusak', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Baik', 'Masriadi', 'Normal');
/*!40000 ALTER TABLE `checklist` ENABLE KEYS */;

-- Dumping structure for table logactiviti.it
CREATE TABLE IF NOT EXISTS `it` (
  `idit` int(11) NOT NULL AUTO_INCREMENT,
  `namait` varchar(50) DEFAULT NULL,
  `ttd` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idit`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table logactiviti.it: ~3 rows (approximately)
/*!40000 ALTER TABLE `it` DISABLE KEYS */;
INSERT INTO `it` (`idit`, `namait`, `ttd`) VALUES
	(1, 'Hurja', NULL),
	(2, 'Masriadi', NULL),
	(3, 'Kaharuddin', NULL);
/*!40000 ALTER TABLE `it` ENABLE KEYS */;

-- Dumping structure for table logactiviti.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `idkategori` int(11) NOT NULL AUTO_INCREMENT,
  `namakategori` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idkategori`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table logactiviti.kategori: ~8 rows (approximately)
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` (`idkategori`, `namakategori`) VALUES
	(1, 'Perbaikan'),
	(2, 'Kerusakan/Pergantian'),
	(3, 'Kerusakan Minor'),
	(4, 'Kerusakan Mayor'),
	(5, 'Pemasangan Baru'),
	(6, 'Perawatan Rutin'),
	(7, 'Penambahan Tinta'),
	(8, 'Remote Dekstop/LC');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;

-- Dumping structure for table logactiviti.login
CREATE TABLE IF NOT EXISTS `login` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`iduser`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table logactiviti.login: ~0 rows (approximately)
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`iduser`, `email`, `password`) VALUES
	(1, 'menara@gmail.com', '112233');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

-- Dumping structure for table logactiviti.lokasi
CREATE TABLE IF NOT EXISTS `lokasi` (
  `idlokasi` char(50) NOT NULL,
  `namalokasi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idlokasi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table logactiviti.lokasi: ~10 rows (approximately)
/*!40000 ALTER TABLE `lokasi` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `lokasi` ENABLE KEYS */;

-- Dumping structure for table logactiviti.user
CREATE TABLE IF NOT EXISTS `user` (
  `iduser` char(5) NOT NULL,
  `namauser` char(40) DEFAULT NULL,
  `ttd` text DEFAULT NULL,
  PRIMARY KEY (`iduser`) USING BTREE,
  KEY `KSPT` (`namauser`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table logactiviti.user: ~39 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`iduser`, `namauser`, `ttd`) VALUES
	('30101', 'Irfan Ariawan', NULL),
	('30103', 'Indra Rahim', NULL),
	('30105', 'Arianto Kasim', NULL),
	('30106', 'Zaenal', NULL),
	('30107', 'Imran', NULL),
	('30108', 'Muhammad', NULL),
	('30110', 'Ahmad Mihdar', NULL),
	('30111', 'Samsir', NULL),
	('30112', 'Kasriadi', NULL),
	('30113', 'Rahmat Muin', NULL),
	('30114', 'Akbar', NULL),
	('30115', 'Jamaluddin D', NULL),
	('30116', 'Wahyu DS', NULL),
	('30117', 'Ferianto', NULL),
	('30118', 'Wahyu Ashari', NULL),
	('30119', 'Awaluddin', NULL),
	('30120', 'Ade Saputra', NULL),
	('30123', 'A.M Arif', NULL),
	('30125', 'Putra Selamat', NULL),
	('30126', 'Aswir Alimran', NULL),
	('30127', 'Eddy Hermawan', NULL),
	('30128', 'Sugianto', NULL),
	('30129', 'H. Muh Faisal', NULL),
	('30131', 'Slametriadi', NULL),
	('30133', 'Andriska Ryan', NULL),
	('30134', 'Fahri Husain', NULL),
	('30135', 'Syafruddin', NULL),
	('30136', 'Nurdin', NULL),
	('30137', 'Ilham', NULL),
	('30138', 'Muslimin', NULL),
	('30139', 'Ruslan', NULL),
	('30140', 'Rahmatullah', NULL),
	('30141', 'Zulkifli Abdullah', NULL),
	('30142', 'Dion Trioko', NULL),
	('30143', 'Muh. Nurhidayatullah', NULL),
	('30145', 'Baharuddin', NULL),
	('30150', 'Ka.Bang Tol BMN', NULL),
	('30160', 'Ka.Bang Tol JTSE', NULL),
	('30170', 'Sanniha', NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
