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
                <div class="row">
					<div class="col-md-8 portlets">
                        <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="from" class="col-sm-2 control-label text-left">From</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="input-text-from" name="from" value="<?php echo $this->session->userdata('session_id'); ?>" placeholder="Sender Email" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="receiver" class="col-sm-2 control-label text-left">To</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="input-text-to" name="receiver" value="<?php echo set_value('receiver'); ?>" placeholder="E-mail Reciever" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject" class="col-sm-2 control-label text-left">Subject</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="input-text-from" name="subject" value="<?php echo set_value('subject'); ?>" placeholder="Subject" >
                            </div>
                        </div>
                        <!-- texteditor -->
                        {msg_editor}
                        <!-- end texteditor -->
                        </form>
					</div>
				</div>

                <!-- Footer Start -->
                {slfooter}
                <!-- Footer End -->		
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->