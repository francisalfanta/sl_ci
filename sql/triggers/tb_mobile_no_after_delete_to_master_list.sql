USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_mobile_no_AFTER_DELETE$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_mobile_no_AFTER_DELETE` 
AFTER DELETE ON `tb_mobile_no` 
FOR EACH ROW
begin
update tb_property_owner_master_list a
set a.mobile_no1 = null,
    a.tb_mobile_id1 = 0
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_mobile_id1 = old.tb_mobile_id;

update tb_property_owner_master_list a
set a.mobile_no2 = null,
    a.tb_mobile_id2 = 0
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_mobile_id2 = old.tb_mobile_id;

update tb_property_owner_master_list a
set a.mobile_no3 = null,
    a.tb_mobile_id3 = 0
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_mobile_id3 = old.tb_mobile_id;

update tb_property_owner_master_list a
set a.mobile_no4 = null,
    a.tb_mobile_id4 = 0
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_mobile_id4 = old.tb_mobile_id;

end$$
DELIMITER ;
