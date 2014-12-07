<!-- Created by  : Prime R.
     Date        : November 27, 2014
     Script Lines: All unless noted otherwise
-->
		<!-- Start right content -->
		<?php echo form_open_multipart('propertyfinder/create_property_owner');
								//echo validation_errors();?>
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            					<!-- Page Heading Start
				<div class="page-heading">
            		<h1><i class='fa fa-file'></i> Blank</h1>
            		<h3>Blank Page</h3>            	</div>
            	<!-- Page Heading End-->
				<div class="row">
					
					<div class="col-md-12 portlets"><!-- BioData-->
						<div class="widget">
							<div class="widget-header transparent">
							<h2><i class="icon-user-add"></i><strong> Personal</strong> Details</h2>
							<div class="additional-btn">
								<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
								<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
							</div>
							</div>	
							<div class="widget-content padding">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('faname'); ?></h6><input type="text" name="faname" value="<?php echo set_value('faname'); ?>" class="form-control input-sm" placeholder="First Name"></div>
												<div class="col-md-3"><h6><?php echo form_error('miname'); ?></h6><input type="text" name="miname" value="<?php echo set_value('miname'); ?>" class="form-control input-sm" placeholder="Middle Name"></div>
												<div class="col-md-3"><h6><?php echo form_error('laname'); ?></h6><input type="text" name="laname" value="<?php echo set_value('laname'); ?>" class="form-control input-sm" placeholder="Last Name"></div>
											</div>
										</div>
										
										
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('na1'); ?></h6><input type="text" name="na1" value="<?php echo set_value('na1'); ?>" class="form-control input-sm" placeholder="Nationality (1)"></div>
												<div class="col-md-3"><h6><?php echo form_error('na2'); ?></h6><input type="text" name="na2" value="<?php echo set_value('na2'); ?>" class="form-control input-sm" placeholder="Nationality (2)"></div>
												<div class="col-md-3"><h6><?php echo form_error('na3'); ?></h6><input type="text" name="na3" value="<?php echo set_value('na3'); ?>" class="form-control input-sm" placeholder="Nationality (3)"></div>
												<div class="col-md-3"><h6><?php echo form_error('na4'); ?></h6><input type="text" name="na4" value="<?php echo set_value('na4'); ?>" class="form-control input-sm" placeholder="Nationality (4)"></div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('ppn1'); ?></h6><input type="text" name="ppn1" value="<?php echo set_value('ppn1'); ?>" class="form-control input-sm" placeholder="Passport No.(1)"></div>
												<div class="col-md-3"><h6><?php echo form_error('ppn2'); ?></h6><input type="text" name="ppn2" value="<?php echo set_value('ppn2'); ?>" class="form-control input-sm" placeholder="Passport No.(2)"></div>
												<div class="col-md-3"><h6><?php echo form_error('ppn3'); ?></h6><input type="text" name="ppn3" value="<?php echo set_value('ppn3'); ?>" class="form-control input-sm" placeholder="Passport No.(3)"></div>
												<div class="col-md-3"><h6><?php echo form_error('ppn4'); ?></h6><input type="text" name="ppn4" value="<?php echo set_value('ppn4'); ?>" class="form-control input-sm" placeholder="Passport No.(4)"></div>
											</div>
										</div>																		
									</div>							
								</div>
							</div>
						<div class="widget">
							<div class="widget-header transparent">
							<h2><i class="fa fa-home"></i><strong> Owner</strong> Address 1</h2>
							<div class="additional-btn">								
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							</div>
							</div>
							<div class="widget-content padding">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('clist1'); ?></h6><input type="text" name="clist1" value="<?php echo set_value('clist1'); ?>" class="form-control input-sm" placeholder="Country"></div>
												<div class="col-md-3"><h6><?php echo form_error('city1'); ?></h6><input type="text" name="city1" value="<?php echo set_value('city1'); ?>" class="form-control input-sm" placeholder="City"></div>
												
											</div>
										</div>
										
										
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('add11'); ?></h6><input type="text" name="add11" value="<?php echo set_value('add11'); ?>" class="form-control input-sm" placeholder="Community"></div>
												<div class="col-md-3"><h6><?php echo form_error('add12'); ?></h6><input type="text" name="add12" value="<?php echo set_value('add12'); ?>" class="form-control input-sm" placeholder="Sub Community"></div>
												<div class="col-md-3"><h6><?php echo form_error('add13'); ?></h6><input type="text" name="add13" value="<?php echo set_value('add13'); ?>" class="form-control input-sm" placeholder="Street"></div>
											</div>
										</div>																	
									</div>							
								</div>
							</div>
						</div>
						<div class="widget">
							<div class="widget-header transparent">
							<h2><i class="fa fa-home"></i><strong> Owner</strong> Address 2</h2>
							<div class="additional-btn">								
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							</div>
							</div>
							<div class="widget-content padding">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('clist2'); ?></h6><input type="text" name="clist2" value="<?php echo set_value('clist2'); ?>" class="form-control input-sm" placeholder="Country"></div>
												<div class="col-md-3"><h6><?php echo form_error('city2'); ?></h6><input type="text" name="city2" value="<?php echo set_value('city2'); ?>" class="form-control input-sm" placeholder="City"></div>
												
											</div>
										</div>
										
										
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('add21'); ?></h6><input type="text" name="add21" value="<?php echo set_value('add21'); ?>" class="form-control input-sm" placeholder="Community"></div>
												<div class="col-md-3"><h6><?php echo form_error('add22'); ?></h6><input type="text" name="add22" value="<?php echo set_value('add22'); ?>" class="form-control input-sm" placeholder="Sub Community"></div>
												<div class="col-md-3"><h6><?php echo form_error('add23'); ?></h6><input type="text" name="add23" value="<?php echo set_value('add23'); ?>" class="form-control input-sm" placeholder="Street"></div>
											</div>
										</div>																	
									</div>							
								</div>
							</div>
						</div>
						<div class="widget">
							<div class="widget-header transparent">
							<h2><i class="fa fa-home"></i><strong> Owner</strong> Address 3</h2>
							<div class="additional-btn">								
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							</div>
							</div>
							<div class="widget-content padding">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('clist3'); ?></h6><input type="text" name="clist3" value="<?php echo set_value('clist3'); ?>" class="form-control input-sm" placeholder="Country"></div>
												<div class="col-md-3"><h6><?php echo form_error('city3'); ?></h6><input type="text" name="city3" value="<?php echo set_value('city3'); ?>" class="form-control input-sm" placeholder="City"></div>
												
											</div>
										</div>
										
										
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('add31'); ?></h6><input type="text" name="add31" value="<?php echo set_value('add31'); ?>" class="form-control input-sm" placeholder="Community"></div>
												<div class="col-md-3"><h6><?php echo form_error('add32'); ?></h6><input type="text" name="add32" value="<?php echo set_value('add32'); ?>" class="form-control input-sm" placeholder="Sub Community"></div>
												<div class="col-md-3"><h6><?php echo form_error('add33'); ?></h6><input type="text" name="add33" value="<?php echo set_value('add33'); ?>" class="form-control input-sm" placeholder="Street"></div>
											</div>
										</div>																	
									</div>							
								</div>
							</div>
						</div>
						<div class="widget">
							<div class="widget-header transparent">
							<h2><i class="fa fa-home"></i><strong> Owner</strong> Address 4</h2>
							<div class="additional-btn">								
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							</div>
							</div>
							<div class="widget-content padding">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('clist4'); ?></h6><input type="text" name="clist4" value="<?php echo set_value('clist4'); ?>" class="form-control input-sm" placeholder="Country"></div>
												<div class="col-md-3"><h6><?php echo form_error('city4'); ?></h6><input type="text" name="city4" value="<?php echo set_value('city4'); ?>" class="form-control input-sm" placeholder="City"></div>
												
											</div>
										</div>
										
										
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('add41'); ?></h6><input type="text" name="add41" value="<?php echo set_value('add41'); ?>" class="form-control input-sm" placeholder="Community"></div>
												<div class="col-md-3"><h6><?php echo form_error('add42'); ?></h6><input type="text" name="add42" value="<?php echo set_value('add42'); ?>" class="form-control input-sm" placeholder="Sub Community"></div>
												<div class="col-md-3"><h6><?php echo form_error('add43'); ?></h6><input type="text" name="add43" value="<?php echo set_value('add43'); ?>" class="form-control input-sm" placeholder="Street"></div>
											</div>
										</div>																	
									</div>							
								</div>
							</div>
						</div>
						<div class="widget">
							<div class="widget-header transparent">
							<h2><i class="fa fa-phone-square"></i><strong> Telephone</strong> Number</h2>
							<div class="additional-btn">								
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							</div>
							</div>
							<div class="widget-content padding">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('tel1'); ?></h6><input type="text" name="tel1" value="<?php echo set_value('tel1'); ?>" class="form-control input-sm" placeholder="1."></div>
												<div class="col-md-3"><h6><?php echo form_error('tel2'); ?></h6><input type="text" name="tel2" value="<?php echo set_value('tel2'); ?>" class="form-control input-sm" placeholder="2."></div>
												<div class="col-md-3"><h6><?php echo form_error('tel3'); ?></h6><input type="text" name="tel3" value="<?php echo set_value('tel3'); ?>" class="form-control input-sm" placeholder="3."></div>
												<div class="col-md-3"><h6><?php echo form_error('tel4'); ?></h6><input type="text" name="tel4" value="<?php echo set_value('tel4'); ?>" class="form-control input-sm" placeholder="4."></div>
											</div>
										</div>																
									</div>							
								</div>
							</div>							
						</div>
						<div class="widget">
							<div class="widget-header transparent">
							<h2><i class="glyphicon glyphicon-print"></i><strong> Fax</strong> Number</h2>
							<div class="additional-btn">								
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							</div>
							</div>
							<div class="widget-content padding">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('faxn1'); ?></h6><input type="text" name="faxn1" value="<?php echo set_value('faxn1'); ?>" class="form-control input-sm" placeholder="1."></div>
												<div class="col-md-3"><h6><?php echo form_error('faxn2'); ?></h6><input type="text" name="faxn2" value="<?php echo set_value('faxn2'); ?>" class="form-control input-sm" placeholder="2."></div>
												<div class="col-md-3"><h6><?php echo form_error('faxn3'); ?></h6><input type="text" name="faxn3" value="<?php echo set_value('faxn3'); ?>" class="form-control input-sm" placeholder="3."></div>
												<div class="col-md-3"><h6><?php echo form_error('faxn4'); ?></h6><input type="text" name="faxn4" value="<?php echo set_value('faxn4'); ?>" class="form-control input-sm" placeholder="4."></div>
											</div>
										</div>																
									</div>							
								</div>
							</div>							
						</div>
						<div class="widget">
							<div class="widget-header transparent">
							<h2><i class="icon-mobile-2"></i><strong>Mobile</strong> Number</h2>
							<div class="additional-btn">								
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							</div>
							</div>
							<div class="widget-content padding">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('mnum1'); ?></h6><input type="text" name="mnum1" value="<?php echo set_value('mnum1'); ?>" class="form-control input-sm" placeholder="1."></div>
												<div class="col-md-3"><h6><?php echo form_error('mnum2'); ?></h6><input type="text" name="mnum2" value="<?php echo set_value('mnum2'); ?>" class="form-control input-sm" placeholder="2."></div>
												<div class="col-md-3"><h6><?php echo form_error('mnum3'); ?></h6><input type="text" name="mnum3" value="<?php echo set_value('mnum3'); ?>" class="form-control input-sm" placeholder="3."></div>
												<div class="col-md-3"><h6><?php echo form_error('mnum4'); ?></h6><input type="text" name="mnum4" value="<?php echo set_value('mnum4'); ?>" class="form-control input-sm" placeholder="4."></div>
											</div>
										</div>																
									</div>							
								</div>
							</div>							
						</div>
						<div class="widget">
							<div class="widget-header transparent">
							<h2><i class="icon-mail-3"></i><strong> Email</strong> Address</h2>
							<div class="additional-btn">								
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							</div>
							</div>
							<div class="widget-content padding">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<div class="row">
												<div class="col-md-3"><h6><?php echo form_error('email1'); ?></h6><input type="text" name="email1" value="<?php echo set_value('email1'); ?>" class="form-control input-sm" placeholder="1."></div>
												<div class="col-md-3"><h6><?php echo form_error('email2'); ?></h6><input type="text" name="email2" value="<?php echo set_value('email2'); ?>" class="form-control input-sm" placeholder="2."></div>
												<div class="col-md-3"><h6><?php echo form_error('email3'); ?></h6><input type="text" name="email3" value="<?php echo set_value('email3'); ?>" class="form-control input-sm" placeholder="3."></div>
												<div class="col-md-3"><h6><?php echo form_error('email4'); ?></h6><input type="text" name="email4" value="<?php echo set_value('email4'); ?>" class="form-control input-sm" placeholder="4."></div>
											</div>
										</div>																
									</div>							
								</div>
							</div>							
						</div>
						</div>
					</div>
					 