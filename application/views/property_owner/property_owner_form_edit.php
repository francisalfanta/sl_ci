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
                        $action = 'unit_test';
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
                            <div class="widget-header transparent">
                                <h2>Personal Details</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>                                 
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>                                
                            </div>
                            <div class="widget-content"> 
                                
                                <?php echo validation_errors(); ?>

                                <div class="row" style="width:100%;">
                                  
                                    <div class="col-md-12 portlets container">
                                        <div class="form-group col-lg-4"> <!-- First Name -->
                                            <label class="sr-only" for="fn_name">First Name</label>
                                            <?php echo form_input($fn_attributes); ?>
                                        </div><!-- form-group -->

                                        <div class="form-group col-lg-4"> <!-- Middle Name -->
                                            <label class="sr-only" for="mn_name">Middle Name</label>
                                            <?php echo form_input($mn_attributes); ?>
                                        </div><!-- form-group -->

                                        <div class="form-group col-lg-4"> <!-- Last Name -->
                                            <label class="sr-only" for="mn_name">Last Name</label>
                                            <?php echo form_input($ln_attributes); ?>
                                        </div><!-- form-group -->

                                    </div><!-- col-md-12 col-lg-12 portlets -->

                                </div><!-- row -->
                               
                            </div><!-- widget-content padding -->
                           </form>    
                        <div class="widget">
                            <div class="widget-header transparent">   
                                <h2>Contact Details</h2> 
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="<?php echo base_url('nationality/create_page/'.$this->uri->segment(3,0)); ?>"><i class="icon-user-add"></i></a>
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
<!-- Address One -->    <?php $i=1; foreach($address_lists as $address){ ?> 
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
                                                <div class="col-md-3"><h6><?php echo form_error('clist1'); ?></h6><input type="text" name="clist1" value="<?php echo $address->addressCountry; echo set_value($address->addressCountry); ?>" class="form-control input-sm" placeholder="Country"></div>
                                                <div class="col-md-3"><h6><?php echo form_error('city1'); ?></h6><input type="text" name="city1" value="<?php echo $address->addressCity; echo set_value($address->addressCity); ?>" class="form-control input-sm" placeholder="City"></div>
                                                
                                            </div>
                                        </div>                                       
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3"><h6><?php echo form_error('add11'); ?></h6><input type="text" name="add11" value="<?php echo $address->addressCommunity; echo set_value($address->addressCommunity); ?>" class="form-control input-sm" placeholder="Community"></div>
                                                <div class="col-md-3"><h6><?php echo form_error('add12'); ?></h6><input type="text" name="add12" value="<?php echo $address->addressSubcommunity; echo set_value($address->addressSubcommunity); ?>" class="form-control input-sm" placeholder="Sub Community"></div>
                                                <div class="col-md-3"><h6><?php echo form_error('add13'); ?></h6><input type="text" name="add13" value="<?php echo $address->address; echo set_value($address->address); ?>" class="form-control input-sm" placeholder="Street"></div>
                                            </div>
                                        </div>                                                                  
                                    </div>                          
                                </div>                               
                        </div>
                        </span>
                        <?php ++$i;} ?>                             
                    </div> 


                    <div class="widget-content padding" style="margin-left: 12px;">
                        <div class="form-group">
                            <div class="row">
                                <div id="addaddrbtn">
                                    <button class="btn btn-green-1">Add Another Address</button>
                                </div>
                            </div>
                        </div>
                    </div>


                                    </div>                          
                                </div>
                     
					</div><!-- col-md-12 portlets -->
                     <!-- Horizontal Form Start here --> 
                        <div class="portlets">                        
                            <div class="widget">
                                <div class="widget-header transparent">
                                    <h2><strong>Property Details</strong> Form <?php echo $city; ?></h2>
                                    <div class="additional-btn">
                                        <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                    </div>
                                </div>
                                <div class="widget-content padding">                        
                                <div id="horizontal-form">
                                     
                                    <div class="form-group"> <!-- City -->
                                        <label for="city" class="col-sm-2 control-label">Property Emirate</label>
                                        <div class="col-sm-10">
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
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group"> <!-- Community -->
                                        <label for="community" class="col-sm-2 control-label">Property Community</label>
                                        <div class="col-sm-10">
                                        <select name="community" id="cityDrp" class="form-control">
                                        <option value="<?php if($community){ echo $community_id; } ?>" > <?php if($community){ echo $community; }  else { echo 'Please select first City'; } ?></option> 
                                        </select>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group"> <!-- Sub-community -->
                                        <label for="subcommunity" class="col-sm-2 control-label">Property Sub-community</label>
                                        <div class="col-sm-10">
                                        <select name="subcommunity" id="subcommunity" class="form-control">
                                        <option value="<?php if($subcommunity){ echo $subcommunity_id; } ?>" > <?php if($subcommunity){ echo $subcommunity; }  else { echo 'Please select first Community'; } ?></option> 
                                        </select>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group"> <!-- Property -->
                                        <label for="reproperty" class="col-sm-2 control-label">Property Name</label>
                                        <div class="col-sm-10">
                                        <?php echo form_input($reproperty_attributes); ?>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group"> <!-- Property Type -->
                                        <label for="property_type" class="col-sm-2 control-label">Property Type</label>
                                        <div class="col-sm-10">
                                        <?php echo form_input($property_type_attributes); ?>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group"> <!-- Street -->
                                        <label for="street" class="col-sm-2 control-label">Street</label>
                                        <div class="col-sm-10">
                                        <?php echo form_input($street_name_attributes); ?>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group"> <!-- Building name -->
                                        <label for="building_name" class="col-sm-2 control-label">Building name</label>
                                        <div class="col-sm-10">
                                        <?php echo form_input($building_name_attributes); ?>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group"> <!-- Unit no -->
                                        <label for="unit_number" class="col-sm-2 control-label">Unit no</label>
                                        <div class="col-sm-10">
                                        <?php echo form_input($unit_number_attributes); ?>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group"> <!-- Developer name -->
                                        <label for="developer_name" class="col-sm-2 control-label">Developer name</label>
                                        <div class="col-sm-10">
                                        <?php echo form_input($developer_name_attributes); ?>
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
                                <div id="formsubmit">
                                    <!--<a href="<?php $url='property_owner/update_owner_personal_details/'.$this->uri->segment(3,0).'/'.$this->uri->segment(4,0); echo base_url($url); ?>"  name="formsubmit" class="btn btn-green-1" >Update</a>                                        -->
                                    <button  type="submit" name="formsubmit" class="btn btn-green-1" >Update</button>
                                    <a href="<?php $url = "property_owner/view_property_owner/".$this->uri->segment(3,0).'/'.$this->uri->segment(4,0); echo base_url($url); ?>"><a href="" type="text" class="btn btn-default" tabindex="10">Cancel<a></a>
                                </div>
                            </div> <!-- form-group -->
                        </div><!-- widget-content padding -->
                        </div><!-- widget -->
                    </div><!-- portlets -->
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
                            $('<span><div class="widget-header transparent"><h2><i class="fa fa-home"></i><strong> Owner</strong> Address '+i+'</h2><div class="additional-btn"><a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a></div></div><div class="widget-content padding"><div class="row"><div class="col-md-12"><div class="form-group"><div class="row"><div class="col-md-3"><h6><?php echo form_error("clist'+i+'"); ?></h6><input type="text" name="clist'+i+'" value="" class="form-control input-sm" placeholder="Country"></div><div class="col-md-3"><h6><?php echo form_error("city'+i+'"); ?></h6><input type="text" name="city'+i+'" value="" class="form-control input-sm" placeholder="City"></div></div></div><div class="form-group"><div class="row"><div class="col-md-3"><h6><?php echo form_error("add'+i+'1"); ?></h6><input type="text" name="add'+i+'1" value="" class="form-control input-sm" placeholder="Community"></div><div class="col-md-3"><h6><?php echo form_error("add1'+i+'2"); ?></h6><input type="text" name="add'+i+'2" value="" class="form-control input-sm" placeholder="Sub Community"></div><div class="col-md-3"><h6><?php echo form_error("add1'+i+'3"); ?></h6><input type="text" name="add'+i+'3" value="" class="form-control input-sm" placeholder="Subcommunity"></div> <div class="widget-content padding"> <a href="" class="btn btn-green-1">Remove</a></div></div></div></div></div></div></span>').appendTo(addrDiv);
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
                            $('<div class="col-md-3"><h6><?php echo form_error("tel'+t+'"); ?></h6><input type="text" name="tel'+t+'" value="<?php echo set_value("tel'+t+'"); ?>" class="form-control input-sm" placeholder="'+t+'"></div> <div class="widget-content padding"> <a href="" class="btn btn-green-1" id="remTelno">Remove</a></div></div></div></div></div></div></span>').appendTo(telnoDiv);                        
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
                            $('<div class="col-md-3"><h6><?php echo form_error("fax'+f+'"); ?></h6><input type="text" name="fax'+f+'" value="" class="form-control input-sm" placeholder="'+f+'"></div> <div class="widget-content padding"> <a href="" class="btn btn-green-1" id="remFaxno">Remove</a></div></div></div></div></div></div></span>').appendTo(faxnoDiv);                        
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
                            $('<div class="col-md-3"><h6><?php echo form_error("mnum'+m+'"); ?></h6><input type="text" name="mnum'+m+'" value="" class="form-control input-sm" placeholder="'+m+'"></div> <div class="widget-content padding"> <a href="" class="btn btn-green-1" id="remMobileno">Remove</a></div></div></div></div></div></div></span>').appendTo(mobilenoDiv);                        
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
                            $('<div class="col-md-3"><h6><?php echo form_error("mnum'+e+'"); ?></h6><input type="text" name="mnum'+e+'" value="" class="form-control input-sm" placeholder="'+e+'"></div> <div class="widget-content padding"> <a href="" class="btn btn-green-1" id="remEmailno">Remove</a></div></div></div></div></div></div></span>').appendTo(emailDiv);                        
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
                });                     
                </script>			
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->