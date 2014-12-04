									<div class="col-md-2">
										<div class="text-center">
										<?php
											$profpic = $r->file_name;
										?>
											<!-- <input type="text" value="<?php echo $profpic; ?>"> -->
										
										<?php echo '<img src=http://192.168.10.121/sl_ci/images/profile_pic/'.$profpic.' class="avatar img-circle" alt="avatar" height="100" width="100" >'; ?>
											<h6>Change photo...</h6>
											<input type="file" name="userfile" size="20" class="form-control btn btn-green-1">
											<!-- <?php echo form_close(); ?> -->
										</div>
									</div>
								
								</div>
							</div>	
						</div>
					</div>
					
					<!-- <input type="text" name="fname" value="<?php echo $r->fname; ?>" class="form-control" placeholder="First Name"> -->