
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softlinecsdb`.`tb_nationality` (
  `tb_nationality_id` INT NOT NULL AUTO_INCREMENT,
  `nationality` VARCHAR(100) NULL,
  `tb_property_owner_id` BIGINT(20) NOT NULL,
  PRIMARY KEY (`tb_nationality_id`),
  INDEX `fk_tb_nationality_tb_property_owner1_idx` (`tb_property_owner_id` ASC),
  CONSTRAINT `fk_tb_nationality_tb_property_owner1`
    FOREIGN KEY (`tb_property_owner_id`)
    REFERENCES `softlinecsdb`.`tb_property_owner` (`tb_property_owner_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


--
-- Constraints for table `tb_nationality`
--
ALTER TABLE `tb_nationality`
  ADD CONSTRAINT `national_prop_owner_fk` FOREIGN KEY (`tb_property_owner_id`) REFERENCES `tb_property_owner` (`tb_property_owner_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
insert into tb_country values('1', 'Afghanistan', 'Afghan');
insert into tb_country values('2', 'Albania', 'Albanian');
insert into tb_country values('3', 'Algeria', 'Algerian');
insert into tb_country values('4', 'Andorra', 'Andorran');
insert into tb_country values('5', 'Angola', 'Angolan');
insert into tb_country values('6', 'Argentina', 'Argentinian');
insert into tb_country values('7', 'Armenia', 'Armenian');
insert into tb_country values('8', 'Australia', 'Australian');
insert into tb_country values('9', 'Austria', 'Austrian');
insert into tb_country values('10', 'Azerbaijan', 'Azerbaijani');
insert into tb_country values('11', 'Bahamas', 'Bahamian');
insert into tb_country values('12', 'Bahrain', 'Bahraini');
insert into tb_country values('13', 'Bangladesh', 'Bangladeshi');
insert into tb_country values('14', 'Barbados', 'Barbadian');
insert into tb_country values('15', 'Belarus', 'Belarusian or Belarusan');
insert into tb_country values('16', 'Belgium', 'Belgian');
insert into tb_country values('17', 'Belize', 'Belizean');
insert into tb_country values('18', 'Benin', 'Beninese');
insert into tb_country values('19', 'Bhutan', 'Bhutanese');
insert into tb_country values('20', 'Bolivia', 'Bolivian');
insert into tb_country values('21', 'Bosnia-Herzegovina', 'Bosnian');
insert into tb_country values('22', 'Botswana', 'Botswanan');
insert into tb_country values('23', 'Brazil', 'Brazilian');
insert into tb_country values('24', 'Britain', 'British');
insert into tb_country values('25', 'Brunei', 'Bruneian');
insert into tb_country values('26', 'Bulgaria', 'Bulgarian');
insert into tb_country values('27', 'Burkina', 'Burkinese');
insert into tb_country values('28', 'Burma (official nameMyanmar);', 'Burmese');
insert into tb_country values('29', 'Burundi', 'Burundian');
insert into tb_country values('30', 'Cambodia', 'Cambodian');
insert into tb_country values('31', 'Cameroon', 'Cameroonian');
insert into tb_country values('32', 'Canada', 'Canadian');
insert into tb_country values('33', 'Cape Verde Islands', 'Cape Verdean');
insert into tb_country values('34', 'Chad', 'Chadian');
insert into tb_country values('35', 'Chile', 'Chilean');
insert into tb_country values('36', 'China', 'Chinese');
insert into tb_country values('37', 'Colombia', 'Colombian');
insert into tb_country values('38', 'Congo', 'Congolese');
insert into tb_country values('39', 'Costa Rica', 'Costa Rican');
insert into tb_country values('40', 'Croatia', 'Croat or Croatian');
insert into tb_country values('41', 'Cuba', 'Cuban');
insert into tb_country values('42', 'Cyprus', 'Cypriot');
insert into tb_country values('43', 'Czech Republic', 'Czech');
insert into tb_country values('44', 'Denmark', 'Danish');
insert into tb_country values('45', 'Djibouti', 'Djiboutian');
insert into tb_country values('46', 'Dominica', 'Dominican');
insert into tb_country values('47', 'Dominican Republic', 'Dominican');
insert into tb_country values('48', 'Ecuador', 'Ecuadorean');
insert into tb_country values('49', 'Egypt', 'Egyptian');
insert into tb_country values('50', 'El Salvador', 'Salvadorean');
insert into tb_country values('51', 'England', 'English');
insert into tb_country values('52', 'Eritrea', 'Eritrean');
insert into tb_country values('53', 'Estonia', 'Estonian');
insert into tb_country values('54', 'Ethiopia', 'Ethiopian');
insert into tb_country values('55', 'Fiji', 'Fijian');
insert into tb_country values('56', 'Finland', 'Finnish');
insert into tb_country values('57', 'France', 'French');
insert into tb_country values('58', 'Gabon', 'Gabonese');
insert into tb_country values('59', 'Gambia', 'Gambian');
insert into tb_country values('60', 'Georgia', 'Georgian');
insert into tb_country values('61', 'Germany', 'German');
insert into tb_country values('62', 'Ghana', 'Ghanaian');
insert into tb_country values('63', 'Greece', 'Greek');
insert into tb_country values('64', 'Grenada', 'Grenadian');
insert into tb_country values('65', 'Guatemala', 'Guatemalan');
insert into tb_country values('66', 'Guinea', 'Guinean');
insert into tb_country values('67', 'Guyana', 'Guyanese');
insert into tb_country values('68', 'Haiti', 'Haitian');
insert into tb_country values('69', 'Holland (alsoNetherlands);', 'Dutch');
insert into tb_country values('70', 'Honduras', 'Honduran');
insert into tb_country values('71', 'Hungary', 'Hungarian');
insert into tb_country values('72', 'Iceland', 'Icelandic');
insert into tb_country values('73', 'India', 'Indian');
insert into tb_country values('74', 'Indonesia', 'Indonesian');
insert into tb_country values('75', 'Iran', 'Iranian');
insert into tb_country values('76', 'Iraq', 'Iraqi');
insert into tb_country values('77', '"Ireland', 'Republic of Irish');
insert into tb_country values('78', 'Italy', 'Italian');
insert into tb_country values('79', 'Jamaica', 'Jamaican');
insert into tb_country values('80', 'Japan', 'Japanese');
insert into tb_country values('81', 'Jordan', 'Jordanian');
insert into tb_country values('82', 'Kazakhstan', 'Kazakh');
insert into tb_country values('83', 'Kenya', 'Kenyan');
insert into tb_country values('84', 'Kuwait', 'Kuwaiti');
insert into tb_country values('85', 'Laos', 'Laotian');
insert into tb_country values('86', 'Latvia', 'Latvian');
insert into tb_country values('87', 'Lebanon', 'Lebanese');
insert into tb_country values('88', 'Liberia', 'Liberian');
insert into tb_country values('89', 'Libya', 'Libyan');

insert into tb_country values('90', 'Liechtenstein',null);
insert into tb_country values('91', 'Lithuania', 'Lithuanian');
insert into tb_country values('92', 'Luxembourg',null);
insert into tb_country values('93', 'Macedonia', 'Macedonian');
insert into tb_country values('94', 'Madagascar', 'Malagasy or Madagascan');
insert into tb_country values('95', 'Malawi', 'Malawian');
insert into tb_country values('96', 'Malaysia', 'Malaysian');
insert into tb_country values('97', 'Maldives', 'Maldivian');
insert into tb_country values('98', 'Mali', 'Malian');
insert into tb_country values('99', 'Malta', 'Maltese');
insert into tb_country values('100', 'Mauritania', 'Mauritanian');
insert into tb_country values('101', 'Mauritius', 'Mauritian');
insert into tb_country values('102', 'Mexico', 'Mexican');
insert into tb_country values('103', 'Moldova', 'Moldovan');
insert into tb_country values('104', 'Monaco', 'Monégasque or Monacan');
insert into tb_country values('105', 'Mongolia', 'Mongolian');
insert into tb_country values('106', 'Montenegro', 'Montenegrin');
insert into tb_country values('107', 'Morocco', 'Moroccan');
insert into tb_country values('108', 'Mozambique', 'Mozambican');
insert into tb_country values('109', 'Myanmar',null);
insert into tb_country values('110', 'Namibia', 'Namibian');
insert into tb_country values('111', 'Nepal', 'Nepalese');
insert into tb_country values('112', 'Netherlands', 'Dutch');
insert into tb_country values('113', 'New Zealand', 'New Zealand');
insert into tb_country values('114', 'Nicaragua', 'Nicaraguan');
insert into tb_country values('115', 'Niger', 'Nigerien');
insert into tb_country values('116', 'Nigeria', 'Nigerian');
insert into tb_country values('117', 'North Korea', 'North Korean');
insert into tb_country values('118', 'Norway', 'Norwegian');
insert into tb_country values('119', 'Oman', 'Omani');
insert into tb_country values('120', 'Pakistan', 'Pakistani');
insert into tb_country values('121', 'Panama', 'Panamanian');
insert into tb_country values('122', 'Papua New Guinea', 'Papua New Guinean orGuinean');
insert into tb_country values('123', 'Paraguay', 'Paraguayan');
insert into tb_country values('124', 'Peru', 'Peruvian');
insert into tb_country values('125', 'the Philippines', 'Philippine');
insert into tb_country values('126', 'Poland', 'Polish');
insert into tb_country values('127', 'Portugal', 'Portuguese');
insert into tb_country values('128', 'Qatar', 'Qatari');
insert into tb_country values('129', 'Romania', 'Romanian');
insert into tb_country values('130', 'Russia', 'Russian');
insert into tb_country values('131', 'Rwanda', 'Rwandan');
insert into tb_country values('132', 'Saudi Arabia', 'Saudi Arabian or Saudi');
insert into tb_country values('133', 'Scotland', 'Scottish');
insert into tb_country values('134', 'Senegal', 'Senegalese');
insert into tb_country values('135', 'Serbia', 'Serb or Serbian');
insert into tb_country values('136', '"Seychelles', 'Seychellois');
insert into tb_country values('137', 'Sierra Leone', 'Sierra Leonian');
insert into tb_country values('138', 'Singapore', 'Singaporean');
insert into tb_country values('139', 'Slovakia', 'Slovak');
insert into tb_country values('140', 'Slovenia', 'Slovene or Slovenian');
insert into tb_country values('141', 'Solomon Islands', null);
insert into tb_country values('142', 'Somalia', 'Somali');
insert into tb_country values('143', 'South Africa', 'South African');
insert into tb_country values('144', 'South Korea', 'South Korean');
insert into tb_country values('145', 'Spain', 'Spanish');
insert into tb_country values('146', 'Sri Lanka', 'Sri Lankan');
insert into tb_country values('147', 'Sudan', 'Sudanese');
insert into tb_country values('148', 'Suriname', 'Surinamese');
insert into tb_country values('149', 'Swaziland', 'Swazi');
insert into tb_country values('150', 'Sweden', 'Swedish');
insert into tb_country values('151', 'Switzerland', 'Swiss');
insert into tb_country values('152', 'Syria', 'Syrian');
insert into tb_country values('153', 'Taiwan', 'Taiwanese');
insert into tb_country values('154', 'Tajikistan', 'Tajik or Tadjik');
insert into tb_country values('155', 'Tanzania', 'Tanzanian');
insert into tb_country values('156', 'Thailand', 'Thai');
insert into tb_country values('157', 'Togo', 'Togolese');
insert into tb_country values('158', 'Trinidad and Tobago', 'Trinidadian');
insert into tb_country values('159', 'Tobagan', 'Tobagonian');
insert into tb_country values('160', 'Tunisia', 'Tunisian');
insert into tb_country values('161', 'Turkey', 'Turkish');
insert into tb_country values('162', 'Turkmenistan', 'Turkmen or Turkoman');
insert into tb_country values('163', 'Tuvalu', 'Tuvaluan');
insert into tb_country values('164', 'Uganda', 'Ugandan');
insert into tb_country values('165', 'Ukraine', 'Ukrainian');
insert into tb_country values('166', 'United Arab Emirates', 'UAE or Emirates');
insert into tb_country values('167', 'United Kingdom ', 'UK or British');
insert into tb_country values('168', 'United States of America', 'US');
insert into tb_country values('169', 'Uruguay', 'Uruguayan');
insert into tb_country values('170', 'Uzbekistan', 'Uzbek');
insert into tb_country values('171', 'Vanuatu', 'Vanuatuan');
insert into tb_country values('172', 'Vatican City', null );
insert into tb_country values('173', 'Venezuela', 'Venezuelan');
insert into tb_country values('174', 'Vietnam', 'Vietnamese');
insert into tb_country values('175', 'Wales', 'Welsh');
insert into tb_country values('176', 'Western Samoa', 'Western Samoan');
insert into tb_country values('177', 'Yemen', 'Yemeni');
insert into tb_country values('178', 'Yugoslavia', 'Yugoslav');
insert into tb_country values('179', 'Zaire', 'Zaïrean');
insert into tb_country values('180', 'Zambia', 'Zambian');
insert into tb_country values('181', 'Zimbabwe', 'Zimbabwean');

