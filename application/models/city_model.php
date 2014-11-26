<?php 
/*   Created by  : Francis A.
     Date        : November 26, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class city_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_city($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('city');
			return $query->result_array();
		}

		$query = $this->db->get_where('city', array('id' => $id));
		return $query->row_array();
	}	

	public function create_city() {

		$new_city_insert_data = array(
			'city_name' 	       => $this->input->post('city')
		);

		$insert = $this->db->insert('city', $new_city_insert_data);
		return $insert;
	}

	public function delete_city($id) {
		$this->db->where('id', $id);
		$this->db->delete('city');
	}

	public function update_city($id, $data) {		
		$this->db->where('id', $id);
		$this->db->update('city', $data); 		
	}	
}?>