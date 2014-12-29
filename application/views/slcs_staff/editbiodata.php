<!-- Created by  : Prime R.
     Date        : November 27, 2014
     Script Lines: All unless noted otherwise
-->
		<!-- Start right content -->
		<?php echo form_open_multipart('slcs_staff/update/'.$r->id);?>
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            					<!-- Page Heading Start
				<div class="page-heading">
            		<h1><i class='fa fa-file'></i> Blank</h1>
            		<h3>Blank Page</h3>            	</div>
            	<!-- Page Heading End-->
				<div class="row">
					
					<div class="col-md-12 portlets"><!-- BioData-->
						<div class="widget">
							<div class="widget-header transparent">
							<h2><i class="icon-user-add"></i><strong> Bio</strong> Data</h2>
							<div class="additional-btn">
								<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
								<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
							</div>
							</div>	
							<div class="widget-content padding">
								<div class="row">
									
									<div class="col-md-10">
										<div class="form-group">
											<div class="row">
												<input type="hidden" name="id" value="<?php echo $r->id; ?>"/> 
												<div class="col-md-4"><h6><?php echo form_error('fname'); ?></h6><input type="text" name="fname" value="<?php echo $r->fname; ?>" class="form-control input-sm" placeholder="First Name"></div>
												<div class="col-md-4"><h6><?php echo form_error('mname'); ?></h6><input type="text" name="mname" value="<?php echo $r->mname; ?>" class="form-control input-sm" placeholder="Middle Name"></div>
												<div class="col-md-4"><h6><?php echo form_error('lname'); ?></h6><input type="text" name="lname" value="<?php echo $r->lname; ?>" class="form-control input-sm" placeholder="Last Name"></div>
											</div>
										</div>
										
										<div class="form-group">
											<div class="row">
												<div class="col-md-4"><h6><?php echo form_error('radio_gender'); ?></h6>
													<label>GENDER:</label>
													
													<label class="radio-inline"><input type="radio" name="radio_gender" value="male" <?php if($r->gender == "male"){echo "checked";} ?> /> Male </label>
													<label class="radio-inline"><input type="radio" name="radio_gender" value="female" <?php if($r->gender == "female"){echo "checked";} ?> /> Female </label>													
												</div>
												<div class="col-md-2"><h6><?php echo form_error('dob'); ?></h6><input type="text" name="dob" value="<?php echo $r->dob; ?>" class="form-control datepicker-input input-sm" placeholder="Date of Birth"></div>
												<div class="col-md-2"><h6><?php echo form_error('age'); ?></h6><input type="text" name="age" value="<?php echo $r->age; ?>" class="form-control input-sm" placeholder="Age"></div>
												<div class="col-md-2"><h6><?php echo form_error('pob'); ?></h6><input type="text" name="pob" value="<?php echo $r->birthplace; ?>" class="form-control input-sm" placeholder="Place of Birth"></div>
												<div class="col-md-2"><h6><?php echo form_error('nationality'); ?></h6>												
																	
													<select class="form-control input-sm" name="nationality">
													  <option value="<?php echo $r->nationality; ?>" ><?php echo ucfirst($r->nationality); ?></option>
													  <option value="afghan" <?php echo set_select('nationality', 'afghan'); ?> >Afghan</option>
													  <option value="albanian" <?php echo set_select('nationality', 'albanian'); ?> >Albanian</option>
													  <option value="algerian" <?php echo set_select('nationality', 'algerian'); ?> >Algerian</option>
													  <option value="american" <?php echo set_select('nationality', 'american'); ?> >American</option>
													  <option value="andorran" <?php echo set_select('nationality', 'andorran'); ?> >Andorran</option>
													  <option value="angolan" <?php echo set_select('nationality', 'angolan'); ?> >Angolan</option>
													  <option value="antiguans" <?php echo set_select('nationality', 'antiguans'); ?> >Antiguans</option>
													  <option value="argentinean" <?php echo set_select('nationality', 'argentinean'); ?> >Argentinean</option>
													  <option value="armenian" <?php echo set_select('nationality', 'armenian'); ?> >Armenian</option>
													  <option value="australian" <?php echo set_select('nationality', 'australian'); ?> >Australian</option>
													  <option value="austrian" <?php echo set_select('nationality', 'austrian'); ?> >Austrian</option>
													  <option value="azerbaijani" <?php echo set_select('nationality', 'azerbaijani'); ?> >Azerbaijani</option>
													  <option value="bahamian" <?php echo set_select('nationality', 'bahamian'); ?> >Bahamian</option>
													  <option value="bahraini" <?php echo set_select('nationality', 'bahraini'); ?> >Bahraini</option>
													  <option value="bangladeshi" <?php echo set_select('nationality', 'bangladeshi'); ?> >Bangladeshi</option>
													  <option value="barbadian" <?php echo set_select('nationality', 'barbadian'); ?> >Barbadian</option>
													  <option value="barbudans" <?php echo set_select('nationality', 'barbudans'); ?> >Barbudans</option>
													  <option value="batswana" <?php echo set_select('nationality', 'batswana'); ?> >Batswana</option>
													  <option value="belarusian" <?php echo set_select('nationality', 'belarusian'); ?> >Belarusian</option>
													  <option value="belgian" <?php echo set_select('nationality', 'belgian'); ?> >Belgian</option>
													  <option value="belizean" <?php echo set_select('nationality', 'belizean'); ?> >Belizean</option>
													  <option value="beninese" <?php echo set_select('nationality', 'beninese'); ?> >Beninese</option>
													  <option value="bhutanese" <?php echo set_select('nationality', 'bhutanese'); ?> >Bhutanese</option>
													  <option value="bolivian" <?php echo set_select('nationality', 'bolivian'); ?> >Bolivian</option>
													  <option value="bosnian" <?php echo set_select('nationality', 'bosnian'); ?> >Bosnian</option>
													  <option value="brazilian" <?php echo set_select('nationality', 'brazilian'); ?> >Brazilian</option>
													  <option value="british" <?php echo set_select('nationality', 'british'); ?> >British</option>
													  <option value="bruneian" <?php echo set_select('nationality', 'bruneian'); ?> >Bruneian</option>
													  <option value="bulgarian" <?php echo set_select('nationality', 'bulgarian'); ?> >Bulgarian</option>
													  <option value="burkinabe" <?php echo set_select('nationality', 'burkinabe'); ?> >Burkinabe</option>
													  <option value="burmese" <?php echo set_select('nationality', 'burmese'); ?> >Burmese</option>
													  <option value="burundian" <?php echo set_select('nationality', 'burundian'); ?> >Burundian</option>
													  <option value="cambodian" <?php echo set_select('nationality', 'cambodian'); ?> >Cambodian</option>
													  <option value="cameroonian" <?php echo set_select('nationality', 'cameroonian'); ?> >Cameroonian</option>
													  <option value="canadian" <?php echo set_select('nationality', 'canadian'); ?> >Canadian</option>
													  <option value="cape verdean" <?php echo set_select('nationality', 'cape verdean'); ?> >Cape Verdean</option>
													  <option value="central african" <?php echo set_select('nationality', 'central african'); ?> >Central African</option>
													  <option value="chadian" <?php echo set_select('nationality', 'chadian'); ?> >Chadian</option>
													  <option value="chilean" <?php echo set_select('nationality', 'chilean'); ?> >Chilean</option>
													  <option value="chinese" <?php echo set_select('nationality', 'chinese'); ?> >Chinese</option>
													  <option value="colombian" <?php echo set_select('nationality', 'colombian'); ?> >Colombian</option>
													  <option value="comoran" <?php echo set_select('nationality', 'comoran'); ?> >Comoran</option>
													  <option value="congolese" <?php echo set_select('nationality', 'congolese'); ?> >Congolese</option>
													  <option value="costa rican" <?php echo set_select('nationality', 'costa rican'); ?> >Costa Rican</option>
													  <option value="croatian" <?php echo set_select('nationality', 'croatian'); ?> >Croatian</option>
													  <option value="cuban" <?php echo set_select('nationality', 'cuban'); ?> >Cuban</option>
													  <option value="cypriot" <?php echo set_select('nationality', 'cypriot'); ?> >Cypriot</option>
													  <option value="czech" <?php echo set_select('nationality', 'czech'); ?> >Czech</option>
													  <option value="danish" <?php echo set_select('nationality', 'danish'); ?> >Danish</option>
													  <option value="djibouti" <?php echo set_select('nationality', 'djibouti'); ?> >Djibouti</option>
													  <option value="dominican" <?php echo set_select('nationality', 'dominican'); ?> >Dominican</option>
													  <option value="dutch" <?php echo set_select('nationality', 'dutch'); ?> >Dutch</option>
													  <option value="east timorese" <?php echo set_select('nationality', 'east timorese'); ?> >East Timorese</option>
													  <option value="ecuadorean" <?php echo set_select('nationality', 'ecuadorean'); ?> >Ecuadorean</option>
													  <option value="egyptian" <?php echo set_select('nationality', 'egyptian'); ?> >Egyptian</option>
													  <option value="emirian" <?php echo set_select('nationality', 'emirian'); ?> >Emirian</option>
													  <option value="equatorial guinean" <?php echo set_select('nationality', 'equatorial guinean'); ?> >Equatorial Guinean</option>
													  <option value="eritrean" <?php echo set_select('nationality', 'eritrean'); ?> >Eritrean</option>
													  <option value="estonian" <?php echo set_select('nationality', 'estonian'); ?> >Estonian</option>
													  <option value="ethiopian" <?php echo set_select('nationality', 'ethiopian'); ?> >Ethiopian</option>
													  <option value="fijian" <?php echo set_select('nationality', 'fijian'); ?> >Fijian</option>
													  <option value="filipino" <?php echo set_select('nationality', 'filipino'); ?> >Filipino</option>
													  <option value="finnish" <?php echo set_select('nationality', 'finnish'); ?> >Finnish</option>
													  <option value="french" <?php echo set_select('nationality', 'french'); ?> >French</option>
													  <option value="gabonese" <?php echo set_select('nationality', 'gabonese'); ?> >Gabonese</option>
													  <option value="gambian" <?php echo set_select('nationality', 'gambian'); ?> >Gambian</option>
													  <option value="georgian" <?php echo set_select('nationality', 'georgian'); ?> >Georgian</option>
													  <option value="german" <?php echo set_select('nationality', 'german'); ?> >German</option>
													  <option value="ghanaian" <?php echo set_select('nationality', 'ghanaian'); ?> >Ghanaian</option>
													  <option value="greek" <?php echo set_select('nationality', 'greek'); ?> >Greek</option>
													  <option value="grenadian" <?php echo set_select('nationality', 'grenadian'); ?> >Grenadian</option>
													  <option value="guatemalan" <?php echo set_select('nationality', 'guatemalan'); ?> >Guatemalan</option>
													  <option value="guinea-bissauan" <?php echo set_select('nationality', 'guinea-bissauan'); ?> >Guinea-Bissauan</option>
													  <option value="guinean" <?php echo set_select('nationality', 'guinean'); ?> >Guinean</option>
													  <option value="guyanese" <?php echo set_select('nationality', 'guyanese'); ?> >Guyanese</option>
													  <option value="haitian" <?php echo set_select('nationality', 'haitian'); ?> >Haitian</option>
													  <option value="herzegovinian" <?php echo set_select('nationality', 'herzegovinian'); ?> >Herzegovinian</option>
													  <option value="honduran" <?php echo set_select('nationality', 'honduran'); ?> >Honduran</option>
													  <option value="hungarian" <?php echo set_select('nationality', 'hungarian'); ?> >Hungarian</option>
													  <option value="icelander" <?php echo set_select('nationality', 'icelander'); ?> >Icelander</option>
													  <option value="indian" <?php echo set_select('nationality', 'indian'); ?> >Indian</option>
													  <option value="indonesian" <?php echo set_select('nationality', 'indonesian'); ?> >Indonesian</option>
													  <option value="iranian" <?php echo set_select('nationality', 'iranian'); ?> >Iranian</option>
													  <option value="iraqi" <?php echo set_select('nationality', 'iraqi'); ?> >Iraqi</option>
													  <option value="irish" <?php echo set_select('nationality', 'irish'); ?> >Irish</option>
													  <option value="israeli" <?php echo set_select('nationality', 'israeli'); ?> >Israeli</option>
													  <option value="italian" <?php echo set_select('nationality', 'italian'); ?> >Italian</option>
													  <option value="ivorian" <?php echo set_select('nationality', 'ivorian'); ?> >Ivorian</option>
													  <option value="jamaican" <?php echo set_select('nationality', 'jamaican'); ?> >Jamaican</option>
													  <option value="japanese" <?php echo set_select('nationality', 'japanese'); ?> >Japanese</option>
													  <option value="jordanian" <?php echo set_select('nationality', 'jordanian'); ?> >Jordanian</option>
													  <option value="kazakhstani" <?php echo set_select('nationality', 'kazakhstani'); ?> >Kazakhstani</option>
													  <option value="kenyan" <?php echo set_select('nationality', 'kenyan'); ?> >Kenyan</option>
													  <option value="kuwaiti" <?php echo set_select('nationality', 'kuwaiti'); ?> >Kuwaiti</option>
													  <option value="kyrgyz" <?php echo set_select('nationality', 'kyrgyz'); ?> >Kyrgyz</option>
													  <option value="laotian" <?php echo set_select('nationality', 'laotian'); ?> >Laotian</option>
													  <option value="latvian" <?php echo set_select('nationality', 'latvian'); ?> >Latvian</option>
													  <option value="lebanese" <?php echo set_select('nationality', 'lebanese'); ?> >Lebanese</option>
													  <option value="liberian" <?php echo set_select('nationality', 'liberian'); ?> >Liberian</option>
													  <option value="libyan" <?php echo set_select('nationality', 'libyan'); ?> >Libyan</option>
													  <option value="liechtensteiner" <?php echo set_select('nationality', 'liechtensteiner'); ?> >Liechtensteiner</option>
													  <option value="lithuanian" <?php echo set_select('nationality', 'lithuanian'); ?> >Lithuanian</option>
													  <option value="luxembourger" <?php echo set_select('nationality', 'luxembourger'); ?> >Luxembourger</option>
													  <option value="macedonian" <?php echo set_select('nationality', 'macedonian'); ?> >Macedonian</option>
													  <option value="malagasy" <?php echo set_select('nationality', 'malagasy'); ?> >Malagasy</option>
													  <option value="malawian" <?php echo set_select('nationality', 'malawian'); ?> >Malawian</option>
													  <option value="malaysian" <?php echo set_select('nationality', 'malaysian'); ?> >Malaysian</option>
													  <option value="maldivan" <?php echo set_select('nationality', 'maldivan'); ?> >Maldivan</option>
													  <option value="malian" <?php echo set_select('nationality', 'malian'); ?> >Malian</option>
													  <option value="maltese" <?php echo set_select('nationality', 'maltese'); ?> >Maltese</option>
													  <option value="marshallese" <?php echo set_select('nationality', 'marshallese'); ?> >Marshallese</option>
													  <option value="mauritanian" <?php echo set_select('nationality', 'mauritanian'); ?> >Mauritanian</option>
													  <option value="mauritian" <?php echo set_select('nationality', 'mauritian'); ?> >Mauritian</option>
													  <option value="mexican" <?php echo set_select('nationality', 'mexican'); ?> >Mexican</option>
													  <option value="micronesian" <?php echo set_select('nationality', 'micronesian'); ?> >Micronesian</option>
													  <option value="moldovan" <?php echo set_select('nationality', 'moldovan'); ?> >Moldovan</option>
													  <option value="monacan" <?php echo set_select('nationality', 'monacan'); ?> >Monacan</option>
													  <option value="mongolian" <?php echo set_select('nationality', 'mongolian'); ?> >Mongolian</option>
													  <option value="moroccan" <?php echo set_select('nationality', 'moroccan'); ?> >Moroccan</option>
													  <option value="mosotho" <?php echo set_select('nationality', 'mosotho'); ?> >Mosotho</option>
													  <option value="motswana" <?php echo set_select('nationality', 'motswana'); ?> >Motswana</option>
													  <option value="mozambican" <?php echo set_select('nationality', 'mozambican'); ?> >Mozambican</option>
													  <option value="namibian" <?php echo set_select('nationality', 'namibian'); ?> >Namibian</option>
													  <option value="nauruan" <?php echo set_select('nationality', 'nauruan'); ?> >Nauruan</option>
													  <option value="nepalese" <?php echo set_select('nationality', 'nepalese'); ?> >Nepalese</option>
													  <option value="new zealander" <?php echo set_select('nationality', 'new zealander'); ?> >New Zealander</option>
													  <option value="ni-vanuatu" <?php echo set_select('nationality', 'ni-vanuatu'); ?> >Ni-Vanuatu</option>
													  <option value="nicaraguan" <?php echo set_select('nationality', 'nicaraguan'); ?> >Nicaraguan</option>
													  <option value="nigerien" <?php echo set_select('nationality', 'nigerien'); ?> >Nigerien</option>
													  <option value="north korean" <?php echo set_select('nationality', 'north korean'); ?> >North Korean</option>
													  <option value="northern irish" <?php echo set_select('nationality', 'northern irish'); ?> >Northern Irish</option>
													  <option value="norwegian" <?php echo set_select('nationality', 'norwegian'); ?> >Norwegian</option>
													  <option value="omani" <?php echo set_select('nationality', 'omani'); ?> >Omani</option>
													  <option value="pakistani" <?php echo set_select('nationality', 'pakistani'); ?> >Pakistani</option>
													  <option value="palauan" <?php echo set_select('nationality', 'palauan'); ?> >Palauan</option>
													  <option value="panamanian" <?php echo set_select('nationality', 'panamanian'); ?> >Panamanian</option>
													  <option value="papua new guinean" <?php echo set_select('nationality', 'papua new guinean'); ?> >Papua New Guinean</option>
													  <option value="paraguayan" <?php echo set_select('nationality', 'paraguayan'); ?> >Paraguayan</option>
													  <option value="peruvian" <?php echo set_select('nationality', 'peruvian'); ?> >Peruvian</option>
													  <option value="polish" <?php echo set_select('nationality', 'polish'); ?> >Polish</option>
													  <option value="portuguese" <?php echo set_select('nationality', 'portuguese'); ?> >Portuguese</option>
													  <option value="qatari" <?php echo set_select('nationality', 'qatari'); ?> >Qatari</option>
													  <option value="romanian" <?php echo set_select('nationality', 'romanian'); ?> >Romanian</option>
													  <option value="russian" <?php echo set_select('nationality', 'russian'); ?> >Russian</option>
													  <option value="rwandan" <?php echo set_select('nationality', 'rwandan'); ?> >Rwandan</option>
													  <option value="saint lucian" <?php echo set_select('nationality', 'saint lucian'); ?> >Saint Lucian</option>
													  <option value="salvadoran" <?php echo set_select('nationality', 'salvadoran'); ?> >Salvadoran</option>
													  <option value="samoan" <?php echo set_select('nationality', 'samoan'); ?> >Samoan</option>
													  <option value="san marinese" <?php echo set_select('nationality', 'san marinese'); ?> >San Marinese</option>
													  <option value="sao tomean" <?php echo set_select('nationality', 'sao tomean'); ?> >Sao Tomean</option>
													  <option value="saudi" <?php echo set_select('nationality', 'saudi'); ?> >Saudi</option>
													  <option value="scottish" <?php echo set_select('nationality', 'scottish'); ?> >Scottish</option>
													  <option value="senegalese" <?php echo set_select('nationality', 'senegalese'); ?> >Senegalese</option>
													  <option value="serbian" <?php echo set_select('nationality', 'serbian'); ?> >Serbian</option>
													  <option value="seychellois" <?php echo set_select('nationality', 'seychellois'); ?> >Seychellois</option>
													  <option value="sierra leonean" <?php echo set_select('nationality', 'sierra leonean'); ?> >Sierra Leonean</option>
													  <option value="singaporean" <?php echo set_select('nationality', 'singaporean'); ?> >Singaporean</option>
													  <option value="slovakian" <?php echo set_select('nationality', 'slovakian'); ?> >Slovakian</option>
													  <option value="slovenian" <?php echo set_select('nationality', 'slovenian'); ?> >Slovenian</option>
													  <option value="solomon islander" <?php echo set_select('nationality', 'solomon islander'); ?> >Solomon Islander</option>
													  <option value="somali" <?php echo set_select('nationality', 'somali'); ?> >Somali</option>
													  <option value="south african" <?php echo set_select('nationality', 'south african'); ?> >South African</option>
													  <option value="south korean" <?php echo set_select('nationality', 'south korean'); ?> >South Korean</option>
													  <option value="spanish" <?php echo set_select('nationality', 'spanish'); ?> >Spanish</option>
													  <option value="sri lankan" <?php echo set_select('nationality', 'sri lankan'); ?> >Sri Lankan</option>
													  <option value="sudanese" <?php echo set_select('nationality', 'sudanese'); ?> >Sudanese</option>
													  <option value="surinamer" <?php echo set_select('nationality', 'surinamer'); ?> >Surinamer</option>
													  <option value="swazi" <?php echo set_select('nationality', 'swazi'); ?> >Swazi</option>
													  <option value="swedish" <?php echo set_select('nationality', 'swedish'); ?> >Swedish</option>
													  <option value="swiss" <?php echo set_select('nationality', 'swiss'); ?> >Swiss</option>
													  <option value="syrian" <?php echo set_select('nationality', 'syrian'); ?> >Syrian</option>
													  <option value="taiwanese" <?php echo set_select('nationality', 'taiwanese'); ?> >Taiwanese</option>
													  <option value="tajik" <?php echo set_select('nationality', 'tajik'); ?> >Tajik</option>
													  <option value="tanzanian" <?php echo set_select('nationality', 'tanzanian'); ?> >Tanzanian</option>
													  <option value="thai" <?php echo set_select('nationality', 'thai'); ?> >Thai</option>
													  <option value="togolese" <?php echo set_select('nationality', 'togolese'); ?> >Togolese</option>
													  <option value="tongan" <?php echo set_select('nationality', 'tongan'); ?> >Tongan</option>
													  <option value="trinidadian" <?php echo set_select('nationality', 'trinidadian'); ?> >Trinidadian</option>
													  <option value="tobagonian" <?php echo set_select('nationality', 'tobagonian'); ?> >Tobagonian</option>
													  <option value="tunisian" <?php echo set_select('nationality', 'tunisian'); ?> >Tunisian</option>
													  <option value="turkish" <?php echo set_select('nationality', 'turkish'); ?> >Turkish</option>
													  <option value="tuvaluan" <?php echo set_select('nationality', 'tuvaluan'); ?> >Tuvaluan</option>
													  <option value="ugandan" <?php echo set_select('nationality', 'ugandan'); ?> >Ugandan</option>
													  <option value="ukrainian" <?php echo set_select('nationality', 'ukrainian'); ?> >Ukrainian</option>
													  <option value="uruguayan" <?php echo set_select('nationality', 'uruguayan'); ?> >Uruguayan</option>
													  <option value="uzbekistani" <?php echo set_select('nationality', 'uzbekistani'); ?> >Uzbekistani</option>
													  <option value="venezuelan" <?php echo set_select('nationality', 'venezuelan'); ?> >Venezuelan</option>
													  <option value="vietnamese" <?php echo set_select('nationality', 'vietnamese'); ?> >Vietnamese</option>
													  <option value="welsh" <?php echo set_select('nationality', 'welsh'); ?> >Welsh</option>
													  <option value="yemenite" <?php echo set_select('nationality', 'yemenite'); ?> >Yemenite</option>
													  <option value="zambian" <?php echo set_select('nationality', 'zambian'); ?> >Zambian</option>
													  <option value="zimbabwean" <?php echo set_select('nationality', 'zimbabwean'); ?>>Zimbabwean</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-5"><h6><?php echo form_error('radio_ms'); ?></h6>	
													<label>MARITAL STATUS:</label>
													<label class="radio-inline"><input type="radio" name="radio_ms" value="single" <?php if($r->marital_stat == "single"){echo "checked";} ?> /> Single</label>
													<label class="radio-inline"><input type="radio" name="radio_ms" value="married" <?php if($r->marital_stat == "married"){echo "checked";} ?> /> Married</label>													
												</div>
												<div class="col-md-3"><?php echo form_error('ms_stat'); ?>	<input type="text" name="ms_stat" value="<?php echo $r->ms_others; ?>" class="form-control input-sm" placeholder="Others, pls. specify"></div>
												<div class="col-md-2"><h6><?php echo form_error('language'); ?></h6><input type="text" name="language" value="<?php echo $r->language; ?>" class="form-control input-sm" placeholder="Language"></div>
												<div class="col-md-2"><h6><?php echo form_error('ppno'); ?></h6><input type="text" name="ppno" value="<?php echo $r->passport_no; ?>" class="form-control input-sm" placeholder="Passport No."></div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('toc'); ?></h6><input type="text" name="toc" value="<?php echo $r->type_of_contract; ?>" class="form-control input-sm" placeholder="Type of Contract"></div>
												<div class="col-md-2"><h6><?php echo form_error('dh'); ?></h6><input type="text" name="dh" value="<?php echo $r->date_hired; ?>" class="form-control datepicker-input input-sm" placeholder="Date Hired"></div>
												<div class="col-md-2"><h6><?php echo form_error('ds'); ?></h6><input type="text" name="ds" value="<?php echo $r->date_started; ?>" class="form-control datepicker-input input-sm" placeholder="Date Started"></div>
												<div class="col-md-2"><h6><?php echo form_error('dr'); ?></h6><input type="text" name="dr" value="<?php echo $r->date_release; ?>" class="form-control datepicker-input input-sm" placeholder="Date Release"></div>
												<div class="col-md-3"><h6><?php echo form_error('office'); ?></h6>
												<select class="form-control input-sm" name="office">
														  <option value="<?php echo $r->office; ?>" ><?php echo $r->office; ?></option>
														  <option value="Cleaning Service" <?php echo set_select('office', 'Cleaning Service'); ?> >Cleaning Service</option>
														  <option value="Real Estate" <?php echo set_select('office', 'Real Estate'); ?> >Real Estate</option>														 
												</select>
												</div>
											</div>
										</div>
										
																			
									</div>
					<!--				<div class="col-md-2">
										<div class="text-center">
											<?php echo form_open_multipart('upload/do_upload');?>
											<img src="<?php echo base_url(); ?>images/users/user-100.jpg" class="avatar img-circle" alt="avatar">
											<h6>Upload photo...</h6>
											<input type="file" name="userfile" size="20" class="form-control btn btn-green-1">
											<input type="submit" class="form-control btn btn-green-2" value="Upload" />
											</form>
										</div>
									</div>
								
								</div>
							</div>	
						</div>
					</div> -->