USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_fax_no_AFTER_INSERT$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_fax_no_AFTER_INSERT` 
AFTER INSERT ON `tb_fax_no` 
FOR EACH ROW
begin
declare v_faxno1_id int;
declare v_faxno2_id int;
declare v_faxno3_id int;
declare v_faxno4_id int;

select tb_fax_no_id1, tb_fax_no_id2, tb_fax_no_id3, tb_fax_no_id4
 into v_faxno1_id, v_faxno2_id, v_faxno3_id, v_faxno4_id
from tb_property_owner_master_list
where tb_property_owner_id = new.tb_property_owner_id;

if (v_faxno1_id = 0) then
update tb_property_owner_master_list
set fax_no1 = new.fax_no,
tb_fax_no_id1 = new.tb_fax_no_id
where tb_property_owner_id = new.tb_property_owner_id;

elseif (v_faxno2_id=0) then
update tb_property_owner_master_list
set fax_no2 = new.fax_no,
tb_fax_no_id2 = new.tb_fax_no_id
where tb_property_owner_id = new.tb_property_owner_id;

elseif (v_faxno3_id=0) then
update tb_property_owner_master_list
set fax_no3 = new.fax_no,
tb_fax_no_id3 = new.tb_fax_no_id
where tb_property_owner_id = new.tb_property_owner_id;

elseif (v_faxno4_id=0) then
update tb_property_owner_master_list
set fax_no4 = new.fax_no,
tb_fax_no_id4 = new.tb_fax_no_id
where tb_property_owner_id = new.tb_property_owner_id;
end if;

end
    
    $$
DELIMITER ;
