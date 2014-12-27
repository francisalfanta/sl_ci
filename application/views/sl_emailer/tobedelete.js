<?php if($title='SoftLine | E-Mailer'){ ?>
	<script type="text/javascript">	
		// initialize checkbox	
		/*
		$(document).ready(function() {
        	var selectall = $('#selectAll').find('.iCheck-helper');          	
        	var select_record = $('.select_record').find('.iCheck-helper');
        	// new
        	//var select_record = $('#email-check');         	       	

        	$( ".to-radio" ).focus(function() { 
				//$("input[type='checkbox']").removeAttr("disabled");  
				//$('.select_record').find("input[type='checkbox']").removeAttr("disabled"); 
				$('#selectAll').find("input[type='checkbox']").removeAttr("disabled");  

  				var chk_btn = $(this).parent().siblings('.radio_to').find('.iradio_square-aero');
  				if(!chk_btn.hasClass('checked')){
  				    chk_btn.addClass('checked');  				    
  				}
  				// recheck email checkbox procedure //
  				// get input value			
  				var current_email = $(this).val();
  				// split according to comma
  				var current_email_lists = current_email.split(',');  	
  				// loop thru the list
  				for (i = 0; i < current_email_lists.length; ++i) {   					
  					// find in td email
	  				$('td.email').each(function(){  					
	  					var content = $(this).find('small').html();	 
	  					if(content.toLowerCase()==current_email_lists[i]){
	  						//alert(content.toLowerCase()+'-'+current_email_lists[i]);
	  						$(this).siblings('.select_record').find('.icheckbox_square-aero').addClass('checked');	  							
	  					}
	  				});
  				} 				  				
			});   		
        	
        	$( ".to-radio" ).blur(function() { 
        		//alert( "Handler for .blur() called." ); 				
  				var chk_btn = $(this).parent().siblings('.radio_to').find('.iradio_square-aero');
  				if(chk_btn.hasClass('checked')){
  					// remove check for other radio button  					
  				    //chk_btn.removeClass('checked');  	
  				    // remove check for all check boxes			
  				    $('div.icheckbox_square-aero').removeClass('checked');   				    
  				    //$('td.email').siblings('.select_record').find('.icheckbox_square-aero').attr('aria-checked', 'false');
  				    $('#selectAll').attr('aria-checked', 'false');
  				    //$('input[type="checkbox"]').prop('checked', 'false');
  				    //$('.select_record').find('input[type="checkbox"]').prop('checked', 'false');
  				}
			});
        	// Original layout
			selectall.click(function(e){ 
				var selected_receiver = '';
				$('.select_record').find("input[type='checkbox']").removeProp("disabled");
    			$('.radio_to .iradio_square-aero').each(function(){
    				if($(this).hasClass('checked')){    					
    					selected_receiver = $(this).find('input').val();    			
    				}
    			}) 			    
			    if($(this).parent().hasClass('checked')) { 
			    	//$('input[type="checkbox"]').prop('checked', 'true');	  	
			     	$('.select_record').find("input[type='checkbox']").prop('checked', 'true');	
			     	$('div.icheckbox_square-aero').attr('aria-checked', 'true');		    		        
			        $('div.icheckbox_square-aero')
			        	.addClass('checked')			        	
					  	.parent() // small tag
					  	.parent() // td.select_record
					  	.siblings('td.email')
					  	.find('small')
					  	.each(function(){ 					  		
					  		var receiver = $("#"+selected_receiver).val();					  	
							var email 	 = $(this).html();		
							
							if(typeof receiver !== "undefined"){
								if(receiver.length > 0){				        				
	    							receiver = receiver +', ';	    							
	    						}	    						
	    						$('input[name='+selected_receiver+']').val(receiver+email.toLowerCase());
	    					}				        	
					  	});			        
			    } else {				    	        
			        $('div.icheckbox_square-aero').removeClass('checked');
			        //$('div.icheckbox_square-aero').attr('aria-checked', 'false');
			        //$('input[type="checkbox"]').prop('checked', 'false'); 
			        $('input[name='+selected_receiver+']').val('');
			    } 
    		});  

    		select_record.click(function(e){ 
    			var selectall = $('#selectAll').find('.iCheck-helper');
    			var selected_receiver = '';

    			$('.select_record').find("input[type='checkbox']").removeProp("disabled");

    			selectall.parent('icheckbox_square-aero').removeClass('checked');
    			selectall.parent('icheckbox_square-aero').attr('aria-checked', 'false');	

    			$('.radio_to .iradio_square-aero').each(function(){
    				if($(this).hasClass('checked')){    					
    					selected_receiver = $(this).find('input').val();    			
    				}
    			}) 
    			var find_email = $(this).parent() // div.icheckbox_square-aero
    			                   .parent() // small
    			                   .parent() // td
    			                   .siblings('td.email')  // fullname/email
    			                   .find('small'); // small    			
    			var email = find_email.html();  
    			var receiver = $("#"+ selected_receiver).val();
    			//alert(receiver);
  
    			if(typeof receiver !== "undefined"){    				
    				if(receiver.length){
    					receiver = receiver+', ';
    				}     				       
	                if($(this).parent().hasClass('checked')){	                	
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
            }); */
			// tested 12/21/2014
            CKEDITOR.instances['email_message'].on('focus', function()
			{
				var msg_name = $('#msg_name').val("");				
			}); 
			// on testing 12/23/2014
			/*// new
			select_record.click(function(e){ 
				alert('click select record');
    			var selectall = $('#selectAll').find('.iCheck-helper');
    			var selected_receiver = '';

    			//$('.select_record').find("input[type='checkbox']").removeProp("disabled");

    			//selectall.parent('icheckbox_square-aero').removeClass('checked');
    			//selectall.parent('icheckbox_square-aero').attr('aria-checked', 'false');	

    			$('.radio_to .iradio_square-aero').each(function(){
    				if($(this).hasClass('checked')){    					
    					selected_receiver = $(this).find('input').val();   
    					alert('selected: '+selected_receiver); 			
    				}
    			})     					
    			var email = $(this).html();  
    			alert('email: '+ email);
    			var receiver = $("#"+ selected_receiver).val();
    			//alert('receiver: '+receiver);
  				/*
    			if(typeof receiver !== "undefined"){ 
    				if(receiver.length){
    					receiver = receiver+', ';
    				}     				       
	                if($(this).parent().hasClass('checked')){	                	
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
    			*/             
            //}); 
			
		});
    </script>
    <?php } ?>