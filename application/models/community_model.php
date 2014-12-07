<?php 
/*   Created by  : Francis A.
     Date        : November 26, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class community_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_community($q = FALSE){

		if($q == FALSE) {
			$query = $this->db->get('community');
			return $query->result_array();
		}

		$this->db->select('*');
		$this->db->like('community_name', $q);
		$query = $this->db->get('community');
		if($query->num_rows> 0 ){
			foreach($query->result_array() as $row){
				$new_row['label'] = htmlentities(stripslashes($row['community_name']));
				$new_row['value'] = htmlentities(stripslashes($row['id']));
				$row_set[] = $new_row;
			}
			echo json_encode($row_set);
		}
	}

	public function get_community_by_id($community_id = null)
	{		
		$this->db->where('id', $community_id);
		$query = $this->db->get('community');		
		$community_name = null;

		if($query->num_rows()>0){
			foreach($query->result_array() as $row){
            	$community_name=$row['community_name'];
        	}	
		}
		return $community_name;		
	}

	public function get_community_name_only($q)
	{	
		$this->db->select('id');
		$this->db->where('community_name', $q);
		$query = $this->db->get('community');
		if($query->num_rows()){
			$row = $query->row();	
			return $row->id;
		}	
	}		
	
	public function create_community() {

		$new_comm_insert_data = array(
			'community_name' => $this->input->post('community_name')
		);

		$insert = $this->db->insert('commmunity', $new_comm_insert_data);
		return $insert;
	}

	public function delete_community($id) {
		$this->db->where('id', $id);
		$this->db->delete('community');
	}

	public function update_community($id, $data) {		
		$this->db->where('id', $id);
		$this->db->update('community', $data); 		
	}

	public function comm_id_max_val(){
		$this->db->select_max('id');
		$query = $this->db->get('community');
		return $query->result();
	}
}?>