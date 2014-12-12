-- sql
SELECT property_owner_master_list_id, first_name, 
nationality1, nationality2, nationality3, nationality4, tb_nationality_id1,
tb_nationality_id2, tb_nationality_id3, tb_nationality_id4 FROM softlinecsdb.tb_property_owner_master_list
where tb_property_owner_id = 15;

-- truncate tb_nationality;

-- reset
update tb_property_owner_master_list
set nationality1 = null,
nationality2 = null,
nationality3 = null,
nationality4 = null,
tb_nationality_id1 = 0,
tb_nationality_id2 = 0,
tb_nationality_id3 = 0,
tb_nationality_id4 = 0
where property_owner_master_list_id = 15;