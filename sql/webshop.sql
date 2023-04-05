-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2023 at 11:55 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `webshopContent`
--

CREATE TABLE `webshopContent` (
  `ID` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(65,2) NOT NULL,
  `photos` varchar(255) DEFAULT NULL,
  `inch` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webshopContent`
--

INSERT INTO `webshopContent` (`ID`, `name`, `price`, `photos`, `inch`) VALUES
(1, 'Samsung Neo QLED 8K 65QN900B (2022)', '2.46', NULL, 65),
(2, 'Samsung Neo QLED 8K 65QN900A', '2.42', NULL, 65),
(3, 'Samsung The Terrace 65LST7TC', '2.19', NULL, 65),
(4, 'Samsung Neo QLED 65QN95B (2022) + Soundbar', '1.45', NULL, 65),
(5, 'Samsung Neo QLED 55QN85B (2022) + Soundbar', '1.01', NULL, 55),
(6, 'Samsung QD OLED 55S95B (2022) ', '0.97', NULL, 55),
(7, 'Samsung Neo QLED 55QN90B (2022)', '0.92', NULL, 55),
(8, 'Samsung Neo QLED 55QN95A', '0.80', NULL, 55),
(9, 'Samsung The Frame 50LS03B (2022)', '0.68', NULL, 50),
(10, 'Samsung QLED 50Q64B (2022) + Soundbar', '0.62', NULL, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `webshopContent`
--
ALTER TABLE `webshopContent`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `webshopContent`
--
ALTER TABLE `webshopContent`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
