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
                    <div class="col-md-8 col-lg-6 portlets">
                        
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
                                            <label for="city" class="col-xs-2 col-sm-2 col-md-3 col-lg-3 control-label">City</label>
                                            <div class="col-xs-9 col-sm-4 col-md-6 col-lg-5">       
                                                <select name="city_name" id="city_name" tabindex="1" class="form-control col-sm-11 col-md-12">
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
                                        </div><!-- form-group -->                                                                           
                                        
                                        <div class="form-group">
                                            <label for="community_name" class="col-xs-2 col-sm-2 col-md-3 col-lg-3 control-label">Community</label>
                                            <div class="col-xs-9 col-sm-4 col-md-6 col-lg-5"> <!--select-editable">-->
                                                 <!--city dropdown-->
                                                <select name="community_name" id="cityDrp" class="form-control col-sm-11 col-md-12" tabindex="2">
                                                    <option value="">Please select first City</option>
                                                </select>
                                            </div><!-- col-sm-10 -->                                            
                                        </div><!-- form-group -->
                                        <div class="form-group">
                                            <label for="subcommunity_name" class="col-xs-2 col-sm-2 col-md-3 col-lg-3 control-label">Sub Community</label>
                                            <div class="col-xs-9 col-sm-4 col-md-6 col-lg-5"> <!--select-editable">-->                              
                                                <select name="subcommunity_name" id="cityDrp2" class="form-control col-sm-11 col-md-12" tabindex="3">
                                                    <option value="">Please select first Community</option>
                                                </select>
                                            </div><!-- col-sm-10 -->                                           
                                        </div><!-- form-group -->
                                         <div class="form-group">
                                            <label for="re_property" class="col-xs-2 col-sm-2 col-md-3 col-lg-3 control-label">Property</label>
                                            <div class="col-xs-9 col-sm-4 col-md-6 col-lg-5"><!--select-editable">-->     
                                                <input type="text" name="re_property_name"  class="form-control col-md-12" value="" tabindex="4" />                                                
                                            </div><!-- col-sm-10 -->
                                        </div><!-- form-group -->

                                      <div class="form-group">                                      
                                        <div class="col-sm-offset-2 col-sm-10 text-right">
                                          <button type="submit" class="btn btn-default" tabindex="5" >Save</button>
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
                                    <a href="#"><i class="icon-user-add"></i></a>                                    
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content">                    
                                <div class="table-responsive">
                                    <table id="owner_table" data-sortable class="table table-striped table-bordered display compact" data-sortable>
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
                                        <tfoot>
                                            <tr>
                                                <th>No</th>                                               
                                                <th>City</th>
                                                <th>Community</th>
                                                <th>Sub-Community</th>
                                                <th>Property</th>                                               
                                                <th data-sortable="false">Option</th>
                                            </tr>
                                        </tfoot>
                                        
                                        <tbody>

                                            <?php 
                                                $i = 1; // counter
                                                foreach($properties as $property) { ?>

                                            <tr>
                                                <td style="text-align: center;width:40px;"><?php echo $i; ?></td>                                                
                                                <td><?php echo $property['city'];?></td>
                                                <td><?php echo $property['community'];?></td>
                                                <td><?php echo $property['subcommunity']; ?></td>
                                                <td ><?php echo $property['re_property']; ?></td>                                                
                                                <td style="text-align: center;width:80px;">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="<?php echo base_url('propertyfinder/view_propertyfinder/'.$property['tb_propertyfinder_id']); ?>"data-toggle="tooltip" title="Edit" ><i class="fa fa-edit"></i></a>
                                                        <a href="<?php echo base_url('propertyfinder/del/'.$property['tb_propertyfinder_id']); ?>" data-toggle="tooltip" title="Off" ><i class="glyphicon glyphicon-remove"></i></a>
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
                
                </form>	
    			<!-- Footer Start -->
                <footer >
                  Soft Line Cleaning Services &copy; 2014
                    <span class="footer-links">
                    <a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact Us</a>
                  </span>
                </footer>              
                <!-- Footer End -->	
                <script type="text/javascript">                    
                $(document).ready(function() { 

                    var table = $('#owner_table').DataTable({                    
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
                        "autoWidth"   : false,
                        "deferRender" : true,
                        //"stateSave"   : true,
                        //"columnDefs": [
                        //{
                              // The `data` parameter refers to the data for the cell (defined by the
                              // `data` option, which defaults to the column being worked with, in
                              // this case `data: 0`.
                        //      "render": function ( data, type, row ) {
                        //          return data +''+ row[11]+' '+row[12]+' '+row[13]+' '+row[14];
                        //      },
                        //      "targets": 10
                        //  },
                        //  { "visible": false,  
                        //    "targets": [ 11,12,13,14 ] 
                        //  }
                        //],
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
                        //  { "width": "100%", "targets": 1 }
                        //]
                    });   

                    $("#city_name").change(function(){                           
                            /*dropdown post */
                            $.ajax({
                            url:"<?php echo base_url(); ?>propertyfinder/buildDropCities",    
                            data: {city_name: $(this).val()},
                            type: "POST",
                            success: function(data){                            
                                $("#cityDrp").html(data);
                            }                    
                        });

                    });
                    $("#cityDrp").change(function(){                      
                            /*dropdown post */
                            $.ajax({
                            url:"<?php echo base_url(); ?>propertyfinder/buildDropSubCom",    
                            data: {community_name: $(this).val()},
                            type: "POST",
                            success: function(data){                            
                                $("#cityDrp2").html(data);
                            }
                        
                        });
                    });               
                });                     
                </script>
                <!-- Page Specific JS Libraries Tables Pages-->
                <script src="<?php echo base_url('assets/libs/jquery-datatables/js/jquery.dataTables.min.js'); ?>"></script>
                <script src="<?php echo base_url('assets/libs/jquery-datatables/js/dataTables.bootstrap.js'); ?>"></script>
                <script src="<?php echo base_url('assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js'); ?>"></script>
                <script src="<?php echo base_url().'assets/js/pages/datatables.js'; ?>"></script>	
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->