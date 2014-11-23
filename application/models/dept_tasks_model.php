<?php 
/*   Created by  : Francis A.
     Date        : November 23, 2014
     Script Lines: All unless noted otherwise
*/     
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dept_tasks_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_dept_tasks($dept_id = FALSE)
	{
		if ($dept_id === FALSE)
		{
			$query = $this->db->get('dept_tasks');
			return $query->result_array();
		}

		$query = $this->db->get_where('dept_tasks', array('dept_id' => $dept_id));
		return $query->row_array();
	}

	public function create_dept_tasks() {

		//$this->load->helper('url');
		$dept_id = $this->input->post('dept_id');
		$table_name = $this->input->post('table_name');
		
		$new_depttask_insert_data = array(
			'dept_id' => $dept_id,
			'table_name' => $this->db->dbprefix.strtolower($table_name)	
		);

		$insert = $this->db->insert('dept_tasks', $new_depttask_insert_data);
		return $insert;
	}
}
?> 