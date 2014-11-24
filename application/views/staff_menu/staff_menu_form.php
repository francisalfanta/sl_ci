<!-- Created by  : Francis A.
     Date        : November 23, 2014
     Script Lines: All unless noted otherwise
-->
<!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
				<!-- Page Heading Start 
				<div class="page-heading">
            		<h1><i class='fa fa-check'></i> Forms</h1>
            	</div>
            	<!-- Page Heading End-->	
								
				<!-- Your awesome content goes here -->
				<div class="row">
					<div class="col-sm-6 portlets">
						<div class="widget">
							<div class="widget-header transparent">
								<h2><strong>Staff Menu Manager</strong></h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content padding">						
								<div id="horizontal-form">									
									<div id="level_list">
										<p><button class="btn btn-primary" type="button">Default button</button></p>
										<div id="sub_item" class="col-md-offset-2">
											<p><button class="btn btn-primary" type="button">Default button</button></p>
									 	</div><!-- sub_item -->
									 </div><!-- level_list -->
								</div> <!-- horizontal-form -->
							</div><!-- widget-content padding -->	
						</div><!-- widget -->
					</div><!-- col-sm-6 portlets -->
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
									<?php foreach($table_fields as $tb_fields) { 
										// INPUT TAG
										if($tb_fields[2] == 'input') { ?>
											<div class="form-group">
												<label for="input<?php echo $tb_fields[0]; ?>" class="col-sm-2 control-label"><?php echo $tb_fields[1]; ?></label>
												<div class="col-sm-10">
												  <input type="text" name="<?php echo $tb_fields[0]; ?>" value="<?php echo set_value('<?php echo $tb_fields[0]; ?>'); ?>" class="form-control" id="input<?php echo $tb_fields[0]; ?>" placeholder="<?php echo $tb_fields[1]; ?>" >											
												</div><!-- col-sm-10 --> 
											</div><!-- form-group -->
										<?php 
										// SELECT TAG
										} elseif($tb_fields[2] == 'select') { ?>
											<div class="form-group">
                                                <label for="input<?php echo $tb_fields[0]; ?>" class="col-sm-2 control-label"><?php echo $tb_fields[1]; ?></label>
                                                <div class="col-sm-10">
                                                    <select name="<?php echo $tb_fields[0]; ?>" class="form-control " id="input<?php echo $tb_fields[0]; ?>">
                                                    	<?php foreach($tb_fields[3] as $select_values) { ?>
                                                        <option value="<?php echo $select_values; ?>" <?php if($select_values===1) { echo 'selected';}?> ><?php if($select_values===0) { echo 'No'; } elseif($select_values===1) {echo 'Yes'; } else { echo $select_values; } ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div><!-- col-sm-10 -->
                                            </div><!-- form-group -->
                                        <?php
                                        // CUSTOM TAG
                                        } elseif($tb_fields[2] == 'custom') { ?>
                                        	<div class="form-group">
                                        		<label for="input<?php echo $tb_fields[0]; ?>" class="col-sm-2 control-label"><?php echo $tb_fields[1]; ?></label>
                                        		<div class="col-sm-10">                                        			
                                        			 <select name="<?php echo $tb_fields[0]; ?>" class="form-control " id="input<?php echo $tb_fields[0]; ?>">
                                                    	<?php foreach($tb_fields[3] as $select_values) { ?>
                                                        <option value="<?php if(isset($select_values[1])){ echo $select_values[1]; }?>"><?php if(isset($select_values[1])){ echo $select_values[1]; }?></option>
                                                        <?php } ?>
                                                    </select>
                                        		</div><!-- col-sm-10 -->
                                        	</div><!-- form-group -->
									<?php }} ?>
									<!-- End Element generator -->
									
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
										  		<button type="submit" class="btn btn-green-1">Submit</button>
										  		<button type="submit" class="btn btn-red-1">Remove</button>
										  		<button type="submit" class="btn btn-default">Cancel</button>
											</div>
									  	</div>						
									</form>								
								</div> <!-- horizontal-form -->
							</div><!-- widget-content padding -->	
						</div><!-- widget -->
					</div><!-- col-sm-6 portlets -->
				</div><!-- row -->