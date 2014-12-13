<!-- Created by  : Francis A.
     Date        : December 4, 2014
     Script Lines: All unless noted otherwise
-->
<!-- Modal Delete Record -->
    <div class="md-modal md-slide-from-bottom" id="delete-record-modal">
        <div class="modal-dialog">
            <div class="md-content">
                
                    <h3><strong>Delete record</strong> Confirmation</h3>
                
                <div class="modal-body">          
                    <div class="text-center">Are you sure want you wanna delete the record?</div>
                </div>
                <div class="modal-footer">
                    <div class="text-center">
                        <form action="<?php echo base_url('property_owner/for_deletion_owner'); ?>" method="post" >
                        <input type="hidden" name="todelete" id="todelete" value=""/> 
                        <p>
                            <a href="" class="btn btn-danger md-close">Cancel</a>                                          
                            <button type="submit" id="del-record" class="btn btn-success md-close">Delete</button>                        
                        </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>        

<!-- Modal End -->
<!-- Modal Can not Delete Record -->
    <div class="md-modal md-slide-from-bottom" id="cnt-delete-record-modal">
        <div class="modal-dialog">
            <div class="md-content">
                
                    <h3><strong>Delete record</strong> Notice</h3>
                
                <div class="modal-body">                    
                    <p class="text-center">Can not delete the record selected. The owner possess <span id="cnt-del-no-property"></span> properties. 
                    <br>Delete first the record property owned.</p>
                </div>
                <div class="modal-footer">
                    <p class="text-center">
                        <button class="btn btn-danger md-close">Cancel</button>
                    </p>
                </div>
            </div>
        </div>
    </div>        

<!-- Modal End -->
<!-- Logout Modal Guide -->
    <div class="md-modal md-just-me" id="logout-modal">
        <div class="md-content">
            <h3><strong>Logout</strong> Confirmation</h3>
            <div>
                <p class="text-center">Are you sure want to logout from this awesome system?</p>
                <p class="text-center">
                <button class="btn btn-danger md-close">Nope!</button>
                <a href="login.html" class="btn btn-success md-close">Yeah, I'm sure</a>
                </p>
            </div>
        </div>
    </div>     

<!-- -->
<!-- property detail form -->
<div id="add_property_details_form" class="md-modal md-slide-from-bottom">
                <div id="property_details_form" class="col-sm-6 portlets" width="100%"> 
                    <div class="widget">
                        <div class="widget-header">
                            <h2><strong>Property Details</strong> Form</h2>
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
                                        <option value="" >'Please select first City'</option>                                                                                           
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
</div><!-- add property details -->
<!-- end property detail form -->

