USE `softlinecsdb`;
DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_passport_AFTER_DELETE$$
USE `softlinecsdb`$$
CREATE TRIGGER `tb_passport_AFTER_DELETE` AFTER DELETE ON tb_passport FOR EACH ROW
-- Edit trigger body code below this line. Do not edit lines above this one
begin
update tb_property_owner_master_list a
set a.passport_no1 = null,
    a.tb_passport_id1 = 0
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_passport_id1 = old.tb_passport_id;

update tb_property_owner_master_list a
set a.passport_no2 = null,
    a.tb_passport_id2 = 0
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_passport_id2 = old.tb_passport_id;

update tb_property_owner_master_list a
set a.passport_no3 = null,
    a.tb_passport_id3 = 0
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_passport_id3 = old.tb_passport_id;

update tb_property_owner_master_list a
set a.passport_no4 = null,
    a.tb_passport_id4 = 0
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_passport_id4 = old.tb_passport_id;
end
$$
DELIMITER ;
