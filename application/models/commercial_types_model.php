<?php 
/*   Created by  : Francis A.
     Date        : December 11, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Commercial_types_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_commercial()
	{
		$query = $this->db->get('commercial_types');
		return $query;		
	}

	public function get_commercial_name_only($q)
	{	
		$this->db->select('id');
		$this->db->where('type_name', $q);
		$query = $this->db->get('commercial_types');
		if($query->num_rows()){
			$row = $query->row();	
			return $row->id;
		}	
	}

	public function create_commercial() {		
		$new_commercial_insert_data = array(
			'type_name' 	       => $this->input->post('type_name')
		);
		$insert = $this->db->insert('commercial_types', $new_commercial_insert_data);
		return $insert;
	}

	public function delete_commercial() {				
		$commercial_name = $this->input->post('type_name');
		
		$this->db->where('type_name', $commercial_name);
		$this->db->delete('commercial_types');
	}

	public function update_commercial($id, $data) {		
		$this->db->where('id', $id);
		$this->db->update('commercial_types', $data); 		
	}	
}?>