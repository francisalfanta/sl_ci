-- phpMyAdmin SQL Dump
-- version 4.1.13
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2014 at 08:14 PM
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
-- Table structure for table `tb_slcs_staff`
--

CREATE TABLE IF NOT EXISTS `tb_slcs_staff` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `gender` char(6) NOT NULL,
  `placeofbirth` char(50) NOT NULL,
  `passport_no` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `marital_stat` char(15) NOT NULL,
  `date_hired` varchar(50) NOT NULL,
  `date_started` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mnumber` varchar(13) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `acctype` tinyint(1) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `age` int(20) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `type_of_contract` varchar(100) DEFAULT NULL,
  `date_release` date DEFAULT NULL,
  `home_number` int(10) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `employment_status` varchar(50) DEFAULT NULL,
  `basic salary` int(20) DEFAULT NULL,
  `graduaty_pay` int(20) DEFAULT NULL,
  `accomodation` int(20) DEFAULT NULL,
  `years_of_service` int(10) DEFAULT NULL,
  `months_of_service` int(10) DEFAULT NULL,
  `transporation_allowance` int(10) DEFAULT NULL,
  `m_card_num` int(20) DEFAULT NULL,
  `m_issue_date` date DEFAULT NULL,
  `m_expiry_date` date DEFAULT NULL,
  `m_others` int(20) DEFAULT NULL,
  `yearly_ticket` tinyint(1) DEFAULT NULL,
  `annual_leave` tinyint(1) DEFAULT NULL,
  `third_annual_leave` tinyint(1) DEFAULT NULL,
  `bonus` int(20) DEFAULT NULL,
  `others` varchar(255) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `branch_name` varchar(100) DEFAULT NULL,
  `account_name` varchar(100) DEFAULT NULL,
  `account_number` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `tb_slcs_staff`
--

INSERT INTO `tb_slcs_staff` (`id`, `fullname`, `gender`, `placeofbirth`, `passport_no`, `nationality`, `marital_stat`, `date_hired`, `date_started`, `username`, `password`, `dob`, `email`, `mnumber`, `active`, `acctype`, `fname`, `lname`, `mname`, `age`, `language`, `type_of_contract`, `date_release`, `home_number`, `position`, `employment_status`, `basic salary`, `graduaty_pay`, `accomodation`, `years_of_service`, `months_of_service`, `transporation_allowance`, `m_card_num`, `m_issue_date`, `m_expiry_date`, `m_others`, `yearly_ticket`, `annual_leave`, `third_annual_leave`, `bonus`, `others`, `bank_name`, `branch_name`, `account_name`, `account_number`) VALUES
(1, 'Prime Lemuel Rio', 'M', 'Manila', '', '', '', '', '', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', '1986-10-15', 'prymerio@rocketmail.com', '+971522506702', 1, 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'Mohamed Mostafa', 'M', '', '', '', '', '', '', 'Mohamed', 'f4b90417ca0ccbfc1b4156dfb38f7ae6', '', 'mohamed@slg.ae', '+971556665647', 1, 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'Kirana Laisuwan ', 'F', '', '', '', '', '', '', 'Kirana', 'f4b90417ca0ccbfc1b4156dfb38f7ae6', '', 'info@slg.ae', '+971503058316', 1, 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'Member 3', 'M', '', '', '', 'single', '', '', 'sample', 'c8c4a94b770f3e2c0bd45c632af98679', '1986-10-18', 'myemail@hotmail.com', '', 0, 1, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
