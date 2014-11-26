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
									<?php foreach(array_slice($staff_menu,0,1) as $key => $value) { ?><input type="hidden" name="<?php echo $key;?>" value="<?php echo $value; ?>" class="form-control" id="input<?php echo $key; ?>" placeholder="<?php echo ucfirst($key); ?>" >	<?php } ?>
									<?php $i=1; foreach(array_slice($staff_menu, 1) as $key => $value) {  ?>									
										<div class="form-group">											
											<label for="input<?php echo $key;?>" class="col-sm-2 control-label"><?php echo ucfirst($key); ?></label>
											<div class="col-sm-10">

											  	<?php if($key=='method' || $key=='active') { ?>
											   	<select name="<?php echo $key; ?>" class="form-control " id="input<?php echo $key; ?>" tabindex="<?php echo $i; ?>">
                                                	<?php foreach($table_fields as $tb_fields) { if($tb_fields[1] == $key)  {
                                                		  	foreach($tb_fields[4] as $select_values) { ?>
                                                    <option value="<?php echo $select_values; ?>" <?php if($select_values===1) { echo 'selected';}?> ><?php if($select_values===0) { echo 'No'; } elseif($select_values===1) {echo 'Yes'; } else { echo $select_values; } ?></option>
                                                    <?php }}} ?>
                                                </select>	
                                                <?php } elseif($key=='parent') { ?>
                                                <select name="<?php echo $key; ?>" class="form-control " id="input<?php echo $key; ?>" tabindex="<?php echo $i; ?>">
                                        			 	<option value=""></option>

                                                    	<?php foreach($table_fields as $tb_fields) { if($tb_fields[1] == $key)  {
                                                    		  	foreach($tb_fields[4] as $select_values) { foreach($select_values as $parent_key => $parent_value) { if ($parent_key=='menu'){ ?> 
                                                        <option value="<?php echo $parent_value; ?>" <?php if($value==$parent_value){echo "selected"; }?>><?php echo $parent_value; ?></option>
                                                        <?php }}}}} ?>

                                                </select>
                                                <?php } else { ?>
                                                <input type="text" name="<?php echo $key;?>" value="<?php echo $value; ?>" class="form-control" id="input<?php echo $key; ?>" placeholder="<?php echo ucfirst($key); ?>" tabindex="<?php echo $i; ?>" <?php echo (strtoupper($key)==strtoupper('menu') ?'autofocus' :null); ?> >
                                                <?php } ?>	

											</div><!-- col-sm-10 --> 
										</div><!-- form-group -->
									<?php ++$i; } ?>
									<!-- End Element generator -->
									
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