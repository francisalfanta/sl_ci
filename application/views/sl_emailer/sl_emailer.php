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
                                <div class="col-sm-10">
                                    <!-- Start to E-mail table -->
                                    <table id="to_emailer" data-sortable class="table table-striped table-bordered display compact" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th id="selectAll" style="width: 8px !important; height: 10px !important; text-align:center !important;"><small><input  type="checkbox" class="input-sm"></small></th>
                                                <th class="fullname" style="width:40px !important;"><small>Full Name / Email</small></th>
                                                <!--<th class="email"><small>Email</small></th>-->
                                                <th class="status"  style="text-align:center; width:18px;"></th>                                                   
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
                                                <td style="width: 8px !important; height: 10px !important; text-align:center !important"><small><input  type="checkbox" class="rows-check"></small></td>
                                                <td class="fullname" style="width:40px !important;" data-sortable="true"><small>{first_name} - {email}</small></td>
                                                <!--<td class="email"><small>Email</small></td>-->
                                                <td class="status" style="text-align:center; width:18px;"><small><img src="<?php echo base_url();?>assets/img/active.png" alt="active email" height="16" width="16"> </span></small></td>     
                                            </tr>
                                            {/email_lists}
                                        </tbody>
                                    </table>
                                  <!-- End to E-mail table-->
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
                $("#to_emailer").dataTable({
                    // remove length and show at bottom
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
            });
            </script>
        </div><!-- content-page -->
		<!-- End right content -->