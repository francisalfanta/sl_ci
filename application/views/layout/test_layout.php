<!DOCTYPE html>
<html>
<head>
  <title>Page Title</title>
 <script src="<?php echo base_url(); ?>assets/libs/jquery/jquery-1.11.1.min.js"></script>   
    
</head>

<body>

  <h1>This is a Heading</h1>

  <p>This is a paragraph.</p>

</body>
<script>
	function check_td_display(field_name, class_name){    	
    	var selector = 'table .'+field_name,
    		row_html = '';


    	if($(selector).is(':visible')){
        	row_html += '<td class="'+class_name+'">' + class_name + '</td>';                        
      	}
      	return row_html;
    }
    $(document).ready(function() {  
    	$('body').on('load',function(){
    		console.log(check_td_display('first_name', 'fullname'));
    	});
    });
</script>
</html>