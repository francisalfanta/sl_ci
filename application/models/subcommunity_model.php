<?php 
/*   Created by  : Francis A.
     Date        : November 26, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class subcommunity_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_subcommunity($q = FALSE)
	{
		if($q == FALSE) {
			$query = $this->db->get('subcommunity');
			return $query->result_array();
		}
		$this->db->select('*');
		$this->db->like('subcommunity_name', $q);
		$query = $this->db->get('subcommunity');
		if($query->num_rows > 0){
			foreach($query->result_array() as $row){
				$row_set[] = htmlentities(stripslashes($row['subcommunity_name']));
			}
			echo json_encode($row_set);
		}
	}

	public function get_subcommunity_by_id($subcommunity_id = null)
	{		
		$this->db->where('id', $subcommunity_id);
		$query = $this->db->get('subcommunity');		
		$subcommunity_name = null;

		if($query->num_rows()>0){
			foreach($query->result_array() as $row){
            	$subcommunity_name=$row['subcommunity_name'];
        	}	
		}
		return $subcommunity_name;		
	}		

	public function get_subcommunity_name_only($q)
	{	
		$this->db->select('id');
		$this->db->where('subcommunity_name', $q);
		$query = $this->db->get('subcommunity');
		if($query->num_rows()){
			$row = $query->row();	
			return $row->id;
		}	
	}

	public function create_subcommunity() {

		$new_subc_insert_data = array(
			'subcommunity_name' => $this->input->post('subcommunity_name')
		);

		$insert = $this->db->insert('subcommmunity', $new_subc_insert_data);
		return $insert;
	}

	public function delete_subcommunity($id) {
		$this->db->where('id', $id);
		$this->db->delete('subcommunity');
	}

	public function update_subcommunity($id, $data) {		
		$this->db->where('id', $id);
		$this->db->update('subcommunity', $data); 		
	}	

	public function subcomm_id_max_val(){
		$this->db->select_max('id');
		$query = $this->db->get('subcommunity');
		return $query->result();
	}
}?>