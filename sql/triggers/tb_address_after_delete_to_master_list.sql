USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_address_AFTER_DELETE$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_address_AFTER_DELETE` 
AFTER DELETE ON `tb_address` 
FOR EACH ROW
begin

update tb_property_owner_master_list
set address1 = null,
    subcommunity1 = null,
    community1 = null,
    city1 = null,
    country1 = null,
    tb_address_id1 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_address_id1 = old.tb_address_id;


update tb_property_owner_master_list
set address2 = null,
    subcommunity2 = null,
    community2 = null,
    city2 = null,
    country2 = null,
    tb_address_id2 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_address_id2 = old.tb_address_id;

update tb_property_owner_master_list
set address3 = null,
    subcommunity3 = null,
    community3 = null,
    city3 = null,
    country3 = null,
    tb_address_id3 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_address_id3 = old.tb_address_id;

update tb_property_owner_master_list
set address4 = null,
    subcommunity4 = null,
    community4 = null,
    city4 = null,
    country4 = null,
    tb_address_id4 = null
where tb_property_owner_id = old.tb_property_owner_id
and tb_address_id4 = old.tb_address_id;
end;
    $$
DELIMITER ;
