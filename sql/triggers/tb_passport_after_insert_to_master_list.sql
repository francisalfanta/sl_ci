USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_passport_AFTER_INSERT$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_passport_AFTER_INSERT` 
AFTER INSERT ON `tb_passport` 
FOR EACH ROW
begin
declare v_passport1_id int;
declare v_passport2_id int;
declare v_passport3_id int;
declare v_passport4_id int;

select tb_passport_id1, tb_passport_id2, tb_passport_id3, tb_passport_id4
 into v_passport1_id, v_passport2_id, v_passport3_id, v_passport4_id
from tb_property_owner_master_list
where tb_property_owner_id = new.tb_property_owner_id;

if (v_passport1_id = 0) then
update tb_property_owner_master_list
set passport_no1 = new.passport_no,
tb_passport_id1 = new.tb_passport_id
where tb_property_owner_id = new.tb_property_owner_id;

elseif (v_passport2_id=0) then
update tb_property_owner_master_list
set passport_no2 = new.passport_no,
tb_passport_id2 = new.tb_passport_id
where tb_property_owner_id = new.tb_property_owner_id;

elseif (v_passport3_id=0) then
update tb_property_owner_master_list
set passport_no3 = new.passport_no,
tb_passport_id3 = new.tb_passport_id
where tb_property_owner_id = new.tb_property_owner_id;

elseif (v_passport4_id=0) then
update tb_property_owner_master_list
set passport_no4 = new.passport_no,
tb_passport_id4 = new.tb_passport_id
where tb_property_owner_id = new.tb_property_owner_id;
end if;
end
    $$
DELIMITER ;
