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
								<h2><strong>Add Department Task</strong> Form</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content padding">						
								<div id="horizontal-form">

									<?php echo validation_errors(); ?>

									<form class="form-horizontal" action="<?php echo base_url(); ?>dept_tasks/create_dept_task" method="post" accept-charset="utf-8" role="form">
									
										<div class="form-group">
											<label class="col-sm-2 control-label">Department</label>
											<div class="col-sm-10">
												<select class="form-control" name="dept_id" autofocus">
												<?php foreach($sections as $section) { ?>
												  <option value=<?php echo $section['id']; ?>><?php echo ucfirst($section['section_name']); ?></option>												
												<?php } ?>
												</select>
											</div><!-- col-sm-10 --> 
										</div><!-- form-group -->	

										<div class="form-group">
											<label for="input_table_name" class="col-sm-2 control-label">Table Name</label>
											<div class="col-sm-10">
											  <input type="text" name="table_name" value="<?php echo set_value('table_name'); ?>" class="form-control" id="input_table_name" placeholder="Table Name" >											
											</div><!-- col-sm-10 --> 
										</div><!-- form-group -->									
									
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