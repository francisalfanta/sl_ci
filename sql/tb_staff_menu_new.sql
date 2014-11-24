
CREATE TABLE IF NOT EXISTS `tb_staff_menu` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `menu` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `send_value` varchar(100) NOT NULL,
  `method` enum('_parent','_self','_blank') NOT NULL DEFAULT '_parent',
  `order` int(10) NOT NULL,
  `parent_id` varchar(100) NOT NULL,  
  `include` varchar(100) NOT NULL,
  `active` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  FOREIGN KEY (`parent_id`) REFERENCES tb_staff_menu (`id`) ON DELETE CASCADE
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=329 ;

