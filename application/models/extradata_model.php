<?php 
/*   Created by  : Francis A.
     Date        : November 26, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class extradata_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_data($q = FALSE)
	{
		if($q == FALSE) {
			$query = $this->db->get('extradata_uae');
			return $query->result_array();
		}
	}	

	public function create_city() {		
		$new_city_insert_data = array(
			'city_name' 	       => $this->input->post('city')
		);
		$insert = $this->db->insert('city', $new_city_insert_data);
		return $insert;
	}

	public function delete_city() {				
		$city_name = $this->input->post('city');
		
		$this->db->where('city_name', $city_name);
		$this->db->delete('city');
	}

	public function update_city($id, $data) {		
		$this->db->where('id', $id);
		$this->db->update('city', $data); 		
	}	
}?>