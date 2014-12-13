USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_fax_no_AFTER_DELETE$$
USE `softlinecsdb`$$
CREATE TRIGGER `tb_fax_no_AFTER_DELETE` AFTER DELETE ON tb_fax_no FOR EACH ROW
-- Edit trigger body code below this line. Do not edit lines above this one
begin

update tb_property_owner_master_list a
set a.fax_no1 = null,
    a.tb_fax_no_id1 = 0
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_fax_no_id1 = old.tb_fax_no_id;

update tb_property_owner_master_list a
set a.fax_no2 = null,
    a.tb_fax_no_id2 = 0
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_fax_no_id2 = old.tb_fax_no_id;

update tb_property_owner_master_list a
set a.fax_no3 = null,
    a.tb_fax_no_id3 = 0
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_fax_no_id3 = old.tb_fax_no_id;

update tb_property_owner_master_list a
set a.fax_no4 = null,
    a.tb_fax_no_id4 = 0
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_fax_no_id4 = old.tb_fax_no_id;
end
$$
DELIMITER ;
