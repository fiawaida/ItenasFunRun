-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.6-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for nikahan
CREATE DATABASE IF NOT EXISTS `nikahan` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `nikahan`;

-- Dumping structure for table nikahan.meja
CREATE TABLE IF NOT EXISTS `meja` (
  `id_meja` int(11) NOT NULL AUTO_INCREMENT,
  `no_meja` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_meja`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Dumping data for table nikahan.meja: ~19 rows (approximately)
/*!40000 ALTER TABLE `meja` DISABLE KEYS */;
INSERT INTO `meja` (`id_meja`, `no_meja`) VALUES
	(1, '01'),
	(2, '02'),
	(3, '03'),
	(4, '04'),
	(5, '05'),
	(6, '06'),
	(7, '07'),
	(8, '08'),
	(9, '09'),
	(10, '10'),
	(11, '11'),
	(12, '12'),
	(13, '13'),
	(14, '14'),
	(15, '15'),
	(16, '16'),
	(17, '17'),
	(18, '18'),
	(19, '19');
/*!40000 ALTER TABLE `meja` ENABLE KEYS */;

-- Dumping structure for table nikahan.riwayat
CREATE TABLE IF NOT EXISTS `riwayat` (
  `id_riwayat` int(11) NOT NULL AUTO_INCREMENT,
  `id_tamu` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id_riwayat`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table nikahan.riwayat: ~9 rows (approximately)
/*!40000 ALTER TABLE `riwayat` DISABLE KEYS */;
INSERT INTO `riwayat` (`id_riwayat`, `id_tamu`, `status`, `created`, `updated`) VALUES
	(1, 2, 'hadir', '2022-02-18 16:08:02', '2022-02-18 16:08:02'),
	(2, 1, 'hadir', '2022-02-18 16:08:58', '2022-02-18 16:08:58'),
	(3, 3, 'hadir', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(4, 4, 'hadir', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(5, 5, 'hadir', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(6, 6, 'hadir', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(7, 7, 'hadir', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(8, 8, 'hadir', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(10, 1, 'hadir', '2022-02-28 15:21:25', '2022-02-28 15:21:25');
/*!40000 ALTER TABLE `riwayat` ENABLE KEYS */;

-- Dumping structure for table nikahan.tamu
CREATE TABLE IF NOT EXISTS `tamu` (
  `id_tamu` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `jumlah` varchar(50) DEFAULT NULL,
  `konfirmasi` varchar(50) DEFAULT NULL,
  `pesan` varchar(50) DEFAULT NULL,
  `qr_code` varchar(50) DEFAULT NULL,
  `no_meja` varchar(50) DEFAULT NULL,
  `img_meja` varchar(50) DEFAULT NULL,
  `status` enum('hadir','belum hadir','tidak hadir') DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id_tamu`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table nikahan.tamu: ~9 rows (approximately)
/*!40000 ALTER TABLE `tamu` DISABLE KEYS */;
INSERT INTO `tamu` (`id_tamu`, `role_id`, `username`, `password`, `nama`, `no_hp`, `email`, `jumlah`, `konfirmasi`, `pesan`, `qr_code`, `no_meja`, `img_meja`, `status`, `created`, `updated`) VALUES
	(1, 1, 'fia', '944626adf9e3b76a3919b50dc0b080a4', 'Nafia chosyyatillah', '+6288222071681', 'ruwaida0705@gmail.com', '2', 'Yes, I will be there', '', '', '1', '01.png', 'hadir', '2022-02-28 15:11:27', '2022-02-28 15:11:27'),
	(2, 1, 'Gamsbuy', '944626adf9e3b76a3919b50dc0b080a4', 'Gamas', '0852123859', 'gamas@gmail.com', '2', 'Yes, I will be there', 'Hadirr', 'Gamas.png', '1', NULL, 'belum hadir', '2022-02-22 12:44:42', '2022-02-22 12:44:42'),
	(3, 1, NULL, '944626adf9e3b76a3919b50dc0b080a4', 'Ferry N', '09895865384', '', '1', 'Yes, I will be there', 'semoga lancar', 'Ferry N.png', '1', NULL, NULL, '2022-02-26 17:18:39', '2022-02-26 17:18:39'),
	(4, 1, 'zia', '944626adf9e3b76a3919b50dc0b080a4', 'Tirtazia M', NULL, NULL, '1', NULL, NULL, NULL, '2', NULL, NULL, '2022-02-21 02:26:37', '2022-02-21 02:26:36'),
	(5, 1, 'hani', '944626adf9e3b76a3919b50dc0b080a4', 'Hani N', '085114127135', NULL, '2', NULL, NULL, NULL, '2', NULL, NULL, '2022-02-21 02:28:14', '2022-02-21 02:28:15'),
	(6, 1, 'Al', '944626adf9e3b76a3919b50dc0b080a4', 'Alhimny', NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, 'hadir', '2022-03-01 00:30:21', '2022-03-01 00:30:21'),
	(7, 1, 'Arsya', '944626adf9e3b76a3919b50dc0b080a4', 'Arsya K', NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, 'hadir', '2022-03-01 00:30:44', '2022-03-01 00:30:44'),
	(8, 1, 'Nadita', '944626adf9e3b76a3919b50dc0b080a4', 'Nadita S', NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, NULL, '2022-02-21 02:29:55', '2022-02-21 02:29:58'),
	(9, 1, 'ica', '944626adf9e3b76a3919b50dc0b080a4', 'Annisa\'', NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, NULL, '2022-02-21 02:30:23', '2022-02-21 02:30:24');
/*!40000 ALTER TABLE `tamu` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
