-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2019 at 10:39 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `barcode`
--

CREATE TABLE `barcode` (
  `id` int(11) NOT NULL,
  `itemcode` varchar(25) DEFAULT NULL,
  `item` varchar(20) DEFAULT NULL,
  `qty` int(5) DEFAULT NULL,
  `markup` float DEFAULT NULL,
  `sp` float DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `user` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barcode`
--

INSERT INTO `barcode` (`id`, `itemcode`, `item`, `qty`, `markup`, `sp`, `date`, `user`) VALUES
(194025, NULL, 'Adult', NULL, 25, 250, '2019-07-10 03:33:33', ''),
(194027, NULL, 'Adult', NULL, 25, 250, '2019-07-10 03:33:33', ''),
(194026, NULL, 'Adult', NULL, 25, 250, '2019-07-10 03:33:33', ''),
(194033, NULL, 'Child', NULL, 18, 90, '2019-07-10 04:19:08', ''),
(194034, NULL, 'Child', NULL, 18, 90, '2019-07-10 04:19:08', '');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `itemcode` varchar(25) DEFAULT NULL,
  `item` varchar(20) DEFAULT NULL,
  `qty` int(5) DEFAULT NULL,
  `markup` float DEFAULT NULL,
  `sp` float DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `user` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `itemcode`, `item`, `qty`, `markup`, `sp`, `date`, `user`) VALUES
(194023, NULL, 'Adult', NULL, 25, 250, '2019-07-10 03:33:33', '(6841) staff'),
(194032, NULL, 'Child', NULL, 18, 90, '2019-07-10 04:19:08', '(51461) admin'),
(194031, NULL, 'Child', NULL, 18, 90, '2019-07-10 04:19:08', '(51461) admin'),
(194021, NULL, 'Adult', NULL, 25, 250, '2019-07-10 03:33:33', '(6841) staff'),
(194022, NULL, 'Adult', NULL, 25, 250, '2019-07-10 03:33:33', '(6546) farezfarhan'),
(194029, NULL, 'Adult', NULL, 25, 250, '2019-07-10 03:33:33', '(6841) staff'),
(194028, NULL, 'Adult', NULL, 25, 250, '2019-07-10 03:33:33', '(6841) staff'),
(194020, NULL, 'Adult', NULL, 25, 250, '2019-07-10 03:33:33', '(56418) staffaiman'),
(194019, NULL, 'Adult', NULL, 25, 100, '2019-07-09 19:39:55', '(56418) staffaiman'),
(194018, NULL, 'Adult', NULL, 25, 100, '2019-07-09 19:39:55', '(56418) staffaiman'),
(194017, NULL, 'Adult', NULL, 25, 100, '2019-07-09 19:39:55', '(56418) staffaiman'),
(194016, NULL, 'Adult', NULL, 25, 100, '2019-07-09 19:39:55', '(56418) staffaiman'),
(194014, NULL, 'Adult', NULL, 25, 125, '2019-07-09 18:21:21', '(51461) admin'),
(194015, NULL, 'Adult', NULL, 25, 125, '2019-07-09 18:21:21', '(51461) admin'),
(194024, NULL, 'Adult', NULL, 25, 250, '2019-07-10 03:33:33', '(6841) staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barcode`
--
ALTER TABLE `barcode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barcode`
--
ALTER TABLE `barcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194035;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194033;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
