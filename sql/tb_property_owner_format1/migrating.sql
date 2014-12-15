-- delete from tb_property_owner;

-- insert into tb_property_owner(first_name) 
-- select distinct first_name from tb_property_owner_format1;

-- inserting to tb_address tb
/*
insert into tb_address(addressStreet, addressCountry, tb_property_owner_id)
-- select a.address, a.country, a.tb_property_owner_id from (
SELECT distinct b.first_name, address,country, b.tb_property_owner_id 
FROM softlinecsdb.tb_property_owner_format1 a, tb_property_owner b
where a.first_name = b.first_name
) a;
*/

-- inserting to email tb
/*
insert into tb_email(email, tb_property_owner_id)
select a.email, a.tb_property_owner_id from (
SELECT distinct b.first_name, b.tb_property_owner_id, a.email
FROM softlinecsdb.tb_property_owner_format1 a, tb_property_owner b
where a.first_name = b.first_name
and length(a.email) > 0
) a;
*/

-- inserting to mobile_no tb
/*
insert into tb_mobile_no(mobile_no, tb_property_owner_id)
select cast(trim(replace(a.mobile,'-','')) as SIGNED INTEGER), a.tb_property_owner_id from (
SELECT distinct b.first_name, b.tb_property_owner_id, a.mobile
FROM softlinecsdb.tb_property_owner_format1 a, tb_property_owner b
where a.first_name = b.first_name
and length(a.mobile) > 0
) a;
*/

-- inserting to telephone_no tb
/*
insert into tb_telephone_no(telephone_no, tb_property_owner_id)
select cast(trim(replace(a.tel,'-','')) as SIGNED INTEGER), a.tb_property_owner_id from (
SELECT distinct b.first_name, b.tb_property_owner_id, a.tel
FROM softlinecsdb.tb_property_owner_format1 a, tb_property_owner b
where a.first_name = b.first_name
and length(a.tel) > 0
) a;
*/

-- inserting to nationality tb
/*
insert into tb_nationality(nationality, tb_property_owner_id)
select a.nationality, a.tb_property_owner_id from (
SELECT distinct b.first_name, b.tb_property_owner_id, a.nationality
FROM softlinecsdb.tb_property_owner_format1 a, tb_property_owner b
where a.first_name = b.first_name
and length(a.nationality) > 0
) a;
*/

-- inserting to propertyfinder tb
/*
insert into tb_propertyfinder(re_property, unit_number)
select distinct a.property, a.unit 
from tb_property_owner_format1 a;
*/
