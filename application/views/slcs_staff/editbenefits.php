<!-- Created by  : Prime R.
     Date        : November 27, 2014
     Script Lines: All unless noted otherwise
-->
				<div class="col-md-12 portlets"><!-- Benefits Details-->
					<div class="widget">
						<div class="widget-header transparent">
							<h2><i class="icon-doc-text"></i><strong> Benefits</strong> Details</h2>
							<div class="additional-btn">
								<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
								<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
							</div>
						</div>
						<div class="widget-content padding">
							
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-2">
											<center><label>Benefits</label></center>
										</div>
										<div class="col-md-3">
											<center><label>ID/Card Number</label></center>
										</div>
										<div class="col-md-2">
											<center><label>Issue Date</label></center>
										</div>
										<div class="col-md-2">
											<center><label>Expiry Date</label></center>
										</div>
										<div class="col-md-3">
											<center><label>Others, Pls. specify</label></center>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-2">
											<center><label>Medical Insurance</label></center>
										</div>
										<div class="col-md-3"><h6><?php echo form_error('midcno'); ?></h6>
											<input type="text" name="midcno" value="<?php echo $r->m_card_num; ?>" class="form-control input-sm">
										</div>
										<div class="col-md-2"><h6><?php echo form_error('midate'); ?></h6>
											<input type="text" name="midate" value="<?php echo $r->m_issue_date; ?>" class="datepicker-input form-control input-sm">
										</div>
										<div class="col-md-2"><h6><?php echo form_error('mexdate'); ?></h6>
											<input type="text" name="mexdate" value="<?php echo $r->m_expiry_date; ?>" class="datepicker-input form-control input-sm">
										</div>
										<div class="col-md-3"><h6><?php echo form_error('miothers'); ?></h6>
											<input type="text" name="miothers" value="<?php echo $r->m_others; ?>" class="form-control input-sm">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-5">
											<label><input type="checkbox" name="mycheck1" value="1" <?php if($r->bapl == "1"){echo "checked";} ?> />Yearly Ticket</label>&nbsp;&nbsp;
											<label><input type="checkbox" name="mycheck2" value="1" <?php if($r->byt == "1"){echo "checked";} ?> />Annual Paid Leave</label>&nbsp;&nbsp;
											<label><input type="checkbox" name="mycheck3" value="1" <?php if($r->b30dal == "1"){echo "checked";} ?> />30 Day Annual Leave</label>&nbsp;&nbsp;
										</div>
										<div class="col-md-2"><h6><?php echo form_error('mbonus'); ?></h6>
											<input type="text" name="mbonus" value="<?php echo $r->m_bonus; ?>" class="form-control input-sm" placeholder="Bonus"> 
										</div>
										<div class="col-md-2"><h6><?php echo form_error('bnbonus'); ?></h6>
											<input type="text" name="bnbonus" value="<?php echo $r->bn_bonus; ?>" class="form-control input-sm" placeholder="Others"> 
										</div>
									</div>
								</div>								
						</div>
					</div>
					
				</div>
					