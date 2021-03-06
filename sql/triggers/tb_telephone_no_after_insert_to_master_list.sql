delimiter $$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_telephone_no_AFTER_INSERT` 
AFTER INSERT ON `tb_telephone_no` 
FOR EACH ROW
begin
declare v_telno1_id int;
declare v_telno2_id int;
declare v_telno3_id int;
declare v_telno4_id int;
declare task_done boolean default FALSE;

select tb_telephone_no_id1, tb_telephone_no_id2, tb_telephone_no_id3, tb_telephone_no_id4
 into v_telno1_id, v_telno2_id, v_telno3_id, v_telno4_id
from tb_property_owner_master_list
where tb_property_owner_id = new.tb_property_owner_id;

if v_telno1_id = 0 and task_done = FALSE then
update tb_property_owner_master_list a
set a.telephone_no1 = new.telephone_no,
    a.tb_telephone_no_id1 = new.tb_telephone_no_id
where a.tb_property_owner_id = new.tb_property_owner_id;
set task_done = true;

elseif v_telno2_id=0 and task_done = FALSE then
update tb_property_owner_master_list a
set a.telephone_no2 = new.telephone_no,
	a.tb_telephone_no_id2 = new.tb_telephone_no_id
where a.tb_property_owner_id = new.tb_property_owner_id;
set task_done = true;

elseif v_telno3_id=0 and task_done = FALSE then
update tb_property_owner_master_list a
set a.telephone_no3 = new.telephone_no,
	a.tb_telephone_no_id3 = new.tb_telephone_no_id
where a.tb_property_owner_id = new.tb_property_owner_id;
set task_done = true;

elseif v_telno4_id=0 and task_done = FALSE then
update tb_property_owner_master_list a
set a.telephone_no4 = new.telephone_no,
	a.tb_telephone_no_id4 = new.tb_telephone_no_id
where a.tb_property_owner_id = new.tb_property_owner_id;
set task_done = true;
end if;
end
$$
delimiter ;