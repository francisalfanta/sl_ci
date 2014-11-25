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
									<?php foreach($parents as $parent) { ?>
										<!-- parent-->
										<p><a href="<?php echo base_url(); ?>staff_menu/view_staff_menu/<?php echo $parent->id; ?>"><button class="btn btn-primary" type="button"><?php echo $parent->menu; ?></button></a></p>
										<div id="sub_item" class="col-md-offset-1">									
										<?php foreach($children as $child) { 
											if($child->parent == $parent->menu) {?>
											<!-- child -->
											<p><a href="<?php echo base_url(); ?>staff_menu/view_staff_menu/<?php echo $child->id; ?>"><button class="btn btn-primary" type="button"><?php echo $child->menu; ?></button></a></p>										
											<?php }} ?>
									 	</div><!-- sub_item -->
									 	<?php }?>
									 </div><!-- level_list -->
								</div> <!-- horizontal-form -->
							</div><!-- widget-content padding -->	
						</div><!-- widget -->
					</div><!-- col-sm-6 portlets -->
					