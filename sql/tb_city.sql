
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
