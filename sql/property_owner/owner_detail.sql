select *
FROM
(select *
from (select owned_property.*, 
tb_propertyfinder.id as propertyfinder_id, 
tb_propertyfinder.city,
tb_propertyfinder.community,
tb_propertyfinder.re_property,
tb_propertyfinder.property_type,
tb_propertyfinder.building_name,
tb_propertyfinder.unit_number,
tb_propertyfinder.developer_name
from (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
FROM tb_property_owner a
LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
ON a.id = b.tb_property_owner_id

UNION

SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
FROM tb_property_owner a
RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
ON a.id = b.tb_property_owner_id) as owned_property
LEFT OUTER JOIN tb_propertyfinder
ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id

UNION

select owned_property.*,
tb_propertyfinder.id as propertyfinder_id, 
tb_propertyfinder.city,
tb_propertyfinder.community,
tb_propertyfinder.re_property,
tb_propertyfinder.property_type,
tb_propertyfinder.building_name,
tb_propertyfinder.unit_number,
tb_propertyfinder.developer_name
from (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
FROM tb_property_owner a
LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
ON a.id = b.tb_property_owner_id

UNION

SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
FROM tb_property_owner a
RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
ON a.id = b.tb_property_owner_id) as owned_property
RIGHT OUTER JOIN tb_propertyfinder
ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id) as owner_properties

LEFT OUTER JOIN tb_nationality ON owner_properties.tb_property_owner_id = tb_nationality.property_owner_id

UNION

select *
from (select owned_property.*, 
tb_propertyfinder.id as propertyfinder_id, 
tb_propertyfinder.city,
tb_propertyfinder.community,
tb_propertyfinder.re_property,
tb_propertyfinder.property_type,
tb_propertyfinder.building_name,
tb_propertyfinder.unit_number,
tb_propertyfinder.developer_name
from (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
FROM tb_property_owner a
LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
ON a.id = b.tb_property_owner_id

UNION

SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
FROM tb_property_owner a
RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
ON a.id = b.tb_property_owner_id) as owned_property
LEFT OUTER JOIN tb_propertyfinder
ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id

UNION

select owned_property.*,
tb_propertyfinder.id as propertyfinder_id, 
tb_propertyfinder.city,
tb_propertyfinder.community,
tb_propertyfinder.re_property,
tb_propertyfinder.property_type,
tb_propertyfinder.building_name,
tb_propertyfinder.unit_number,
tb_propertyfinder.developer_name
from (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
FROM tb_property_owner a
LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
ON a.id = b.tb_property_owner_id

UNION

SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
FROM tb_property_owner a
RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
ON a.id = b.tb_property_owner_id) as owned_property
RIGHT OUTER JOIN tb_propertyfinder
ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id) as owner_properties

RIGHT OUTER JOIN tb_nationality ON owner_properties.tb_property_owner_id = tb_nationality.property_owner_id) as owner_prop_addr


LEFT OUTER JOIN tb_address ON owner_prop_addr.tb_address_id = tb_address.id

 -- ------------------
UNION 

select *
FROM
(select *
from (select owned_property.*, 
tb_propertyfinder.id as propertyfinder_id, 
tb_propertyfinder.city,
tb_propertyfinder.community,
tb_propertyfinder.re_property,
tb_propertyfinder.property_type,
tb_propertyfinder.building_name,
tb_propertyfinder.unit_number,
tb_propertyfinder.developer_name
from (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
FROM tb_property_owner a
LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
ON a.id = b.tb_property_owner_id

UNION

SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
FROM tb_property_owner a
RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
ON a.id = b.tb_property_owner_id) as owned_property
LEFT OUTER JOIN tb_propertyfinder
ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id

UNION

select owned_property.*,
tb_propertyfinder.id as propertyfinder_id, 
tb_propertyfinder.city,
tb_propertyfinder.community,
tb_propertyfinder.re_property,
tb_propertyfinder.property_type,
tb_propertyfinder.building_name,
tb_propertyfinder.unit_number,
tb_propertyfinder.developer_name
from (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
FROM tb_property_owner a
LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
ON a.id = b.tb_property_owner_id

UNION

SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
FROM tb_property_owner a
RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
ON a.id = b.tb_property_owner_id) as owned_property
RIGHT OUTER JOIN tb_propertyfinder
ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id) as owner_properties

LEFT OUTER JOIN tb_nationality ON owner_properties.tb_property_owner_id = tb_nationality.property_owner_id

UNION

select *
from (select owned_property.*, 
tb_propertyfinder.id as propertyfinder_id, 
tb_propertyfinder.city,
tb_propertyfinder.community,
tb_propertyfinder.re_property,
tb_propertyfinder.property_type,
tb_propertyfinder.building_name,
tb_propertyfinder.unit_number,
tb_propertyfinder.developer_name
from (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
FROM tb_property_owner a
LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
ON a.id = b.tb_property_owner_id

UNION

SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
FROM tb_property_owner a
RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
ON a.id = b.tb_property_owner_id) as owned_property
LEFT OUTER JOIN tb_propertyfinder
ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id

UNION

select owned_property.*,
tb_propertyfinder.id as propertyfinder_id, 
tb_propertyfinder.city,
tb_propertyfinder.community,
tb_propertyfinder.re_property,
tb_propertyfinder.property_type,
tb_propertyfinder.building_name,
tb_propertyfinder.unit_number,
tb_propertyfinder.developer_name
from (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
FROM tb_property_owner a
LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
ON a.id = b.tb_property_owner_id

UNION

SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
FROM tb_property_owner a
RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
ON a.id = b.tb_property_owner_id) as owned_property
RIGHT OUTER JOIN tb_propertyfinder
ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id) as owner_properties

RIGHT OUTER JOIN tb_nationality ON owner_properties.tb_property_owner_id = tb_nationality.property_owner_id) as owner_prop_addr


RIGHT OUTER JOIN tb_address ON owner_prop_addr.tb_address_id = tb_address.id;

