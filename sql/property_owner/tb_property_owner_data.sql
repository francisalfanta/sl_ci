insert into tb_property_owner values (1, 'Francis', 'Montlana', 'Anta', 'Nemale', str_to_date('1979-10-04', '%Y-%m-%d'),null,'Single');
insert into tb_property_owner values (2, 'Steves', 'Montallana', 'Alfanta', 'Female', str_to_date('1980-10-04', '%Y-%m-%d'),null,'Married');

insert into tb_nationality values( 1, '097-123-4523', '055-735-1823', 'fx055-735-1823', 'fran@gmail.com', 1);
insert into tb_nationality values( 2, '0xx-123-4523', '0yy-735-1823', 'yy055-735-1823', 'xsdn@gmail.com', 1);

insert into tb_address values(1,'137 T. Perez St., Market Site', '4501', '11334', 'Bicol Region', 'Albay', 'Phili');
insert into tb_address values(2,'T. Perez St., Market Site', '45201', '1x1334', 'Bxicol Region', 'xAlbay', 'xPhili');


insert into tb_residential_types(id, type_name) 
values(1, 'Apartment'),(2,'Villa'),(3,'Townhouse'),
(4, 'Penhouse'),(5,'Compound'),(6,'Duplex'),(7,'Full floor'),
(8, 'Half floor'),(9, 'Whole Building'),(10, 'Land'),(11, 'Bulk Sale Units'),
(12, 'Bungalow'), (13, 'Hotel/Hotel Apartment');

insert into tb_commercial_types(id, type_name) 
values(1, 'Office Space'),(2,'Retail'),(3,'Warehouse'),
(4, 'Shop'),(5,'Villa'),(6,'Show Room'),(7,'Plot'),
(8, 'Full floor'),(9, 'Whole Building'),(10, 'Bulk Rent Units'),(11, 'Factory'),
(12, 'Labor Camp'), (13, 'Staff Accomodation');