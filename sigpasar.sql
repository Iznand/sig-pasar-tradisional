-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2024 pada 14.33
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id_instansi` int(8) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `NPSN` varchar(100) NOT NULL,
  `website` varchar(255) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id_instansi`, `nama_instansi`, `NPSN`, `website`, `no_telepon`, `alamat`, `kota`, `provinsi`, `latitude`, `longitude`) VALUES
(1, 'Pasar sentral soppeng', '20532242', '-', '(031) 5345670', 'Lapajung, Kec. Lalabata, Kabupaten Soppeng, Sulawesi Selatan 90811', 'Kota Soppeng', 'Sulawesi Selatan', '-4.3435', '119.88443'),
(2, 'Pasar Sentral Cabengge', '20532230', '-', '(031) 5345972', 'Cabenge, Kec. Lili Rilau, Kabupaten Soppeng, Sulawesi Selatan 90871', 'Kota Soppeng', 'Sulawesi Selatan', '-4.33747', '119.9647'),
(3, 'Pasar Sentral Takalala', '20532235', '-', '(031) 3812356', 'Tettikengrarae, Kec. Mario Riwawo, Kabupaten Soppeng, Sulawesi Selatan 90862', 'Kota Soppeng', 'Sulawesi Selatan', '-4.45833', '119.94989');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_instansi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_instansi` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
