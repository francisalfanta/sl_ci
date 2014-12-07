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
                        $action = 'property_owner/update_owner_personal_details/'.$this->uri->segment(3,0).'/'.$this->uri->segment(4,0);
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

                                <div class="form-group container" style="width:100%;"> <!-- Last Name -->
                                    <label class="sr-only" for="passport_no">Passport No</label>
                                    <?php echo form_input($passport_no_attr); ?>
                                </div><!-- form-group -->

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
                                                <div class="col-md-3"><h6><?php echo form_error('na1'); ?></h6><input type="text" name="na1" value="<?php echo set_value('na1'); ?>" class="form-control input-sm" placeholder="Nationality (1)"></div>
                                                <div class="col-md-3"><h6><?php echo form_error('na2'); ?></h6><input type="text" name="na2" value="<?php echo set_value('na2'); ?>" class="form-control input-sm" placeholder="Nationality (2)"></div>
                                                <div class="col-md-3"><h6><?php echo form_error('na3'); ?></h6><input type="text" name="na3" value="<?php echo set_value('na3'); ?>" class="form-control input-sm" placeholder="Nationality (3)"></div>
                                                <div class="col-md-3"><h6><?php echo form_error('na4'); ?></h6><input type="text" name="na4" value="<?php echo set_value('na4'); ?>" class="form-control input-sm" placeholder="Nationality (4)"></div>
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
<!-- Address One --><?php $i=0; foreach(array_slice($address_list,0,1) as $address){ ?>

                      <div class="widget">
                            <div class="widget-header transparent">
                                <h2><i class="fa fa-home"></i><strong> Owner</strong> Address <?php echo $i; ?></h2>
                                <div class="additional-btn">                                
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                </div>
                            </div>
                            <div class="widget-content padding">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3"><h6><?php echo form_error('clist1'); ?></h6><input type="text" name="clist1" value="<?php echo set_value($address->addressCountry); ?>" class="form-control input-sm" placeholder="Country"></div>
                                                <div class="col-md-3"><h6><?php echo form_error('city1'); ?></h6><input type="text" name="city1" value="<?php echo set_value($address->addressCity); ?>" class="form-control input-sm" placeholder="City"></div>
                                                
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3"><h6><?php echo form_error('add11'); ?></h6><input type="text" name="add11" value="<?php echo set_value($address->addressCommunity); ?>" class="form-control input-sm" placeholder="Community"></div>
                                                <div class="col-md-3"><h6><?php echo form_error('add12'); ?></h6><input type="text" name="add12" value="<?php echo set_value($address->addressSubcommunity); ?>" class="form-control input-sm" placeholder="Sub Community"></div>
                                                <div class="col-md-3"><h6><?php echo form_error('add13'); ?></h6><input type="text" name="add13" value="<?php echo set_value($address->address); ?>" class="form-control input-sm" placeholder="Street"></div>
                                            </div>
                                        </div>                                                                  
                                    </div>                          
                                </div>
                            </div>
                        </div>
                    <?php } ?>
<!-- Address Two -->
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
<!-- Address Three -->
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
<!-- Address Four -->
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

                             </div><!-- widget-content padding -->                       
                        </div><!-- widget -->                        
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
                                        <label for="city" class="col-sm-2 control-label">City</label>
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
                                        <label for="community" class="col-sm-2 control-label">Community</label>
                                        <div class="col-sm-10">
                                        <select name="community" id="cityDrp" class="form-control">
                                        <option value="<?php if($community){ echo $community_id; } ?>" > <?php if($community){ echo $community; }  else { echo 'Please select first City'; } ?></option> 
                                        </select>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group"> <!-- Sub-community -->
                                        <label for="subcommunity" class="col-sm-2 control-label">Sub-community</label>
                                        <div class="col-sm-10">
                                        <select name="subcommunity" id="subcommunity" class="form-control">
                                        <option value="<?php if($subcommunity){ echo $subcommunity_id; } ?>" > <?php if($subcommunity){ echo $subcommunity; }  else { echo 'Please select first Community'; } ?></option> 
                                        </select>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group"> <!-- Property -->
                                        <label for="reproperty" class="col-sm-2 control-label">Property</label>
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
                                <div>
                                    <button type="submit" name="formsubmit" class="btn btn-green-1" tabindex="4">Save</button>                                              
                                    <a href="<?php $url = "property_owner/view_property_owner/".$this->uri->segment(3,0).'/'.$this->uri->segment(4,0); echo base_url($url); ?>"<button type="text" class="btn btn-default" tabindex="10">Cancel</button></a>
                                </div>
                            </div> <!-- form-group -->
                        </div><!-- widget-content padding -->
                        </div><!-- widget -->
                    </div><!-- portlets -->
                    </div><!-- col-md-12 portlets -->
				</div><!-- row -->
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