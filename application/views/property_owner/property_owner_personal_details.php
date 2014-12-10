<!-- Created by  : Prime R.
     Date        : November 27, 2014
     Script Lines: All unless noted otherwise
-->
		<!-- Start right content -->
		<?php echo form_open_multipart('propertyfinder/create_property_owner');
								//echo validation_errors();?>
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
            					<!-- Page Heading Start
				<div class="page-heading">
            		<h1><i class='fa fa-file'></i> Blank</h1>
            		<h3>Blank Page</h3>            	</div>
            	<!-- Page Heading End-->
				<div class="row">
					
					<div class="col-md-12 portlets"><!-- BioData-->
						<div class="widget">
							<div class="widget-header transparent">
							<h2><i class="icon-user-add"></i><strong> Personal</strong> Details</h2>
							<div class="additional-btn">
								<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
								<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
							</div>
							</div>	
							<div class="widget-content padding">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('faname'); ?></h6><input type="text" name="faname" value="<?php echo set_value('faname'); ?>" class="form-control input-sm" placeholder="First Name"></div>
												<div class="col-md-3"><h6><?php echo form_error('miname'); ?></h6><input type="text" name="miname" value="<?php echo set_value('miname'); ?>" class="form-control input-sm" placeholder="Middle Name"></div>
												<div class="col-md-3"><h6><?php echo form_error('laname'); ?></h6><input type="text" name="laname" value="<?php echo set_value('laname'); ?>" class="form-control input-sm" placeholder="Last Name"></div>
											</div>
										</div>
										
										
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('na1'); ?></h6>
													<select class="form-control input-sm" name="na1">
													  <option value="" <?php echo set_select('na1', '', TRUE); ?> >Select a Nationality</option>
													  <option value="afghan" <?php echo set_select('na1', 'afghan'); ?> >Afghan</option>
													  <option value="albanian" <?php echo set_select('na1', 'albanian'); ?> >Albanian</option>
													  <option value="algerian" <?php echo set_select('na1', 'algerian'); ?> >Algerian</option>
													  <option value="american" <?php echo set_select('na1', 'american'); ?> >American</option>
													  <option value="andorran" <?php echo set_select('na1', 'andorran'); ?> >Andorran</option>
													  <option value="angolan" <?php echo set_select('na1', 'angolan'); ?> >Angolan</option>
													  <option value="antiguans" <?php echo set_select('na1', 'antiguans'); ?> >Antiguans</option>
													  <option value="argentinean" <?php echo set_select('na1', 'argentinean'); ?> >Argentinean</option>
													  <option value="armenian" <?php echo set_select('na1', 'armenian'); ?> >Armenian</option>
													  <option value="australian" <?php echo set_select('na1', 'australian'); ?> >Australian</option>
													  <option value="austrian" <?php echo set_select('na1', 'austrian'); ?> >Austrian</option>
													  <option value="azerbaijani" <?php echo set_select('na1', 'azerbaijani'); ?> >Azerbaijani</option>
													  <option value="bahamian" <?php echo set_select('na1', 'bahamian'); ?> >Bahamian</option>
													  <option value="bahraini" <?php echo set_select('na1', 'bahraini'); ?> >Bahraini</option>
													  <option value="bangladeshi" <?php echo set_select('na1', 'bangladeshi'); ?> >Bangladeshi</option>
													  <option value="barbadian" <?php echo set_select('na1', 'barbadian'); ?> >Barbadian</option>
													  <option value="barbudans" <?php echo set_select('na1', 'barbudans'); ?> >Barbudans</option>
													  <option value="batswana" <?php echo set_select('na1', 'batswana'); ?> >Batswana</option>
													  <option value="belarusian" <?php echo set_select('na1', 'belarusian'); ?> >Belarusian</option>
													  <option value="belgian" <?php echo set_select('na1', 'belgian'); ?> >Belgian</option>
													  <option value="belizean" <?php echo set_select('na1', 'belizean'); ?> >Belizean</option>
													  <option value="beninese" <?php echo set_select('na1', 'beninese'); ?> >Beninese</option>
													  <option value="bhutanese" <?php echo set_select('na1', 'bhutanese'); ?> >Bhutanese</option>
													  <option value="bolivian" <?php echo set_select('na1', 'bolivian'); ?> >Bolivian</option>
													  <option value="bosnian" <?php echo set_select('na1', 'bosnian'); ?> >Bosnian</option>
													  <option value="brazilian" <?php echo set_select('na1', 'brazilian'); ?> >Brazilian</option>
													  <option value="british" <?php echo set_select('na1', 'british'); ?> >British</option>
													  <option value="bruneian" <?php echo set_select('na1', 'bruneian'); ?> >Bruneian</option>
													  <option value="bulgarian" <?php echo set_select('na1', 'bulgarian'); ?> >Bulgarian</option>
													  <option value="burkinabe" <?php echo set_select('na1', 'burkinabe'); ?> >Burkinabe</option>
													  <option value="burmese" <?php echo set_select('na1', 'burmese'); ?> >Burmese</option>
													  <option value="burundian" <?php echo set_select('na1', 'burundian'); ?> >Burundian</option>
													  <option value="cambodian" <?php echo set_select('na1', 'cambodian'); ?> >Cambodian</option>
													  <option value="cameroonian" <?php echo set_select('na1', 'cameroonian'); ?> >Cameroonian</option>
													  <option value="canadian" <?php echo set_select('na1', 'canadian'); ?> >Canadian</option>
													  <option value="cape verdean" <?php echo set_select('na1', 'cape verdean'); ?> >Cape Verdean</option>
													  <option value="central african" <?php echo set_select('na1', 'central african'); ?> >Central African</option>
													  <option value="chadian" <?php echo set_select('na1', 'chadian'); ?> >Chadian</option>
													  <option value="chilean" <?php echo set_select('na1', 'chilean'); ?> >Chilean</option>
													  <option value="chinese" <?php echo set_select('na1', 'chinese'); ?> >Chinese</option>
													  <option value="colombian" <?php echo set_select('na1', 'colombian'); ?> >Colombian</option>
													  <option value="comoran" <?php echo set_select('na1', 'comoran'); ?> >Comoran</option>
													  <option value="congolese" <?php echo set_select('na1', 'congolese'); ?> >Congolese</option>
													  <option value="costa rican" <?php echo set_select('na1', 'costa rican'); ?> >Costa Rican</option>
													  <option value="croatian" <?php echo set_select('na1', 'croatian'); ?> >Croatian</option>
													  <option value="cuban" <?php echo set_select('na1', 'cuban'); ?> >Cuban</option>
													  <option value="cypriot" <?php echo set_select('na1', 'cypriot'); ?> >Cypriot</option>
													  <option value="czech" <?php echo set_select('na1', 'czech'); ?> >Czech</option>
													  <option value="danish" <?php echo set_select('na1', 'danish'); ?> >Danish</option>
													  <option value="djibouti" <?php echo set_select('na1', 'djibouti'); ?> >Djibouti</option>
													  <option value="dominican" <?php echo set_select('na1', 'dominican'); ?> >Dominican</option>
													  <option value="dutch" <?php echo set_select('na1', 'dutch'); ?> >Dutch</option>
													  <option value="east timorese" <?php echo set_select('na1', 'east timorese'); ?> >East Timorese</option>
													  <option value="ecuadorean" <?php echo set_select('na1', 'ecuadorean'); ?> >Ecuadorean</option>
													  <option value="egyptian" <?php echo set_select('na1', 'egyptian'); ?> >Egyptian</option>
													  <option value="emirian" <?php echo set_select('na1', 'emirian'); ?> >Emirian</option>
													  <option value="equatorial guinean" <?php echo set_select('na1', 'equatorial guinean'); ?> >Equatorial Guinean</option>
													  <option value="eritrean" <?php echo set_select('na1', 'eritrean'); ?> >Eritrean</option>
													  <option value="estonian" <?php echo set_select('na1', 'estonian'); ?> >Estonian</option>
													  <option value="ethiopian" <?php echo set_select('na1', 'ethiopian'); ?> >Ethiopian</option>
													  <option value="fijian" <?php echo set_select('na1', 'fijian'); ?> >Fijian</option>
													  <option value="filipino" <?php echo set_select('na1', 'filipino'); ?> >Filipino</option>
													  <option value="finnish" <?php echo set_select('na1', 'finnish'); ?> >Finnish</option>
													  <option value="french" <?php echo set_select('na1', 'french'); ?> >French</option>
													  <option value="gabonese" <?php echo set_select('na1', 'gabonese'); ?> >Gabonese</option>
													  <option value="gambian" <?php echo set_select('na1', 'gambian'); ?> >Gambian</option>
													  <option value="georgian" <?php echo set_select('na1', 'georgian'); ?> >Georgian</option>
													  <option value="german" <?php echo set_select('na1', 'german'); ?> >German</option>
													  <option value="ghanaian" <?php echo set_select('na1', 'ghanaian'); ?> >Ghanaian</option>
													  <option value="greek" <?php echo set_select('na1', 'greek'); ?> >Greek</option>
													  <option value="grenadian" <?php echo set_select('na1', 'grenadian'); ?> >Grenadian</option>
													  <option value="guatemalan" <?php echo set_select('na1', 'guatemalan'); ?> >Guatemalan</option>
													  <option value="guinea-bissauan" <?php echo set_select('na1', 'guinea-bissauan'); ?> >Guinea-Bissauan</option>
													  <option value="guinean" <?php echo set_select('na1', 'guinean'); ?> >Guinean</option>
													  <option value="guyanese" <?php echo set_select('na1', 'guyanese'); ?> >Guyanese</option>
													  <option value="haitian" <?php echo set_select('na1', 'haitian'); ?> >Haitian</option>
													  <option value="herzegovinian" <?php echo set_select('na1', 'herzegovinian'); ?> >Herzegovinian</option>
													  <option value="honduran" <?php echo set_select('na1', 'honduran'); ?> >Honduran</option>
													  <option value="hungarian" <?php echo set_select('na1', 'hungarian'); ?> >Hungarian</option>
													  <option value="icelander" <?php echo set_select('na1', 'icelander'); ?> >Icelander</option>
													  <option value="indian" <?php echo set_select('na1', 'indian'); ?> >Indian</option>
													  <option value="indonesian" <?php echo set_select('na1', 'indonesian'); ?> >Indonesian</option>
													  <option value="iranian" <?php echo set_select('na1', 'iranian'); ?> >Iranian</option>
													  <option value="iraqi" <?php echo set_select('na1', 'iraqi'); ?> >Iraqi</option>
													  <option value="irish" <?php echo set_select('na1', 'irish'); ?> >Irish</option>
													  <option value="israeli" <?php echo set_select('na1', 'israeli'); ?> >Israeli</option>
													  <option value="italian" <?php echo set_select('na1', 'italian'); ?> >Italian</option>
													  <option value="ivorian" <?php echo set_select('na1', 'ivorian'); ?> >Ivorian</option>
													  <option value="jamaican" <?php echo set_select('na1', 'jamaican'); ?> >Jamaican</option>
													  <option value="japanese" <?php echo set_select('na1', 'japanese'); ?> >Japanese</option>
													  <option value="jordanian" <?php echo set_select('na1', 'jordanian'); ?> >Jordanian</option>
													  <option value="kazakhstani" <?php echo set_select('na1', 'kazakhstani'); ?> >Kazakhstani</option>
													  <option value="kenyan" <?php echo set_select('na1', 'kenyan'); ?> >Kenyan</option>
													  <option value="kuwaiti" <?php echo set_select('na1', 'kuwaiti'); ?> >Kuwaiti</option>
													  <option value="kyrgyz" <?php echo set_select('na1', 'kyrgyz'); ?> >Kyrgyz</option>
													  <option value="laotian" <?php echo set_select('na1', 'laotian'); ?> >Laotian</option>
													  <option value="latvian" <?php echo set_select('na1', 'latvian'); ?> >Latvian</option>
													  <option value="lebanese" <?php echo set_select('na1', 'lebanese'); ?> >Lebanese</option>
													  <option value="liberian" <?php echo set_select('na1', 'liberian'); ?> >Liberian</option>
													  <option value="libyan" <?php echo set_select('na1', 'libyan'); ?> >Libyan</option>
													  <option value="liechtensteiner" <?php echo set_select('na1', 'liechtensteiner'); ?> >Liechtensteiner</option>
													  <option value="lithuanian" <?php echo set_select('na1', 'lithuanian'); ?> >Lithuanian</option>
													  <option value="luxembourger" <?php echo set_select('na1', 'luxembourger'); ?> >Luxembourger</option>
													  <option value="macedonian" <?php echo set_select('na1', 'macedonian'); ?> >Macedonian</option>
													  <option value="malagasy" <?php echo set_select('na1', 'malagasy'); ?> >Malagasy</option>
													  <option value="malawian" <?php echo set_select('na1', 'malawian'); ?> >Malawian</option>
													  <option value="malaysian" <?php echo set_select('na1', 'malaysian'); ?> >Malaysian</option>
													  <option value="maldivan" <?php echo set_select('na1', 'maldivan'); ?> >Maldivan</option>
													  <option value="malian" <?php echo set_select('na1', 'malian'); ?> >Malian</option>
													  <option value="maltese" <?php echo set_select('na1', 'maltese'); ?> >Maltese</option>
													  <option value="marshallese" <?php echo set_select('na1', 'marshallese'); ?> >Marshallese</option>
													  <option value="mauritanian" <?php echo set_select('na1', 'mauritanian'); ?> >Mauritanian</option>
													  <option value="mauritian" <?php echo set_select('na1', 'mauritian'); ?> >Mauritian</option>
													  <option value="mexican" <?php echo set_select('na1', 'mexican'); ?> >Mexican</option>
													  <option value="micronesian" <?php echo set_select('na1', 'micronesian'); ?> >Micronesian</option>
													  <option value="moldovan" <?php echo set_select('na1', 'moldovan'); ?> >Moldovan</option>
													  <option value="monacan" <?php echo set_select('na1', 'monacan'); ?> >Monacan</option>
													  <option value="mongolian" <?php echo set_select('na1', 'mongolian'); ?> >Mongolian</option>
													  <option value="moroccan" <?php echo set_select('na1', 'moroccan'); ?> >Moroccan</option>
													  <option value="mosotho" <?php echo set_select('na1', 'mosotho'); ?> >Mosotho</option>
													  <option value="motswana" <?php echo set_select('na1', 'motswana'); ?> >Motswana</option>
													  <option value="mozambican" <?php echo set_select('na1', 'mozambican'); ?> >Mozambican</option>
													  <option value="namibian" <?php echo set_select('na1', 'namibian'); ?> >Namibian</option>
													  <option value="nauruan" <?php echo set_select('na1', 'nauruan'); ?> >Nauruan</option>
													  <option value="nepalese" <?php echo set_select('na1', 'nepalese'); ?> >Nepalese</option>
													  <option value="new zealander" <?php echo set_select('na1', 'new zealander'); ?> >New Zealander</option>
													  <option value="ni-vanuatu" <?php echo set_select('na1', 'ni-vanuatu'); ?> >Ni-Vanuatu</option>
													  <option value="nicaraguan" <?php echo set_select('na1', 'nicaraguan'); ?> >Nicaraguan</option>
													  <option value="nigerien" <?php echo set_select('na1', 'nigerien'); ?> >Nigerien</option>
													  <option value="north korean" <?php echo set_select('na1', 'north korean'); ?> >North Korean</option>
													  <option value="northern irish" <?php echo set_select('na1', 'northern irish'); ?> >Northern Irish</option>
													  <option value="norwegian" <?php echo set_select('na1', 'norwegian'); ?> >Norwegian</option>
													  <option value="omani" <?php echo set_select('na1', 'omani'); ?> >Omani</option>
													  <option value="pakistani" <?php echo set_select('na1', 'pakistani'); ?> >Pakistani</option>
													  <option value="palauan" <?php echo set_select('na1', 'palauan'); ?> >Palauan</option>
													  <option value="panamanian" <?php echo set_select('na1', 'panamanian'); ?> >Panamanian</option>
													  <option value="papua new guinean" <?php echo set_select('na1', 'papua new guinean'); ?> >Papua New Guinean</option>
													  <option value="paraguayan" <?php echo set_select('na1', 'paraguayan'); ?> >Paraguayan</option>
													  <option value="peruvian" <?php echo set_select('na1', 'peruvian'); ?> >Peruvian</option>
													  <option value="polish" <?php echo set_select('na1', 'polish'); ?> >Polish</option>
													  <option value="portuguese" <?php echo set_select('na1', 'portuguese'); ?> >Portuguese</option>
													  <option value="qatari" <?php echo set_select('na1', 'qatari'); ?> >Qatari</option>
													  <option value="romanian" <?php echo set_select('na1', 'romanian'); ?> >Romanian</option>
													  <option value="russian" <?php echo set_select('na1', 'russian'); ?> >Russian</option>
													  <option value="rwandan" <?php echo set_select('na1', 'rwandan'); ?> >Rwandan</option>
													  <option value="saint lucian" <?php echo set_select('na1', 'saint lucian'); ?> >Saint Lucian</option>
													  <option value="salvadoran" <?php echo set_select('na1', 'salvadoran'); ?> >Salvadoran</option>
													  <option value="samoan" <?php echo set_select('na1', 'samoan'); ?> >Samoan</option>
													  <option value="san marinese" <?php echo set_select('na1', 'san marinese'); ?> >San Marinese</option>
													  <option value="sao tomean" <?php echo set_select('na1', 'sao tomean'); ?> >Sao Tomean</option>
													  <option value="saudi" <?php echo set_select('na1', 'saudi'); ?> >Saudi</option>
													  <option value="scottish" <?php echo set_select('na1', 'scottish'); ?> >Scottish</option>
													  <option value="senegalese" <?php echo set_select('na1', 'senegalese'); ?> >Senegalese</option>
													  <option value="serbian" <?php echo set_select('na1', 'serbian'); ?> >Serbian</option>
													  <option value="seychellois" <?php echo set_select('na1', 'seychellois'); ?> >Seychellois</option>
													  <option value="sierra leonean" <?php echo set_select('na1', 'sierra leonean'); ?> >Sierra Leonean</option>
													  <option value="singaporean" <?php echo set_select('na1', 'singaporean'); ?> >Singaporean</option>
													  <option value="slovakian" <?php echo set_select('na1', 'slovakian'); ?> >Slovakian</option>
													  <option value="slovenian" <?php echo set_select('na1', 'slovenian'); ?> >Slovenian</option>
													  <option value="solomon islander" <?php echo set_select('na1', 'solomon islander'); ?> >Solomon Islander</option>
													  <option value="somali" <?php echo set_select('na1', 'somali'); ?> >Somali</option>
													  <option value="south african" <?php echo set_select('na1', 'south african'); ?> >South African</option>
													  <option value="south korean" <?php echo set_select('na1', 'south korean'); ?> >South Korean</option>
													  <option value="spanish" <?php echo set_select('na1', 'spanish'); ?> >Spanish</option>
													  <option value="sri lankan" <?php echo set_select('na1', 'sri lankan'); ?> >Sri Lankan</option>
													  <option value="sudanese" <?php echo set_select('na1', 'sudanese'); ?> >Sudanese</option>
													  <option value="surinamer" <?php echo set_select('na1', 'surinamer'); ?> >Surinamer</option>
													  <option value="swazi" <?php echo set_select('na1', 'swazi'); ?> >Swazi</option>
													  <option value="swedish" <?php echo set_select('na1', 'swedish'); ?> >Swedish</option>
													  <option value="swiss" <?php echo set_select('na1', 'swiss'); ?> >Swiss</option>
													  <option value="syrian" <?php echo set_select('na1', 'syrian'); ?> >Syrian</option>
													  <option value="taiwanese" <?php echo set_select('na1', 'taiwanese'); ?> >Taiwanese</option>
													  <option value="tajik" <?php echo set_select('na1', 'tajik'); ?> >Tajik</option>
													  <option value="tanzanian" <?php echo set_select('na1', 'tanzanian'); ?> >Tanzanian</option>
													  <option value="thai" <?php echo set_select('na1', 'thai'); ?> >Thai</option>
													  <option value="togolese" <?php echo set_select('na1', 'togolese'); ?> >Togolese</option>
													  <option value="tongan" <?php echo set_select('na1', 'tongan'); ?> >Tongan</option>
													  <option value="trinidadian" <?php echo set_select('na1', 'trinidadian'); ?> >Trinidadian</option>
													  <option value="tobagonian" <?php echo set_select('na1', 'tobagonian'); ?> >Tobagonian</option>
													  <option value="tunisian" <?php echo set_select('na1', 'tunisian'); ?> >Tunisian</option>
													  <option value="turkish" <?php echo set_select('na1', 'turkish'); ?> >Turkish</option>
													  <option value="tuvaluan" <?php echo set_select('na1', 'tuvaluan'); ?> >Tuvaluan</option>
													  <option value="ugandan" <?php echo set_select('na1', 'ugandan'); ?> >Ugandan</option>
													  <option value="ukrainian" <?php echo set_select('na1', 'ukrainian'); ?> >Ukrainian</option>
													  <option value="uruguayan" <?php echo set_select('na1', 'uruguayan'); ?> >Uruguayan</option>
													  <option value="uzbekistani" <?php echo set_select('na1', 'uzbekistani'); ?> >Uzbekistani</option>
													  <option value="venezuelan" <?php echo set_select('na1', 'venezuelan'); ?> >Venezuelan</option>
													  <option value="vietnamese" <?php echo set_select('na1', 'vietnamese'); ?> >Vietnamese</option>
													  <option value="welsh" <?php echo set_select('na1', 'welsh'); ?> >Welsh</option>
													  <option value="yemenite" <?php echo set_select('na1', 'yemenite'); ?> >Yemenite</option>
													  <option value="zambian" <?php echo set_select('na1', 'zambian'); ?> >Zambian</option>
													  <option value="zimbabwean" <?php echo set_select('na1', 'zimbabwean'); ?>>Zimbabwean</option>
													</select>
												</div>
												<div class="col-md-3"><h6><?php echo form_error('na2'); ?></h6>
													<select class="form-control input-sm" name="na2">
													  <option value="" <?php echo set_select('na2', '', TRUE); ?> >Nationality (2)</option>
													  <option value="afghan" <?php echo set_select('na2', 'afghan'); ?> >Afghan</option>
													  <option value="albanian" <?php echo set_select('na2', 'albanian'); ?> >Albanian</option>
													  <option value="algerian" <?php echo set_select('na2', 'algerian'); ?> >Algerian</option>
													  <option value="american" <?php echo set_select('na2', 'american'); ?> >American</option>
													  <option value="andorran" <?php echo set_select('na2', 'andorran'); ?> >Andorran</option>
													  <option value="angolan" <?php echo set_select('na2', 'angolan'); ?> >Angolan</option>
													  <option value="antiguans" <?php echo set_select('na2', 'antiguans'); ?> >Antiguans</option>
													  <option value="argentinean" <?php echo set_select('na2', 'argentinean'); ?> >Argentinean</option>
													  <option value="armenian" <?php echo set_select('na2', 'armenian'); ?> >Armenian</option>
													  <option value="australian" <?php echo set_select('na2', 'australian'); ?> >Australian</option>
													  <option value="austrian" <?php echo set_select('na2', 'austrian'); ?> >Austrian</option>
													  <option value="azerbaijani" <?php echo set_select('na2', 'azerbaijani'); ?> >Azerbaijani</option>
													  <option value="bahamian" <?php echo set_select('na2', 'bahamian'); ?> >Bahamian</option>
													  <option value="bahraini" <?php echo set_select('na2', 'bahraini'); ?> >Bahraini</option>
													  <option value="bangladeshi" <?php echo set_select('na2', 'bangladeshi'); ?> >Bangladeshi</option>
													  <option value="barbadian" <?php echo set_select('na2', 'barbadian'); ?> >Barbadian</option>
													  <option value="barbudans" <?php echo set_select('na2', 'barbudans'); ?> >Barbudans</option>
													  <option value="batswana" <?php echo set_select('na2', 'batswana'); ?> >Batswana</option>
													  <option value="belarusian" <?php echo set_select('na2', 'belarusian'); ?> >Belarusian</option>
													  <option value="belgian" <?php echo set_select('na2', 'belgian'); ?> >Belgian</option>
													  <option value="belizean" <?php echo set_select('na2', 'belizean'); ?> >Belizean</option>
													  <option value="beninese" <?php echo set_select('na2', 'beninese'); ?> >Beninese</option>
													  <option value="bhutanese" <?php echo set_select('na2', 'bhutanese'); ?> >Bhutanese</option>
													  <option value="bolivian" <?php echo set_select('na2', 'bolivian'); ?> >Bolivian</option>
													  <option value="bosnian" <?php echo set_select('na2', 'bosnian'); ?> >Bosnian</option>
													  <option value="brazilian" <?php echo set_select('na2', 'brazilian'); ?> >Brazilian</option>
													  <option value="british" <?php echo set_select('na2', 'british'); ?> >British</option>
													  <option value="bruneian" <?php echo set_select('na2', 'bruneian'); ?> >Bruneian</option>
													  <option value="bulgarian" <?php echo set_select('na2', 'bulgarian'); ?> >Bulgarian</option>
													  <option value="burkinabe" <?php echo set_select('na2', 'burkinabe'); ?> >Burkinabe</option>
													  <option value="burmese" <?php echo set_select('na2', 'burmese'); ?> >Burmese</option>
													  <option value="burundian" <?php echo set_select('na2', 'burundian'); ?> >Burundian</option>
													  <option value="cambodian" <?php echo set_select('na2', 'cambodian'); ?> >Cambodian</option>
													  <option value="cameroonian" <?php echo set_select('na2', 'cameroonian'); ?> >Cameroonian</option>
													  <option value="canadian" <?php echo set_select('na2', 'canadian'); ?> >Canadian</option>
													  <option value="cape verdean" <?php echo set_select('na2', 'cape verdean'); ?> >Cape Verdean</option>
													  <option value="central african" <?php echo set_select('na2', 'central african'); ?> >Central African</option>
													  <option value="chadian" <?php echo set_select('na2', 'chadian'); ?> >Chadian</option>
													  <option value="chilean" <?php echo set_select('na2', 'chilean'); ?> >Chilean</option>
													  <option value="chinese" <?php echo set_select('na2', 'chinese'); ?> >Chinese</option>
													  <option value="colombian" <?php echo set_select('na2', 'colombian'); ?> >Colombian</option>
													  <option value="comoran" <?php echo set_select('na2', 'comoran'); ?> >Comoran</option>
													  <option value="congolese" <?php echo set_select('na2', 'congolese'); ?> >Congolese</option>
													  <option value="costa rican" <?php echo set_select('na2', 'costa rican'); ?> >Costa Rican</option>
													  <option value="croatian" <?php echo set_select('na2', 'croatian'); ?> >Croatian</option>
													  <option value="cuban" <?php echo set_select('na2', 'cuban'); ?> >Cuban</option>
													  <option value="cypriot" <?php echo set_select('na2', 'cypriot'); ?> >Cypriot</option>
													  <option value="czech" <?php echo set_select('na2', 'czech'); ?> >Czech</option>
													  <option value="danish" <?php echo set_select('na2', 'danish'); ?> >Danish</option>
													  <option value="djibouti" <?php echo set_select('na2', 'djibouti'); ?> >Djibouti</option>
													  <option value="dominican" <?php echo set_select('na2', 'dominican'); ?> >Dominican</option>
													  <option value="dutch" <?php echo set_select('na2', 'dutch'); ?> >Dutch</option>
													  <option value="east timorese" <?php echo set_select('na2', 'east timorese'); ?> >East Timorese</option>
													  <option value="ecuadorean" <?php echo set_select('na2', 'ecuadorean'); ?> >Ecuadorean</option>
													  <option value="egyptian" <?php echo set_select('na2', 'egyptian'); ?> >Egyptian</option>
													  <option value="emirian" <?php echo set_select('na2', 'emirian'); ?> >Emirian</option>
													  <option value="equatorial guinean" <?php echo set_select('na2', 'equatorial guinean'); ?> >Equatorial Guinean</option>
													  <option value="eritrean" <?php echo set_select('na2', 'eritrean'); ?> >Eritrean</option>
													  <option value="estonian" <?php echo set_select('na2', 'estonian'); ?> >Estonian</option>
													  <option value="ethiopian" <?php echo set_select('na2', 'ethiopian'); ?> >Ethiopian</option>
													  <option value="fijian" <?php echo set_select('na2', 'fijian'); ?> >Fijian</option>
													  <option value="filipino" <?php echo set_select('na2', 'filipino'); ?> >Filipino</option>
													  <option value="finnish" <?php echo set_select('na2', 'finnish'); ?> >Finnish</option>
													  <option value="french" <?php echo set_select('na2', 'french'); ?> >French</option>
													  <option value="gabonese" <?php echo set_select('na2', 'gabonese'); ?> >Gabonese</option>
													  <option value="gambian" <?php echo set_select('na2', 'gambian'); ?> >Gambian</option>
													  <option value="georgian" <?php echo set_select('na2', 'georgian'); ?> >Georgian</option>
													  <option value="german" <?php echo set_select('na2', 'german'); ?> >German</option>
													  <option value="ghanaian" <?php echo set_select('na2', 'ghanaian'); ?> >Ghanaian</option>
													  <option value="greek" <?php echo set_select('na2', 'greek'); ?> >Greek</option>
													  <option value="grenadian" <?php echo set_select('na2', 'grenadian'); ?> >Grenadian</option>
													  <option value="guatemalan" <?php echo set_select('na2', 'guatemalan'); ?> >Guatemalan</option>
													  <option value="guinea-bissauan" <?php echo set_select('na2', 'guinea-bissauan'); ?> >Guinea-Bissauan</option>
													  <option value="guinean" <?php echo set_select('na2', 'guinean'); ?> >Guinean</option>
													  <option value="guyanese" <?php echo set_select('na2', 'guyanese'); ?> >Guyanese</option>
													  <option value="haitian" <?php echo set_select('na2', 'haitian'); ?> >Haitian</option>
													  <option value="herzegovinian" <?php echo set_select('na2', 'herzegovinian'); ?> >Herzegovinian</option>
													  <option value="honduran" <?php echo set_select('na2', 'honduran'); ?> >Honduran</option>
													  <option value="hungarian" <?php echo set_select('na2', 'hungarian'); ?> >Hungarian</option>
													  <option value="icelander" <?php echo set_select('na2', 'icelander'); ?> >Icelander</option>
													  <option value="indian" <?php echo set_select('na2', 'indian'); ?> >Indian</option>
													  <option value="indonesian" <?php echo set_select('na2', 'indonesian'); ?> >Indonesian</option>
													  <option value="iranian" <?php echo set_select('na2', 'iranian'); ?> >Iranian</option>
													  <option value="iraqi" <?php echo set_select('na2', 'iraqi'); ?> >Iraqi</option>
													  <option value="irish" <?php echo set_select('na2', 'irish'); ?> >Irish</option>
													  <option value="israeli" <?php echo set_select('na2', 'israeli'); ?> >Israeli</option>
													  <option value="italian" <?php echo set_select('na2', 'italian'); ?> >Italian</option>
													  <option value="ivorian" <?php echo set_select('na2', 'ivorian'); ?> >Ivorian</option>
													  <option value="jamaican" <?php echo set_select('na2', 'jamaican'); ?> >Jamaican</option>
													  <option value="japanese" <?php echo set_select('na2', 'japanese'); ?> >Japanese</option>
													  <option value="jordanian" <?php echo set_select('na2', 'jordanian'); ?> >Jordanian</option>
													  <option value="kazakhstani" <?php echo set_select('na2', 'kazakhstani'); ?> >Kazakhstani</option>
													  <option value="kenyan" <?php echo set_select('na2', 'kenyan'); ?> >Kenyan</option>
													  <option value="kuwaiti" <?php echo set_select('na2', 'kuwaiti'); ?> >Kuwaiti</option>
													  <option value="kyrgyz" <?php echo set_select('na2', 'kyrgyz'); ?> >Kyrgyz</option>
													  <option value="laotian" <?php echo set_select('na2', 'laotian'); ?> >Laotian</option>
													  <option value="latvian" <?php echo set_select('na2', 'latvian'); ?> >Latvian</option>
													  <option value="lebanese" <?php echo set_select('na2', 'lebanese'); ?> >Lebanese</option>
													  <option value="liberian" <?php echo set_select('na2', 'liberian'); ?> >Liberian</option>
													  <option value="libyan" <?php echo set_select('na2', 'libyan'); ?> >Libyan</option>
													  <option value="liechtensteiner" <?php echo set_select('na2', 'liechtensteiner'); ?> >Liechtensteiner</option>
													  <option value="lithuanian" <?php echo set_select('na2', 'lithuanian'); ?> >Lithuanian</option>
													  <option value="luxembourger" <?php echo set_select('na2', 'luxembourger'); ?> >Luxembourger</option>
													  <option value="macedonian" <?php echo set_select('na2', 'macedonian'); ?> >Macedonian</option>
													  <option value="malagasy" <?php echo set_select('na2', 'malagasy'); ?> >Malagasy</option>
													  <option value="malawian" <?php echo set_select('na2', 'malawian'); ?> >Malawian</option>
													  <option value="malaysian" <?php echo set_select('na2', 'malaysian'); ?> >Malaysian</option>
													  <option value="maldivan" <?php echo set_select('na2', 'maldivan'); ?> >Maldivan</option>
													  <option value="malian" <?php echo set_select('na2', 'malian'); ?> >Malian</option>
													  <option value="maltese" <?php echo set_select('na2', 'maltese'); ?> >Maltese</option>
													  <option value="marshallese" <?php echo set_select('na2', 'marshallese'); ?> >Marshallese</option>
													  <option value="mauritanian" <?php echo set_select('na2', 'mauritanian'); ?> >Mauritanian</option>
													  <option value="mauritian" <?php echo set_select('na2', 'mauritian'); ?> >Mauritian</option>
													  <option value="mexican" <?php echo set_select('na2', 'mexican'); ?> >Mexican</option>
													  <option value="micronesian" <?php echo set_select('na2', 'micronesian'); ?> >Micronesian</option>
													  <option value="moldovan" <?php echo set_select('na2', 'moldovan'); ?> >Moldovan</option>
													  <option value="monacan" <?php echo set_select('na2', 'monacan'); ?> >Monacan</option>
													  <option value="mongolian" <?php echo set_select('na2', 'mongolian'); ?> >Mongolian</option>
													  <option value="moroccan" <?php echo set_select('na2', 'moroccan'); ?> >Moroccan</option>
													  <option value="mosotho" <?php echo set_select('na2', 'mosotho'); ?> >Mosotho</option>
													  <option value="motswana" <?php echo set_select('na2', 'motswana'); ?> >Motswana</option>
													  <option value="mozambican" <?php echo set_select('na2', 'mozambican'); ?> >Mozambican</option>
													  <option value="namibian" <?php echo set_select('na2', 'namibian'); ?> >Namibian</option>
													  <option value="nauruan" <?php echo set_select('na2', 'nauruan'); ?> >Nauruan</option>
													  <option value="nepalese" <?php echo set_select('na2', 'nepalese'); ?> >Nepalese</option>
													  <option value="new zealander" <?php echo set_select('na2', 'new zealander'); ?> >New Zealander</option>
													  <option value="ni-vanuatu" <?php echo set_select('na2', 'ni-vanuatu'); ?> >Ni-Vanuatu</option>
													  <option value="nicaraguan" <?php echo set_select('na2', 'nicaraguan'); ?> >Nicaraguan</option>
													  <option value="nigerien" <?php echo set_select('na2', 'nigerien'); ?> >Nigerien</option>
													  <option value="north korean" <?php echo set_select('na2', 'north korean'); ?> >North Korean</option>
													  <option value="northern irish" <?php echo set_select('na2', 'northern irish'); ?> >Northern Irish</option>
													  <option value="norwegian" <?php echo set_select('na2', 'norwegian'); ?> >Norwegian</option>
													  <option value="omani" <?php echo set_select('na2', 'omani'); ?> >Omani</option>
													  <option value="pakistani" <?php echo set_select('na2', 'pakistani'); ?> >Pakistani</option>
													  <option value="palauan" <?php echo set_select('na2', 'palauan'); ?> >Palauan</option>
													  <option value="panamanian" <?php echo set_select('na2', 'panamanian'); ?> >Panamanian</option>
													  <option value="papua new guinean" <?php echo set_select('na2', 'papua new guinean'); ?> >Papua New Guinean</option>
													  <option value="paraguayan" <?php echo set_select('na2', 'paraguayan'); ?> >Paraguayan</option>
													  <option value="peruvian" <?php echo set_select('na2', 'peruvian'); ?> >Peruvian</option>
													  <option value="polish" <?php echo set_select('na2', 'polish'); ?> >Polish</option>
													  <option value="portuguese" <?php echo set_select('na2', 'portuguese'); ?> >Portuguese</option>
													  <option value="qatari" <?php echo set_select('na2', 'qatari'); ?> >Qatari</option>
													  <option value="romanian" <?php echo set_select('na2', 'romanian'); ?> >Romanian</option>
													  <option value="russian" <?php echo set_select('na2', 'russian'); ?> >Russian</option>
													  <option value="rwandan" <?php echo set_select('na2', 'rwandan'); ?> >Rwandan</option>
													  <option value="saint lucian" <?php echo set_select('na2', 'saint lucian'); ?> >Saint Lucian</option>
													  <option value="salvadoran" <?php echo set_select('na2', 'salvadoran'); ?> >Salvadoran</option>
													  <option value="samoan" <?php echo set_select('na2', 'samoan'); ?> >Samoan</option>
													  <option value="san marinese" <?php echo set_select('na2', 'san marinese'); ?> >San Marinese</option>
													  <option value="sao tomean" <?php echo set_select('na2', 'sao tomean'); ?> >Sao Tomean</option>
													  <option value="saudi" <?php echo set_select('na2', 'saudi'); ?> >Saudi</option>
													  <option value="scottish" <?php echo set_select('na2', 'scottish'); ?> >Scottish</option>
													  <option value="senegalese" <?php echo set_select('na2', 'senegalese'); ?> >Senegalese</option>
													  <option value="serbian" <?php echo set_select('na2', 'serbian'); ?> >Serbian</option>
													  <option value="seychellois" <?php echo set_select('na2', 'seychellois'); ?> >Seychellois</option>
													  <option value="sierra leonean" <?php echo set_select('na2', 'sierra leonean'); ?> >Sierra Leonean</option>
													  <option value="singaporean" <?php echo set_select('na2', 'singaporean'); ?> >Singaporean</option>
													  <option value="slovakian" <?php echo set_select('na2', 'slovakian'); ?> >Slovakian</option>
													  <option value="slovenian" <?php echo set_select('na2', 'slovenian'); ?> >Slovenian</option>
													  <option value="solomon islander" <?php echo set_select('na2', 'solomon islander'); ?> >Solomon Islander</option>
													  <option value="somali" <?php echo set_select('na2', 'somali'); ?> >Somali</option>
													  <option value="south african" <?php echo set_select('na2', 'south african'); ?> >South African</option>
													  <option value="south korean" <?php echo set_select('na2', 'south korean'); ?> >South Korean</option>
													  <option value="spanish" <?php echo set_select('na2', 'spanish'); ?> >Spanish</option>
													  <option value="sri lankan" <?php echo set_select('na2', 'sri lankan'); ?> >Sri Lankan</option>
													  <option value="sudanese" <?php echo set_select('na2', 'sudanese'); ?> >Sudanese</option>
													  <option value="surinamer" <?php echo set_select('na2', 'surinamer'); ?> >Surinamer</option>
													  <option value="swazi" <?php echo set_select('na2', 'swazi'); ?> >Swazi</option>
													  <option value="swedish" <?php echo set_select('na2', 'swedish'); ?> >Swedish</option>
													  <option value="swiss" <?php echo set_select('na2', 'swiss'); ?> >Swiss</option>
													  <option value="syrian" <?php echo set_select('na2', 'syrian'); ?> >Syrian</option>
													  <option value="taiwanese" <?php echo set_select('na2', 'taiwanese'); ?> >Taiwanese</option>
													  <option value="tajik" <?php echo set_select('na2', 'tajik'); ?> >Tajik</option>
													  <option value="tanzanian" <?php echo set_select('na2', 'tanzanian'); ?> >Tanzanian</option>
													  <option value="thai" <?php echo set_select('na2', 'thai'); ?> >Thai</option>
													  <option value="togolese" <?php echo set_select('na2', 'togolese'); ?> >Togolese</option>
													  <option value="tongan" <?php echo set_select('na2', 'tongan'); ?> >Tongan</option>
													  <option value="trinidadian" <?php echo set_select('na2', 'trinidadian'); ?> >Trinidadian</option>
													  <option value="tobagonian" <?php echo set_select('na2', 'tobagonian'); ?> >Tobagonian</option>
													  <option value="tunisian" <?php echo set_select('na2', 'tunisian'); ?> >Tunisian</option>
													  <option value="turkish" <?php echo set_select('na2', 'turkish'); ?> >Turkish</option>
													  <option value="tuvaluan" <?php echo set_select('na2', 'tuvaluan'); ?> >Tuvaluan</option>
													  <option value="ugandan" <?php echo set_select('na2', 'ugandan'); ?> >Ugandan</option>
													  <option value="ukrainian" <?php echo set_select('na2', 'ukrainian'); ?> >Ukrainian</option>
													  <option value="uruguayan" <?php echo set_select('na2', 'uruguayan'); ?> >Uruguayan</option>
													  <option value="uzbekistani" <?php echo set_select('na2', 'uzbekistani'); ?> >Uzbekistani</option>
													  <option value="venezuelan" <?php echo set_select('na2', 'venezuelan'); ?> >Venezuelan</option>
													  <option value="vietnamese" <?php echo set_select('na2', 'vietnamese'); ?> >Vietnamese</option>
													  <option value="welsh" <?php echo set_select('na2', 'welsh'); ?> >Welsh</option>
													  <option value="yemenite" <?php echo set_select('na2', 'yemenite'); ?> >Yemenite</option>
													  <option value="zambian" <?php echo set_select('na2', 'zambian'); ?> >Zambian</option>
													  <option value="zimbabwean" <?php echo set_select('na2', 'zimbabwean'); ?>>Zimbabwean</option>
													</select>
												</div>
												<div class="col-md-3"><h6><?php echo form_error('na3'); ?></h6>
													<select class="form-control input-sm" name="na3">
													  <option value="" <?php echo set_select('na3', '', TRUE); ?> >Nationality (3)</option>
													  <option value="afghan" <?php echo set_select('na3', 'afghan'); ?> >Afghan</option>
													  <option value="albanian" <?php echo set_select('na3', 'albanian'); ?> >Albanian</option>
													  <option value="algerian" <?php echo set_select('na3', 'algerian'); ?> >Algerian</option>
													  <option value="american" <?php echo set_select('na3', 'american'); ?> >American</option>
													  <option value="andorran" <?php echo set_select('na3', 'andorran'); ?> >Andorran</option>
													  <option value="angolan" <?php echo set_select('na3', 'angolan'); ?> >Angolan</option>
													  <option value="antiguans" <?php echo set_select('na3', 'antiguans'); ?> >Antiguans</option>
													  <option value="argentinean" <?php echo set_select('na3', 'argentinean'); ?> >Argentinean</option>
													  <option value="armenian" <?php echo set_select('na3', 'armenian'); ?> >Armenian</option>
													  <option value="australian" <?php echo set_select('na3', 'australian'); ?> >Australian</option>
													  <option value="austrian" <?php echo set_select('na3', 'austrian'); ?> >Austrian</option>
													  <option value="azerbaijani" <?php echo set_select('na3', 'azerbaijani'); ?> >Azerbaijani</option>
													  <option value="bahamian" <?php echo set_select('na3', 'bahamian'); ?> >Bahamian</option>
													  <option value="bahraini" <?php echo set_select('na3', 'bahraini'); ?> >Bahraini</option>
													  <option value="bangladeshi" <?php echo set_select('na3', 'bangladeshi'); ?> >Bangladeshi</option>
													  <option value="barbadian" <?php echo set_select('na3', 'barbadian'); ?> >Barbadian</option>
													  <option value="barbudans" <?php echo set_select('na3', 'barbudans'); ?> >Barbudans</option>
													  <option value="batswana" <?php echo set_select('na3', 'batswana'); ?> >Batswana</option>
													  <option value="belarusian" <?php echo set_select('na3', 'belarusian'); ?> >Belarusian</option>
													  <option value="belgian" <?php echo set_select('na3', 'belgian'); ?> >Belgian</option>
													  <option value="belizean" <?php echo set_select('na3', 'belizean'); ?> >Belizean</option>
													  <option value="beninese" <?php echo set_select('na3', 'beninese'); ?> >Beninese</option>
													  <option value="bhutanese" <?php echo set_select('na3', 'bhutanese'); ?> >Bhutanese</option>
													  <option value="bolivian" <?php echo set_select('na3', 'bolivian'); ?> >Bolivian</option>
													  <option value="bosnian" <?php echo set_select('na3', 'bosnian'); ?> >Bosnian</option>
													  <option value="brazilian" <?php echo set_select('na3', 'brazilian'); ?> >Brazilian</option>
													  <option value="british" <?php echo set_select('na3', 'british'); ?> >British</option>
													  <option value="bruneian" <?php echo set_select('na3', 'bruneian'); ?> >Bruneian</option>
													  <option value="bulgarian" <?php echo set_select('na3', 'bulgarian'); ?> >Bulgarian</option>
													  <option value="burkinabe" <?php echo set_select('na3', 'burkinabe'); ?> >Burkinabe</option>
													  <option value="burmese" <?php echo set_select('na3', 'burmese'); ?> >Burmese</option>
													  <option value="burundian" <?php echo set_select('na3', 'burundian'); ?> >Burundian</option>
													  <option value="cambodian" <?php echo set_select('na3', 'cambodian'); ?> >Cambodian</option>
													  <option value="cameroonian" <?php echo set_select('na3', 'cameroonian'); ?> >Cameroonian</option>
													  <option value="canadian" <?php echo set_select('na3', 'canadian'); ?> >Canadian</option>
													  <option value="cape verdean" <?php echo set_select('na3', 'cape verdean'); ?> >Cape Verdean</option>
													  <option value="central african" <?php echo set_select('na3', 'central african'); ?> >Central African</option>
													  <option value="chadian" <?php echo set_select('na3', 'chadian'); ?> >Chadian</option>
													  <option value="chilean" <?php echo set_select('na3', 'chilean'); ?> >Chilean</option>
													  <option value="chinese" <?php echo set_select('na3', 'chinese'); ?> >Chinese</option>
													  <option value="colombian" <?php echo set_select('na3', 'colombian'); ?> >Colombian</option>
													  <option value="comoran" <?php echo set_select('na3', 'comoran'); ?> >Comoran</option>
													  <option value="congolese" <?php echo set_select('na3', 'congolese'); ?> >Congolese</option>
													  <option value="costa rican" <?php echo set_select('na3', 'costa rican'); ?> >Costa Rican</option>
													  <option value="croatian" <?php echo set_select('na3', 'croatian'); ?> >Croatian</option>
													  <option value="cuban" <?php echo set_select('na3', 'cuban'); ?> >Cuban</option>
													  <option value="cypriot" <?php echo set_select('na3', 'cypriot'); ?> >Cypriot</option>
													  <option value="czech" <?php echo set_select('na3', 'czech'); ?> >Czech</option>
													  <option value="danish" <?php echo set_select('na3', 'danish'); ?> >Danish</option>
													  <option value="djibouti" <?php echo set_select('na3', 'djibouti'); ?> >Djibouti</option>
													  <option value="dominican" <?php echo set_select('na3', 'dominican'); ?> >Dominican</option>
													  <option value="dutch" <?php echo set_select('na3', 'dutch'); ?> >Dutch</option>
													  <option value="east timorese" <?php echo set_select('na3', 'east timorese'); ?> >East Timorese</option>
													  <option value="ecuadorean" <?php echo set_select('na3', 'ecuadorean'); ?> >Ecuadorean</option>
													  <option value="egyptian" <?php echo set_select('na3', 'egyptian'); ?> >Egyptian</option>
													  <option value="emirian" <?php echo set_select('na3', 'emirian'); ?> >Emirian</option>
													  <option value="equatorial guinean" <?php echo set_select('na3', 'equatorial guinean'); ?> >Equatorial Guinean</option>
													  <option value="eritrean" <?php echo set_select('na3', 'eritrean'); ?> >Eritrean</option>
													  <option value="estonian" <?php echo set_select('na3', 'estonian'); ?> >Estonian</option>
													  <option value="ethiopian" <?php echo set_select('na3', 'ethiopian'); ?> >Ethiopian</option>
													  <option value="fijian" <?php echo set_select('na3', 'fijian'); ?> >Fijian</option>
													  <option value="filipino" <?php echo set_select('na3', 'filipino'); ?> >Filipino</option>
													  <option value="finnish" <?php echo set_select('na3', 'finnish'); ?> >Finnish</option>
													  <option value="french" <?php echo set_select('na3', 'french'); ?> >French</option>
													  <option value="gabonese" <?php echo set_select('na3', 'gabonese'); ?> >Gabonese</option>
													  <option value="gambian" <?php echo set_select('na3', 'gambian'); ?> >Gambian</option>
													  <option value="georgian" <?php echo set_select('na3', 'georgian'); ?> >Georgian</option>
													  <option value="german" <?php echo set_select('na3', 'german'); ?> >German</option>
													  <option value="ghanaian" <?php echo set_select('na3', 'ghanaian'); ?> >Ghanaian</option>
													  <option value="greek" <?php echo set_select('na3', 'greek'); ?> >Greek</option>
													  <option value="grenadian" <?php echo set_select('na3', 'grenadian'); ?> >Grenadian</option>
													  <option value="guatemalan" <?php echo set_select('na3', 'guatemalan'); ?> >Guatemalan</option>
													  <option value="guinea-bissauan" <?php echo set_select('na3', 'guinea-bissauan'); ?> >Guinea-Bissauan</option>
													  <option value="guinean" <?php echo set_select('na3', 'guinean'); ?> >Guinean</option>
													  <option value="guyanese" <?php echo set_select('na3', 'guyanese'); ?> >Guyanese</option>
													  <option value="haitian" <?php echo set_select('na3', 'haitian'); ?> >Haitian</option>
													  <option value="herzegovinian" <?php echo set_select('na3', 'herzegovinian'); ?> >Herzegovinian</option>
													  <option value="honduran" <?php echo set_select('na3', 'honduran'); ?> >Honduran</option>
													  <option value="hungarian" <?php echo set_select('na3', 'hungarian'); ?> >Hungarian</option>
													  <option value="icelander" <?php echo set_select('na3', 'icelander'); ?> >Icelander</option>
													  <option value="indian" <?php echo set_select('na3', 'indian'); ?> >Indian</option>
													  <option value="indonesian" <?php echo set_select('na3', 'indonesian'); ?> >Indonesian</option>
													  <option value="iranian" <?php echo set_select('na3', 'iranian'); ?> >Iranian</option>
													  <option value="iraqi" <?php echo set_select('na3', 'iraqi'); ?> >Iraqi</option>
													  <option value="irish" <?php echo set_select('na3', 'irish'); ?> >Irish</option>
													  <option value="israeli" <?php echo set_select('na3', 'israeli'); ?> >Israeli</option>
													  <option value="italian" <?php echo set_select('na3', 'italian'); ?> >Italian</option>
													  <option value="ivorian" <?php echo set_select('na3', 'ivorian'); ?> >Ivorian</option>
													  <option value="jamaican" <?php echo set_select('na3', 'jamaican'); ?> >Jamaican</option>
													  <option value="japanese" <?php echo set_select('na3', 'japanese'); ?> >Japanese</option>
													  <option value="jordanian" <?php echo set_select('na3', 'jordanian'); ?> >Jordanian</option>
													  <option value="kazakhstani" <?php echo set_select('na3', 'kazakhstani'); ?> >Kazakhstani</option>
													  <option value="kenyan" <?php echo set_select('na3', 'kenyan'); ?> >Kenyan</option>
													  <option value="kuwaiti" <?php echo set_select('na3', 'kuwaiti'); ?> >Kuwaiti</option>
													  <option value="kyrgyz" <?php echo set_select('na3', 'kyrgyz'); ?> >Kyrgyz</option>
													  <option value="laotian" <?php echo set_select('na3', 'laotian'); ?> >Laotian</option>
													  <option value="latvian" <?php echo set_select('na3', 'latvian'); ?> >Latvian</option>
													  <option value="lebanese" <?php echo set_select('na3', 'lebanese'); ?> >Lebanese</option>
													  <option value="liberian" <?php echo set_select('na3', 'liberian'); ?> >Liberian</option>
													  <option value="libyan" <?php echo set_select('na3', 'libyan'); ?> >Libyan</option>
													  <option value="liechtensteiner" <?php echo set_select('na3', 'liechtensteiner'); ?> >Liechtensteiner</option>
													  <option value="lithuanian" <?php echo set_select('na3', 'lithuanian'); ?> >Lithuanian</option>
													  <option value="luxembourger" <?php echo set_select('na3', 'luxembourger'); ?> >Luxembourger</option>
													  <option value="macedonian" <?php echo set_select('na3', 'macedonian'); ?> >Macedonian</option>
													  <option value="malagasy" <?php echo set_select('na3', 'malagasy'); ?> >Malagasy</option>
													  <option value="malawian" <?php echo set_select('na3', 'malawian'); ?> >Malawian</option>
													  <option value="malaysian" <?php echo set_select('na3', 'malaysian'); ?> >Malaysian</option>
													  <option value="maldivan" <?php echo set_select('na3', 'maldivan'); ?> >Maldivan</option>
													  <option value="malian" <?php echo set_select('na3', 'malian'); ?> >Malian</option>
													  <option value="maltese" <?php echo set_select('na3', 'maltese'); ?> >Maltese</option>
													  <option value="marshallese" <?php echo set_select('na3', 'marshallese'); ?> >Marshallese</option>
													  <option value="mauritanian" <?php echo set_select('na3', 'mauritanian'); ?> >Mauritanian</option>
													  <option value="mauritian" <?php echo set_select('na3', 'mauritian'); ?> >Mauritian</option>
													  <option value="mexican" <?php echo set_select('na3', 'mexican'); ?> >Mexican</option>
													  <option value="micronesian" <?php echo set_select('na3', 'micronesian'); ?> >Micronesian</option>
													  <option value="moldovan" <?php echo set_select('na3', 'moldovan'); ?> >Moldovan</option>
													  <option value="monacan" <?php echo set_select('na3', 'monacan'); ?> >Monacan</option>
													  <option value="mongolian" <?php echo set_select('na3', 'mongolian'); ?> >Mongolian</option>
													  <option value="moroccan" <?php echo set_select('na3', 'moroccan'); ?> >Moroccan</option>
													  <option value="mosotho" <?php echo set_select('na3', 'mosotho'); ?> >Mosotho</option>
													  <option value="motswana" <?php echo set_select('na3', 'motswana'); ?> >Motswana</option>
													  <option value="mozambican" <?php echo set_select('na3', 'mozambican'); ?> >Mozambican</option>
													  <option value="namibian" <?php echo set_select('na3', 'namibian'); ?> >Namibian</option>
													  <option value="nauruan" <?php echo set_select('na3', 'nauruan'); ?> >Nauruan</option>
													  <option value="nepalese" <?php echo set_select('na3', 'nepalese'); ?> >Nepalese</option>
													  <option value="new zealander" <?php echo set_select('na3', 'new zealander'); ?> >New Zealander</option>
													  <option value="ni-vanuatu" <?php echo set_select('na3', 'ni-vanuatu'); ?> >Ni-Vanuatu</option>
													  <option value="nicaraguan" <?php echo set_select('na3', 'nicaraguan'); ?> >Nicaraguan</option>
													  <option value="nigerien" <?php echo set_select('na3', 'nigerien'); ?> >Nigerien</option>
													  <option value="north korean" <?php echo set_select('na3', 'north korean'); ?> >North Korean</option>
													  <option value="northern irish" <?php echo set_select('na3', 'northern irish'); ?> >Northern Irish</option>
													  <option value="norwegian" <?php echo set_select('na3', 'norwegian'); ?> >Norwegian</option>
													  <option value="omani" <?php echo set_select('na3', 'omani'); ?> >Omani</option>
													  <option value="pakistani" <?php echo set_select('na3', 'pakistani'); ?> >Pakistani</option>
													  <option value="palauan" <?php echo set_select('na3', 'palauan'); ?> >Palauan</option>
													  <option value="panamanian" <?php echo set_select('na3', 'panamanian'); ?> >Panamanian</option>
													  <option value="papua new guinean" <?php echo set_select('na3', 'papua new guinean'); ?> >Papua New Guinean</option>
													  <option value="paraguayan" <?php echo set_select('na3', 'paraguayan'); ?> >Paraguayan</option>
													  <option value="peruvian" <?php echo set_select('na3', 'peruvian'); ?> >Peruvian</option>
													  <option value="polish" <?php echo set_select('na3', 'polish'); ?> >Polish</option>
													  <option value="portuguese" <?php echo set_select('na3', 'portuguese'); ?> >Portuguese</option>
													  <option value="qatari" <?php echo set_select('na3', 'qatari'); ?> >Qatari</option>
													  <option value="romanian" <?php echo set_select('na3', 'romanian'); ?> >Romanian</option>
													  <option value="russian" <?php echo set_select('na3', 'russian'); ?> >Russian</option>
													  <option value="rwandan" <?php echo set_select('na3', 'rwandan'); ?> >Rwandan</option>
													  <option value="saint lucian" <?php echo set_select('na3', 'saint lucian'); ?> >Saint Lucian</option>
													  <option value="salvadoran" <?php echo set_select('na3', 'salvadoran'); ?> >Salvadoran</option>
													  <option value="samoan" <?php echo set_select('na3', 'samoan'); ?> >Samoan</option>
													  <option value="san marinese" <?php echo set_select('na3', 'san marinese'); ?> >San Marinese</option>
													  <option value="sao tomean" <?php echo set_select('na3', 'sao tomean'); ?> >Sao Tomean</option>
													  <option value="saudi" <?php echo set_select('na3', 'saudi'); ?> >Saudi</option>
													  <option value="scottish" <?php echo set_select('na3', 'scottish'); ?> >Scottish</option>
													  <option value="senegalese" <?php echo set_select('na3', 'senegalese'); ?> >Senegalese</option>
													  <option value="serbian" <?php echo set_select('na3', 'serbian'); ?> >Serbian</option>
													  <option value="seychellois" <?php echo set_select('na3', 'seychellois'); ?> >Seychellois</option>
													  <option value="sierra leonean" <?php echo set_select('na3', 'sierra leonean'); ?> >Sierra Leonean</option>
													  <option value="singaporean" <?php echo set_select('na3', 'singaporean'); ?> >Singaporean</option>
													  <option value="slovakian" <?php echo set_select('na3', 'slovakian'); ?> >Slovakian</option>
													  <option value="slovenian" <?php echo set_select('na3', 'slovenian'); ?> >Slovenian</option>
													  <option value="solomon islander" <?php echo set_select('na3', 'solomon islander'); ?> >Solomon Islander</option>
													  <option value="somali" <?php echo set_select('na3', 'somali'); ?> >Somali</option>
													  <option value="south african" <?php echo set_select('na3', 'south african'); ?> >South African</option>
													  <option value="south korean" <?php echo set_select('na3', 'south korean'); ?> >South Korean</option>
													  <option value="spanish" <?php echo set_select('na3', 'spanish'); ?> >Spanish</option>
													  <option value="sri lankan" <?php echo set_select('na3', 'sri lankan'); ?> >Sri Lankan</option>
													  <option value="sudanese" <?php echo set_select('na3', 'sudanese'); ?> >Sudanese</option>
													  <option value="surinamer" <?php echo set_select('na3', 'surinamer'); ?> >Surinamer</option>
													  <option value="swazi" <?php echo set_select('na3', 'swazi'); ?> >Swazi</option>
													  <option value="swedish" <?php echo set_select('na3', 'swedish'); ?> >Swedish</option>
													  <option value="swiss" <?php echo set_select('na3', 'swiss'); ?> >Swiss</option>
													  <option value="syrian" <?php echo set_select('na3', 'syrian'); ?> >Syrian</option>
													  <option value="taiwanese" <?php echo set_select('na3', 'taiwanese'); ?> >Taiwanese</option>
													  <option value="tajik" <?php echo set_select('na3', 'tajik'); ?> >Tajik</option>
													  <option value="tanzanian" <?php echo set_select('na3', 'tanzanian'); ?> >Tanzanian</option>
													  <option value="thai" <?php echo set_select('na3', 'thai'); ?> >Thai</option>
													  <option value="togolese" <?php echo set_select('na3', 'togolese'); ?> >Togolese</option>
													  <option value="tongan" <?php echo set_select('na3', 'tongan'); ?> >Tongan</option>
													  <option value="trinidadian" <?php echo set_select('na3', 'trinidadian'); ?> >Trinidadian</option>
													  <option value="tobagonian" <?php echo set_select('na3', 'tobagonian'); ?> >Tobagonian</option>
													  <option value="tunisian" <?php echo set_select('na3', 'tunisian'); ?> >Tunisian</option>
													  <option value="turkish" <?php echo set_select('na3', 'turkish'); ?> >Turkish</option>
													  <option value="tuvaluan" <?php echo set_select('na3', 'tuvaluan'); ?> >Tuvaluan</option>
													  <option value="ugandan" <?php echo set_select('na3', 'ugandan'); ?> >Ugandan</option>
													  <option value="ukrainian" <?php echo set_select('na3', 'ukrainian'); ?> >Ukrainian</option>
													  <option value="uruguayan" <?php echo set_select('na3', 'uruguayan'); ?> >Uruguayan</option>
													  <option value="uzbekistani" <?php echo set_select('na3', 'uzbekistani'); ?> >Uzbekistani</option>
													  <option value="venezuelan" <?php echo set_select('na3', 'venezuelan'); ?> >Venezuelan</option>
													  <option value="vietnamese" <?php echo set_select('na3', 'vietnamese'); ?> >Vietnamese</option>
													  <option value="welsh" <?php echo set_select('na3', 'welsh'); ?> >Welsh</option>
													  <option value="yemenite" <?php echo set_select('na3', 'yemenite'); ?> >Yemenite</option>
													  <option value="zambian" <?php echo set_select('na3', 'zambian'); ?> >Zambian</option>
													  <option value="zimbabwean" <?php echo set_select('na3', 'zimbabwean'); ?>>Zimbabwean</option>
													</select>
												</div>
												<div class="col-md-3"><h6><?php echo form_error('na4'); ?></h6>
													<select class="form-control input-sm" name="na4">
													  <option value="" <?php echo set_select('na4', '', TRUE); ?> >Nationality (4)</option>
													  <option value="afghan" <?php echo set_select('na4', 'afghan'); ?> >Afghan</option>
													  <option value="albanian" <?php echo set_select('na4', 'albanian'); ?> >Albanian</option>
													  <option value="algerian" <?php echo set_select('na4', 'algerian'); ?> >Algerian</option>
													  <option value="american" <?php echo set_select('na4', 'american'); ?> >American</option>
													  <option value="andorran" <?php echo set_select('na4', 'andorran'); ?> >Andorran</option>
													  <option value="angolan" <?php echo set_select('na4', 'angolan'); ?> >Angolan</option>
													  <option value="antiguans" <?php echo set_select('na4', 'antiguans'); ?> >Antiguans</option>
													  <option value="argentinean" <?php echo set_select('na4', 'argentinean'); ?> >Argentinean</option>
													  <option value="armenian" <?php echo set_select('na4', 'armenian'); ?> >Armenian</option>
													  <option value="australian" <?php echo set_select('na4', 'australian'); ?> >Australian</option>
													  <option value="austrian" <?php echo set_select('na4', 'austrian'); ?> >Austrian</option>
													  <option value="azerbaijani" <?php echo set_select('na4', 'azerbaijani'); ?> >Azerbaijani</option>
													  <option value="bahamian" <?php echo set_select('na4', 'bahamian'); ?> >Bahamian</option>
													  <option value="bahraini" <?php echo set_select('na4', 'bahraini'); ?> >Bahraini</option>
													  <option value="bangladeshi" <?php echo set_select('na4', 'bangladeshi'); ?> >Bangladeshi</option>
													  <option value="barbadian" <?php echo set_select('na4', 'barbadian'); ?> >Barbadian</option>
													  <option value="barbudans" <?php echo set_select('na4', 'barbudans'); ?> >Barbudans</option>
													  <option value="batswana" <?php echo set_select('na4', 'batswana'); ?> >Batswana</option>
													  <option value="belarusian" <?php echo set_select('na4', 'belarusian'); ?> >Belarusian</option>
													  <option value="belgian" <?php echo set_select('na4', 'belgian'); ?> >Belgian</option>
													  <option value="belizean" <?php echo set_select('na4', 'belizean'); ?> >Belizean</option>
													  <option value="beninese" <?php echo set_select('na4', 'beninese'); ?> >Beninese</option>
													  <option value="bhutanese" <?php echo set_select('na4', 'bhutanese'); ?> >Bhutanese</option>
													  <option value="bolivian" <?php echo set_select('na4', 'bolivian'); ?> >Bolivian</option>
													  <option value="bosnian" <?php echo set_select('na4', 'bosnian'); ?> >Bosnian</option>
													  <option value="brazilian" <?php echo set_select('na4', 'brazilian'); ?> >Brazilian</option>
													  <option value="british" <?php echo set_select('na4', 'british'); ?> >British</option>
													  <option value="bruneian" <?php echo set_select('na4', 'bruneian'); ?> >Bruneian</option>
													  <option value="bulgarian" <?php echo set_select('na4', 'bulgarian'); ?> >Bulgarian</option>
													  <option value="burkinabe" <?php echo set_select('na4', 'burkinabe'); ?> >Burkinabe</option>
													  <option value="burmese" <?php echo set_select('na4', 'burmese'); ?> >Burmese</option>
													  <option value="burundian" <?php echo set_select('na4', 'burundian'); ?> >Burundian</option>
													  <option value="cambodian" <?php echo set_select('na4', 'cambodian'); ?> >Cambodian</option>
													  <option value="cameroonian" <?php echo set_select('na4', 'cameroonian'); ?> >Cameroonian</option>
													  <option value="canadian" <?php echo set_select('na4', 'canadian'); ?> >Canadian</option>
													  <option value="cape verdean" <?php echo set_select('na4', 'cape verdean'); ?> >Cape Verdean</option>
													  <option value="central african" <?php echo set_select('na4', 'central african'); ?> >Central African</option>
													  <option value="chadian" <?php echo set_select('na4', 'chadian'); ?> >Chadian</option>
													  <option value="chilean" <?php echo set_select('na4', 'chilean'); ?> >Chilean</option>
													  <option value="chinese" <?php echo set_select('na4', 'chinese'); ?> >Chinese</option>
													  <option value="colombian" <?php echo set_select('na4', 'colombian'); ?> >Colombian</option>
													  <option value="comoran" <?php echo set_select('na4', 'comoran'); ?> >Comoran</option>
													  <option value="congolese" <?php echo set_select('na4', 'congolese'); ?> >Congolese</option>
													  <option value="costa rican" <?php echo set_select('na4', 'costa rican'); ?> >Costa Rican</option>
													  <option value="croatian" <?php echo set_select('na4', 'croatian'); ?> >Croatian</option>
													  <option value="cuban" <?php echo set_select('na4', 'cuban'); ?> >Cuban</option>
													  <option value="cypriot" <?php echo set_select('na4', 'cypriot'); ?> >Cypriot</option>
													  <option value="czech" <?php echo set_select('na4', 'czech'); ?> >Czech</option>
													  <option value="danish" <?php echo set_select('na4', 'danish'); ?> >Danish</option>
													  <option value="djibouti" <?php echo set_select('na4', 'djibouti'); ?> >Djibouti</option>
													  <option value="dominican" <?php echo set_select('na4', 'dominican'); ?> >Dominican</option>
													  <option value="dutch" <?php echo set_select('na4', 'dutch'); ?> >Dutch</option>
													  <option value="east timorese" <?php echo set_select('na4', 'east timorese'); ?> >East Timorese</option>
													  <option value="ecuadorean" <?php echo set_select('na4', 'ecuadorean'); ?> >Ecuadorean</option>
													  <option value="egyptian" <?php echo set_select('na4', 'egyptian'); ?> >Egyptian</option>
													  <option value="emirian" <?php echo set_select('na4', 'emirian'); ?> >Emirian</option>
													  <option value="equatorial guinean" <?php echo set_select('na4', 'equatorial guinean'); ?> >Equatorial Guinean</option>
													  <option value="eritrean" <?php echo set_select('na4', 'eritrean'); ?> >Eritrean</option>
													  <option value="estonian" <?php echo set_select('na4', 'estonian'); ?> >Estonian</option>
													  <option value="ethiopian" <?php echo set_select('na4', 'ethiopian'); ?> >Ethiopian</option>
													  <option value="fijian" <?php echo set_select('na4', 'fijian'); ?> >Fijian</option>
													  <option value="filipino" <?php echo set_select('na4', 'filipino'); ?> >Filipino</option>
													  <option value="finnish" <?php echo set_select('na4', 'finnish'); ?> >Finnish</option>
													  <option value="french" <?php echo set_select('na4', 'french'); ?> >French</option>
													  <option value="gabonese" <?php echo set_select('na4', 'gabonese'); ?> >Gabonese</option>
													  <option value="gambian" <?php echo set_select('na4', 'gambian'); ?> >Gambian</option>
													  <option value="georgian" <?php echo set_select('na4', 'georgian'); ?> >Georgian</option>
													  <option value="german" <?php echo set_select('na4', 'german'); ?> >German</option>
													  <option value="ghanaian" <?php echo set_select('na4', 'ghanaian'); ?> >Ghanaian</option>
													  <option value="greek" <?php echo set_select('na4', 'greek'); ?> >Greek</option>
													  <option value="grenadian" <?php echo set_select('na4', 'grenadian'); ?> >Grenadian</option>
													  <option value="guatemalan" <?php echo set_select('na4', 'guatemalan'); ?> >Guatemalan</option>
													  <option value="guinea-bissauan" <?php echo set_select('na4', 'guinea-bissauan'); ?> >Guinea-Bissauan</option>
													  <option value="guinean" <?php echo set_select('na4', 'guinean'); ?> >Guinean</option>
													  <option value="guyanese" <?php echo set_select('na4', 'guyanese'); ?> >Guyanese</option>
													  <option value="haitian" <?php echo set_select('na4', 'haitian'); ?> >Haitian</option>
													  <option value="herzegovinian" <?php echo set_select('na4', 'herzegovinian'); ?> >Herzegovinian</option>
													  <option value="honduran" <?php echo set_select('na4', 'honduran'); ?> >Honduran</option>
													  <option value="hungarian" <?php echo set_select('na4', 'hungarian'); ?> >Hungarian</option>
													  <option value="icelander" <?php echo set_select('na4', 'icelander'); ?> >Icelander</option>
													  <option value="indian" <?php echo set_select('na4', 'indian'); ?> >Indian</option>
													  <option value="indonesian" <?php echo set_select('na4', 'indonesian'); ?> >Indonesian</option>
													  <option value="iranian" <?php echo set_select('na4', 'iranian'); ?> >Iranian</option>
													  <option value="iraqi" <?php echo set_select('na4', 'iraqi'); ?> >Iraqi</option>
													  <option value="irish" <?php echo set_select('na4', 'irish'); ?> >Irish</option>
													  <option value="israeli" <?php echo set_select('na4', 'israeli'); ?> >Israeli</option>
													  <option value="italian" <?php echo set_select('na4', 'italian'); ?> >Italian</option>
													  <option value="ivorian" <?php echo set_select('na4', 'ivorian'); ?> >Ivorian</option>
													  <option value="jamaican" <?php echo set_select('na4', 'jamaican'); ?> >Jamaican</option>
													  <option value="japanese" <?php echo set_select('na4', 'japanese'); ?> >Japanese</option>
													  <option value="jordanian" <?php echo set_select('na4', 'jordanian'); ?> >Jordanian</option>
													  <option value="kazakhstani" <?php echo set_select('na4', 'kazakhstani'); ?> >Kazakhstani</option>
													  <option value="kenyan" <?php echo set_select('na4', 'kenyan'); ?> >Kenyan</option>
													  <option value="kuwaiti" <?php echo set_select('na4', 'kuwaiti'); ?> >Kuwaiti</option>
													  <option value="kyrgyz" <?php echo set_select('na4', 'kyrgyz'); ?> >Kyrgyz</option>
													  <option value="laotian" <?php echo set_select('na4', 'laotian'); ?> >Laotian</option>
													  <option value="latvian" <?php echo set_select('na4', 'latvian'); ?> >Latvian</option>
													  <option value="lebanese" <?php echo set_select('na4', 'lebanese'); ?> >Lebanese</option>
													  <option value="liberian" <?php echo set_select('na4', 'liberian'); ?> >Liberian</option>
													  <option value="libyan" <?php echo set_select('na4', 'libyan'); ?> >Libyan</option>
													  <option value="liechtensteiner" <?php echo set_select('na4', 'liechtensteiner'); ?> >Liechtensteiner</option>
													  <option value="lithuanian" <?php echo set_select('na4', 'lithuanian'); ?> >Lithuanian</option>
													  <option value="luxembourger" <?php echo set_select('na4', 'luxembourger'); ?> >Luxembourger</option>
													  <option value="macedonian" <?php echo set_select('na4', 'macedonian'); ?> >Macedonian</option>
													  <option value="malagasy" <?php echo set_select('na4', 'malagasy'); ?> >Malagasy</option>
													  <option value="malawian" <?php echo set_select('na4', 'malawian'); ?> >Malawian</option>
													  <option value="malaysian" <?php echo set_select('na4', 'malaysian'); ?> >Malaysian</option>
													  <option value="maldivan" <?php echo set_select('na4', 'maldivan'); ?> >Maldivan</option>
													  <option value="malian" <?php echo set_select('na4', 'malian'); ?> >Malian</option>
													  <option value="maltese" <?php echo set_select('na4', 'maltese'); ?> >Maltese</option>
													  <option value="marshallese" <?php echo set_select('na4', 'marshallese'); ?> >Marshallese</option>
													  <option value="mauritanian" <?php echo set_select('na4', 'mauritanian'); ?> >Mauritanian</option>
													  <option value="mauritian" <?php echo set_select('na4', 'mauritian'); ?> >Mauritian</option>
													  <option value="mexican" <?php echo set_select('na4', 'mexican'); ?> >Mexican</option>
													  <option value="micronesian" <?php echo set_select('na4', 'micronesian'); ?> >Micronesian</option>
													  <option value="moldovan" <?php echo set_select('na4', 'moldovan'); ?> >Moldovan</option>
													  <option value="monacan" <?php echo set_select('na4', 'monacan'); ?> >Monacan</option>
													  <option value="mongolian" <?php echo set_select('na4', 'mongolian'); ?> >Mongolian</option>
													  <option value="moroccan" <?php echo set_select('na4', 'moroccan'); ?> >Moroccan</option>
													  <option value="mosotho" <?php echo set_select('na4', 'mosotho'); ?> >Mosotho</option>
													  <option value="motswana" <?php echo set_select('na4', 'motswana'); ?> >Motswana</option>
													  <option value="mozambican" <?php echo set_select('na4', 'mozambican'); ?> >Mozambican</option>
													  <option value="namibian" <?php echo set_select('na4', 'namibian'); ?> >Namibian</option>
													  <option value="nauruan" <?php echo set_select('na4', 'nauruan'); ?> >Nauruan</option>
													  <option value="nepalese" <?php echo set_select('na4', 'nepalese'); ?> >Nepalese</option>
													  <option value="new zealander" <?php echo set_select('na4', 'new zealander'); ?> >New Zealander</option>
													  <option value="ni-vanuatu" <?php echo set_select('na4', 'ni-vanuatu'); ?> >Ni-Vanuatu</option>
													  <option value="nicaraguan" <?php echo set_select('na4', 'nicaraguan'); ?> >Nicaraguan</option>
													  <option value="nigerien" <?php echo set_select('na4', 'nigerien'); ?> >Nigerien</option>
													  <option value="north korean" <?php echo set_select('na4', 'north korean'); ?> >North Korean</option>
													  <option value="northern irish" <?php echo set_select('na4', 'northern irish'); ?> >Northern Irish</option>
													  <option value="norwegian" <?php echo set_select('na4', 'norwegian'); ?> >Norwegian</option>
													  <option value="omani" <?php echo set_select('na4', 'omani'); ?> >Omani</option>
													  <option value="pakistani" <?php echo set_select('na4', 'pakistani'); ?> >Pakistani</option>
													  <option value="palauan" <?php echo set_select('na4', 'palauan'); ?> >Palauan</option>
													  <option value="panamanian" <?php echo set_select('na4', 'panamanian'); ?> >Panamanian</option>
													  <option value="papua new guinean" <?php echo set_select('na4', 'papua new guinean'); ?> >Papua New Guinean</option>
													  <option value="paraguayan" <?php echo set_select('na4', 'paraguayan'); ?> >Paraguayan</option>
													  <option value="peruvian" <?php echo set_select('na4', 'peruvian'); ?> >Peruvian</option>
													  <option value="polish" <?php echo set_select('na4', 'polish'); ?> >Polish</option>
													  <option value="portuguese" <?php echo set_select('na4', 'portuguese'); ?> >Portuguese</option>
													  <option value="qatari" <?php echo set_select('na4', 'qatari'); ?> >Qatari</option>
													  <option value="romanian" <?php echo set_select('na4', 'romanian'); ?> >Romanian</option>
													  <option value="russian" <?php echo set_select('na4', 'russian'); ?> >Russian</option>
													  <option value="rwandan" <?php echo set_select('na4', 'rwandan'); ?> >Rwandan</option>
													  <option value="saint lucian" <?php echo set_select('na4', 'saint lucian'); ?> >Saint Lucian</option>
													  <option value="salvadoran" <?php echo set_select('na4', 'salvadoran'); ?> >Salvadoran</option>
													  <option value="samoan" <?php echo set_select('na4', 'samoan'); ?> >Samoan</option>
													  <option value="san marinese" <?php echo set_select('na4', 'san marinese'); ?> >San Marinese</option>
													  <option value="sao tomean" <?php echo set_select('na4', 'sao tomean'); ?> >Sao Tomean</option>
													  <option value="saudi" <?php echo set_select('na4', 'saudi'); ?> >Saudi</option>
													  <option value="scottish" <?php echo set_select('na4', 'scottish'); ?> >Scottish</option>
													  <option value="senegalese" <?php echo set_select('na4', 'senegalese'); ?> >Senegalese</option>
													  <option value="serbian" <?php echo set_select('na4', 'serbian'); ?> >Serbian</option>
													  <option value="seychellois" <?php echo set_select('na4', 'seychellois'); ?> >Seychellois</option>
													  <option value="sierra leonean" <?php echo set_select('na4', 'sierra leonean'); ?> >Sierra Leonean</option>
													  <option value="singaporean" <?php echo set_select('na4', 'singaporean'); ?> >Singaporean</option>
													  <option value="slovakian" <?php echo set_select('na4', 'slovakian'); ?> >Slovakian</option>
													  <option value="slovenian" <?php echo set_select('na4', 'slovenian'); ?> >Slovenian</option>
													  <option value="solomon islander" <?php echo set_select('na4', 'solomon islander'); ?> >Solomon Islander</option>
													  <option value="somali" <?php echo set_select('na4', 'somali'); ?> >Somali</option>
													  <option value="south african" <?php echo set_select('na4', 'south african'); ?> >South African</option>
													  <option value="south korean" <?php echo set_select('na4', 'south korean'); ?> >South Korean</option>
													  <option value="spanish" <?php echo set_select('na4', 'spanish'); ?> >Spanish</option>
													  <option value="sri lankan" <?php echo set_select('na4', 'sri lankan'); ?> >Sri Lankan</option>
													  <option value="sudanese" <?php echo set_select('na4', 'sudanese'); ?> >Sudanese</option>
													  <option value="surinamer" <?php echo set_select('na4', 'surinamer'); ?> >Surinamer</option>
													  <option value="swazi" <?php echo set_select('na4', 'swazi'); ?> >Swazi</option>
													  <option value="swedish" <?php echo set_select('na4', 'swedish'); ?> >Swedish</option>
													  <option value="swiss" <?php echo set_select('na4', 'swiss'); ?> >Swiss</option>
													  <option value="syrian" <?php echo set_select('na4', 'syrian'); ?> >Syrian</option>
													  <option value="taiwanese" <?php echo set_select('na4', 'taiwanese'); ?> >Taiwanese</option>
													  <option value="tajik" <?php echo set_select('na4', 'tajik'); ?> >Tajik</option>
													  <option value="tanzanian" <?php echo set_select('na4', 'tanzanian'); ?> >Tanzanian</option>
													  <option value="thai" <?php echo set_select('na4', 'thai'); ?> >Thai</option>
													  <option value="togolese" <?php echo set_select('na4', 'togolese'); ?> >Togolese</option>
													  <option value="tongan" <?php echo set_select('na4', 'tongan'); ?> >Tongan</option>
													  <option value="trinidadian" <?php echo set_select('na4', 'trinidadian'); ?> >Trinidadian</option>
													  <option value="tobagonian" <?php echo set_select('na4', 'tobagonian'); ?> >Tobagonian</option>
													  <option value="tunisian" <?php echo set_select('na4', 'tunisian'); ?> >Tunisian</option>
													  <option value="turkish" <?php echo set_select('na4', 'turkish'); ?> >Turkish</option>
													  <option value="tuvaluan" <?php echo set_select('na4', 'tuvaluan'); ?> >Tuvaluan</option>
													  <option value="ugandan" <?php echo set_select('na4', 'ugandan'); ?> >Ugandan</option>
													  <option value="ukrainian" <?php echo set_select('na4', 'ukrainian'); ?> >Ukrainian</option>
													  <option value="uruguayan" <?php echo set_select('na4', 'uruguayan'); ?> >Uruguayan</option>
													  <option value="uzbekistani" <?php echo set_select('na4', 'uzbekistani'); ?> >Uzbekistani</option>
													  <option value="venezuelan" <?php echo set_select('na4', 'venezuelan'); ?> >Venezuelan</option>
													  <option value="vietnamese" <?php echo set_select('na4', 'vietnamese'); ?> >Vietnamese</option>
													  <option value="welsh" <?php echo set_select('na4', 'welsh'); ?> >Welsh</option>
													  <option value="yemenite" <?php echo set_select('na4', 'yemenite'); ?> >Yemenite</option>
													  <option value="zambian" <?php echo set_select('na4', 'zambian'); ?> >Zambian</option>
													  <option value="zimbabwean" <?php echo set_select('na4', 'zimbabwean'); ?>>Zimbabwean</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('ppn1'); ?></h6><input type="text" name="ppn1" value="<?php echo set_value('ppn1'); ?>" class="form-control input-sm" placeholder="Passport No.(1)"></div>
												<div class="col-md-3"><h6><?php echo form_error('ppn2'); ?></h6><input type="text" name="ppn2" value="<?php echo set_value('ppn2'); ?>" class="form-control input-sm" placeholder="Passport No.(2)"></div>
												<div class="col-md-3"><h6><?php echo form_error('ppn3'); ?></h6><input type="text" name="ppn3" value="<?php echo set_value('ppn3'); ?>" class="form-control input-sm" placeholder="Passport No.(3)"></div>
												<div class="col-md-3"><h6><?php echo form_error('ppn4'); ?></h6><input type="text" name="ppn4" value="<?php echo set_value('ppn4'); ?>" class="form-control input-sm" placeholder="Passport No.(4)"></div>
											</div>
										</div>																		
									</div>							
								</div>
							</div>
						<div class="widget">
							<div class="widget-header transparent">
							<h2><i class="fa fa-home"></i><strong> Owner</strong> Address 1</h2>
							<div class="additional-btn">								
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							</div>
							</div>
							<div class="widget-content padding">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('clist1'); ?></h6><input type="text" name="clist1" value="<?php echo set_value('clist1'); ?>" class="form-control input-sm" placeholder="Country"></div>
												<div class="col-md-3"><h6><?php echo form_error('city1'); ?></h6><input type="text" name="city1" value="<?php echo set_value('city1'); ?>" class="form-control input-sm" placeholder="City"></div>
												
											</div>
										</div>
										
										
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('add11'); ?></h6><input type="text" name="add11" value="<?php echo set_value('add11'); ?>" class="form-control input-sm" placeholder="Community"></div>
												<div class="col-md-3"><h6><?php echo form_error('add12'); ?></h6><input type="text" name="add12" value="<?php echo set_value('add12'); ?>" class="form-control input-sm" placeholder="Sub Community"></div>
												<div class="col-md-3"><h6><?php echo form_error('add13'); ?></h6><input type="text" name="add13" value="<?php echo set_value('add13'); ?>" class="form-control input-sm" placeholder="Street"></div>
											</div>
										</div>																	
									</div>							
								</div>
							</div>
						</div>
						<div class="widget">
							<div class="widget-header transparent">
							<h2><i class="fa fa-home"></i><strong> Owner</strong> Address 2</h2>
							<div class="additional-btn">								
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							</div>
							</div>
							<div class="widget-content padding">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('clist2'); ?></h6><input type="text" name="clist2" value="<?php echo set_value('clist2'); ?>" class="form-control input-sm" placeholder="Country"></div>
												<div class="col-md-3"><h6><?php echo form_error('city2'); ?></h6><input type="text" name="city2" value="<?php echo set_value('city2'); ?>" class="form-control input-sm" placeholder="City"></div>
												
											</div>
										</div>
										
										
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('add21'); ?></h6><input type="text" name="add21" value="<?php echo set_value('add21'); ?>" class="form-control input-sm" placeholder="Community"></div>
												<div class="col-md-3"><h6><?php echo form_error('add22'); ?></h6><input type="text" name="add22" value="<?php echo set_value('add22'); ?>" class="form-control input-sm" placeholder="Sub Community"></div>
												<div class="col-md-3"><h6><?php echo form_error('add23'); ?></h6><input type="text" name="add23" value="<?php echo set_value('add23'); ?>" class="form-control input-sm" placeholder="Street"></div>
											</div>
										</div>																	
									</div>							
								</div>
							</div>
						</div>
						<div class="widget">
							<div class="widget-header transparent">
							<h2><i class="fa fa-home"></i><strong> Owner</strong> Address 3</h2>
							<div class="additional-btn">								
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							</div>
							</div>
							<div class="widget-content padding">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('clist3'); ?></h6><input type="text" name="clist3" value="<?php echo set_value('clist3'); ?>" class="form-control input-sm" placeholder="Country"></div>
												<div class="col-md-3"><h6><?php echo form_error('city3'); ?></h6><input type="text" name="city3" value="<?php echo set_value('city3'); ?>" class="form-control input-sm" placeholder="City"></div>
												
											</div>
										</div>
										
										
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('add31'); ?></h6><input type="text" name="add31" value="<?php echo set_value('add31'); ?>" class="form-control input-sm" placeholder="Community"></div>
												<div class="col-md-3"><h6><?php echo form_error('add32'); ?></h6><input type="text" name="add32" value="<?php echo set_value('add32'); ?>" class="form-control input-sm" placeholder="Sub Community"></div>
												<div class="col-md-3"><h6><?php echo form_error('add33'); ?></h6><input type="text" name="add33" value="<?php echo set_value('add33'); ?>" class="form-control input-sm" placeholder="Street"></div>
											</div>
										</div>																	
									</div>							
								</div>
							</div>
						</div>
						<div class="widget">
							<div class="widget-header transparent">
							<h2><i class="fa fa-home"></i><strong> Owner</strong> Address 4</h2>
							<div class="additional-btn">								
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							</div>
							</div>
							<div class="widget-content padding">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('clist4'); ?></h6><input type="text" name="clist4" value="<?php echo set_value('clist4'); ?>" class="form-control input-sm" placeholder="Country"></div>
												<div class="col-md-3"><h6><?php echo form_error('city4'); ?></h6><input type="text" name="city4" value="<?php echo set_value('city4'); ?>" class="form-control input-sm" placeholder="City"></div>
												
											</div>
										</div>
										
										
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('add41'); ?></h6><input type="text" name="add41" value="<?php echo set_value('add41'); ?>" class="form-control input-sm" placeholder="Community"></div>
												<div class="col-md-3"><h6><?php echo form_error('add42'); ?></h6><input type="text" name="add42" value="<?php echo set_value('add42'); ?>" class="form-control input-sm" placeholder="Sub Community"></div>
												<div class="col-md-3"><h6><?php echo form_error('add43'); ?></h6><input type="text" name="add43" value="<?php echo set_value('add43'); ?>" class="form-control input-sm" placeholder="Street"></div>
											</div>
										</div>																	
									</div>							
								</div>
							</div>
						</div>
						<div class="widget">
							<div class="widget-header transparent">
							<h2><i class="fa fa-phone-square"></i><strong> Telephone</strong> Number</h2>
							<div class="additional-btn">								
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							</div>
							</div>
							<div class="widget-content padding">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('tel1'); ?></h6><input type="text" name="tel1" value="<?php echo set_value('tel1'); ?>" class="form-control input-sm" placeholder="1."></div>
												<div class="col-md-3"><h6><?php echo form_error('tel2'); ?></h6><input type="text" name="tel2" value="<?php echo set_value('tel2'); ?>" class="form-control input-sm" placeholder="2."></div>
												<div class="col-md-3"><h6><?php echo form_error('tel3'); ?></h6><input type="text" name="tel3" value="<?php echo set_value('tel3'); ?>" class="form-control input-sm" placeholder="3."></div>
												<div class="col-md-3"><h6><?php echo form_error('tel4'); ?></h6><input type="text" name="tel4" value="<?php echo set_value('tel4'); ?>" class="form-control input-sm" placeholder="4."></div>
											</div>
										</div>																
									</div>							
								</div>
							</div>							
						</div>
						<div class="widget">
							<div class="widget-header transparent">
							<h2><i class="glyphicon glyphicon-print"></i><strong> Fax</strong> Number</h2>
							<div class="additional-btn">								
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							</div>
							</div>
							<div class="widget-content padding">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('faxn1'); ?></h6><input type="text" name="faxn1" value="<?php echo set_value('faxn1'); ?>" class="form-control input-sm" placeholder="1."></div>
												<div class="col-md-3"><h6><?php echo form_error('faxn2'); ?></h6><input type="text" name="faxn2" value="<?php echo set_value('faxn2'); ?>" class="form-control input-sm" placeholder="2."></div>
												<div class="col-md-3"><h6><?php echo form_error('faxn3'); ?></h6><input type="text" name="faxn3" value="<?php echo set_value('faxn3'); ?>" class="form-control input-sm" placeholder="3."></div>
												<div class="col-md-3"><h6><?php echo form_error('faxn4'); ?></h6><input type="text" name="faxn4" value="<?php echo set_value('faxn4'); ?>" class="form-control input-sm" placeholder="4."></div>
											</div>
										</div>																
									</div>							
								</div>
							</div>							
						</div>
						<div class="widget">
							<div class="widget-header transparent">
							<h2><i class="icon-mobile-2"></i><strong>Mobile</strong> Number</h2>
							<div class="additional-btn">								
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							</div>
							</div>
							<div class="widget-content padding">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('mnum1'); ?></h6><input type="text" name="mnum1" value="<?php echo set_value('mnum1'); ?>" class="form-control input-sm" placeholder="1."></div>
												<div class="col-md-3"><h6><?php echo form_error('mnum2'); ?></h6><input type="text" name="mnum2" value="<?php echo set_value('mnum2'); ?>" class="form-control input-sm" placeholder="2."></div>
												<div class="col-md-3"><h6><?php echo form_error('mnum3'); ?></h6><input type="text" name="mnum3" value="<?php echo set_value('mnum3'); ?>" class="form-control input-sm" placeholder="3."></div>
												<div class="col-md-3"><h6><?php echo form_error('mnum4'); ?></h6><input type="text" name="mnum4" value="<?php echo set_value('mnum4'); ?>" class="form-control input-sm" placeholder="4."></div>
											</div>
										</div>																
									</div>							
								</div>
							</div>							
						</div>
						<div class="widget">
							<div class="widget-header transparent">
							<h2><i class="icon-mail-3"></i><strong> Email</strong> Address</h2>
							<div class="additional-btn">								
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							</div>
							</div>
							<div class="widget-content padding">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('email1'); ?></h6><input type="text" name="email1" value="<?php echo set_value('email1'); ?>" class="form-control input-sm" placeholder="1."></div>
												<div class="col-md-3"><h6><?php echo form_error('email2'); ?></h6><input type="text" name="email2" value="<?php echo set_value('email2'); ?>" class="form-control input-sm" placeholder="2."></div>
												<div class="col-md-3"><h6><?php echo form_error('email3'); ?></h6><input type="text" name="email3" value="<?php echo set_value('email3'); ?>" class="form-control input-sm" placeholder="3."></div>
												<div class="col-md-3"><h6><?php echo form_error('email4'); ?></h6><input type="text" name="email4" value="<?php echo set_value('email4'); ?>" class="form-control input-sm" placeholder="4."></div>
											</div>
										</div>																
									</div>							
								</div>
							</div>							
						</div>
						</div>
					</div>
					 