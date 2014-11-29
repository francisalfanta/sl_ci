  <!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            	<!-- Page Heading Start -->
                <div class="page-heading col-sm-10 col-md-12 col-lg-12"> 
                <form class="form-horizontal" action="<?php echo base_url('propertyfinder/extract_data'); ?>" method="post" accept-charset="utf-8" role="form">
  
                    <div class="widget-content padding">                         
                        <div class="form-group">                                    
                            <div class="col-sm-10 col-md-12 col-lg-12">  
                                <label><input type="text" id="url" name="url" placeholder="URL from PropertyFinder" class="control-form col-md-12 col-lg-12"></label>
                            </div>    
                        </div>                           
                        <div id="output">
                        	<?php echo $sql; ?>
                    </div>
                            <!-- end check box -->            
                	<div class="form-group">
	                    <div class="col-sm-10 col-md-12 text-right">
	                        <button type="submit" name="submitForm" value="formUpdate" class="btn btn-default">Extract Data</button>
	                    </div><!-- col-sm-offset-2 col-sm-10 -->
                	</div><!-- form-group -->  
                </form>