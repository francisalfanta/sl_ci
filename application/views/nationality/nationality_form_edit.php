        <!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            	<!-- Page Heading Start -->
				<div class="page-heading">
            		<h1>Property Owner</h1>            		
                </div>
            	<!-- Page Heading End-->   
                <?php $action = 'nationality/update_owner_contact_details/'.$this->uri->segment(3,0).'/'.$this->uri->segment(4,0);
                        echo form_open($action, $form_attributes);
                        echo '<input type="hidden" name="property_owner_id" value="'.$this->uri->segment(3,0).'" id="input-'.$this->uri->segment(3,0).'" >';       
                ?>
                <div class="row">
					<div class="portlets">
                        <div class="widget">
                            <div class="widget-header transparent">
                                <h2><strong>Personal Details</strong> Form</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>                                
                            </div>
                            <div class="widget-content"> 
                                
                                <?php echo validation_errors(); ?>

                                <div class="form-group container" style="width:100%;"> <!-- Last Name -->
                                    <label for="passport_no">Passport No</label>
                                    <?php echo form_input($passport_no_attr); ?>
                                </div><!-- form-group -->

                                <div class="row" style="width:100%;">                                  
                                    <div class="col-md-12 portlets container">
                                        <div class="form-group col-lg-4"> <!-- First Name -->
                                            <label for="fn_name">First Name</label>
                                            <?php echo form_input($fn_attributes); ?>
                                        </div><!-- form-group -->

                                        <div class="form-group col-lg-4"> <!-- Middle Name -->
                                            <label for="mn_name">Middle Name</label>
                                            <?php echo form_input($mn_attributes); ?>
                                        </div><!-- form-group -->

                                        <div class="form-group col-lg-4"> <!-- Last Name -->
                                            <label for="mn_name">Last Name</label>
                                            <?php echo form_input($ln_attributes); ?>
                                        </div><!-- form-group -->

                                    </div><!-- col-md-12 col-lg-12 portlets -->
                                </div><!-- row -->                               
                            </div><!-- widget-content padding -->                             
                        
					</div><!-- col-md-12 portlets -->                    
                    
                        <!-- Horizontal Form Start here --> 
                        <div class="portlets">                        
                            <div class="widget">
                                <div class="widget-header transparent">
                                    <h2><strong>Contact Details</strong> Form</h2>
                                    <div class="additional-btn">
                                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                    </div>
                                </div>
                                <div class="widget-content padding">                        
                                <div id="horizontal-form">
                                       
                                    <div class="form-group"> <!-- Tel no -->
                                        <label for="telephone_no" class="col-sm-2 control-label">Telephone No</label>
                                        <div class="col-sm-10">
                                        <?php echo form_input($tel_attributes); ?>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group"> <!-- Mobile no -->
                                        <label for="mobile_no" class="col-sm-2 control-label">Mobile No</label>
                                        <div class="col-sm-10">
                                        <?php echo form_input($mobile_attributes); ?>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group"> <!-- Email -->
                                        <label for="email" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                        <?php echo form_input($email_attributes); ?>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group"> <!-- Fax no -->
                                        <label for="fax_no" class="col-sm-2 control-label">Fax No</label>
                                        <div class="col-sm-10">
                                        <?php echo form_input($fax_attributes); ?>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group"> <!-- Address -->
                                        <label for="address" class="col-sm-2 control-label">Street Address</label>
                                        <div class="col-sm-10">
                                        <?php echo form_input($addr_attributes); ?>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group"> <!-- Postal Code -->
                                        <label for="postalcode" class="col-sm-2 control-label">Postal Code</label>
                                        <div class="col-sm-10">
                                        <?php echo form_input($postalcode_attributes); ?>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group"> <!-- Postal Box no -->
                                        <label for="postalboxno" class="col-sm-2 control-label">Postal Box no</label>
                                        <div class="col-sm-10">
                                        <?php echo form_input($postalboxno_attributes); ?>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group"> <!-- Locality to Subcommunity -->
                                        <label for="addesssubcommunity" class="col-sm-2 control-label">Subcommunity</label>
                                        <div class="col-sm-10">
                                        <?php echo form_input($addr_subcommunity_attributes); ?>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group"> <!-- Community -->
                                        <label for="addesscommunity" class="col-sm-2 control-label">Community</label>
                                        <div class="col-sm-10">
                                        <?php echo form_input($addr_community_attributes); ?>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group"> <!-- Region to City -->
                                        <label for="addresscity" class="col-sm-2 control-label">City</label>
                                        <div class="col-sm-10">
                                        <?php echo form_input($addr_city_attributes); ?>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->   

                                    <div class="form-group"> <!-- Country -->
                                        <label for="addresscountry" class="col-sm-2 control-label">Country</label>
                                        <div class="col-sm-10">
                                        <?php echo form_dropdown('addresscountry', $country_options, $addresscountry, $country_select_attributes); ?>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                </div>
                                </div>
                            </div>                        
                        </div>
                        <!-- Horizontal Form End here -->

                    <div class="portlets">
                        <div class="widget">
                        <div class="widget-content padding">
                            <div class="form-group">
                                <div>
                                    <button type="submit" name="formsubmit" class="btn btn-green-1" tabindex="4">Save</button>                                              
                                    <a href="<?php $url = "property_owner/view_property_owner/".$this->uri->segment(3,0).'/'.$this->uri->segment(4,0); echo base_url($url); ?>"><button type="text" class="btn btn-default" tabindex="10">Cancel</button></a>
                                 </div>
                            </div> <!-- form-group -->
                        </div><!-- widget-content padding -->
                        </div><!-- widget -->
                    </div><!-- portlets submit button-->                    

                    
				</div><!-- row -->
                </form>
    			<!-- Footer Start -->
                <footer>
                    Soft Line Cleaning Services &copy; 2014
                    <div class="footer-links pull-right">
                    	<a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact </a>
                    </div>
                </footer>
                <!-- Footer End -->		
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->