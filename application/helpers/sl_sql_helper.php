<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
 
  function sl_sql() {
    $sql ="SELECT tb_nationality_id, propertyfinder_id, full_name, mobile_no, telephone_no, re_property, property_type, building_name,
                  address, addressLocality, addressRegion, addressCountry, property_owner_id, email, fax_no, status
            FROM
                ( SELECT owner_properties.*,
                          tb_nationality.id as tb_nationality_id,
                          tb_nationality.address_id,
                          tb_nationality.telephone_no,
                          tb_nationality.mobile_no,
                          tb_nationality.fax_no,
                          tb_nationality.email,
                          tb_nationality.property_owner_id
                  FROM (SELECT  owned_property.*, 
                                tb_propertyfinder.id as propertyfinder_id, 
                                tb_propertyfinder.city,
                                tb_propertyfinder.community,
                                tb_propertyfinder.re_property,
                                tb_propertyfinder.property_type,
                                tb_propertyfinder.building_name,
                                tb_propertyfinder.unit_number,
                                tb_propertyfinder.developer_name
                        FROM (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, a.status, b.tb_propertyfinder_id, b.tb_property_owner_id
                              FROM tb_property_owner a
                              LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
                              ON a.id = b.tb_property_owner_id

                              UNION

                              SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, a.status, b.tb_propertyfinder_id, b.tb_property_owner_id
                              FROM tb_property_owner a
                              RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
                              ON a.id = b.tb_property_owner_id) as owned_property
                        LEFT OUTER JOIN tb_propertyfinder
                        ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id

                        UNION

                        SELECT  owned_property.*,
                                tb_propertyfinder.id as propertyfinder_id, 
                                tb_propertyfinder.city,
                                tb_propertyfinder.community,
                                tb_propertyfinder.re_property,
                                tb_propertyfinder.property_type,
                                tb_propertyfinder.building_name,
                                tb_propertyfinder.unit_number,
                                tb_propertyfinder.developer_name
                        FROM (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, a.status, b.tb_propertyfinder_id, b.tb_property_owner_id
                              FROM tb_property_owner a
                              LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
                              ON a.id = b.tb_property_owner_id

                              UNION

                              SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, a.status, b.tb_propertyfinder_id, b.tb_property_owner_id
                              FROM tb_property_owner a
                              RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
                              ON a.id = b.tb_property_owner_id) as owned_property
                        RIGHT OUTER JOIN tb_propertyfinder
                        ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id) as owner_properties

                  LEFT OUTER JOIN tb_nationality ON owner_properties.tb_property_owner_id = tb_nationality.property_owner_id

                  UNION

                  SELECT  owner_properties.*,
                          tb_nationality.id as tb_nationality_id,
                          tb_nationality.address_id,
                          tb_nationality.telephone_no,
                          tb_nationality.mobile_no,
                          tb_nationality.fax_no,
                          tb_nationality.email,
                          tb_nationality.property_owner_id
                  FROM (SELECT  owned_property.*, 
                                tb_propertyfinder.id as propertyfinder_id, 
                                tb_propertyfinder.city,
                                tb_propertyfinder.community,
                                tb_propertyfinder.re_property,
                                tb_propertyfinder.property_type,
                                tb_propertyfinder.building_name,
                                tb_propertyfinder.unit_number,
                                tb_propertyfinder.developer_name
                        FROM (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, a.status, b.tb_propertyfinder_id, b.tb_property_owner_id
                              FROM tb_property_owner a
                              LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
                              ON a.id = b.tb_property_owner_id

                              UNION

                              SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, a.status, b.tb_propertyfinder_id, b.tb_property_owner_id
                              FROM tb_property_owner a
                              RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
                              ON a.id = b.tb_property_owner_id) as owned_property
                        LEFT OUTER JOIN tb_propertyfinder
                        ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id

                        UNION

                        SELECT  owned_property.*,
                                tb_propertyfinder.id as propertyfinder_id, 
                                tb_propertyfinder.city,
                                tb_propertyfinder.community,
                                tb_propertyfinder.re_property,
                                tb_propertyfinder.property_type,
                                tb_propertyfinder.building_name,
                                tb_propertyfinder.unit_number,
                                tb_propertyfinder.developer_name
                        FROM (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, a.status, b.tb_propertyfinder_id, b.tb_property_owner_id
                              FROM tb_property_owner a
                              LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
                              ON a.id = b.tb_property_owner_id

                              UNION

                              SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, a.status, b.tb_propertyfinder_id, b.tb_property_owner_id
                              FROM tb_property_owner a
                              RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
                              ON a.id = b.tb_property_owner_id) as owned_property
                        RIGHT OUTER JOIN tb_propertyfinder
                        ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id) as owner_properties

                  RIGHT OUTER JOIN tb_nationality ON owner_properties.tb_property_owner_id = tb_nationality.property_owner_id) as owner_prop_addr


            LEFT OUTER JOIN tb_address ON owner_prop_addr.address_id = tb_address.id

             -- ------------------
            UNION 

            SELECT tb_nationality_id, propertyfinder_id, full_name, mobile_no, telephone_no, re_property, property_type, building_name,
                   address, addressLocality, addressRegion, addressCountry, property_owner_id, email, fax_no, status           
            FROM
                  (SELECT owner_properties.*,
                          tb_nationality.id as tb_nationality_id,
                          tb_nationality.address_id,
                          tb_nationality.telephone_no,
                          tb_nationality.mobile_no,
                          tb_nationality.fax_no,
                          tb_nationality.email,
                          tb_nationality.property_owner_id
                  FROM (SELECT  owned_property.*, 
                                tb_propertyfinder.id as propertyfinder_id, 
                                tb_propertyfinder.city,
                                tb_propertyfinder.community,
                                tb_propertyfinder.re_property,
                                tb_propertyfinder.property_type,
                                tb_propertyfinder.building_name,
                                tb_propertyfinder.unit_number,
                                tb_propertyfinder.developer_name
                        FROM (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, a.status, b.tb_propertyfinder_id, b.tb_property_owner_id
                              FROM tb_property_owner a
                              LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
                              ON a.id = b.tb_property_owner_id

                              UNION

                              SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, a.status, b.tb_propertyfinder_id, b.tb_property_owner_id
                              FROM tb_property_owner a
                              RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
                              ON a.id = b.tb_property_owner_id) as owned_property
                        LEFT OUTER JOIN tb_propertyfinder
                        ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id

                        UNION

                        SELECT  owned_property.*,
                                tb_propertyfinder.id as propertyfinder_id, 
                                tb_propertyfinder.city,
                                tb_propertyfinder.community,
                                tb_propertyfinder.re_property,
                                tb_propertyfinder.property_type,
                                tb_propertyfinder.building_name,
                                tb_propertyfinder.unit_number,
                                tb_propertyfinder.developer_name
                        FROM (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, a.status, b.tb_propertyfinder_id, b.tb_property_owner_id
                              FROM tb_property_owner a
                              LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
                              ON a.id = b.tb_property_owner_id

                              UNION

                              SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, a.status, b.tb_propertyfinder_id, b.tb_property_owner_id
                              FROM tb_property_owner a
                              RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
                              ON a.id = b.tb_property_owner_id) as owned_property
                        RIGHT OUTER JOIN tb_propertyfinder
                        ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id) as owner_properties

                  LEFT OUTER JOIN tb_nationality ON owner_properties.tb_property_owner_id = tb_nationality.property_owner_id

                  UNION

                  SELECT owner_properties.*,
                          tb_nationality.id as tb_nationality_id,
                          tb_nationality.address_id,
                          tb_nationality.telephone_no,
                          tb_nationality.mobile_no,
                          tb_nationality.fax_no,
                          tb_nationality.email,
                          tb_nationality.property_owner_id
                  FROM (SELECT  owned_property.*, 
                                tb_propertyfinder.id as propertyfinder_id, 
                                tb_propertyfinder.city,
                                tb_propertyfinder.community,
                                tb_propertyfinder.re_property,
                                tb_propertyfinder.property_type,
                                tb_propertyfinder.building_name,
                                tb_propertyfinder.unit_number,
                                tb_propertyfinder.developer_name
                        FROM (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, a.status, b.tb_propertyfinder_id, b.tb_property_owner_id
                              FROM tb_property_owner a
                              LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
                              ON a.id = b.tb_property_owner_id

                              UNION

                              SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, a.status, b.tb_propertyfinder_id, b.tb_property_owner_id
                              FROM tb_property_owner a
                              RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
                              ON a.id = b.tb_property_owner_id) as owned_property
                        LEFT OUTER JOIN tb_propertyfinder
                        ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id
                        
                        UNION

                        SELECT  owned_property.*,
                                tb_propertyfinder.id as propertyfinder_id, 
                                tb_propertyfinder.city,
                                tb_propertyfinder.community,
                                tb_propertyfinder.re_property,
                                tb_propertyfinder.property_type,
                                tb_propertyfinder.building_name,
                                tb_propertyfinder.unit_number,
                                tb_propertyfinder.developer_name
                        FROM (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, a.status, b.tb_propertyfinder_id, b.tb_property_owner_id
                              FROM tb_property_owner a
                              LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
                              ON a.id = b.tb_property_owner_id

                              UNION

                              SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, a.status, b.tb_propertyfinder_id, b.tb_property_owner_id
                              FROM tb_property_owner a
                              RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
                              ON a.id = b.tb_property_owner_id) as owned_property
                        RIGHT OUTER JOIN tb_propertyfinder
                        ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id) as owner_properties

                  RIGHT OUTER JOIN tb_nationality ON owner_properties.tb_property_owner_id = tb_nationality.property_owner_id) as owner_prop_addr
            RIGHT OUTER JOIN tb_address ON owner_prop_addr.address_id = tb_address.id"; 
    return $sql; 
  }
// See more at: http://arjunphp.com/codeigniter-helper-quick-dynamic-dropdown-SELECT-box/#sthash.T92Ddzfi.dpuf
// http://arjunphp.com/codeigniter-helper-quick-dynamic-dropdown-SELECT-box/