CREATE DEFINER=`root`@`localhost` TRIGGER `softlinecsdb`.`property_owner_master_list_AFTER_INSERT` 
AFTER INSERT ON `tb_property_owner_master_list` FOR EACH ROW
begin
declare v_id int;
-- check if residency address1 contain value
    if length(new.residency_address1) > 0 then
-- check if address exist
		select count(tb_address_id) into v_id from tb_address
		where trim(upper(address)) like trim(upper(new.residency_address1))
		and  trim(upper(addressLocality)) like trim(upper(new.residency_city1))
		and trim(upper(addressCountry)) like trim(upper(new.residency_country1));

		if v_id = 0 then   
			insert into tb_address (address, addressLocality, addressCountry)
			values (new.residency_address1, new.residency_city1, new.residency_country1);	
		end if;
	end if;
    
-- check if residency address2 contain value
    if length(new.residency_address2) > 0 then
-- check if address exist
		select count(tb_address_id) into v_id from tb_address
		where trim(upper(address)) like trim(upper(new.residency_address2))
		and  trim(upper(addressLocality)) like trim(upper(new.residency_city2))
		and trim(upper(addressCountry)) like trim(upper(new.residency_country2));

		if v_id = 0 then   
			insert into tb_address (address, addressLocality, addressCountry)
			values (new.residency_address2, new.residency_city2, new.residency_country2);	
		end if;
	end if;

-- check if residency address3 contain value
    if length(new.residency_address3) > 0 then
-- check if address exist
		select count(tb_address_id) into v_id from tb_address
		where trim(upper(address)) like trim(upper(new.residency_address3))
		and  trim(upper(addressLocality)) like trim(upper(new.residency_city3))
		and trim(upper(addressCountry)) like trim(upper(new.residency_country3));

		if v_id = 0 then   
			insert into tb_address (address, addressLocality, addressCountry)
			values (new.residency_address3, new.residency_city3, new.residency_country3);	
		end if;
	end if;

-- check if residency address4 contain value
    if length(new.residency_address4) > 0 then
-- check if address exist
		select count(tb_address_id) into v_id from tb_address
		where trim(upper(address)) like trim(upper(new.residency_address4))
		and  trim(upper(addressLocality)) like trim(upper(new.residency_city4))
		and trim(upper(addressCountry)) like trim(upper(new.residency_country4));

		if v_id = 0 then   
			insert into tb_address (address, addressLocality, addressCountry)
			values (new.residency_address4, new.residency_city4, new.residency_country4);	
		end if;
	end if;

end