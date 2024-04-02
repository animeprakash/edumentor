-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 08, 2024 at 10:21 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joinonlineacademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

DROP TABLE IF EXISTS `studentdetails`;
CREATE TABLE IF NOT EXISTS `studentdetails` (
  `studentid` int NOT NULL AUTO_INCREMENT,
  `studentname` varchar(100) DEFAULT NULL,
  `contactno` mediumtext,
  `emailid` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `studenton` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`studentid`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
