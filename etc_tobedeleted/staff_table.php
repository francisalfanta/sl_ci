<table data-sortable class="table">
										<thead>
											<tr>
												<th>No</th>
												<th style="width: 30px" data-sortable="false"><input type="checkbox" class="rows-check"></th>
												<th>Full Name</th>
												<th>Passport No</th>
												<th>Nationality</th>
												<th>Date Hired</th>
												<th>Email</th>
												<th>Mobile No.</th>
												<th>Username</th>
												<th data-sortable="false">Sort : Off</th>
												<th>Status</th>
												<th data-sortable="false">Option</th>
											</tr>
										</thead>
										
										<tbody>

											<?php 
												$i = 1; // counter
												foreach($staffs as $staff) { ?>

											<tr>
												<td><?php echo $i; ?></td>
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
											<?php ++$i;} ?>
											
										</tbody>
									</table>