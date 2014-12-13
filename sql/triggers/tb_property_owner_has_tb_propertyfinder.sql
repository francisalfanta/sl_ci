USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_property_owner_has_tb_propertyfinder_AFTER_INSERT$$
USE `softlinecsdb`$$
CREATE DEFINER=`root`@`localhost` TRIGGER `softlinecsdb`.`tb_property_owner_has_tb_propertyfinder_AFTER_INSERT` 
AFTER INSERT ON `tb_property_owner_has_tb_propertyfinder` 
FOR EACH ROW
begin

declare v_no int(20);
select count(a.tb_propertyfinder_id) 
 into v_no
from tb_property_owner_has_tb_propertyfinder a
where a.tb_property_owner_id = new.tb_property_owner_id;

insert into unit_test(info) values (concat('v_no: ', v_no));

update tb_property_owner_master_list a
set   a.no_property_owned = v_no
where a.tb_property_owner_id = new.tb_property_owner_id;

end$$
DELIMITER ;
