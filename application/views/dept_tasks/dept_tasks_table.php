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
								<h2><strong>Department Records</strong> Table</h2>

								<div class="additional-btn">																	
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="dept_tasks/create_dept_task" ><i class="icon-user-add"></i></a>	
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
												<th>Department Name</th>
												<th>Table Name</th>												
												<th data-sortable="false">Sort : Off</th>
												<th>Status</th>
												<th data-sortable="false">Option</th>
											</tr>
										</thead>
										
										<tbody>

											<?php 
												$i = 1; // counter 
												foreach($depttasks as $depttask) { ?>												
											<tr>
												<td><?php echo $i; ?></td>
												<td><input type="checkbox" class="rows-check"></td>
												<td><strong><?php 														
																foreach($sections as $section) {
																	if($section['id']==$depttask['dept_id']){
																		echo $section['section_name']; 
																	}
																}
															?></strong></td>
												<td><?php echo $depttask['table_name']; ?></td>												
												<td>123</td>
												<td><span class="label label-success">Active</span></td>
												<td>
													<div class="btn-group btn-group-xs">
														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
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
				
				