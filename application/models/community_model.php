<?php 
/*   Created by  : Francis A.
     Date        : November 26, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class community_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_community($city_id = FALSE)
	{
		if ($city_id === FALSE)
		{
			$query = $this->db->get('community');
			return $query->result_array();
		}

		$query = $this->db->get_where('community', array('city_id' => $city_id));
		return $query->row_array();
	}	

	public function create_community() {

		$new_comm_insert_data = array(
			'community_name' => $this->input->post('community_name')
		);

		$insert = $this->db->insert('commmunity', $new_comm_insert_data);
		return $insert;
	}

	public function delete_community($id) {
		$this->db->where('id', $id);
		$this->db->delete('community');
	}

	public function update_community($id, $data) {		
		$this->db->where('id', $id);
		$this->db->update('community', $data); 		
	}	
}?>