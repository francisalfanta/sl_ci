<!-- Created by  : Francis A.
     Date        : November 23, 2014
     Script Lines: All unless noted otherwise
-->
		<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
		var resizefunc = [];

		
	</script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo base_url(); ?>assets/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/libs/jquery-detectmobile/detect.js"></script>
	<script src="<?php echo base_url(); ?>assets/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
	<script src="<?php echo base_url(); ?>assets/libs/ios7-switch/ios7.switch.js"></script>
	<script src="<?php echo base_url(); ?>assets/libs/fastclick/fastclick.js"></script>
	<script src="<?php echo base_url(); ?>assets/libs/jquery-blockui/jquery.blockUI.js"></script>
	<script src="<?php echo base_url(); ?>assets/libs/bootstrap-bootbox/bootbox.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/libs/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="<?php echo base_url(); ?>assets/libs/jquery-sparkline/jquery-sparkline.js"></script>
	<script src="<?php echo base_url(); ?>assets/libs/nifty-modal/js/classie.js"></script>
	<script src="<?php echo base_url(); ?>assets/libs/nifty-modal/js/modalEffects.js"></script>
	<script src="<?php echo base_url(); ?>assets/libs/sortable/sortable.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/libs/bootstrap-fileinput/bootstrap.file-input.js"></script>
	<script src="<?php echo base_url(); ?>assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/libs/bootstrap-select2/select2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script> 
	<!-- already added in header -->
	<!--<script src="<?php echo base_url(); ?>assets/libs/pace/pace.min.js"></script>-->
	<script src="<?php echo base_url(); ?>assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/libs/jquery-icheck/icheck.min.js"></script>

	<!-- Demo Specific JS Libraries -->
	<script src="<?php echo base_url(); ?>assets/libs/prettify/prettify.js"></script>

	<script src="<?php echo base_url(); ?>assets/js/init.js"></script>
	
	<!-- Page Specific JS Libraries  TODO create if statement when page only using wizard-->
	<!-- custom added by FMA -->    
  	<!-- DataTables -->
	<script type="text/javascript" charset="utf8" src="<?php echo base_url();?>assets/libs/DataTables-1.10.4/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf8" src="<?php echo base_url();?>assets/libs/DataTables-1.10.4/media/js/jquery.dataTables.min.js"></script>	
    <script type="text/javascript" src="<?php echo base_url('/assets/js/dataTables.fixedHeader.js'); ?>"></script>

 	<!-- Page Specific JS Libraries Tables Pages-->
    
    <!-- FMA custom added 12-10-2014 -->
    <script src="<?php echo base_url(); ?>assets/js/slcs_modal_box.js"></script>
    <!-- FMA custom added 12/16-2014 -->
    <?php if($title='SoftLine | E-Mailer'){ ?>
    <script src="<?php echo base_url();?>assets/libs/jquery-datatables/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>assets/libs/jquery-datatables/js/dataTables.bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/pages/datatables.js"></script>	
	<?php } ?>
	<script src="<?php echo base_url();?>assets/libs/sweetalert-master/lib/sweet-alert.min.js"></script>
	</body>
	<?php if($title='SoftLine | E-Mailer'){ ?>
	<script type="text/javascript"> 
        $(document).ready(function() {            	 
        	var selectall = $('#selectAll').find('.iCheck-helper');        				
			
			selectall.click(function(e){                
                var table= $(e.target).closest('table');                
                var x = $('td input:checkbox',table).prop('checked',this.checked);
				
				alert('inside ')
			    var checked = $(this).is(':checked');
			    var el = $('table input[type=checkbox]');
			    
			    if(checked) {
			        el.attr('checked', 'checked');
			    } else {
			        el.removeAttr('checked');
			    } 
    		});        
		});
    </script>
    <?php } ?>
</html>