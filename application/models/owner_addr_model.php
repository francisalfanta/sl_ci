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
		if ($property_owner_id === FALSE)
		{
			$query = $this->db->get('property_owner_master_list');
			return $query->result();
		}
		$this->db->where('property_owner_master_list_id', $property_owner_id );
		$query = $this->db->get('property_owner_master_list');
		return $query->result();
	}

	public function view_owner_details($count_rows = null, $start = null, $offset = null)
	{
		echo 'view_onwer';
		//$this->load->helper('sl_sql_helper');
		//$sql = sl_sql();
		//$sql = sl_sql_left_join();
		
		$query = $this->db->get('property_owner_master_list');
		if($count_rows){			
			$counting_rows = count($query->result());
			return $counting_rows;
		} elseif ($start && $offset) {			
			//$sql .= " limit ?, ?";
			//$query = $this->db->query($sql, array($start, $offset));
			$query = $this->db->get('property_owner_master_list', $start, $offset);
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
		$this->db->where('tb_nationality_id', $id);
		$this->db->delete('nationality');
	}

	public function update_nationality($id, $data) {		
		$this->db->where('tb_nationality_id', $id);
		$this->db->update('nationality', $data); 		
	}	

	public function get_addr_info($tb_property_owner_id = null){
		if (is_null($tb_property_owner_id))
		{
			$query = $this->db->get('address');
			return $query->result();
		}
		$this->db->where('tb_property_owner_id', $tb_property_owner_id );
		$query = $this->db->get('address');
		return $query;

	}	
}?>