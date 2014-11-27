-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2014 at 12:21 PM
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
-- Table structure for table `tb_subcommunity`
--

CREATE TABLE IF NOT EXISTS `tb_subcommunity` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `subcommunity_name` varchar(100) DEFAULT NULL,
  `community_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tb_subcommunity`
--

INSERT INTO `tb_subcommunity` (`id`, `subcommunity_name`, `community_id`) VALUES
(4, 'Mangrove Village', 1),
(5, 'Seashore', 1),
(1, 'Abu Dhabi Airport Logistics Park', 2),
(2, 'Airport Road', 2),
(3, 'Diplomatic Area', 2),

(6, 'Al Badaa', 3),
(7, 'Al Bahia', 4),
(8, 'Al Bateen', 6),
(9, 'Al Bateen Wharf', 6),
(10, 'Al Ettihad Towers', 6),
(11, 'Al Khaleej Al Arabi Street', 6),
(12, 'Baynunah Street', 6),
(13, 'Al Dhafrah 1', 7),
(14, 'Al Dhafrah 2', 7),
(15, 'Al Falah City', 8),
(16, 'Al Baraha Village', 9),
(17, 'Al Buhayra Village', 9),
(18, 'Al Khaleej Village', 9),
(19, 'Al Khubaira Village', 9),
(20, 'Liwa Village', 9);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
