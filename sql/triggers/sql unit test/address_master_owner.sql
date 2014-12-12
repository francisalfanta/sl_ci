-- sql
SELECT 1,property_owner_master_list_id, first_name, 
address1, subcommunity1, community1, city1, 
country1,tb_address_id1
FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15

union
SELECT 2,property_owner_master_list_id, first_name, 
address2, subcommunity2, community2, city2, 
country2,tb_address_id2
FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15
union
SELECT 3,property_owner_master_list_id, first_name, 
address3, subcommunity3, community3, city3, 
country3,tb_address_id3
FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15
union
SELECT 4,property_owner_master_list_id, first_name, 
address4, subcommunity4, community4, city4, 
country4,tb_address_id4
FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15;

-- tb address
SELECT * FROM softlinecsdb.tb_address
where tb_property_owner_id = 15;

-- reset

update tb_property_owner_master_list
set address1 = null,
subcommunity1 = null,
community1 = null,
city1 = null,
country1 = null,
tb_address_id1 = 0
where property_owner_master_list_id = 15;


