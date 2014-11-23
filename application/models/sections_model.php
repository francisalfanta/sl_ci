<?php 
/*   Created by  : Francis A.
     Date        : November 22, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sections_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_sections($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('sections');
			return $query->result_array();
		}

		$query = $this->db->get_where('sections', array('id' => $id));
		return $query->row_array();
	}

	public function create_section() {

		//$this->load->helper('url');

		$section_name = $this->input->post('section_name');
		
		$new_section_insert_data = array(
			'section_name' => strtoupper($section_name)
		);

		$insert = $this->db->insert('sections', $new_section_insert_data);
		return $insert;
	}
}
?> 