-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

<<<<<<< HEAD
-- Data exporting was unselected.

-- Data exporting was unselected.

-- Data exporting was unselected.
=======
-- Dumping data for table eduwork.apotek: ~0 rows (approximately)
INSERT INTO `apotek` (`id`, `nama`, `lokasi`, `tahun_berdiri`, `id_pj`) VALUES
	(11, 'Apotek Sehat', 'surabaya', '1990-01-01', 1),
	(12, 'Apotek Maju', 'Bandung', '2000-01-01', 2),
	(13, 'Apotek Sumber Sehat', 'Yogyakarta', '2010-05-15', 3),
	(14, 'Apotek Farma', 'Surabaya', '2015-03-22', 4),
	(15, 'Apotek Mandiri', 'Medan', '2018-07-11', 5),
	(16, 'Apotek Kesehatan', 'Makassar', '2020-08-15', 6),
	(17, 'Apotek Tunas', 'Denpasar', '2005-02-28', 7),
	(18, 'Apotek Sejahtera', 'Bali', '2012-10-25', 8),
	(19, 'Apotek Sentosa', 'Malang', '2016-09-30', 9),
	(20, 'Apotek Bahagia', 'Solo', '2022-06-18', 10);

-- Dumping data for table eduwork.petugas: ~0 rows (approximately)
INSERT INTO `petugas` (`id`, `nama`, `tanggal_lahir`, `alamat`, `no_tlp`) VALUES
	(1, 'Budi', '1985-05-12', 'Jl. Kebon Jeruk', '08123456789'),
	(2, 'Andi', '1990-08-15', 'Jl. Merdeka', '08123456780'),
	(3, 'Siti', '1982-04-20', 'Jl. Raya Bogor', '08567891234'),
	(4, 'Andi', '1980-12-11', 'Jl. Sejahtera', '08765432101'),
	(5, 'Rina', '1995-03-05', 'Jl. Cempaka', '08345678912'),
	(6, 'Joko', '1988-08-19', 'Jl. Griya', '08234567890'),
	(7, 'Nina', '1983-01-22', 'Jl. Hutan', '08102345678'),
	(8, 'Fikri', '1992-10-12', 'Jl. Raya Selatan', '08234567901'),
	(9, 'Dina', '1994-02-14', 'Jl. Pahlawan', '08522334455'),
	(10, 'Yanti', '1997-09-09', 'Jl. Anggrek', '08772334456');

-- Dumping data for table eduwork.petugas_apotek: ~0 rows (approximately)
INSERT INTO `petugas_apotek` (`id`, `id_petugas`, `id_apotek`) VALUES
	(13, 1, 11),
	(14, 2, 12),
	(15, 3, 13),
	(16, 4, 14),
	(17, 5, 15),
	(18, 6, 16),
	(19, 7, 17),
	(20, 8, 18),
	(21, 9, 19),
	(22, 10, 20);
>>>>>>> MRyanValentin

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
