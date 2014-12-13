USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_email_AFTER_DELETE$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_email_AFTER_DELETE` 
AFTER DELETE ON `tb_email` 
FOR EACH ROW
begin

update tb_property_owner_master_list a
set a.email1 = null,
    a.tb_email_id1 = 0
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_email_id1 = old.tb_email_id;

update tb_property_owner_master_list a
set a.email2 = null,
    a.tb_email_id2 = 0
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_email_id2 = old.tb_email_id;

update tb_property_owner_master_list a
set a.email3 = null,
    a.tb_email_id3 = 0
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_email_id3 = old.tb_email_id;

update tb_property_owner_master_list a
set a.email4 = null,
    a.tb_email_id4 = 0
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_email_id4 = old.tb_email_id;

end$$
DELIMITER ;
