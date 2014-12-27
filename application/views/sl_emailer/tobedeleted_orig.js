
			
        	
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
    			alert(receiver);
  
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
            });  

            $('.select_record').find("input[type='checkbox']").prop("disabled", true);
        	//$("input[type='checkbox']").attr("disabled", true);
        	
        	$("input[type='radio']").attr("disabled", true);


        	//
        	

        	class="icheckbox_square-aero"