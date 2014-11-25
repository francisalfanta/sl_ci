        <!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            	<!-- Page Heading Start -->
                <div class="page-heading"> 
                <form class="form-horizontal" action="<?php echo base_url(); ?>" method="post" accept-charset="utf-8" role="form">
<!-- Staff List drop down box -->   
                    <div class="form-group">
                        <h2><label class="col-sm-2 control-label large ">Staff Priviledge</label>
                        <div class="col-sm-3">
                            <select class="form-control" name="staff_id">
                            <?php foreach($staffs as $staff_key => $staff_value){ ?>
                              <option value="<?php echo $staff_key['id']; ?>"><?php echo $staff_value['fullname']; ?></option>
                            <?php } ?>
                            </select>
                        </div></h2>
                    </div>
                </div>
<!-- End Staff List drop down box -->
            	<!-- Page Heading End-->                               
				<div class="row">                
                    <div class="col-sm-4 portlets">
<!-- start loop from here -->
                        <div class="widget">
                            <div class="widget-header">
                                <h2><strong>Green</strong> Portlet</h2>
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
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" value="">
                                            Option one is this 
                                          </label>
                                        </div>
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" value="">
                                            Option one is this 
                                          </label>
                                        </div>
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" value="">
                                            Option one is this 
                                          </label>
                                        </div>
                                    </div>
                                </div>
                                </form>
                                <!-- end check box -->
                            </div>
                        </div>
<!-- end start loop from here -->
<!-- 4th loop from here -->
                        <div class="widget">
                            <div class="widget-header">
                                <h2><strong>Green 2</strong> Portlet</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content padding">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et lorem sollicitudin, laoreet leo a, sodales mauris. Integer egestas, nunc non elementum faucibus, augue augue aliquet tellus, non ultrices sapien quam vitae ligula. Proin luctus sed ante et eleifend. Nunc pharetra porta lacus vel gravida. Mauris tempor mollis est, vel posuere nisl mollis nec. Sed semper ipsum ut dignissim tempor. Etiam enim arcu, imperdiet a scelerisque eu, lobortis quis magna. Nullam vestibulum adipiscing odio, sit amet pharetra felis aliquam et. Suspendisse id gravida odio, at blandit felis. Etiam posuere, lorem sit amet accumsan pretium, diam purus rhoncus eros, at porta ipsum ipsum eget nisi. Proin posuere nunc lacus, a mollis lacus dapibus quis. Duis rutrum augue id turpis fermentum bibendum.</p>                                
                            </div>
                        </div>                        
<!-- end 4th loop from here -->
                    </div>
                    <div class="col-sm-4 portlets">
<!-- 2nd loop from here -->
                        <div class="widget">
                            <div class="widget-header">
                                <h2><strong>Green</strong> Portlet</h2>
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
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" value="">
                                            Option one is this 
                                          </label>
                                        </div>
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" value="">
                                            Option one is this 
                                          </label>
                                        </div>
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" value="">
                                            Option one is this 
                                          </label>
                                        </div>
                                    </div>
                                </div>
                                </form>
                                <!-- end check box -->
                            </div>
                        </div>
<!-- end 2nd loop from here -->
<!-- 5th loop from here -->
                        <div class="widget">
                            <div class="widget-header">
                                <h2><strong>Pink</strong> Portlet</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content padding">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et lorem sollicitudin, laoreet leo a, sodales mauris. Integer egestas, nunc non elementum faucibus, augue augue aliquet tellus, non ultrices sapien quam vitae ligula. Proin luctus sed ante et eleifend. Nunc pharetra porta lacus vel gravida. Mauris tempor mollis est, vel posuere nisl mollis nec. Sed semper ipsum ut dignissim tempor. Etiam enim arcu, imperdiet a scelerisque eu, lobortis quis magna. Nullam vestibulum adipiscing odio, sit amet pharetra felis aliquam et. Suspendisse id gravida odio, at blandit felis. Etiam posuere, lorem sit amet accumsan pretium, diam purus rhoncus eros, at porta ipsum ipsum eget nisi. Proin posuere nunc lacus, a mollis lacus dapibus quis. Duis rutrum augue id turpis fermentum bibendum.</p>                                
                            </div>
                        </div>                        
<!-- end 5th loop from here -->
                    </div>
                    <div class="col-sm-4 portlets">
<!-- 3rd loop from here -->
                        <div class="widget">
                            <div class="widget-header">
                                <h2><strong>Green</strong> Portlet</h2>
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
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" value="">
                                            Option one is this 
                                          </label>
                                        </div>
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" value="">
                                            Option one is this 
                                          </label>
                                        </div>
                                        <div class="checkbox">
                                          <label>
                                            <input type="checkbox" value="">
                                            Option one is this 
                                          </label>
                                        </div>
                                    </div>
                                </div>
                                </form>
                                <!-- end check box -->
                            </div>
                        </div>
<!-- end 3rd loop from here -->
<!-- 6th loop from here -->
                        <div class="widget">
                            <div class="widget-header">
                                <h2><strong>Lightblue</strong> Portlet</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content padding">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et lorem sollicitudin, laoreet leo a, sodales mauris. Integer egestas, nunc non elementum faucibus, augue augue aliquet tellus, non ultrices sapien quam vitae ligula. Proin luctus sed ante et eleifend. Nunc pharetra porta lacus vel gravida. Mauris tempor mollis est, vel posuere nisl mollis nec. Sed semper ipsum ut dignissim tempor. Etiam enim arcu, imperdiet a scelerisque eu, lobortis quis magna. Nullam vestibulum adipiscing odio, sit amet pharetra felis aliquam et. Suspendisse id gravida odio, at blandit felis. Etiam posuere, lorem sit amet accumsan pretium, diam purus rhoncus eros, at porta ipsum ipsum eget nisi. Proin posuere nunc lacus, a mollis lacus dapibus quis. Duis rutrum augue id turpis fermentum bibendum.</p>                                
                            </div>
                        </div>                        
<!-- end 6th loop from here -->
                    </div><!-- col-sm-4 portlets -->
                </div><!-- row -->
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