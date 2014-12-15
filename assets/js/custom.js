(function($){

 var str = "    <td class="status" style="text-align: center;width:80px;"><small><?php if($row->status){ echo '<span id="record-status" value="'.$row->tb_property_owner_id.'" class="label label-success btn">Active</span>'; } else { echo '<span class="label label-danger btn">Suspended</span>'; } ?></small></td>
    
    <td class="option" style="text-align: center;width:80px;">
      <div class="btn-group btn-group-xs">                                                                                                                                                                
          <a href="<?php $url='property_owner/create_edit/'.$row->tb_property_owner_id; echo base_url($url); ?>" data-toggle="tooltip" title="Edit Contact Details" ><i class="fa fa-edit"></i></a>                                                                                                   
          <?php if($row->no_property_owned==0) { ?>
          <a href="#delete-record-modal" data-id="<?php echo $row->tb_property_owner_id; ?>" id="delete-record" title="Delete"  class="md-trigger open-delete-dialog" data-modal="delete-record-modal"><i class="glyphicon glyphicon-remove"></i></a>                                          
          <?php } else { ?>
          <a href="#" id="delete-record" title="Delete"  class="md-trigger" data-modal="cnt-delete-record-modal"><i class="glyphicon glyphicon-remove"></i></a>             
          <?php } ?>                            
      </div>
    </td>

    <?php } ?>  ";

    function check_td_display(field_name){    	
    	var selector = 'table .'+field_name,
    		row_html = '';

    	if($(selector).is(':visible')){
        	row_html += '<td class="'+field_name+'">' + field_name + '</td>';                        
      	}
      	return row_html;
    }
    // var x = [ 'p0', 'p1', 'p2' ];
	// call_me.apply(this, x);
	//for(var i=0; i<arguments.length; i++) {
	//    alert("Hi, " + arguments[i])
	//}
	function td_fullname(first_name, middle_name, last_name){
		  var row_html = '';
		  row_html = '<td class="fullname"><small>'+first_name+' '+middle_name+' '+last_name+'</small></td>';
		  return row_html;
	}
	
	function td_option(){
		   var row_html = '';

		   row_html = '<td class="option" style="text-align: center;width:80px;"><div class="btn-group btn-group-xs"><a href="<?php $url='property_owner/create_edit/'+ echo base_url($url); ?>" data-toggle="tooltip" title="Edit Contact Details" ><i class="fa fa-edit"></i></a>                                                                                                   
          			   <?php if($row->no_property_owned==0) { ?>
          			<a href="#delete-record-modal" data-id="<?php echo $row->tb_property_owner_id; ?>" id="delete-record" title="Delete"  class="md-trigger open-delete-dialog" data-modal="delete-record-modal"><i class="glyphicon glyphicon-remove"></i></a>                                          
          			   <?php } else { ?>
          <a href="#" id="delete-record" title="Delete"  class="md-trigger" data-modal="cnt-delete-record-modal"><i class="glyphicon glyphicon-remove"></i></a>             
          <?php } ?>                            
      </div>
    </td>
	}

	function row_check_owner(tb_property_owner_id, field_names, class_names, first_name, middle_name, last_name){	     
	      var row_html = '<tr>';

	      row_html += td_fullname(first_name, middle_name, last_name);

	      for(var i=0; i<field_names.length; i++) {
	      	row_html += check_td_display(field_names[i], class_names[i]);		  	
		  }	  

	      row_html  += '<td><div class="btn-group btn-group-xs"><a href="" data-toggle="tooltip" title="Edit" class="btn"><i class="fa fa-edit"></i></a><a href="" onClick="delete_record()" data-toggle="tooltip" title="Off" class="btn"><i class="glyphicon glyphicon-remove"></i></a></div></td></tr>';
	      
	      return row_html;    
	};

})(jQuery);