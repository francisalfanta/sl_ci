USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_telephone_no_AFTER_DELETE$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_telephone_no_AFTER_DELETE` 
AFTER DELETE ON `tb_telephone_no` 
FOR EACH ROW
begin
update tb_property_owner_master_list a
set a.telephone_no1 = null,
    a.tb_telephone_no_id1 = null
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_telephone_no_id1 = old.tb_telephone_no_id;

update tb_property_owner_master_list a
set a.telephone_no2 = null,
    a.tb_telephone_no_id2 = null
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_telephone_no_id2 = old.tb_telephone_no_id;

update tb_property_owner_master_list a
set a.telephone_no3 = null,
    a.tb_telephone_no_id3 = null
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_telephone_no_id3 = old.tb_telephone_no_id;

update tb_property_owner_master_list a
set a.telephone_no4 = null,
    a.tb_telephone_no_id4 = null
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_telephone_no_id4 = old.tb_telephone_no_id;

end

    $$
DELIMITER ;
