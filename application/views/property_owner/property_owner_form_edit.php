        <!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content" style="margin-top:10px;">
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
            	<!-- Page Heading Start -->
				<div class="page-heading">
            		<h1>Property Owner</h1>            		
                </div>
            	<!-- Page Heading End-->   
                <?php   $action = 'property_owner/update_owner_personal_details/'.$this->uri->segment(3,0).'/'.$this->uri->segment(4,0);
                        //$action = 'unit_test';
                        echo form_open($action, $form_attributes);
                        echo '<input type="hidden" name="property_owner_id" value="'.$this->uri->segment(3,0).'" id="input-'.$this->uri->segment(3,0).'" >';                       
                ?>
                <div class="row">
					<div class="portlets">
                        <div class="widget">
                            <div class="widget-header">
                                <h2>Personal Details </h2>
                                <div class="additional-btn">
                                    <span class="db-msg"><?php if($this->session->flashdata('db_msg')){echo $this->session->flashdata('db_msg');}?></span>
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>                                 
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>                                
                            </div>
                            <div class="widget-content padding"> 
                                
                                <?php if(validation_errors() != false) {
                                        echo "<div id='errors'>" . validation_errors() . "</div>" ;
                                }?>

                                <div class="row">
                                    <div class="form-group col-md-3 col-lg-3 input-sm"> <!-- First Name -->
                                        <label class="sr-only input-sm" for="fn_name">First Name</label>
                                        <?php echo form_input($fn_attributes); echo form_error('first_name'); ?>
                                        <p class="help-block" >First Name</p>
                                    </div><!-- form-group -->

                                    <div class="form-group col-md-3 col-lg-3 input-sm"> <!-- Middle Name -->
                                        <label class="sr-only input-sm" for="mn_name">Middle Name</label>
                                        <?php echo form_input($mn_attributes); echo form_error('middle_name'); ?>
                                        <p class="help-block" >Middle Name</p>
                                    </div><!-- form-group -->

                                    <div class="form-group col-md-3 col-lg-3 input-sm"> <!-- Last Name -->
                                        <label class="sr-only input-sm" for="mn_name">Last Name</label>
                                        <?php echo form_input($ln_attributes); echo form_error('last_name'); ?>
                                        <p class="help-block" >Last Name</p>
                                    </div><!-- form-group -->
                                    <div class="form-group col-md-3 col-lg-3 input-sm"> <!-- Status -->                                            
                                        <select class="form-control input-sm" name="status">
                                            <option value="" <?php echo set_select('status', ''); ?>>Status</option>
                                            <option value="1" <?php echo set_select('status', ''); ?>>Active</option>
                                            <option value="0" <?php echo set_select('status', ''); ?>>Suspended</option>                                                
                                        </select>
                                        <p class="help-block" >Status</p>
                                    </div><!-- form-group -->                                    
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
                                        <div class="form-group" >
                                            <div class="row">                                            
                                                <div class="col-md-3"><h6><?php echo form_error('na1'); ?></h6>
                                                    <input type="hidden" name="na1_id" value="<?php if($nationality_lists) {foreach(array_slice($nationality_lists,0,1) as $nationality){ echo $nationality['tb_nationality_id']; }}?>"/>
                                                    <select class="form-control input-sm" name="na1" title="select Remove Nationality to delete the item">                                                        
                                                        <option value="<?php if($nationality_lists){ if(array_slice($nationality_lists,0,1)){ foreach(array_slice($nationality_lists,0,1) as $nat) { echo $nat['nationality']; }}} ?>" > <?php if($nationality_lists) { if(array_slice($nationality_lists,0,1)){ foreach(array_slice($nationality_lists,0,1) as $nat) { echo $nat['nationality']; }}} else { echo 'Select a Nationality'; }?></option>                                                   
                                                        <option value="">Remove Nationality</option> 
                                                    <?php foreach($country_nationality_list as $nationality) { 
                                                      echo '<option value="'.$nationality->nationality.'"'.set_select('na1', '').'>'.$nationality->nationality.'</option>';
                                                     } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-3"><h6><?php echo form_error('na2'); ?></h6>
                                                    <input type="hidden" name="na2_id" value="<?php if($nationality_lists){ foreach(array_slice($nationality_lists,1,1) as $nationality){ echo $nationality['tb_nationality_id'];}} ?>"/>     
                                                    <select class="form-control input-sm" name="na2" title="select Remove Nationality to delete the item">
                                                        <option value="<?php if($nationality_lists){ if(array_slice($nationality_lists,1,1)){ foreach(array_slice($nationality_lists,1,1) as $nat) { echo $nat['nationality']; }}} ?>" > <?php if($nationality_lists){ if(array_slice($nationality_lists,1,1)){ foreach(array_slice($nationality_lists,1,1) as $nat) { echo $nat['nationality']; }}} else { echo 'Select a Nationality'; }?></option>                                                   
                                                        <option value="">Remove Nationality</option> 
                                                    <?php foreach($country_nationality_list as $nationality) { 
                                                      echo '<option value="'.$nationality->nationality.'"'.set_select('na2', '').'>'.$nationality->nationality.'</option>';
                                                     } ?>
                                                    </select>
                                                </div>                                        
                                                <div class="col-md-3"><h6><?php echo form_error('na3'); ?></h6>
                                                    <input type="hidden" name="na3_id" value="<?php if($nationality_lists){ foreach(array_slice($nationality_lists,2,1) as $nationality){  echo $nationality['tb_nationality_id']; }}?>"/>            
                                                    <select class="form-control input-sm" name="na3" title="select Remove Nationality to delete the item">
                                                        <option value="<?php if($nationality_lists){ if(array_slice($nationality_lists,2,1)){ foreach(array_slice($nationality_lists,2,1) as $nat) { echo $nat['nationality']; }}} ?>" > <?php if($nationality_lists){ if(array_slice($nationality_lists,2,1)){ foreach(array_slice($nationality_lists,2,1) as $nat) { echo $nat['nationality']; }}} else { echo 'Select a Nationality'; }?></option>                                                   
                                                        <option value="">Remove Nationality</option>
                                                    <?php foreach($country_nationality_list as $nationality) { 
                                                      echo '<option value="'.$nationality->nationality.'"'.set_select('na3', '').'>'.$nationality->nationality.'</option>';
                                                     } ?>
                                                    </select>
                                                </div>                                                                                              
                                                <div class="col-md-3"><h6><?php echo form_error('na4'); ?></h6>
                                                    <input type="hidden" name="na4_id" value="<?php if($nationality_lists){ foreach(array_slice($nationality_lists,3,1) as $nationality){  echo $nationality['tb_nationality_id']; }} ?>"/>       
                                                    <select class="form-control input-sm" name="na4" title="select Remove Nationality to delete the item">
                                                        <option value="<?php if($nationality_lists){ if(array_slice($nationality_lists,3,1)){ foreach(array_slice($nationality_lists,3,1) as $nat) { echo $nat['nationality']; }}} ?>" > <?php if($nationality_lists){ if(array_slice($nationality_lists,3,1)){ foreach(array_slice($nationality_lists,3,1) as $nat) { echo $nat['nationality']; }}} else { echo 'Select a Nationality'; }?></option>                                                   
                                                        <option value="">Remove Nationality</option>                                                   
                                                    <?php foreach($country_nationality_list as $nationality) { 
                                                      echo '<option value="'.$nationality->nationality.'"'.set_select('na4', '').'>'.$nationality->nationality.'</option>';
                                                     } ?>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-top: -10px;">
                                            <div class="row">
                                                <div class="col-md-3"><h6><?php echo form_error('ppn1'); ?></h6><input type="text" name="ppn1" value="<?php if($passport_lists){ foreach(array_slice($passport_lists,0,1) as $passport){ echo $passport->passport_no; }} echo set_value('ppn1'); ?>" title="clear the box to remove" class="form-control input-sm" placeholder="Passport No.(1)"></div>
                                                <input type="hidden" name="ppn1_id" value="<?php if($passport_lists){ foreach(array_slice($passport_lists,0,1) as $passport){ echo $passport->tb_passport_id; }}?>"/>                                           
                                                <div class="col-md-3"><h6><?php echo form_error('ppn2'); ?></h6><input type="text" name="ppn2" value="<?php if($passport_lists){ foreach(array_slice($passport_lists,1,1) as $passport){ echo $passport->passport_no; }} echo set_value('ppn2'); ?>" class="form-control input-sm" title="clear the box to remove" placeholder="Passport No.(2)"></div>
                                                <input type="hidden" name="ppn2_id" value="<?php if($passport_lists){ foreach(array_slice($passport_lists,1,1) as $passport){ echo $passport->tb_passport_id; }}?>"/> 
                                                <div class="col-md-3"><h6><?php echo form_error('ppn3'); ?></h6><input type="text" name="ppn3" value="<?php if($passport_lists){foreach(array_slice($passport_lists,2,1) as $passport){ echo $passport->passport_no; }} echo set_value('ppn3'); ?>" class="form-control input-sm" title="clear the box to remove" placeholder="Passport No.(3)"></div>
                                                <input type="hidden" name="ppn3_id" value="<?php if($passport_lists){ foreach(array_slice($passport_lists,2,1) as $passport){ echo $passport->tb_passport_id; }}?>"/> 
                                                <div class="col-md-3"><h6><?php echo form_error('ppn4'); ?></h6><input type="text" name="ppn4" value="<?php if($passport_lists){foreach(array_slice($passport_lists,3,1) as $passport){ echo $passport->passport_no; }} echo set_value('ppn4'); ?>" class="form-control input-sm" title="clear the box to remove" placeholder="Passport No.(4)"></div>
                                                <input type="hidden" name="ppn4_id" value="<?php if($passport_lists){ foreach(array_slice($passport_lists,3,1) as $passport){ echo $passport->tb_passport_id; }}?>"/> 
                                            </div>
                                        </div>

                                        <div id="addrDiv" class="widget" style="margin-top:-10px !important; padding-top: -10px !important;">
                    <!-- Address -->    <?php $i=1; if(count($address_lists)==0) { ?>
                                            <span> <input type="hidden" name="address_id[]" value=""/>
                                            <div class="widget-header  transparent" >
                                                <h2><i class="fa fa-home"></i><strong> Owner</strong> Address 1</h2>
                                                <div class="additional-btn">                                
                                                   <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                                </div>
                                            </div>
                                            <div class="widget-content padding" style="margin-top:-10px !important; padding-top: -10px !important;">
                                                <div class="row">                                                  
                                                    <div class="form-group"  style="margin-top: -15px; padding-top:-15px;">
                                                        <div class="row">
                                                            <div class="col-md-3"><h6><?php echo form_error('country[]'); ?></h6>
                                                                <select class="form-control input-sm" name="country[]">
                                                                    <option value="<?php set_select('country[]', '');?>" >Select a Country</option> 
                                                                    <?php foreach($country_nationality_list as $nationality) { 
                                                                        echo '<option value="'.$nationality->country_name.'">'.$nationality->country_name.'</option>';
                                                                    } ?>
                                                                </select>
                                                                <p class="help-block" style="margin-top: -2px;">* required<?php echo form_error('country[]'); ?></p> 
                                                            </div>
                                                            <div class="col-md-3"><h6><?php echo form_error('city[]'); ?></h6><input type="text" name="city[]" value="<?php echo set_value('city'); ?>" class="form-control input-sm" placeholder="City"></div>        
                                                        </div>
                                                    </div>
                                                    <div class="form-group"  style="margin-top: -30px;">
                                                        <div class="row">
                                                            <div class="col-md-3"><h6><?php echo form_error('comm[]'); ?></h6><input type="text" name="comm[]" value="<?php echo set_value('comm[]'); ?>" class="form-control input-sm" placeholder="Community"></div>
                                                            <div class="col-md-3"><h6><?php echo form_error('subcom[]'); ?></h6><input type="text" name="subcom[]" value="<?php echo set_value('subcom[]'); ?>" class="form-control input-sm" placeholder="Sub Community"></div>
                                                            <div class="col-md-3"><h6><?php echo form_error('addr_street[]'); ?></h6><input type="text" name="addr_street[]" value="<?php echo set_value('addr_street[]'); ?>" class="form-control input-sm" placeholder="Street"></div>
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
                                            <div class="widget-content padding"  style="margin-top:-10px !important; padding-top: -10px !important;">
                                                <div class="row">                                                
                                                    <div class="form-group" style="margin-top: -20px; padding-top:-20px;">
                                                        <div class="row">
                                                            <div class="col-md-3"><h6><?php echo form_error('country[]'); ?></h6>                                                               
                                                                <select class="form-control input-sm" name="country[]">
                                                                    <option value="<?php echo $address->addressCountry; set_select('country[]', '', TRUE);?>" > <?php if($address->addressCountry){ echo $address->addressCountry; } else { echo 'Select a Country'; }?></option> 
                                                                <?php foreach($country_nationality_list as $nationality) { 
                                                                    echo '<option value="'.$nationality->country_name.'">'.$nationality->country_name.'</option>';
                                                                } ?>
                                                                </select>
                                                                <p class="help-block" style="margin-top: -2px;">* required<?php echo form_error('country[]'); ?></p>
                                                            </div>
                                                            <div class="col-md-3"><h6><?php echo form_error('city[]'); ?></h6><input type="text" name="city[]" value="<?php echo $address->addressCity; echo set_value('city[]'); ?>" class="form-control input-sm" placeholder="City"></div>                                                                    
                                                        </div>
                                                    </div>  
                                                    <div class="form-group" style="margin-top: -30px;">
                                                        <div class="row">
                                                            <div class="col-md-3"><h6><?php echo form_error('comm[]'); ?></h6><input type="text" name="comm[]" value="<?php echo $address->addressCommunity; echo set_value('comm[]'); ?>" class="form-control input-sm" placeholder="Community"></div>
                                                            <div class="col-md-3"><h6><?php echo form_error('subcom[]'); ?></h6><input type="text" name="subcom[]" value="<?php echo $address->addressSubcommunity; echo set_value('subocom[]'); ?>" class="form-control input-sm" placeholder="Sub Community"></div>
                                                            <div class="col-md-3"><h6><?php echo form_error('addr_street[]'); ?></h6><input type="text" name="addr_street[]" value="<?php echo $address->addressStreet; echo set_value('addr_street[]'); ?>" class="form-control input-sm" placeholder="Street"></div>
                                                            <div  class="btn btn-sm" style="margin-top: 11px; margin-left: -12px;" ><a href="<?php $url='property_owner/del_addr/'.$this->uri->segment(3,0).'/'.$this->uri->segment(4,0).'/'.$address->tb_address_id; echo base_url($url); ?>"  data-toggle="tooltip" title="Delete Address <?php echo $i;?>"><i class="glyphicon glyphicon-remove"></i></a> </div>
                                                        </div>
                                                    </div>
                                                </div>                               
                                            </div>
                                            </span>
                                            <?php ++$i;}} ?>                             
                                        </div>                                         
                                        <div class="form-group"  style="margin-left: 15px; margin-top:-20px; ">
                                            <div class="row">
                                                <div id="addaddrbtn">
                                                    <button class="btn btn-green-1 btn-xs">Add Another Address</button>
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
                                                        <div id="addTelnoBtn"><a href=""  class="btn btn-green-1 btn-xs" >Add Another Telephone No</a></div>                                                          
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
                                                        <div id="addFaxnoBtn"><a href=""  class="btn btn-green-1 btn-xs" >Add Another Fax No</a></div>                                                               
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
                                                        <div id="addMobilenoBtn"><a href=""  class="btn btn-green-1 btn-xs" >Add Another Mobile No</a></div>                                                              
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
                                                        <div class="form-group">
                                                            <div id="emailDiv" class="row">
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
                                                        <div id="addEmailBtn" style="margin-left:8px; padding-left:8px; "><a href=""  class="btn btn-green-1 btn-xs" >Add Another Email</a></div>                                                                                                                             
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
                <?php if($owner_property_list) {foreach($owner_property_list as $m2m){ ?>
                <div id="property_details_form" class="col-sm-6 portlets" width="100%"> 
                    <div class="widget">
                        <div class="widget-header">
                            <h2><strong>Property Details</strong> Form</h2>
                            <div class="additional-btn">
                                <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <!--<a href="<?php echo base_url('property_owner/add_another_create_edit');?>" target="_blank"><i class="glyphicon glyphicon-plus"></i></a> <!-- added by Lem 12/15/2014 -->
                                <a href="#" data-toggle="modal" data-target="#add-property" data-href="<?php echo base_url('property_owner/add_another_create_edit');?>" ><i class="glyphicon glyphicon-plus"></i></a> <!-- added by Lem 12/15/2014 -->
                                <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                            </div>
                        </div>
                        <div class="widget-content padding"> 
                            <div class="form-group"> <!-- City -->
                                <div class="row">
                                    <label for="city" class="col-sm-3 col-md-3 control-label input-sm">Property Emirate:</label>
                                    <div class="col-sm-9">
                                        <select name="city_name" id="city" tabindex="1" class="form-control">
                                            
                                            <option value="<?php echo $m2m['city']; ?>" > <?php if($m2m['city']){ echo $m2m['city']; }  else { echo 'Select City'; } ?></option>                                                   

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
                                    <label for="community" class="col-sm-3 col-md-3 control-label input-sm">Property Community :</label>
                                    <div class="col-sm-9">
                                        <select name="community" id="cityDrp" class="form-control">
                                        <option value="<?php if($m2m['community']){ echo $m2m['community']; } ?>" > <?php if($m2m['community']){ echo $m2m['community']; }  else { echo 'Please select first City'; } ?></option>                                                   
                                        <!--<option value="<?php if($community){ echo $community_id; echo set_select('community', $community_id); } ?>" > <?php if($community){ echo $community;  echo set_select('community', $community); }  else { echo 'Please select first City'; } ?></option> -->
                                        </select>
                                        <span class="help-block"><?php echo form_error('community'); ?></span>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->

                            <div class="form-group"> <!-- Sub-community -->
                                <div class="row">
                                    <label for="subcommunity" class="col-sm-3 col-md-3 control-label input-sm">Property Sub-community :</label>
                                    <div class="col-sm-9">
                                        <select name="subcommunity" id="subcommunity" class="form-control">
                                        <option value="<?php if($m2m['subcommunity']){ echo $m2m['subcommunity']; } ?>" > <?php if($m2m['subcommunity']){ echo $m2m['subcommunity']; }  else { echo 'Please select first Community'; } ?></option>                                                   
                                        <!--<option value="<?php if($subcommunity){ echo $subcommunity_id;  echo set_select('subcommunity', $subcommunity_id); } ?>" > <?php if($subcommunity){ echo $subcommunity;  echo set_select('subcommunity', $subcommunity); }  else { echo 'Please select first Community'; } ?></option> -->
                                        </select>
                                        <span class="help-block"><?php echo form_error('subcommunity'); ?> </span>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->

                            <div class="form-group"> <!-- Property -->
                                <div class="row">
                                    <label for="reproperty" class="col-sm-3 col-md-3 control-label input-sm">Property Name :</label>
                                    <div class="col-sm-9">                                    
                                    <input type="text" name="re_property" id="re_property" class="form-control input-sm" value="<?php echo $m2m['re_property']; set_value('re_property') ?>" placeholder="Property Name" />                                    
                                    <p class="help-block"><?php echo form_error('re_property'); ?> </p>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->

                            <div class="form-group"> <!-- Property Type -->
                                <div class="row">
                                    <label for="property_type" class="col-sm-3 col-md-3 control-label input-sm"  style="margin-top: -10px;">Classification :</label>                                   
                                    <div class="form-group col-sm-9 col-md-9" style="margin-top: -20px;">
                                        <div class="row">                                      
                                            <div class="col-sm-6 col-md-6"><h6><?php echo form_error('ptype1'); ?></h6>
                                                <!--<input type="text" name="ptype1" value="<?php echo set_value('ptype1'); ?>" class="form-control input-sm">-->
                                                <select name="property_category" id="property_category" class="form-control input-sm">
                                                    <option value="<?php echo $m2m['property_category']; ?>" > <?php if($m2m['property_category'] && $m2m['property_category'] =='commercial_type'){ echo 'Commercial'; } elseif ($m2m['property_category'] && $m2m['property_category'] =='commercial_type') { echo 'Residential'; }?></option>                                                   
                                                    <!--<option value="<?php if($property_category){echo $property_category;} echo set_select('property_category', $property_category); ?>"><?php echo $property_category; ?></option>-->
                                                    <option value="commercial_type">Commercial</option>
                                                    <option value="residential_type">Residential</option>
                                                </select>
                                                <span class="help-block">Property Category</span>
                                            </div>
                                            <div class=" col-sm-6 col-md-6"><h6><?php echo form_error('ptype2'); ?></h6>
                                                <!--<input type="text" name="property_type" value="<?php echo set_value('ptype2'); ?>" class="form-control input-sm">-->
                                                <select name="property_type" id="property_type" class="form-control input-sm">
                                                    <option value="<?php echo $m2m['property_type']; ?>" > <?php if($m2m['property_type']){ echo $m2m['property_type']; }  ?></option>                                                   
                                                    <!--<option value="<?php if($property_type){echo $property_type;} echo set_select('property_type', $property_type); ?>"><?php echo $property_category; ?></option>-->
                                                    <option value="<?php echo $property_type; echo set_select('property_type'); ?>"><?php echo $property_type; ?></option>
                                                    <?php foreach($property_type as $key => $value) { ?>
                                                    <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                                    <?php } ?>
                                                </select>
                                                <span class="help-block">Property Type</span>
                                            </div><!-- col-sm-6 col-md-6 -->
                                        </div><!-- row -->
                                    </div><!-- form group -->
                                </div><!-- row -->
                            </div><!-- form-group -->

                            <div class="form-group" style="margin-top: -40px;"> <!-- Street -->
                                <div class="row">
                                    <label for="street" class="col-sm-3 col-md-3 control-label input-sm">Street :</label>
                                    <div class="col-sm-9 input-sm">
                                        <input type="text" name="street" id="street"class="form-control input-sm" value="<?php echo $m2m['street']; echo set_value('street'); ?>" placeholder="Street" />                                    
                                        <p class="help-block"> </p>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->

                            <div class="form-group"> <!-- Building name -->
                                <div class="row">
                                    <label for="building_name" class="col-sm-3 col-md-3 control-label input-sm">Building name :</label>
                                    <div class="col-sm-9 input-sm">
                                        <input type="text" name="building_name" id="building_name" class="form-control input-sm" value="<?php echo $m2m['building_name']; echo set_value('building_name'); ?>" placeholder="Building Name" />                                                                            
                                        <p class="help-block"> </p>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->

                            <div class="form-group"> <!-- Unit no -->
                                <div class="row">
                                    <label for="unit_number" class="col-sm-3 col-md-3 control-label input-sm">Unit no :</label>
                                    <div class="col-sm-9 input-sm">
                                    <input type="text" name="unit_number" id="unit_number" class="form-control input-sm" value="<?php echo $m2m['unit_number']; echo set_value('unit_number'); ?>" placeholder="Unit No" />                                                                            
                                    <p class="help-block"> </p>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->

                            <div class="form-group"> <!-- Developer name -->
                                <div class="row">
                                    <label for="developer_name" class="col-sm-3 col-md-3 control-label input-sm">Developer name :</label>
                                    <div class="col-sm-9 input-sm">
                                    <input type="text" name="developer_name" id="developer_name" class="form-control input-sm" value="<?php echo $m2m['developer_name']; echo set_value('developer_name'); ?>" placeholder="Developers name" />                                                                            
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
                                      <textarea type="text" name="description" id="description" style="resize:none; height:200px; width:330px" class="form-control input-sm" value="<?php  echo $m2m['description']; set_value('note'); ?>"/><?php echo $m2m['description']; ?></textarea>
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
                                      <textarea name="note" style="resize:none; height:230px; width:330px"></textarea>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->
                        </div><!-- widget-content padding -->
                    </div><!-- widget -->
                </div><!-- portlet -->

                <?php }} else { ?>
<!-- start property details form empty -->
                <div id="property_details_form" class="col-sm-6 portlets" width="100%"> 
                    <div class="widget">
                        <div class="widget-header">
                            <h2><strong>Property Details</strong> Form</h2>
                            <div class="additional-btn">
                                <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <!--<a href="<?php echo base_url('property_owner/add_another_create_edit');?>" target="_blank"><i class="glyphicon glyphicon-plus"></i></a> <!-- added by Lem 12/15/2014 -->
                                 <a href="#" data-toggle="modal" data-target="#add-property" data-href="<?php echo base_url('property_owner/add_another_create_edit');?>" ><i class="glyphicon glyphicon-plus"></i></a> <!-- added by Lem 12/15/2014 -->
                                <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                            </div>
                        </div>
                        <div class="widget-content padding"> 
                            <div class="form-group"> <!-- City -->
                                <div class="row">
                                    <label for="city" class="col-sm-3 col-md-3 control-label input-sm">Property Emirate:</label>
                                    <div class="col-sm-9">
                                        <select name="city_name" id="city" tabindex="1" class="form-control">                                            
                                            <option value="" >Select City</option>                           
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
                                    <label for="community" class="col-sm-3 col-md-3 control-label input-sm">Property Community :</label>
                                    <div class="col-sm-9">
                                        <select name="community" id="cityDrp" class="form-control">
                                        <option value="" >Please select first City</option>                                                                                           
                                        </select>
                                        <span class="help-block"><?php echo form_error('community'); ?></span>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->

                            <div class="form-group"> <!-- Sub-community -->
                                <div class="row">
                                    <label for="subcommunity" class="col-sm-3 col-md-3 control-label input-sm">Property Sub-community :</label>
                                    <div class="col-sm-9">
                                        <select name="subcommunity" id="subcommunity" class="form-control">
                                            <option value="" >Please select first Community</option>                                        
                                        </select>
                                        <span class="help-block"><?php echo form_error('subcommunity'); ?> </span>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->

                            <div class="form-group"> <!-- Property -->
                                <div class="row">
                                    <label for="reproperty" class="col-sm-3 col-md-3 control-label input-sm">Property Name :</label>
                                    <div class="col-sm-9">                                    
                                    <input type="text" name="re_property" id="re_property" class="form-control input-sm" value="" placeholder="Property Name" />                                    
                                    <p class="help-block"><?php echo form_error('re_property'); ?> </p>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->

                            <div class="form-group"> <!-- Property Type -->
                                <div class="row">
                                    <label for="property_type" class="col-sm-3 col-md-3 control-label input-sm"  style="margin-top: -10px;">Classification :</label>                                   
                                    <div class="form-group col-sm-9 col-md-9" style="margin-top: -20px;">
                                        <div class="row">                                      
                                            <div class="col-sm-6 col-md-6"><h6><?php echo form_error('property_category'); ?></h6>                                                
                                                <select name="property_category" id="property_category" class="form-control input-sm">
                                                    <option value="" >Select Category</option>                                                                                                       
                                                    <option value="commercial_type">Commercial</option>
                                                    <option value="residential_type">Residential</option>
                                                </select>
                                                <!--<span class="help-block">Property Category</span>-->
                                            </div>
                                            <div class=" col-sm-6 col-md-6"><h6><?php echo form_error('property_type'); ?></h6>                                              
                                                <select name="property_type" id="property_type" class="form-control input-sm">
                                                    <option value="<?php echo set_select('property_type'); ?>" ><?php if(set_select('property_type')){ echo set_select('property_type'); } else { echo 'Property Type'; } ?></option>                                                                                                                                                           
                                                    <?php foreach($property_type as $key => $value) { ?>
                                                    <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                                    <?php } ?>
                                                </select>
                                                <!--<span class="help-block">Property Type</span>-->
                                            </div><!-- col-sm-6 col-md-6 -->
                                        </div><!-- row -->
                                    </div><!-- form group -->
                                </div><!-- row -->
                            </div><!-- form-group -->

                            <div class="form-group" style="margin-top: -20px;"> <!-- Street -->
                                <div class="row">
                                    <label for="street" class="col-sm-3 col-md-3 control-label input-sm">Street :</label>
                                    <div class="col-sm-9 input-sm">
                                        <input type="text" name="street" id="street"class="form-control input-sm" value="<?php echo set_value('street'); ?>" placeholder="Street" />                                    
                                        <p class="help-block"> </p>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->

                            <div class="form-group"> <!-- Building name -->
                                <div class="row">
                                    <label for="building_name" class="col-sm-3 col-md-3 control-label input-sm">Building name :</label>
                                    <div class="col-sm-9 input-sm">
                                        <input type="text" name="building_name" id="building_name" class="form-control input-sm" value="<?php echo set_value('building_name'); ?>" placeholder="Building Name" />                                                                            
                                        <p class="help-block"> </p>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->

                            <div class="form-group"> <!-- Unit no -->
                                <div class="row">
                                    <label for="unit_number" class="col-sm-3 col-md-3 control-label input-sm">Unit no :</label>
                                    <div class="col-sm-9 input-sm">
                                    <input type="text" name="unit_number" id="unit_number" class="form-control input-sm" value="<?php echo set_value('unit_number'); ?>" placeholder="Unit No" />                                                                            
                                    <p class="help-block"> </p>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->

                            <div class="form-group"> <!-- Developer name -->
                                <div class="row">
                                    <label for="developer_name" class="col-sm-3 col-md-3 control-label input-sm">Developer name :</label>
                                    <div class="col-sm-9 input-sm">
                                    <input type="text" name="developer_name" id="developer_name" class="form-control input-sm" value="<?php echo set_value('developer_name'); ?>" placeholder="Developers name" />                                                                            
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
                                      <textarea type="text" name="description" id="description" style="resize:none; height:200px; width:330px" class="form-control input-sm" value=""/></textarea>
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
                                      <textarea name="note" style="resize:none; height:230px; width:330px"></textarea>
                                    </div>
                                </div><!-- row -->
                            </div><!-- form-group -->
                        </div><!-- widget-content padding -->
                    </div><!-- widget -->
                </div><!-- portlet -->
                <?php } ?>
