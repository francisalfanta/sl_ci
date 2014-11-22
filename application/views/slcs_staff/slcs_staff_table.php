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
									<a href="slcs_staff/create_member" class="hidden"><i class="icon-user-add"></i></a>									
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
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
												<th>Location</th>
												<th>Date of birth</th>
												<th>Email</th>
												<th data-sortable="false">Sort : Off</th>
												<th>Status</th>
												<th data-sortable="false">Option</th>
											</tr>
										</thead>
										
										<tbody>

											<?php foreach($staffs as $staff) { ?>

											<tr>
												<td>1</td>
												<td><input type="checkbox" class="rows-check"></td>
												<td><strong><?php echo $staff['fullname']; ?></strong></td>
												<td>Yogyakarta, Indonesia</td>
												<td><?php echo $staff['dob']; ?></td>
												<td><a href="mailto:<?php echo $staff['email']; ?>"><?php echo $staff['email']; ?></a></td>
												<td>123</td>
												<td><span class="label label-success">Active</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
													</div>
												</td>
											</tr>
											<?php } ?>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				