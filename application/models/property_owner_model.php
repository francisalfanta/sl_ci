<?php 
/*   Created by  : Francis A.
     Date        : December 1, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class property_owner_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_prop_owner($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('property_owner');
			return $query->result_array();
		}

		$query = $this->db->get_where('property_owner', array('id' => $id));
		return $query->row_array();
	}
	public function prop_owner_lists()
	{		
		$query = $this->db->query('select a.*, b.id as id_n, b.telephone_no, b.mobile_no, b.fax_no,
										  b.email, b.property_owner_id 
									from tb_address a, tb_nationality b
									where a.id = b.tb_address_id');
		return $query->result_array();
	}
	public function create_prop_owner() {

		$new_pro_owner_insert_data = array(
			'first_name'  => $this->input->post('first_name'),
			'middle_name' => $this->input->post('middle_name'),
			'last_name'   => $this->input->post('last_name'),
			'passport_no'   => $this->input->post('passport_no')
		);

		$insert = $this->db->insert('property_owner', $new_pro_owner_insert_data);
		return $insert;
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

	public function delete_staff_menu($id) {
		$this->db->where('id', $id);
		$this->db->delete('staff_menu');
	}

	public function update_staff_menu($id, $data) {		
		$this->db->where('id', $id);
		$this->db->update('staff_menu', $data); 		
	}	
}?>