<!-- end property details form empty -->
                <div class="col-sm-6 portlets" style="margin-top: -100px;"> 
                    <div class="widget" >                                      
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
                    	<a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact </a>
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

                    // db_msg
                    $('.db_msg').on('load',function(){
                        $(this).fadeOut(60000);
                    })                   

                    // Add Address Button
                    $('#addaddrbtn').on('click', function() {
                        var php_script = "<?php foreach($country_nationality_list as $nationality){ echo "<option value='".$nationality->country_name."'>".$nationality->country_name."</option>"; } ?>"; 
                            $('<span><input type="hidden" name="address_id[]" value=""/><div class="widget-header transparent"><h2><i class="fa fa-home"></i><strong> Owner</strong> Address '+i+'</h2><div class="additional-btn"><a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a></div></div><div class="widget-content padding" style="margin-top:-10px !important; padding-top: -10px !important;"><div class="row"><div class="form-group" style="margin-top: -15px; padding-top:-15px;"><div class="row"><div class="col-md-3"><h6><?php echo form_error("country[]"); ?></h6><select class="form-control input-sm" name="country[]"><option value="<?php set_select("country[]", "");?>" >Select a Country</option>' + php_script + '</select><p class="help-block" style="margin-top: -2px;">* required<?php echo form_error("country[]"); ?></p></div><div class="col-md-3"><h6><?php echo form_error("city[]"); ?></h6><input type="text" name="city[]" value="" class="form-control input-sm" placeholder="City"></div></div></div><div class="form-group" style="margin-top: -30px;"><div class="row"><div class="col-md-3"><h6><?php echo form_error("comm[]"); ?></h6><input type="text" name="comm[]" value="" class="form-control input-sm" placeholder="Community"></div><div class="col-md-3"><h6><?php echo form_error("subcom[]"); ?></h6><input type="text" name="subcom[]" value="" class="form-control input-sm" placeholder="Sub Community"></div><div class="col-md-3"><h6><?php echo form_error("addr_street[]"); ?></h6><input type="text" name="addr_street[]" value="" class="form-control input-sm" placeholder="Street"></div><div class="widget-content padding"> <a href="" class="btn btn-green-1 btn-xs">Remove</a></div></div></div></div></div></span>').appendTo(addrDiv);                               
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
                            $('<span><input type="hidden" name="telno_id[]" value=""/><div class="col-md-3"><h6><?php echo form_error("telephone_no[]"); ?></h6><input type="text" name="telephone_no[]" value="<?php echo set_value("telephone_no[]"); ?>" class="form-control input-sm" placeholder="'+t+'"></div> <div class="widget-content padding"> <a href="" class="btn btn-green-1 btn-xs" id="remTelno">Remove</a></div></div></div></div></div></div></span>').appendTo(telnoDiv);                        
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
                            $('<span><input type="hidden" name="faxno_id[]" value=""/><div class="col-md-3"><h6><?php echo form_error("fax_no[]"); ?></h6><input type="text" name="fax_no[]" value="" class="form-control input-sm" placeholder="'+f+'."></div> <div class="widget-content padding"> <a href="" class="btn btn-green-1 btn-xs" id="remFaxno">Remove</a></div></div></div></div></div></div></span>').appendTo(faxnoDiv);                        
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
                            $('<span><input type="hidden" name="mobileno_id[]" value=""/><div class="col-md-3"><h6><?php echo form_error("mobno[]"); ?></h6><input type="text" name="mobno[]" value="" class="form-control input-sm" placeholder="'+m+'"></div> <div class="widget-content padding"> <a href="" class="btn btn-green-1 btn-xs" id="remMobileno">Remove</a></div></div></div></div></div></div></span>').appendTo(mobilenoDiv);                        
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
                            $('<span><input type="hidden" name="email_id[]" value=""/><div class="col-md-3"><h6><?php echo form_error("email_array[]"); ?></h6><input type="text" name="email_array[]" value="" class="form-control input-sm" placeholder="'+e+'"></div> <div class="widget-content padding"> <a href="" class="btn btn-green-1 btn-xs" id="remEmailno">Remove</a></div></div></div></div></div></div></span>').appendTo(emailDiv);                        
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
                    /*
                    $("#formsubmit").click(function(){  
                        var passportno = $('#passport_no').val();   
                        console.log('passportno: '+ passportno);                                         
                        // dropdown post 
                        $.ajax({
                            url:"<?php echo base_url(); ?>property_owner/update_owner_personal_details/'.$this->uri->segment(3,0).'/'.$this->uri->segment(4,0)",    
                            data: {passport_no: passportno} ,
                            type: "POST",
                            success: function(data){                            
                                console.log('successfull');
                            }
                        }); 
                    });*/

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