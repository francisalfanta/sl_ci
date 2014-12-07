
USE `softlinecsdb` ;

-- -----------------------------------------------------
-- Table `softlinecsdb`.`tb_nationality`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_nationality` (
  `tb_nationality_id` INT NOT NULL AUTO_INCREMENT,
  `nationality` VARCHAR(100) NULL,
  `tb_property_owner_id` BIGINT(20) NOT NULL,
  PRIMARY KEY (`tb_nationality_id`),
  INDEX `fk_tb_nationality_tb_property_owner1_idx` (`tb_property_owner_id` ASC),
  CONSTRAINT `fk_tb_nationality_tb_property_owner1`
    FOREIGN KEY (`tb_property_owner_id`)
    REFERENCES `softlinecsdb`.`tb_property_owner` (`tb_property_owner_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `softlinecsdb`.`tb_passport`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_passport` (
  `tb_passport_id` INT NOT NULL AUTO_INCREMENT,
  `passport_no` VARCHAR(100) NULL,
  `tb_property_owner_id` BIGINT(20) NOT NULL,
  PRIMARY KEY (`tb_passport_id`),
  INDEX `fk_tb_passport_tb_property_owner1_idx` (`tb_property_owner_tb_property_owner_id` ASC),
  CONSTRAINT `fk_tb_passport_tb_property_owner1`
    FOREIGN KEY (`tb_property_owner_tb_property_owner_id`)
    REFERENCES `softlinecsdb`.`tb_property_owner` (`tb_property_owner_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `softlinecsdb`.`tb_address`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_address` (
  `tb_address_id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `address` VARCHAR(100) NULL,
  `postalcode` VARCHAR(45) NULL,
  `postofficeboxnumber` VARCHAR(45) NULL,
  `addressRegion` VARCHAR(45) NULL,
  `addressLocality` VARCHAR(45) NULL,
  `addressCountry` VARCHAR(45) NULL,
  `tb_property_owner_id` BIGINT(20) NOT NULL,
  PRIMARY KEY (`tb_address_id`),
  INDEX `fk_tb_address_tb_property_owner1_idx` (`tb_property_owner_id` ASC),
  CONSTRAINT `fk_tb_address_tb_property_owner1`
    FOREIGN KEY (`tb_property_owner_id`)
    REFERENCES `softlinecsdb`.`tb_property_owner` (`tb_property_owner_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


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


-- -----------------------------------------------------
-- Table `softlinecsdb`.`tb_email`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_email` (
  `tb_email_id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NULL,
  `tb_property_owner_id` BIGINT(20) NOT NULL,
  PRIMARY KEY (`tb_email_id`),
  INDEX `fk_tb_email_tb_property_owner1_idx` (`tb_property_owner_id` ASC),
  CONSTRAINT `fk_tb_email_tb_property_owner1`
    FOREIGN KEY (`tb_property_owner_id`)
    REFERENCES `softlinecsdb`.`tb_property_owner` (`tb_property_owner_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `softlinecsdb`.`tb_mobile`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_mobile` (
  `tb_mobile_id` INT NOT NULL AUTO_INCREMENT,
  `mobile_no` INT NULL,
  `tb_property_owner_tb_property_owner_id` BIGINT(20) NOT NULL,
  PRIMARY KEY (`tb_mobile_id`),
  INDEX `fk_tb_mobile_tb_property_owner1_idx` (`tb_property_owner_tb_property_owner_id` ASC),
  CONSTRAINT `fk_tb_mobile_tb_property_owner1`
    FOREIGN KEY (`tb_property_owner_tb_property_owner_id`)
    REFERENCES `softlinecsdb`.`tb_property_owner` (`tb_property_owner_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


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


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
