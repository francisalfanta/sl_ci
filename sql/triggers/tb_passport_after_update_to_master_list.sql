USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_passport_AFTER_UPDATE$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_passport_AFTER_UPDATE` 
AFTER UPDATE ON `tb_passport` 
FOR EACH ROW
begin
update tb_property_owner_master_list
set passport_no1 = new.passport_no
where tb_property_owner_id = new.tb_property_owner_id
and tb_passport_id1 = new.tb_passport_id;

update tb_property_owner_master_list
set passport_no2 = new.passport_no
where tb_property_owner_id = new.tb_property_owner_id
and tb_passport_id2 = new.tb_passport_id;

update tb_property_owner_master_list
set passport_no3 = new.passport_no
where tb_property_owner_id = new.tb_property_owner_id
and tb_passport_id3 = new.tb_passport_id;

update tb_property_owner_master_list
set passport_no4 = new.passport_no
where tb_property_owner_id = new.tb_property_owner_id
and tb_passport_id4 = new.tb_passport_id;
end
    $$
DELIMITER ;
