<?php 
/*   Created by  : Francis A.
     Date        : December 8, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class telephone_no_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_telno_info($tb_property_owner_id = null){
		if (is_null($tb_property_owner_id))
		{
			$query = $this->db->get('telephone_no');
			return $query->result();
		}
		$this->db->where('tb_property_owner_id', $tb_property_owner_id );
		$query = $this->db->get('telephone_no');
		return $query;

	} 
	// working 12/09/2014
	public function insert_or_update_batch_telephone_no($tb_property_owner_id){  	
        $telno_id = $this->input->post('telno_id');        
        $tel_no   = $this->input->post('telephone_no');           

        $telno_data = array();
              
        for($x = 0; $x < sizeof($telno_id); $x++){
            $telno_data = array(
                'tb_telephone_no_id'   => $telno_id[$x], 
                'telephone_no'         => $tel_no[$x],                  
                'tb_property_owner_id' => $tb_property_owner_id                    
            );  
            // check if for update or insert           
            if($telno_id[$x]){                          
                $this->db->where('tb_telephone_no_id', $telno_id[$x]);
                $status = $this->db->update('telephone_no', $telno_data); 
            } else {                           
                $status = $this->db->insert('telephone_no', $telno_data); 
            }        
        }     
	}
	// tested 12/09/2014
	public function delete_telephone_no($tb_telephone_no_id){
		$this->db->where('tb_telephone_no_id', $tb_telephone_no_id);
		$status = $this->db->delete('telephone_no');

		return $status;
	}
}