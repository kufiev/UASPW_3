-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2022 pada 02.57
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

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
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nama` varchar(50) NOT NULL,
  `nisn` int(12) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nama`, `nisn`, `gender`, `alamat`, `nohp`) VALUES
('Mr Krabs', 123, 'Pria', '2219 Anchor St.', '(715) 820-3420'),
('Mrs Puff', 2134, 'Wanita', 'Mrs. Puffs House, Bikini Bottom', '2323-4312-60522'),
('Barnacle Boy', 5738, 'Pria', 'Shady Shoal', '9928-2736-0928'),
('Sandy Cheeks', 6443, 'Wanita', '2356 Overhill Rd, Montgomery, AL 36116', '(240) 392-2669'),
('Pearl Krabs', 7436, 'Wanita', '3541 Anchor Way', '9027-3261-7223'),
('Larry', 7943, 'Pria', 'Goo Lagoon', '0723-2234-6732'),
('Sheldon J. Plankton', 9928, 'Pria', 'The Chum Bucket', '1-800-328-2486'),
('Squidward Tentackle', 1325678436, 'Pria', '122 Conch Street', '203-432-6022'),
('Patrick Star', 1634723540, 'Pria', '120 Conch Street', '203-432-6022'),
('Spongebob SquarePants', 2147483647, 'Pria', '124 Conch Street', '(707) 663-4279');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
