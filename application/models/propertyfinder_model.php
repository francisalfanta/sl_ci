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

	public function get_propertyfinder($q = null)
	{		
		if ($q == null) 
		{
			$query = $this->db->get('propertyfinder');			
			return $query->result_array();
		}

		$this->db->select('*');
		$this->db->like('re_property', $q);
		$query = $this->db->get('propertyfinder');
		if($query->num_rows > 0){
			foreach($query->result_array() as $row){
				$row_set[] = htmlentities(stripslashes($row['re_property']));
			}		
			echo json_encode($row_set);
		}
	}
	public function get_propertyfinder_by_id($q){
		$this->db->where('id', $q);
		$query = $this->db->get('propertyfinder');
		if($query->num_rows > 0){			
			return $query->result_array();
		}
	}	

	public function get_propertyfinder_array($q){
		$this->db->select('*');
		$this->db->like('re_property', $q);
		$query = $this->db->get('propertyfinder');
		if($query->num_rows> 0 ){
			foreach($query->result_array() as $row){
				$new_row['label'] = htmlentities(stripslashes($row['re_property']));
				$new_row['value'] = htmlentities(stripslashes($row['id']));
				$row_set[] = $new_row;
			}
			echo json_encode($row_set);
		}
	}	

	public function get_community_arr($q)
	{
		$this->db->select('*');
		$this->db->like('community_name', $q);
		$query = $this->db->get('community');
		if($query->num_rows > 0){
			foreach($query->result_array() as $row){
				$row_set[] = htmlentities(stripslashes($row['community']));
			}
			echo json_encode($row_set);
		}
	}			

	public function create_propertyfinder() {	

		$new_propertyfinder_insert_data = array(
			'city' 	       => $this->input->post('city'),
			'community'    => $this->input->post('community_name'),
			'subcommunity' => $this->input->post('subcommunity_name'),
			're_property'  => $this->input->post('re_property'),
			'property_type'=> $this->input->post('property_type'),
			'building_name'=> $this->input->post('building_name'),
			'unit_number'  => $this->input->post('unit_number'),
			'developer_name'=> $this->input->post('developer_name')
		);	
		
		$this->db->insert('propertyfinder', $new_propertyfinder_insert_data);
		$insert_id = $this->db->insert_id(); 
		return $insert_id;
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