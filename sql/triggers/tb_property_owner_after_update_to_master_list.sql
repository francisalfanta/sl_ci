delimiter $$
CREATE DEFINER=`root`@`localhost` TRIGGER `softlinecsdb`.`tb_property_owner_AFTER_UPDATE` 
AFTER UPDATE ON `tb_property_owner` 
FOR EACH ROW
begin
update tb_property_owner_master_list
set first_name = new.first_name,
	middle_name = new.middle_name,
    last_name = new.last_name,
    status = new.status
where tb_property_owner_id = new.tb_property_owner_id;

end
$$
DELIMITER ;