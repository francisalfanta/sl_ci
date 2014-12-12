<?php 
/*   Created by  : Francis A.
     Date        : December 1, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nationality_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_nationality($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('nationality');
			return $query->result_array();
		}

		$query = $this->db->get_where('nationality', array('tb_nationality_id' => $id));
		return $query->row_array();
	}

	public function create_prop_owner($property_owner_id, $nationality) {
		
		if(isset($nationality) && $nationality){			
			$new_nat_insert_data = array(
			'nationality'   		=> $nationality,			
			'tb_property_owner_id'  => $property_owner_id
			);	
			//var_dump($new_nat_insert_data);
			$insert = $this->db->insert('nationality', $new_nat_insert_data);
			//echo 'insert successful: <br>';
			return true;
		} else {
			//echo 'not successful: <br>';
			return 0;
		}
								
	}

	public function delete_nationality($id) {
		//echo 'delete nat';
		$this->db->where('tb_nationality_id', $id);
		$this->db->delete('nationality');
	}

	public function update_nationality($tb_nationality_id, $nationality) {
		//echo 'update nat';	
		$new_nationality_update_data = array(		
		'nationality'			=> $nationality,			
		'tb_property_owner_id'  => $this->input->post('property_owner_id')
		);

		$this->db->where('tb_nationality_id', $tb_nationality_id);
		$update = $this->db->update('nationality', $new_nationality_update_data);

		return $update;	
	}	

	public function get_nationality_info($tb_property_owner_id = null){
		if (is_null($tb_property_owner_id))
		{
			$query = $this->db->get('nationality');
			return $query;
		}
		$this->db->where('tb_property_owner_id', $tb_property_owner_id );
		$query = $this->db->get('nationality');
		return $query;

	} 

	public function count_rows($tb_property_owner_id, $nationality){
		$this->db->where('tb_property_owner_id', $tb_property_owner_id);
		$this->db->where('nationality', $nationality);
		$query = $this->db->get('nationality');

		return $query->num_rows();
	}
}?>