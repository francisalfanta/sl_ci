<?php 
/*   Created by  : Francis A.
     Date        : December 8, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class email_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_email_info($tb_property_owner_id = null){
		if (is_null($tb_property_owner_id))
		{
			$query = $this->db->get('email');
			return $query->result();
		}
		$this->db->where('tb_property_owner_id', $tb_property_owner_id );
		$query = $this->db->get('email');
		return $query;

	} 
}