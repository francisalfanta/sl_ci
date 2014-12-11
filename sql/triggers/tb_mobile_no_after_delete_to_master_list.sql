USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_mobile_no_AFTER_DELETE$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_mobile_no_AFTER_DELETE` 
AFTER DELETE ON `tb_mobile_no` 
FOR EACH ROW
begin
update tb_property_owner_master_list
set mobile_no1 = null,
    tb_mobile_id1 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_mobile_id1 = old.tb_mobile_id;

update tb_property_owner_master_list
set mobile_no2 = null,
    tb_mobile_id2 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_mobile_id2 = old.tb_mobile_id;

update tb_property_owner_master_list
set mobile_no3 = null,
    tb_mobile_id3 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_mobile_id3 = old.tb_mobile_id;

update tb_property_owner_master_list
set mobile_no4 = null,
    tb_mobile_id4 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_mobile_id4 = old.tb_mobile_id;

end$$
DELIMITER ;
