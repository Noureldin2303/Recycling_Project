-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 07, 2021 at 03:33 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user-data`
--

-- --------------------------------------------------------

--
-- Table structure for table `downinfo`
--

DROP TABLE IF EXISTS `downinfo`;
CREATE TABLE IF NOT EXISTS `downinfo` (
  `sname` varchar(30) NOT NULL,
  `day` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `voucher` varchar(30) NOT NULL,
  `waste` varchar(70) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `downinfo`
--

INSERT INTO `downinfo` (`sname`, `day`, `time`, `voucher`, `waste`) VALUES
('nour', 'Sunday', '1 - 5 PM', 'McDonalds', 'Wood, Plastic, Paper, ');

-- --------------------------------------------------------

--
-- Table structure for table `upinfo`
--

DROP TABLE IF EXISTS `upinfo`;
CREATE TABLE IF NOT EXISTS `upinfo` (
  `name` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upinfo`
--

INSERT INTO `upinfo` (`name`, `mail`, `phone`, `city`, `address`, `password`) VALUES
('nour', 'nour55@hotmail.com', '01245748466', 'alexandria', '14 st bporvb', 'no1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
