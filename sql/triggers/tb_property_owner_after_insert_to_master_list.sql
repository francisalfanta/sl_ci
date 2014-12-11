delimiter $$
CREATE DEFINER=`root`@`localhost` TRIGGER `softlinecsdb`.`tb_property_owner_AFTER_INSERT` 
AFTER INSERT ON `tb_property_owner` 
FOR EACH ROW
begin
insert into tb_property_owner_master_list(first_name, middle_name, last_name, status, tb_property_owner_id)
values(new.first_name, new.middle_name, new.last_name, new.status, new.tb_property_owner_id);
end
$$
DELIMITER ;