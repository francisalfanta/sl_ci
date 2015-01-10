CREATE TABLE `tb_staff_permissions` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `staff_id` bigint(20) NOT NULL,
  `accessable_table_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)/*,
  KEY `fk_staff_id_idx` (`staff_id`),
  KEY `fk_dept_tasks_idx` (`accessable_table_id`),
  CONSTRAINT `fk_staff_id` FOREIGN KEY (`staff_id`) REFERENCES `tb_slcs_staff` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dept_tasks` FOREIGN KEY (`accessable_table_id`) REFERENCES `tb_dept_tasks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE 
  */
) ENGINE=InnoDB AUTO_INCREMENT=329 DEFAULT CHARSET=latin1;
