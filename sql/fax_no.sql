-- -----------------------------------------------------
-- Table `softlinecsdb`.`tb_fax_no`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_fax_no` (
  `tb_fax_no_id` INT NOT NULL AUTO_INCREMENT,
  `fax_no` INT NULL,
  `tb_property_owner_id` BIGINT(20) NOT NULL,
  PRIMARY KEY (`tb_fax_no_id`),
  INDEX `fk_tb_fax_no_tb_property_owner1_idx` (`tb_property_owner_id` ASC),
  CONSTRAINT `fk_tb_fax_no_tb_property_owner1`
    FOREIGN KEY (`tb_property_owner_id`)
    REFERENCES `softlinecsdb`.`tb_property_owner` (`tb_property_owner_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;