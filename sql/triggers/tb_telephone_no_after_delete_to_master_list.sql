USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_telephone_no_AFTER_DELETE$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_telephone_no_AFTER_DELETE` 
AFTER DELETE ON `tb_telephone_no` 
FOR EACH ROW
begin
update tb_property_owner_master_list
set telephone_no1 = null,
    tb_telephone_no_id1 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_telephone_no_id1 = old.tb_telephone_no_id;

update tb_property_owner_master_list
set telephone_no2 = null,
    tb_telephone_no_id2 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_telephone_no_id2 = old.tb_telephone_no_id;

update tb_property_owner_master_list
set telephone_no3 = null,
    tb_telephone_no_id3 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_telephone_no_id3 = old.tb_telephone_no_id;

update tb_property_owner_master_list
set telephone_no4 = null,
    tb_telephone_no_id4 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_telephone_no_id4 = old.tb_telephone_no_id;

end

    $$
DELIMITER ;
