-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2014 at 12:14 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

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
-- Table structure for table `tb_city`
--

CREATE TABLE IF NOT EXISTS `tb_city` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tb_city`
--

INSERT INTO `tb_city` (`id`, `city_name`) VALUES
(1, 'Abu Dhabi'),
(2, 'Ajman'),
(3, 'Al Ain'),
(4, 'Dubai'),
(5, 'Fujairah'),
(6, 'Ras Al Khaimah'),
(7, 'Sharjah'),
(8, 'Umm Al Quwain');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
