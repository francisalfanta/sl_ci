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
                        $action = 'property_owner/update_owner_personal_details';
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
                                <div class="table-responsive">
                               
                                <table data-sortable class="table">
                                        <thead>
                                            <tr>                                                                                                                                         
                                                <th>Address</th>                                                                                        
                                                <th>Email</th>
                                                <th>Tel no.</th>
                                                <th>Mobile no.</th>
                                                <th>Fax no.</th>                                                
                                                <th data-sortable="false">Option</th>
                                            </tr>
                                        </thead>                                        
                                        <tbody>                                         
                                            <?php 
                                                if(!$hide_contact_details){
                                                foreach($nationalities as $row) {                                            
                                                //var_dump($row);
                                                if($row->addressLocality){ $local = $row->addressLocality.', ';} else { $local = null;}
                                                if($row->addressRegion){ $region = $row->addressRegion.', ';} else { $region = null;}
                                                if($row->addressCountry){ $country = $row->addressCountry.', ';} else { $country = null;} 
                                                // View only property(s) of the owner                                               
                                                if($row->tb_property_owner_id == $this->uri->segment(3,0)){  ?>
                                            <tr>                                                  
                                                <td><?php echo $row->address.', '.$local.$region.$country; ?></td>
                                                <td><?php echo $row->tb_nationality_id; ?></td>
                                                <td><?php echo $row->telephone_no; ?></td>
                                                <td><?php echo $row->mobile_no; ?></td>
                                                <td><?php echo $row->fax_no; ?></td>                                                  
                                                <td>
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="<?php echo base_url('nationality/view_details/'.$this->uri->segment(3,0).'/'.$row->tb_nationality_id); ?>" data-toggle="tooltip" title="Edit Contact Details" ><i class="fa fa-edit"></i></a>
                                                       <a href="<?php $url = 'nationality/del_nat/'.$this->uri->segment(3,0).'/'.$row->tb_nationality_id.'/'.$propertyfinder_id; echo base_url($url); ?>"  data-toggle="tooltip" title="Delete" ><i class="glyphicon glyphicon-remove"></i></a>                                                     
                                                    </div>
                                                </td>
                                            </tr>
                                           
                                            <?php }}} ?>                                            
                                        </tbody>
                                </table>
                                </div><!-- table-responsive -->
                             </div><!-- widget-content padding -->                       
                        </div><!-- widget -->                        
					</div><!-- col-md-12 portlets -->
                     <!-- Horizontal Form Start here --> 
                        <div class="portlets">                        
                            <div class="widget">
                                <div class="widget-header transparent">
                                    <h2><strong>Property Details</strong> Form</h2>
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
                                        <div class="col-sm-10"><?php echo $city; ?>
                                            <select name="city" id="city" tabindex="1" class="form-control">
                                                <option value="" ><?php if($city){ echo $city; } else { echo 'Select City'; } ?></option>                                                   
                                                <option value="Abu Dhabi" <?php echo set_select('city', 'Abu Dhabi'); ?>>Abu Dhabi</option>
                                                <option value="Ajman" <?php echo set_select('city', 'Ajman'); ?>>Ajman</option>
                                                <option value="Al Ain" <?php echo set_select('city', 'Al Ain'); ?>>Al Ain</option>
                                                <option value="Dubai" <?php echo set_select('city', 'Dubai'); ?>>Dubai</option>
                                                <option value="Fujairah" <?php echo set_select('city', 'Fujairah'); ?>>Fujairah</option>
                                                <option value="Ras Al Khaimah" <?php echo set_select('city', 'Ras Al Khaimah'); ?>>Ras Al Khaimah</option>
                                                <option value="Sharjah" <?php echo set_select('city', 'Sharjah'); ?>>Sharjah</option>
                                                <option value="Umm Al Quwain" <?php echo set_select('city', 'Umm Al Quwain'); ?>>Umm Al Quwain</option>
                                            </select>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group"> <!-- Community -->
                                        <label for="community" class="col-sm-2 control-label">Community</label>
                                        <div class="col-sm-10">
                                        <select name="community" id="community" class="form-control">
                                            <option value="">Please select first City</option>
                                        </select>
                                        <p class="help-block"> </p>
                                        </div>
                                    </div><!-- form-group -->

                                    <div class="form-group"> <!-- Sub-community -->
                                        <label for="subcommunity" class="col-sm-2 control-label">Sub-community</label>
                                        <div class="col-sm-10">
                                        <select name="subcommunity" id="subcommunity" class="form-control">
                                                <option value="">Please select first Community</option>
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
                                    <a href="<?php echo base_url('property_owner'); ?>"<button type="text" class="btn btn-default" tabindex="10">Cancel</button></a>
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
                                $("#community").html(data);
                            }                    
                        });
                    });
                    $("#community").change(function(){                      
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