USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_passport_AFTER_UPDATE$$
USE `softlinecsdb`$$
CREATE TRIGGER `tb_passport_AFTER_UPDATE` AFTER UPDATE ON tb_passport FOR EACH ROW
-- Edit trigger body code below this line. Do not edit lines above this one
begin

update tb_property_owner_master_list a
set a.passport_no1 = new.passport_no
where a.tb_property_owner_id = new.tb_property_owner_id
and a.tb_passport_id1 = new.tb_passport_id;

update tb_property_owner_master_list a
set a.passport_no2 = new.passport_no
where a.tb_property_owner_id = new.tb_property_owner_id
and a.tb_passport_id2 = new.tb_passport_id;

update tb_property_owner_master_list a
set a.passport_no3 = new.passport_no
where a.tb_property_owner_id = new.tb_property_owner_id
and a.tb_passport_id3 = new.tb_passport_id;

update tb_property_owner_master_list a
set a.passport_no4 = new.passport_no
where a.tb_property_owner_id = new.tb_property_owner_id
and a.tb_passport_id4 = new.tb_passport_id;
end
$$
DELIMITER ;
