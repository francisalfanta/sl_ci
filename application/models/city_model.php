<?php 
/*   Created by  : Francis A.
     Date        : November 26, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class city_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_city($q = FALSE)
	{
		if($q == FALSE) {
			$query = $this->db->get('city');
			return $query->result_array();
		}

		$this->db->select('*');
		$this->db->like('city_name', $q);
		$query = $this->db->get('city');
		if($query->num_rows > 0){
			foreach($query->result_array() as $row){
				$row_set[] = htmlentities(stripslashes($row['city_name']));
			}
			echo json_encode($row_set);
		}
	}	

	public function create_city() {		
		$new_city_insert_data = array(
			'city_name' 	       => $this->input->post('city')
		);
		$insert = $this->db->insert('city', $new_city_insert_data);
		return $insert;
	}

	public function delete_city() {				
		$city_name = $this->input->post('city');
		
		$this->db->where('city_name', $city_name);
		$this->db->delete('city');
	}

	public function update_city($id, $data) {		
		$this->db->where('id', $id);
		$this->db->update('city', $data); 		
	}	
}?>