CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_nationality` (
  `tb_nationality_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nationality` varchar(45),
  `property_owner_id` BIGINT(20) NULL DEFAULT NULL,
  PRIMARY KEY (`tb_nationality_id`),
  INDEX `national_prop_owner_fk_idx` (`property_owner_id` ASC),
  CONSTRAINT `national_prop_owner_fk`
    FOREIGN KEY (`property_owner_id`)
    REFERENCES `softlinecsdb`.`tb_property_owner` (`tb_property_owner_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;