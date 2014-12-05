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
                                    <table id="datatables-2" data-sortable class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>                                               
                                                <th>City</th>
                                                <th>Community</th>
                                                <th>Sub-Community</th>
                                                <th>Property</th>                                               
                                                <th data-sortable="false">Option</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody class="hidden">

                                            <?php 
                                                $i = 1; // counter
                                                foreach($properties as $property) { ?>

                                            <tr>
                                                <td><?php echo $i; ?></td>                                                
                                                <td><?php echo $property['city'];?></td>
                                                <td><?php echo $property['community'];?></td>
                                                <td><?php echo $property['subcommunity']; ?></td>
                                                <td><?php echo $property['re_property']; ?></td>                                                
                                                <td>
                                                    <div class="btn-group btn-group-xs">                        
                                                        <a href="<?php echo base_url('propertyfinder/view_propertyfinder/'.$property['tb_propertyfinder_id']); ?>"data-toggle="tooltip" title="Edit" class="btn"><i class="fa fa-edit"></i></a>
                                                        <a href="<?php echo base_url('propertyfinder/del/'.$property['tb_propertyfinder_id']); ?>" data-toggle="tooltip" title="Off" class="btn"><i class="glyphicon glyphicon-remove"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php ++$i;} ?>
                                            
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
                                    trHTML += '<tr><td>' + item.tb_propertyfinder_id + '</td><td>' + item.city + '</td><td>' + item.community + '</td><td>' + item.subcommunity + '</td><td>' + item.re_property + '</td><td> <div class="btn-group btn-group-xs"><a href="" data-toggle="tooltip" title="Edit" class="btn"><i class="fa fa-edit"></i></a><a href="" data-toggle="tooltip" title="Off" class="btn"><i class="glyphicon glyphicon-remove"></i></a></div></td></tr>';
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
                                    trHTML += '<tr><td>' + item.tb_propertyfinder_id + '</td><td>' + item.city + '</td><td>' + item.community + '</td><td>' + item.subcommunity + '</td><td>' + item.re_property + '</td><td> <div class="btn-group btn-group-xs"><a href="" data-toggle="tooltip" title="Edit" class="btn"><i class="fa fa-edit"></i></a><a href="" data-toggle="tooltip" title="Off" class="btn"><i class="glyphicon glyphicon-remove"></i></a></div></td></tr>';
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
                                    trHTML += '<tr><td>' + item.tb_propertyfinder_id + '</td><td>' + item.city + '</td><td>' + item.community + '</td><td>' + item.subcommunity + '</td><td>' + item.re_property + '</td><td> <div class="btn-group btn-group-xs"><a href="" data-toggle="tooltip" title="Edit" class="btn"><i class="fa fa-edit"></i></a><a href="" data-toggle="tooltip" title="Off" class="btn"><i class="glyphicon glyphicon-remove"></i></a></div></td></tr>';
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