-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 09:51 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kontrakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `diklik`
--

CREATE TABLE `diklik` (
  `id_klik` int(11) NOT NULL,
  `id_kontrakan` int(11) NOT NULL,
  `klik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diklik`
--

INSERT INTO `diklik` (`id_klik`, `id_kontrakan`, `klik`) VALUES
(1, 1, 6),
(2, 4, 6),
(3, 3, 9),
(4, 6, 11);

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `id_kontrakan` int(11) NOT NULL,
  `id_fasilitas_master` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `id_kontrakan`, `id_fasilitas_master`) VALUES
(12, 1, 2),
(13, 3, 3),
(14, 3, 1),
(15, 1, 3),
(16, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_master`
--

CREATE TABLE `fasilitas_master` (
  `id_fasilitas_master` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `fasilitas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas_master`
--

INSERT INTO `fasilitas_master` (`id_fasilitas_master`, `icon`, `fasilitas`) VALUES
(1, 'fa-bed', 'Kasur'),
(2, 'fa-tv', 'TV'),
(3, 'fa-key', 'Kunci');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_kontrakan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `gambar`, `id_kontrakan`) VALUES
(4, '90435434_142707360450785_47643208926101504_n.jpg', 1),
(13, 'Capture.PNG', 4),
(14, 'Tips-Memulai-Investasi-Rumah-Kontrakan-Bagi-Investor-Pemula-02-Finansialku.jpg', 4),
(15, 'ce3d8d0b-66f3-4551-9012-2c49e6b6612f.jpg', 4),
(16, 'th.jpg', 4),
(17, 'Picture2.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Putra'),
(2, 'Putri'),
(3, 'Campuran');

-- --------------------------------------------------------

--
-- Table structure for table `ket_review`
--

CREATE TABLE `ket_review` (
  `id_review` int(11) NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ket_review`
--

INSERT INTO `ket_review` (`id_review`, `review`) VALUES
(1, 'Kebersihan'),
(2, 'Keamanan'),
(3, 'Kenyamanan'),
(4, 'Fasilitas Kamar'),
(5, 'Fasilitas Bersama'),
(6, 'Harga');

-- --------------------------------------------------------

--
-- Table structure for table `kontrakan`
--

CREATE TABLE `kontrakan` (
  `id_kontrakan` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `id_pemilik` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `nama_kontrakan` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `luas_kamar` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `listrik` tinyint(1) NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontrakan`
--

INSERT INTO `kontrakan` (`id_kontrakan`, `id_kota`, `id_pemilik`, `id_kategori`, `id_type`, `nama_kontrakan`, `harga`, `luas_kamar`, `deskripsi`, `lokasi`, `listrik`, `foto`) VALUES
(1, 16, 1, 1, 1, 'Kontrakan Indah Permai', 20000, '4x5', 'Sangat Indah Banget\r\n\r\n\r\n', 'Jl Cigunung Rt 03 Rw 09', 1, 'CAPTURE.PNG'),
(3, 21, 1, 3, 3, 'Permai', 250000, '7x9', 'Enak Ditempati', 'Cigunung', 1, 'CAPTURE.PNG'),
(4, 6, 1, 1, 2, 'Kontrakan Sukabumi', 800000, '6x7', 'Kontrakan ini dikhususkan untuk para mahasiswa ', 'Rt 10 Rw 03', 0, 'CAPTURE.PNG'),
(6, 6, 1, 1, 3, 'Sidiq Kontrakan', 3000000, '5x7', 'Enak dan Nyaman', 'Tasik Kota', 1, 'gunung.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `kota`) VALUES
(1, 'Bogor'),
(3, 'Cianjur'),
(4, 'Bandung'),
(5, 'Garut'),
(6, 'Tasikmalaya'),
(7, 'Ciamis'),
(8, 'Kuningan'),
(9, 'Cirebon'),
(10, 'Majalengka'),
(11, 'Sumedang'),
(12, 'Indramayu'),
(13, 'Subang'),
(14, 'Purwakarta'),
(15, 'Bogor'),
(16, 'Sukabumi'),
(17, 'Bandung'),
(18, 'Cirebon'),
(19, 'Bekasi'),
(20, 'Depok'),
(21, 'Cimahi'),
(22, 'Tasikmalaya'),
(23, 'Banjar'),
(24, 'Karawang'),
(25, 'Bekasi'),
(26, 'Bandung'),
(27, 'Pangandaran');

-- --------------------------------------------------------

--
-- Table structure for table `kuantitas`
--

CREATE TABLE `kuantitas` (
  `id_kuantitas` int(11) NOT NULL,
  `id_kontrakan` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuantitas`
--

INSERT INTO `kuantitas` (`id_kuantitas`, `id_kontrakan`, `status`) VALUES
(5, 3, 'terisi'),
(24, 3, 'tersedia'),
(25, 3, 'tersedia'),
(26, 3, 'tersedia'),
(27, 3, 'tersedia'),
(28, 1, 'tersedia'),
(29, 1, 'tersedia'),
(30, 4, 'tersedia'),
(31, 4, 'tersedia'),
(41, 6, 'tersedia'),
(42, 6, 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `nama`, `email`, `hp`, `password`, `foto`) VALUES
(1, 'Moch Juang', 'mochjuangpp@gmail.com', '085861367362', '21232f297a57a5a743894a0e4a801fc3', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_rev` int(11) NOT NULL,
  `id_kontrakan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_review` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `type`) VALUES
(1, 'Mingguan'),
(2, 'Bulanan'),
(3, 'Tahunan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `logged` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diklik`
--
ALTER TABLE `diklik`
  ADD PRIMARY KEY (`id_klik`),
  ADD KEY `id_kontrakan` (`id_kontrakan`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`),
  ADD KEY `id_fasilitas_master` (`id_fasilitas_master`),
  ADD KEY `id_kontrakan` (`id_kontrakan`);

--
-- Indexes for table `fasilitas_master`
--
ALTER TABLE `fasilitas_master`
  ADD PRIMARY KEY (`id_fasilitas_master`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_kontrakan` (`id_kontrakan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `ket_review`
--
ALTER TABLE `ket_review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `kontrakan`
--
ALTER TABLE `kontrakan`
  ADD PRIMARY KEY (`id_kontrakan`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_kota` (`id_kota`),
  ADD KEY `id_pemilik` (`id_pemilik`),
  ADD KEY `id_type` (`id_type`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `kuantitas`
--
ALTER TABLE `kuantitas`
  ADD PRIMARY KEY (`id_kuantitas`),
  ADD KEY `kuantitas_ibfk_1` (`id_kontrakan`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_rev`),
  ADD KEY `id_kontrakan` (`id_kontrakan`),
  ADD KEY `id_review` (`id_review`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diklik`
--
ALTER TABLE `diklik`
  MODIFY `id_klik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `fasilitas_master`
--
ALTER TABLE `fasilitas_master`
  MODIFY `id_fasilitas_master` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ket_review`
--
ALTER TABLE `ket_review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kontrakan`
--
ALTER TABLE `kontrakan`
  MODIFY `id_kontrakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `kuantitas`
--
ALTER TABLE `kuantitas`
  MODIFY `id_kuantitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id_pemilik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_rev` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diklik`
--
ALTER TABLE `diklik`
  ADD CONSTRAINT `diklik_ibfk_1` FOREIGN KEY (`id_kontrakan`) REFERENCES `kontrakan` (`id_kontrakan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fasilitas_ibfk_1` FOREIGN KEY (`id_fasilitas_master`) REFERENCES `fasilitas_master` (`id_fasilitas_master`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fasilitas_ibfk_2` FOREIGN KEY (`id_kontrakan`) REFERENCES `kontrakan` (`id_kontrakan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `gambar_ibfk_1` FOREIGN KEY (`id_kontrakan`) REFERENCES `kontrakan` (`id_kontrakan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kontrakan`
--
ALTER TABLE `kontrakan`
  ADD CONSTRAINT `kontrakan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kontrakan_ibfk_2` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kontrakan_ibfk_3` FOREIGN KEY (`id_pemilik`) REFERENCES `pemilik` (`id_pemilik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kontrakan_ibfk_4` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kuantitas`
--
ALTER TABLE `kuantitas`
  ADD CONSTRAINT `kuantitas_ibfk_1` FOREIGN KEY (`id_kontrakan`) REFERENCES `kontrakan` (`id_kontrakan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`id_kontrakan`) REFERENCES `kontrakan` (`id_kontrakan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`id_review`) REFERENCES `ket_review` (`id_review`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
