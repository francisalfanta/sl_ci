USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_nationality_AFTER_UPDATE$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_nationality_AFTER_UPDATE` 
AFTER UPDATE ON `tb_nationality` 
FOR EACH ROW
begin
update tb_property_owner_master_list
set nationality1 = new.nationality
where tb_property_owner_id = new.tb_property_owner_id
and tb_nationality_id1 = new.tb_nationality_id;

update tb_property_owner_master_list
set nationality2 = new.nationality
where tb_property_owner_id = new.tb_property_owner_id
and tb_nationality_id2 = new.tb_nationality_id;

update tb_property_owner_master_list
set nationality3 = new.nationality
where tb_property_owner_id = new.tb_property_owner_id
and tb_nationality_id3 = new.tb_nationality_id;

update tb_property_owner_master_list
set nationality4 = new.nationality
where tb_property_owner_id = new.tb_property_owner_id
and tb_nationality_id4 = new.tb_nationality_id;
end
    $$
DELIMITER ;
