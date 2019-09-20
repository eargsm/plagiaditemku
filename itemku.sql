-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 15, 2019 at 03:26 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itemku`
--

-- --------------------------------------------------------

--
-- Table structure for table `dagangan`
--

CREATE TABLE `dagangan` (
  `produk` varchar(25) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `stok` varchar(25) NOT NULL,
  `minimal` varchar(25) NOT NULL,
  `updateDagangan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idDagangan` int(11) NOT NULL,
  `namaToko` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `idItem` int(11) NOT NULL,
  `idDagangan` int(11) NOT NULL,
  `namaToko` varchar(25) NOT NULL,
  `jumlahItem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `idKeranjang` int(11) NOT NULL,
  `idItem` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tokoku`
--

CREATE TABLE `tokoku` (
  `namaToko` varchar(25) NOT NULL,
  `namaBank` varchar(25) NOT NULL,
  `atasNama` varchar(25) NOT NULL,
  `noRekening` varchar(25) NOT NULL,
  `sloganToko` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `noHp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dagangan`
--
ALTER TABLE `dagangan`
  ADD PRIMARY KEY (`idDagangan`),
  ADD KEY `namaToko` (`namaToko`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`idItem`),
  ADD KEY `idDagangan` (`idDagangan`),
  ADD KEY `namaToko` (`namaToko`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`idKeranjang`),
  ADD KEY `idItem` (`idItem`);

--
-- Indexes for table `tokoku`
--
ALTER TABLE `tokoku`
  ADD PRIMARY KEY (`namaToko`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dagangan`
--
ALTER TABLE `dagangan`
  MODIFY `idDagangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `idItem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `idKeranjang` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dagangan`
--
ALTER TABLE `dagangan`
  ADD CONSTRAINT `dagangan_ibfk_1` FOREIGN KEY (`namaToko`) REFERENCES `tokoku` (`namaToko`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`idDagangan`) REFERENCES `dagangan` (`idDagangan`),
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`namaToko`) REFERENCES `tokoku` (`namaToko`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`idItem`) REFERENCES `item` (`idItem`);

--
-- Constraints for table `tokoku`
--
ALTER TABLE `tokoku`
  ADD CONSTRAINT `tokoku_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
