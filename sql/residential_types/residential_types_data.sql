USE softlinecsdb;
create table tb_residential_types(id int not null auto_increment, residential_type varchar(100), PRIMARY KEY (`id`) ) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `tb_residential_types` VALUES ('1', 'Apartment'); -- # 1 row affected.
INSERT INTO `tb_residential_types` VALUES ('2', 'Villa'); -- # 1 row affected.
INSERT INTO `tb_residential_types` VALUES ('3', 'Townhouse'); -- # 1 row affected.
INSERT INTO `tb_residential_types` VALUES ('4', 'Penhouse'); -- # 1 row affected.
INSERT INTO `tb_residential_types` VALUES ('5', 'Compound'); -- # 1 row affected.
INSERT INTO `tb_residential_types` VALUES ('6', 'Duplex'); -- # 1 row affected.
INSERT INTO `tb_residential_types` VALUES ('7', 'Full floor'); -- # 1 row affected.
INSERT INTO `tb_residential_types` VALUES ('8', 'Half floor'); -- # 1 row affected.
INSERT INTO `tb_residential_types` VALUES ('9', 'Whole Building'); -- # 1 row affected.
INSERT INTO `tb_residential_types` VALUES ('10', 'Land'); -- # 1 row affected.
INSERT INTO `tb_residential_types` VALUES ('11', 'Bulk Sale Units'); -- # 1 row affected.
INSERT INTO `tb_residential_types` VALUES ('12', 'Bungalow'); -- # 1 row affected.
INSERT INTO `tb_residential_types` VALUES ('13', 'Hotel/Hotel Apartment');