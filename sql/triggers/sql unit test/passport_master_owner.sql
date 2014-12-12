-- sql
SELECT property_owner_master_list_id, first_name, 
passport_no1, passport_no2, passport_no3, passport_no4, 
tb_passport_id1,tb_passport_id2, tb_passport_id3, tb_passport_id4 
FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15;

SELECT * FROM softlinecsdb.tb_passport;
-- truncate table tb_passport;

-- reset
update tb_property_owner_master_list
set passport_no1 = null,
passport_no2 = null,
passport_no3 = null,
passport_no4 = null,
tb_passport_id1 = 0,
tb_passport_id2 = 0,
tb_passport_id3 = 0,
tb_passport_id4 = 0
where property_owner_master_list_id = 15;