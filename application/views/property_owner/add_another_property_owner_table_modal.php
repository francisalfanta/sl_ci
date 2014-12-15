<div class="modal fade" id="add-property" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" styple="width:600px;"> 
    <div class="modal-dialog">
        <div class="modal-content">
        
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add Property Details</h4>
                <!-- Page Heading End-->   
                <?php   $action = 'property_owner/update_owner_personal_details/'.$this->uri->segment(3,0).'/'.$this->uri->segment(4,0);
                //$action = 'unit_test';
                echo form_open($action, $form_attributes);
                echo '<input type="hidden" name="property_owner_id" value="'.$this->uri->segment(3,0).'" id="input-'.$this->uri->segment(3,0).'" >';                       
                ?>
            </div>
        
            <div class="modal-body">
                <div class="row">
                    <!-- start property details form empty -->
                    <div id="property_details_form" class="portlets" width="100%"> 
                        <div class="widget">
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
                
                    <!-- end property details form empty -->
                
                </div><!-- col-md-12 portlets --> 
            </div> 
            <div class="modal-footer">
                <script type="text/javascript">  
                        $(document).ready(function() {  

                        // db_msg
                        $('.db_msg').on('load',function(){
                            $(this).fadeOut(60000);
                        }) 

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
                    <a href="#" name="formsubmit" class="btn btn-green-1" >Submit</a>            
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>            
            </div><!-- modal-footer -->
        </div> <!-- modal-content -->
    </div>
</div>    