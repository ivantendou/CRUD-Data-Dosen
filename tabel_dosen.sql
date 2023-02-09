-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 11:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dosen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_dosen`
--

CREATE TABLE `tabel_dosen` (
  `id` int(11) NOT NULL,
  `nidn` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tempat_lhr` varchar(20) NOT NULL,
  `tanggal_lhr` varchar(30) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `sts_aktif` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_dosen`
--

INSERT INTO `tabel_dosen` (`id`, `nidn`, `nama`, `jk`, `tempat_lhr`, `tanggal_lhr`, `agama`, `kewarganegaraan`, `sts_aktif`) VALUES
(6, '21349899', 'Egi Adithia Pradana', 'Laki-Laki', 'Jakarta', '4 Maret 1977', 'Islam', 'Indonesia', 'Aktif'),
(7, '21347820', 'Rahma Djati Kusuma', 'Perempuan', 'Bandung', '8 Agustus 1981', 'Islam', 'Indonesia', 'Aktif'),
(8, '22109481', 'Ade Mulyana', 'Laki-Laki', 'Jakarta', '19 Oktober 1977', 'Islam', 'Indonesia', 'Aktif'),
(9, '10215410', 'Dadan Sasmita', 'Laki-Laki', 'Bogor', '27 Desember 1985', 'Islam', 'Indonesia', 'Aktif'),
(10, '02839358', 'Marwan Effendy', 'Laki-Laki', 'Bogor', '7 Juni 1968', 'Islam', 'Indonesia', 'Aktif'),
(11, '22210093', 'Pingky Dezar Zulkarnain', 'Laki-Laki', 'Jakarta', '14 September 1972', 'Islam', 'Indonesia', 'Aktif'),
(12, '72394194', 'Yanto Hermawan', 'Laki-Laki', 'Bogor', '1 Januari 1972', 'Islam', 'Indonesia', 'Aktif'),
(13, '21876354', 'Ade Yusdira', 'Laki-Laki', 'Jakarta', '8 Mei 1969', 'Islam', 'Indonesia', 'Aktif'),
(14, '01029821', 'Denta Purnama', 'Laki-Laki', 'Bogor', '8 September 1972', 'Islam', 'Indonesia', 'Aktif'),
(15, '21347821', 'Febri Damatraseta', 'Laki-Laki', 'Jakarta', '8 Mei 1989', 'Islam', 'Indonesia', 'Aktif'),
(16, '20347899', 'Edi Nurachmad', 'Laki-Laki', 'Bogor', '29 Juli 1968', 'Islam', 'Indonesia', 'Aktif'),
(17, '21137784', 'Isnan Mulia', 'Laki-Laki', 'Bogor', '19 November 1984', 'Islam', 'Indonesia', 'Aktif'),
(18, '02229301', 'Anton Sukamto', 'Laki-Laki', 'Bogor', '16 Februari 1968', 'Islam', 'Indonesia', 'Aktif'),
(19, '02229302', 'Abdul Roup', 'Laki-Laki', 'Bogor', '2 Maret 1972', 'Islam', 'Indonesia', 'Aktif'),
(20, '02229303', 'Septian Cahyadi', 'Laki-Laki', 'Bogor', '27 Juni 1982', 'Islam', 'Indonesia', 'Aktif'),
(21, '11130489', 'Suci Sri Utami', 'Perempuan', 'Jakarta', '4 Mei 1983', 'Kristen Protestan', 'Indonesia', 'Aktif'),
(22, '21229847', 'Didit Pradipto', 'Laki-Laki', 'Bogor', '8 Februari 1970', 'Islam', 'Indonesia', 'Aktif'),
(23, '25371622', 'David HM Hasibuan', 'Laki-Laki', 'Jakarta', '22 Juni 1968', 'Kristen Katholik', 'Indonesia', 'Aktif'),
(24, '25371629', 'Morita', 'Perempuan', 'Jakarta', '22 Mei 1967', 'Buddha', 'Indonesia', 'Aktif'),
(25, '11666551', 'Dessy Evianti', 'Perempuan', 'Bogor', '8 Agustus 1978', 'Islam', 'Indonesia', 'Aktif'),
(26, '11666590', 'Hadi Sutomo', 'Laki-Laki', 'Bogor', '16 April 1970', 'Islam', 'Indonesia', 'Aktif'),
(27, '56219814', 'Danti Astrini', 'Perempuan', 'Bogor', '1 April 1987', 'Islam', 'Indonesia', 'Aktif'),
(28, '56219815', 'Diah Kusumayanti', 'Perempuan', 'Bogor', '10 November 1968', 'Islam', 'Indonesia', 'Aktif'),
(29, '56219819', 'Mumuh Mulyana', 'Laki-Laki', 'Bogor', '6 Februari 1969', 'Islam', 'Indonesia', 'Aktif'),
(30, '59219811', 'Ani Mekaniwati', 'Perempuan', 'Bogor', '28 September 1968', 'Islam', 'Indonesia', 'Aktif'),
(31, '59219812', 'Angga Sulistiono', 'Laki-Laki', 'Jakarta', '19 Oktober 1964', 'Islam', 'Indonesia', 'Aktif'),
(32, '59219815', 'Sandy Wibisono', 'Laki-Laki', 'Jakarta', '4 Januari 1970', 'Islam', 'Indonesia', 'Aktif'),
(33, '28371942', 'Arief Fahmi', 'Laki-Laki', 'Jakarta', '1 Oktober 1978', 'Islam', 'Indonesia', 'Aktif'),
(34, '28371944', 'Siti Ita Rosita', 'Perempuan', 'Jakarta', '15 Desember 1970', 'Islam', 'Indonesia', 'Aktif'),
(35, '11112223', 'Triandi', 'Laki-Laki', 'Bogor', '5 Desember 1965', 'Islam', 'Indonesia', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_dosen`
--
ALTER TABLE `tabel_dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nidm` (`nidn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_dosen`
--
ALTER TABLE `tabel_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
