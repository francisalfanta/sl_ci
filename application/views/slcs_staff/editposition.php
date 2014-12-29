<!-- Created by  : Prime R.
     Date        : November 27, 2014
     Script Lines: All unless noted otherwise
-->
				<div class="col-md-12 portlets"><!-- PositionDetails -->
					<div class="widget">
						<div class="widget-header transparent">
							<h2><i class="icon-briefcase-1"></i><strong> Position</strong> Details</h2>
							<div class="additional-btn">
								<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
								<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
							</div>
						</div>
						<div class="widget-content padding">								
								<div class="form-group">
									<div class="row">
										<div class="col-md-2"><h6><?php echo form_error('pos_t'); ?></h6>
											<input type="text" name="pos_t" value="<?php echo $r->position; ?>" class="form-control input-sm" placeholder="Position Title">
										</div>
										<div class="col-md-10"><h6><?php echo form_error('estat'); ?></h6>
											<label>Employment Status:</label>
											<label class="radio-inline"> <input type="radio" name="estat" value="fulltime" <?php if($r->employment_status == "fulltime"){echo "checked";} ?> /> Full time </label>											
											<label class="radio-inline"> <input type="radio" name="estat" value="parttime" <?php if($r->employment_status == "parttime"){echo "checked";} ?> /> Part Time </label>
											<label class="radio-inline"> <input type="radio" name="estat" value="temporary" <?php if($r->employment_status == "temporary"){echo "checked";} ?> /> Temporary </label>
											<label class="radio-inline"> <input type="radio" name="estat" value="casual" <?php if($r->employment_status == "casual"){echo "checked";} ?> /> Casual </label>
										</div>									
									</div>
								</div>
															
						</div>
						
					</div>
					
					</div>