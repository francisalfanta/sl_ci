<?php 
/*   Created by  : Francis A.
     Date        : November 26, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Propertyfinder_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_propertyfinder($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('propertyfinder');
			return $query->result_array();
		}

		$query = $this->db->get_where('propertyfinder', array('id' => $id));
		return $query->row_array();
	}	

	public function create_propertyfinder() {

		$new_propertyfinder_insert_data = array(
			'city' 	       => $this->input->post('city'),
			'community'    => $this->input->post('community'),
			'subcommunity' => $this->input->post('subcommunity'),
			'property'     => $this->input->post('property')
		);

		$insert = $this->db->insert('staff_menu', $new_propertyfinder_insert_data);
		return $insert;
	}

	public function delete_propertyfinder($id) {
		$this->db->where('id', $id);
		$this->db->delete('propertyfinder');
	}

	public function update_propertyfinder($id, $data) {		
		$this->db->where('id', $id);
		$this->db->update('propertyfinder', $data); 		
	}	
}?>