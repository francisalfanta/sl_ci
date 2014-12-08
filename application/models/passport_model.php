<?php 
/*   Created by  : Francis A.
     Date        : December 1, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class passport_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_passport_info($tb_property_owner_id = null){
		if (is_null($tb_property_owner_id))
		{
			$query = $this->db->get('passport');
			return $query->result();
		}
		$this->db->where('tb_property_owner_id', $tb_property_owner_id );
		$query = $this->db->get('passport');
		return $query;

	} 

	public function create_passport($property_owner_id, $passport) {
	
		if(isset($passport) && $passport){
			$new_passport_insert_data = array(
			'passport_no'   		=> $passport,			
			'tb_property_owner_id'  => $property_owner_id
			);	
			$insert = $this->db->insert('passport', $new_passport_insert_data);
		}
		return true;						
	}

	public function delete_passport($id) {
		$this->db->where('tb_passport_id', $id);
		$this->db->delete('passport');
	}

	public function update_passport($tb_passport_id, $passport) {	
		$new_passport_update_data = array(		
		'passport_no'			=> $passport,			
		'tb_property_owner_id'  => $this->input->post('property_owner_id')
		);

		$this->db->where('tb_passport_id', $tb_passport_id);
		$update = $this->db->update('passport', $new_passport_update_data);

		return $update;	
	}	

}