USE `softlinecsdb`;

DELIMITER $$

DROP TRIGGER IF EXISTS softlinecsdb.tb_staff_menu_AFTER_INSERT$$
USE `softlinecsdb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `softlinecsdb`.`tb_staff_menu_AFTER_INSERT` 
AFTER INSERT ON `tb_staff_menu` 
FOR EACH ROW

BEGIN
DECLARE v_id int;

-- insert into unit_test values(new.menu, 'tb_staff_menu_after_insert');
-- insert into unit_test values(ifnull(new.parent,'null parent'), 'tb_staff_menu_after_insert');

if length(NEW.parent) = 0 THEN
    -- insert into unit_test values(ifnull(new.parent,'null parent'), 'inside new.parent is null');
	INSERT INTO tb_sections(section_name) values(upper(NEW.menu));
end if;

if length(NEW.parent) > 0 THEN
	SELECT id INTO v_id
	FROM tb_sections
	WHERE upper(section_name) like upper(NEW.parent);
    
    -- insert into unit_test values(ifnull(new.parent,'null parent'), 'inside new.parent is not null');
    INSERT INTO tb_dept_tasks(dept_id, table_name)
    values(v_id, NEW.menu);
end if;
END
    $$
DELIMITER ;
