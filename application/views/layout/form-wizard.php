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
							<form id="myWizard" action="<?php echo base_url(); ?>formigniter" method="post" accept-charset="utf-8">
								<section class="step" data-step-title="First step">
									<div class="row">
										<div class="col-sm-6">
											<!--<div class="form-group">
                                            <label for="dept_id">Department</label>                                            
                                            <select class="form-control" name="dept_id" id="dept_id">
                                                <?php foreach($sections as $section) { ?>
                                                  <option value=<?php echo $section['id']; ?>><?php echo ucfirst($section['section_name']); ?></option>                                             
                                                <?php } ?>
                                            </select>                                            
                                            </div><!-- form-group -->  

                                            <div class="form-group">        
                                                <label for="tablename">Table name</label>
                                                <input type="text" id="tablename" name="tablename" class="form-control" placeholder="Table name"/>
                                            </div><!-- form-group --> 
                                                 
										</div>
										<div class="col-sm-6">
											<div class="notes">
												<h4><strong>Creating Table</strong></h4>
                                                <p style="text-align: justify">Department field</p>
                                                <ul>
                                                    <li><i>Required.</i> Choose in the select box the Department the table will be used.</li>
                                                </ul>

                                                <p  style="text-align: justify">
                                                Table Name Field</p>                                                    
                                                <ul>
                                                    <li><i>Required.</i> Place in Table Name field the desired name to be created in the database.</li>
                                                </ul>
											</div>
										</div>
									</div>
								</section><!-- 1st section -->
								<section class="step" data-step-title="Second step">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
                                                <label for="formname">Form name</label>
                                                <input type="text" id="formname" name="formname" class="form-control" placeholder="Form name"/>
                                            </div><!-- form-group -->
                                            <div class="form-group">
                                                <label for="controllername">URL name</label>
                                                <input type="text" id="controllername" name="controllername" class="form-control" placeholder="Controller name"/>
                                            </div><!-- form-group -->
                                            <div class="form-group">                        
                                                <label for="modelname">Model name</label>
                                                <input type="text" id="modelname" name="modelname" class="form-control" placeholder="Model name"/>
                                            </div><!-- form-group -->
										</div><!-- col-sm-6 -->
										<div class="col-sm-6">
											<div class="notes">
												<h4><strong>Table attributes</strong></h4>
                                                <p style="text-align: justify">Fill out the fields you want in your form, with field types, database type, and your validation rules and FormIgniter will output the code for the MVC + a database schema.</p>
                                                </p>
												<p style="text-align: justify">
                                                Form Name</p>
                                                <ul>
                                                    <li><i>Required.</i> Set the desired column name to be used in your table</li>
                                                </ul>

                                                <p  style="text-align: justify">
                                                URL Name</p>                                                    
                                                <ul>
                                                    <li><i>Required.</i> Name to call to be included in base URL address.</li>
                                                </ul>

                                                <p  style="text-align: justify">
                                                Model Name</p>                                                    
                                                <ul>
                                                    <li><i>Required.</i> Script model name.</li>
                                                </ul>
											</div><!-- notes -->
										</div><!-- col-sm-6 -->
									</div>
								</section><!-- 2nd section -->
								<section class="step" data-step-title="Third step">
									<div class="row">
                                        <div class="col-sm-6">
                                            <div class="input_box form-group">
                                                <label for="view_field_label1">Label</label>
                                                <input name="view_field_label1" id="view_field_label1" type="text" value="" onkeyup="liveUrlTitle(1);" class="form-control" placeholder="Label" />
                                            </div><!-- input_box form-group -->
                                            <div class="input_box form-group">
                                                <label for="view_field_name">Name (no spaces)</label>
                                                <input name="view_field_name1" id="view_field_name1" type="text" value="" maxlength="30" class="form-control" placeholder="Label"/>
                                            </div><!-- input_box form-group -->
                                            <hr>
                                            <div class="input_box form-group">
                                                <label for="view_field_type1" class="col-sm-2 control-label">Type</label>
                                                <div class="col-sm-10">
                                                    <select name="view_field_type1" class="form-control ">
                                                        <option value="input">INPUT</option>
                                                        <option value="textarea">TEXTAREA</option>
                                                        <option value="select">SELECT</option>
                                                        <option value="radio">RADIO</option>
                                                        <option value="checkbox">CHECKBOX</option>
                                                        <option value="password">PASSWORD</option>
                                                    </select>
                                                </div><!-- col-sm-10 -->
                                            </div><!-- input_box form-group -->
                                        </div><!-- col-sm-6 -->
                                        <div class="col-sm-6">
                                            <div class="notes">
                                                <h4><strong>Form attributes</strong></h4>
                                                <p style="text-align: justify">Fill out the fields you want in your form, with field types, database type, and your validation rules and FormIgniter will output the code for the MVC + a database schema.</p>
                                                </p>
                                                <p style="text-align: justify">
                                                Label</p>
                                                <ul>
                                                    <li><i>Required.</i> Set column name to be read by user</li>
                                                </ul>
                                                <p  style="text-align: justify">
                                                Name</p>                                                    
                                                <ul>
                                                    <li><i>Required.</i> Set the desired column name to be created in your table</li>
                                                </ul>
                                                <p  style="text-align: justify">
                                                Type</p>                                                    
                                                <ul>
                                                    <li><i>Required.</i> Choose in the select box the types of form element</li>
                                                </ul>
                                            </div><!-- notes -->
                                        </div><!-- col-sm-6 -->
                                    </div><!-- row -->
								</section><!-- 3rd section -->
                                <section class="step" data-step-title="Fourth step">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input_box form-group">
                                                <label for="db_field_type1"  class="col-sm-2 control-label">Type</label>
                                                <div class="col-sm-10">
                                                    <select name="db_field_type1" class="form-control">
                                                        <option value="VARCHAR">VARCHAR</option>
                                                        <option value="TINYINT">TINYINT</option>
                                                        <option value="TEXT">TEXT</option>
                                                        <option value="DATE">DATE</option>
                                                        <option value="SMALLINT">SMALLINT</option>
                                                        <option value="MEDIUMINT">MEDIUMINT</option>
                                                        <option value="INT">INT</option>
                                                        <option value="BIGINT">BIGINT</option>
                                                        <option value="FLOAT">FLOAT</option>
                                                        <option value="DOUBLE">DOUBLE</option>
                                                        <option value="DECIMAL">DECIMAL</option>
                                                        <option value="DATETIME">DATETIME</option>
                                                        <option value="TIMESTAMP">TIMESTAMP</option>
                                                        <option value="TIME">TIME</option>
                                                        <option value="YEAR">YEAR</option>
                                                        <option value="CHAR">CHAR</option>
                                                        <option value="TINYBLOB">TINYBLOB</option>
                                                        <option value="TINYTEXT">TINYTEXT</option>
                                                        <option value="BLOB">BLOB</option>
                                                        <option value="MEDIUMBLOB">MEDIUMBLOB</option>
                                                        <option value="MEDIUMTEXT">MEDIUMTEXT</option>
                                                        <option value="LONGBLOB">LONGBLOB</option>
                                                        <option value="LONGTEXT">LONGTEXT</option>
                                                        <option value="ENUM">ENUM</option>
                                                        <option value="SET">SET</option>
                                                        <option value="BIT">BIT</option>
                                                        <option value="BOOL">BOOL</option>
                                                        <option value="BINARY">BINARY</option>
                                                        <option value="VARBINARY">VARBINARY</option>
                                                    </select>
                                                </div><!-- col-sm-10 -->
                                            </div><!-- input_box form-group -->
                                            <hr>
                                            <div class="input_box form-group">
                                                <label for="db_field_length_value1" class="col-sm-2 control-label">Length</label>
                                                <div class="col-sm-10">
                                                    <input name="db_field_length_value1" type="text" value="" class="form-control" placeholder="Length or Values" />
                                                </div><!-- col-sm-10 -->
                                            </div><!-- input_box form-group -->
                                            <hr>
                                            <br>
                                            <div class="type_heading">Validation Rules (optional)</div>
                                            <div class="form-group">                                                
                                                <div class="col-sm-10">
                                                    <div class="checkbox">
                                                      <label for="cont_validation_rules2[]">
                                                        <input type="checkbox" name="validation_rules2[]" id="validation_rules2[]" value="required">
                                                        required
                                                      </label>
                                                    </div>
                                                    <div class="checkbox">
                                                      <label for="cont_validation_rules2[]">
                                                        <input type="checkbox" name="validation_rules2[]" id="validation_rules2[]" value="trim">
                                                        trim
                                                      </label>
                                                    </div>
                                                    <div class="checkbox">
                                                      <label for="cont_validation_rules2[]">
                                                        <input type="checkbox" name="validation_rules2[]" id="validation_rules2[]" value="xss_clean">
                                                        xss_clean
                                                      </label>
                                                    </div>
                                                    <div class="checkbox">
                                                      <label for="cont_validation_rules2[]">
                                                        <input type="checkbox" name="validation_rules2[]" id="validation_rules2[]" value="valid_email">
                                                        valid_email
                                                      </label>
                                                    </div>                                               
                                                    <div class="checkbox">
                                                      <label for="cont_validation_rules2[]">
                                                        <input type="checkbox" name="validation_rules2[]" id="validation_rules2[]" value="is_numeric">
                                                        is_numeric
                                                      </label>
                                                    </div>
                                                </div>
                                            </div>               
                                        </div><!-- col-sm-6 -->
                                        
                                        <div class="col-sm-6">

                                        <div class="notes">
                                            <h4><strong>Table column attributes</strong></h4>
                                            <p style="text-align: justify">Fill out the fields you want in your table column attribues and your validation rules.</p>
                                            </p>
                                            <p style="text-align: justify">
                                            Type</p>
                                            <ul>
                                                <li><i>Required.</i> Choose in the select box the table column type</li>
                                            </ul>
                                            <p  style="text-align: justify">
                                            Length</p>                                                    
                                            <ul>
                                                <li><i>Required.</i> Set the desired column length or values</li>
                                            </ul>
                                            <p  style="text-align: justify">
                                            Validation Rules</p>                                                    
                                            <ul>
                                                <li><i>Optional.</i> Additional attributes for your column</li>
                                            </ul>
                                        </div><!-- notes -->
                                        </div><!-- col-sm-6 -->
                                    </div><!-- row -->
                                </section><!-- 4th section -->
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
