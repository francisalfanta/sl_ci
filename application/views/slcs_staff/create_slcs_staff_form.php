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
								<h2><strong>Add Staff</strong> Form</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content padding">						
								<div id="horizontal-form">

									<?php echo validation_errors(); ?>

									<form class="form-horizontal" action="<?php echo base_url(); ?>slcs_staff/create_member" method="post" accept-charset="utf-8" role="form">
										<div class="form-group">
											<label for="InputEmail" class="col-sm-2 control-label">Email</label>
											<div class="col-sm-10">
												<input type="email" class="form-control" id="InputEmail" placeholder="Enter email">
											</div><!-- col-sm-10 -->
									  	</div><!-- form-group -->
									<?php foreach($table_fields as $tb_fields) { ?>
										<div class="form-group">
											<label for="input<?php echo $tb_fields[0]; ?>" class="col-sm-2 control-label"><?php echo $tb_fields[1]; ?></label>
											<div class="col-sm-10">
											  <input type="text" name="<?php echo $tb_fields[0]; ?>" value="<?php echo set_value('<?php echo $tb_fields[0]; ?>'); ?>" class="form-control" id="input<?php echo $tb_fields[0]; ?>" placeholder="<?php echo $tb_fields[1]; ?>" >											
											</div><!-- col-sm-10 --> 
										</div><!-- form-group -->
									<?php } ?>
									
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
										  		<button type="submit" class="btn btn-default">Submit</button>
											</div>
									  	</div>						
									</form>								
								</div> <!-- horizontal-form -->
							</div><!-- widget-content padding -->	
						</div><!-- widget -->
					</div><!-- col-sm-6 portlets -->
				</div><!-- row -->