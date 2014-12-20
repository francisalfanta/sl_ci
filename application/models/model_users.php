<?php
/*   Created by  : Lemuel 
     Date        : November 23, 2014
     Script Lines: All unless noted otherwise
*/

class Model_users extends CI_Model{

	// Added by : Francis A.
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function can_log_in(){
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$this->db->where('acctype = 0');
		$query = $this->db->get('tb_slcs_staff');  	// Modified by: Francis
		
		if ($query->num_rows() == 1){
			return true;
		} else {
			return false;
		}
	}
	// Created by: Prime 12/15/2014
	public function fp_can_log_in(){
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('acctype = 0');
		$query = $this->db->get('tb_slcs_staff');
		
		if ($query->num_rows() == 1){
			return true;
		} else {
			return false;
		}
	}
	
	public function fp_rand_gen(){
		$this->db->where('random_gen', $this->input->post('randomgen'));
		//$this->db->where('acctype = 0');
		$query = $this->db->get('tb_slcs_staff');
		
		if ($query->num_rows() == 1){
			return true;
		} else {
			return false;
		}
	}
}
?>