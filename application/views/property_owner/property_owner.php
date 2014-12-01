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
               
                <?php echo form_open('property_owner/create_prop_owner', $form_attributes) ?>
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
                            </div>
                            <div class="widget-content padding">      
                                <div class="table-responsive">
                               
                                <table data-sortable class="table">
                                        <thead>
                                            <tr>     
                                                <th>Edit</th>                                                                                        
                                                <th>Address</th>                                                                                        
                                                <th>Email</th>
                                                <th>Tel no.</th>
                                                <th>Mobile no.</th>
                                                <th>Fax no.</th>                                                
                                                <th data-sortable="false">Option</th>
                                            </tr>
                                        </thead>                                        
                                        <tbody>
                                            <?php foreach($nationalities as $row) { 
                                                if($row->addressLocality){ $local = $row->addressLocality.', ';} else { $local = null;}
                                                if($row->addressRegion){ $region = $row->addressRegion.', ';} else { $region = null;}
                                                if($row->addressCountry){ $country = $row->addressCountry.', ';} else { $country = null;}                                                
                                                if( count($parents)==1 && $row->property_owner_id == $parents['id']) { 
                                                // Display selected record?>
                                            <tr>  
                                                <td>
                                                    <div class="btn-group btn-group-xs">                                                                                                                                                                
                                                        <a data-toggle="tooltip" title="Edit Contact Details" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                    </div>
                                                </td>                 
                                                <td><?php echo $row->address.', '.$local.$region.$country; ?></td>
                                                <td><?php echo $row->email; ?></td>
                                                <td><?php echo $row->telephone_no; ?></td>
                                                <td><?php echo $row->mobile_no; ?></td>
                                                <td><?php echo $row->fax_no; ?></td>                                                  
                                                <td>
                                                    <div class="btn-group btn-group-xs">
                                                        <a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>                                                       
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php } else { // Display all record ?> 
                                            <tr>       
                                                <td>
                                                    <div class="btn-group btn-group-xs">                                                                    
                                                        <a data-toggle="tooltip" title="Edit Contact Details" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                    </div>
                                                </td>           
                                                <td><?php echo $row->address.', '.$local.$region.$country; ?></td>
                                                <td><?php echo $row->email; ?></td>
                                                <td><?php echo $row->telephone_no; ?></td>
                                                <td><?php echo $row->mobile_no; ?></td>
                                                <td><?php echo $row->fax_no; ?></td>                                                
                                                <td>
                                                    <div class="btn-group btn-group-xs">                                                  
                                                        <a href="<?php echo base_url('property_owner/del_nat/'.$row->id); ?>"  data-toggle="tooltip" title="Delete" class="btn btn-default"><i class="fa fa-power-off"></i></a>
                                                    <div>
                                                </td>
                                            </tr>
                                            <?php }} ?>                                            
                                        </tbody>
                                </table>
                                </div><!-- table-responsive -->
                             </div><!-- widget-content padding -->                       
                        </div><!-- widget -->                        
					</div><!-- col-md-12 portlets -->
                    <div class="portlets">
                        <div class="widget">
                        <div class="widget-content padding">                                                              
                            <div class="form-group">
                                <div>
                                    <button type="submit" name="formsubmit" class="btn btn-green-1" tabindex="4">Save</button>                                              
                                    <!--<a href="<?php echo base_url(); ?>staff_menu"<button type="text" class="btn btn-default" tabindex="10">Cancel</button></a>-->
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
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->