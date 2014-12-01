<?php 
/*   Created by  : Francis A.
     Date        : December 1, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nationality_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_nationality($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('nationality');
			return $query->result_array();
		}

		$query = $this->db->get_where('nationality', array('id' => $id));
		return $query->row_array();
	}

	public function create_prop_owner() {

		$new_pro_owner_insert_data = array(
			'first_name'  => $this->input->post('first_name'),
			'middle_name' => $this->input->post('middle_name'),
			'last_name'   => $this->input->post('last_name')
		);

		$insert = $this->db->insert('nationality', $new_pro_owner_insert_data);
		return $insert;
	}

	public function delete_nationality($id) {
		$this->db->where('id', $id);
		$this->db->delete('nationality');
	}

	public function update_nationality($id, $data) {		
		$this->db->where('id', $id);
		$this->db->update('nationality', $data); 		
	}	
	// ------------------------------------------//
	public function get_field_name_staff_menu(){
		
		$fields =array();	
		$i = 0;		
		$query = $this->db->list_fields('staff_menu');
		foreach ($query as $field_meta) {   		
   			$fields[$i] = $field_meta;
   			++$i;
		}		
		return $fields;
	}

	public function get_parent_staff_menu()
	{
		$this->db->select('id')->select('menu')->from('staff_menu')->where('length(parent) = 0')->order_by('order', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_child_staff_menu()
	{
		$this->db->select('id')->select('menu')->select('parent')->from('staff_menu')->where('length(parent) !=', 0)->order_by('order', 'asc'); 
		$query = $this->db->get();
		return $query->result();
	}	

	

}?>