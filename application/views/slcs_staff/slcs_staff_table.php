<!-- Created by  : Francis A.
     Date        : November 23, 2014
     Script Lines: All unless noted otherwise
-->

<!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
				<!-- Page Heading Start 
				<div class="page-heading">
            		<h1><i class='fa fa-table'></i> Tables</h1>
            		<h3>Basic & Simple Sortable Tables</h3>            	
            	</div>
            	<!-- Page Heading End-->				
            	<!-- Your awesome content goes here -->
				<div class="row">
				
					<div class="col-md-12">
						<div class="widget">
							<div class="widget-header transparent">
								<h2><strong>Soft Line Staff</strong> Table</h2>

								<div class="additional-btn">									
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="<?php echo base_url('slcs_staff/create_member');?>"><i class="icon-user-add"></i></a>									
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content">					
								<div class="table-responsive">
									<table data-sortable class="table">
										<thead>
											<tr>
												<th>No</th>
												<th style="width: 30px" data-sortable="false"><input type="checkbox" class="rows-check"></th>
												<th>Full Name</th>
												<th>Address</th>
												<th>Date of birth</th>
												<th>Email</th>
												<th>Mobile Number</th>
												<th>Print</th>
												<th data-sortable="false">Actions</th>
											</tr>
										</thead>
										
										<tbody>

											<?php 
												$i = 1; // counter
												foreach($staffs as $staff) { ?>

											<tr>
												<td><?php echo $i; ?></td>
												<td><input type="checkbox" class="rows-check"></td>
												<td><strong><?php echo $staff['fname']; ?>&nbsp;
															<?php echo $staff['mname']; ?>&nbsp;
															<?php echo $staff['lname']; ?></strong></td>
												<td><?php echo $staff['complete_address']; ?></td>
												<td><?php echo $staff['dob']; ?></td>
												<td><a href="mailto:<?php echo $staff['email']; ?>"><?php echo $staff['email']; ?></a></td>
												<td><?php echo $staff['mnumber']; ?></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a href="<?php echo base_url('slcs_staff/print_form/'.$staff['id']); ?>" target="_blank" data-toggle="tooltip" title="Print" class="btn btn-default"><i class="icon-print-2"></i></a>
													</div>
												</td>
												<td>
													<div class="btn-group btn-group-xs">
														<a href="<?php echo base_url('slcs_staff/del/'.$staff['id']); ?>" data-toggle="tooltip" title="Remove" class="btn btn-default"><i class="fa fa-times"></i></a>
														<a href="<?php echo base_url('slcs_staff/edit/'.$staff['id']); ?>" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
													</div>
												</td>
											</tr>
											<?php ++$i;} ?>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
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
                        //$('#city').select2();                              // add on function for select box autocomplete
                       // $("#city").autocomplete(){
                       //     source: "<?php echo base_url('city/get_city'); ?>"
                       // }
                        $('#community_name').select2({                        // add on function for select box autocomplete
                           placeholder: "Community Name",
                           //data : [{id: 0, text: 'story'},{id: 1, text: 'bug'},{id: 2, text: 'task'}],
                           allowClear: true,
                           minimumInputLength: 2,
                           /*
                           createSearchChoice:function(term, data) { 
                                                if ($(data).filter(function() { 
                                                                        return this.text.localeCompare(term)===0; 
                                                                    }).length===0) {
                                                    return {id:term, text:term};
                                                } }
                           */
                           //: {
                           //     url:
                           //     data:
                           //     results:
                           //     cache: true
                           //
                           //}
                        });
                         $('#subcommunity_name').select2({                        // add on function for select box autocomplete
                           placeholder: "Sub-Community Name",
                           allowClear: true,
                           minimumInputLength: 2
                           //: {
                           //     url:
                           //     data:
                           //     results:
                           //     cache: true
                           //
                           //}
                        });
                        //$('select#community_name').attr('disabled', true);
                        $("#city").focus(function(){
                            //alert( "Handler for .change() called." );
                            $('#logcity').html('');    
                        });
                        //$( "#city" ).blur(function() {
                        //    alert( "Handler for .change() called." );
                        //});  
                    });
                    
                    //function empty_content(id){
                    //    document.getElementById(id).innerHTML = "";
                    //}

                    function del_city(){
                        var city = $('#city').val();
                        
                        $.ajax({
                         type : 'POST',
                         data : 'city='+city,
                         url : "<?php echo base_url('city/del_city_name'); ?>",
                         success : function(data){
                                $( "#logcity" ).text( "Delete successful." );
                         }
                     });
                    }
					
                    function del_community(){
                        var comm_name = $("#community_name").select2("val"); //$('#community_name').val();
                        alert('del-entered the function');
                        $.ajax({
                         type : 'POST',
                         data : 'city='+comm_name,
                         url : "<?php echo base_url('community/del_comm_name'); ?>",
                         success : function(data){
                                $( "#logcomm" ).text( "Delete successful." );
                         }
                     });
                    }
					
                    function add_city(){
                        var city = $('#city').val();
                        
                        $.ajax({
                         type : 'POST',
                         data : 'city='+city,
                         url : "<?php echo base_url('city/create_city_name'); ?>",
                         success : function(data){
                                $( "#logcity" ).text( "Created successfully." );
                         }
                     });
                    }
                    function add_community(){
                        var comm_name = $('#community_name').val();
                        alert('entered the function: '+comm_name);
                        $.ajax({
                         type : 'POST',
                         data : 'city='+comm_name,
                         url : "<?php echo base_url('community/create_comm_name'); ?>",
                         success : function(data){
                                $( "#logcomm" ).text( "Created successfully." );
                         }
                     });
                    }
                    //$(document).ajaxSuccess(function() {
                    //    $(".log").text("New City name created successfully.");
                    //});

                   
                </script>	
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->