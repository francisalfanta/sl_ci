        <!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
        <div class="content">
            	<!-- Page Heading Start -->
            	<!-- Page Heading End-->  
              <div class="row">
                    <div class="col-sm-10 col-md-8 col-lg-6 portlets"> 
                        <div class="widget">
                            <div class="widget-header ">
                                <h2><strong>Property</strong> Filter</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div><!-- additional-btn -->
                            </div><!-- widget-header transparent -->
                            <div class="widget-content padding" id="property_filter">   
                             <?php echo form_open('', $form_attributes); ?> 
                                <div id="horizontal-form">        
                                <?php echo validation_errors(); ?>
                                    <div class="row" style="width:100%;">                                      
                                      <div class="col-md-12 portlets container">
                                        <div class="form-group col-md-4 col-lg-4"> <!-- First Name -->
                                          <label class="sr-only" for="fn_name">First Name</label>
                                          <?php echo form_input($fn_attributes); ?>
                                        </div><!-- form-group -->

                                        <div class="form-group col-md-4 col-lg-4"> <!-- Middle Name -->
                                          <label class="sr-only" for="mn_name">Middle Name</label>
                                          <?php echo form_input($mn_attributes); ?>
                                        </div><!-- form-group -->

                                        <div class="form-group col-md-4 col-lg-4"> <!-- Last Name -->
                                          <label class="sr-only" for="mn_name">Last Name</label>
                                          <?php echo form_input($ln_attributes); ?>
                                        </div><!-- form-group -->

                                      </div><!-- col-md-12 col-lg-12 portlets -->                                   
                                    </div><!-- row -->
                                    <div class="row">
                                      <div class="container">
                                        <div class="form-group col-md-6 col-lg-6"> <!-- Nationality -->
                                            <label class="sr-only" for="nationality">Nationality</label>
                                            <select class="form-control input-sm" name="nationality" id="nationality">
                                              <option value="">Select Nationality</option>                                                                                       
                                              <?php foreach($country_nationality_list as $nationality) { 
                                              echo '<option value="'.$nationality->nationality.'"'.set_select('nationality', '').'>'.$nationality->nationality.'</option>';
                                              } ?>
                                            </select>                                            
                                        </div><!-- form-group -->
                                      </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-lg-6"> <!-- Country -->
                                          <div class="container">
                                              <label class="sr-only" for="mn_name">Country</label>
                                              <select name="country_name" id="country_name" tabindex="6" class="form-control input-sm">
                                                  <option value="">Select Country</option>
                                                  <?php foreach($country_nationality_list as $nationality) { 
                                                  echo '<option value="'.$nationality->country_name.'"'.set_select('country_name', '').'>'.$nationality->country_name.'</option>';
                                                  } ?>
                                            </select>
                                              </select>
                                          </div><!-- form-group -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-lg-6"> <!-- Telephone no. -->
                                          <div class="container">
                                            <label class="sr-only" for="telephone_no">Telephone No.</label>
                                            <input type="text" id="telephone_no" class="form-control input-sm" name="telephone_no" value="<?php set_value('telephone_no'); ?>" placeholder="Telephone No." tabindex="7"/>
                                              
                                          </div><!-- form-group -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-lg-6"> <!-- Mobile No. -->
                                          <div class="container">
                                            <label class="sr-only" for="mobile_no">Mobile No.</label>
                                            <input type="text" id="mobile_no" class="form-control input-sm" name="mobile_no" value="<?php set_value('moible_no'); ?>" placeholder="Mobile No." tabindex="8"/>                                        
                                          </div><!-- form-group -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-lg-6"> <!-- Fax No. -->
                                          <div class="container">
                                            <label class="sr-only" for="fax_no">Fax No.</label>
                                            <input type="text" id="fax_no" class="form-control input-sm" name="fax_no" value="<?php set_value('fax_no'); ?>" placeholder="Fax No." tabindex="9"/>                                        
                                          </div><!-- form-group -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-lg-6"> <!-- Email -->
                                          <div class="container">
                                            <label class="sr-only" for="email">Email.</label>
                                            <input type="text" id="email" class="form-control input-sm" name="email" value="<?php set_value('email'); ?>" placeholder="Email" tabindex="10"/>                                        
                                          </div><!-- form-group -->
                                        </div>
                                    <div class="form-group">                                      
                                        <div class="col-sm-offset-2 col-sm-10 text-right">
                                         <a id="find_filter" class="btn btn-default" >Find</a>
                                          <!--<a   filterclass="btn btn-default">Find</a>-->
                                        </div><!-- col-sm-offset-2 col-sm-10 text-right -->                                        
                                    </div><!-- form-group -->
                                    </div>
                                    
                                </div><!-- horizontal-form -->
                              </form>
                            </div><!-- widget-content padding -->
                        </div><!-- widget -->                        
                    </div><!-- col-sm-10 col-md-8 col-lg-6 portlets -->

                    <!-- Field name checkbox -->
                    <div class="col-sm-6 portlets">
                        <div class="widget">
                            <div class="widget-header ">
                                <h2><strong>Show / Hide</strong> Column Fields</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle closed"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content padding" id="fieldnames_toggle_list">
                            <div class="row">
                                <div class="row col-sm-6 col-md-6 col-lg-6">
                                    <!-- foreach here -->
                                    <div class="col-xs-8">Address 1</div><div class="col-xs-4"><span class="field_name"><input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" name="address1" value="address1" checked  /></span></div> 
                                    <div class="col-xs-8">Address 2</div><div class="col-xs-4"><span class="field_name"><input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" name="address2" value="address2" checked  /></span></div> 
                                    <div class="col-xs-8">Address 3</div><div class="col-xs-4"><span class="field_name"><input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" name="address3" value="address3" checked  /></span></div> 
                                    <div class="col-xs-8">Address 4</div><div class="col-xs-4"><span class="field_name"><input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" name="address4" value="address4" checked  /></span></div> 
                                    <?php foreach(array_slice($table_fieldname,4, 25) as $label => $value){
                                          if(strpos(strtolower($label),'address') === false and strpos(strtolower($label),'subcommunity') === false and strpos(strtolower($label),'community') === false and strpos(strtolower($label),'city') === false and strpos(strtolower($label),'country') === false and strpos(strtolower($label),'for_deletion') === false and strpos(strtolower($label),'status') === false and strpos(strtolower($label),'no_property_owned') === false){
                                            if(strpos(strtolower($label), '_id') === false){                                     
                                                $field_name = ucfirst(str_replace('re ','', strtolower(str_replace('_', ' ', $label)))); 
                                    ?>                               
                                    <div class="col-xs-8">
                                        <?php echo $field_name; ?>
                                    </div>
                                    <div class="col-xs-4">
                                        <?php if($label =='description' or $label =='developer_name' || $label =='unit_number' || $label =='building_name') { ?>
                                        <span class="field_name"><input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" name="<?php echo $label; ?>" value="<?php echo $field_name; ?>"/></span>
                                        <?php } else { ?>
                                            <span class="field_name"><input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" name="<?php echo $label; ?>" value="<?php echo $field_name; ?>" checked  /></span>
                                        <?php } ?>
                                    </div>                    
                                <?php  }}} ?>

                                <!-- end here -->                           
                                </div><!-- row -->

                                <div class="row col-sm-6 col-md-6 col-lg-6">
                                    <!-- foreach here -->
                                    <?php foreach(array_slice($table_fieldname,25,count($table_fieldname)) as $label => $value){
                                          if(strpos(strtolower($label),'address') === false and strpos(strtolower($label),'subcommunity') === false and strpos(strtolower($label),'community') === false and strpos(strtolower($label),'city') === false and strpos(strtolower($label),'country') === false and strpos(strtolower($label),'for_deletion') === false and strpos(strtolower($label),'status') === false and strpos(strtolower($label),'no_property_owned') === false){
                                            if(strpos(strtolower($label), '_id') === false){                                     
                                                $field_name = ucfirst(str_replace('re ','', strtolower(str_replace('_', ' ', $label)))); 
                                    ?>                               
                                    <div class="col-xs-8">
                                        <?php echo $field_name; ?>
                                    </div>
                                    <div class="col-xs-4">
                                        <?php if($label =='description' or $label =='developer_name' || $label =='unit_number' || $label =='building_name') { ?>
                                        <span class="field_name"><input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" name="<?php echo $label; ?>" value="<?php echo $field_name; ?>"/></span>
                                        <?php } else { ?>
                                            <span class="field_name"><input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" name="<?php echo $label; ?>" value="<?php echo $field_name; ?>" checked  /></span>
                                        <?php } ?>
                                    </div>  
                                 <?php  }}} ?>                         
                                <!-- end here -->                           
                                </div><!-- row -->

                            </div><!-- row -->
                            </div><!-- widget-content padding -->
                        </div><!-- widget-header -->
                    </div><!-- col-sm-6-portlets --> 
                    <!-- end Field name checkbox -->
                  <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-header">
                                <h2><strong>Property Owner</strong> Lists</h2>

                                <div class="additional-btn">                                    
                                  <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                  <a href="<?php echo base_url('property_owner/create_edit');?>"><i class="icon-user-add"></i></a>  
                                  <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                  <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content">
                              <br>                    
                              <div class="table-responsive">
                              <form class='form-horizontal' role='form'>
                              <table id="owner_table" data-sortable class="table table-striped table-bordered display compact"  cellspacing="0" width="100%">
                              <thead>
                                  <tr> <th class="fullname"><small>Full Name / No of Property</small></th>
                                       <th class="no_property_owned"><small>No of Property</small></th> 
                                       <th class="nationality1"><small>Nationality</small></th>
                                        <th class="nationality2"><small>Nationality 2</small></th>
                                        <th class="nationality3"><small>Nationality 3</small></th>
                                        <th class="nationality4"><small>Nationality 4</small></th>
                                        <th class="passport_no1"><small>Passport No</small></th>
                                        <th class="passport_no2"><small>Passport No 2</small></th>
                                        <th class="passport_no3"><small>Passport No 3</small></th>
                                        <th class="passport_no4"><small>Passport No 4</small></th>
                                        <th class="address1"><small>Address</small></th>
                                        <th class="subcommunity1"><small>Subcommunity</small></th>
                                        <th class="community1"><small>Community</small></th>
                                        <th class="city1"><small>City</small></th>
                                        <th class="country1"><small>Country</small></th>

                                        <th class="address2"><small>Address 2</small></th>
                                        <th class="subcommunity2"><small>Subcommunity 2</small></th>
                                        <th class="community2"><small>Community 2</small></th>
                                        <th class="city2"><small>City 2</small></th>
                                        <th class="country2"><small>Country 2</small></th>

                                        <th class="address3"><small>Address 3</small></th>
                                        <th class="subcommunity3"><small>Subcommunity 3</small></th>
                                        <th class="community3"><small>Community 3</small></th>
                                        <th class="city3"><small>City 3</small></th>
                                        <th class="country3"><small>Country 3</small></th>

                                        <th class="address4"><small>Address 4</small></th>
                                        <th class="subcommunity4"><small>Subcommunity 4</small></th>
                                        <th class="community4"><small>Community 4</small></th>
                                        <th class="city4"><small>City 4</small></th>
                                        <th class="country4"><small>Country 4</small></th>

                                        <th class="telephone_no1"><small>Telephone No</small></th>
                                        <th class="telephone_no2"><small>Telephone No 2</small></th>
                                        <th class="telephone_no3"><small>Telephone No 3</small></th>
                                        <th class="telephone_no4"><small>Telephone No 4</small></th>

                                        <th class="fax_no1"><small>Fax No</small></th>
                                        <th class="fax_no2"><small>Fax No 2</small></th>
                                        <th class="fax_no3"><small>Fax No 3</small></th>
                                        <th class="fax_no4"><small>Fax No 4</small></th>

                                        <th class="mobile_no1"><small>Mobile No</small></th>
                                        <th class="mobile_no2"><small>Mobile No 2</small></th>
                                        <th class="mobile_no3"><small>Mobile No 3</small></th>
                                        <th class="mobile_no4"><small>Mobile No 4</small></th>

                                        <th class="email1"><small>Email</small></th>
                                        <th class="email2"><small>Email 2</small></th>
                                        <th class="email3"><small>Email 3</small></th>
                                        <th class="email4"><small>Email 4</small></th>   
                                        <th class="print" style="width:10px;"><small>Print</small></th>              <!-- added by Lem 12/14/2014 -->
                                        <th class="status" style="width:10px;"><small>Status</small></th>                                                                                  
                                        <th class="option" style="width:80px;" data-sortable="false">Option</th>
                                  </tr>
                              </thead> 
                              <tfoot>
                                  <tr>                                            
                                     <th class="fullname"><small>Full Name  / No of Property</small></th>             <!-- 1 -->
                                      <th class="no_property_owned"><small>No of Property</small></th> 
                                       <th class="nationality1"><small>Nationality</small></th>     <!-- 2 -->
                                        <th class="nationality2"><small>Nationality 2</small></th>  <!-- 3 -->
                                        <th class="nationality3"><small>Nationality 3</small></th>  <!-- 4 -->
                                        <th class="nationality4"><small>Nationality 4</small></th>  <!-- 5 -->
                                        <th class="passport_no1"><small>Passport No</small></th>    <!-- 6 -->
                                        <th class="passport_no2"><small>Passport No 2</small></th>  <!-- 7 -->
                                        <th class="passport_no3"><small>Passport No 3</small></th>  <!-- 8 -->
                                        <th class="passport_no4"><small>Passport No 4</small></th>  <!-- 9 -->
                                        <th class="address1"><small>Address 1</small></th>          <!-- 10-->
                                        <th class="subcommunity1"><small>Subcommunity 1</small></th><!-- 11 -->
                                        <th class="community1"><small>Community 1</small></th>      <!-- 12-->
                                        <th class="city1"><small>City 1</small></th>                <!-- 13-->
                                        <th class="country1"><small>Country 1</small></th>          <!-- 14-->

                                        <th class="address2"><small>Address 2</small></th>          <!-- 15-->
                                        <th class="subcommunity2"><small>Subcommunity 2</small></th><!-- 16-->
                                        <th class="community2"><small>Community 2</small></th>      <!-- 17-->
                                        <th class="city2"><small>City 2</small></th>                <!-- 18-->
                                        <th class="country2"><small>Country 2</small></th>          <!-- 19-->

                                        <th class="address3"><small>Address 3</small></th>          <!-- 20-->
                                        <th class="subcommunity3"><small>Subcommunity 3</small></th><!-- 21 -->
                                        <th class="community3"><small>Community 3</small></th>      <!-- 22-->
                                        <th class="city3"><small>City 3</small></th>                <!-- 23-->
                                        <th class="country3"><small>Country 3</small></th>          <!-- 24-->

                                        <th class="address4"><small>Address 4</small></th>          <!-- 25-->
                                        <th class="subcommunity4"><small>Subcommunity 4</small></th>
                                        <th class="community4"><small>Community 4</small></th>      <!-- 26-->
                                        <th class="city4"><small>City 4</small></th>                <!-- 27-->
                                        <th class="country4"><small>Country 4</small></th>          <!-- 28-->

                                        <th class="telephone_no1"><small>Telephone No</small></th>  <!-- 29-->
                                        <th class="telephone_no2"><small>Telephone No 2</small></th><!-- 30-->
                                        <th class="telephone_no3"><small>Telephone No 3</small></th><!-- 31-->
                                        <th class="telephone_no4"><small>Telephone No 4</small></th><!-- 32-->

                                        <th class="fax_no1"><small>Fax No</small></th>              <!-- 33-->
                                        <th class="fax_no2"><small>Fax No 2</small></th>            <!-- 34-->
                                        <th class="fax_no3"><small>Fax No 3</small></th>            <!-- 35-->
                                        <th class="fax_no4"><small>Fax No 4</small></th>            <!-- 36-->

                                        <th class="mobile_no1"><small>Mobile No</small></th>        <!-- 37-->
                                        <th class="mobile_no2"><small>Mobile No 2</small></th>      <!-- 38-->
                                        <th class="mobile_no3"><small>Mobile No 3</small></th>      <!-- 39-->
                                        <th class="mobile_no4"><small>Mobile No 4</small></th>      <!-- 40-->

                                        <th class="email1"><small>Email</small></th>                <!-- 41-->
                                        <th class="email2"><small>Email 2</small></th>              <!-- 42-->
                                        <th class="email3"><small>Email 3</small></th>              <!-- 43-->
                                        <th class="email4"><small>Email 4</small></th>              <!-- 44-->
                                        <th class="print" style="width:10px;"><small>Print</small></th>                 <!-- added by Lem 12/14/2014 -->
                                        <th class="status" style="width:80px;"><small>Status</small></th>               <!-- 45-->                                        
                                      <th class="option" style="width:80px;" data-sortable="false">Option</th>
                                    </tr>
                              </tfoot> 
                              <?php if($tbody){ 
                                echo '<tbody>';
                              } else {
                                echo '<tbody class="hidden">';                                
                              }?>
                                  <tbody class="hidden">
                               <?php  $mobile_no = null;  
                                        foreach($records as $row) {  
                                ?><tr> 
                                    <td class="fullname"><small><?php echo $row->first_name.' '.$row->middle_name.' '.$row->last_name; ?></small></td>
                                    <td class="no_property_owned"><small><?php echo $row->no_property_owned; ?></small></td>
                                    <td class="nationality1"><small><?php echo $row->nationality1; ?></small></td>
                                    <td class="nationality2"><small><?php echo $row->nationality2; ?></small></td>
                                    <td class="nationality3"><small><?php echo $row->nationality3; ?></small></td>
                                    <td class="nationality4"><small><?php echo $row->nationality4; ?></small></td>
                                    <td class="passport_no1"><small><?php echo $row->passport_no1; ?></small></td>
                                    <td class="passport_no2"><small><?php echo $row->passport_no2; ?></small></td>
                                    <td class="passport_no3"><small><?php echo $row->passport_no3; ?></small></td>
                                    <td class="passport_no4"><small><?php echo $row->passport_no4; ?></small></td>
                                    <td class="address1"><small><?php echo $row->address1; ?></small></td>
                                    <td class="subcommunity1"><small><?php echo $row->subcommunity1; ?></small></td>
                                    <td class="community1"><small><?php echo $row->community1; ?></small></td>
                                    <td class="city1"><small><?php echo $row->city1; ?></small></td>
                                    <td class="country1"><small><?php echo $row->country1; ?></small></td>

                                    <td class="address2"><small><?php echo $row->address2; ?></small></td>
                                    <td class="subcommunity2"><small><?php echo $row->subcommunity2; ?></small></td>
                                    <td class="community2"><small><?php echo $row->community2; ?></small></td>
                                    <td class="city2"><small><?php echo $row->city2; ?></small></td>
                                    <td class="country2"><small><?php echo $row->country2; ?></small></td>

                                    <td class="address3"><small><?php echo $row->address3; ?></small></td>
                                    <td class="subcommunity3"><small><?php echo $row->subcommunity3; ?></small></td>
                                    <td class="community3"><small><?php echo $row->community3; ?></small></td>
                                    <td class="city3"><small><?php echo $row->city3; ?></small></td>
                                    <td class="country3"><small><?php echo $row->country3; ?></small></td>

                                    <td class="address4"><small><?php echo $row->address4; ?></small></td>
                                    <td class="subcommunity4"><small><?php echo $row->subcommunity4; ?></small></td>
                                    <td class="community4"><small><?php echo $row->community4; ?></small></td>
                                    <td class="city4"><small><?php echo $row->city4; ?></small></td>
                                    <td class="country4"><small><?php echo $row->country4; ?></small></td>

                                    <td class="telephone_no1"><small><?php echo $row->telephone_no1; ?></small></td>
                                    <td class="telephone_no2"><small><?php echo $row->telephone_no2; ?></small></td>
                                    <td class="telephone_no3"><small><?php echo $row->telephone_no3; ?></small></td>
                                    <td class="telephone_no4"><small><?php echo $row->telephone_no4; ?></small></td>

                                    <td class="fax_no1"><small><?php echo $row->fax_no1; ?></small></td>
                                    <td class="fax_no2"><small><?php echo $row->fax_no2; ?></small></td>
                                    <td class="fax_no3"><small><?php echo $row->fax_no3; ?></small></td>
                                    <td class="fax_no4"><small><?php echo $row->fax_no4; ?></small></td>

                                    <td class="mobile_no1"><small><?php echo $row->mobile_no1; ?></small></td>
                                    <td class="mobile_no2"><small><?php echo $row->mobile_no2; ?></small></td>
                                    <td class="mobile_no3"><small><?php echo $row->mobile_no3; ?></small></td>
                                    <td class="mobile_no4"><small><?php echo $row->mobile_no4; ?></small></td>

                                    <td class="email1"><small><?php echo $row->email1; ?></small></td>
                                    <td class="email2"><small><?php echo $row->email2; ?></small></td>
                                    <td class="email3"><small><?php echo $row->email3; ?></small></td>
                                    <td class="email4"><small><?php echo $row->email4; ?></small></td>

                                    <td class="option" style="text-align: center;width:80px;">    <!-- added by Lem 12/14/2014 -->
                                        <div class="btn-group btn-group-xs"> 
                                          <a href="<?php $url='property_owner/print_form/'.$row->tb_property_owner_id; echo base_url($url); ?>" target="_blank" data-toggle="tooltip" title="Print" ><i class="icon-print-2"></i></a>
                                        </div>
                                    </td>

                                    <td class="status" style="text-align: center;width:80px;"><small><?php if($row->status){ echo '<span id="record-status" value="'.$row->tb_property_owner_id.'" class="label label-success btn">Active</span>'; } else { echo '<span class="label label-danger btn">Suspended</span>'; } ?></small></td>
                                    
                                    <td class="option" style="text-align: center;width:80px;">
                                      <div class="btn-group btn-group-xs">                                                                                                                                                                
                                          <a href="<?php $url='property_owner/create_edit/'.$row->tb_property_owner_id; echo base_url($url); ?>" data-toggle="tooltip" title="Edit Contact Details" ><i class="fa fa-edit"></i></a>                                                                                                   
                                          <?php if($row->no_property_owned==0) { ?>
                                          <a href="#delete-record-modal" data-id="<?php echo $row->tb_property_owner_id; ?>" id="delete-record" title="Delete"  class="md-trigger open-delete-dialog" data-modal="delete-record-modal"><i class="glyphicon glyphicon-remove"></i></a>                                          
                                          <?php } else { ?>
                                          <a href="#" id="delete-record" title="Delete"  class="md-trigger" data-modal="cnt-delete-record-modal"><i class="glyphicon glyphicon-remove"></i></a>             
                                          <?php } ?>                            
                                      </div>
                                    </td>
                                    <?php } ?>  
                             
                                </tbody>
                              </table>
                              </form>
                              </div><!-- table-responsive -->
                            </div><!-- widget-content -->
                        </div>
                  </div>
              </div><!-- row -->				
    			<!-- Footer Start -->
          <footer >
              Soft Line Cleaning Services &copy; 2014
              <span class="footer-links">
              	<a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact Us</a>
              </span>
          </footer>
          
          <!-- Footer End -->
          <script type="text/javascript">            
            // initial table set
            function td_fullname(first_name, middle_name, last_name){
              var row_html = '';
              row_html = '<td class="fullname"><small>'+first_name+' '+middle_name+' '+last_name+'</small></td>';
              return row_html;
            }

            function check_td_display(field_name, value){      
              var selector = 'table .'+field_name,
                row_html = '';

              if($(selector).is(':visible')){
                  row_html += '<td class="'+field_name+'">' + field_name + '</td>';                        
                }
                return row_html;
            }  
            
            function row_check_owner(first_name, middle_name, last_name, country1, country2, country3, country4, address1, address2, address3, address4, email1, email2, email3, email4, mobile_no1, mobile_no2, mobile_no3, mobile_no4, telephone_no1, telephone_no2, telephone_no3, telephone_no4, passport_no1, passport_no2, passport_no3, passport_no4, nationality1, nationality2, nationality3, nationality4, city1, city2, city3, city4, fax_no1, fax_no2, fax_no3, fax_no4, status, tb_property_owner_id, subcommunity1, subcommunity2, subcommunity3, subcommunity4, community1, community2, community3, community4, no_property_owned){                   
                var row_html = '<tr>';                  
                var url  = 'property_owner/print_form/'+tb_property_owner_id;
                var href = '<?php echo base_url('+url+'); ?>';                   // ??
                row_html += td_fullname(first_name, middle_name, last_name);

                if($('table .country1').is(':visible')){
                    row_html += '<td class="country1">' + country1 + '</td>';                        
                }
                if($('table .country2').is(':visible')){
                    row_html += '<td class="country2">' + country2 + '</td>';                        
                }
                if($('table .country3').is(':visible')){
                    row_html += '<td class="country3">' + country3 + '</td>';                        
                }
                if($('table .country4').is(':visible')){
                    row_html += '<td class="country4">' + country4 + '</td>';                        
                }

                if($('table .address1').is(':visible')){
                    row_html += '<td class="address1">' + address1 + '</td>';                        
                }
                if($('table .address2').is(':visible')){
                    row_html += '<td class="address2">' + address2 + '</td>';                        
                }
                if($('table .address3').is(':visible')){
                    row_html += '<td class="address3">' + address3 + '</td>';                        
                }
                if($('table .address4').is(':visible')){
                    row_html += '<td class="address4">' + address4 + '</td>';                        
                }

                if($('table .email1').is(':visible')){
                    row_html += '<td class="email1">' + email1 + '</td>';                        
                }
                if($('table .email2').is(':visible')){
                    row_html += '<td class="email2">' + email2 + '</td>';                        
                }
                if($('table .email3').is(':visible')){
                    row_html += '<td class="email3">' + email3 + '</td>';                        
                }
                if($('table .email4').is(':visible')){
                    row_html += '<td class="email4">' + email4 + '</td>';                        
                }

                if($('table .mobile_no1').is(':visible')){
                    row_html += '<td class="mobile_no1">' + mobile_no1 + '</td>';                        
                }
                if($('table .mobile_no2').is(':visible')){
                    row_html += '<td class="mobile_no2">' + mobile_no2 + '</td>';                        
                }
                if($('table .mobile_no3').is(':visible')){
                    row_html += '<td class="mobile_no3">' + mobile_no3 + '</td>';                        
                }
                if($('table .mobile_no4').is(':visible')){
                    row_html += '<td class="mobile_no4">' + mobile_no4 + '</td>';                        
                }

                if($('table .telephone_no1').is(':visible')){
                    row_html += '<td class="telephone_no1">' + telephone_no1 + '</td>';                        
                }
                if($('table .telephone_no2').is(':visible')){
                    row_html += '<td class="telephone_no2">' + telephone_no2 + '</td>';                        
                }
                if($('table .telephone_no3').is(':visible')){
                    row_html += '<td class="telephone_no3">' + telephone_no3 + '</td>';                        
                }
                if($('table .telephone_no4').is(':visible')){
                    row_html += '<td class="telephone_no4">' + telephone_no4 + '</td>';                        
                }

                if($('table .passport_no1').is(':visible')){
                    row_html += '<td class="passport_no1">' + passport_no1 + '</td>';                        
                }
                if($('table .passport_no2').is(':visible')){
                    row_html += '<td class="passport_no2">' + passport_no2 + '</td>';                        
                }
                if($('table .passport_no3').is(':visible')){
                    row_html += '<td class="passport_no3">' + passport_no3 + '</td>';                        
                }
                if($('table .passport_no4').is(':visible')){
                    row_html += '<td class="passport_no4">' + passport_no4 + '</td>';                        
                }

                if($('table .nationality1').is(':visible')){
                    row_html += '<td class="nationality1">' + nationality1 + '</td>';                        
                }
                if($('table .nationality2').is(':visible')){
                    row_html += '<td class="nationality2">' + nationality2 + '</td>';                        
                }
                if($('table .nationality3').is(':visible')){
                    row_html += '<td class="nationality3">' + nationality3 + '</td>';                        
                }
                if($('table .nationality4').is(':visible')){
                    row_html += '<td class="nationality4">' + nationality4 + '</td>';                        
                }

                if($('table .city1').is(':visible')){
                    row_html += '<td class="city1">' + city1 + '</td>';                        
                }
                if($('table .city2').is(':visible')){
                    row_html += '<td class="city2">' + city2 + '</td>';                        
                }
                if($('table .city3').is(':visible')){
                    row_html += '<td class="city3">' + city3 + '</td>';                        
                }
                if($('table .city4').is(':visible')){
                    row_html += '<td class="city4">' + city4 + '</td>';                        
                }

                if($('table .fax_no1').is(':visible')){
                    row_html += '<td class="fax_no1">' + fax_no1 + '</td>';                        
                }
                if($('table .fax_no2').is(':visible')){
                    row_html += '<td class="fax_no2">' + fax_no2 + '</td>';                        
                }
                if($('table .fax_no3').is(':visible')){
                    row_html += '<td class="fax_no3">' + fax_no3 + '</td>';                        
                }
                if($('table .fax_no4').is(':visible')){
                    row_html += '<td class="fax_no4">' + fax_no4 + '</td>';                        
                }

                if($('table .status').is(':visible')){
                    row_html += '<td class="status">' + status + '</td>';                        
                }

                row_html += '<td class="option" style="text-align: center;width:80px;"><div class="btn-group btn-group-xs"><a href="'+url+'" target="_blank" data-toggle="tooltip" title="Print" ><i class="icon-print-2"></i></a></div></td>';
                

                row_html  += '<td> edit / delete</td></tr>';
                
                return row_html;    
            }       

            function render_filtered_owner_table(first_name, middle_name, last_name, nationality, country, telephone_no, mobile_no, fax_no, email){
                  first_name   = typeof first_name !== 'undefined' ? first_name : null;
                  middle_name  = typeof middle_name !== 'undefined' ? middle_name : null;
                  last_name    = typeof last_name !== 'undefined' ? last_name : null;
                  nationality  = typeof nationality !== 'undefined' ? nationality : null;
                  country      = typeof country !== 'undefined' ? country : null;
                  telephone_no = typeof telephone_no !== 'undefined' ? telephone_no : null;
                  mobile_no    = typeof mobile_no !== 'undefined' ? mobile_no : null;
                  fax_no       = typeof last_name !== 'undefined' ? fax_no : null;
                  email        = typeof email !== 'undefined' ? email : null;

                  return $.ajax({
                              url: "<?php echo base_url('property_owner/find_owner'); ?>",
                              type: 'POST',
                              dataType: 'json',   // The available data types are text, html, xml, json, jsonp, and script.
                              data:{                                        
                                      'first_name': first_name,
                                      'middle_name': middle_name,
                                      'last_name': last_name,
                                      'nationality': nationality,
                                      'country' : country,
                                      'telephone_no' : telephone_no,
                                      'mobile_no' : mobile_no,
                                      'fax_no' : fax_no,
                                      'email' : email
                                   },
                              //context: $('#datatables-2'),
                                  
                              error:  function(xhr, status, error) {
                                        var err = JSON.parse(xhr.responseText);
                                        alert(err.Message);
                                       
                                      },
                              statusCode: {
                                       404: function() {
                                              alert( "page not found" );
                                          }
                              },
                              success: function (response) {                               
                                  // remove table body
                                  //console.log('response :'+ response);
                                  var trHTML = '';
                                  $.each(response, function (i, item) {
                                      //console.log('i :'+ i);
                                      //console.log('item :'+ item);                                           
                                      trHTML += row_check_owner(item.first_name, item.middle_name, item.last_name, item.country1, item.country2, item.country3, item.country4, item.address1, item.address2, item.address3, item.address4, item.email1, item.email2, item.email3, item.email4, item.mobile_no1, item.mobile_no2, item.mobile_no3, item.mobile_no4, item.telephone_no1, item.telephone_no2, item.telephone_no3, item.telephone_no4, item.passport_no1, item.passport_no2, item.passport_no3, item.passport_no4, item.nationality1, item.nationality2, item.nationality3, item.nationality4, item.city1, item.city2, item.city3, item.city4, item.fax_no1, item.fax_no2, item.fax_no3, item.fax_no4, item.status, item.tb_property_owner_id, item.subcommunity1, item.subcommunity2, item.subcommunity3, item.subcommunity4, item.community1, item.community2, item.community3, item.community4, item.no_property_owned);
                                      //trHTML += row_check_owner(item.tb_property_owner_id, item.first_name+' '+item.last_name, item.address, item.mobile_no, item.telephone_no, item.re_property, item.property_type, item.building_name, item.status);
                                  });

                                  $('tbody').removeClass('hidden').show().empty().append(trHTML);
                                  //console.log('respose: '+response); 
                                  //console.log('trHTML: '+trHTML); 
                              },
                              complete: function(xhr, status){
                                  var xhr = JSON.parse(xhr.responseText);
                                  //console.log('ajax change status :'+ status + ' with xhr: '+xhr);
                              }
                          });// end inter-active table 
            };

            $(document).on("click", ".open-delete-dialog", function () {   
                var record_id = $(this).data('id');                  
                //var search_dash = todelete.search('-');
                //var rec_id_only = todelete.slice(0,search_dash);
                //var no_property_owned = todelete.slice(search_dash+1);

                $("div.md-content #todelete").val( record_id );
                //$("#cnt-del-no-property").text(no_property_owned);                
            });

            $(document).ready(function() {
              var delay = (function(){
                              var timer = 0;
                              return function(callback, ms){
                                clearTimeout (timer);
                                timer = setTimeout(callback, ms);
                              };
                           })();

              $('#del-record').on('click',function(){
                var todelete = $('#todelete').val();
            
                $.ajax({
                  url: "<?php echo base_url('property_owner/for_deletion_owner'); ?>",
                  type: 'POST',
                  dataType: 'json',   // The available data types are text, html, xml, json, jsonp, and script.
                  data:{  'property_owner_id' : todelete
                  },
                  success: function (response) { 
                                var property_count = '';
                                $.each(response, function (i, item) {
                                    property_count = item;
                                    //console.log('item :'+ item);
                                    //console.log('i :'+ i);
                                });
                  }                 
                });// delete record
              });  
              //$('table .address2, table .address3, table .address4, table .telephone_no2, table .telephone_no3, table .telephone_no4').hide();
              //$('table .mobile_no2, table .mobile_no3, table .mobile_no4, table .fax_no2, table .fax_no3, table .fax_no4').hide();
              //$('table .email2, table .email3, table .email4, table .passport_no2, table .passport_no3, table .passport_no4').hide();
              //$('table .subcommunity2, table .subcommunity3, table .subcommunity4, table .community2, table .community3, table .community4').hide();
              //$('table .city2, table .city3, table .city4, table .country2, table .country3, table .country4').hide();
              //$('table .nationality2, table .nationality3, table .nationality4').hide();
              
              // Setup - add a text input to each footer cell
              if ($("table#owner_table tbody tr").length > 0) {
                //$(this).tablesorter({ sortList: [[0,0]]});
                $('#owner_table tfoot th').each( function () {
                  var title = $('#owner_table thead th').eq( $(this).index() ).text();
                  if(title!='Option' && title!='Status' && title!='Print'){
                    $(this).html( '<input type="text" placeholder="Search '+title+'" style="font-size: 12px;width:100%;" />' );
                  }
                });
              }

              var table = $('#owner_table').DataTable({ 
                     // "processing": true,
                     // "serverSide": true,
                     // "ajax"      : "<?php echo base_url('property_owner/list_all'); ?>"
                      /*
                      dom: 'T<"clear">lfrtip',
                      tableTools: {
                        sRowSelect: "os",
                        sSwfPath: "<?php echo base_url(); ?>assets/lib/DataTables-1.10.4/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                        aButtons: [
                          { sExtends: "editor_create", editor: editor },
                          { sExtends: "editor_edit",   editor: editor },
                          { sExtends: "editor_remove", editor: editor },
                          {
                            sExtends: "collection",
                            sButtonText: "Save",
                            sButtonClass: "save-collection",
                            aButtons: [ 'copy', 'csv', 'xls', 'pdf' ]
                          },
                          'print'
                        ]
                      },
                      */
                      "autoWidth": false,
                      "deferRender" : true,
                      //"stateSave"   : true,
                      "columnDefs": [
                        {
                            // The `data` parameter refers to the data for the cell (defined by the
                            // `data` option, which defaults to the column being worked with, in
                            // this case `data: 0`.
                             "render": function ( data, type, row ) {                                              
                                var x = $(row[1]);                              
                                if(x.text()>0){
                                  return data +' ('+ row[1]+')';
                                } else {
                                  return data +' ('+ 0+')';
                                }                            
                             },
                            "targets": 0
                        },
                        { "visible": false,  
                          "targets": [ 1 ] 
                        },
                        {
                            // The `data` parameter refers to the data for the cell (defined by the
                            // `data` option, which defaults to the column being worked with, in
                            // this case `data: 0`.
                             "render": function ( data, type, row ) {                                                                            
                                return data +' '+row[11]+' '+row[12]+' '+row[13];
                             },
                            "targets": 10
                        },
                        { "visible": false,  
                          "targets": [ 11,12,13 ] 
                        }
                      ],
                      //"dom": 'C<"clear">lfrtip',
                      //"sDom": 'T<"clear">lfrtip',
                      /*
                      "oTableTools": {
                          "aButtons": [
                              {
                                  "sExtends": "copy",
                                  "sButtonText": "Copy to clipboard",
                                  "oSelectorOpts": {
                                      page: 'current'
                                  }
                              }
                          ]
                      } ,*/
                      "scrollX"     : true,
                      "scrollY"     : 325,
                      "scrollCollapse": true,
                      "jQueryUI":       true,
                      "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                      //"order": [[ 1, 'asc' ]],
                      //"columnDefs": [
                      //  { "width": "20%", "targets": 1 }
                      //]
              });
              //new $.fn.dataTable.FixedColumns( table );
              
              table.on( 'column-sizing.dt', function ( e, settings ) {
                console.log( 'Column width recalculated in table' );
              });

              // Apply the search
              table.columns().eq( 0 ).each( function ( colIdx ) {
                  $( 'input', table.column( colIdx ).footer() ).on( 'keyup change', function () {
                      table
                          .column( colIdx )
                          .search( this.value )
                          .draw();
                  } );
              });

              //table.fnSetColumnVis( 2, false );
              //$.fn.dataTable.ColVis.fnRebuild( table );          

              // toggle class off associated to default checkbox                                                  
              $('.field_name').click(function(){
                var first_name    = $('#first_name').val();
                var middle_name   = $('#middle_name').val();
                var last_name     = $('#last_name').val();
                var nationality   = $('#nationality').val();
                var country       = $('#country_name').val();
                var telephone_no  = $('#telephone_no').val();
                var mobile_no     = $('#mobile_no').val();
                var fax_no        = $('#fax_no').val();
                var email         = $('#email').val();
                // inter-active table    
                console.log('inside field_name click');
                //render_filtered_table(city_name, community_name, subcommunity_name).complete(function(){
                render_filtered_owner_table(first_name, middle_name, last_name, nationality, country, telephone_no, mobile_no, fax_no, email).complete(function(){
                    console.log('ajax within a function successful');
                });                
                console.log('after rendered inside field_name click');
                // end inter-active table
                
                var check_switch = $(this).find('.iswitch').hasClass('on');
                var field_name_checkbox = $(this).find('.iswitch').siblings('input').attr('name');
                var column = "table ." + field_name_checkbox;
               
                if(check_switch){ 
                    // to show the table column name mention                      
                    if(field_name_checkbox == 'address1'){                              
                      $('table .address1').toggle();
                      $('table .subcommunity1').toggle();
                      $('table .community1').toggle();
                      $('table .city1').toggle();
                      $('table .country1').toggle();                             
                    } else if(field_name_checkbox == 'address2'){                              
                      $('table .address2').toggle();
                      $('table .subcommunity2').toggle();
                      $('table .community2').toggle();
                      $('table .city2').toggle();
                      $('table .country2').toggle();  
                    } else if(field_name_checkbox == 'address3'){                              
                      $('table .address3').toggle();
                      $('table .subcommunity3').toggle();
                      $('table .community3').toggle();
                      $('table .city3').toggle();
                      $('table .country3').toggle();  
                    } else if(field_name_checkbox == 'address4'){                              
                      $('table .address4').toggle();
                      $('table .subcommunity4').toggle();
                      $('table .community4').toggle();
                      $('table .city4').toggle();
                      $('table .country4').toggle();  
                    } else {
                      $(column).toggle();
                    }
                                              
                } else {   
                    // to hide the table column name mention 
                    if(field_name_checkbox=='address1'){
                      $('table .address1').hide();
                      $('table .subcommunity1').hide();
                      $('table .community1').hide();
                      $('table .city1').hide();
                      $('table .country1').hide();                             
                    } else if(field_name_checkbox=='address2'){
                      $('table .address2').hide();
                      $('table .subcommunity2').hide();
                      $('table .community2').hide();
                      $('table .city2').hide();
                      $('table .country2').hide();                             
                    } else if(field_name_checkbox=='address3'){
                      $('table .address3').hide();
                      $('table .subcommunity3').hide();
                      $('table .community3').hide();
                      $('table .city3').hide();
                      $('table .country3').hide();                             
                    } else if(field_name_checkbox=='address4'){
                      $('table .address4').hide();
                      $('table .subcommunity4').hide();
                      $('table .community4').hide();
                      $('table .city4').hide();
                      $('table .country4').hide();                             
                    } else {
                      $(column).hide();
                    }
                }                          
              });

              $("#find_filter").click(function(){  
              //$("#first_name").keyup(function() {
                var first_name    = $('#first_name').val(),
                    middle_name   = $('#middle_name').val(),
                    last_name     = $('#last_name').val(),
                    nationality   = $('#nationality').val(),
                    country_name  = $('#country_name').val(),
                    telephone_no  = $('#telephone_no').val(),
                    mobile_no     = $('#mobile_no').val(),
                    fax_no        = $('#fax_no').val(),
                    email         = $('#email').val();

                //delay(function(){
                  //alert('Time elapsed!');
                  $.ajax({
                    url: "<?php echo base_url('property_owner/find_owner'); ?>",
                    type: 'POST',
                    dataType: 'json',   // The available data types are text, html, xml, json, jsonp, and script.
                    data:{  'first_name'  : first_name,
                            'middle_name' : middle_name,
                            'last_name'   : last_name,
                            'nationality' : nationality,
                            'country_name': country_name,
                            'telephone_no': telephone_no,
                            'mobile_no'   : mobile_no,
                            'fax_no'      : fax_no,
                            'email'       : email
                         },                              
                    error:  function(xhr, status, error) {
                              var err = JSON.parse(xhr.responseText);
                              //alert(err.Message);
                            },
                    statusCode: {
                             404: function() {
                                    alert( "page not found" );
                                }
                    },
                    success: function (response) { 
                        var trHTML = '';
                        $.each(response, function (i, item) {                              
                            //console.log('item :'+ item);
                            //console.log('i :'+ i);                            
                            trHTML += row_check_owner(item.first_name, item.middle_name, item.last_name, item.country1, item.country2, item.country3, item.country4, item.address1, item.address2, item.address3, item.address4, item.email1, item.email2, item.email3, item.email4, item.mobile_no1, item.mobile_no2, item.mobile_no3, item.mobile_no4, item.telephone_no1, item.telephone_no2, item.telephone_no3, item.telephone_no4, item.passport_no1, item.passport_no2, item.passport_no3, item.passport_no4, item.nationality1, item.nationality2, item.nationality3, item.nationality4, item.city1, item.city2, item.city3, item.city4, item.fax_no1, item.fax_no2, item.fax_no3, item.fax_no4, item.status, item.tb_property_owner_id, item.subcommunity1, item.subcommunity2, item.subcommunity3, item.subcommunity4, item.community1, item.community2, item.community3, item.community4, item.no_property_owned);                            
                        });

                        $('tbody').removeClass('hidden').show().empty().append(trHTML);                        
                        console.log('ajax within a function successful');                                                
                    },
                    complete: function(xhr, status){
                        var xhr = JSON.parse(xhr.responseText);
                        //console.log('ajax change status :'+ status + ' with xhr: '+xhr);
                    }
                  });// end inter-active count response

                //}, 1000);
              });  
            });
          </script>         
      </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->
		<!-- End right content -->