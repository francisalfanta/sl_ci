        <!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            	<!-- Page Heading Start -->
                <div class="page-heading"> 
                <form class="form-horizontal" action="<?php base_url('propertyfinder/'); ?>" method="post" accept-charset="utf-8" role="form">
        
                <div class="col-sm-6 portlets">
                    
                    <div class="widget">
                        <div class="widget-header transparent">
                            <h2><strong>Property</strong> Form</h2>
                            <div class="additional-btn">
                                <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                            </div>
                        </div>
                        <div class="widget-content padding">  
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $.ajax({url:"<?php echo base_url('propertyfinder/get_community'); ?>",success:function(result){
                                        var data = new Array(result);                                                                            
                                    }}).done(function() {
                                        alert('data: '+data);
                                    });
                                //$('.combobox').combobox();
                                $inputcity_name.change(function () {
                                    var firstkey = $(this).val();
                                    $inputcommunity_name.html(''); // Clear existing options in second dropdown
                                    var data = new Array();                                    
                                    
                                    for (var prop in data[firstkey]) {
                                        var second = prop;
                                        $b.append($("<option>"). // Add options
                                        attr("value", second).
                                        text(second));
                                    }
                                $inputcommunity_name.change();
                            }).change(); // Trigger once to add options at load of first choice
                             
                            });
                        </script>                      
                            <div id="horizontal-form">
                           
                                <form class="form-horizontal" role="form">
                                    
                                    <div class="form-group">
                                    
                                        <label for="inputcity_name" class="col-sm-3 control-label">City</label>
                                        <div class="col-sm-9">                               
                                            <select name="city_name" class="form-control combobox" id="inputcity_name" tabindex="1">
                                            <option></option>
                                            <?php foreach($city as $arr){ ?>   
                                                <option value="<?php echo $arr['id']; ?>" ><?php echo $arr['city_name']; ?></option>
                                            <?php }?>   
                                            </select>
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div><!-- col-sm-10 -->
                                    </div><!-- form-group -->                                    
                                    
                                    <div class="form-group">
                                        <label for="inputcommunity_name" class="col-sm-3 control-label">Community</label>
                                        <div class="col-sm-9">                               
                                            <select name="community_name" class="form-control combobox" id="inputcommunity_name" tabindex="1">
                                            <option></option>
                                            <?php foreach($community as $arr){?>   
                                                <option value="<?php echo $arr['id'] ?>" ><?php echo $arr['community_name']; ?></option>
                                            <?php }?>   
                                            </select>
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div><!-- col-sm-10 -->
                                    </div><!-- form-group -->

                                    <div class="form-group">
                                        <label for="inputcommunity_name" class="col-sm-3 control-label">Sub Community</label>
                                        <div class="col-sm-9">                               
                                            <select name="community_name" class="form-control combobox" id="inputcommunity_name" tabindex="1">
                                            <?php foreach($subcommunity as $arr){ ?>   
                                                <option value="<?php echo $arr['id']; ?>" ><?php echo $arr['subcommunity_name']; ?></option>
                                            <?php }?>   
                                            </select>
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div><!-- col-sm-10 -->
                                    </div><!-- form-group -->

                                     <div class="form-group">
                                        <label for="inputre_property" class="col-sm-3 control-label">Property</label>
                                        <div class="col-sm-9">                               
                                            <select name="re_property" class="form-control combobox" id="inputre_property" tabindex="1">
                                            <?php foreach($subcommunity as $arr){ ?>   
                                                <option value="<?php echo $arr['id']; ?>" ><?php echo $arr['subcommunity_name']; ?></option>
                                            <?php }?>   
                                            </select>
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div><!-- col-sm-10 -->
                                    </div><!-- form-group -->


                                  <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10 text-right">
                                      <button type="submit" class="btn btn-default" >Save</button>
                                    </div>
                                  </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>

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