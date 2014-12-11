USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_mobile_no_AFTER_UPDATE$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_mobile_no_AFTER_UPDATE` 
AFTER UPDATE ON `tb_mobile_no` 
FOR EACH ROW
begin

update tb_property_owner_master_list
set mobile_no1 = new.mobile_no
where tb_property_owner_id = new.tb_property_owner_id
and tb_mobile_id1 = new.tb_mobile_id;

update tb_property_owner_master_list
set mobile_no2 = new.mobile_no
where tb_property_owner_id = new.tb_property_owner_id
and tb_mobile_id2 = new.tb_mobile_id;

update tb_property_owner_master_list
set mobile_no3 = new.mobile_no
where tb_property_owner_id = new.tb_property_owner_id
and tb_mobile_id3 = new.tb_mobile_id;

update tb_property_owner_master_list
set mobile_no4 = new.mobile_no
where tb_property_owner_id = new.tb_property_owner_id
and tb_mobile_id4 = new.tb_mobile_id;
end
    $$
DELIMITER ;
