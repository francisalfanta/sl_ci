<?php 
/*   Created by  : Francis A.
     Date        : December 7, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class property_owner_master_list_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function filter_table(){
		$first_name  = $this->input->post('first_name');
        $middle_name = $this->input->post('middle_name');
        $last_name   = $this->input->post('last_name');
        $nationality = $this->input->post('nationality');
        $country     = $this->input->post('country_name');
        $telephone_no= $this->input->post('telephone_no');
        $mobile_no   = $this->input->post('mobile_no');
        $fax_no      = $this->input->post('fax_no');
        $email       = $this->input->post('email');
        
        if(isset($first_name) && $first_name){
            $this->db->like('first_name', $first_name);    
        }
        
        if(isset($middle_name) && $middle_name){
            echo 'middle_name';
            $this->db->or_like('middle_name', $middle_name);
        }
        if(isset($last_name) && $last_name){
            echo 'last_name';
            $this->db->or_like('last_name', $last_name);    
        }

        if(isset($nationality) && $nationality){
            echo 'entered nat';
            $this->db->or_like('nationality1', $nationality);
            $this->db->or_like('nationality2', $nationality);
            $this->db->or_like('nationality3', $nationality);
            $this->db->or_like('nationality4', $nationality);
        }

        if(isset($country) && $country){             
            $this->db->or_like('country1', $country);
            $this->db->or_like('country2', $country);
            $this->db->or_like('country3', $country);
            $this->db->or_like('country4', $country);               
        }

        if(isset($telephone_no) && $telephone_no) {
            $this->db->or_like('telephone_no1', $telephone_no);
            $this->db->or_like('telephone_no2', $telephone_no);
            $this->db->or_like('telephone_no3', $telephone_no);
            $this->db->or_like('telephone_no4', $telephone_no);            
        }

        if(isset($mobile_no) && $mobile_no) {
            $this->db->or_like('mobile_no1', $mobile_no);
            $this->db->or_like('mobile_no2', $mobile_no);
            $this->db->or_like('mobile_no3', $mobile_no);
            $this->db->or_like('mobile_no4', $mobile_no);            
        }

        if(isset($fax_no) && $fax_no){                
            $this->db->or_like('fax_no1', $fax_no);
            $this->db->or_like('fax_no2', $fax_no);
            $this->db->or_like('fax_no3', $fax_no);
            $this->db->or_like('fax_no4', $fax_no);   
        }

        if(isset($email) && $email) {            
            $this->db->or_like('email1', $email);
            $this->db->or_like('email2', $email);
            $this->db->or_like('email3', $email);
            $this->db->or_like('email4', $email);   
        }

        $query = $this->db->get('property_owner_master_list');

		return $query->result();
	}


    public function update_owner_for_deletation($id) 
    {   // set 1 for true or 0 for false
        $data = array('for_deletion' => 1);       
        
        $this->db->where('tb_property_owner_id', $id);
        $status = $this->db->update('property_owner_master_list', $data); 

        echo 'inside master_list update owner id: '.$id.'status: '.$status.'<br>';
        return $status;
    }

}
