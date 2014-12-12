-- master query

SELECT 1,property_owner_master_list_id, first_name, 
email1,tb_email_id1
FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15

union
SELECT 2,property_owner_master_list_id, first_name, 
email2,tb_email_id2
FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15
union
SELECT 3,property_owner_master_list_id, first_name, 
email3,tb_email_id3
FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15
union
SELECT 4,property_owner_master_list_id, first_name, 
email4,tb_email_id4
FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15;

-- email query
SELECT * FROM softlinecsdb.tb_email
where tb_property_owner_id = 15;

-- reset
-- truncate table tb_email;

update tb_property_owner_master_list
set email1 = null,
tb_email_id1 = 0
where property_owner_master_list_id = 15;

update tb_property_owner_master_list
set email2 = null,a
tb_email_id2 = 0
where property_owner_master_list_id = 15;
