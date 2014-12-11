<?php 
/*   Created by  : Francis A.
     Date        : December 11, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Residential_types_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_residential()
	{	
		$query = $this->db->get('residential_types');
		return $query;
		
	}

	public function get_residential_name_only($q)
	{	
		$this->db->select('id');
		$this->db->where('type_name', $q);
		$query = $this->db->get('residential_types');
		if($query->num_rows()){
			$row = $query->row();	
			return $row->id;
		}	
	}

	public function create_residential() {		
		$new_residential_insert_data = array(
			'type_name' 	       => $this->input->post('type_name')
		);
		$insert = $this->db->insert('residential_types', $new_residential_insert_data);
		return $insert;
	}

	public function delete_residential() {				
		$residential_name = $this->input->post('type_name');
		
		$this->db->where('type_name', $residential_name);
		$this->db->delete('residential_types');
	}

	public function update_residential($id, $data) {		
		$this->db->where('id', $id);
		$this->db->update('residential_types', $data); 		
	}	
}?>