<!-- Created by  : Prime R.
     Date        : November 27, 2014
     Script Lines: All unless noted otherwise
-->
				<div class="col-md-12 portlets"><!-- License and Ids-->
					<div class="widget">
						<div class="widget-header transparent">
							<h2><i class="icon-book-2"></i><strong> Licenses </strong>& IDs</h2>
							<div class="additional-btn">
								<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
								<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
							</div>
						</div>
						<div class="widget-content padding">
															
								<div class="form-group">
									<div class="row">
										<div class="col-md-2">
											<center><label>License & ID's</label></center>
										</div>
										<div class="col-md-3">
											<center><label>ID/Card Number</label></center>
										</div>
										<div class="col-md-2">
											<center><label>Issue Date</label></center>
										</div>
										<div class="col-md-2">
											<center><label>Expiry Date</label></center>
										</div>
										<div class="col-md-3">
											<center><label>Others, Pls. specify</label></center>
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-2">
											<center><label>Driver's License</label></center>
										</div>
										<div class="col-md-3"><h6><?php echo form_error('dlidcno'); ?></h6>
											<input type="text" name="dlidcno" value="<?php echo $r->dl_idcno; ?>" class="form-control">
										</div>
										<div class="col-md-2"><h6><?php echo form_error('dlidate'); ?></h6>
											<input type="text" name="dlidate" value="<?php echo $r->dl_idate; ?>" class="form-control datepicker-input">
										</div>
										<div class="col-md-2"><h6><?php echo form_error('dlexdate'); ?></h6>
											<input type="text" name="dlexdate" value="<?php echo $r->dl_exdate; ?>" class="form-control datepicker-input">
										</div>
										<div class="col-md-3"><h6><?php echo form_error('dlothers'); ?></h6>
											<input type="text" name="dlothers" value="<?php echo $r->dl_others; ?>" class="form-control">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-2">
											<center><label>Labour Card (working permit)</label></center>
										</div>
										<div class="col-md-3"><h6><?php echo form_error('lcidcno'); ?></h6>
											<input type="text" name="lcidcno" value="<?php echo $r->lc_idcno; ?>" class="form-control">
										</div>
										<div class="col-md-2"><h6><?php echo form_error('lcidate'); ?></h6>
											<input type="text" name="lcidate" value="<?php echo $r->lc_idate; ?>" class="form-control datepicker-input">
										</div>
										<div class="col-md-2"><h6><?php echo form_error('lcexdate'); ?></h6>
											<input type="text" name="lcexdate" value="<?php echo $r->lc_exdate; ?>" class="form-control datepicker-input">
										</div>
										<div class="col-md-3"><h6><?php echo form_error('lcothers'); ?></h6>
											<input type="text" name="lcothers" value="<?php echo $r->lc_others; ?>" class="form-control">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-2">
											<center><label>Resident Identity Card (Emirates ID)</label></center>
										</div>
										<div class="col-md-3"><h6><?php echo form_error('ridcno'); ?></h6>
											<input type="text" name="ridcno" value="<?php echo $r->r_idcno; ?>" class="form-control">
										</div>
										<div class="col-md-2"><h6><?php echo form_error('ridate'); ?></h6>
											<input type="text" name="ridate" value="<?php echo $r->r_idate; ?>" class="form-control datepicker-input">
										</div>
										<div class="col-md-2"><h6><?php echo form_error('rexdate'); ?></h6>
											<input type="text" name="rexdate" value="<?php echo $r->r_exdate; ?>" class="form-control datepicker-input">
										</div>
										<div class="col-md-3"><h6><?php echo form_error('rothers'); ?></h6>
											<input type="text" name="rothers" value="<?php echo $r->r_others; ?>" class="form-control">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-md-2">
											<center><label>Visa Status</label></center>
										</div>
										<div class="col-md-3"><h6><?php echo form_error('vsidcno'); ?></h6>
											<input type="text" name="vsidcno" value="<?php echo $r->vs_idcno; ?>" class="form-control">
										</div>
										<div class="col-md-2"><h6><?php echo form_error('vsidate'); ?></h6>
											<input type="text" name="vsidate" value="<?php echo $r->vs_idate; ?>" class="form-control datepicker-input">
										</div>
										<div class="col-md-2"><h6><?php echo form_error('vsexdate'); ?></h6>
											<input type="text" name="vsexdate" value="<?php echo $r->vs_exdate; ?>" class="form-control datepicker-input">
										</div>
										<div class="col-md-3"><h6><?php echo form_error('vsothers'); ?></h6>
											<input type="text" name="vsothers" value="<?php echo $r->vs_others; ?>" class="form-control">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-2">
											<center><label>Others, Pls. specify</label></center>
										</div>
										<div class="col-md-3"><h6><?php echo form_error('othersidcno'); ?></h6>
											<input type="text" name="othersidcno" value="<?php echo $r->others_idcno; ?>" class="form-control">
										</div>
										<div class="col-md-2"><h6><?php echo form_error('othersidate'); ?></h6>
											<input type="text" name="othersidate" value="<?php echo $r->others_idate; ?>" class="form-control datepicker-input">
										</div>
										<div class="col-md-2"><h6><?php echo form_error('othersexdate'); ?></h6>
											<input type="text" name="othersexdate" value="<?php echo $r->others_exdate; ?>" class="form-control datepicker-input">
										</div>
										<div class="col-md-3"><h6><?php echo form_error('othersothers'); ?></h6>
											<input type="text" name="othersothers" value="<?php echo $r->others_others; ?>" class="form-control">
										</div>
									</div>
								</div>					
						</div>
						
					</div>
					<div class="form-group">
								<div class="row">
									<div class="col-md-3">
										<button type="submit" class="btn btn-green-3" value="Submit">Save</button>
										<a href="<?php echo base_url(); ?>slcs_staff/slcs_staff"<button type="text" class="btn btn-default" tabindex="10">Cancel</button></a>
									</div>
									
									<?php echo form_close(); ?>
									
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