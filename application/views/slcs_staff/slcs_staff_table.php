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
                
									<table id="slcs_staff_table" data-sortable class="table table-striped table-bordered display compact"  cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>No</th>												
												<th>Full Name</th>
												<th>Address</th>
												<th style="text-align: center; width:60px;">Date of birth</th>
												<th>Email</th>
												<th>Mobile Number</th>
												<th style="text-align: center; width:60px;">Print</th>
												<th data-sortable="false">Actions</th>
											</tr>
										</thead>
                    <tfoot>
                      <tr>
                        <th>No</th>                       
                        <th>Full Name</th>
                        <th>Address</th>
                        <th style="text-align: center; width:60px;">Date of birth</th>
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th style="text-align: center; width:60px;">Print</th>
                        <th data-sortable="false">Actions</th>
                      </tr>
                    </tfoot>
										
										<tbody>
											<?php 
												$i = 1; // counter
												foreach($staffs as $staff) { ?>

											<tr>
												<td style="text-align: center;width:40px;"><?php echo $i; ?></td>
											
												<td><strong><?php echo $staff['fname']; ?>&nbsp;
															<?php echo $staff['mname']; ?>&nbsp;
															<?php echo $staff['lname']; ?></strong></td>
												<td><?php echo $staff['complete_address']; ?></td>
												<td style="text-align: center; width:60px;"><?php echo $staff['dob']; ?></td>
												<td><a href="mailto:<?php echo $staff['email']; ?>"><?php echo $staff['email']; ?></a></td>
												<td><?php echo $staff['mnumber']; ?></td>
												<td style="text-align: center; width:60px;">
													<div class="btn-group btn-group-xs">
														<a href="<?php echo base_url('slcs_staff/print_form/'.$staff['id']); ?>" target="_blank" data-toggle="tooltip" title="Print"><i class="icon-print-2"></i></a>
													</div>
												</td>
												<td  style="text-align: center;width:80px;">
													<div class="btn-group btn-group-xs">
														<a href="<?php echo base_url('slcs_staff/edit/'.$staff['id']); ?>" data-toggle="tooltip" title="Edit" ><i class="fa fa-pencil"></i></a>
														<a href="<?php echo base_url('slcs_staff/del/'.$staff['id']); ?>" data-confirm="Are you sure you want to delete?,<br> <?php echo '<br><b>'.$staff['fullname'].'</b>'; ?>"><i class="glyphicon glyphicon-remove"></i></a>
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
                <footer >
                  Soft Line Cleaning Services &copy; 2014
                  <span class="footer-links">
                  <a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact Us</a>
                </span>
                </footer>
                <!-- Footer End -->             
                <script type="text/javascript">                                     
                    $(document).ready(function() { 
                      
                      // added by Prime 12/15/2014
                      $('a[data-confirm]').click(function(ev) {
                        var href = $(this).attr('href');
                        if (!$('#dataConfirmModal').length) {
                          $('body').append('<div class="modal fade" id="dataConfirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog modal-sm"><div class="modal-content"><div class="modal-header">Confirmation</div><div class="modal-body"></div>            <div class="modal-footer">                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>                <a class="btn btn-danger danger" id="dataConfirmOK">Delete</a>   </div></div></div></div>');
                        } 
                        $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
                        $('#dataConfirmOK').attr('href', href);
                        $('#dataConfirmModal').modal({show:true});
                        return false;
                      });                     
                      // Setup - add a text input to each footer cell
                      if ($("table#slcs_staff_table tbody tr").length > 0) {
                        //$(this).tablesorter({ sortList: [[0,0]]});
                        $('#slcs_staff_table tfoot th').each( function () {
                            var title = $('#owner_table thead th').eq( $(this).index() ).text();
                            if(title!='Action' && title!='Status'){
                              $(this).html( '<input type="text" placeholder="Search '+title+'" style="font-size: 12px;width:100%;" />' );
                            }
                        });
                      }

                      var table = $('#slcs_staff_table').DataTable({ 
                        /*
                        dom: 'T<"clear">lfrtip',
                        tableTools: {
                          sRowSelect: "os",
                          sSwfPath: "<?php echo base_url(); ?>assets/lib/DataTables-1.10.4/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                          aButtons: [
                            { sExtends: "editor_create", editor: editor },
                            { sExtends: "editor_edit",   editor: editor },
                            { sExtends: "editor_remove", editor: editor },
                            {
                              sExtends: "collection",
                              sButtonText: "Save",
                              sButtonClass: "save-collection",
                              aButtons: [ 'copy', 'csv', 'xls', 'pdf' ]
                            },
                            'print'
                          ]
                        },
                        */
                        "autoWidth": true,
                        "deferRender" : true,
                        
                        //"dom": 'C<"clear">lfrtip',
                        //"sDom": 'T<"clear">lfrtip',
                        /*
                        "oTableTools": {
                            "aButtons": [
                                {
                                    "sExtends": "copy",
                                    "sButtonText": "Copy to clipboard",
                                    "oSelectorOpts": {
                                        page: 'current'
                                    }
                                }
                            ]
                        } ,*/
                        "scrollX"     : true,
                        "scrollY"     : 325,
                        "scrollCollapse": true,
                        "jQueryUI":       true,
                        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                        //"order": [[ 1, 'asc' ]],
                        //"columnDefs": [
                        //  { "width": "20%", "targets": 1 }
                        //]
                      });
                      
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
                    });
                                     
                </script>	
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->