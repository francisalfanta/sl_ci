<?php 
/*   Created by  : Francis A.
     Date        : December 8, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class fax_no_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_faxno_info($tb_property_owner_id = null){
		if (is_null($tb_property_owner_id))
		{
			$query = $this->db->get('fax_no');
			return $query->result();
		}
		$this->db->where('tb_property_owner_id', $tb_property_owner_id );
		$query = $this->db->get('fax_no');
		return $query;

	}
	// working 12/09/2014
	public function insert_or_update_batch_fax_no($tb_property_owner_id){			
        $faxno_id = $this->input->post('faxno_id');                
        $fax_no = $this->input->post('fax_no');         
        
        $telno_data = array();
              
        for($x = 0; $x < sizeof($faxno_id); $x++){
            $faxno_data = array(
                'tb_fax_no_id'   => $faxno_id[$x], 
                'fax_no'         => $fax_no[$x],                  
                'tb_property_owner_id' => $tb_property_owner_id                    
            );  
            // check if for update or insert           
            if($faxno_id[$x]){                  
                $this->db->where('tb_fax_no_id', $faxno_id[$x]);
                $status = $this->db->update('fax_no', $faxno_data); 
            } else {                           
                $status = $this->db->insert('fax_no', $faxno_data); 
            }        
        }      
	}
	// tested 12/09/2014
	public function delete_fax_no($tb_fax_no_id){
		$this->db->where('tb_fax_no_id', $tb_fax_no_id);
		$status = $this->db->delete('tb_fax_no');

		return $status;
	}
}