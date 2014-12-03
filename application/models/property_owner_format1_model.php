<?php 
/*   Created by  : Francis A.
     Date        : December 3, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class property_owner_format1_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_sections($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('property_owner_format1');
			return $query->result_array();
		}

		$query = $this->db->get_where('property_owner_format1', array('id' => $id));
		return $query->row_array();
	}

	public function create_section() {

		//$this->load->helper('url');

		$property_owner_format1_name = $this->input->post('property_owner_format1');
		
		$new_property_owner_format1_insert_data = array(
			'section_name' => strtoupper($property_owner_format1_name)
		);

		$insert = $this->db->insert('property_owner_format1', $new_property_owner_format1_insert_data);
		return $insert;
	}
}
?>