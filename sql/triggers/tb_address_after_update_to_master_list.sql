delimiter $$
CREATE DEFINER=`root`@`localhost` TRIGGER `softlinecsdb`.`tb_address_AFTER_UPDATE` 
AFTER UPDATE ON `tb_address`
FOR EACH ROW

begin

update tb_property_owner_master_list
set address1 = new.addressStreet, 
    subcommunity1 = new.addressSubcommunity, 
    community1 = new.addressCommunity, 
    city1 = new.addressCity, 
    country1 = new.addressCountry
where tb_property_owner_id = new.tb_property_owner_id
and tb_address_id1 = new.tb_address_id;

update tb_property_owner_master_list
set address2 = new.addressStreet, 
    subcommunity2 = new.addressSubcommunity, 
    community2 = new.addressCommunity, 
    city2 = new.addressCity, 
    country2 = new.addressCountry
where tb_property_owner_id = new.tb_property_owner_id
and tb_address_id2 = new.tb_address_id;

update tb_property_owner_master_list
set address3 = new.addressStreet, 
    subcommunity3 = new.addressSubcommunity, 
    community3 = new.addressCommunity, 
    city3 = new.addressCity, 
    country3 = new.addressCountry
where tb_property_owner_id = new.tb_property_owner_id
and tb_address_id3 = new.tb_address_id;

update tb_property_owner_master_list
set address4 = new.addressStreet, 
    subcommunity4 = new.addressSubcommunity, 
    community4 = new.addressCommunity, 
    city4 = new.addressCity, 
    country4 = new.addressCountry
where tb_property_owner_id = new.tb_property_owner_id
and tb_address_id4 = new.tb_address_id;

end
$$
delimiter;