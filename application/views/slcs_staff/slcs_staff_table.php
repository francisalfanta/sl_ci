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
            		<h1><i class='fa fa-table'></i> Tables</h1>
            		<h3>Basic & Simple Sortable Tables</h3>            	
            	</div>
            	<!-- Page Heading End-->				
            	<!-- Your awesome content goes here -->
				<div class="row">
				
					<div class="col-md-12">
						<div class="widget">
							<div class="widget-header transparent">
								<h2><strong>Soft Line Staff</strong> Table</h2>

								<div class="additional-btn">									
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="<?php echo base_url('slcs_staff/create_member');?>"><i class="icon-user-add"></i></a>									
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content">					
								<div class="table-responsive">
									<?php 	$this->table->set_heading('Full Name', 'Passport No', 'Nationality', 'Date Hired', 'Email', 'Mobile No.', 'Username');
											echo $this->table->generate($records);										
											echo '<div id="pagination">'.$this->pagination->create_links().'</div>'; 
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				