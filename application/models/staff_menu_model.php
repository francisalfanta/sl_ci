<?php 
/*   Created by  : Francis A.
     Date        : November 24, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staff_menu_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_staff_menu($menu = FALSE)
	{
		if ($menu === FALSE)
		{
			$query = $this->db->get('staff_menu');
			return $query->result_array();
		}

		$query = $this->db->get_where('staff_menu', array('menu' => $menu));
		return $query->row_array();
	}

	public function get_parent_staff_menu()
	{
		$this->db->select('menu')->from('staff_menu')->where('length(parent) = 0')->order_by('order', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_child_staff_menu()
	{
		$this->db->select('menu')->from('staff_menu')->where('length(parent) !=', 0)->order_by('order', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	public function create_staff_menu() {

		$new_staff_menu_insert_data = array(
			'menu' 		 => $this->input->post('menu'),
			'url' 		 => $this->input->post('url'),
			'send_value' => $this->input->post('send_value'),
			'method'     => $this->input->post('method'),
			'order'      => $this->input->post('order'),
			'parent'     => $this->input->post('parent'),
			'include'    => $this->input->post('include'),
			'active'     => $this->input->post('active')
		);

		$insert = $this->db->insert('staff_menu', $new_staff_menu_insert_data);
		return $insert;
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