USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_nationality_AFTER_DELETE$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_nationality_AFTER_DELETE` 
AFTER DELETE ON `tb_nationality` 
FOR EACH ROW
begin
update tb_property_owner_master_list a
set a.nationality1 = null,
    a.tb_nationality_id1 = 0
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_nationality_id1 = old.tb_nationality_id;

update tb_property_owner_master_list a
set a.nationality2 = null,
    a.tb_nationality_id2 = 0
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_nationality_id2 = old.tb_nationality_id;

update tb_property_owner_master_list a
set a.nationality3 = null,
    a.tb_nationality_id3 = 0
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_nationality_id3 = old.tb_nationality_id;

update tb_property_owner_master_list a
set a.nationality4 = null,
    a.tb_nationality_id4 = 0
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_nationality_id4 = old.tb_nationality_id;
end
    $$
DELIMITER ;
