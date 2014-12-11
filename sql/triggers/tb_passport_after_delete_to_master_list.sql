USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_passport_AFTER_DELETE$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_passport_AFTER_DELETE` 
AFTER DELETE ON `tb_passport` 
FOR EACH ROW
begin
update tb_property_owner_master_list
set passport_no1 = null,
    tb_passport_id1 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_passport_id1 = old.tb_passport_id;

update tb_property_owner_master_list
set passport_no2 = null,
    tb_passport_id2 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_passport_id2 = old.tb_passport_id;

update tb_property_owner_master_list
set passport_no3 = null,
    tb_passport_id3 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_passport_id3 = old.tb_passport_id;

update tb_property_owner_master_list
set passport_no4 = null,
    tb_passport_id4 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_passport_id4 = old.tb_passport_id;
end
    $$
DELIMITER ;
