					<div class="col-sm-6 portlets">
						<div class="widget">
							<div class="widget-header transparent">								
								<h2><strong>Add/Edit</strong> Menu</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content padding">						
								<div id="horizontal-form">			

									<?php echo validation_errors(); ?>
									
									<form class="form-horizontal" action="<?php echo base_url(); ?>staff_menu/update_staff_menu" method="post" accept-charset="utf-8" role="form">
									<!-- Form Element generator -->	
									
									<script>
										function copyText2() {
										textBox2 = document.getElementById("textBox2");
										message2 = document.getElementById("message2");
										message22 = document.getElementById("message22");
										message3 = document.getElementById("message3");
										message4 = document.getElementById("message4");
										
										message2.value = textBox2.value;
										message22.value = message2.value
										message3.value = message22.value + '.php';
										message4.value = message3.value;
										}
									</script>
									
									<div class="form-group">
											<label class="col-sm-2 control-label"></label>
											<div class="col-sm-10">
												<input type="hidden" name="id" value="<?php echo $r->id; ?>" class="form-control" ></input>
												<input type="hidden" name="oldinclude" value="<?php echo $r->include; ?>" class="form-control" ></input>
												<input type="hidden" name="oldsendvalue" value="<?php echo $r->send_value; ?>" class="form-control" ></input>	
												<input type="hidden" name="dollar" value="$" class="form-control"></input>
											</div>
									</div><!-- form-group -->									
									
									<div class="form-group">
											<label class="col-sm-2 control-label">Menu</label>
											<div class="col-sm-10">
												<input type="text" name="menu" value="<?php echo $r->menu;?>" class="form-control" id="" placeholder="Menu">
											</div>
									</div><!-- form-group -->
									
									<div class="form-group">
											<label class="col-sm-2 control-label">URL</label>
											<div class="col-sm-10">
												<input type="text" name="url" value="<?php echo $r->url;?>" class="form-control" placeholder="URL" id="textBox2" onkeyUp="copyText2()" autocomplete="off"></input>
											</div>
									</div><!-- form-group -->
									
									<div class="form-group">
											<label class="col-sm-2 control-label">Send Value</label>
											<div class="col-sm-10">
												<input type="text" value="<?php echo $r->send_value;?>" class="form-control" placeholder="Send Value" id="message2" disabled></input>
												<input type="hidden" name="send_value" value="<?php echo set_value('send_value');?>" class="form-control" placeholder="Send Value" id="message22"></input>
											</div>
									</div><!-- form-group -->
									
									<div class="form-group">
											<label class="col-sm-2 control-label">Order</label>
											<div class="col-sm-10">
												<input type="text" name="order" value="<?php echo $r->order;?>" class="form-control" id="" placeholder="Order">
											</div>
									</div><!-- form-group -->
									
									<div class="form-group">
											<label class="col-sm-2 control-label">Include</label>
											<div class="col-sm-10">
												<input type="text" value="<?php echo $r->include;?>" class="form-control" placeholder="Include" id="message3" disabled></input>
												<input type="hidden" name="include" value="<?php echo set_value('include');?>" class="form-control" placeholder="Include" id="message4"></input>
												<input type="hidden" name="dollar" value="$" class="form-control"></input>
											</div>
									</div><!-- form-group -->
									
									<div class="form-group">
											<label class="col-sm-2 control-label">Method</label>
											<div class="col-sm-10">
											<select class="form-control input-sm" name="method">
													  <option value="<?php echo $r->method; ?>" ><?php echo $r->method; ?></option>
													  <option value="_parent" <?php echo set_select('method', '_parent'); ?> >_parent</option>
													  <option value="_self" <?php echo set_select('method', '_self'); ?> >_self</option>
													  <option value="_blank" <?php echo set_select('method', '_blank'); ?> >_blank</option>
											</select>
											</div>
									</div><!-- form-group -->
									
									<div class="form-group">
											<label class="col-sm-2 control-label">Parent</label>
											<div class="col-sm-10">
											<select class="form-control input-sm" name="parent">
													  <option value="<?php echo $r->parent; ?>" ><?php echo $r->parent; ?></option>
													  <option value="Human Resource" <?php echo set_select('parent', 'Human Resource'); ?> >Human Resource</option>
													  <option value="Reception" <?php echo set_select('parent', 'Reception'); ?> >Reception</option>
													  <option value="Finance" <?php echo set_select('parent', 'Finance'); ?> >Finance</option>
													  <option value="Public Relation" <?php echo set_select('parent', 'Public Relation'); ?> >Public Relation</option>
													  <option value="Information Technology" <?php echo set_select('parent', 'Information Technology'); ?> >Information Technology</option>
											</select>
											</div>
									</div><!-- form-group -->
									
									<div class="form-group">
											<label class="col-sm-2 control-label">Active</label>
											<div class="col-sm-10">
											<select class="form-control input-sm" name="active">
													  <option value="<?php echo $r->active; ?>" ><?php $active = $r->active; if ($active==1){ echo "Yes"; } else { echo "No"; }; ?></option>
													  <option value="1" <?php echo set_select('active', '1'); ?> >Yes</option>
													  <option value="0" <?php echo set_select('active', '0'); ?> >No</option>
											</select>
											</div>
									</div><!-- form-group -->
									
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
										  		<button type="submit" name="submitForm" value="formUpdate" class="btn btn-green-1" tabindex="9">Update</button>
										  		<button type="submit" name="submitForm" value="formDelete" class="btn btn-red-1" tabindex="10">Remove</button>
										  		<a href="<?php echo base_url(); ?>staff_menu"<button type="text" class="btn btn-default" tabindex="11">Cancel</button></a>
											</div>
									  	</div>						
									</form>								
								</div> <!-- horizontal-form -->
							</div><!-- widget-content padding -->	
						</div><!-- widget -->
					</div><!-- col-sm-6 portlets -->
				</div><!-- row -->
				<!-- Footer Start -->
                <footer>
                    Soft Line Cleaning Services &copy; 2014
                    <div class="footer-links pull-right">
                    	<a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact </a>
                    </div>
                </footer>
                <!-- Footer End -->