<?php 
/*   Created by  : Francis A.
     Date        : December 1, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class owner_addr_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_owner_addr($property_owner_id = FALSE)
	{	
		$this->load->helper('sl_sql_helper');		
		$sql = sl_sql();

		if ($property_owner_id === FALSE)
		{
			$query = $this->db->query($sql);
			return $query->result();
		}
		$sql = "select * from ( ".$sql. " ) as x  where property_owner_id = ?";
		$query = $this->db->query($sql,array($property_owner_id));
		return $query->result();
	}

	public function view_owner_details($count_rows = null, $start = null, $offset = null)
	{
		$this->load->helper('sl_sql_helper');
		$sql = sl_sql();

		$query = $this->db->query($sql);
		if($count_rows){			
			$counting_rows = count($query->result());
			return $counting_rows;
		} elseif ($start && $offset) {			
			$sql .= " limit ?, ?";
			$query = $this->db->query($sql, array($start, $offset));
			return $query->result();
		} else {			
			return $query->result();
		}		
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