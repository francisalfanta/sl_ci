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

	public function get_valid_email(){		
		$this->db->distinct()
				 ->select('tb_property_owner.first_name, tb_email.email')
				 ->from('email')
				 ->join('property_owner', 'property_owner.tb_property_owner_id=email.tb_property_owner_id', 'left')				
				 ->where('locate("@", tb_email.email) >', 0)
				 ->where('length(tb_email.email) >', 0)
				 ->order_by("email", "asc")
				 ->limit(100);			
		$query = $this->db->get();		
		
		return $query->result();
	} 

	public function find_valid_email_by_addresss($city, $country){		
		$query = $this->db->distinct()
						 ->select('tb_email.email, tb_address.*')
						 ->from('email')
						 ->join('property_owner', 'property_owner.tb_property_owner_id=email.tb_property_owner_id', 'left')
						 ->join('address', 'property_owner.tb_property_owner_id=address.tb_property_owner_id', 'left')
						 ->where('locate("@", tb_email.email) >', 0)
						 ->where('length(tb_email.email) >', 0);
		if($city){
			$filterd_by_city = $query->where('tb_address.addressCity', $city)->order_by("email", "asc");	
		}
		if($country){
			$filterd_by_city = $query->where('tb_address.addressCountry', $country)->order_by("email", "asc");	
		}		
						
		$query = $this->db->get();		
		
		return $query->result();
	}
}