-- master query
SELECT 1,property_owner_master_list_id, first_name, 
mobile_no1,tb_mobile_id1
FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15

union
SELECT 2,property_owner_master_list_id, first_name, 
mobile_no2,tb_mobile_id2
FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15
union
SELECT 3,property_owner_master_list_id, first_name, 
mobile_no3,tb_mobile_id3
FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15
union
SELECT 4,property_owner_master_list_id, first_name, 
mobile_no4,tb_mobile_id4
FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15;

-- mobile query
SELECT * FROM softlinecsdb.tb_mobile_no
where tb_property_owner_id = 15;

-- reset
-- truncate table tb_mobile_no;

update tb_property_owner_master_list
set mobile_no1 = null,
tb_mobile_id1 = 0
where property_owner_master_list_id = 15;

update tb_property_owner_master_list
set mobile_no2 = null,
tb_mobile_id2 = 0
where property_owner_master_list_id = 15;



