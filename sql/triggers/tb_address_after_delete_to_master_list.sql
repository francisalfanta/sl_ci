USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_address_AFTER_DELETE$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_address_AFTER_DELETE` 
AFTER DELETE ON `tb_address` 
FOR EACH ROW
begin

update tb_property_owner_master_list a
set a.address1 = null,
    a.subcommunity1 = null,
    a.community1 = null,
    a.city1 = null,
    a.country1 = null,
    a.tb_address_id1 = null
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_address_id1 = old.tb_address_id;


update tb_property_owner_master_list a
set a.address2 = null,
    a.subcommunity2 = null,
    a.community2 = null,
    a.city2 = null,
    a.country2 = null,
    a.tb_address_id2 = null
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_address_id2 = old.tb_address_id;

update tb_property_owner_master_list a
set a.address3 = null,
    a.subcommunity3 = null,
    a.community3 = null,
    a.city3 = null,
    a.country3 = null,
    a.tb_address_id3 = null
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_address_id3 = old.tb_address_id;

update tb_property_owner_master_list a
set a.address4 = null,
    a.subcommunity4 = null,
    a.community4 = null,
    a.city4 = null,
    a.country4 = null,
    a.tb_address_id4 = null
where a.tb_property_owner_id = old.tb_property_owner_id
and a.tb_address_id4 = old.tb_address_id;
end;
    $$
DELIMITER ;
