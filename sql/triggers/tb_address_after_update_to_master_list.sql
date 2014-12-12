delimiter $$
CREATE DEFINER=`root`@`localhost` TRIGGER `softlinecsdb`.`tb_address_AFTER_UPDATE` 
AFTER UPDATE ON `tb_address`
FOR EACH ROW

begin

update tb_property_owner_master_list a
set a.address1 = new.addressStreet, 
    a.subcommunity1 = new.addressSubcommunity, 
    a.community1 = new.addressCommunity, 
    a.city1 = new.addressCity, 
    a.country1 = new.addressCountry
where a.tb_property_owner_id = new.tb_property_owner_id
and a.tb_address_id1 = new.tb_address_id;

update tb_property_owner_master_list a
set a.address2 = new.addressStreet, 
    a.subcommunity2 = new.addressSubcommunity, 
    a.community2 = new.addressCommunity, 
    a.city2 = new.addressCity, 
    a.country2 = new.addressCountry
where a.tb_property_owner_id = new.tb_property_owner_id
and a.tb_address_id2 = new.tb_address_id;

update tb_property_owner_master_list a
set a.address3 = new.addressStreet, 
    a.subcommunity3 = new.addressSubcommunity, 
    a.community3 = new.addressCommunity, 
    a.city3 = new.addressCity, 
    a.country3 = new.addressCountry
where a.tb_property_owner_id = new.tb_property_owner_id
and a.tb_address_id3 = new.tb_address_id;

update tb_property_owner_master_list a
set a.address4 = new.addressStreet, 
    a.subcommunity4 = new.addressSubcommunity, 
    a.community4 = new.addressCommunity, 
    a.city4 = new.addressCity, 
    a.country4 = new.addressCountry
where a.tb_property_owner_id = new.tb_property_owner_id
and a.tb_address_id4 = new.tb_address_id;

end
$$
delimiter ;