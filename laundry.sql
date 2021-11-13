-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 07:36 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kasir`
--

CREATE TABLE `tb_kasir` (
  `id_kasir` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kasir`
--

INSERT INTO `tb_kasir` (`id_kasir`, `nama`, `password`, `level`) VALUES
('KSR180002', 'manager', 'bWFuYWdlcg==', 'manager'),
('KSR180003', 'kasir', 'a2FzaXI=', 'kasir'),
('KSR210004', 'admin', 'YWRtaW4=', 'kasir'),
('KSR210005', 'arief', 'YXJpZWY=', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konsumen`
--

CREATE TABLE `tb_konsumen` (
  `id_konsumen` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_konsumen`
--

INSERT INTO `tb_konsumen` (`id_konsumen`, `nama`, `alamat`, `hp`) VALUES
('KON180001', 'Arief', 'Gang Damai', '082114456782'),
('KON180002', 'Ahmad', 'Ciriung', '089656987973'),
('KON180003', 'Mamat', 'Jl Golf', '081259638056'),
('KON210004', 'Jarwo', 'Ciriung', '085780125393'),
('KON210005', 'Maman', 'Ciriung', '082176985233'),
('KON210006', 'Pak Teguh', 'Cibinong', '02115963696'),
('KON210007', 'Pak Arman', 'PGRI Golf', '081357896364'),
('KON210008', 'Fira', 'PGRI Pesat', '082114753698'),
('KON210009', 'Ijal', 'Ciriung', '085667581423');

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `durasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `nama`, `harga`, `unit`, `durasi`) VALUES
('PKT180001', 'Cuci', 5000, 'Paket', 1),
('PKT180002', 'Strika', 5000, 'Paket', 3),
('PKT180003', 'Express 5 Jam', 14000, 'Paket', 1),
('PKT210004', 'Bed Cover', 25000, 'Satuan', 7),
('PKT210005', 'Sprei', 15000, 'Satuan', 7),
('PKT210006', 'Reguler 1 Hari', 9000, 'Paket', 1),
('PKT210007', 'Reguler 2 Hari', 8000, 'Paket', 2),
('PKT210008', 'Reguler 3 Hari', 7000, 'Paket', 3),
('PKT210009', 'Karpet', 14000, 'Meter', 14),
('PKT210010', 'Selimut', 20000, 'Satuan', 7),
('PKT210011', 'Handuk Besar', 10000, 'Satuan', 3),
('PKT210012', 'Handuk Kecil', 5000, 'Satuan', 3),
('PKT210013', 'Jas', 25000, 'Stel', 3),
('PKT210016', 'Dry Clean', 20000, 'Paket', 2),
('PKT210017', 'Karpet Tebal', 20000, 'Meter', 30),
('PKT210018', 'Cuci Setrika', 9000, 'Paket', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` varchar(11) NOT NULL,
  `id_kasir` varchar(11) NOT NULL,
  `id_konsumen` varchar(11) NOT NULL,
  `id_paket` varchar(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `jml_kilo` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tgl_ambil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_kasir`, `id_konsumen`, `id_paket`, `tgl_transaksi`, `keterangan`, `jml_kilo`, `total`, `tgl_ambil`) VALUES
('TRA210001', 'KSR210004', 'KON180001', 'PKT210004', '2021-09-30', 'Warna hijau', 2, 50000, '2021-10-07'),
('TRA210002', 'KSR210004', 'KON180002', 'PKT210016', '2021-09-30', 'Baju Merah', 2, 40000, '0000-00-00'),
('TRA210003', 'KSR210004', 'KON210004', 'PKT210018', '2021-10-23', 'Kemeja', 2, 18000, '0000-00-00'),
('TRA210004', 'KSR210004', 'KON210005', 'PKT210018', '2021-10-23', 'Kemeja', 1, 10665, '0000-00-00'),
('TRA210005', 'KSR210004', 'KON210006', 'PKT210018', '2021-10-23', '3 Baju,  4 Celana, 5 Kemeja ', 6, 52200, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kasir`
--
ALTER TABLE `tb_kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indexes for table `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_konsumen` (`id_konsumen`),
  ADD KEY `fk_paket` (`id_paket`),
  ADD KEY `fk_kasir` (`id_kasir`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `fk_kasir` FOREIGN KEY (`id_kasir`) REFERENCES `tb_kasir` (`id_kasir`),
  ADD CONSTRAINT `fk_konsumen` FOREIGN KEY (`id_konsumen`) REFERENCES `tb_konsumen` (`id_konsumen`),
  ADD CONSTRAINT `fk_paket` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id_paket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
