<?php 
/*   Created by  : Francis A.
     Date        : December 9, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class address_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_address($data){
		$insert = $this->db->insert('address', $data);
		return $insert;
	}

	public function update_address($id, $data) {		
		$this->db->where('tb_address_id', $id);
		$this->db->update('address', $data); 		
	}
	// tested 12/09/2014
	public function insert_or_update_batch_address($tb_property_owner_id){ // working 12/09/2014
	 	$addr_id = $this->input->post('address_id');
        $country = $this->input->post('country');
        $city = $this->input->post('city');
        $community = $this->input->post('comm');
        $subcommunity = $this->input->post('subcom');
        $address = $this->input->post('addr_street');  

       	$address_data = array();
       	      
        for($x = 0; $x < sizeof($addr_id); $x++){
	        $address_data = array(
	            'tb_address_id' => $addr_id[$x],
	            'address' => $address[$x], //
	            'addressSubcommunity'=> $subcommunity[$x], //
	            'addressCommunity' => $community[$x], //
	            'addressCity' => $city[$x],
	            'addressCountry' => $country[$x],
	            'tb_property_owner_id' => $tb_property_owner_id,
	            'postalcode' => '',
	            'postofficeboxnumber' => ''
	        );	
	        // check if for update or insert	       
	        if($addr_id[$x]){	       
	        	$this->db->where('tb_address_id', $addr_id[$x]);
	        	$status = $this->db->update('address', $address_data); // can update
	        } else {	       
	        	$status = $this->db->insert('address', $address_data); // successfull
	        }	     
	    } 	   
        return $status;
	}
	// tested 12/09/2014
	public function delete_address($tb_address_id){
		$this->db->where('tb_address_id', $tb_address_id);
		$this->db->delete('address');
	}

}	
