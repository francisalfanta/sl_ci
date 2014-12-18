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
		// initialize checkbox
		
        
        $(document).ready(function() {
        	$("input[type='checkbox']").attr("disabled", true);	
        	//enable_cb();
        	var selectall = $('#selectAll').find('.iCheck-helper');        				
        	var select_record = $('.select_record').find('.iCheck-helper');
 
        	//var selected = $('.radio_to').find('.iCheck-helper');//$("input[type='radio'][name='optionsRadios']:checked");
        	//var selected = $('div.iradio_square-aero');
        	//selected.click(function(){
        		//alert('radio box check');
        	//	active_input = $(this).siblings('input').val();
        		//alert(x);
        	//});
        	
			//if (selected.length > 0) {
			//	selectedVal = selected.val();
				//alert(selectedVal);
			//}   
			$( ".to-radio" ).focus(function() {
				$("input[type='checkbox']").removeAttr("disabled");
  				alert( "Handler for .focus() called." );
  				var chk_btn = $(this).parent().siblings('.radio_to').find('.iradio_square-aero');
  				//alert(chk_btn.hasClass('checked'));
  				if(!chk_btn.hasClass('checked')){
  					//alert('has no checked');
  				    chk_btn.addClass('checked');  				    
  				}
  				// recheck email checkbox procedure //
  				// get input value
  					//alert('current value: '+$(this).val());  				
  				var current_email = $(this).val();
  				// split according to comma
  				var current_email_lists = current_email.split(',');
  				//alert('lists: '+current_email_lists);
  				// loop thru the list
  				//alert(current_email_lists.length);
  				for (i = 0; i < current_email_lists.length; ++i) { 
  					//alert('i: '+i);
  					// find in td email
	  				$('td.email').each(function(){  					
	  					var content = $(this).find('small').html();	  					
	  					alert(content.toLowerCase());
	  					if(content.toLowerCase()==current_email_lists[i]){
	  						//alert(content.toLowerCase()+'=='+current_email_lists[i]);
	  						//alert(current_email_lists[i]);
	  						//alert($(this).find('small').html());
	  						// tree transverse to check box and add check
	  						$(this).siblings('.select_record').find('.icheckbox_square-aero').addClass('checked');
	  						// aria-checked set to true
	  						$(this).siblings('.select_record').find('.icheckbox_square-aero').attr('aria-checked', 'true');
	  					}
	  				});
  				}
  				  				
			});   		
        	$( ".to-radio" ).blur(function() { 
        		alert( "Handler for .blur() called." ); 				
  				var chk_btn = $(this).parent().siblings('.radio_to').find('.iradio_square-aero');
  				if(chk_btn.hasClass('checked')){  					
  				    chk_btn.removeClass('checked');  				
  				    $('div.icheckbox_square-aero').removeClass('checked');  				
  				    $(this).siblings('.select_record').find('.icheckbox_square-aero').attr('aria-checked', 'false');
  				}
			}); 
        	
			selectall.click(function(e){ 					  
				//var receiver = $(active_input).val();
				//console.log(receiver);	
				//alert('inside selectall');			    
			    if($(this).parent().hasClass('checked')) {
			    	//alert('already checked');			        
			        $('div.icheckbox_square-aero')
			        	.addClass('checked')
					  	.parent() // small tag
					  	.parent() // td.select_record
					  	.siblings('td.email')
					  	.find('small')
					  	.each(function(){ 
					  		//check_input_selector = $(document.activeElement).attr('id');				
							//alert(check_input_selector);
					  		var receiver = $("#input-text-to").val();

							var email 	 = $(this).html().slice($(this).html().search(' - ')+3, $(this).html().length); // extract email only
							//alert('email: '+email);
				        	if(receiver.length > 0){
	    						receiver = receiver+', ';
	    					}
				        	$('input[name=receiver]').val(receiver+email.toLowerCase());
					  	});			        
			    } else {			        
			        $('div.icheckbox_square-aero').removeClass('checked');
			        $('input[name=receiver]').val('');
			    } 
    		});   

    		select_record.click(function(e){ 
    			var selected_receiver = '';
    			$('.radio_to .iradio_square-aero').each(function(){
    				if($(this).hasClass('checked')){
    					//alert($(this).find('input').val());
    					selected_receiver = $(this).find('input').val();
    					//alert(selected_receiver);
    				}
    			})   			
    			
    			var find_email = $(this).parent() // div.icheckbox_square-aero
    			                   .parent() // small
    			                   .parent() // td
    			                   .siblings('td.email')  // fullname/email
    			                   .find('small'); // small
    			
    			var email = find_email.html();
    			//var receiver = $("#input-text-to").val();    			
    			
    			var receiver = $("#"+ selected_receiver).val();
    			//alert(receiver);
    			if(typeof receiver !== "undefined"){    				
    				if(receiver.length){
    					receiver = receiver+', ';
    				} 
    				//alert(receiver);         
	                if($(this).parent().hasClass('checked')){
	                	//alert('the item is checked');	
	                	$('input[name='+selected_receiver+']').val(receiver+email.toLowerCase());

	                } else {
	                	//alert('the item is not checked');	
	                	// find email from receiver list
	                	receiver = receiver.replace(', '+email.toLowerCase(),"").replace(email.toLowerCase(),""); 
	                	// remove duplicate comma
	                	receiver = receiver.replace(', , ',', ');
	                	// remove extra ', ' in front
	                	if(receiver.slice(0,2)==', '){
	    					receiver = receiver.slice(2, receiver.length); 	
	    				}
	    				// remove extra ', ' in last
	    				if(receiver.slice(receiver.length-2,receiver.length)==', '){
	    					receiver = receiver.slice(0, receiver.length-2); 	
	    				}
	                	// remove from the list                	
	                	$('input[name='+selected_receiver+']').val(receiver);
	                } 
    			}              
            });     
		});
    </script>
    <?php } ?>
</html>