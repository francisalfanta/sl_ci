<!-- Created by  : Prime R.
     Date        : November 27, 2014
     Script Lines: All unless noted otherwise
-->
				<div class="col-sm-6 portlets"><!-- License and Ids-->
					<div class="widget">
						<div class="widget-header transparent">
							<h2><i class=" icon-clipboard"></i><strong> Property</strong> Details</h2>
							<div class="additional-btn">
								<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
								<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
							</div>
						</div>
						<div class="widget-content padding">
															
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label>Property Emirate :</label>
										</div>
										<div class="col-md-6"><h6><?php echo form_error('pemi'); ?></h6>
											<input type="text" name="pemi" value="<?php echo set_value('pemi'); ?>" class="form-control input-sm">
										</div>										
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label>Property Community :</label>
										</div>
										<div class="col-md-6"><h6><?php echo form_error('pcomm'); ?></h6>
											<input type="text" name="pcomm" value="<?php echo set_value('pcomm'); ?>" class="form-control input-sm">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label>Property Sub Community :</label>
										</div>
										<div class="col-md-6"><h6><?php echo form_error('psubcomm'); ?></h6>
											<input type="text" name="psubcomm" value="<?php echo set_value('psubcomm'); ?>" class="form-control input-sm">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label>Property Name :</label>
										</div>
										<div class="col-md-6"><h6><?php echo form_error('pname'); ?></h6>
											<input type="text" name="pname" value="<?php echo set_value('pname'); ?>" class="form-control input-sm">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label>Property Type :</label>
										</div>
										<div class="col-md-3"><h6><?php echo form_error('ptype1'); ?></h6>
											<input type="text" name="ptype1" value="<?php echo set_value('ptype1'); ?>" class="form-control input-sm">
										</div>
										<div class="col-md-3"><h6><?php echo form_error('ptype2'); ?></h6>
											<input type="text" name="ptype2" value="<?php echo set_value('ptype2'); ?>" class="form-control input-sm">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label>Street :</label>
										</div>
										<div class="col-md-6"><h6><?php echo form_error('strt'); ?></h6>
											<input type="text" name="strt" value="<?php echo set_value('strt'); ?>" class="form-control input-sm">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label>Building Name :</label>
										</div>
										<div class="col-md-6"><h6><?php echo form_error('bldg'); ?></h6>
											<input type="text" name="bldg" value="<?php echo set_value('bldg'); ?>" class="form-control input-sm">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label>Unit No. :</label>
										</div>
										<div class="col-md-6"><h6><?php echo form_error('unitno'); ?></h6>
											<input type="text" name="unitno" value="<?php echo set_value('unitno'); ?>" class="form-control input-sm">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label>Developer :</label>
										</div>
										<div class="col-md-6"><h6><?php echo form_error('dev'); ?></h6>
											<input type="text" name="dev" value="<?php echo set_value('dev'); ?>" class="form-control input-sm">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-3">
											<label>Note :</label>
										</div>
										<div class="col-md-6">
										  <textarea style="resize:none; height:200px; width:330px"></textarea>
										</div>
									</div>
								</div>

								
						</div>
						
					</div>
					<div class="form-group">
								<div class="row">
									<div class="col-md-9">
										<button type="submit" class="btn btn-green-3" value="Submit">Submit</button>
										<a href="<?php echo base_url(); ?>propertyfinder/propertyfinder"<button type="text" class="btn btn-default" tabindex="10">Cancel</button></a>
									</div>
									
									
									
								</div>
					</div>
					</div>
				</div>
				</jQuery(document).ready(function(){
                
                <?php echo form_close(); ?>
    			<!-- Footer Start -->
                <footer>
                    Soft Line Cleaning Services &copy; 2014
                    <div class="footer-links pull-right">
                    	<a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact </a>
                    </div>
                </footer>
                <!-- Footer End -->	
                <script type="text/javascript">                    
                    $(document).ready(function() {                      
                        //$('#city').select2();                              // add on function for select box autocomplete
                       // $("#city").autocomplete(){
                       //     source: "<?php echo base_url('city/get_city'); ?>"
                       // }
                        $('#community_name').select2({                        // add on function for select box autocomplete
                           placeholder: "Community Name",
                           //data : [{id: 0, text: 'story'},{id: 1, text: 'bug'},{id: 2, text: 'task'}],
                           allowClear: true,
                           minimumInputLength: 2,
                           /*
                           createSearchChoice:function(term, data) { 
                                                if ($(data).filter(function() { 
                                                                        return this.text.localeCompare(term)===0; 
                                                                    }).length===0) {
                                                    return {id:term, text:term};
                                                } }
                           */
                           //: {
                           //     url:
                           //     data:
                           //     results:
                           //     cache: true
                           //
                           //}
                        });
                         $('#subcommunity_name').select2({                        // add on function for select box autocomplete
                           placeholder: "Sub-Community Name",
                           allowClear: true,
                           minimumInputLength: 2
                           //: {
                           //     url:
                           //     data:
                           //     results:
                           //     cache: true
                           //
                           //}
                        });
                        //$('select#community_name').attr('disabled', true);
                        $("#city").focus(function(){
                            //alert( "Handler for .change() called." );
                            $('#logcity').html('');    
                        });
                        //$( "#city" ).blur(function() {
                        //    alert( "Handler for .change() called." );
                        //});  
                    });
                    
                    //function empty_content(id){
                    //    document.getElementById(id).innerHTML = "";
                    //}

                    function del_city(){
                        var city = $('#city').val();
                        
                        $.ajax({
                         type : 'POST',
                         data : 'city='+city,
                         url : "<?php echo base_url('city/del_city_name'); ?>",
                         success : function(data){
                                $( "#logcity" ).text( "Delete successful." );
                         }
                     });
                    }
					
                    function del_community(){
                        var comm_name = $("#community_name").select2("val"); //$('#community_name').val();
                        alert('del-entered the function');
                        $.ajax({
                         type : 'POST',
                         data : 'city='+comm_name,
                         url : "<?php echo base_url('community/del_comm_name'); ?>",
                         success : function(data){
                                $( "#logcomm" ).text( "Delete successful." );
                         }
                     });
                    }
					
                    function add_city(){
                        var city = $('#city').val();
                        
                        $.ajax({
                         type : 'POST',
                         data : 'city='+city,
                         url : "<?php echo base_url('city/create_city_name'); ?>",
                         success : function(data){
                                $( "#logcity" ).text( "Created successfully." );
                         }
                     });
                    }
                    function add_community(){
                        var comm_name = $('#community_name').val();
                        alert('entered the function: '+comm_name);
                        $.ajax({
                         type : 'POST',
                         data : 'city='+comm_name,
                         url : "<?php echo base_url('community/create_comm_name'); ?>",
                         success : function(data){
                                $( "#logcomm" ).text( "Created successfully." );
                         }
                     });
                    }
                    //$(document).ajaxSuccess(function() {
                    //    $(".log").text("New City name created successfully.");
                    //});

                   
                </script>	
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->