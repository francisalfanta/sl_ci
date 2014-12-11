USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_staff_menu_AFTER_UPDATE$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_staff_menu_AFTER_UPDATE` 
AFTER UPDATE ON `tb_staff_menu` 
FOR EACH ROW

BEGIN
DECLARE v_id int;

 -- insert into unit_test values(new.menu, 'new menu: tb_staff_menu_before_update');
 -- insert into unit_test values(old.menu, 'old menu: tb_staff_menu_before_update');
 -- insert into unit_test values(ifnull(new.parent,'null parent'), 'new parent: tb_staff_menu_before_update');
 -- insert into unit_test values(ifnull(old.parent,'null parent'), 'old parent: tb_staff_menu_before_update');

if (length(NEW.parent) = 0 AND NEW.menu != OLD.menu) THEN 
    -- insert into unit_test values(ifnull(new.parent,'null parent'), 'inside new.parent is null for update');	
    UPDATE tb_sections
    SET section_name = upper(NEW.menu)
    WHERE upper(section_name) = upper(OLD.menu);
end if;

if (length(NEW.parent) > 0 AND NEW.menu != OLD.menu) THEN
    -- insert into unit_test values(ifnull(new.parent,'null parent'), 'inside new.parent is not null for update');    
	UPDATE tb_dept_tasks
    SET table_name = `softlinecsdb`.`cap_first`(NEW.menu)
    WHERE upper(table_name) = upper(OLD.menu);
end if;
END
    $$
DELIMITER ;
