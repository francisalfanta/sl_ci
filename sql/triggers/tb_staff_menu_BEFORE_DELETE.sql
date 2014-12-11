USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_staff_menu_BEFORE_DELETE$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_staff_menu_BEFORE_DELETE` 
BEFORE DELETE ON `tb_staff_menu` 
FOR EACH ROW

BEGIN
DECLARE v_id int;

-- insert into unit_test values(old.menu, 'tb_staff_menu_before_delete');
-- insert into unit_test values(ifnull(old.parent,'null parent'), 'tb_staff_menu_before_delete');

if length(OLD.parent) = 0 THEN
    -- insert into unit_test values(ifnull(old.parent,'null parent'), 'deleting in table section');
	DELETE FROM tb_sections
	WHERE upper(section_name) like upper(OLD.menu);
end if;

if length(OLD.parent) > 0 THEN
	-- insert into unit_test values(ifnull(old.parent,'null parent'), 'deleting in table dept_task');
	DELETE FROM tb_dept_tasks
	WHERE upper(table_name) like upper(OLD.menu);
end if;
  
END
    $$
DELIMITER ;
