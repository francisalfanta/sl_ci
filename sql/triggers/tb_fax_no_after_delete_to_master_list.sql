USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_fax_no_AFTER_DELETE$$
USE `softlinecsdb`$$
CREATE TRIGGER `tb_fax_no_AFTER_DELETE` AFTER DELETE ON tb_fax_no FOR EACH ROW
-- Edit trigger body code below this line. Do not edit lines above this one
begin

update tb_property_owner_master_list
set fax_no1 = null,
    tb_fax_no_id1 = 0
where tb_property_owner_id = old.tb_property_owner_id
and tb_fax_no_id1 = old.tb_fax_no_id;

update tb_property_owner_master_list
set fax_no2 = null,
    tb_fax_no_id2 = 0
where tb_property_owner_id = old.tb_property_owner_id
and tb_fax_no_id2 = old.tb_fax_no_id;

update tb_property_owner_master_list
set fax_no3 = null,
    tb_fax_no_id3 = 0
where tb_property_owner_id = old.tb_property_owner_id
and tb_fax_no_id3 = old.tb_fax_no_id;

update tb_property_owner_master_list
set fax_no4 = null,
    tb_fax_no_id4 = 0
where tb_property_owner_id = old.tb_property_owner_id
and tb_fax_no_id4 = old.tb_fax_no_id;
end
$$
DELIMITER ;
