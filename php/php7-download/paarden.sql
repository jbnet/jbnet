-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 21, 2016 at 10:21 AM
-- Server version: 5.6.26
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paarden`
--
CREATE DATABASE IF NOT EXISTS `paarden` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `paarden`;

-- --------------------------------------------------------

--
-- Table structure for table `paarden`
--

DROP TABLE IF EXISTS `paarden`;
CREATE TABLE `paarden` (
  `ID` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `geboren` datetime NOT NULL,
  `ras_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paarden`
--

INSERT INTO `paarden` (`ID`, `naam`, `geboren`, `ras_ID`) VALUES
(1, 'Elmo', '1996-09-20 00:00:00', 5),
(2, 'Naborr', '2012-09-06 00:00:00', 1),
(8, 'Ófeigur frá Flugumýri', '2006-01-03 00:00:00', 6);

-- --------------------------------------------------------

--
-- Table structure for table `rassen`
--

DROP TABLE IF EXISTS `rassen`;
CREATE TABLE `rassen` (
  `ID` int(11) NOT NULL,
  `rasnaam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rassen`
--

INSERT INTO `rassen` (`ID`, `rasnaam`) VALUES
(1, 'Arabier'),
(2, 'Fjord'),
(3, 'Fries'),
(4, 'New Forest'),
(5, 'Welsh'),
(6, 'IJslander'),
(7, 'KWPN'),
(8, 'BWP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paarden`
--
ALTER TABLE `paarden`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rassen`
--
ALTER TABLE `rassen`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paarden`
--
ALTER TABLE `paarden`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `rassen`
--
ALTER TABLE `rassen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
