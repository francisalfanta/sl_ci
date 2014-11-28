        <!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            	<!-- Page Heading Start -->
                <div class="page-heading"> 

                <form class="form-horizontal" action="<?php echo base_url('propertyfinder/create_property'); ?>" method="post" accept-charset="utf-8" role="form">
                <div class="row">
                    <div class="col-sm-6 portlets">
                        
                        <div class="widget">
                            <div class="widget-header transparent">
                                <h2><strong>Property</strong> Form</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div><!-- additional-btn -->
                            </div><!-- widget-header transparent -->
                            <div class="widget-content padding">  
                                                
                                <div id="horizontal-form">                               
                                    <form class="form-horizontal" role="form">
                                        <?php echo validation_errors(); ?>                                        
                                        <div class="form-group">
                                            <label for="city" class="col-sm-3 control-label">City</label>
                                            <div class="col-sm-8">       
                                                                                                                             
                                                <input type="text" name="city" class="form-control col-sm-4" id="city" placeholder="City" tabindex="1" autofocus>
                                                <div id="logcity"></div>
                                                <!-- <p class="help-block">Example <block-level help text here.</p> -->
                                            </div><!-- col-sm-10 -->
                                            <a href="#"><span onclick="add_city()" class="glyphicon glyphicon-floppy-save"></span></a>                                           
                                        </div><!-- form-group -->                                                                           
                                        
                                        <div class="form-group">
                                            <label for="community_name" class="col-sm-3 control-label">Community</label>
                                            <div class="col-sm-8"> <!--select-editable">-->
                                                <select name="community_name" class="form-control combobox" id="community_name" tabindex="2">
                                                <option value="">Please select first City</option>
                                                <?php foreach($community as $arr){?>   
                                                    <option value="<?php echo $arr['community_name'] ?>" <?php echo set_select('community_name', $arr['community_name']); ?> ><?php echo $arr['community_name']; ?></option>
                                                <?php }?>   
                                                </select>
                                                <!--<input type="text" name="community_name" value="" />-->
                                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                                            </div><!-- col-sm-10 -->
                                            <a href=""><span class="glyphicon glyphicon-floppy-save"></span></a>
                                            <a href="<?php echo base_url('city/del'); ?>"><span class="glyphicon glyphicon-floppy-remove"></span></a>
                                        </div><!-- form-group -->

                                        <div class="form-group">
                                            <label for="subcommunity_name" class="col-sm-3 control-label">Sub Community</label>
                                            <div class="col-sm-8"> <!--select-editable">-->                              
                                                <select name="subcommunity_name" class="form-control combobox" id="inputsubcommunity_name" tabindex="3">
                                                <option value="">Please select first City</option>
                                                <?php foreach($subcommunity as $arr){ ?>   
                                                    <option value="<?php echo $arr['subcommunity_name']; ?>"  <?php echo set_select('subcommunity_name', $arr['subcommunity_name']); ?> ><?php echo $arr['subcommunity_name']; ?></option>
                                                <?php }?>   
                                                </select>
                                                <!--<input type="text" name="subcommunity_name" value="" />-->
                                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                                            </div><!-- col-sm-10 -->
                                            <a href="#"><span class="glyphicon glyphicon-floppy-save"></span></a>
                                            <a href="#"><span class="glyphicon glyphicon-floppy-remove"></span></a>
                                        </div><!-- form-group -->

                                         <div class="form-group">
                                            <label for="re_property" class="col-sm-3 control-label">Property</label>
                                            <div class="col-sm-8"><!--select-editable">-->                             
                                                <!--<select name="re_property" class="form-control combobox" id="inputre_property" tabindex="4">
                                                <?php foreach($subcommunity as $arr){ ?>   
                                                    <option value="<?php echo $arr['id']; ?>" ><?php echo $arr['subcommunity_name']; ?></option>
                                                <?php }?>   
                                                </select>-->
                                                <input type="text" name="re_property"  class="form-control" value="" />
                                                <!-- <p class="help-block">Example block-level help text here.</p> -->                                            
                                            </div><!-- col-sm-10 -->
                                        </div><!-- form-group -->

                                      <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10 text-right">
                                          <button type="submit" class="btn btn-default" >Save</button>
                                        </div><!-- col-sm-offset-2 col-sm-10 text-right -->
                                      </div><!-- form-group -->

                                    </form>
                                </div><!-- horizontal-form -->
                            </div><!-- widget-content padding -->
                        </div><!-- widget -->
                        
                    </div><!-- col-sm-6 portlets -->

                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-header transparent">
                                <h2><strong>Property</strong> Table</h2>

                                <div class="additional-btn">                                    
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="slcs_staff/create_member"><i class="icon-user-add"></i></a>                                    
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content">                    
                                <div class="table-responsive">
                                    <table data-sortable class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th style="width: 30px" data-sortable="false"><input type="checkbox" class="rows-check"></th>
                                                <th>City</th>
                                                <th>Community</th>
                                                <th>Sub-Community</th>
                                                <th>Property</th>                                               
                                                <th data-sortable="false">Option</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>

                                            <?php 
                                                $i = 1; // counter
                                                foreach($properties as $property) { ?>

                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><input type="checkbox" class="rows-check"></td>
                                                <td><?php echo $property['city'];?></td>
                                                <td><?php echo $property['community'];?></td>
                                                <td><?php echo $property['subcommunity']; ?></td>
                                                <td><?php echo $property['re_property']; ?></td>                                                
                                                <td>
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="<?php echo base_url('propertyfinder/del/'.$property['id']); ?>" data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
                                                        <a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php ++$i;} ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->

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
                <script type="text/javascript">
                    $(function(){
                        $('select#community_name').attr('disabled', true);
                    });
                    function add_city(){
                        var city_id = $('select#city').val();

                        alert('entered the function');
                        $.ajax({
                         type : 'POST',
                         data : 'city='+ $('#city').val(),
                         url : "<?php echo base_url('city/create_city_name'); ?>",
                         success : function(data){
                                $( "#logcity" ).text( "New City name created successfully." );
                         }
                     });
                    }
                    $(document).ajaxSuccess(function() {
                        $(".log").text("New City name created successfully.");
                    });

                     $("#customerName").autocomplete(baseUrl+"/propertyfinder/ajax_customer_search", {  //we have set data with source here
                         formatItem: function(rowdata) { //This function is called right before the item is displayed on the dropdown, so we splitted and returned what we show in the selection box
                            var info = rowdata[0].split(":");
                            return info[1];
                        },
                        formatResult: function (rowdata) { // This function is called when any item selected, here also we returned that what we wanted to show our customerName field.
                            var info = rowdata[0].split(":");
                            return info[1];
                        }
                    }).result(function(event, data, formatted){ //Here we do our most important task <span class="wp-smiley wp-emoji wp-emoji-smile" title=":)">:)</span>
                            if(!data) { //If no data selected set the customer_id field value as 0
                                $("#customerId").val('0');
                            } else { // Set the value for the customer id
                                var info = formatted.split(":");
                                $("#customerId").val(info[0]);
                            }
                    });
                </script>	
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->