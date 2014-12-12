<?php 
/*   Created by  : Francis A.
     Date        : December 8, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class email_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_email_info($tb_property_owner_id = null){
		if (is_null($tb_property_owner_id))
		{
			$query = $this->db->get('email');
			return $query->result();
		}
		$this->db->where('tb_property_owner_id', $tb_property_owner_id );
		$query = $this->db->get('email');
		return $query;

	} 
	// tested 12/09/2014
	public function insert_or_update_batch_email($tb_property_owner_id){
        $email_id = $this->input->post('email_id');        
        $email = $this->input->post('email_array');

        $email_data = array();
              
        for($x = 0; $x < sizeof($email); $x++){
            $email_data = array(
                'tb_email_id'           => $email_id[$x], 
                'email'                 => $email[$x],                  
                'tb_property_owner_id'  => $tb_property_owner_id                    
            );  
            // check if for update or insert           
            if($email_id[$x]){          
                $this->db->where('tb_email_id', $email_id[$x]);
                $status = $this->db->update('email', $email_data); 
            } else {                           
                $status = $this->db->insert('email', $email_data); 
            }        
        }    
	}
	// tested 12/09/2014
	public function delete_email($tb_email_id){
		$this->db->where('tb_email_id', $tb_email_id);
		$status = $this->db->delete('email');

		return $status;
	}
}