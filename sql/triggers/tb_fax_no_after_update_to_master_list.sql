USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_fax_no_AFTER_UPDATE$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_fax_no_AFTER_UPDATE` 
AFTER UPDATE ON `tb_fax_no` 
FOR EACH ROW
begin

update tb_property_owner_master_list a
set a.fax_no1 = new.fax_no
where a.tb_property_owner_id = new.tb_property_owner_id
and a.tb_fax_no_id1 = new.tb_fax_no_id;

update tb_property_owner_master_list a
set a.fax_no2 = new.fax_no
where a.tb_property_owner_id = new.tb_property_owner_id
and a.tb_fax_no_id2 = new.tb_fax_no_id;

update tb_property_owner_master_list a
set a.fax_no3 = new.fax_no
where a.tb_property_owner_id = new.tb_property_owner_id
and a.tb_fax_no_id3 = new.tb_fax_no_id;

update tb_property_owner_master_list a
set a.fax_no4 = new.fax_no
where a.tb_property_owner_id = new.tb_property_owner_id
and a.tb_fax_no_id4 = new.tb_fax_no_id;
end;
    $$
DELIMITER ;
