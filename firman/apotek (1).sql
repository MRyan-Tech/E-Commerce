-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Nov 2024 pada 13.09
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_tlp` varchar(13) DEFAULT NULL,
  `id_resep` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `alamat`, `no_tlp`, `id_resep`) VALUES
(1, 'wijaya', 'bsd city', '089546773987', NULL),
(2, 'baskara', 'cengkareng', '083882662874', NULL),
(3, 'putri', 'cipondoh', '087327637468', NULL),
(4, 'sanjaya', 'ciledug', '083882662683', NULL),
(5, 'larisa', 'cipondoh', '087327637468', NULL),
(6, 'wiguna', 'cengkareng', '083882661233', NULL),
(7, 'arya', 'grogol', '0838823236268', NULL),
(8, 'budiman', 'grogol', '083882662683', NULL),
(9, 'saloka', 'cipondoh', '083882662683', NULL),
(10, 'gerard', 'cipondoh', '08537398786', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `usia` varchar(15) NOT NULL,
  `tanggal_berobat` date NOT NULL,
  `alamat` text DEFAULT NULL,
  `no_tlp` varchar(13) DEFAULT NULL,
  `id_dokter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama`, `usia`, `tanggal_berobat`, `alamat`, `no_tlp`, `id_dokter`) VALUES
(1, 'ujang', '32', '2024-04-09', 'Duri Kosambi', '08213456789', NULL),
(3, 'marni', '30', '2024-07-09', 'Darussalam', '082346789277', NULL),
(4, 'julkipli', '27', '2024-06-25', 'cipindoh', '0823645678927', NULL),
(5, 'intan', '20', '2024-08-05', 'cipondoh', '0876557289', NULL),
(6, 'rian', '17', '2024-08-08', 'kresek', '08988983872', NULL),
(7, 'jhon', '25', '2024-08-13', 'gondronng', '08966464827', NULL),
(8, 'clara', '18', '2024-08-18', 'pondok bahar', '08648268744', NULL),
(9, 'ajeng', '45', '2024-09-10', 'greenlake city', '08966232327', NULL),
(10, 'tomi', '50', '2024-10-07', 'greenlake city', '08548268755', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `id_resep` int(11) NOT NULL,
  `tanggal_resep` date NOT NULL,
  `id_pasien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`id_resep`, `tanggal_resep`, `id_pasien`) VALUES
(1, '2024-01-09', NULL),
(2, '2024-01-09', NULL),
(3, '2024-02-09', NULL),
(4, '2024-02-09', NULL),
(5, '2024-03-09', NULL),
(6, '2024-03-09', NULL),
(7, '2024-04-09', NULL),
(8, '2024-04-09', NULL),
(9, '2024-05-09', NULL),
(10, '2024-05-09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `fk_resep` (`id_resep`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `fk_dokter` (`id_dokter`);

--
-- Indeks untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `fk_pasien` (`id_pasien`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `resep`
--
ALTER TABLE `resep`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `fk_resep` FOREIGN KEY (`id_resep`) REFERENCES `resep` (`id_resep`);

--
-- Ketidakleluasaan untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `fk_dokter` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`);

--
-- Ketidakleluasaan untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `fk_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
