<?php 
/*   Created by  : Francis A.
     Date        : December 9, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class address_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_address($data){
		$insert = $this->db->insert('address', $data);
		return $insert;
	}

	public function update_address($id, $data) {		
		$this->db->where('tb_address_id', $id);
		$this->db->update('address', $data); 		
	}
}	