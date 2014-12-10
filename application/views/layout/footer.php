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
	<script src="<?php echo base_url(); ?>assets/libs/pace/pace.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/libs/jquery-icheck/icheck.min.js"></script>

	<!-- Demo Specific JS Libraries -->
	<script src="<?php echo base_url(); ?>assets/libs/prettify/prettify.js"></script>

	<script src="<?php echo base_url(); ?>assets/js/init.js"></script>
	
	<!-- Page Specific JS Libraries  TODO create if statement when page only using wizard-->
	<!-- DataTables CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/libs/DataTables-1.10.4/media/css/jquery.dataTables.css">
 
  	<!-- DataTables -->
	<script type="text/javascript" charset="utf8" src="<?php echo base_url();?>assets/libs/DataTables-1.10.4/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf8" src="<?php echo base_url();?>assets/libs/DataTables-1.10.4/media/js/jquery.dataTables.min.js"></script>

 	<!-- Page Specific JS Libraries Tables Pages-->
    
    <!-- FMA custom added 12-10-2014 -->
    <script src="<?php echo base_url(); ?>assets/js/slcs_modal_box.js"></script>
  
	<script type="text/javascript"> 
           
        /** ------------------------------------
        /**  Live URL Title Function
        /**     Code from ExpressionEngine v 1.6.3
        /**     Slightly modified to accept the parameter fieldcount
        /** -------------------------------------*/
       
        function liveUrlTitle(fieldcount)
        {
        	var defaultTitle = '';
			var NewText = document.getElementById("view_field_label" + fieldcount).value;
			
			if (defaultTitle != '')
			{
				if (NewText.substr(0, defaultTitle.length) == defaultTitle)
				{
					NewText = NewText.substr(defaultTitle.length)
				}	
			}
			
			NewText = NewText.toLowerCase();
			var separator = "_";
			
			if (separator != "_")
			{
				NewText = NewText.replace(/\_/g, separator);
			}
			else
			{
				NewText = NewText.replace(/\-/g, separator);
			}
	
			// Foreign Character Attempt
			
			var NewTextTemp = '';
			for(var pos=0; pos<NewText.length; pos++)
			{
				var c = NewText.charCodeAt(pos);
				
				if (c >= 32 && c < 128)
				{
					NewTextTemp += NewText.charAt(pos);
				}
				else
				{
					if (c == '223') {NewTextTemp += 'ss'; continue;}
				if (c == '224') {NewTextTemp += 'a'; continue;}
				if (c == '225') {NewTextTemp += 'a'; continue;}
				if (c == '226') {NewTextTemp += 'a'; continue;}
				if (c == '229') {NewTextTemp += 'a'; continue;}
				if (c == '227') {NewTextTemp += 'ae'; continue;}
				if (c == '230') {NewTextTemp += 'ae'; continue;}
				if (c == '228') {NewTextTemp += 'ae'; continue;}
				if (c == '231') {NewTextTemp += 'c'; continue;}
				if (c == '232') {NewTextTemp += 'e'; continue;}
				if (c == '233') {NewTextTemp += 'e'; continue;}
				if (c == '234') {NewTextTemp += 'e'; continue;}
				if (c == '235') {NewTextTemp += 'e'; continue;}
				if (c == '236') {NewTextTemp += 'i'; continue;}
				if (c == '237') {NewTextTemp += 'i'; continue;}
				if (c == '238') {NewTextTemp += 'i'; continue;}
				if (c == '239') {NewTextTemp += 'i'; continue;}
				if (c == '241') {NewTextTemp += 'n'; continue;}
				if (c == '242') {NewTextTemp += 'o'; continue;}
				if (c == '243') {NewTextTemp += 'o'; continue;}
				if (c == '244') {NewTextTemp += 'o'; continue;}
				if (c == '245') {NewTextTemp += 'o'; continue;}
				if (c == '246') {NewTextTemp += 'oe'; continue;}
				if (c == '249') {NewTextTemp += 'u'; continue;}
				if (c == '250') {NewTextTemp += 'u'; continue;}
				if (c == '251') {NewTextTemp += 'u'; continue;}
				if (c == '252') {NewTextTemp += 'ue'; continue;}
				if (c == '255') {NewTextTemp += 'y'; continue;}
				if (c == '257') {NewTextTemp += 'aa'; continue;}
				if (c == '269') {NewTextTemp += 'ch'; continue;}
				if (c == '275') {NewTextTemp += 'ee'; continue;}
				if (c == '291') {NewTextTemp += 'gj'; continue;}
				if (c == '299') {NewTextTemp += 'ii'; continue;}
				if (c == '311') {NewTextTemp += 'kj'; continue;}
				if (c == '316') {NewTextTemp += 'lj'; continue;}
				if (c == '326') {NewTextTemp += 'nj'; continue;}
				if (c == '353') {NewTextTemp += 'sh'; continue;}
				if (c == '363') {NewTextTemp += 'uu'; continue;}
				if (c == '382') {NewTextTemp += 'zh'; continue;}
				if (c == '256') {NewTextTemp += 'aa'; continue;}
				if (c == '268') {NewTextTemp += 'ch'; continue;}
				if (c == '274') {NewTextTemp += 'ee'; continue;}
				if (c == '290') {NewTextTemp += 'gj'; continue;}
				if (c == '298') {NewTextTemp += 'ii'; continue;}
				if (c == '310') {NewTextTemp += 'kj'; continue;}
				if (c == '315') {NewTextTemp += 'lj'; continue;}
				if (c == '325') {NewTextTemp += 'nj'; continue;}
				if (c == '352') {NewTextTemp += 'sh'; continue;}
				if (c == '362') {NewTextTemp += 'uu'; continue;}
				if (c == '381') {NewTextTemp += 'zh'; continue;}
				
				}
			}
    
			NewText = NewTextTemp;
			
			NewText = NewText.replace('/<(.*?)>/g', '');
			NewText = NewText.replace('/\&#\d+\;/g', '');
			NewText = NewText.replace('/\&\#\d+?\;/g', '');
			NewText = NewText.replace('/\&\S+?\;/g','');
			NewText = NewText.replace(/['\"\?\.\!*$\#@%;:,=\(\)\[\]]/g,'');
			NewText = NewText.replace(/\s+/g, separator);
			NewText = NewText.replace(/\//g, separator);
			NewText = NewText.replace(/[^a-z0-9-_]/g,'');
			NewText = NewText.replace(/\+/g, separator);
			NewText = NewText.replace(/[-_]+/g, separator);
			NewText = NewText.replace(/\&/g,'');
			NewText = NewText.replace(/-$/g,'');
			NewText = NewText.replace(/_$/g,'');
			NewText = NewText.replace(/^_/g,'');
			NewText = NewText.replace(/^-/g,'');
			
			
				document.getElementById("view_field_name" + fieldcount).value = "" + NewText;			
				
		}
	</script>
	
	</body>
</html>