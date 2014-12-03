<?php 
/*   Created by  : Francis A.
     Date        : December 1, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class property_owner_model extends CI_Model 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_prop_owner($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('property_owner');
			return $query->result_array();
		}

		$query = $this->db->get_where('property_owner', array('tb_property_owner_id' => $id));
		return $query->row_array();
	}

	public function prop_owner_lists()
	{		
		$query = $this->db->query('select a.*, b.tb_nationality_id as id_n, b.telephone_no, b.mobile_no, b.fax_no,
										  b.email, b.property_owner_id 
									from tb_address a, tb_nationality b
									where a.id = b.address_id');
		return $query->result_array();
	}
	public function create_prop_owner() {

		$new_pro_owner_insert_data = array(
			'first_name'  => $this->input->post('first_name'),
			'middle_name' => $this->input->post('middle_name'),
			'last_name'   => $this->input->post('last_name'),
			'passport_no' => $this->input->post('passport_no')
		);

		$insert = $this->db->insert('property_owner', $new_pro_owner_insert_data);
		// get the latest id
		$insert = $this->db->insert_id();
		return $insert;
	}
	
	public function update_owner_personal($id, $data) 
	{		
		$this->db->where('tb_property_owner_id', $id);
		$this->db->update('property_owner', $data); 		
	}	
}?>