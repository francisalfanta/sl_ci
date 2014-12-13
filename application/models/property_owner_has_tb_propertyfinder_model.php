<?php 
/*   Created by  : Francis A.
     Date        : December 2, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Property_owner_has_tb_propertyfinder_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function index(){
		$query = $this->db->get('property_owner_has_tb_propertyfinder_model');
		return $query->result_array();
	}

	public function get_m2m_property_owner($property_owner_id){
		$this->db->where('tb_property_owner_id', $property_owner_id);
		$query = $this->db->get('property_owner_has_tb_propertyfinder');
		return $query;
	}
	
	public function del_record($property_owner_id, $propertyfinder_id ){
		$this->db->where('tb_propertyfinder_id', $propertyfinder_id);
		$this->db->where('tb_property_owner_id', $property_owner_id);
		$this->db->delete('property_owner_has_tb_propertyfinder');
		//var_dump('success delete');
	}
	
	public function add_record($tb_property_owner_id, $tb_propertyfinder_id){
		//echo 'inside add_record m2m<br>';
		$data = array(
				'tb_property_owner_id' 	=> $tb_property_owner_id,
				'tb_propertyfinder_id' 	=> $tb_propertyfinder_id
				);
		$insert = $this->db->insert('property_owner_has_tb_propertyfinder', $data);
		return $insert;
	}

	public function edit_record(){
		pass;
	}

	public function count_rows($tb_property_owner_id, $tb_propertyfinder_id){
		$this->db->where('tb_property_owner_id', $tb_property_owner_id);
		$this->db->where('tb_propertyfinder_id', $tb_propertyfinder_id);
		$query = $this->db->get('property_owner_has_tb_propertyfinder');
		return $query->num_rows();
	}

	public function count_property($tb_property_owner_id) {
		$this->db->where('tb_property_owner_id', $tb_property_owner_id);
		$query = $this->db->get('property_owner_has_tb_propertyfinder');

		return $query->num_rows();
	}
}
