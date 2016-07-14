-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2016 at 02:29 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendee`
--

CREATE TABLE IF NOT EXISTS `attendee` (
  `id_event` varchar(5) NOT NULL,
  `id_attendee` varchar(5) NOT NULL,
  `no_identitas` varchar(20) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `no_etiket` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `destinasi_wisata`
--

CREATE TABLE IF NOT EXISTS `destinasi_wisata` (
  `id_destinasi` varchar(5) NOT NULL,
  `nama_destinasi` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_plan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id_plan` varchar(5) NOT NULL,
  `id_event` varchar(5) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penginapan`
--

CREATE TABLE IF NOT EXISTS `penginapan` (
  `id_plan` varchar(5) NOT NULL,
  `id_penginapan` varchar(5) NOT NULL,
  `no_booking` varchar(20) NOT NULL,
  `nama_hotel` varchar(20) NOT NULL,
  `alamat_hotel` text NOT NULL,
  `tipe_kamar` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penumpang`
--

CREATE TABLE IF NOT EXISTS `penumpang` (
  `id_transportasi` varchar(5) NOT NULL,
  `id_penumpang` varchar(5) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `no_identitas` varchar(20) NOT NULL,
  `tipe_identitas` varchar(3) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE IF NOT EXISTS `plan` (
  `email` varchar(20) NOT NULL,
  `id_plan` varchar(5) NOT NULL,
  `asal` varchar(15) NOT NULL,
  `tujuan` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `budget` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE IF NOT EXISTS `rental` (
  `id_rental` varchar(5) NOT NULL,
  `id_plan` varchar(5) NOT NULL,
  `no_booking` varchar(20) NOT NULL,
  `kota` varchar(15) NOT NULL,
  `nama_rental` varchar(15) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `jenis_mobil` varchar(15) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transportasi`
--

CREATE TABLE IF NOT EXISTS `transportasi` (
  `id_plan` varchar(5) NOT NULL,
  `kota_asal` varchar(15) NOT NULL,
  `kota_tujuan` varchar(15) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `penyedia_transportasi` varchar(20) NOT NULL,
  `nomor_perjalanan` varchar(20) NOT NULL,
  `id_transportasi` varchar(5) NOT NULL,
  `no_booking` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_identitas` varchar(20) NOT NULL,
  `tipe_identitas` varchar(3) NOT NULL,
  `no_telpon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `no_identitas`, `tipe_identitas`, `no_telpon`) VALUES
('as@gmail.com', 'asdasd', 'Rasyid Hakim', '', '0000-00-00', '', '', ''),
('rasyid.xyz@gmail.com', 'aaaa', 'Rasyid Hakim', '', '0000-00-00', '', '', ''),
('rasyid@gmail.com', 'aaaa', 'rasyid hakim', 'bandung', '2016-07-04', '1103130147', 'KTM', '085320191724');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendee`
--
ALTER TABLE `attendee`
 ADD PRIMARY KEY (`id_attendee`);

--
-- Indexes for table `destinasi_wisata`
--
ALTER TABLE `destinasi_wisata`
 ADD PRIMARY KEY (`id_destinasi`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `penginapan`
--
ALTER TABLE `penginapan`
 ADD PRIMARY KEY (`id_penginapan`);

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
 ADD PRIMARY KEY (`id_penumpang`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
 ADD PRIMARY KEY (`id_plan`), ADD KEY `id_plan` (`id_plan`), ADD KEY `id_plan_2` (`id_plan`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
 ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `transportasi`
--
ALTER TABLE `transportasi`
 ADD PRIMARY KEY (`id_transportasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`email`), ADD KEY `email` (`email`), ADD KEY `email_2` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
