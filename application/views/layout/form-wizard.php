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
            		<h1><i class='fa fa-magic'></i> Form Wizard</h1>
            		<h3>Super Awesome Form Wizard</h3>            	</div>
            	<!-- Page Heading End-->				
				<div class="row">
					<div class="col-md-12 portlets">
						<!-- Your awesome content goes here -->
						<div class="widget animated fadeInDown">
							<form id="myWizard">
								<section class="step" data-step-title="First step">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
                                            <label for="dept_id">Department</label>                                            
                                            <select class="form-control" name="dept_id" id="dept_id">
                                                <?php foreach($sections as $section) { ?>
                                                  <option value=<?php echo $section['id']; ?>><?php echo ucfirst($section['section_name']); ?></option>                                             
                                                <?php } ?>
                                            </select>                                            
                                            </div><!-- form-group -->   

                                            <div class="form-group">
                                                <label for="input_table_name">Table Name</label>                                  
                                                  <input type="text" name="table_name" value="" class="form-control" id="input_table_name" placeholder="Table Name" >                                                                                         
                                            </div><!-- form-group -->       
										</div>
										<div class="col-sm-6">
											<div class="notes">
												<h4><strong>Creating Table</strong></h4>
												<p style="text-align: justify">
                                                Department field</p>
                                                <ul>
                                                    <li>Choose in the select box the Department the table will be used.</li>
                                                </ul>

                                                <p  style="text-align: justify">
                                                Table Name Field</p>                                                    
                                                <ul>
                                                    <li>Place in Table Name field the desired name to be created in the database.</li>
                                                </ul>
											</div>
										</div>
									</div>
								</section>
								<section class="step" data-step-title="Second step">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label for="inputUsername">Column Name</label>
												<input type="text" id="inputUsername" placeholder="Column Name" class="form-control">
											</div>
                                            <div class="form-group">
                                                <label for="inputDataType">Data Type</label>
                                                <input type="text" id="inputDataType" placeholder="Data Type" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputCharSize">Character Size</label>
                                                <input type="text" id="inputCharSize" placeholder="Character Size" class="form-control">
                                            </div>
										</div>
										<div class="col-sm-6">
											<div class="notes">
												<h4><strong>Table attributes</strong></h4>
												<p style="text-align: justify">
                                                Column Name</p>
                                                <ul>
                                                    <li>Set the desired column name to be used in your table</li>
                                                </ul>

                                                <p  style="text-align: justify">
                                                Data type</p>                                                    
                                                <ul>
                                                    <li>Choose in the select box the types for the column.</li>
                                                </ul>

                                                <p  style="text-align: justify">
                                                Character Size </p>                                                    
                                                <ul>
                                                    <li>Maximum number of character size the column can hold.</li>
                                                </ul>
											</div>
										</div>
									</div>
								</section>
								<section class="step" data-step-title="Third step">
									<div class="row">
										<div class="col-sm-6">
											

                                        <div class="widget-content">
                                            <div class="table-responsive">
                                                <table data-sortable class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Id</th>                                                          
                                                            <th>Column Name</th>
                                                            <th>Data type</th>
                                                            <th>Size</th>
                                                            <th>Nullable</th>
                                                           
                                                        </tr>
                                                    </thead>
                                                    
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td><td>Column Name Example</td>
                                                            <td>Character</td><td>20</td>
                                                            <td><input type="checkbox" class="rows-check"></td>                                                                                                                      
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>



										</div>
										<div class="col-sm-6">
											<div class="notes">
												<h4><strong>Preview Table</strong></h4>
												<p style="text-align: justify">
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
												</p>
												<ol>
													<li>Duis autem vel eum iriure dolor in hendrerit in vulputate</li>
													<li>Lorem ipsum dolor sit amet</li>
													<li>Sed diam nonummy nibh euismod tincidunt</li>
													<li>Sonsectetuer adipiscing elit</li>
													<li>Tincidunt ut laoreet dolore magna aliquam erat volutpat</li>
												</ol>
												<p style="text-align: justify">
												Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
												</p>
											</div>
										</div>
									</div>
								</section>
							</form>
						</div>
					</div>
				</div>
				            <!-- Footer Start -->
            <footer>
                Huban Creative &copy; 2014
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

	</div>
	<!-- End of page -->
