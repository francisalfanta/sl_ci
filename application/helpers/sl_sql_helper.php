<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
  /* Depreciated 12/07/2014 due to table relationship changes
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
  */
  function sl_sql_left_join(){
    $sql = "SELECT  owner_property.*,
                    concat(concat(owner_property.first_name,' '),owner_property.last_name) as full_name,
                    n.tb_nationality_id,
                    n.address_id,
                    n.telephone_no,
                    n.mobile_no,
                    n.fax_no,
                    n.email,
                    n.nationality,
                    addr.*
            FROM (
                    SELECT a.*,
                          c.*
                    FROM tb_property_owner a
                    LEFT JOIN tb_property_owner_has_tb_propertyfinder m2m
                    on a.tb_property_owner_id = m2m.tb_property_owner_id
                    join tb_propertyfinder c
                    on m2m.tb_propertyfinder_id = c.tb_propertyfinder_id) owner_property
            LEFT JOIN tb_nationality n
            on owner_property.tb_property_owner_id = n.property_owner_id
            LEFT JOIN tb_address addr
            on addr.tb_address_id = n.address_id";
    return $sql;
  }

  function sl_sql_left_join_where_id(){
    $sql = "SELECT  owner_property.*,
                    concat(concat(owner_property.first_name,' '),owner_property.last_name) as full_name,
                    n.tb_nationality_id,
                    n.address_id,
                    n.telephone_no,
                    n.mobile_no,
                    n.fax_no,
                    n.email,
                    n.nationality,
                    addr.*
            FROM (
                    SELECT a.*,
                          c.*
                    FROM tb_property_owner a
                    LEFT JOIN tb_property_owner_has_tb_propertyfinder m2m
                    on a.tb_property_owner_id = m2m.tb_property_owner_id
                    join tb_propertyfinder c
                    on m2m.tb_propertyfinder_id = c.tb_propertyfinder_id) owner_property
            LEFT JOIN tb_nationality n
            on owner_property.tb_property_owner_id = n.property_owner_id
            LEFT JOIN tb_address addr
            on addr.tb_address_id = n.address_id
            where owner_property.tb_property_owner_id = ?";
    return $sql;
  }

  function sl_sql_left_join_like(){
    $sql = "SELECT  owner_property.*,
                    concat(concat(owner_property.first_name,' '),owner_property.last_name) as full_name,
                    n.tb_nationality_id,
                    n.address_id,
                    n.telephone_no,
                    n.mobile_no,
                    n.fax_no,
                    n.email,
                    n.nationality,
                    addr.*
            FROM (
                    SELECT a.*,
                          c.*
                    FROM tb_property_owner a
                    LEFT JOIN tb_property_owner_has_tb_propertyfinder m2m
                    on a.tb_property_owner_id = m2m.tb_property_owner_id
                    join tb_propertyfinder c
                    on m2m.tb_propertyfinder_id = c.tb_propertyfinder_id) owner_property
            LEFT JOIN tb_nationality n
            on owner_property.tb_property_owner_id = n.property_owner_id
            LEFT JOIN tb_address addr
            on addr.tb_address_id = n.address_id
            where trim(upper(owner_property.first_name)) like trim(upper(ifnull(?, owner_property.first_name)))
            and trim(upper(owner_property.middle_name)) like trim(upper(ifnull(?, owner_property.middle_name)))";
    return $sql;
  }
// See more at: http://arjunphp.com/codeigniter-helper-quick-dynamic-dropdown-SELECT-box/#sthash.T92Ddzfi.dpuf
// http://arjunphp.com/codeigniter-helper-quick-dynamic-dropdown-SELECT-box/