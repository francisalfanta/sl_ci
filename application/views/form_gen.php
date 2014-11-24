<div class="row">					
	<div class="col-sm-6 portlets">
	<div class="widget">
	<div class="widget-header transparent">
		<h2>Specify the following:</h2>
		<div class="additional-btn">			
			<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
			<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
			<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
		</div>
		<div class="widget-content padding">							
		<div id="basic-form">
			<form action="http://formigniter.org/app/index.php/formigniter/index/5" method="post" accept-charset="utf-8" role="form">
					<div class="form-group">
						<label for="formname">Form name</label>
						<input type="text" id="formname" name="formname" class="form-control" placeholder="Form name"/>
					</div><!-- form-group -->
					<div class="form-group">
						<label for="controllername">Controller name</label>
						<input type="text" id="controllername" name="controllername" class="form-control" placeholder="Controller name"/>
					</div><!-- form-group -->
					<div class="form-group">						
						<label for="modelname">Model name</label>
						<input type="text" id="modelname" name="modelname" class="form-control" placeholder="Model name"/>
					</div><!-- form-group -->
					<div class="form-group">		
						<label for="tablename">Table name</label>
						<input type="text" id="tablename" name="tablename" class="form-control" placeholder="Table name"/>
					</div><!-- form-group -->

				<div style="clear:both"></div>
				<p><input type="submit" name="submit" value="Build this form"  class="btn btn-default"/></p>


				<div class="container_blue" style="margin-right: 10px;">  
				<div class="field_heading">1</div> <!-- counter -->
				<div class="type_heading">Field details </div>

				<div class="input_box form-group">
					<label for="view_field_label1">Label <span class="required">*</span></label>
					<input name="view_field_label1" id="view_field_label1" type="text" value="" onkeyup="liveUrlTitle(1);" class="form-control" placeholder="Label" />
				</div><!-- input_box form-group -->

				<div class="input_box form-group">
					<label for="view_field_name">Name (no spaces) <span class="required">*</span></label>
					<input name="view_field_name1" id="view_field_name1" type="text" value="" maxlength="30" class="form-control" placeholder="Label"/>
				</div><!-- input_box form-group -->

				<div class="input_box form-group">
					<label for="view_field_type1"  class="col-sm-2 control-label">Type <span class="required">*</span></label>
					<div class="col-sm-10">
						<select name="view_field_type1" class="form-control selectpicker">
							<option value="input">INPUT</option>
							<option value="textarea">TEXTAREA</option>
							<option value="select">SELECT</option>
							<option value="radio">RADIO</option>
							<option value="checkbox">CHECKBOX</option>
							<option value="password">PASSWORD</option>
						</select>
					</div><!-- col-sm-10 -->
				</div><!-- input_box form-group -->

				<div class="type_heading">Database Schema</div>

				<div class="input_box form-group">
					<label for="db_field_type1"  class="col-sm-2 control-label">Type <span class="required">*</span></label>
					<div class="col-sm-10">
						<select name="db_field_type1" class="form-control selectpicker">
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

				<div class="input_box form-group">
					<label for="db_field_length_value1">Length/Values</label>
					<input name="db_field_length_value1" type="text" value="" class="form-control" placeholder="Length/Values" />
				</div><!-- input_box form-group -->

				<div class="form-group">
				<div class="type_heading">Validation Rules (optional)</div>
					
					<label for="cont_validation_rules1[]" class="checkbox-inline icheckbox">
						<input type="checkbox" name="validation_rules1[]" id="validation_rules1[]" value="required"   /> required 
					</label>

					<label for="cont_validation_rules[]" class="checkbox-inline icheckbox">
						<input type="checkbox" name="validation_rules1[]" id="validation_rules1[]" value="trim"  /> trim
					</label>

					<label for="cont_validation_rules1[]" class="checkbox-inline icheckbox">
						<input type="checkbox" name="validation_rules1[]" id="validation_rules1[]" value="xss_clean"  /> xss_clean
					</label>

					<label for="cont_validation_rules1[]" class="checkbox-inline icheckbox">
						<input type="checkbox" name="validation_rules1[]" id="validation_rules1[]" value="valid_email"  /> valid_email
					</label>

					<label for="cont_validation_rules1[]" class="checkbox-inline icheckbox">
						<input type="checkbox" name="validation_rules1[]" id="validation_rules1[]" value="is_numeric"  /> is_numeric
					</label>

				</div><!-- type_heading -->
				</div><!-- form-group -->
				
		</div><!-- basic-form -->
		</div><!-- widget-content padding -->
	</div><!-- widget-header transparent -->
	</div><!-- widgets -->
	</div><!-- col-sm-6 portlets -->
</div><!-- row -->

