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
    <?php if($title=='SoftLine | E-Mailer'){ ?>
    <script src="<?php echo base_url();?>assets/libs/jquery-datatables/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>assets/libs/jquery-datatables/js/dataTables.bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>	
	<script src="<?php echo base_url();?>assets/js/pages/datatables.js"></script>		
	<?php } ?>
	<script src="<?php echo base_url();?>assets/libs/sweetalert-master/lib/sweet-alert.min.js"></script>
	
	<!-- FMA custom added 12/28/2014 -->
    <?php if($title=='SoftLine | Staff Permission'){ ?>
    <script>
        $(document).ready(function(){
            //var selectall = $('#selectAll').find('.iCheck-helper');             
            //var select_record = $('.select_record').find('.iCheck-helper');                 // not working
            //var select_record = $('.select_record').children().children('.iCheck-helper');
            //$('input[type=checkbox]').click(function(){                                     // not working
            //$('.icheckbox_square-aero').click(function(){ iCheck-helper                     // not working
            //select_record.click(function(){ 
            //    alert('check box');
            //});
        	//$('.iCheck-helper').click(function(){											  // not working
        	//    alert('checkbox click');
        	//});
			// on testing 12/28/2014
			/*
        	$('.icheckbox_square-aero').find('.iCheck-helper').click(function(){
            	//alert('checkbox click');
            	if($(this).parent().hasClass('checked')) { 
            		alert('checkbox click hasclass');
            		// get the value which contain the table column name 'menu'
            		var checkbox_val =  $(this).siblings('input[type="checkbox"]').val();
            		alert ('checkbox_val: '+checkbox_val);            		
			    			        
			    } else {	
			    	alert('no check hasclass');			    	        			     
			    } 
        	});
			*/
        	// tested 12/28/2014        	
        	$('#select_staff').change(function(){
        		//alert('change select');
        		var staff_id = $(this).val();
        		//alert('staff_id: '+staff_id);
        		// remove all check
        		// side effect not all check is saved
        		// solution #1 used ajax when saving
                $('div.icheckbox_square-aero').removeClass('checked');

        		// insert new value
	    		$.ajax({
            	    type: "POST",
                    url: "<?php echo base_url('access_level/get_user_permission'); ?>",
                    dataType: "json",
                    data: {"staff_id": staff_id},
                    error:  function(xhr, status, error) {
                        //var err = JSON.parse(xhr.responseText);
                        //alert(err.Message);
                        console.log('parseerror: '+ status);
                    },
                    success: function (response) {                         
                    	//alert('response: '+response);
                        $.each(response, function (i, item) {  
                        	//alert('item: '+item);                        	
                        	// add check to indicated checkbox
                        	// selector input
                        	var selected_item = $('#'+item).parent();
                        	//alert('selected_item: '+$.trim(selected_item));                        	
                        	// adding checked to input checkbox
                        	selected_item.prop('checked', true);
                        	selected_item.addClass('checked');
                        	selected_item.attr('aria-checked', 'true');

                        });
	                },
	                complete: function(xhr, status){
                        var xhr = JSON.parse(xhr.responseText);
                        //console.log('ajax change status :'+ status + ' with xhr: '+xhr);
                        console.log('complete: '+status);
                    }
	            });   
        	});
			// tested 12/28/2014  
			// save all checked 
            $('#submit_btn').click(function(){
                //alert('submit_btn is click');
                // clear user permission
                var staff_id    = $('#select_staff').val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('access_level/clear_permission'); ?>",
                    dataType: "text",
                    data: {"staff_id": staff_id                       
                    },
                    error:  function(xhr, status, error) {
                        //var err = JSON.parse(xhr.responseText);
                        //alert(err.Message);
                        console.log('parseerror: '+ status);
                    },
                    success: function (response) { 
                        console.log('response: '+response);                        
                    }
                });             
                console.log('Done clearing User permission');
                //var menu_name   = $this->input->post('menu_name');
                // scan all checkbox tag
                $('.icheckbox_square-aero').find('.iCheck-helper').each(function(){
                    //alert('checkbox click');
                    // if checkbox is true insert to tb_staff_permissions
                    if($(this).parent().hasClass('checked')) { 
                        //alert('checkbox click hasclass');
                        // get the value which contain the table column name 'menu'
                        var menu_name =  $(this).siblings('input[type="checkbox"]').val();
                        console.log('menu_name: '+ menu_name);
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url('access_level/assign_permission'); ?>",
                            //dataType: "text",
                            data: {"staff_id" : staff_id,
                                   "menu_name": menu_name   
                            },
                            error:  function(xhr, status, error) {
                                //var err = JSON.parse(xhr.responseText);
                                //alert(err.Message);
                                console.log('parseerror: '+ status);
                            },
                            //success: function (response) {                         
                            //    alert('each response: '+response);                              
                            //},
                            complete: function(xhr, status){
                                var xhr = JSON.parse(xhr.responseText);
                                //console.log('ajax change status :'+ status + ' with xhr: '+xhr);
                                console.log('each response: '+status);
                            }
                        }); 
                    }
                });
            });         	
        });
    </script>
    <?php } ?>
	</body>
	
</html>