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

									<form class="form-horizontal" action="<?php echo base_url(); ?>staff_menu/create_staff_menu" method="post" accept-charset="utf-8" role="form">										
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
											<label class="col-sm-2 control-label">Menu</label>
											<div class="col-sm-10">
												<input type="text" name="menu" value="<?php echo set_value('menu');?>" class="form-control" id="" placeholder="Menu">
											</div>
										</div><!-- form-group -->
										
										<div class="form-group">
											<label class="col-sm-2 control-label">URL</label>
											<div class="col-sm-10">
												<input type="text" name="url" value="" class="form-control" placeholder="URL" id="textBox2" onkeyUp="copyText2()" autocomplete="off"></input>
											</div>
										</div><!-- form-group -->
										
										<div class="form-group">
											<label class="col-sm-2 control-label">Send Value</label>
											<div class="col-sm-10">
												<input type="text" value="<?php echo set_value('send_value');?>" class="form-control" placeholder="Send Value" id="message2" disabled></input>
												<input type="hidden" name="send_value" value="<?php echo set_value('send_value');?>" class="form-control" placeholder="Send Value" id="message22"></input>
											</div>
										</div><!-- form-group -->
										
										<div class="form-group">
											<label class="col-sm-2 control-label">Order</label>
											<div class="col-sm-10">
												<input type="text" name="order" value="<?php echo set_value('order');?>" class="form-control" id="" placeholder="Order">
											</div>
										</div><!-- form-group -->
										
										<div class="form-group">
											<label class="col-sm-2 control-label">Include</label>
											<div class="col-sm-10">
												<input type="text" value="<?php echo set_value('include');?>" class="form-control" placeholder="Include" id="message3" disabled></input>
												<input type="hidden" name="include" value="<?php echo set_value('include');?>" class="form-control" placeholder="Include" id="message4"></input>
												<input type="hidden" name="dollar" value="$" class="form-control"></input>
											</div>
										</div><!-- form-group -->
											
											
											
										<?php foreach($table_fields as $tb_fields) { 
										// SELECT TAG
										if($tb_fields[3] == 'select') { ?>
											<div class="form-group">
                                                <label for="input<?php echo $tb_fields[1]; ?>" class="col-sm-2 control-label"><?php echo $tb_fields[2]; ?></label>
                                                <div class="col-sm-10">
                                                    <select name="<?php echo $tb_fields[1]; ?>" class="form-control " id="input<?php echo $tb_fields[1]; ?>" tabindex="<?php echo $tb_fields[0]; ?>">
                                                    	<?php foreach($tb_fields[4] as $select_values) { ?>
                                                        <option value="<?php echo $select_values; ?>" <?php if($select_values===1) { echo 'selected';}?> ><?php if($select_values===0) { echo 'No'; } elseif($select_values===1) {echo 'Yes'; } else { echo $select_values; } ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div><!-- col-sm-10 -->
                                            </div><!-- form-group -->
                                        <?php
                                        // CUSTOM TAG
                                        } elseif($tb_fields[3] == 'custom') { ?>
                                        	<div class="form-group">
                                        		<label for="input<?php echo $tb_fields[1]; ?>" class="col-sm-2 control-label"><?php echo $tb_fields[2]; ?></label>
                                        		<div class="col-sm-10">                                        			
                                        			 <select name="<?php echo $tb_fields[1]; ?>" class="form-control " id="input<?php echo $tb_fields[1]; ?>" tabindex="<?php echo $tb_fields[0]; ?>">
                                        			 	<option value=""></option>
                                                    	<?php foreach($tb_fields[4] as $select_values) { foreach($select_values as $parent_key => $parent_value) { if ($parent_key=='menu'){ ?>
                                                        <option value="<?php echo $parent_value; ?>"><?php echo $parent_value; ?></option>
                                                        <?php }}} ?>
                                                    </select>
                                        		</div><!-- col-sm-10 -->
                                        	</div><!-- form-group -->
									<?php }} ?>
									<!-- End Element generator -->
									
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
										  		<button type="submit" name="update" class="btn btn-green-1" tabindex="9">Save</button>
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