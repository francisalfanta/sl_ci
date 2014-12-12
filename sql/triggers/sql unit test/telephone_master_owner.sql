-- master query

SELECT 1,property_owner_master_list_id, first_name, 
telephone_no1,tb_telephone_no_id1
FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15

union
SELECT 2,property_owner_master_list_id, first_name, 
telephone_no2,tb_telephone_no_id2
FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15
union
SELECT 3,property_owner_master_list_id, first_name, 
telephone_no3,tb_telephone_no_id3
FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15
union
SELECT 4,property_owner_master_list_id, first_name, 
telephone_no4,tb_telephone_no_id4
FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15;

-- telephone query
SELECT * FROM softlinecsdb.tb_telephone_no
where tb_property_owner_id = 15;

-- reset
--  truncate table tb_telephone_no;
update tb_property_owner_master_list
set telephone_no1 = null,
tb_telephone_no_id1 = 0
where property_owner_master_list_id = 15;