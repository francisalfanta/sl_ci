<!-- Created by  : Prime R.
     Date        : November 27, 2014
     Script Lines: All unless noted otherwise
-->
				<div class="col-md-12 portlets"><!-- BankingDetails -->
					<div class="widget">
						<div class="widget-header transparent">
							<h2><i class="icon-credit-card-1"></i><strong> Banking</strong> Details</h2>
							<div class="additional-btn">
								<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
								<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
							</div>
						</div>
						<div class="widget-content padding">
							
							
								<div class="form-group">
									<div class="row">
										<div class="col-md-2"><h6><?php echo form_error('bnkn'); ?></h6>
											<input type="text" name="bnkn" value="<?php echo set_value('bnkn'); ?>" class="form-control input-sm" placeholder="Bank Name">
										</div>
										<div class="col-md-2"><h6><?php echo form_error('bnkbn'); ?></h6>
											<input type="text" name="bnkbn" value="<?php echo set_value('bnkbn'); ?>" class="form-control input-sm" placeholder="Branch Name">
										</div>
										<div class="col-md-2"><h6><?php echo form_error('bnkaname'); ?></h6>
											<input type="text" name="bnkaname" value="<?php echo set_value('bnkaname'); ?>" class="form-control input-sm" placeholder="Account Name">
										</div>
										<div class="col-md-2"><h6><?php echo form_error('bnkanumber'); ?></h6>
											<input type="text" name="bnkanumber" value="<?php echo set_value('bnkanumber'); ?>" class="form-control input-sm" placeholder="Account Number">
										</div>
									</div>
								</div>								
							
						</div>
					</div>
					</div>