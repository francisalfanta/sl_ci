        <!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            	<!-- Page Heading Start -->
            	<!-- Page Heading End-->  
                <div class="row">
                     <div class="col-sm-10 col-md-8 col-lg-6 portlets">
                        
                        <div class="widget">
                            <div class="widget-header ">
                                <h2><strong>Property</strong> Filter</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div><!-- additional-btn -->
                            </div><!-- widget-header transparent -->
                            <div class="widget-content padding">   
                             <?php echo form_open('', $form_attributes); ?>                                           
                                <div id="horizontal-form">        
                                <?php echo validation_errors(); ?>
                                    <div class="row" style="width:100%;">                                      
                                        <div class="col-md-12 portlets container">
                                            <div class="form-group col-md-4 col-lg-4"> <!-- First Name -->
                                                <label class="sr-only" for="fn_name">First Name</label>
                                                <?php echo form_input($fn_attributes); ?>
                                            </div><!-- form-group -->

                                            <div class="form-group col-md-4 col-lg-4"> <!-- Middle Name -->
                                                <label class="sr-only" for="mn_name">Middle Name</label>
                                                <?php echo form_input($mn_attributes); ?>
                                            </div><!-- form-group -->

                                            <div class="form-group col-md-4 col-lg-4"> <!-- Last Name -->
                                                <label class="sr-only" for="mn_name">Last Name</label>
                                                <?php echo form_input($ln_attributes); ?>
                                            </div><!-- form-group -->

                                        </div><!-- col-md-12 col-lg-12 portlets -->                                   
                                    </div><!-- row -->
                                    <div class="row">
                                        <div class="container">
                                            <div class="form-group col-md-6 col-lg-6"> <!-- Nationality -->
                                                <label class="sr-only" for="fn_name">Nationality</label>
                                                <select class="form-control col-md-6 col-lg-6" name="nationality" tabindex="5">
                                                          <option value="" <?php echo set_select('nationality', '', TRUE); ?> >Nationality</option>
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
                                            </div><!-- form-group -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-lg-6"> <!-- Country -->
                                        <div class="container">
                                            <label class="sr-only" for="mn_name">Country</label>
                                            <select name="country_name" id="country_name" tabindex="6" class="form-control input-sm">
                                                <option value="">Select Country</option>
                                                <?php foreach($country_list as $row) { 
                                                    echo '<option value="'.$row['country_name'].'">'.$row['country_name'].'</option>';
                                                } ?>
                                            </select>
                                        </div><!-- form-group -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-lg-6"> <!-- Telephone no. -->
                                        <div class="container">
                                            <label class="sr-only" for="mn_name">Telephone No.</label>
                                            <input type="text" id="telephone_no" class="form-control input-sm" name="telephone_no" value="<?php set_value('telephone_no'); ?>" placeholder="Telephone No." tabindex="7"/>
                                            
                                        </div><!-- form-group -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-lg-6"> <!-- Mobile No. -->
                                        <div class="container">
                                            <label class="sr-only" for="mn_name">Mobile No.</label>
                                            <input type="text" id="mobile_no" class="form-control input-sm" name="mobile_no" value="<?php set_value('moible_no'); ?>" placeholder="Mobile No." tabindex="8"/>                                        
                                        </div><!-- form-group -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-lg-6"> <!-- Fax No. -->
                                        <div class="container">
                                            <label class="sr-only" for="mn_name">Fax No.</label>
                                            <input type="text" id="fax_no" class="form-control input-sm" name="fax_no" value="<?php set_value('fax_no'); ?>" placeholder="Fax No." tabindex="9"/>                                        
                                        </div><!-- form-group -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-lg-6"> <!-- Email -->
                                            <div class="container">
                                                <label class="sr-only" for="mn_name">Email.</label>
                                                <input type="text" id="email" class="form-control input-sm" name="email" value="<?php set_value('email'); ?>" placeholder="Email" tabindex="10"/>                                        
                                            </div><!-- form-group -->
                                        </div>
                                    <div class="form-group">                                      
                                        <div class="col-sm-offset-2 col-sm-10 text-right">
                                          <button type="submit" class="btn btn-default" >Save</button>
                                        </div><!-- col-sm-offset-2 col-sm-10 text-right -->                                        
                                    </div><!-- form-group -->
                                    </div>
                                    
                                </div><!-- horizontal-form -->
                              </form>
                            </div><!-- widget-content padding -->
                        </div><!-- widget -->
                        
                    </div><!-- col-sm-6 portlets -->

                    <!-- Field name checkbox -->
                    <div class="col-sm-6 portlets">
                        <div class="widget">
                            <div class="widget-header ">
                                <h2><strong>Show / Hide</strong> Column Fields</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content padding">
                            <div class="row">
                                <div class="row col-sm-6 col-md-6 col-lg-6">
                                    <!-- foreach here -->
                                    <?php  // Nationality Table
                                        foreach($nationality_tb_fieldnames as $label => $value){
                                            if(strpos(strtolower($label), '_id') === false){                                     
                                                $field_name = ucfirst(str_replace('re ','', strtolower(str_replace('_', ' ', $label)))); 
                                    ?>                               
                                    <div class="col-xs-8">
                                        <?php echo $field_name; ?>
                                    </div>
                                    <div class="col-xs-4">
                                        <?php if($label =='description' or $label =='developer_name' || $label =='unit_number' || $label =='building_name') { ?>
                                        <span class="field_name"><input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" name="<?php echo $label; ?>" value="<?php echo $field_name; ?>"/></span>
                                        <?php } else { ?>
                                            <span class="field_name"><input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" name="<?php echo $label; ?>" value="<?php echo $field_name; ?>" checked  /></span>
                                        <?php } ?>
                                    </div>
                                    <?php  }} ?>
                                     <?php  // Address Table
                                        foreach($address_tb_fieldnames as $label => $value){
                                            if($label == 'address') {
                                                $field_name = ucfirst($label); 
                                            } else if($label =='postofficeboxnumber'){
                                                $field_name = 'Post Office Box No';                                        
                                            } else if($label =='postalcode'){
                                                $field_name = 'Postal Code';
                                            } else if(strpos(strtolower($label), '_id') === false){                                     
                                                $field_name = ucfirst(str_replace('address','', strtolower(str_replace('_', ' ', $label)))); 
                                            }
                                    ?>                               
                                    <div class="col-xs-8">
                                        <?php echo $field_name; ?>
                                    </div>
                                <div class="col-xs-4">
                                    <?php if($label =='description' or $label =='developer_name' || $label =='unit_number' || $label =='building_name') { ?>
                                    <span class="field_name"><input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" name="<?php echo $label; ?>" value="<?php echo $field_name; ?>"/></span>
                                    <?php } else { ?>
                                        <span class="field_name"><input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" name="<?php echo $label; ?>" value="<?php echo $field_name; ?>" checked  /></span>
                                    <?php } ?>
                                </div>
                                <?php  } ?>
                                <!-- end here -->                           
                                </div><!-- row -->

                                <div class="row col-sm-6 col-md-6 col-lg-6">
                                    <!-- foreach here -->
                                    <?php  // Nationality Table
                                        foreach($propertyfinder_tb_fieldnames as $label => $value){
                                            if(strpos(strtolower($label), '_id') === false){                                     
                                                $field_name = ucfirst(str_replace('re ','', strtolower(str_replace('_', ' ', $label)))); 
                                    ?>                               
                                    <div class="col-xs-8">
                                        <?php echo $field_name; ?>
                                    </div>
                                    <div class="col-xs-4">
                                        <?php if($label =='description' or $label =='developer_name' || $label =='unit_number' || $label =='building_name') { ?>
                                        <span class="field_name"><input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" name="<?php echo $label; ?>" value="<?php echo $field_name; ?>"/></span>
                                        <?php } else { ?>
                                            <span class="field_name"><input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" name="<?php echo $label; ?>" value="<?php echo $field_name; ?>" checked  /></span>
                                        <?php } ?>
                                    </div>
                                    <?php  }} ?>                                   
                                <!-- end here -->                           
                                </div><!-- row -->

                            </div><!-- row -->
                            </div><!-- widget-content padding -->
                        </div><!-- widget-header -->
                    </div><!-- col-sm-6-portlets -->
 
                    <!-- end Field name checkbox -->

					<div class="col-md-12">
                        <div class="widget">
                            <div class="widget-header">
                                <h2><strong>Property Owner</strong> Lists</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="<?php echo base_url('property_owner/create_prop_owner');?>"><i class="icon-user-add"></i></a>  
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>                                
                            </div>                                                  
                            <div class="widget-content">
                            <br>
                                <div class="table-responsive">
                                <form class='form-horizontal' role='form'>
                                     <table id="datatables-4" data-sortable class="table table-striped table-bordered display compact"  cellspacing="0" width="100%">
                                    <thead>
                                        <tr>    
                                          
                                            <th><small>Full Name</small></th>                                                                                      
                                            <th><small>Address</small></th> 
                                            <th><small>Mobile no.</small></th> 
                                            <th><small>Tel no.</small></th>
                                            <th><small>Property</small></th>
                                            <th><small>Property type</small></th>
                                            <th><small>Bldg Name</small></th>                                                
                                            <th><small>Status</small></th>                                            
                                            <th data-sortable="false">Option</th>
                                        </tr>
                                    </thead> 
                                    <tfoot>
                                        <tr>                                            
                                            <th><small>Full Name</small></th>                                                                                      
                                            <th><small>Address</small></th> 
                                            <th><small>Mobile no.</small></th> 
                                            <th><small>Tel no.</small></th>
                                            <th><small>Property</small></th>
                                            <th><small>Property type</small></th>
                                            <th><small>Bldg Name</small></th> 
                                            <th><small>Status</small></th>                                          
                                            <th data-sortable="false">Option</th>
                                            </tr>
                                    </tfoot>                                       
                                       <?php if(count($records)>1) {
                                                foreach($records as $row) { 
                                                if($row->addressSubcommunity){ $local = $row->addressSubcommunity.', ';} else { $local = null;}
                                                if($row->addressCommunity){ $region = $row->addressCommunity.', ';} else { $region = null;}
                                                if($row->addressCountry){ $country = $row->addressCountry.', ';} else { $country = null;}                                                
                                                if( count($parents)==1 && $row->property_owner_id == $parents['tb_property_owner_id']) { 
                                                // Display selected record?>
                                            <tr> 
                                                <td><small><?php echo $row->full_name; ?></small></td>                 
                                                <td><small><?php echo $row->address.', '.$local.$region.$country; ?></small></td>
                                                <td><small><?php echo $row->mobile_no; ?></small></td>                                               
                                                <td><small><?php echo $row->telephone_no; ?></small></td>
                                                <td><small><?php echo $row->re_property; ?></small></td>
                                                <td><small><?php echo $row->property_type; ?></small></td>
                                                <td><small><?php if($row->status){ echo '<span id="record-status" value="'.$row->tb_property_owner_id.'" class="label label-success btn">Active</span>'; } else { echo '<span class="label label-danger btn">Danger</span>'; } ?></small></td>
                                                <td><small><?php echo $row->building_name; ?></small></td> 
                                                <td>
                                                    <div class="btn-group btn-group-xs">                                                                                                                                                                
                                                        <a href="<?php echo base_url('property_owner/view_property_owner/'.$row->tb_property_owner_id.'/'.$row->tb_propertyfinder_id); ?>" data-toggle="tooltip" title="Edit Contact Details" class="btn btn-default"><i class="fa fa-edit"></i></a>                                                   
                                                        <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Logout</a></li>
                                                        <a href="<?php echo base_url('property_owner/del_nat/'.$row->tb_property_owner_id.'/'.$row->tb_propertyfinder_id); ?>"  data-toggle="tooltip" title="Delete" class="md-trigger" data-modal="delete-record-modal"><i class="glyphicon glyphicon-remove"></i></a>                                                       
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php } else { // Display all record ?> 
                                            <tr> 
                                                <td><small><?php echo $row->full_name; ?></small></td>     
                                                <td><small><?php echo $row->address.', '.$local.$region.$country; ?></small></td>
                                                <td><small><?php echo $row->mobile_no; ?></small></td>
                                                <td><small><?php echo $row->telephone_no; ?></small></td>
                                                <td><small><?php echo $row->re_property; ?></small></td>
                                                <td><small><?php echo $row->property_type; ?></small></td>
                                                <td><small><?php echo $row->building_name; ?></small></td>
                                                <td><small><?php if($row->status){ echo '<span class="label label-success btn" >Active</span>'; } else { echo '<span class="label label-danger btn" onClick="status_toggle()">Danger</span>'; } ?></small></td>                                                                                     
                                                <td>
                                                    <div class="btn-group btn-group-xs">                                                                    
                                                        <a href="<?php echo base_url('property_owner/view_property_owner/'.$row->tb_property_owner_id.'/'.$row->tb_propertyfinder_id); ?>" data-toggle="tooltip" title="Edit Contact Details" ><i class="fa fa-edit"></i></a> 
                                                        <!--<a href="<?php echo base_url('property_owner/del_nat/'.$row->tb_property_owner_id.'/'.$row->tb_propertyfinder_id); ?>"  data-toggle="tooltip" title="Delete" class="md-trigger" data-modal="delete-record-modal"><i class="glyphicon glyphicon-remove"></i></a>-->
                                                        <a href="<?php echo base_url('property_owner/del_nat/'.$row->tb_property_owner_id.'/'.$row->tb_propertyfinder_id); ?>"  data-toggle="tooltip" title="Delete" ><i class="glyphicon glyphicon-remove"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php }}} ?>  
                                    </table>
                                </form><!-- table-responsive -->
                                </div><!-- table-responsive -->
                             </div><!-- widget-content padding -->                       
                 	</div><!-- col-md-12 portlets -->
                    
                    </div><!-- col-md-12 portlets -->
				</div><!-- row -->
              

    			<!-- Footer Start -->
                <footer>
                    Soft Line Cleaning Services &copy; 2014
                    <div class="footer-links pull-right">
                    	<a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact Us</a>
                    </div>
                </footer>
                <!-- Footer End -->
                <script type="text/javascript">
                  var editor; // use a global for the submit and return data rendering in the examples
 
                  $(document).ready(function() {
                  var oTable = $('#owner_table').dataTable({         
                      });

                  function row_check_owner(tb_property_owner_id, fullname, address, mobile_no, telephone_no, re_property, property_type, building_name, status){
                       
                        var row_html = '<tr>';                        

                        if($('table .city').is(':visible')){
                            row_html += '<td class="fullname">' + fullname + '</td>';                        
                        }
                        if($('table .community').is(':visible')){
                            row_html += '<td class="addresss">' + address + '</td>';                        
                        }
                        if($('table .subcommunity').is(':visible')){
                            row_html += '<td class="mobile_no">' + mobile_no + '</td>';                        
                        }
                        if($('table .re_property').is(':visible')){
                            row_html += '<td class="telephone_no">' + telephone_no + '</td>';                        
                        } 
                        if($('table .property_type').is(':visible')){
                            row_html += '<td class="re_property">' + re_property + '</td>';                        
                        }  
                        if($('table .description').is(':visible')){
                            row_html += '<td class="property_type">' + property_type + '</td>';                        
                        }
                        if($('table .building_name').is(':visible')){
                            row_html += '<td class="building_name">' + building_name + '</td>';                        
                        }  
                        if($('table .unit_number').is(':visible')){
                            row_html += '<td class="status">' + status + '</td>';                        
                        }

                        row_html  += '<td><div class="btn-group btn-group-xs"><a href="" data-toggle="tooltip" title="Edit" class="btn"><i class="fa fa-edit"></i></a><a href="" onClick="delete_record()" data-toggle="tooltip" title="Off" class="btn"><i class="glyphicon glyphicon-remove"></i></a></div></td></tr>';
                        
                        return row_html;    
                    };

                  function render_filtered_owner_table(first_name, middle_name, last_name, nationality, country, telephone_no, mobile_no, fax_no, email){
                        //city_name           = typeof city_name !== 'undefined' ? city_name : null;
                        //community_name      = typeof community_name !== 'undefined' ? community_name : null;
                        //subcommunity_name   = typeof subcommunity_name !== 'undefined' ? subcommunity_name : null;
                        first_name   = typeof first_name !== 'undefined' ? first_name : null;
                        middle_name  = typeof middle_name !== 'undefined' ? middle_name : null;
                        last_name    = typeof last_name !== 'undefined' ? last_name : null;
                        nationality  = typeof nationality !== 'undefined' ? nationality : null;
                        country      = typeof country !== 'undefined' ? country : null;
                        telephone_no = typeof telephone_no !== 'undefined' ? telephone_no : null;
                        mobile_no    = typeof mobile_no !== 'undefined' ? mobile_no : null;
                        fax_no       = typeof last_name !== 'undefined' ? fax_no : null;
                        email        = typeof last_name !== 'undefined' ? email : null;

                        return $.ajax({
                                    url: "<?php echo base_url('property_owner/find_owner'); ?>",
                                    type: 'POST',
                                    dataType: 'json',   // The available data types are text, html, xml, json, jsonp, and script.
                                    data:{  
                                            //'city' :city_name,
                                            //'community_name': community_name,
                                            //'subcommunity_name': subcommunity_name
                                            'first_name': first_name,
                                            'middle_name': middle_name,
                                            'last_name': last_name,
                                            'nationality': nationality,
                                            'country' : country,
                                            'telephone_no' : telephone_no,
                                            'mobile_no' : mobile_no,
                                            'fax_no' : fax_no,
                                            'email' : email
                                         },
                                    //context: $('#datatables-2'),
                                        
                                    error:  function(xhr, status, error) {
                                              var err = JSON.parse(xhr.responseText);
                                              alert(err.Message);
                                             
                                            },
                                    statusCode: {
                                             404: function() {
                                                    alert( "page not found" );
                                                }
                                    },
                                    success: function (response) {                               
                                        // remove table body
                                        //console.log('response :'+ response);
                                        var trHTML = '';
                                        $.each(response, function (i, item) {
                                            //console.log('i :'+ i);
                                            //console.log('item :'+ item);                                           
                                            trHTML += row_check_owner(item.tb_property_owner_id, item.first_name+' '+item.last_name, item.address, item.mobile_no, item.telephone_no, item.re_property, item.property_type, item.building_name, item.status);
                                        });

                                        $('tbody').removeClass('hidden').show().empty().append(trHTML);
                                        //console.log('respose: '+response); 
                                        //console.log('trHTML: '+trHTML); 
                                    },
                                    complete: function(xhr, status){
                                        var xhr = JSON.parse(xhr.responseText);
                                        //console.log('ajax change status :'+ status + ' with xhr: '+xhr);
                                    }
                                });// end inter-active table 
                    };

                  });
                </script>
                <!-- Page Specific JS Libraries Tables Pages-->
    <script src="<?php echo base_url('assets/libs/jquery-datatables/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/libs/jquery-datatables/js/dataTables.bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js'); ?>"></script>
    <script src="<?php echo base_url().'assets/js/pages/datatables.js'; ?>"></script>
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->
            
        </div>
		<!-- End right content -->