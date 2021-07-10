-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 05, 2021 at 07:44 PM
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
-- Database: `donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary`
--

DROP TABLE IF EXISTS `beneficiary`;
CREATE TABLE IF NOT EXISTS `beneficiary` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `bfname` varchar(255) NOT NULL,
  `blname` varchar(255) NOT NULL,
  `bmail` varchar(40) NOT NULL,
  `bpassword` varchar(255) NOT NULL,
  `bphone` int(255) NOT NULL,
  `bcity` varchar(255) NOT NULL,
  `report` varchar(255) NOT NULL,
  `buser_name` varchar(255) NOT NULL,
  PRIMARY KEY (`bid`),
  UNIQUE KEY `bmail` (`bmail`) USING BTREE,
  UNIQUE KEY `buser_name` (`buser_name`) USING BTREE,
  UNIQUE KEY `dphone` (`bphone`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

DROP TABLE IF EXISTS `device`;
CREATE TABLE IF NOT EXISTS `device` (
  `dvid` int(11) NOT NULL AUTO_INCREMENT,
  `dvname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `device_type` varchar(255) NOT NULL,
  `device_pic` varchar(255) NOT NULL,
  PRIMARY KEY (`dvid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
CREATE TABLE IF NOT EXISTS `donor` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `dfname` varchar(255) NOT NULL,
  `dlname` varchar(255) NOT NULL,
  `dmail` varchar(255) NOT NULL,
  `dpassword` int(255) NOT NULL,
  `dphone` int(255) NOT NULL,
  `dcity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `duser_name` varchar(255) NOT NULL,
  PRIMARY KEY (`did`),
  UNIQUE KEY `dmail` (`dmail`) USING BTREE,
  UNIQUE KEY `duser_name` (`duser_name`) USING BTREE,
  UNIQUE KEY `dphone` (`dphone`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
