USE softlinecsdb;
create table tb_commercial_types(id int not null auto_increment, commercial_type varchar(100), PRIMARY KEY (`id`) ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
	
INSERT INTO `tb_commercial_types` VALUES ('1', 'Office Space'); -- # 1 row affected.
INSERT INTO `tb_commercial_types` VALUES ('2', 'Retail'); -- # 1 row affected.
INSERT INTO `tb_commercial_types` VALUES ('3', 'Warehouse'); -- # 1 row affected.
INSERT INTO `tb_commercial_types` VALUES ('4', 'Shop'); -- # 1 row affected.
INSERT INTO `tb_commercial_types` VALUES ('5', 'Villa'); -- # 1 row affected.
INSERT INTO `tb_commercial_types` VALUES ('6', 'Show Room'); -- # 1 row affected.
INSERT INTO `tb_commercial_types` VALUES ('7', 'Plot'); -- # 1 row affected.
INSERT INTO `tb_commercial_types` VALUES ('8', 'Full floor'); -- # 1 row affected.
INSERT INTO `tb_commercial_types` VALUES ('9', 'Whole Building'); -- # 1 row affected.
INSERT INTO `tb_commercial_types` VALUES ('10', 'Bulk Rent Units'); -- # 1 row affected.
INSERT INTO `tb_commercial_types` VALUES ('11', 'Factory'); -- # 1 row affected.
INSERT INTO `tb_commercial_types` VALUES ('12', 'Labor Camp'); -- # 1 row affected.
INSERT INTO `tb_commercial_types` VALUES ('13', 'Staff Accomodation'); -- # 1 row[...]