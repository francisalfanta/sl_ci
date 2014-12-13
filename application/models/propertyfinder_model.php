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
		$this->db->where('tb_propertyfinder_id', $q);
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
				$new_row['value'] = htmlentities(stripslashes($row['tb_propertyfinder_id']));
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
	// tested
	public function create_propertyfinder_by_id() {	
		//echo 'create_propertyfinder_by_id<br>';

		$city_id         = $this->input->post('city_name');
		$community_id    = $this->input->post('community_name');
		$subcommunity_id = $this->input->post('subcommunity_name');

		$city_name         = $this->city_model->get_city_by_id($city_id);		
		$community_name    = $this->community_model->get_community_by_id($community_id);
		$subcommunity_name = $this->subcommunity_model->get_subcommunity_by_id($subcommunity_id);

		$new_propertyfinder_insert_data = array(
			'city' 	       => $city_name,
			'community'    => $community_name,
			'subcommunity' => $subcommunity_name,
			're_property'  => $this->input->post('re_property_name')
		);	
		
		$this->db->insert('propertyfinder', $new_propertyfinder_insert_data);
		$insert_id = $this->db->insert_id(); 
		
		return $insert_id;
	}	

	public function create_propertyfinder($new_propertyfinder_insert_data) {	

		$this->db->insert('propertyfinder', $new_propertyfinder_insert_data);
		$insert_id = $this->db->insert_id(); 
		return $insert_id;
	}

	public function delete_propertyfinder($id) {
		$this->db->where('tb_propertyfinder_id', $id);
		$this->db->delete('propertyfinder');
	}

	public function update_propertyfinder($id, $data) {		
		$this->db->where('tb_propertyfinder_id', $id);
		$this->db->update('propertyfinder', $data); 		
	}	

	public function get_propertyfinder_using_filter($city_name = null, $community_name = null, $subcommunity_name = null){
		$this->db->select('*');
		if($city_name){		
			$this->db->where('city', $city_name);	
		}	
		if($community_name){
			$this->db->where('community', $community_name);	
		}
		if($subcommunity_name){
			$this->db->where('subcommunity', $subcommunity_name);
		}
		$query = $this->db->get('propertyfinder');
		
		return $query;
	}
}?>