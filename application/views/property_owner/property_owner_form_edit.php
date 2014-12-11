        <!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
            	<!-- Page Heading Start -->
				<div class="page-heading">
            		<h1>Property Owner</h1>            		
                </div>
            	<!-- Page Heading End-->   
                <?php if($this->uri->segment(3,0) > 0){
                        // For edit or view
                        //$action = 'property_owner/update_owner_personal_details/'.$this->uri->segment(3,0).'/'.$this->uri->segment(4,0);
                        $action = 'unit_test/c_build_drop_property_type';
                        echo form_open($action, $form_attributes);
                        echo '<input type="hidden" name="property_owner_id" value="'.$this->uri->segment(3,0).'" id="input-'.$this->uri->segment(3,0).'" >';                       
                      } else {
                        // For new record
                        echo form_open('property_owner/create_prop_owner/', $form_attributes);
                      }
                ?>
                <div class="row">
					<div class="portlets">
                        <div class="widget">
                            <div class="widget-header">
                                <h2>Personal Details</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>                                 
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>                                
                            </div>
                            <div class="widget-content padding"> 
                                
                                <?php if(validation_errors() != false) {
                                        echo "<div id='errors'>" . validation_errors() . "</div>" ;
                                }?>

                                <div class="row" style="width:100%;">
                                  
                                    <div class="col-md-12 portlets container">
                                        <div class="form-group col-lg-4"> <!-- First Name -->
                                            <label class="sr-only" for="fn_name">First Name</label>
                                            <?php echo form_input($fn_attributes); echo form_error('first_name'); ?>
                                        </div><!-- form-group -->

                                        <div class="form-group col-lg-4"> <!-- Middle Name -->
                                            <label class="sr-only" for="mn_name">Middle Name</label>
                                            <?php echo form_input($mn_attributes); echo form_error('middle_name'); ?>
                                        </div><!-- form-group -->

                                        <div class="form-group col-lg-4"> <!-- Last Name -->
                                            <label class="sr-only" for="mn_name">Last Name</label>
                                            <?php echo form_input($ln_attributes); echo form_error('last_name'); ?>
                                        </div><!-- form-group -->
                                        <div class="form-group col-lg-4"> <!-- Status -->
                                            <label class="sr-only" for="status">Status</label>
                                            <select class="form-control input-sm" name="na4">
                                                <option value="" <?php echo set_select('na4', '', TRUE); ?> >Select a Nationality</option>
                                                <?php foreach($country_nationality_list as $nationality) { 
                                                    echo '<option value="'.$nationality->nationality.'">'.$nationality->nationality.'</option>';
                                                } ?>
                                            </select>
                                        </div><!-- form-group -->

                                    </div><!-- col-md-12 col-lg-12 portlets -->
                                </div><!-- row -->                               
                            </div><!-- widget-content padding -->
                               
                        <div class="widget">
                            <div class="widget-header">   
                                <h2>Contact Details</h2> 
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>                                    
                                </div>                                                              
                            </div>
                            <div class="widget-content padding">
                                <div class="row">
                                    <div class="col-md-12">   
                                        
                                        <div class="form-group">
                                            <div class="row">                                            
                                                <div class="col-md-3"><h6><?php echo form_error('na1'); ?></h6><input type="text" name="na1" value="<?php foreach(array_slice($nationality_lists,0,1) as $nationality){ echo $nationality->nationality; } echo set_value('na1'); ?>" class="form-control input-sm" placeholder="Nationality 1"></div>
                                                <input type="hidden" name="na1_id" value="<?php foreach(array_slice($nationality_lists,0,1) as $nationality){ echo $nationality->tb_nationality_id; }?>"/>                                           
                                                <div class="col-md-3"><h6><?php echo form_error('na2'); ?></h6><input type="text" name="na2" value="<?php foreach(array_slice($nationality_lists,1,1) as $nationality){ echo $nationality->nationality;} echo set_value('na2'); ?>" class="form-control input-sm" placeholder="Nationality (2)"></div>
                                                <input type="hidden" name="na2_id" value="<?php foreach(array_slice($nationality_lists,1,1) as $nationality){ echo $nationality->tb_nationality_id;} ?>"/>                                            
                                                <div class="col-md-3"><h6><?php echo form_error('na3'); ?></h6><input type="text" name="na3" value="<?php foreach(array_slice($nationality_lists,2,1) as $nationality){ echo $nationality->nationality; } echo set_value('na3'); ?>" class="form-control input-sm" placeholder="Nationality (3)"></div>
                                                <input type="hidden" name="na3_id" value="<?php foreach(array_slice($nationality_lists,2,1) as $nationality){  echo $nationality->tb_nationality_id; }?>"/>                                            
                                                <div class="col-md-3"><h6><?php echo form_error('na4'); ?></h6><input type="text" name="na4" value="<?php foreach(array_slice($nationality_lists,3,1) as $nationality){ echo $nationality->nationality; } echo set_value('na4'); ?>" class="form-control input-sm" placeholder="Nationality (4)"></div>
                                                <input type="hidden" name="na4_id" value="<?php foreach(array_slice($nationality_lists,3,1) as $nationality){  echo $nationality->tb_nationality_id; } ?>"/>                                            
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3"><h6><?php echo form_error('ppn1'); ?></h6><input type="text" name="ppn1" value="<?php if(count($passport_lists)>0) {foreach(array_slice($passport_lists,0,1) as $passport){ echo $passport->passport_no; }} echo set_value('ppn1'); ?>" class="form-control input-sm" placeholder="Passport No.(1)"></div>
                                                <input type="hidden" name="ppn1_id" value="<?php if($passport_lists){ foreach(array_slice($passport_lists,0,1) as $passport){ echo $passport->tb_passport_id; }}?>"/>                                           
                                                <div class="col-md-3"><h6><?php echo form_error('ppn2'); ?></h6><input type="text" name="ppn2" value="<?php foreach(array_slice($passport_lists,1,1) as $passport){ echo $passport->passport_no; }echo set_value('ppn2'); ?>" class="form-control input-sm" placeholder="Passport No.(2)"></div>
                                                <input type="hidden" name="ppn2_id" value="<?php foreach(array_slice($passport_lists,1,1) as $passport){ echo $passport->tb_passport_id; }?>"/> 
                                                <div class="col-md-3"><h6><?php echo form_error('ppn3'); ?></h6><input type="text" name="ppn3" value="<?php foreach(array_slice($passport_lists,2,1) as $passport){ echo $passport->passport_no; }echo set_value('ppn3'); ?>" class="form-control input-sm" placeholder="Passport No.(3)"></div>
                                                <input type="hidden" name="ppn3_id" value="<?php foreach(array_slice($passport_lists,2,1) as $passport){ echo $passport->tb_passport_id; }?>"/> 
                                                <div class="col-md-3"><h6><?php echo form_error('ppn4'); ?></h6><input type="text" name="ppn4" value="<?php foreach(array_slice($passport_lists,3,1) as $passport){ echo $passport->passport_no; }echo set_value('ppn4'); ?>" class="form-control input-sm" placeholder="Passport No.(4)"></div>
                                                <input type="hidden" name="ppn4_id" value="<?php foreach(array_slice($passport_lists,3,1) as $passport){ echo $passport->tb_passport_id; }?>"/> 
                                            </div>
                                        </div>

                                        <div id="addrDiv" class="widget">
                    <!-- Address -->    <?php $i=1; if(count($address_lists)==0) { ?>
                                            <span> <input type="hidden" name="address_id[]" value=""/> 
                                                                                  
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
                                                                    <div class="col-md-3"><h6><?php echo form_error('country[]'); ?></h6><input type="text" name="country[]" value="<?php echo set_value('country[]'); ?>" class="form-control input-sm" placeholder="Country">
                                                                        <p class="help-block">required<?php echo form_error('country[]'); ?></p>
                                                                    </div> 
                                                                    <div class="col-md-3"><h6><?php echo form_error('city[]'); ?></h6><input type="text" name="city[]" value="<?php echo set_value('city'); ?>" class="form-control input-sm" placeholder="City"></div>
                                                                    
                                                                </div>
                                                            </div>                                       
                                                            
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-md-3"><h6><?php echo form_error('comm[]'); ?></h6><input type="text" name="comm[]" value="<?php echo set_value('comm[]'); ?>" class="form-control input-sm" placeholder="Community"></div>
                                                                    <div class="col-md-3"><h6><?php echo form_error('subcom[]'); ?></h6><input type="text" name="subcom[]" value="<?php echo set_value('subcom[]'); ?>" class="form-control input-sm" placeholder="Sub Community"></div>
                                                                    <div class="col-md-3"><h6><?php echo form_error('addr_street[]'); ?></h6><input type="text" name="addr_street[]" value="<?php echo set_value('addr_street[]'); ?>" class="form-control input-sm" placeholder="Street"></div>
                                                                </div>
                                                            </div>                                                                  
                                                        </div>                          
                                                    </div>                               
                                            </div>
                                            </span>
                                            <?php } else { foreach($address_lists as $address){ ?> 
                                            <span> <input type="hidden" name="address_id[]" value="<?php echo $address->tb_address_id; ?>"/> 
                                                                                  
                                            <div class="widget-header transparent">
                                                <h2><i class="fa fa-home"></i><strong> Owner</strong> Address <?php echo $i;?></h2>
                                                <div class="additional-btn">                                
                                                   <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                                </div>
                                            </div>
                                            <div class="widget-content padding">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-md-3"><h6><?php echo form_error('country[]'); ?></h6><input type="text" name="country[]" value="<?php echo $address->addressCountry; echo set_value('country[]'); ?>" class="form-control input-sm" placeholder="Country">
                                                                        <p class="help-block">* required<?php echo form_error('country[]'); ?></p>
                                                                    </div>
                                                                    <div class="col-md-3"><h6><?php echo form_error('city[]'); ?></h6><input type="text" name="city[]" value="<?php echo $address->addressCity; echo set_value('city[]'); ?>" class="form-control input-sm" placeholder="City"></div>
                                                                    
                                                                </div>
                                                            </div>                                       
                                                            
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-md-3"><h6><?php echo form_error('comm[]'); ?></h6><input type="text" name="comm[]" value="<?php echo $address->addressCommunity; echo set_value('comm[]'); ?>" class="form-control input-sm" placeholder="Community"></div>
                                                                    <div class="col-md-3"><h6><?php echo form_error('subcom[]'); ?></h6><input type="text" name="subcom[]" value="<?php echo $address->addressSubcommunity; echo set_value('subocom[]'); ?>" class="form-control input-sm" placeholder="Sub Community"></div>
                                                                    <div class="col-md-3"><h6><?php echo form_error('addr_street[]'); ?></h6><input type="text" name="addr_street[]" value="<?php echo $address->address; echo set_value('addr_street[]'); ?>" class="form-control input-sm" placeholder="Street"></div>
                                                                    <div  class="btn btn-sm" style="margin-top: 11px; margin-left: -12px;" ><a href="<?php $url='property_owner/del_addr/'.$this->uri->segment(3,0).'/'.$this->uri->segment(4,0).'/'.$address->tb_address_id; echo base_url($url); ?>"  data-toggle="tooltip" title="Delete Address <?php echo $i;?>"><i class="glyphicon glyphicon-remove"></i></a> </div>
                                                                </div>
                                                            </div>                                                                  
                                                        </div>                          

                                                    </div>                               
                                            </div>
                                            </span>
                                            <?php ++$i;}} ?>                             
                                        </div> 

                                        
                                            <div class="form-group"  style="margin-left: 12px;">
                                                <div class="row">
                                                    <div id="addaddrbtn">
                                                        <button class="btn btn-green-1">Add Another Address</button>
                                                    </div>
                                                </div>
                                            </div>
                    <!-- / Address -->  
                    <!-- Telephone -->
                                        <div class="widget" id="Telephone">
                                            <div class="widget-header padding">
                                                <h2><i class="fa fa-phone-square"></i><strong> Telephone</strong> Number</h2>
                                                <div class="additional-btn">                                
                                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                                </div>
                                            </div>
                                            <div class="widget-content">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div id="telnoDiv" class="row">
                                                            
                                                            <?php $i=1; if(count($telno_lists)>0) { foreach($telno_lists as $telno){ ?>
                                                            <span><input type="hidden" name="telno_id[]" value="<?php echo $telno->tb_telephone_no_id; ?>"/> 

                                                                <div class="col-md-3"><h6><?php echo form_error('telephone_no[]'); ?></h6>
                                                                    <input type="text" name="telephone_no[]" value="<?php echo $telno->telephone_no; echo set_value('telephone_no[]'); ?>" class="form-control input-sm" placeholder="<?php echo $i; ?>.">                                                                    
                                                                </div>
                                                                <span  class="btn btn-sm col-md-1" style="margin-top: 11px; margin-left: -50px;float: left !important;" ><a href="<?php $url='property_owner/del_telno/'.$this->uri->segment(3,0).'/'.$this->uri->segment(4,0).'/'.$telno->tb_telephone_no_id; echo base_url($url); ?>"  data-toggle="tooltip" title="Delete Telephone No <?php echo $i;?>"><i class="glyphicon glyphicon-remove"></i></a> </span>
                                                            </span>
                                                            <?php ++$i;}} else { ?>
                                                            <span><input type="hidden" name="telno_id[]" value=""/> 
                                                                <div class="col-md-3"><h6><?php echo form_error('telephone_no[]'); ?></h6><input type="text" name="telephone_no[]" value="<?php echo set_value('telephone_no[]'); ?>" class="form-control input-sm" placeholder="<?php echo $i; ?>."></div>
                                                            </span>                                         
                                                            <?php ++$i;} ?>                                               
                                                            </div>                                                                                        
                                                        </div>    
                                                        <div id="addTelnoBtn"><a href=""  class="btn btn-green-1" >Add Another Telephone No</a></div>                                                          
                                                    </div>                          
                                                </div>
                                            </div>                          
                    <!-- /Telephone --> </div><!-- widget -->
                    <!-- Fax No --> 
                                        <div class="widget"  id="Fax">
                                            <div class="widget-header padding">
                                                <h2><i class="glyphicon glyphicon-print"></i><strong> Fax</strong> Number</h2>
                                                <div class="additional-btn">                                
                                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                                </div>
                                            </div>
                                            <div class="widget-content">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div id="faxnoDiv" class="row">
                                                            <?php $i=1; if(count($faxno_lists)>0) { foreach($faxno_lists as $faxno){ ?>
                                                                <span><input type="hidden" name="faxno_id[]" value="<?php echo $faxno->tb_fax_no_id; ?>"/>

                                                                    <div class="col-md-3"><h6><?php echo form_error('fax_no[]'); ?></h6><input type="text" name="fax_no[]" value="<?php echo $faxno->fax_no; echo set_value('fax_no[]'); ?>" class="form-control input-sm" placeholder="<?php echo $i; ?>."></div>
                                                                    <span  class="btn btn-sm col-md-1" style="margin-top: 11px; margin-left: -50px;float: left !important;" ><a href="<?php $url='property_owner/del_faxno/'.$this->uri->segment(3,0).'/'.$this->uri->segment(4,0).'/'.$faxno->tb_fax_no_id; echo base_url($url); ?>"  data-toggle="tooltip" title="Delete Fax #<?php echo $i;?>"><i class="glyphicon glyphicon-remove"></i></a> </span>                                                               
                                                                </span>
                                                            <?php ++$i;}} else { ?>  
                                                            
                                                                <span>
                                                                    <div class="col-md-3"><h6><?php echo form_error('fax_no[]'); ?></h6><input type="text" name="fax_no[]" value="" class="form-control input-sm" placeholder="<?php echo $i; ?>."></div>
                                                                </span>
                                                            
                                                            <?php ++$i; } ?>
                                                            </div>
                                                        </div> 
                                                        <div id="addFaxnoBtn"><a href=""  class="btn btn-green-1" >Add Another Fax No</a></div>                                                               
                                                    </div>                          
                                                </div>
                                            </div>                          
                    <!-- /Fax No -->    </div><!-- widget -->
                    <!-- Mobile No -->
                                        <div class="widget"  id="Mobile">
                                            <div class="widget-header padding">
                                                <h2><i class="icon-mobile-2"></i><strong>Mobile</strong> Number</h2>
                                                <div class="additional-btn">                                
                                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                                </div>
                                            </div>
                                            <div class="widget-content">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <div id="mobilenoDiv" class="row">
                                                            <?php $i=1; if(count($mobileno_lists)>0) { foreach($mobileno_lists as $mobileno){ ?>
                                                            
                                                            <span><input type="hidden" name="mobileno_id[]" value="<?php echo $mobileno->tb_mobile_id; ?>"/>
                                                                <div class="col-md-3"><h6><?php echo form_error('mobno[]'); ?></h6><input type="text" name="mobno[]" value="<?php echo $mobileno->mobile_no; echo set_value('mobno[]'); ?>" class="form-control input-sm" placeholder="<?php echo $i; ?>."></div>
                                                                <span  class="btn btn-sm col-md-1" style="margin-top: 11px; margin-left: -50px;float: left !important;" ><a href="<?php $url='property_owner/del_mobileno/'.$this->uri->segment(3,0).'/'.$this->uri->segment(4,0).'/'.$mobileno->tb_mobile_id; echo base_url($url); ?>"  data-toggle="tooltip" title="Delete Fax #<?php echo $i;?>"><i class="glyphicon glyphicon-remove"></i></a> </span>                                                               
                                                            </span>
                                                           
                                                            <?php ++$i;}} else { ?>                                                 
                                                           
                                                            <span>
                                                                <div class="col-md-3"><h6><?php echo form_error('mobno[]'); ?></h6><input type="text" name="mobno[]" value="" class="form-control input-sm" placeholder="<?php echo $i; ?>."></div>
                                                            </span>
                                                            <?php  ++$i; } ?>
                                                            </div>
                                                        </div>
                                                        <div id="addMobilenoBtn"><a href=""  class="btn btn-green-1" >Add Another Mobile No</a></div>                                                              
                                                    </div>                          
                                                </div>
                                            </div>                          
                                        </div>
                    <!-- End Mobile -->
                    <!-- Email -->      <div class="widget"  id="Email">
                                            <div class="widget-header padding">
                                                <h2><i class="icon-mail-3"></i><strong> Email</strong> Address</a></h2>
                                                <div class="additional-btn">                                
                                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                                </div>
                                            </div>
                                            <div class="widget-content">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div id="emailDiv" class="form-group">
                                                            <div class="row">
                                                            <?php $i=1; if(count($email_lists)>0) { foreach($email_lists as $email){ ?>
                                                            <span><input type="hidden" name="email_id[]" value="<?php echo $email->tb_email_id; ?>"/>
                                                                <div class="col-md-3"><h6><?php echo form_error('email_array[]'); ?></h6><input type="text" name="email_array[]" value="<?php echo $email->email; echo set_value('email_array[]'); ?>" class="form-control input-sm" placeholder="<?php echo $i; ?>."></div>
                                                                <span  class="btn btn-sm col-md-1" style="margin-top: 11px; margin-left: -50px;float: left !important;" ><a href="<?php $url='property_owner/del_email/'.$this->uri->segment(3,0).'/'.$this->uri->segment(4,0).'/'.$email->tb_email_id; echo base_url($url); ?>"  data-toggle="tooltip" title="Delete Email <?php echo $i;?>"><i class="glyphicon glyphicon-remove"></i></a> </span>                                                               
                                                            </span>
                                                            
                                                            <?php ++$i;}} else { ?>  
                                                            
                                                            <span>
                                                                <div class="col-md-3"><h6><?php echo form_error('email_array[]'); ?></h6><input type="text" name="email_array[]" value="" class="form-control input-sm" placeholder="<?php echo $i; ?>."></div>
                                                            </span>
                                                            <?php ++$i;} ?>                                               
                                                            
                                                            </div><!-- row -->
                                                        </div><!-- form-group -->
                                                        <div id="addEmailBtn"><a href=""  class="btn btn-green-1" >Add Another Email</a></div>                                                                                                                             
                                                    </div><!-- col-md-12 -->   
                                                </div><!-- row -->
                                            </div><!-- widget-content padding -->          
                                        </div>                         
                    <!-- End Email -->  
                                    </div><!-- col-md-12 -->                         
                                </div><!-- row -->                     
					       </div><!-- widget-content padding -->
                        </div>
                    </div>
				</div><!-- row -->
                <!-- Property Details Start here --> 
                <div id="property_details_form" class="col-sm-6 portlets"> 
                    <div class="widget">
                        <div class="widget-header">
                            <h2><strong>Property Details</strong> Form <?php echo $city; ?></h2>
                            <div class="additional-btn">
                                <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <a href="<?php echo base_url('nationality/create_page/'.$this->uri->segment(3,0)); ?>"><i class="glyphicon glyphicon-plus"></i></a>
                                <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                            </div>
                        </div>
                        <div class="widget-content padding"> 
                            <div class="form-group"> <!-- City -->
                                <div class="row">
                                    <label for="city" class="col-sm-3 col-md-3 control-label">Property Emirate :</label>
                                    <div class="col-sm-9">
                                        <select name="city_name" id="city" tabindex="1" class="form-control">
                                            
                                            <option value="<?php if($city){ echo $city_id; } ?>" > <?php if($city){ echo $city; }  else { echo 'Select City'; } ?></option>                                                   

                                            <option value="1" <?php echo set_select('city', 'Abu Dhabi'); ?>>Abu Dhabi</option>
                                            <option value="2" <?php echo set_select('city', 'Ajman'); ?>>Ajman</option>
                                            <option value="3" <?php echo set_select('city', 'Al Ain'); ?>>Al Ain</option>
                                            <option value="4" <?php echo set_select('city', 'Dubai'); ?>>Dubai</option>
                                            <option value="5" <?php echo set_select('city', 'Fujairah'); ?>>Fujairah</option>
                                            <option value="6" <?php echo set_select('city', 'Ras Al Khaimah'); ?>>Ras Al Khaimah</option>
                                            <option value="7" <?php echo set_select('city', 'Sharjah'); ?>>Sharjah</option>
                                            <option value="8" <?php echo set_select('city', 'Umm Al Quwain'); ?>>Umm Al Quwain</option>
                                        </select>
                                    <p class="help-block"><?php echo form_error('city_name'); ?></p>
                                    </div>
                                </div>
                            </div><!-- form-group -->

                            <div class="form-group"> <!-- Community -->
                                <div class="row">
                                    <label for="community" class="col-sm-3 col-md-3 control-label">Property Community :</label>
                                    <div class="col-sm-9">
                                        <select name="community" id="cityDrp" class="form-control">
                                        <option value="<?php if($community){ echo $community_id; } ?>" > <?php if($community){ echo $community; }  else { echo 'Please select first City'; } ?></option> 
                                        </select>
                                        <p class="help-block"><?php echo form_error('community'); ?></p>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->

                            <div class="form-group"> <!-- Sub-community -->
                                <div class="row">
                                    <label for="subcommunity" class="col-sm-3 col-md-3 control-label">Property Sub-community :</label>
                                    <div class="col-sm-9">
                                        <select name="subcommunity" id="subcommunity" class="form-control">
                                        <option value="<?php if($subcommunity){ echo $subcommunity_id; } ?>" > <?php if($subcommunity){ echo $subcommunity; }  else { echo 'Please select first Community'; } ?></option> 
                                        </select>
                                        <p class="help-block"><?php echo form_error('subcommunity'); ?> </p>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->

                            <div class="form-group"> <!-- Property -->
                                <div class="row">
                                    <label for="reproperty" class="col-sm-3 col-md-3 control-label">Property Name :</label>
                                    <div class="col-sm-9">
                                    <?php echo form_input($reproperty_attributes); ?>
                                    <p class="help-block"><?php echo form_error('re_property'); ?> </p>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->

                            <div class="form-group"> <!-- Property Type -->
                                <div class="row">
                                    <label for="property_type" class="col-sm-3 col-md-3 control-label">Property Type :</label>
                                    <!--<div class="col-sm-9">
                                    <?php echo form_input($property_type_attributes); ?>
                                    <p class="help-block"> </p>
                                    </div>-->
                                    <div class="form-group col-sm-9 col-md-9">
                                        <div class="row">                                      
                                            <div class="col-sm-6 col-md-6"><h6><?php echo form_error('ptype1'); ?></h6>
                                                <!--<input type="text" name="ptype1" value="<?php echo set_value('ptype1'); ?>" class="form-control input-sm">-->
                                                <select name="property_category" id="property_category" class="form-control input-sm">
                                                    <option value="<?php if($property_category){echo $property_category;} echo set_select('property_category'); ?>"><?php echo $property_category; ?></option>
                                                    <option value="commercial_type">Commercial</option>
                                                    <option value="residential_type">Residential</option>
                                                </select>
                                            </div>
                                            <div class=" col-sm-6 col-md-6"><h6><?php echo form_error('ptype2'); ?></h6>
                                                <!--<input type="text" name="property_type" value="<?php echo set_value('ptype2'); ?>" class="form-control input-sm">-->
                                                <select name="property_type" id="property_type" class="form-control">
                                                    <option value="<?php echo $property_type; echo set_select('property_type'); ?>"><?php echo $property_type; ?></option>
                                                    <?php foreach($property_type as $key => $value) { ?>
                                                    <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div><!-- col-sm-6 col-md-6 -->
                                        </div><!-- row -->
                                    </div><!-- form group -->
                                </div><!-- row -->
                            </div><!-- form-group -->

                            <div class="form-group"> <!-- Street -->
                                <div class="row">
                                    <label for="street" class="col-sm-3 col-md-3 control-label">Street :</label>
                                    <div class="col-sm-9">
                                    <?php echo form_input($street_name_attributes); ?>
                                    <p class="help-block"> </p>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->

                            <div class="form-group"> <!-- Building name -->
                                <div class="row">
                                    <label for="building_name" class="col-sm-3 col-md-3 control-label">Building name :</label>
                                    <div class="col-sm-9">
                                    <?php echo form_input($building_name_attributes); ?>
                                    <p class="help-block"> </p>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->

                            <div class="form-group"> <!-- Unit no -->
                                <div class="row">
                                    <label for="unit_number" class="col-sm-3 col-md-3 control-label">Unit no :</label>
                                    <div class="col-sm-9">
                                    <?php echo form_input($unit_number_attributes); ?>
                                    <p class="help-block"> </p>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->

                            <div class="form-group"> <!-- Developer name -->
                                <div class="row">
                                    <label for="developer_name" class="col-sm-3 col-md-3 control-label">Developer name :</label>
                                    <div class="col-sm-9">
                                    <?php echo form_input($developer_name_attributes); ?>
                                    <p class="help-block"> </p>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->                               

                      
                        </div><!-- widget-content padding -->
                    </div><!-- widget -->                       
                </div><!-- portlets -->
                <!-- Property Details End here -->
                <div class="col-sm-6 portlets"><!-- Notes -->
                    <div class="widget">
                        <div class="widget-header">
                            <h2><i class=" icon-clipboard"></i><strong> Property</strong> Notes</h2>
                            <div class="additional-btn">
                                <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                            </div>
                        </div>
                        <div class="widget-content padding">
                            <div class="form-group">
                                <div class="row">                               
                                    <div class="col-md-6">
                                      <textarea name="note" style="resize:none; height:200px; width:330px"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div><!-- widget-content padding -->
                    </div><!-- widget -->
                </div><!-- portlet -->
                <div class="col-sm-6 portlets"><!-- Sample Image -->
                    <div class="widget">
                        <div class="widget-header">
                            <h2><i class=" icon-clipboard"></i><strong> Property</strong> Gallery</h2>
                            <div class="additional-btn">
                                <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                            </div>
                        </div>
                        <div class="widget-content padding">
                            <div class="form-group">
                                <div class="row">                               
                                    <div class="col-md-6">
                                      <textarea name="note" style="resize:none; height:200px; width:330px"></textarea>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->
                        </div><!-- widget-content padding -->
                    </div><!-- widget -->
                </div><!-- portlet -->
                
                <div class="col-sm-6 portlets"> 
                    <div class="widget">                                      
                    <div class="widget-content padding ">                                                              
                        <div class="form-group">
                            <div id="formsubmit" style="text-align:right;">
                                <!--<a href="<?php $url='property_owner/update_owner_personal_details/'.$this->uri->segment(3,0).'/'.$this->uri->segment(4,0); echo base_url($url); ?>"  name="formsubmit" class="btn btn-green-1" >Update</a>                                        -->
                                <button  type="submit" name="formsubmit" class="btn btn-green-1" >Update</button>
                                <a href="<?php echo base_url(); ?>property_owner" type="text" class="btn btn-default" tabindex="10">Cancel<a>
                            </div><!-- formsubmit -->
                        </div> <!-- form-group -->
                    </div><!-- widget-content padding -->
                   </div>
                </div><!-- portlets -->
                </div><!-- col-md-12 portlets -->
                </jQuery(document).ready(function(){
                </form> 
    			<!-- Footer Start -->
                <footer>
                    Soft Line Cleaning Services &copy; 2014
                    <div class="footer-links pull-right">
                    	<a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact Us</a>
                    </div>
                </footer>
                <!-- Footer End -->
                <script type="text/javascript">                    
                $(document).ready(function() {  
                    var addrDiv  = $('#addrDiv');                   
                    var telnoDiv = $('#telnoDiv');
                    var faxnoDiv = $('#faxnoDiv');
                    var mobilenoDiv = $('#mobilenoDiv');
                    var emailDiv = $('#emailDiv');
                    var i = $('#addrDiv span').size() + 1;
                    var t = $('#telnoDiv span').size() + 1;
                    var f = $('#faxnoDiv span').size() + 1;
                    var m = $('#mobilenoDiv span').size() + 1;
                    var e = $('#emailDiv span').size() + 1;

                    // Add Address Button
                    $('#addaddrbtn').on('click', function() {
                            $('<span><input type="hidden" name="address_id[]" value=""/> <div class="widget-header transparent"><h2><i class="fa fa-home"></i><strong> Owner</strong> Address '+i+'</h2><div class="additional-btn"><a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a></div></div><div class="widget-content padding"><div class="row"><div class="col-md-12"><div class="form-group"><div class="row"><div class="col-md-3"><h6><?php echo form_error("country[]"); ?></h6><input type="text" name="country[]" value="" class="form-control input-sm" placeholder="Country"></div><div class="col-md-3"><h6><?php echo form_error("city[]"); ?></h6><input type="text" name="city[]" value="" class="form-control input-sm" placeholder="City"></div></div></div><div class="form-group"><div class="row"><div class="col-md-3"><h6><?php echo form_error("comm[]"); ?></h6><input type="text" name="comm[]" value="" class="form-control input-sm" placeholder="Community"></div><div class="col-md-3"><h6><?php echo form_error("subcom[]"); ?></h6><input type="text" name="subcom[]" value="" class="form-control input-sm" placeholder="Sub Community"></div><div class="col-md-3"><h6><?php echo form_error("addr_street[]"); ?></h6><input type="text" name="addr_street[]" value="" class="form-control input-sm" placeholder="Street"></div> <div class="widget-content padding"> <a href="" class="btn btn-green-1">Remove</a></div></div></div></div></div></div></span>').appendTo(addrDiv);
                            i++;
                        return false;
                    });

                    $('#remaddr').on('click', function() { 
                        if( i > 2 ) {
                            $(this).parents('span').remove();
                            i--;
                        }
                    });
                    // Add Telephone Button
                    $('#addTelnoBtn').on('click', function() {
                            $('<span><input type="hidden" name="telno_id[]" value=""/><div class="col-md-3"><h6><?php echo form_error("telephone_no[]"); ?></h6><input type="text" name="telephone_no[]" value="<?php echo set_value("telephone_no[]"); ?>" class="form-control input-sm" placeholder="'+t+'"></div> <div class="widget-content padding"> <a href="" class="btn btn-green-1" id="remTelno">Remove</a></div></div></div></div></div></div></span>').appendTo(telnoDiv);                        
                            t++;
                        return false;
                    });

                    $('#remTelno').on('click', function() { 
                        if( t > 2 ) {
                            $(this).parents('span').remove();
                            t--;
                        }
                        return false;
                    });
                    // Add Fax Button
                    $('#addFaxnoBtn').on('click', function() {
                            $('<span><input type="hidden" name="faxno_id[]" value=""/><div class="col-md-3"><h6><?php echo form_error("fax_no[]"); ?></h6><input type="text" name="fax_no[]" value="" class="form-control input-sm" placeholder="'+f+'."></div> <div class="widget-content padding"> <a href="" class="btn btn-green-1" id="remFaxno">Remove</a></div></div></div></div></div></div></span>').appendTo(faxnoDiv);                        
                            f++;
                        return false;
                    });

                    $('#remFaxno').on('click', function() { 
                        if( f > 2 ) {
                            $(this).parents('span').remove();
                            f--;
                        }
                        return false;
                    });
                    // Add Mobile Button
                    $('#addMobilenoBtn').on('click', function() {
                            $('<span><input type="hidden" name="mobileno_id[]" value=""/><div class="col-md-3"><h6><?php echo form_error("mobno[]"); ?></h6><input type="text" name="mobno[]" value="" class="form-control input-sm" placeholder="'+m+'"></div> <div class="widget-content padding"> <a href="" class="btn btn-green-1" id="remMobileno">Remove</a></div></div></div></div></div></div></span>').appendTo(mobilenoDiv);                        
                            m++;
                        return false;
                    });

                    $('#remMobileno').on('click', function() { 
                        if( m > 2 ) {
                            $(this).parents('span').remove();
                            m--;
                        }
                        return false;
                    });
                    // Add Email Button
                    $('#addEmailBtn').on('click', function() { 
                            $('<span><input type="hidden" name="email_id[]" value=""/><div class="col-md-3"><h6><?php echo form_error("email_array[]"); ?></h6><input type="text" name="email_array[]" value="" class="form-control input-sm" placeholder="'+e+'"></div> <div class="widget-content padding"> <a href="" class="btn btn-green-1" id="remEmailno">Remove</a></div></div></div></div></div></div></span>').appendTo(emailDiv);                        
                            e++;
                        return false;
                    });

                    $('#remEmail').on('click', function() { 
                        if( e > 2 ) {
                            $(this).parents('span').remove();
                            e--;
                        }
                        return false;
                    });

                    $("#city").change(function(){  
                            /*dropdown post */
                            $.ajax({
                            url:"<?php echo base_url(); ?>propertyfinder/buildDropCities",    
                            data: {city_name: $(this).val()},
                            type: "POST",
                            success: function(data){                            
                                $("#cityDrp").html(data);
                            }                    
                        });
                    });

                    $("#formsubmit").click(function(){  
                        var passportno = $('#passport_no').val();   
                        console.log('passportno: '+ passportno);                                         
                        /*dropdown post */
                        $.ajax({
                            url:"<?php echo base_url(); ?>property_owner/update_owner_personal_details/'.$this->uri->segment(3,0).'/'.$this->uri->segment(4,0)",    
                            data: {passport_no: passportno} ,
                            type: "POST",
                            success: function(data){                            
                                console.log('successfull');
                            }
                        }); 
                    });
                    $("#cityDrp").change(function(){  
                        /*dropdown post */
                        $.ajax({
                        url:"<?php echo base_url(); ?>propertyfinder/buildDropSubCom",    
                        data: {community_name: $(this).val()},
                        type: "POST",
                        success: function(data){                            
                            $("#subcommunity").html(data);
                        }                    
                        });
                    }); 
                    $("#property_category").change(function(){ 
                            console.log($(this).val()); 
                            /*dropdown post */
                            $.ajax({
                            url:"<?php echo base_url(); ?>property_owner/buildDropPropertyTypes",    
                            data: {property_category: $(this).val()},
                            type: "POST",
                            success: function(data){                                                          
                                $("#property_type").html(data);
                            }                    
                        });
                    });              
                });                     
                </script>			
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->