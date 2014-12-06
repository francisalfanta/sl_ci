insert into tb_property_owner values (1, 'Francis', 'Montlana', 'Anta', 'Nemale', str_to_date('1979-10-04', '%Y-%m-%d'),null,'Single');
insert into tb_property_owner values (2, 'Steves', 'Montallana', 'Alfanta', 'Female', str_to_date('1980-10-04', '%Y-%m-%d'),null,'Married');

insert into tb_nationality values( 1, '097-123-4523', '055-735-1823', 'fx055-735-1823', 'fran@gmail.com', 1);
insert into tb_nationality values( 2, '0xx-123-4523', '0yy-735-1823', 'yy055-735-1823', 'xsdn@gmail.com', 1);

insert into tb_address values(1,'137 T. Perez St., Market Site', '4501', '11334', 'Bicol Region', 'Albay', 'Phili');
insert into tb_address values(2,'T. Perez St., Market Site', '45201', '1x1334', 'Bxicol Region', 'xAlbay', 'xPhili');


insert into tb_residential_types(id, type_name) 
values(1, 'Apartment'),(2,'Villa'),(3,'Townhouse'),
(4, 'Penhouse'),(5,'Compound'),(6,'Duplex'),(7,'Full floor'),
(8, 'Half floor'),(9, 'Whole Building'),(10, 'Land'),(11, 'Bulk Sale Units'),
(12, 'Bungalow'), (13, 'Hotel/Hotel Apartment');

insert into tb_commercial_types(id, type_name) 
values(1, 'Office Space'),(2,'Retail'),(3,'Warehouse'),
(4, 'Shop'),(5,'Villa'),(6,'Show Room'),(7,'Plot'),
(8, 'Full floor'),(9, 'Whole Building'),(10, 'Bulk Rent Units'),(11, 'Factory'),
(12, 'Labor Camp'), (13, 'Staff Accomodation');

-- -----------------------------------------------------
-- Table `softlinecsdb`.`tb_commercial_types`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_commercial_types` (
  `id` INT(11) NOT NULL,
  `type_name` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `softlinecsdb`.`tb_property_owner`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_property_owner` (
  `tb_property_owner_id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(50) NULL DEFAULT NULL,
  `middle_name` VARCHAR(50) NULL DEFAULT NULL,
  `last_name` VARCHAR(50) NULL DEFAULT NULL,
  `gender` CHAR(10) NULL DEFAULT NULL,
  `dob` DATE NULL DEFAULT NULL,
  `passport_no` VARCHAR(100) NULL DEFAULT NULL,
  `marital_stat` CHAR(15) NULL DEFAULT NULL,
  PRIMARY KEY (`tb_property_owner_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `softlinecsdb`.`tb_nationality`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_nationality` (
  `tb_nationality_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `address_id` BIGINT(20) NULL,
  `telephone_no` VARCHAR(100) NULL,
  `mobile_no` VARCHAR(100) NULL DEFAULT NULL,
  `fax_no` VARCHAR(100) NULL DEFAULT NULL,
  `email` VARCHAR(100) NULL DEFAULT NULL,
  `property_owner_id` BIGINT(20) NULL DEFAULT NULL,
  PRIMARY KEY (`tb_nationality_id`, `address_id`),
  INDEX `national_prop_owner_fk_idx` (`property_owner_id` ASC),
  INDEX `fk_tb_nationality_tb_address2_idx` (`address_id` ASC),
  CONSTRAINT `national_prop_owner_fk`
    FOREIGN KEY (`property_owner_id`)
    REFERENCES `softlinecsdb`.`tb_property_owner` (`tb_property_owner_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_nationality_tb_address2`
    FOREIGN KEY (`address_id`)
    REFERENCES `softlinecsdb`.`tb_address` (`tb_address_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `softlinecsdb`.`tb_property_owner_has_tb_propertyfinder`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_property_owner_has_tb_propertyfinder` (
  `tb_property_owner_id` BIGINT(20) NOT NULL,
  `tb_propertyfinder_id` BIGINT(20) NOT NULL,
  PRIMARY KEY (`tb_property_owner_id`, `tb_propertyfinder_id`),
  INDEX `fk_tb_property_owner_has_tb_propertyfinder_tb_propertyfinde_idx` (`tb_propertyfinder_id` ASC),
  INDEX `fk_tb_property_owner_has_tb_propertyfinder_tb_property_owne_idx` (`tb_property_owner_id` ASC),
  CONSTRAINT `fk_tb_property_owner_has_tb_propertyfinder_tb_property_owner1`
    FOREIGN KEY (`tb_property_owner_id`)
    REFERENCES `softlinecsdb`.`tb_property_owner` (`tb_property_owner_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_property_owner_has_tb_propertyfinder_tb_propertyfinder1`
    FOREIGN KEY (`tb_propertyfinder_id`)
    REFERENCES `softlinecsdb`.`tb_propertyfinder` (`tb_propertyfinder_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `softlinecsdb`.`tb_residential_types`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_residential_types` (
  `id` INT(11) NOT NULL,
  `type_name` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
