-- -----------------------------------------------------
-- Table `softlinecsdb`.`tb_passport`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_passport` (
 `tb_passport_id` INT NOT NULL AUTO_INCREMENT, 
 `passport_no` VARCHAR(100) NULL, 
 `tb_property_owner_id` BIGINT(20) NOT NULL, 
 PRIMARY KEY (`tb_passport_id`), 
 INDEX `fk_tb_passport_tb_property_owner1_idx` (`tb_property_owner_id` ASC), 
 CONSTRAINT `fk_tb_passport_tb_property_owner1` 
 FOREIGN KEY (`tb_property_owner_id`) REFERENCES `softlinecsdb`.`tb_property_owner` 
 (`tb_property_owner_id`) ON DELETE NO ACTION ON UPDATE NO ACTION) ENGINE = InnoDB
