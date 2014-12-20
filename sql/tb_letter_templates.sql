CREATE TABLE `softlinecsdb`.`tb_letter_templates` (
  `tb_letter_templates_id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL,
  `message` VARCHAR(2000) NULL,
  `tb_slcs_staff_id` BIGINT(20) NULL,
  PRIMARY KEY (`tb_letter_templates`))
COMMENT = 'Real Estate Letter Template';
