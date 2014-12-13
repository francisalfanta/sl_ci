USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_mobile_no_AFTER_INSERT$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_mobile_no_AFTER_INSERT` 
AFTER INSERT ON `tb_mobile_no` 
FOR EACH ROW
begin
declare v_mobileno1_id int;
declare v_mobileno2_id int;
declare v_mobileno3_id int;
declare v_mobileno4_id int;
declare task_done boolean default FALSE;

select tb_mobile_id1, tb_mobile_id2, tb_mobile_id3, tb_mobile_id4
 into v_mobileno1_id, v_mobileno2_id, v_mobileno3_id, v_mobileno4_id
from tb_property_owner_master_list
where tb_property_owner_id = new.tb_property_owner_id;

if v_mobileno1_id = 0 and task_done = FALSE then
update tb_property_owner_master_list a
set a.mobile_no1 = new.mobile_no,
    a.tb_mobile_id1 = new.tb_mobile_id
where a.tb_property_owner_id = new.tb_property_owner_id;
set task_done = true;

elseif v_mobileno2_id=0 and task_done = FALSE then
update tb_property_owner_master_list a
set a.mobile_no2 = new.mobile_no,
    a.tb_mobile_id2 = new.tb_mobile_id
where a.tb_property_owner_id = new.tb_property_owner_id;
set task_done = true;

elseif v_mobileno3_id=0 and task_done = FALSE then
update tb_property_owner_master_list a
set a.mobile_no3 = new.mobile_no,
	a.tb_mobile_id3 = new.tb_mobile_id
where a.tb_property_owner_id = new.tb_property_owner_id;
set task_done = true;

elseif v_mobileno4_id=0 and task_done = FALSE then
update tb_property_owner_master_list a
set a.mobile_no4 = new.mobile_no,
    a.tb_mobile_id4 = new.tb_mobile_id
where a.tb_property_owner_id = new.tb_property_owner_id;
set task_done = true;

end if;

end$$
DELIMITER ;
