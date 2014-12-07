<?php error_reporting(0); ?>									
									<div class="col-md-2"><h6><?php echo $error; ?></h6>
										<div class="text-center">
										<?php 
											  $profpic = $r->file_name;
											  $hiddentf = '<input type="text" value='.$profpic.'>';
											  $showpic = '<img src=http://localhost/sl_ci/images/profile_pic/'.$profpic.' class="avatar img-circle" alt="avatar" height="100" width="100" >';
										?>
								<!--	<?php echo '<img src=http://192.168.10.121/sl_ci/images/profile_pic/'.$profpic.' class="avatar img-circle" alt="avatar" height="100" width="100" >'; ?> -->
										<?php 
											  echo $showpic;
										?>
										<h6>Change photo...</h6>
											<input type="file" name="userfile" size="20" class="form-control btn btn-green-1">
										</div>
									</div>
								
								</div>
							</div>	
						</div>
					</div>