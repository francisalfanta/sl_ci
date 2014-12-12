USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_nationality_AFTER_INSERT$$
USE `softlinecsdb`$$
CREATE TRIGGER `tb_nationality_AFTER_INSERT` AFTER INSERT ON tb_nationality FOR EACH ROW
-- Edit trigger body code below this line. Do not edit lines above this one
begin
declare v_nationality1_id int;
declare v_nationality2_id int;
declare v_nationality3_id int;
declare v_nationality4_id int;
declare task_done boolean default FALSE;

select tb_nationality_id1, tb_nationality_id2, tb_nationality_id3, tb_nationality_id4
 into v_nationality1_id, v_nationality2_id, v_nationality3_id, v_nationality4_id
from tb_property_owner_master_list
where tb_property_owner_id = new.tb_property_owner_id;

if v_nationality1_id = 0 and task_done = FALSE then
update tb_property_owner_master_list a
set a.nationality1 = new.nationality,
    a.tb_nationality_id1 = new.tb_nationality_id
where a.tb_property_owner_id = NEW.tb_property_owner_id;
set task_done = true;

elseif v_nationality2_id=0 and task_done = FALSE then
update tb_property_owner_master_list a
set a.nationality2 = new.nationality,
    a.tb_nationality_id2 = new.tb_nationality_id
where a.tb_property_owner_id = NEW.tb_property_owner_id;
set task_done = true;

elseif v_nationality3_id=0 and task_done = FALSE then
update tb_property_owner_master_list a
set a.nationality3 = new.nationality,
    a.tb_nationality_id3 = new.tb_nationality_id
where a.tb_property_owner_id = NEW.tb_property_owner_id;
set task_done = true;

elseif v_nationality4_id=0 and task_done = FALSE then
update tb_property_owner_master_list a
set a.nationality4 = new.nationality,
    a.tb_nationality_id4 = new.tb_nationality_id
where a.tb_property_owner_id = NEW.tb_property_owner_id;
end if;
end
$$
DELIMITER ;
