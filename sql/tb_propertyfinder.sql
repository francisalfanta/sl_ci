create table `tb_properyfinder` (
    `id` bigint(20) not null auto_increment,
    `city` varchar(255) not null,
    `community` varchar(255) not null,
    `subcommunity`varchar(255) not null,
    `re_property` varchar(255),
    primary key (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;