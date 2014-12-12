delimiter $$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_address_AFTER_INSERT` 
AFTER INSERT ON `tb_address` 
FOR EACH ROW
begin
declare v_addr1_check int;
declare v_addr2_check int;
declare v_addr3_check int;
declare v_addr4_check int;

select tb_address_id1, tb_address_id2, tb_address_id3, tb_address_id4
 into v_addr1_check, v_addr2_check, v_addr3_check, v_addr4_check
from tb_property_owner_master_list
where tb_property_owner_id = new.tb_property_owner_id;

if (v_addr1_check=0) then
update tb_property_owner_master_list a
set a.address1 = new.addressStreet, 
    a.subcommunity1 = new.addressSubcommunity, 
    a.community1 = new.addressCommunity, 
    a.city1 = new.addressCity, 
    a.country1 = new.addressCountry,
    a.tb_address_id1 = new.tb_address_id
where a.tb_property_owner_id = new.tb_property_owner_id;

elseif (v_addr2_check=0) then
update tb_property_owner_master_list a
set a.address2 = new.addressStreet, 
    a.subcommunity2 = new.addressSubcommunity, 
    a.community2 = new.addressCommunity, 
    a.city2 = new.addressCity, 
    a.country2 = new.addressCountry,
    a.tb_address_id2 = new.tb_address_id
where a.tb_property_owner_id = new.tb_property_owner_id;

elseif (v_addr3_check=0) then
update tb_property_owner_master_list a
set a.address3 = new.addressStreet, 
    a.subcommunity3 = new.addressSubcommunity, 
    a.community3 = new.addressCommunity, 
    a.city3 = new.addressCity, 
    a.country3 = new.addressCountry,
    a.tb_address_id3 = new.tb_address_id
where a.tb_property_owner_id = new.tb_property_owner_id;

elseif (v_addr4_check=0) then
update tb_property_owner_master_list a
set a.address4 = new.addressStreet, 
    a.subcommunity4 = new.addressSubcommunity, 
    a.community4 = new.addressCommunity, 
    a.city4 = new.addressCity, 
    a.country4 = new.addressCountry,
    a.tb_address_id4 = new.tb_address_id
where a.tb_property_owner_id = new.tb_property_owner_id;
end if;
end
$$
DELIMITER ;
    