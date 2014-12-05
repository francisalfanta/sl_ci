        <!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            	<!-- Page Heading Start -->
                <div class="page-heading"> 
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

                <form class="form-horizontal" action="<?php echo base_url('propertyfinder/create_property'); ?>" method="post" accept-charset="utf-8" role="form">
                <div class="row">
                    <div class="col-sm-10 col-md-8 col-lg-6 portlets">
                        
                        <div class="widget">
                            <div class="widget-header ">
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
                                            <label for="city" class="col-xs-2 col-sm-3 col-md-3 col-lg-3 control-label">City</label>
                                            <div class="col-xs-9 col-sm-9 col-md-6 col-lg-6">       
                                                <select name="city" id="city_name" tabindex="1" class="form-control">
                                                    <option value="">Select City</option>                                                   
                                                    <option value="1">Abu Dhabi</option>
                                                    <option value="2">Ajman</option>
                                                    <option value="3">Al Ain</option>
                                                    <option value="4">Dubai</option>
                                                    <option value="5">Fujairah</option>
                                                    <option value="6">Ras Al Khaimah</option>
                                                    <option value="7">Sharjah</option>
                                                    <option value="8">Umm Al Quwain</option>
                                                </select>                                                                                                                                                                            
                                            </div><!-- col-sm-10 -->  
                                            <small><div class="col-sm-6 col-md-3 col-lg-3" id="city_count"></div></small>
                                        </div><!-- form-group -->                                                                           
                                        
                                        <div class="form-group">
                                            <label for="community_name" class="col-xs-2 col-sm-3 col-md-3 col-lg-3 control-label">Community</label>
                                             <div class="col-xs-9 col-sm-9 col-md-6 col-lg-6"> <!--select-editable">-->
                                                 <!--city dropdown-->
                                                <select name="community_name" id="cityDrp" class="form-control">
                                                    <option value="">Please select first City</option>
                                                </select>
                                            </div><!-- col-sm-10 --> 
                                            <small><div class="col-sm-6 col-md-3 col-lg-3" id="community_count"></div></small>                                          
                                        </div><!-- form-group -->
                                        <div class="form-group">
                                            <label for="subcommunity_name" class="col-xs-2 col-sm-3 col-md-3 col-lg-3 control-label">Sub Community</label>
                                              <div class="col-xs-9 col-sm-9 col-md-6 col-lg-6"> <!--select-editable">-->                              
                                                <select name="subcommunity_name" id="cityDrp2" class="form-control">
                                                    <option value="">Please select first Community</option>
                                                </select>
                                            </div><!-- col-sm-10 -->
                                            <small><div class="col-sm-6 col-md-3 col-lg-3" id="subcommunity_count"></div></small>                                          
                                        </div><!-- form-group -->
                                         <div class="form-group">
                                            <label for="re_property" class="col-xs-2 col-sm-2 col-md-2 col-lg-3 control-label">Property</label>
                                            <div class="col-xs-9 col-sm-9 col-md-6 col-lg-6"><!--select-editable">-->     
                                                <input type="text" name="re_property"  class="form-control col-md-7 col-lg-6" value="" tabindex="4" />                                                
                                            </div><!-- col-sm-10 -->
                                            <small><div class="col-sm-6 col-md-3 col-lg-3" id="re_property_count"></div></small>
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

                    <!-- Field name checkbox -->
                    <div class="col-sm-6 portlets">
                        <div class="widget">
                            <div class="widget-header ">
                                <h2><strong>Show / Hide</strong> Column Fields</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content padding">
                              <div class="row">
                                <!-- foreach here -->
                                <?php foreach($propertyfinder_tb_fieldnames as $label => $value){
                                        if(strpos(strtolower($label), '_id') === false){                                     
                                            $field_name = ucfirst(str_replace('re ','', strtolower(str_replace('_', ' ', $label)))); 
                                ?>                               
                                <div class="col-xs-8">
                                    <?php echo $field_name; ?>
                                </div>
                                <div class="col-xs-4">
                                    <span class="field_name"><input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" name="<?php echo $label; ?>" value="<?php echo $field_name; ?>" checked  /></span>
                                </div>
                                <?php  }} ?>
                                <!-- end here -->                           
                            </div><!-- row -->
                            </div><!-- widget-content padding -->
                        </div><!-- widget-header -->
                    </div><!-- col-sm-6-portlets -->
 
                    <!-- end Field name checkbox -->

                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-header">
                                <h2><strong>Property</strong> Table</h2>

                                <div class="additional-btn">                                    
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="slcs_staff/create_member"><i class="icon-user-add"></i></a>                                    
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content">
                            <br>                    
                                <div class="table-responsive">
                                    <form class='form-horizontal' role='form'>
                                    <table id="datatables-5" data-sortable class="table table-striped table-bordered display compact" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="city">City</th>
                                                <th class="community">Community</th>
                                                <th class="subcommunity">Sub-Community</th>
                                                <th class="re_property">Property</th>   
                                                <th class="building_name">Building name</th> 
                                                <th class="unit_number">Unit number</th>   
                                                <th class="developer_name">Developer name</th>                                                                                         
                                                <th data-sortable="false">Option</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>                                                                                           
                                                <th class="city">City</th>
                                                <th class="community">Community</th>
                                                <th class="subcommunity">Sub-Community</th>
                                                <th class="re_property">Property</th>   
                                                <th class="building_name">Building name</th>
                                                <th class="unit_number">Unit number</th>
                                                <th class="developer_name">Developer name</th>                                               
                                                <th data-sortable="false">Option</th>
                                            </tr>
                                        </tfoot>
                                        
                                        <tbody class="hidden">

                                            <?php  foreach($properties as $property) { ?>

                                            <tr>                                                                                         
                                                <td class="city"><?php echo $property['city'];?></td>
                                                <td class="community"><?php echo $property['community'];?></td>
                                                <td class="subcommunity"><?php echo $property['subcommunity']; ?></td>
                                                <td class="re_property"><?php echo $property['re_property']; ?></td>    
                                                <td class="building_name"><?php echo $property['building_name']; ?></td>  
                                                <td class="unit_number"><?php echo $property['unit_number']; ?></td>   
                                                <td class="developer_name"><?php echo $property['developer_name']; ?></td>                                           
                                                <td>
                                                    <div class="btn-group btn-group-xs">                        
                                                        <a href="<?php echo base_url('propertyfinder/view_propertyfinder/'.$property['tb_propertyfinder_id']); ?>"data-toggle="tooltip" title="Edit" class="btn"><i class="fa fa-edit"></i></a>
                                                        <a href="<?php echo base_url('propertyfinder/del/'.$property['tb_propertyfinder_id']); ?>" data-toggle="tooltip" title="Off" class="btn"><i class="glyphicon glyphicon-remove"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->

                </jQuery(document).ready(function(){                
              
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
                $(document).ready(function() {
                    // changing table style
                    // http://datatables.net/examples/index 

                    $('.field_name').click(function(){
                        // jquery flow guide on this action
                        // parent node class field_name is looking for a class iswitch in children node
                        //var child_switch = $(this).find('.iswitch');
                        // if the children node contain a class name on
                        //var iswitch = child_switch.hasClass('on');
                        // find the input tag
                        //var input_check = iswitch.siblings('input');
                        // get the sibling attribute name
                        //var input_attr = input_check.attr('name');
                        var check_switch = $(this).find('.iswitch').hasClass('on');
                        var field_name_checkbox = $(this).find('.iswitch').siblings('input').attr('name');
                        var column = "table ." + field_name_checkbox;
                        
                        if(check_switch){ 
                            // to show the table column name mention 
                            $(column).toggle();
                        } else {   
                            // to hide the table column name mention                       
                            $(column).hide();  
                        } 
                    });
                    $('table .id').hide();
                    function display_msg(property_count){
                        var msg = null;
                        if(property_count == 0 ) {
                            msg = 'no record found';
                        } else if (property_count == 1) {
                            msg = '1 record'; 
                        } else {
                            msg = property_count+' records';
                        } 
                        return msg;
                    }
                    // inter-active field name check boxes
                    $("input[name='field_name[]']:checked").click(function(){
                        var toggle_field = $(this).val();
                        alert('toogle');
                        // short hand for ajax with parameter: url, data, success, datatype
                        
                    });
                    $(".on").toggle(function(){
                        alert('toogle iswitch');    
                    })

                    // inter-active count response
                    $("#city_name").change(function(){
                        var city_name         = $('#city_name').val();
                        var community_name = null;
                        var subcommunity_name = null;
                        $.ajax({
                            url: "<?php echo base_url('propertyfinder/count_record_by_city'); ?>",
                            type: 'POST',
                            dataType: 'json',   // The available data types are text, html, xml, json, jsonp, and script.
                            data:{  
                                    'city' :city_name                                   
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
                                var property_count = '';
                                $.each(response, function (i, item) {                                  
                                    property_count = item;
                                });                                                                  
                                $('#city_count').empty().append(display_msg(property_count));
                            },
                            complete: function(xhr, status){
                                var xhr = JSON.parse(xhr.responseText);
                                //console.log('ajax change status :'+ status + ' with xhr: '+xhr);
                            }
                        });// end inter-active count response
                        /*dropdown post */
                        $.ajax({
                            url:"<?php echo base_url(); ?>propertyfinder/buildDropCities",    
                            data: {city_name: $(this).val()},
                            type: "POST",
                            success: function(data){                            
                                $("#cityDrp").html(data);
                            }                    
                        });
                       // inter-active table
                        $.ajax({
                            url: "<?php echo base_url('propertyfinder/query_propertyfinder'); ?>",
                            type: 'POST',
                            dataType: 'json',   // The available data types are text, html, xml, json, jsonp, and script.
                            data:{  
                                    'city' :city_name
                                   
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
                                    trHTML += '<tr><td class="city">' + item.city + '</td><td class="community">' + item.community + '</td><td class="subcommunity">' + item.subcommunity + '</td><td class="re_property">' + item.re_property + '</td><td class="building_name">' + item.building_name + '</td><td class="unit_number">' + item.unit_number + '</td><td class="developer_name">' + item.developer_name + '</td><td> <div class="btn-group btn-group-xs"><a href="" data-toggle="tooltip" title="Edit" class="btn"><i class="fa fa-edit"></i></a><a href="" data-toggle="tooltip" title="Off" class="btn"><i class="glyphicon glyphicon-remove"></i></a></div></td></tr>';
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
                    });
                    $("#cityDrp").change(function(){ 
                        var city_name         = $('#city_name').val();
                        var community_name    = $(this).val();
                        $.ajax({
                            url: "<?php echo base_url('propertyfinder/count_record_by_community'); ?>",
                            type: 'POST',
                            dataType: 'json',   // The available data types are text, html, xml, json, jsonp, and script.
                            data:{  'city' : city_name,
                                    'community' :community_name                                   
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
                                var property_count = '';
                                $.each(response, function (i, item) {
                                    property_count = item;
                                });
                                                                 
                                $('#community_count').empty().append(display_msg(property_count));
                            },
                            complete: function(xhr, status){
                                var xhr = JSON.parse(xhr.responseText);
                                //console.log('ajax change status :'+ status + ' with xhr: '+xhr);
                            }
                        });// end inter-active count response
                        /*dropdown post */
                        $.ajax({
                            url:"<?php echo base_url(); ?>propertyfinder/buildDropSubCom",    
                            data: {community_name: $(this).val()},
                            type: "POST",
                            success: function(data){                            
                                $("#cityDrp2").html(data);
                            }                        
                        });  
                        // inter-active table
                        $.ajax({
                            url: "<?php echo base_url('propertyfinder/query_propertyfinder'); ?>",
                            type: 'POST',
                            dataType: 'json',   // The available data types are text, html, xml, json, jsonp, and script.
                            data:{  
                                    'city' :city_name,
                                    'community_name': community_name
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
                                    trHTML += '<tr><td class="city">' + item.city + '</td><td class="community">' + item.community + '</td><td class="subcommunity">' + item.subcommunity + '</td><td class="re_property">' + item.re_property + '</td><td class="building_name">' + item.building_name + '</td><td class="unit_number">' + item.unit_number + '</td><td class="developer_name">' + item.developer_name + '</td><td> <div class="btn-group btn-group-xs"><a href="" data-toggle="tooltip" title="Edit" class="btn"><i class="fa fa-edit"></i></a><a href="" data-toggle="tooltip" title="Off" class="btn"><i class="glyphicon glyphicon-remove"></i></a></div></td></tr>';
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
                    }); // end community change 
                   
                    $("#cityDrp2").change(function(){ 
                        //console.log('$(#city_name).val(): '+ $('#city_name').val());
                        //console.log('$(#community).val(): '+$('#cityDrp').val());
                        //console.log('$(#subcommunity).val(): '+$(this).val());
                        var city_name         = $('#city_name').val();
                        var community_name    = $('#cityDrp').val();
                        var subcommunity_name = $(this).val();
                        //console.log('$(#subcommunity).val(): '+subcommunity_name);

                        $.ajax({
                            url: "<?php echo base_url('propertyfinder/count_record_by_subcommunity'); ?>",
                            type: 'POST',
                            dataType: 'json',   // The available data types are text, html, xml, json, jsonp, and script.
                            data:{  'city' : city_name,
                                    'community' :community_name,
                                    'subcommunity': subcommunity_name                                   
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
                                var property_count = '';
                                $.each(response, function (i, item) {
                                    property_count = item;
                                    //console.log('item :'+ item);
                                    //console.log('i :'+ i);
                                });                                                                 
                                $('#subcommunity_count').empty().append(display_msg(property_count));
                            },
                            complete: function(xhr, status){
                                var xhr = JSON.parse(xhr.responseText);
                                //console.log('ajax change status :'+ status + ' with xhr: '+xhr);
                            }
                        });// end inter-active count response
                        // inter-active table
                        $.ajax({
                            url: "<?php echo base_url('propertyfinder/query_propertyfinder'); ?>",
                            type: 'POST',
                            dataType: 'json',   // The available data types are text, html, xml, json, jsonp, and script.
                            data:{  
                                    'city' :city_name,
                                    'community_name': community_name,
                                    'subcommunity_name': subcommunity_name
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
                                    trHTML += '<tr><td class="city">' + item.city + '</td><td class="community">' + item.community + '</td><td class="subcommunity">' + item.subcommunity + '</td><td class="re_property">' + item.re_property + '</td><td class="building_name">' + item.building_name + '</td><td class="unit_number">' + item.unit_number + '</td><td class="developer_name">' + item.developer_name + '</td><td> <div class="btn-group btn-group-xs"><a href="" data-toggle="tooltip" title="Edit" class="btn"><i class="fa fa-edit"></i></a><a href="" data-toggle="tooltip" title="Off" class="btn"><i class="glyphicon glyphicon-remove"></i></a></div></td></tr>';
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
                    });  
                });  // end document.ready                   
                </script>	
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->