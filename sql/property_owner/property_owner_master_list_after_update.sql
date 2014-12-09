CREATE DEFINER=`root`@`localhost` TRIGGER `softlinecsdb`.`tb_property_owner_master_list_AFTER_UPDATE` 
AFTER UPDATE ON `tb_property_owner_master_list` 
FOR EACH ROW
begin
declare v_count int;
declare v_check int;

-- check if address exist
	select count(tb_address_id) into v_count from tb_address
	where trim(upper(address)) like trim(upper(old.residency_address1))
	and  trim(upper(addressLocality)) like trim(upper(old.residency_city1))
	and trim(upper(addressCountry)) like trim(upper(old.residency_country1));

-- if old address and new address changes
SELECT STRCMP(old.residency_country1, new.residency_country1) into v_check;
insert into unit_test values(concat('v_count: ', v_count));

if old.residency_country1 <=> new.residency_country1 and v_count > 1 then
	update tb_address
    set addressCountry = new.residency_country1
    where trim(upper(address)) like trim(upper(old.residency_address1))
	and  trim(upper(addressLocality)) like trim(upper(old.residency_city1))
	and trim(upper(addressCountry)) like trim(upper(old.residency_country1));
end if;

if old.residency_city1 <=> new.residency_city1 and v_count > 1 then
	update tb_address
    set addressLocality = new.residency_city1
    where trim(upper(address)) like trim(upper(old.residency_address1))
	and  trim(upper(addressLocality)) like trim(upper(old.residency_city1))
	and trim(upper(addressCountry)) like trim(upper(old.residency_country1));
end if;

-- if old.residency_address1 <=> new.residency_address1 then
insert into unit_test values(concat('v_check: ', v_check));

if v_check != 0 then
	insert into unit_test values('inside !=');
	update tb_address
    set address = new.residency_address1
    where trim(upper(address)) like trim(upper(old.residency_address1))
	and  trim(upper(addressLocality)) like trim(upper(old.residency_city1))
	and trim(upper(addressCountry)) like trim(upper(old.residency_country1));
end if;
end