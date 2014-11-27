-- phpMyAdmin SQL Dump
-- version 4.1.13
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2014 at 08:09 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `softlinecsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_staff_licenses`
--

CREATE TABLE IF NOT EXISTS `tb_staff_licenses` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `staff_id` bigint(20) DEFAULT NULL,
  `dl_num` int(20) DEFAULT NULL,
  `dl_issue` date DEFAULT NULL,
  `dl_expiry` date DEFAULT NULL,
  `dl_others` varchar(100) DEFAULT NULL,
  `lc_num` int(20) DEFAULT NULL,
  `lc_issue` date DEFAULT NULL,
  `lc_expiry` date DEFAULT NULL,
  `lc_others` varchar(100) DEFAULT NULL,
  `rid_num` int(20) DEFAULT NULL,
  `rid_issue` date DEFAULT NULL,
  `rid_expiry` date DEFAULT NULL,
  `rid_others` varchar(100) DEFAULT NULL,
  `vs_num` int(20) DEFAULT NULL,
  `vs_issue` date DEFAULT NULL,
  `vs_expiry` date DEFAULT NULL,
  `vs_others` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
