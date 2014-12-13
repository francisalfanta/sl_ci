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
declare task_done boolean default FALSE;

select tb_email_id1, tb_email_id2, tb_email_id3, tb_email_id4
 into v_email1_id, v_email2_id, v_email3_id, v_email4_id
from tb_property_owner_master_list
where tb_property_owner_id = new.tb_property_owner_id;

if v_email1_id = 0 and task_done = FALSE  then
update tb_property_owner_master_list a
set a.email1 = new.email,
    a.tb_email_id1 = new.tb_email_id
where a.tb_property_owner_id = new.tb_property_owner_id;
set task_done = true;

elseif v_email2_id=0 and task_done = FALSE  then
update tb_property_owner_master_list a
set a.email2 = new.email,
    a.tb_email_id2 = new.tb_email_id
where a.tb_property_owner_id = new.tb_property_owner_id;
set task_done = true;

elseif v_email3_id=0 and task_done = FALSE  then
update tb_property_owner_master_list a
set a.email3 = new.email,
    a.tb_email_id3 = new.tb_email_id
where a.tb_property_owner_id = new.tb_property_owner_id;
set task_done = true;

elseif v_email4_id=0 and task_done = FALSE  then
update tb_property_owner_master_list a
set a.email4 = new.email,
    a.tb_email_id4 = new.tb_email_id
where a.tb_property_owner_id = new.tb_property_owner_id;
set task_done = true;

end if;
end
    $$
DELIMITER ;
