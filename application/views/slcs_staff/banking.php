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
											<select class="form-control input-sm" name="bnkn">
													  <option value="" <?php echo set_select('bnkn', '', TRUE); ?> >-- Bank Name --</option>
													  <option value="Abu Dhabi Commercial Bank" <?php echo set_select('bnkn', 'Abu Dhabi Commercial Bank'); ?> >Abu Dhabi Commercial Bank</option>
													  <option value="Abu Dhabi Islamic Bank" <?php echo set_select('bnkn', 'Abu Dhabi Islamic Bank'); ?> >Abu Dhabi Islamic Bank</option>
													  <option value="Arab Emirates Investment Bank" <?php echo set_select('bnkn', 'Arab Emirates Investment Bank'); ?> >Arab Emirates Investment Bank</option>
													  <option value="Bank of Sharjah" <?php echo set_select('bnkn', 'Bank of Sharjah'); ?> >Bank of Sharjah</option>
													  <option value="Citibank UAE" <?php echo set_select('bnkn', 'Citibank UAE'); ?> >Citibank UAE</option>
													  <option value="Commercial Bank International" <?php echo set_select('bnkn', 'Commercial Bank International'); ?> >Commercial Bank International</option>
													  <option value="Commercial Bank of Dubai" <?php echo set_select('bnkn', 'Commercial Bank of Dubai'); ?> >Commercial Bank of Dubai</option>
													  <option value="Dubai Islamic Bank" <?php echo set_select('bnkn', 'Dubai Islamic Bank'); ?> >Dubai Islamic Bank</option>
													  <option value="Emirates Islamic Bank<" <?php echo set_select('bnkn', 'Emirates Islamic Bank<'); ?> >Emirates Islamic Bank</option>													  
													  <option value="Emirates NBD" <?php echo set_select('bnkn', 'Emirates NBD'); ?> >Emirates NBD</option>
													  <option value="Finance House" <?php echo set_select('bnkn', 'Finance House'); ?> >Finance House</option>
													  <option value="First Gulf Bank" <?php echo set_select('bnkn', 'First Gulf Bank'); ?> >First Gulf Bank</option>
													  <option value="HSBC Bank Middle East" <?php echo set_select('bnkn', 'HSBC Bank Middle East'); ?> >HSBC Bank Middle East</option>
													  <option value="Invest Bank" <?php echo set_select('bnkn', 'Invest Bank'); ?> >Invest Bank</option>
													  <option value="Mashreqbank" <?php echo set_select('bnkn', 'Mashreqbank'); ?> >Mashreqbank</option>
													  <option value="National Bank of Abu Dhabi" <?php echo set_select('bnkn', 'National Bank of Abu Dhabi'); ?> >National Bank of Abu Dhabi</option>
													  <option value="National Bank of Fujairah" <?php echo set_select('bnkn', 'National Bank of Fujairah'); ?> >National Bank of Fujairah</option>
													  <option value="National Bank of Umm Al-Qaiwain" <?php echo set_select('bnkn', 'National Bank of Umm Al-Qaiwain'); ?> >National Bank of Umm Al-Qaiwain</option>
													  <option value="Noor Bank" <?php echo set_select('bnkn', 'Noor Bank'); ?> >Noor Bank</option>
													  <option value="RAKBANK" <?php echo set_select('bnkn', 'RAKBANK'); ?> >RAKBANK</option>
													  <option value="Union National Bank" <?php echo set_select('bnkn', 'Union National Bank'); ?> >Union National Bank</option>
													  <option value="United Arab Bank" <?php echo set_select('bnkn', 'United Arab Bank'); ?> >United Arab Bank</option>
											</select>
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