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
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Letter Template</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="msg_template" tabindex="6">  
                                    <?php foreach($templates_name_lists as $row){                                           
                                      echo '<option value="'.$row["tb_letter_templates_id"].'">'.str_replace('_',' ', ucfirst($row['name'])).'</option>';
                                    } ?>
                                      
                                    </select>                                    
                                </div><!-- form-group -->                            
                                <div class="col-sm-2" style="padding:0;">                                                                        
                                    <a href="#" type="submit" id="send_email" class="btn btn-default" tabindex="5" style="width:130px;">Send Email</a>                                                                                                                                       
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
                                        <label for="save_msg" class="col-sm-3 control-label text-left">Save Current Letter:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="input-text-from" name="save_msg" value="<?php echo set_value('save_msg'); ?>" placeholder="Save current letter (above) to 'My Letters Template' by giving it a name (optional)." tabindex="7">
                                        </div>
                                    </div><!-- form-group -->
                                </div><!-- col-md-10 -->
                                <div class="col-md-2 pull-left">
                                <div class="form-group">                                                                        
                                    <a href="#" type="submit" id="save_template" class="btn btn-default" tabindex="5" style="width:130px;">Save Template</a>                                                                                                       
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
                                <div class="col-sm-9">
                                  <input type="text" class="form-control to-radio" id="input-text-to" name="input-text-to" value="<?php echo set_value('receiver'); ?>" placeholder="E-mail Reciever" tabindex="3" >
                                </div>
                                <span class="radio_to"><input type="radio" name="optionsRadios"  value="input-text-to" class="col-sm-1"></span>
                            </div><!-- form-group -->
                            <div class="form-group">
                                <label for="carbon_copy" class="col-sm-2 control-label text-left" >Cc</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control to-radio" id="input-text-cc" name="input-text-cc" value="<?php echo set_value('carbon_copy'); ?>" placeholder="Carbon Copy" tabindex="4" >
                                </div>
                                <span class="radio_to"><input type="radio" name="optionsRadios"  value="input-text-cc" class="col-sm-1"></span>
                            </div><!-- form-group -->
                             <div class="form-group">
                                <label for="blind_carbon_copy" class="col-sm-2 control-label text-left" >Bcc</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control to-radio" id="input-text-bcc" name="input-text-bcc" value="<?php echo set_value('blind_carbon_copy'); ?>" placeholder="Blind Carbon Copy" tabindex="5" >
                                </div>
                                <span class="radio_to"><input type="radio" name="optionsRadios"  value="input-text-bcc" class="col-sm-1"></span>
                            </div><!-- form-group -->
                            <div class="form-group">  

                                <div id="table_container"> 
                                    <!-- Start to E-mail table -->
                                    <table id="to_emailer" data-sortable class="table table-striped table-bordered display compact" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th  id="selectAll" style="padding: 0 !important;"><small><input  type="checkbox" class="input-sm"></small></th>
                                                <th class="email" style="width:40px !important;"><small>Email</small></th>
                                                <!--<th class="country"><small>xCountry</small></th>-->
                                                <th class="status"  style="text-align:center; width:5px;"></th>                                                   
                                            </tr>
                                        </thead>
                                        <!--<tfoot>
                                            <tr>                                                                                           
                                                <th style="width: 10px !important; height: 10px !important;" data-sortable="false"><small><input  type="checkbox" class="rows-check"></small></th>
                                                <th class="fullname" style="width:40px !important;"><small>Email</small></th>
                                                <th class="country" style="width:40px !important;"><small>Country</small></th>
                                                <th class="status"><small>Status</small></th>     
                                            </tr>
                                        </tfoot>-->
                                        
                                        <tbody> 
                                            {email_lists}
                                            <tr>   
                                                <td class="select_record"><small><input  type="checkbox" class="rows-check"></small></td>
                                                <td class="email" style="width:40px !important;" data-sortable="true" title="{first_name}"><small>{email}</small></td>
                                                <!--<td class="country"><small>{addressCountry}</small></td>-->
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
                                                <td class="column-search" align="left"><input type="text" class="column_filter" id="col0_filter"></td>
                                                <!--td align="center"><input type="checkbox" class="column_filter" id="col0_regex"></td>
                                                <td align="center"><input type="checkbox" class="column_filter" id="col0_smart" checked="checked"></td>-->
                                            </tr>
                                            <tr id="filter_col2" data-column="1">
                                                <td>City</td>
                                                <td class="column-search-city" align="left"><input type="text" class="column_filter" id="col1_filter"></td>
                                                <!--<td align="center"><input type="checkbox" class="column_filter" id="col1_regex"></td>
                                                <td align="center"><input type="checkbox" class="column_filter" id="col1_smart" checked="checked"></td>-->
                                            </tr>
                                            <tr id="filter_col3" data-column="2">
                                                <td>Community</td>
                                                <td class="column-search" align="left"><input type="text" class="column_filter" id="col2_filter"></td>
                                                <!--<td align="center"><input type="checkbox" class="column_filter" id="col2_regex"></td>
                                                <td align="center"><input type="checkbox" class="column_filter" id="col2_smart" checked="checked"></td>-->
                                            </tr>
                                            <tr id="filter_col4" data-column="3">
                                                <td>Subcommunity</td>
                                                <td class="column-search" align="left"><input type="text" class="column_filter" id="col3_filter"></td>
                                                <!--<td align="center"><input type="checkbox" class="column_filter" id="col3_regex"></td>
                                                <td align="center"><input type="checkbox" class="column_filter" id="col3_smart" checked="checked"></td>-->
                                            </tr>
                                            <tr id="filter_col5" data-column="4">
                                                <td>Property Type</td>
                                                <td class="column-search" align="left"><input type="text" class="column_filter" id="col4_filter"></td>
                                                <!--<td align="center"><input type="checkbox" class="column_filter" id="col4_regex"></td>
                                                <td align="center"><input type="checkbox" class="column_filter" id="col4_smart" checked="checked"></td>-->
                                            </tr>
                                            <tr id="filter_col6" data-column="5">
                                                <td>Nationality</td>
                                                <td class="column-search" align="left"><input type="text" class="column_filter" id="col5_filter"></td>
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
            
            <script src="<?php echo base_url();?>assets/libs/ckeditor/ckeditor.js"></script>
            <script src="<?php echo base_url();?>assets/libs/ckeditor/adapters/jquery.js"></script>
            <script type="text/javascript"> 
            $(document).ready(function() { 
                $( 'textarea#message-id' ).ckeditor();
                var table = $("#to_emailer").DataTable({
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
                    "sDom": '<"top">rt<"bottom"fp><"clear">',                   
                                   
                });      
        
                //table.column( 1 ).visible( false );
                //table.columns.adjust().draw( false ); // adjust column sizing and redraw
                    /*
                $('td.column-search-city input').on( 'keyup change', function () {                    
                    //table.column(1).search(this.value).draw();
                    var city = this.value;
                    var country = this.value;                    
                    table.destroy();
                    $("#to_emailer").dataTable({
                        "ajax": {
                        "url": "<?php echo base_url('sl_emailer/filtered_email_lists'); ?>",
                        "data": {
                            "city": city,
                            "country": country
                                }
                        },
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
                        "sDom": '<"top">rt<"bottom"fp><"clear">',      
                        });
                });
                */

                //table.ajax.url( "<?php echo base_url('sl_emailer/filtered_email_lists'); ?>" ).load();
                
                           
                //var idx = table.columns( 1 ).indexes();
                //alert(idx);
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

                // 12/20/2014 js testing
                $('#msg_template').change(function(){
                    //alert('changing msg: '+$(this).val());                    
                    var selected_id = $(this).val();                            
                    // post letter according to selected template
                    $.ajax({
                      type: "GET",
                      url: "<?php echo base_url('sl_emailer/template_lists'); ?>",
                      dataType: "text",
                      data: {"selected": selected_id},
                      success: function(msg){
                        //alert(msg);
                        var editor = $('#message-id').ckeditorGet();
                        var element = CKEDITOR.dom.element.createFromHtml( '<p>I am a new paragraph</p>' );
                        editor.insertElement( element );            
                      } 
                    });     
                });

                // clicking save will send  data to database 
                $('#save_template').click(function() {
                    //saves the content of the  editor 
                    var data = CKEDITOR.instances.Textarea.getData();
                    alert(data);    
                    return false;   
                }); //end click
                // end testing js
            });
            </script>
        </div><!-- content-page -->
		<!-- End right content -->