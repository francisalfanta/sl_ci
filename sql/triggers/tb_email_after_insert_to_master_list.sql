USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_email_AFTER_INSERT$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_email_AFTER_INSERT` 
AFTER INSERT ON `tb_email` 
FOR EACH ROW
begin
declare v_email1_id int;
declare v_email2_id int;
declare v_email3_id int;
declare v_email4_id int;

select tb_email_id1, tb_email_id2, tb_email_id3, tb_email_id4
 into v_email1_id, v_email2_id, v_email3_id, v_email4_id
from tb_property_owner_master_list
where tb_property_owner_id = new.tb_property_owner_id;

if (v_email1_id = 0) then
update tb_property_owner_master_list
set email1 = new.email,
tb_email_id1 = new.tb_email_id
where tb_property_owner_id = new.tb_property_owner_id;

elseif (v_email2_id=0) then
update tb_property_owner_master_list
set email2 = new.email,
tb_email_id2 = new.tb_email_id
where tb_property_owner_id = new.tb_property_owner_id;

elseif (v_email3_id=0) then
update tb_property_owner_master_list
set email3 = new.email,
tb_email_id3 = new.tb_email_id
where tb_property_owner_id = new.tb_property_owner_id;

elseif (v_email4_id=0) then
update tb_property_owner_master_list
set email4 = new.email,
tb_email_id4 = new.tb_email_id
where tb_property_owner_id = new.tb_property_owner_id;
end if;
end
    $$
DELIMITER ;
