        <!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            	<!-- Page Heading Start -->
                <div class="page-heading"> 
                <form class="form-horizontal" action="" method="post" accept-charset="utf-8" role="form">
<!-- Staff List drop down box -->   
                    <div class="form-group">
                        <label class="col-sm-2 control-label text-justify">Staff Priviledge</label>
                        <div class="col-sm-3">
                            <select class="form-control" name="staff_id">
                            <?php foreach($staffs as $staff_key => $staff_value){ ?>
                              <option value="<?php echo $staff_key['id']; ?>"><?php echo $staff_value['fullname']; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
<!-- End Staff List drop down box -->
            	<!-- Page Heading End-->                                                        
                <?php if(count($sections)!=0) { ?>
				<div class="row">
                    <?php foreach(array_slice($sections,0,3) as $section) {?>  
                    <div class="col-sm-4 portlets first-column">                    
<!-- start loop from here -->
                        <div class="widget clearfix">
                            <div class="widget-header">
                                <h2><strong><?php echo $section['section_name']; ?></strong></h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content padding">
                                <!-- check box -->
                                <form class="form-horizontal" role="form">
                                <div class="form-group">                                    
                                    <div class="col-sm-10">
                                    <?php foreach($children as $child) {
                                        if(strtoupper($child->parent) == strtoupper($section['section_name'])) {?>
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="table_name[]" id="<?php echo strtolower(str_replace(' ', '_', $child->menu)); ?>" value="0" <?php echo set_checkbox('table_name', '1', FALSE); ?>>
                                             <?php echo $child->menu; ?>
                                          </label>
                                        </div>
                                    <?php }} ?>                                      
                                    </div>
                                </div>
                                </form>
                                <!-- end check box -->
                            </div>
                        </div>                      
<!-- end start loop from here -->
                    </div><!-- first-column -->
                    <?php } ?>
                </div><!-- row -->
                <?php } ?>
                <?php if(count($sections)>3 && count($sections)<=6) { ?>
                <div class="row">
                    <?php foreach(array_slice($sections,3,3) as $section) {?>  
                    <div class="col-sm-4 portlets first-column">                    
<!-- start loop from here -->
                        <div class="widget clearfix">
                            <div class="widget-header">
                                <h2><strong><?php echo $section['section_name']; ?></strong></h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content padding">
                                <!-- check box -->                                
                                <div class="form-group">                                    
                                    <div class="col-sm-10">
                                    <?php foreach($children as $child) {                                   
                                        if(strtoupper($child->parent) == strtoupper($section['section_name'])) {?>
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="table_name[]" id="<?php echo strtolower(str_replace(' ', '_', $child->menu)); ?>" value="0" <?php echo set_checkbox('table_name', '1', FALSE); ?>>
                                            <?php echo $child->menu; ?>
                                          </label>
                                        </div>
                                    <?php }} ?>
                                    </div>
                                </div>                                
                                <!-- end check box -->
                            </div>
                        </div>                      
<!-- end start loop from here -->
                    </div><!-- first-column -->
                    <?php } ?>
                </div><!-- row -->
                <?php } ?>
                <?php if(count($sections)>6 && count($sections)<=9) { ?>
                <div class="row">
                    <?php foreach(array_slice($sections,4,3) as $section) {?>  
                    <div class="col-sm-4 portlets first-column">                    
<!-- start loop from here -->
                        <div class="widget clearfix">
                            <div class="widget-header">
                                <h2><strong><?php echo $section['section_name']; ?></strong></h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content padding">
                                <!-- check box -->                                
                                <div class="form-group">                                    
                                    <div class="col-sm-10">
                                    <?php foreach($children as $child) {                                   
                                        if(strtoupper($child->parent) == strtoupper($section['section_name'])) {?>
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" name="table_name[]" id="<?php echo strtolower(str_replace(' ', '_', $child->menu)); ?>" value="0" <?php echo set_checkbox('table_name', '1', FALSE); ?>>
                                            <?php echo $child->menu; ?>
                                          </label>
                                        </div>
                                    <?php }} ?>
                                    </div>
                                </div>                               
                                <!-- end check box -->
                            </div>
                        </div>                      
<!-- end start loop from here -->
                    </div><!-- first-column -->
                    <?php } ?>
                </div><!-- row -->
                <?php } ?>
                
                </jQuery(document).ready(function(){
                <div class="row">
                <div class="form-group">
                    <div class="col-sm-10 col-md-12 text-right">
                        <button type="submit" name="submitForm" value="formUpdate" class="btn btn-default">Save</button>
                    </div><!-- col-sm-offset-2 col-sm-10 -->
                </div><!-- form-group -->  
                </div><!-- row -->
                </form>	
    			<!-- Footer Start -->
                <footer>
                    Soft Line Cleaning Services &copy; 2014
                    <div class="footer-links pull-right">
                    	<a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact Us</a>
                    </div>
                </footer>
                <!-- Footer End -->			
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->