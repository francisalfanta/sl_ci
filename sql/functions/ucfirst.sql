DELIMITER $$
USE `softlinecsdb`$$

CREATE FUNCTION ucfirst(x varchar(255)) returns varchar(255)
return concat( upper(substring(x,1,1)),lower(substring(x,2)) );

$$

DELIMITER ;

