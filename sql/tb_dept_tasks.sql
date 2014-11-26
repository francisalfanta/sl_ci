DROP TABLE IF EXISTS `tb_dept_tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_dept_tasks` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `dept_id` int(20),
  `table_name` varchar(255),
  PRIMARY KEY (`id`),
  FOREIGN KEY fk_dept(dept_id)
   REFERENCES tb_sections(id)
   ON UPDATE CASCADE
   ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;