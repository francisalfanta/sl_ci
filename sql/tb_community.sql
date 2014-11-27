-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2014 at 12:15 PM
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
-- Table structure for table `tb_community`
--

CREATE TABLE IF NOT EXISTS `tb_community` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `community_name` varchar(255) DEFAULT NULL,
  `city_id` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_city_id_idx` (`city_id`),
  KEY `fk_com_city_id_idx` (`city_id`),
  KEY `fk_comcity_id_idx` (`city_id`),
  KEY `fk_comnty_city_id_idx` (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `tb_community`
--

INSERT INTO `tb_community` (`id`, `community_name`, `city_id`) VALUES
(1, 'Abu Dhabi Gate City', 1),
(2, 'Airport Road', 1),
(3, 'Al Badaa', 1),
(4, 'Al Bahia', 1),
(5, 'Al Baraha', 1),
(6, 'Al Bateen', 1),
(7, 'Al Dhafrah', 1),
(8, 'Al Falah City', 1),
(9, 'Al Ghadeer', 1),
(10, 'Al Hudayriat Island', 1),
(11, 'Al Ittihad Road', 1),
(12, 'Al Karama', 1),
(13, 'Al Khalidiya', 1),
(14, 'Al Maffraq', 1),
(15, 'Al Manaseer', 1),
(16, 'Al Manhal', 1),
(17, 'Al Maqtaa', 1),
(18, 'Al Maqtaa', 1),
(19, 'Al Markaziyah', 1),
(20, 'Al Maryah', 1),
(21, 'Al Mina', 1),
(22, 'Al Mushrif', 1),
(23, 'Al Nahda Abu Dhabi', 1),
(24, 'Al Nahyan Camp', 1),
(25, 'Al Najda Street', 1),
(26, 'Al Qurm', 1),
(27, 'Al Raha Beach', 1),
(28, 'Al Raha Gardens', 1),
(29, 'Al Raha Golf Gardens', 1),
(30, 'Al Rahba', 1),
(31, 'Al Rawdah', 1),
(32, 'Al Reef', 1),
(33, 'Al Reem Island', 1),
(34, 'Al Ruwais', 1),
(35, 'Al Salam Street', 1),
(36, 'Al Samha', 1),
(37, 'Al Shahama', 1),
(38, 'Al Shamkha', 1),
(39, 'Al Shawamekh', 1);


--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_community`
--
ALTER TABLE `tb_community`
  ADD CONSTRAINT `fk_comnty_city_id` FOREIGN KEY (`city_id`) REFERENCES `tb_city` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
