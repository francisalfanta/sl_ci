<?php 
/*   Created by  : Francis A.
     Date        : December 9, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class letter_templates_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	/* GUIDE ONLY
	public function insert_address($data){
		$insert = $this->db->insert('address', $data);
		return $insert;
	}

	public function update_address($id, $data) {		
		$this->db->where('tb_address_id', $id);
		$this->db->update('address', $data); 		
	}	
	*/
	public function get_letter_templates($selected_id = null){
		if(!$selected_id){
			$query = $this->db->get('letter_templates');
			return $query;
		} else {
			$this->db->where('tb_letter_templates_id', $selected_id);
			$query = $this->db->get('letter_templates');
			return $query->row();
		}
		
	}

}	
