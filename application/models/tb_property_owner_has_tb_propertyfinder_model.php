<?php 
/*   Created by  : Francis A.
     Date        : December 2, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class property_owner_has_tb_propertyfinder_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function index(){
		$query = $this->db->get('property_owner_has_tb_propertyfinder_model');
		return $query->result_array();
	}

	public function del_record($property_owner_id, $propertyfinder_id ){
		$this->db->where('tb_propertyfinder_id', $propertyfinder_id);
		$this->db->where('tb_property_owner_id', $property_owner_id);
		$this->db->delete('property_owner_has_tb_propertyfinder_model');
		var_dump('success delete');
	}
	
	public function add_record(){
		pass;
	}

	public function edit_record(){
		pass;
	}

}
