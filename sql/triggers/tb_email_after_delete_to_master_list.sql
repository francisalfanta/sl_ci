USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_email_AFTER_DELETE$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_email_AFTER_DELETE` 
AFTER DELETE ON `tb_email` 
FOR EACH ROW
begin

update tb_property_owner_master_list
set email1 = null,
    tb_email_id1 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_email_id1 = old.tb_email_id;

update tb_property_owner_master_list
set email2 = null,
    tb_email_id2 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_email_id2 = old.tb_email_id;

update tb_property_owner_master_list
set email3 = null,
    tb_email_id3 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_email_id3 = old.tb_email_id;

update tb_property_owner_master_list
set email4 = null,
    tb_email_id4 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_email_id4 = old.tb_email_id;

end$$
DELIMITER ;
