-- -----------------------------------------------------
-- Table `softlinecsdb`.`tb_property_owner_has_tb_propertyfinder`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_property_owner_has_tb_propertyfinder` (
  `tb_property_owner_id` BIGINT(20) NOT NULL,
  `tb_propertyfinder_id` BIGINT(20) NOT NULL,
  PRIMARY KEY (`tb_property_owner_id`, `tb_propertyfinder_id`),
  INDEX `fk_tb_property_owner_has_tb_propertyfinder_tb_propertyfinde_idx` (`tb_propertyfinder_id` ASC),
  INDEX `fk_tb_property_owner_has_tb_propertyfinder_tb_property_owne_idx` (`tb_property_owner_id` ASC)
  /* CONSTRAINT `fk_tb_property_owner_has_tb_propertyfinder_tb_property_owner1`
    FOREIGN KEY (`tb_property_owner_id`)
    REFERENCES `softlinecsdb`.`tb_property_owner` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_property_owner_has_tb_propertyfinder_tb_propertyfinder1`
    FOREIGN KEY (`tb_propertyfinder_id`)
    REFERENCES `softlinecsdb`.`tb_propertyfinder` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
    */
    )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

