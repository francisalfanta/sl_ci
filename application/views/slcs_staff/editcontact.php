<!-- Created by  : Prime R.
     Date        : November 27, 2014
     Script Lines: All unless noted otherwise
-->
				<div class="col-md-12 portlets"><!-- ContactDetails -->
					<div class="widget">
						<div class="widget-header transparent">
							<h2><i class="icon-vcard"></i><strong> Contact</strong> Details</h2>
							<div class="additional-btn">
								<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
								<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
							</div>
						</div>
						<div class="widget-content padding">
							
								<div class="form-group">
									<div class="row">
										<div class="col-md-1"><h6><?php echo form_error('vno'); ?></h6>
											<input type="text" name="vno" value="<?php echo $r->villa_no; ?>" class="form-control" placeholder="Villa No.">
										</div>
										<div class="col-md-3"><h6><?php echo form_error('st'); ?></h6>
											<input type="text" name="st" value="<?php echo $r->street; ?>" class="form-control" placeholder="Street">
										</div>
										<div class="col-md-3"><h6><?php echo form_error('csp'); ?></h6>
											<input type="text" name="csp" value="<?php echo $r->city_state_province; ?>" class="form-control" placeholder="City / Province / State">
										</div>
										<div class="col-md-5"><h6><?php echo form_error('ca'); ?></h6>
											<input type="text" name="ca" value="<?php echo $r->complete_address; ?>" class="form-control" placeholder="Complete Address">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-2"><h6><?php echo form_error('ea'); ?></h6>
											<input type="text" name="ea" value="<?php echo $r->email; ?>" class="form-control" placeholder="Email Address">
										</div>
										<div class="col-md-2"><h6><?php echo form_error('mn'); ?></h6>
											<input type="text" name="mn" value="<?php echo $r->mnumber; ?>" class="form-control" placeholder="Mobile Number">
										</div>
										<div class="col-md-2"><h6><?php echo form_error('hn'); ?></h6>
											<input type="text" name="hn" value="<?php echo $r->home_number; ?>" class="form-control" placeholder="Home Phone Number">
										</div>
									</div>
								</div>
										
						</div>
						
					</div>
					
					</div>
					