USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_fax_no_AFTER_DELETE$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_fax_no_AFTER_DELETE` 
AFTER DELETE ON `tb_fax_no` 
FOR EACH ROW
begin

update tb_property_owner_master_list
set fax_no1 = null,
    tb_fax_no_id1 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_fax_no_id1 = old.tb_fax_no_id;

update tb_property_owner_master_list
set fax_no2 = null,
    tb_fax_no_id2 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_fax_no_id2 = old.tb_fax_no_id;

update tb_property_owner_master_list
set fax_no3 = null,
    tb_fax_no_id3 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_fax_no_id3 = old.tb_fax_no_id;

update tb_property_owner_master_list
set fax_no4 = null,
    tb_fax_no_id4 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_fax_no_id4 = old.tb_fax_no_id;
end
    $$
DELIMITER ;
