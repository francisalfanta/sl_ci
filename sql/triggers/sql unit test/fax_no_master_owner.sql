-- master query

SELECT 1,property_owner_master_list_id, first_name, 
fax_no1,tb_fax_no_id1
FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15

union
SELECT 2,property_owner_master_list_id, first_name, 
fax_no2,tb_fax_no_id2
FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15
union
SELECT 3,property_owner_master_list_id, first_name, 
fax_no3,tb_fax_no_id3
FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15
union
SELECT 4,property_owner_master_list_id, first_name, 
fax_no4,tb_fax_no_id4
FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15;

-- fax no query
SELECT * FROM softlinecsdb.tb_fax_no
where tb_property_owner_id = 15;

-- reset
-- truncate table tb_fax_no;

update tb_property_owner_master_list
set fax_no1 = null,
tb_fax_no_id1 = 0
where property_owner_master_list_id = 15;

update tb_property_owner_master_list
set fax_no2 = null,
tb_fax_no_id2 = 0
where property_owner_master_list_id = 15;