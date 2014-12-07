-- phpMyAdmin SQL Dump
-- version 4.1.13
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2014 at 01:11 PM
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
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` char(6) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `age` int(20) NOT NULL,
  `birthplace` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `marital_stat` varchar(15) NOT NULL,
  `ms_others` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  `passport_no` varchar(50) NOT NULL,
  `type_of_contract` varchar(50) NOT NULL,
  `date_hired` varchar(50) NOT NULL,
  `date_started` varchar(50) NOT NULL,
  `date_release` varchar(50) NOT NULL,
  `villa_no` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city_state_province` varchar(50) NOT NULL,
  `complete_address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mnumber` varchar(50) NOT NULL,
  `home_number` varchar(50) NOT NULL,
  `N1` varchar(50) NOT NULL,
  `R1` varchar(50) NOT NULL,
  `MN1` varchar(50) NOT NULL,
  `CA1` varchar(50) NOT NULL,
  `N2` varchar(50) NOT NULL,
  `R2` varchar(50) NOT NULL,
  `MN2` varchar(50) NOT NULL,
  `CA2` varchar(50) NOT NULL,
  `N3` varchar(50) NOT NULL,
  `R3` varchar(50) NOT NULL,
  `MN3` varchar(50) NOT NULL,
  `CA3` varchar(50) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  `account_name` varchar(50) NOT NULL,
  `account_number` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `employment_status` varchar(50) NOT NULL,
  `basicsalary` int(20) NOT NULL,
  `gratuity_pay` varchar(50) NOT NULL,
  `tocontract` varchar(50) NOT NULL,
  `accommodation` int(20) NOT NULL,
  `years_of_service` int(20) NOT NULL,
  `months_of_service` int(20) NOT NULL,
  `transpo_allowance` int(20) NOT NULL,
  `total_amount` int(20) NOT NULL,
  `total_salary` int(20) NOT NULL,
  `m_card_num` varchar(50) NOT NULL,
  `m_issue_date` varchar(50) NOT NULL,
  `m_expiry_date` varchar(50) NOT NULL,
  `m_others` varchar(50) NOT NULL,
  `bapl` tinyint(1) NOT NULL,
  `byt` tinyint(1) NOT NULL,
  `b30dal` tinyint(1) NOT NULL,
  `m_bonus` varchar(50) NOT NULL,
  `bn_bonus` varchar(50) NOT NULL,
  `dl_idcno` int(20) NOT NULL,
  `dl_idate` varchar(50) NOT NULL,
  `dl_exdate` varchar(50) NOT NULL,
  `dl_others` varchar(50) NOT NULL,
  `lc_idcno` int(20) NOT NULL,
  `lc_idate` varchar(50) NOT NULL,
  `lc_exdate` varchar(50) NOT NULL,
  `lc_others` varchar(50) NOT NULL,
  `r_idcno` int(20) NOT NULL,
  `r_idate` varchar(50) NOT NULL,
  `r_exdate` varchar(50) NOT NULL,
  `r_others` varchar(50) NOT NULL,
  `vs_idcno` int(20) NOT NULL,
  `vs_idate` varchar(50) NOT NULL,
  `vs_exdate` varchar(50) NOT NULL,
  `vs_others` varchar(50) NOT NULL,
  `others_idcno` int(20) NOT NULL,
  `others_idate` varchar(50) NOT NULL,
  `others_exdate` varchar(50) NOT NULL,
  `others_others` varchar(50) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `acctype` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `tb_slcs_staff`
--

