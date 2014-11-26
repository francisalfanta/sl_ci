<?php 
/*   Created by  : Francis A.
     Date        : November 24, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staff_permissions_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_staff_permissions($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('staff_permissions');
			return $query->result_array();
		}

		$query = $this->db->get_where('staff_permissions', array('id' => $id));
		return $query->row_array();
	}

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

	public function create_staff_permissions($table_id) {

		$new_staff_perm_insert_data = array(
			'staff_id' 		      => $this->input->post('staff_id'),
			'accessable_table_id' => $table_id
		);

		$insert = $this->db->insert('staff_permissions', $new_staff_perm_insert_data);
		return $insert;
	}

	public function delete_staff_permissions($id) {
		$this->db->where('id', $id);
		$this->db->delete('staff_permissions');
	}

	public function update_staff_permissions($id, $data) {		
		$this->db->where('id', $id);
		$this->db->update('staff_permissions', $data); 		
	}	
}?>