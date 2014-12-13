(function($){

	<td class="fullname"><small><?php echo $row->first_name.' '.$row->middle_name.' '.$row->last_name; ?></small></td>
    <td class="no_property_owned"><small><?php echo $row->no_property_owned; ?></small></td>
    <td class="nationality1"><small><?php echo $row->nationality1; ?></small></td>
    <td class="nationality2"><small><?php echo $row->nationality2; ?></small></td>
    <td class="nationality3"><small><?php echo $row->nationality3; ?></small></td>
    <td class="nationality4"><small><?php echo $row->nationality4; ?></small></td>
    <td class="passport_no1"><small><?php echo $row->passport_no1; ?></small></td>
    <td class="passport_no2"><small><?php echo $row->passport_no2; ?></small></td>
    <td class="passport_no3"><small><?php echo $row->passport_no3; ?></small></td>
    <td class="passport_no4"><small><?php echo $row->passport_no4; ?></small></td>
    <td class="address1"><small><?php echo $row->address1; ?></small></td>
    <td class="subcommunity1"><small><?php echo $row->subcommunity1; ?></small></td>
    <td class="community1"><small><?php echo $row->community1; ?></small></td>
    <td class="city1"><small><?php echo $row->city1; ?></small></td>
    <td class="country1"><small><?php echo $row->country1; ?></small></td>

    <td class="address2"><small><?php echo $row->address2; ?></small></td>
    <td class="subcommunity2"><small><?php echo $row->subcommunity2; ?></small></td>
    <td class="community2"><small><?php echo $row->community2; ?></small></td>
    <td class="city2"><small><?php echo $row->city2; ?></small></td>
    <td class="country2"><small><?php echo $row->country2; ?></small></td>

    <td class="address3"><small><?php echo $row->address3; ?></small></td>
    <td class="subcommunity3"><small><?php echo $row->subcommunity3; ?></small></td>
    <td class="community3"><small><?php echo $row->community3; ?></small></td>
    <td class="city3"><small><?php echo $row->city3; ?></small></td>
    <td class="country3"><small><?php echo $row->country3; ?></small></td>

    <td class="address4"><small><?php echo $row->address4; ?></small></td>
    <td class="subcommunity4"><small><?php echo $row->subcommunity4; ?></small></td>
    <td class="community4"><small><?php echo $row->community4; ?></small></td>
    <td class="city4"><small><?php echo $row->city4; ?></small></td>
    <td class="country4"><small><?php echo $row->country4; ?></small></td>

    <td class="telephone_no1"><small><?php echo $row->telephone_no1; ?></small></td>
    <td class="telephone_no2"><small><?php echo $row->telephone_no2; ?></small></td>
    <td class="telephone_no3"><small><?php echo $row->telephone_no3; ?></small></td>
    <td class="telephone_no4"><small><?php echo $row->telephone_no4; ?></small></td>

    <td class="fax_no1"><small><?php echo $row->fax_no1; ?></small></td>
    <td class="fax_no2"><small><?php echo $row->fax_no2; ?></small></td>
    <td class="fax_no3"><small><?php echo $row->fax_no3; ?></small></td>
    <td class="fax_no4"><small><?php echo $row->fax_no4; ?></small></td>

    <td class="mobile_no1"><small><?php echo $row->mobile_no1; ?></small></td>
    <td class="mobile_no2"><small><?php echo $row->mobile_no2; ?></small></td>
    <td class="mobile_no3"><small><?php echo $row->mobile_no3; ?></small></td>
    <td class="mobile_no4"><small><?php echo $row->mobile_no4; ?></small></td>

    <td class="email1"><small><?php echo $row->email1; ?></small></td>
    <td class="email2"><small><?php echo $row->email2; ?></small></td>
    <td class="email3"><small><?php echo $row->email3; ?></small></td>
    <td class="email4"><small><?php echo $row->email4; ?></small></td> 
    <td class="status" style="text-align: center;width:80px;"><small><?php if($row->status){ echo '<span id="record-status" value="'.$row->tb_property_owner_id.'" class="label label-success btn">Active</span>'; } else { echo '<span class="label label-danger btn">Suspended</span>'; } ?></small></td>
    
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

    <?php } ?>  

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