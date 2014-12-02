

-- -----------------------------------------------------
-- Table `softlinecsdb`.`tb_property_owner`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_property_owner` (
  `id` BIGINT(20) NOT NULL,
  `first_name` VARCHAR(50) NULL,
  `middle_name` VARCHAR(50) NULL,
  `last_name` VARCHAR(50) NULL,
  `gender` CHAR(10) NULL,
  `dob` DATE NULL,
  `tb_property_ownercol` VARCHAR(45) NULL,
  `marital_stat` CHAR(15) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `softlinecsdb`.`tb_nationality`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_nationality` (
  `id` BIGINT(20) NOT NULL,
  `telephone_no` INT(50) NULL,
  `mobile_no` INT(50) NULL,
  `fax_no` INT(50) NULL,
  `email` VARCHAR(100) NULL,
  `property_owner_id` BIGINT(20) NULL,
  `passport_no` VARCHAR(100) NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `national_prop_owner_fk`
    FOREIGN KEY (`property_owner_id`)
    REFERENCES `softlinecsdb`.`tb_property_owner` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `national_prop_owner_fk_idx` ON `softlinecsdb`.`tb_nationality` (`property_owner_id` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `softlinecsdb`.`tb_propertyfinder`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_propertyfinder` (
  `id` BIGINT(20) NOT NULL,
  `city` VARCHAR(255) NULL,
  `community` VARCHAR(255) NULL,
  `subcommunity` VARCHAR(255) NULL,
  `re_property` VARCHAR(255) NULL,
  `property_type` VARCHAR(45) NULL,
  `building_name` VARCHAR(100) NULL,
  `unit_number` VARCHAR(45) NULL,
  `developer_name` VARCHAR(100) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `softlinecsdb`.`tb_property_owner_has_tb_propertyfinder`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_property_owner_has_tb_propertyfinder` (
  `tb_property_owner_id` BIGINT(20) NOT NULL,
  `tb_propertyfinder_id` BIGINT(20) NOT NULL,
  PRIMARY KEY (`tb_property_owner_id`, `tb_propertyfinder_id`),
  CONSTRAINT `fk_tb_property_owner_has_tb_propertyfinder_tb_property_owner1`
    FOREIGN KEY (`tb_property_owner_id`)
    REFERENCES `softlinecsdb`.`tb_property_owner` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_property_owner_has_tb_propertyfinder_tb_propertyfinder1`
    FOREIGN KEY (`tb_propertyfinder_id`)
    REFERENCES `softlinecsdb`.`tb_propertyfinder` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE INDEX `fk_tb_property_owner_has_tb_propertyfinder_tb_propertyfinde_idx` ON `softlinecsdb`.`tb_property_owner_has_tb_propertyfinder` (`tb_propertyfinder_id` ASC);

SHOW WARNINGS;
CREATE INDEX `fk_tb_property_owner_has_tb_propertyfinder_tb_property_owne_idx` ON `softlinecsdb`.`tb_property_owner_has_tb_propertyfinder` (`tb_property_owner_id` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `softlinecsdb`.`tb_residential_types`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_residential_types` (
  `id` INT NOT NULL,
  `type_name` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `softlinecsdb`.`tb_commercial_types`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_commercial_types` (
  `id` INT NOT NULL,
  `type_name` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
