USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_nationality_AFTER_INSERT$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_nationality_AFTER_INSERT` 
AFTER INSERT ON `tb_nationality` 
FOR EACH ROW
begin
declare v_nationality1_id int;
declare v_nationality2_id int;
declare v_nationality3_id int;
declare v_nationality4_id int;

select tb_nationality_id1, tb_nationality_id2, tb_nationality_id3, tb_nationality_id4
 into v_nationality1_id, v_nationality2_id, v_nationality3_id, v_nationality4_id
from tb_property_owner_master_list
where tb_property_owner_id = new.tb_property_owner_id;

if (v_nationality1_id = 0) then
update tb_property_owner_master_list
set nationality1 = new.nationality,
tb_nationality_id1 = new.tb_nationality_id
where tb_property_owner_id = new.tb_property_owner_id;

elseif (v_nationality2_id=0) then
update tb_property_owner_master_list
set nationality2 = new.nationality,
tb_nationality_id2 = new.tb_nationality_id
where tb_property_owner_id = new.tb_property_owner_id;

elseif (v_nationality3_id=0) then
update tb_property_owner_master_list
set nationality3 = new.nationality,
tb_nationality_id3 = new.tb_nationality_id
where tb_property_owner_id = new.tb_property_owner_id;

elseif (v_nationality4_id=0) then
update tb_property_owner_master_list
set nationality4 = new.nationality,
tb_nationality_id4 = new.tb_nationality_id
where tb_property_owner_id = new.tb_property_owner_id;
end if;
end$$
DELIMITER ;