INSERT INTO `tb_slcs_staff` (`id`, `fullname`, `fname`, `mname`, `lname`, `gender`, `dob`, `age`, `birthplace`, `nationality`, `marital_stat`, `ms_others`, `language`, `passport_no`, `type_of_contract`, `date_hired`, `date_started`, `date_release`, `villa_no`, `street`, `city_state_province`, `complete_address`, `email`, `mnumber`, `home_number`, `N1`, `R1`, `MN1`, `CA1`, `N2`, `R2`, `MN2`, `CA2`, `N3`, `R3`, `MN3`, `CA3`, `bank_name`, `branch_name`, `account_name`, `account_number`, `position`, `employment_status`, `basicsalary`, `gratuity_pay`, `tocontract`, `accommodation`, `years_of_service`, `months_of_service`, `transpo_allowance`, `total_amount`, `total_salary`, `m_card_num`, `m_issue_date`, `m_expiry_date`, `m_others`, `bapl`, `byt`, `b30dal`, `m_bonus`, `bn_bonus`, `dl_idcno`, `dl_idate`, `dl_exdate`, `dl_others`, `lc_idcno`, `lc_idate`, `lc_exdate`, `lc_others`, `r_idcno`, `r_idate`, `r_exdate`, `r_others`, `vs_idcno`, `vs_idate`, `vs_exdate`, `vs_others`, `others_idcno`, `others_idate`, `others_exdate`, `others_others`, `file_name`, `username`, `password`, `active`, `acctype`) VALUES
(105, 'Juan Dela Cruz', 'Juan', 'Manuel', 'Dela Cruz', 'male', '10/15/1986', 28, 'Manila', 'filipino', 'single', 'Some Values', 'Tagalog', 'EB1234567890', 'Full Time', '11/01/2014', '11/02/2014', '11/03/2014', '2256', 'Granate', 'Manila', '2256 Granate St. San Andres Bukid Manila', 'admin@email.com', '09278350348', '5590684', 'Juana', 'Sister', '09271111111', 'Makati City', 'June', 'Brother', '09272222222', 'Muntinlupa City', 'James', 'Cousin', '09273333333', 'Metro Manila', 'BPI', 'Harrison', 'Juan Dela Cruz', '123456789', 'Accountant', 'Some Values', 100, 'resign', 'unlimited', 200, 2, 12, 300, 21600, 200, '111122223333', '12/04/2014', '12/04/2019', 'Some Values', 1, 1, 1, '100', '200', 111111, '12/04/2014', '12/04/2019', 'AAA', 222222, '12/05/2014', '12/05/2019', 'BBBB', 333333, '12/06/2014', '12/06/2019', 'CCC', 444444, '12/07/2014', '12/07/2019', 'DDD', 555555, '12/08/2014', '12/08/2019', 'EEE', 'admin.png', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 0),
(110, 'Prime Lemuel Rio', 'Prime Lemuel', 'Pena', 'Rio', 'male', '10/15/1986', 28, 'Manila', 'filipino', 'single', '', 'Tagalog', 'EBAAAABBBB', 'Full time', '11/01/2014', '11/02/2014', '11/03/2014', '2256', 'Granate', 'San Andres Bukid Manila', '2256 Granate San Andres Bukid Manila', 'prymerio@rocketmail.com', '09278350348', '5590684', 'Juana Dela Cruz', 'Sister', '09278350348', 'Makati City, Philippines', '', '', '', '', '', '', '', '', 'BPI', 'Harrison', 'Prime Lemuel Rio', '1321313213', 'Information Technology', 'Some Values', 100, 'resign', 'unlimited', 200, 2, 12, 300, 21600, 600, '123456789', '12/04/2014', '12/05/2014', '', 1, 1, 1, '0', '0', 123, '12/04/2014', '12/05/2014', '', 0, '', '', '', 0, '', '', '', 0, '', '', '', 0, '', '', '', 'Prime.jpg', 'prymerio@rocketmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 1),
(111, 'Ma. Sheryl Marzan', 'Ma. Sheryl', 'Dadiz', 'Marzan', 'female', '11/15/1989', 25, 'Philippines', 'filipino', 'single', '', 'English', 'EB123456789', 'Limited', '10/22/2014', '10/22/2014', '10/22/2014', '416', 'Al Rigga', 'Dubai', '416 Al Salmiya Bldg. Al Rigga Deira Dubai, UAE', 'xhiemme08@gmail.com', '0564758005', '09307033068', ' Marissa M. Villanueva', 'Auntie', '0552505089', '416 Al Salmiya Bldg. Al Rigga Deira Dubai, UAE', '', '', '', '', '', '', '', '', '', '', '', '', 'Archive Clerk', 'Employment ', 3000, 'terminated', 'unlimited', 0, 0, 0, 0, 0, 3000, '', '', '', '', 0, 0, 0, '0', '0', 0, '', '', '', 0, '', '', '', 0, '', '', '', 0, '', '', '', 0, '', '', '', 'Sheryl.jpg', 'xhiemme08@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
