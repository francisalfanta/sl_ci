<!-- Created by  : Prime R.
     Date        : November 27, 2014
     Script Lines: All unless noted otherwise
-->				<div class="col-sm-6 portlets"><!-- License and Ids-->
					<div class="widget">
						<div class="widget-header">
							<h2><i class=" icon-clipboard"></i><strong> Property</strong> Details</h2>
							<div class="additional-btn">
								<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
								<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
							</div>
						</div>
						<div class="widget-content padding">
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label>Property Emirate :</label>
										</div>
										<!-- <div class="col-md-6"><h6><?php echo form_error('pemi'); ?></h6>
											<input type="text" name="pemi" value="<?php echo set_value('pemi'); ?>" class="form-control input-sm">
										</div> -->
										<div class="col-md-6"><h6><?php echo form_error('city_name'); ?></h6>
										<select name="city_name" id="city" tabindex="1" class="form-control input-sm">                                                
                                                <option value="<?php if($city){ echo $city_id; } ?>" > <?php if($city){ echo $city; }  else { echo 'Select City'; } ?></option>
												<option value="1" <?php echo set_select('city_name', 'Abu Dhabi'); ?>>Abu Dhabi</option>
                                                <option value="2" <?php echo set_select('city_name', 'Ajman'); ?>>Ajman</option>
                                                <option value="3" <?php echo set_select('city_name', 'Al Ain'); ?>>Al Ain</option>
                                                <option value="4" <?php echo set_select('city_name', 'Dubai'); ?>>Dubai</option>
                                                <option value="5" <?php echo set_select('city_name', 'Fujairah'); ?>>Fujairah</option>
                                                <option value="6" <?php echo set_select('city_name', 'Ras Al Khaimah'); ?>>Ras Al Khaimah</option>
                                                <option value="7" <?php echo set_select('city_name', 'Sharjah'); ?>>Sharjah</option>
                                                <option value="8" <?php echo set_select('city_name', 'Umm Al Quwain'); ?>>Umm Al Quwain</option>
                                            </select>
                                        <p class="help-block"> </p>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label>Property Community :</label>
										</div>
										<!-- <div class="col-md-6"><h6><?php echo form_error('pcomm'); ?></h6>
											<input type="text" name="pcomm" value="<?php echo set_value('pcomm'); ?>" class="form-control input-sm">
										</div> -->
										
										<div class="col-md-6"><h6><?php echo form_error('community_name'); ?></h6>
                                        <select name="community_name" id="cityDrp" class="form-control input-sm">
                                        <option value="" >Please select first City</option> 
                                        </select>
                                        <p class="help-block"> </p>
										</div>
										
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label>Property Sub Community :</label>
										</div>
										<!-- <div class="col-md-6"><h6><?php echo form_error('psubcomm'); ?></h6>
											<input type="text" name="psubcomm" value="<?php echo set_value('psubcomm'); ?>" class="form-control input-sm">
										</div> -->
										
										<div class="col-md-6"><h6><?php echo form_error('subcommunity_name'); ?></h6>
                                        <select name="subcommunity_name" id="subcommunity" class="form-control input-sm">
                                        <option value="" >Please select first Community</option> 
                                        </select>
                                        <p class="help-block"> </p>
                                        </div>
										
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label>Property Name :</label>
										</div>
										<div class="col-md-6"><h6><?php echo form_error('pname'); ?></h6>
											<input type="text" name="pname" value="<?php echo set_value('pname'); ?>" class="form-control input-sm">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label>Property Type :</label>
										</div>
										<div class="col-md-3"><h6><?php echo form_error('ptype1'); ?></h6>
											<input type="text" name="ptype1" value="<?php echo set_value('ptype1'); ?>" class="form-control input-sm">
										</div>
										<div class="col-md-3"><h6><?php echo form_error('ptype2'); ?></h6>
											<input type="text" name="ptype2" value="<?php echo set_value('ptype2'); ?>" class="form-control input-sm">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label>Street :</label>
										</div>
										<div class="col-md-6"><h6><?php echo form_error('strt'); ?></h6>
											<input type="text" name="strt" value="<?php echo set_value('strt'); ?>" class="form-control input-sm">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label>Building Name :</label>
										</div>
										<div class="col-md-6"><h6><?php echo form_error('bldg'); ?></h6>
											<input type="text" name="bldg" value="<?php echo set_value('bldg'); ?>" class="form-control input-sm">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label>Unit No. :</label>
										</div>
										<div class="col-md-6"><h6><?php echo form_error('unitno'); ?></h6>
											<input type="text" name="unitno" value="<?php echo set_value('unitno'); ?>" class="form-control input-sm">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label>Developer :</label>
										</div>
										<div class="col-md-6"><h6><?php echo form_error('dev'); ?></h6>
											<input type="text" name="dev" value="<?php echo set_value('dev'); ?>" class="form-control input-sm">
										</div>
									</div>
								</div>								
						</div><!-- widget-content padding -->
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-9">
								<button type="submit" class="btn btn-green-3" value="Submit">Submit</button>
								<a href="<?php echo base_url(); ?>propertyfinder/propertyfinder"<button type="text" class="btn btn-default" tabindex="10">Cancel</button></a>
							</div>
						</div>
					</div>
				</div>
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
				</jQuery(document).ready(function(){
                
                <?php echo form_close(); ?>
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