-- -----------------------------------------------------
-- Table `softlinecsdb`.`tb_telephone_no`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_telephone_no` (
  `tb_telephone_no_id` INT NOT NULL AUTO_INCREMENT,
  `telephone_no` INT NULL,
  `tb_property_owner_id` BIGINT(20) NOT NULL,
  PRIMARY KEY (`tb_telephone_no_id`),
  INDEX `fk_tb_telephone_no_tb_property_owner1_idx` (`tb_property_owner_id` ASC),
  CONSTRAINT `fk_tb_telephone_no_tb_property_owner1`
    FOREIGN KEY (`tb_property_owner_id`)
    REFERENCES `softlinecsdb`.`tb_property_owner` (`tb_property_owner_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
