<?php 
/*   Created by  : Francis A.
     Date        : December 8, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mobile_no_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_mobileno_info($tb_property_owner_id = null){
		if (is_null($tb_property_owner_id))
		{
			$query = $this->db->get('mobile_no');
			return $query->result();
		}
		$this->db->where('tb_property_owner_id', $tb_property_owner_id );
		$query = $this->db->get('mobile_no');
		return $query;

	} 
	// tested 12/09/2014
	public function insert_or_update_batch_mobno($tb_property_owner_id){	
        $mobno_id = $this->input->post('mobileno_id');                
        $mob_no = $this->input->post('mobno');         

        $mobno_data = array();
              
        for($x = 0; $x < sizeof($mobno_id); $x++){
            $mobileno_data = array(
                'tb_mobile_id'   => $mobno_id[$x], 
                'mobile_no'         => $mob_no[$x],                  
                'tb_property_owner_id' => $tb_property_owner_id                    
            );  
            // check if for update or insert           
            if($mobno_id[$x]){                          
                $this->db->where('tb_mobile_id', $mobno_id[$x]);
                $status = $this->db->update('mobile_no', $mobileno_data); 
            } else {                           
                $status = $this->db->insert('mobile_no', $mobileno_data); 
            }        
        }  
	}
	// tested 12/09/2014
	public function delete_mobileno($tb_mobile_id){
		$this->db->where('tb_mobile_id', $tb_mobile_id);
		$status = $this->db->delete('mobile_no');

		return $status;
	}
}