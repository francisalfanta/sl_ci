delimiter $$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_address_AFTER_INSERT` 
AFTER INSERT ON `tb_address` 
FOR EACH ROW
begin
declare v_addr1_check int;
declare v_addr2_check int;
declare v_addr3_check int;
declare v_addr4_check int;

select length(country1), length(country2), length(country3), length(country4)
 into v_addr1_check, v_addr2_check, v_addr3_check, v_addr4_check
from tb_property_owner_master_list
where tb_property_owner_id = new.tb_property_owner_id;

if (v_addr1_check=0) then
update tb_property_owner_master_list
set address1 = new.addressStreet, 
    subcommunity1 = new.addressSubcommunity, 
    community1 = new.addressCommunity, 
    city1 = new.addressCity, 
    country1 = new.addressCountry,
    tb_address_id1 = new.tb_address_id
where tb_property_owner_id = new.tb_property_owner_id;

elseif (v_addr2_check=0) then
update tb_property_owner_master_list
set address2 = new.addressStreet, 
    subcommunity2 = new.addressSubcommunity, 
    community2 = new.addressCommunity, 
    city2 = new.addressCity, 
    country2 = new.addressCountry,
    tb_address_id2 = new.tb_address_id
where tb_property_owner_id = new.tb_property_owner_id;

elseif (v_addr3_check=0) then
update tb_property_owner_master_list
set address3 = new.addressStreet, 
    subcommunity3 = new.addressSubcommunity, 
    community3 = new.addressCommunity, 
    city3 = new.addressCity, 
    country3 = new.addressCountry,
    tb_address_id3 = new.tb_address_id
where tb_property_owner_id = new.tb_property_owner_id;

elseif (v_addr4_check=0) then
update tb_property_owner_master_list
set address4 = new.addressStreet, 
    subcommunity4 = new.addressSubcommunity, 
    community4 = new.addressCommunity, 
    city4 = new.addressCity, 
    country4 = new.addressCountry,
    tb_address_id4 = new.tb_address_id
where tb_property_owner_id = new.tb_property_owner_id;
end if;
end
$$
DELIMITER ;
    