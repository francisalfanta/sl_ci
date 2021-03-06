<!-- Created by  : Prime R.
     Date        : November 27, 2014
     Script Lines: All unless noted otherwise
-->
				<div class="col-md-12 portlets"><!-- Salary/Wages-->
					<div class="widget">
						<div class="widget-header transparent">
							<h2><i class="fa fa-money"></i><strong> Salary & Wages</strong> Details</h2>
							<div class="additional-btn">
								<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
								<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
							</div>
						</div>
						<div class="widget-content padding">
							<form>
								<div class="form-group">
									<div class="row">
										<div class="col-md-2"><h6><?php echo form_error('basic_salary'); ?></h6>
											<input type="text" name="basic_salary" value="<?php echo $r->basicsalary; ?>" class="form-control input-sm" placeholder="Basic Salary">
										</div>
										<div class="col-md-4">
											<label>Gratuity Pay:</label><h6><?php echo form_error('radiogp'); ?></h6>
											<label class="radio-inline"> <input type="radio" name="radiogp" value="resign" <?php if($r->gratuity_pay == "resign"){echo "checked";} ?> /> Resign </label>
											<label class="radio-inline"> <input type="radio" name="radiogp" value="terminated" <?php if($r->gratuity_pay == "terminated"){echo "checked";} ?> /> Terminated </label>
										</div>
										<div class="col-md-4">
											<label>Type of Contract:</label><h6><?php echo form_error('radiotoc'); ?></h6>
											<label class="radio-inline"> <input type="radio" name="radiotoc" value="unlimited" <?php if($r->tocontract == "unlimited"){echo "checked";} ?> /> Unlimited </label>
											<label class="radio-inline"> <input type="radio" name="radiotoc" value="limited" <?php if($r->tocontract == "limited"){echo "checked";} ?> /> Limited </label>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-2"><h6><?php echo form_error('accom'); ?></h6>
											<input type="text" name="accom" value="<?php echo $r->accommodation; ?>" class="form-control input-sm" placeholder="Accomodations">
										</div>
										<div class="col-md-2">
											<label>Total Number of:</label>
										</div>
										<div class="col-md-2"><h6><?php echo form_error('yrs'); ?></h6>
											<input type="text" name="yrs" value="<?php echo $r->years_of_service; ?>" class="form-control input-sm" placeholder="Years">
										</div>
										<div class="col-md-2"><h6><?php echo form_error('mnths'); ?></h6>
											<input type="text" name="mnths" value="<?php echo $r->months_of_service; ?>" class="form-control input-sm" placeholder="Months">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-2"><h6><?php echo form_error('transpo'); ?></h6>
											<input type="text" name="transpo" value="<?php echo $r->transpo_allowance; ?>" class="form-control input-sm" placeholder="Transportation">
										</div>
										<div class="col-md-2">
											<label>Total Amt. (AED):</label>
										</div>
										<div class="col-md-2"><h6><?php echo form_error('tamt'); ?></h6>
											<input type="text" name="tamt" value="<?php echo $r->total_amount; ?>" class="form-control input-sm">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-2"><!--<h6><?php echo form_error('tamt_sal'); ?></h6>-->
											<input type="text" value="<?php echo $r->total_salary; ?>" class="form-control input-sm" disabled>
										</div>
									</div>
								</div>							
						</div>
					</div>
					</div>