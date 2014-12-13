USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_email_AFTER_UPDATE$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_email_AFTER_UPDATE` 
AFTER UPDATE ON `tb_email` 
FOR EACH ROW
begin
update tb_property_owner_master_list a
set a.email1 = new.email
where a.tb_property_owner_id = new.tb_property_owner_id
and a.tb_email_id1 = new.tb_email_id;

update tb_property_owner_master_list a
set a.email2 = new.email
where a.tb_property_owner_id = new.tb_property_owner_id
and a.tb_email_id2 = new.tb_email_id;

update tb_property_owner_master_list a
set a.email3 = new.email
where a.tb_property_owner_id = new.tb_property_owner_id
and a.tb_email_id3 = new.tb_email_id;

update tb_property_owner_master_list a
set a.email4 = new.email
where a.tb_property_owner_id = new.tb_property_owner_id
and a.tb_email_id4 = new.tb_email_id;
end
    $$
DELIMITER ;
