        <!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            	<!-- Page Heading Start -->
            	<!-- Page Heading End-->  
                <div class="row">
					<div class="col-md-12">
                        <div class="widget">
                            <div class="widget-header">
                                <h2><strong>Property Owner</strong> Lists</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="<?php echo base_url('property_owner/create_prop_owner');?>"><i class="icon-user-add"></i></a>  
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>                                
                            </div>                                                  
                            <div class="widget-content">
                            <br>
                                <div class="table-responsive">
                                <form class='form-horizontal' role='form'>
                                    <table id="datatables-1" data-sortable class="table table-striped">
                                    <thead>
                                        <tr>    
                                            <th><small>Full Name</small></th>                                                                                      
                                            <th><small>Address</small></th> 
                                            <th><small>Mobile no.</small></th> 
                                            <th><small>Tel no.</small></th>
                                            <th><small>Property</small></th>
                                            <th><small>Property type</small></th>
                                            <th><small>Bldg Name</small></th>                                                
                                           
                                            <th data-sortable="false">Option</th>
                                        </tr>
                                    </thead> 
                                    <tfoot>
                                        <tr>                                            
                                            <th><small>Full Name</small></th>                                                                                      
                                            <th><small>Address</small></th> 
                                            <th><small>Mobile no.</small></th> 
                                            <th><small>Tel no.</small></th>
                                            <th><small>Property</small></th>
                                            <th><small>Property type</small></th>
                                                                                      
                                            <th data-sortable="false">Option</th>
                                            </tr>
                                    </tfoot>                                       
                                        <tbody>
                                            <?php foreach($records as $row) { 
                                                if($row->addressLocality){ $local = $row->addressLocality.', ';} else { $local = null;}
                                                if($row->addressRegion){ $region = $row->addressRegion.', ';} else { $region = null;}
                                                if($row->addressCountry){ $country = $row->addressCountry.', ';} else { $country = null;}                                                
                                                if( count($parents)==1 && $row->property_owner_id == $parents['id']) { 
                                                // Display selected record?>
                                            <tr> 
                                                <td><small><?php echo $row->full_name; ?></small></td>                 
                                                <td><small><?php echo $row->address.', '.$local.$region.$country; ?></small></td>
                                                <td><small><?php echo $row->mobile_no; ?></small></td>                                               
                                                <td><small><?php echo $row->telephone_no; ?></small></td>
                                                <td><small><?php echo $row->re_property; ?></small></td>
                                                <td><small><?php echo $row->property_type; ?></small></td>
                                                <td><small><?php echo $row->building_name; ?></small></td> 
                                                <td>
                                                    <div class="btn-group btn-group-xs">                                                                                                                                                                
                                                        <a href="<?php echo base_url('property_owner/view_property_owner/'.$row->tb_property_owner_id.'/'.$row->tb_propertyfinder_id); ?>" data-toggle="tooltip" title="Edit Contact Details" class="btn btn-default"><i class="fa fa-edit"></i></a>                                                   
                                                        <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Logout</a></li>
                                                        <a href="<?php echo base_url('property_owner/del_nat/'.$row->tb_property_owner_id.'/'.$row->tb_propertyfinder_id); ?>"  data-toggle="tooltip" title="Delete" class="md-trigger" data-modal="delete-record-modal"><i class="fa fa-power-off"></i></a>                                                       
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php } else { // Display all record ?> 
                                            <tr> 
                                                <td><small><?php echo $row->full_name; ?></small></td>     
                                                <td><small><?php echo $row->address.', '.$local.$region.$country; ?></small></td>
                                                <td><small><?php echo $row->mobile_no; ?></small></td>
                                                <td><small><?php echo $row->telephone_no; ?></small></td>
                                                <td><small><?php echo $row->re_property; ?></small></td>
                                                <td><small><?php echo $row->property_type; ?></small></td>
                                                <td><small><?php echo $row->building_name; ?></small></td>                                                                                     
                                                <td>
                                                    <div class="btn-group btn-group-xs">                                                                    
                                                        <a href="<?php echo base_url('property_owner/view_property_owner/'.$row->tb_property_owner_id.'/'.$row->tb_propertyfinder_id); ?>" data-toggle="tooltip" title="Edit Contact Details" ><i class="fa fa-edit"></i></a>                                                    
                                                        <a data-toggle="tooltip" title="Delete"  class="md-trigger" data-modal="delete-record-modal" >
                                                            <input type="hidden" id="delelete-record" value="<?php echo $row->tb_property_owner_id.'/'.$row->tb_propertyfinder_id; ?>">
                                                            <i class="glyphicon glyphicon-remove"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php }} ?>                                            
                                        </tbody>
                                    </table>
                                </form><!-- table-responsive -->
                                </div><!-- table-responsive -->
                             </div><!-- widget-content padding -->                       
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
                <script type="text/javascript">
                $(document).ready(function() { 
                    $( "div" ).addClass(function( index, currentClass ) {
                    var addedClass;
                     
                    if ( currentClass === "red" ) {
                        addedClass = "green";
                        $( "p" ).text( "There is one green div" );
                    }
                     
                    return addedClass;
                    $( "#datatables-1_paginate" ).addClass( "btn-blue-3" );

                    });

                    $("#delete-record").click(function(e) {
                        alert('popup');
                        //e.preventDefault();
                        // the record id
                        var record_id = $(this).attr("id");
                        // set to delete-record-modal value
                        $("#to-delete").val(record_id);
                    });
                });
                </script>

            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->
            
        </div>
		<!-- End right content -->