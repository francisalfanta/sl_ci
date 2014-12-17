        <!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            	<!-- Page Heading Start -->
				<div class="page-heading">
            		<h1><i class='fa fa-file'></i> Form E-mailer</h1>
            		<!--<h3>Sales Page</h3>-->
                </div>
            	<!-- Page Heading End-->
                <form class="form-horizontal" role="form" >				
                    <div class="row">
    					<div class="col-md-8 portlets">
                            
                            <div class="form-group">
                                <label for="from" class="col-sm-2 control-label text-left">From</label>
                                <div class="col-sm-10">
                                  <!--<input type="text" class="form-control" id="input-text-from" name="from" value="<?php echo $this->session->userdata('session_id'); ?>" placeholder="Sender Email" tabindex="1" disabled>-->
                                  <input type="text" class="form-control" id="input-text-from" name="from" value="" placeholder="Sender Email" tabindex="1" >
                                </div>
                            </div><!-- form-group -->   

                            <div class="form-group">
                                <label for="subject" class="col-sm-2 control-label text-left">Subject</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="input-text-from" name="subject" value="<?php echo set_value('subject'); ?>" placeholder="Subject" tabindex="2">
                                </div>
                            </div><!-- form-group -->

                            <!-- texteditor -->
                            <div class="form-group" tabindex="4">
                            {msg_editor}
                            </div><!-- form-group -->
                            <!-- end texteditor -->

                            <div class="row"> 
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Message Template</label>
                                        <div class="col-sm-9">
                                            <select class="form-control">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div><!-- col-md-6 porlets -->
                                    <div class="col-md-2 pull-left">
                                    <div class="form-group">                                                                        
                                        <a href="#" type="submit" id="send_email" class="btn btn-default" tabindex="5" style="width:145px;">Send</a>                                                                                                       
                                    </div><!-- form-group -->
                                    </div><!-- col-md-2 portlets -->

                             
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Message Option</label>
                                        <div class="col-sm-9">
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox" id="bcc_batch_mode" name="bcc_batch_mode">
                                                Enable Blind Carbon Copy (BCC)
                                              </label>
                                            </div>
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox" value="">
                                                Option one is this and that&mdash;be sure to include why it's great
                                              </label>
                                            </div>
                                            <div class="checkbox">
                                              <label>
                                                <input type="checkbox" value="">
                                                Option one is this and that&mdash;be sure to include why it's great
                                              </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- row -->

    					</div><!-- portlets -->

                        <div class="col-md-4 portlets">
                            <div class="form-group">
                                <label for="receiver" class="col-sm-2 control-label text-left" >To</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="input-text-to" name="receiver" value="<?php echo set_value('receiver'); ?>" placeholder="E-mail Reciever" tabindex="3" >
                                </div>
                            </div><!-- form-group -->
                            <div class="form-group">                                
                                <div style="padding:10px;">                                    
                                    <!-- Start to E-mail table -->
                                    <table id="to_emailer" data-sortable class="table table-striped table-bordered display compact" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th  id="selectAll" style="padding: 0 !important;"><small><input  type="checkbox" class="input-sm"></small></th>
                                                <th class="fullname" style="width:40px !important;"><small>Full Name / Email</small></th>
                                                <!--<th class="email"><small>Email</small></th>-->
                                                <th class="status"  style="text-align:center; width:5px;"></th>                                                   
                                            </tr>
                                        </thead>
                                        <!--<tfoot>
                                            <tr>                                                                                           
                                                <th style="width: 10px !important; height: 10px !important;" data-sortable="false"><small><input  type="checkbox" class="rows-check"></small></th>
                                                <th class="fullname" style="width:40px !important;"><small>Full Name / Email</small></th>
                                                <th class="email"><small>Email</small></th>
                                                <th class="status"><small>Status</small></th>     
                                            </tr>
                                        </tfoot>-->
                                        
                                        <tbody>
                                           {email_lists}
                                            <tr>   
                                                <td class="select_record"><small><input  type="checkbox" class="rows-check"></small></td>
                                                <td class="fullname" style="width:40px !important;" data-sortable="true" title="{first_name}"><small>{email}</small></td>
                                                <!--<td class="email"><small>Email</small></td>-->
                                                <td class="status" style="text-align:center; width:5px;"><small><img src="<?php echo base_url();?>assets/img/active.png" alt="active email" height="16" width="16"> </span></small></td>     
                                            </tr>
                                            {/email_lists}
                                        </tbody>
                                    </table>
                                    <!-- End to E-mail table-->
                                    <!-- Search Table -->
                                    <table cellpadding="3" cellspacing="0" border="0" style="width: 80%; margin: 0 auto 2em auto;">
                                        <thead>
                                            <tr>
                                                <th>Search by</th>
                                                <th>Search text</th>
                                                <!--<th>Treat as regex</th>
                                                <th>Use smart search</th>-->
                                            </tr>
                                        </thead>
                                 
                                        <tbody>  
                                            <tr id="filter_col1" data-column="0">
                                                <td>Name</td>
                                                <td align="center"><input type="text" class="column_filter" id="col0_filter"></td>
                                                <!--td align="center"><input type="checkbox" class="column_filter" id="col0_regex"></td>
                                                <td align="center"><input type="checkbox" class="column_filter" id="col0_smart" checked="checked"></td>-->
                                            </tr>
                                            <tr id="filter_col2" data-column="1">
                                                <td>City</td>
                                                <td align="center"><input type="text" class="column_filter" id="col1_filter"></td>
                                                <!--<td align="center"><input type="checkbox" class="column_filter" id="col1_regex"></td>
                                                <td align="center"><input type="checkbox" class="column_filter" id="col1_smart" checked="checked"></td>-->
                                            </tr>
                                            <tr id="filter_col3" data-column="2">
                                                <td>Community</td>
                                                <td align="center"><input type="text" class="column_filter" id="col2_filter"></td>
                                                <!--<td align="center"><input type="checkbox" class="column_filter" id="col2_regex"></td>
                                                <td align="center"><input type="checkbox" class="column_filter" id="col2_smart" checked="checked"></td>-->
                                            </tr>
                                            <tr id="filter_col4" data-column="3">
                                                <td>Subcommunity</td>
                                                <td align="center"><input type="text" class="column_filter" id="col3_filter"></td>
                                                <!--<td align="center"><input type="checkbox" class="column_filter" id="col3_regex"></td>
                                                <td align="center"><input type="checkbox" class="column_filter" id="col3_smart" checked="checked"></td>-->
                                            </tr>
                                            <tr id="filter_col5" data-column="4">
                                                <td>Property Type</td>
                                                <td align="center"><input type="text" class="column_filter" id="col4_filter"></td>
                                                <!--<td align="center"><input type="checkbox" class="column_filter" id="col4_regex"></td>
                                                <td align="center"><input type="checkbox" class="column_filter" id="col4_smart" checked="checked"></td>-->
                                            </tr>
                                            <tr id="filter_col6" data-column="5">
                                                <td>Nationality</td>
                                                <td align="center"><input type="text" class="column_filter" id="col5_filter"></td>
                                                <!--<td align="center"><input type="checkbox" class="column_filter" id="col5_regex"></td>
                                                <td align="center"><input type="checkbox" class="column_filter" id="col5_smart" checked="checked"></td>-->
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- End Search Table -->
                                </div>
                            </div><!-- form-group -->
                        </div><!-- portlets -->

    				</div><!-- row -->
                </form>
                <!-- Footer Start -->
                {slfooter}
                <!-- Footer End -->		
            </div><!-- content -->
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->
            <script type="text/javascript"> 
            $(document).ready(function() {                
                var table = $("#to_emailer").dataTable({
                    // remove length and show at bottom
                    "order": [[1, 'desc']],
                    "columnDefs": [
                        { "orderable": false, "targets": 0 },   
                        //{ "bSortable": false, "aTargets": [ 0 ] },
                        { "sWidth": "1%", "aTargets": [ 0 ] },
                        { "sWidth": "1%", "aTargets": [ 2 ] }                       
                    ],
                    "autoWidth": false,
                    //"autoWidth": false,
                    //"scrollX"     : 400,
                    //"scrollY"     : 325,
                    //"scrollCollapse": true,
                    "jQueryUI":       true,              
                    "sDom": '<"top">rt<"bottom"fp><"clear">'                    
                });                  

                $("#send_email").click(function(){ 
                    $.ajax({
                        url: '<?php echo base_url();?>sl_emailer/slsend_mail',
                        type: 'POST',
                        error:  function(xhr, status, error) {
                                var err = JSON.parse(xhr.responseText);
                                swal({ title: "Mail not sent",   
                                        text: "Error sending mail",   
                                        type: "error"   
                                        //timer: 2000,                                        
                                        //confirmButtonText: "Cool" 
                                    });                              
                        },
                        success: function(response){
                            console.log('item :'+ response);
                            swal("Mail sent", "Successfuly send mail", "success" );             
                        }
                    });                   
                });
                function filterGlobal () {
                    $('#example').DataTable().search(
                        $('#global_filter').val(),
                        $('#global_regex').prop('checked'),
                        $('#global_smart').prop('checked')
                    ).draw();
                }
                // testing js               
                function filterColumn ( i ) {
                    $('#to_emailer').DataTable().column( i ).search(
                        $('#col'+i+'_filter').val()
                        //$('#col'+i+'_regex').prop('checked'),
                        //$('#col'+i+'_smart').prop('checked')
                    ).draw();
                }
                 
                $(document).ready(function() {
                    $('#to_emailer').dataTable();                 
                    //$('input.global_filter').on( 'keyup click', function () {
                    //    filterGlobal();
                    //});                 
                    $('input.column_filter').on( 'keyup click', function () {
                        filterColumn( $(this).parents('tr').attr('data-column') );
                    } );
                });
                // end testing js
            });
            </script>
        </div><!-- content-page -->
		<!-- End right content -->