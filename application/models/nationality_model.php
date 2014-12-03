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

	public function create_prop_owner($property_owner_id) {

		$new_address_insert_data = array(
			'address'  				=> $this->input->post('address'),
			'postalcode' 			=> $this->input->post('postalcode'),
			'postofficeboxnumber'   => $this->input->post('postofficeboxnumber'),
			'addressRegion'			=> $this->input->post('addressregion'),
			'addressLocality'   	=> $this->input->post('addresslocality'),
			'addressCountry'		=> $this->input->post('addresscountry'),
		);
		$this->db->where('address', $new_address_insert_data['address']);
		$this->db->where('postalcode', $new_address_insert_data['postalcode']);
		$this->db->where('postofficeboxnumber', $new_address_insert_data['postofficeboxnumber']);
		$this->db->where('addressRegion', $new_address_insert_data['addressRegion']);
		$this->db->where('addressLocality', $new_address_insert_data['addressLocality']);
		$this->db->where('addressCountry', $new_address_insert_data['addressCountry']);
		$this->db->from('address');
		$query = $this->db->count_all_results();

		$address_id = null;
		if($query==0){
			$this->db->insert('address', $new_address_insert_data);
			$address_id = $this->db->insert_id();

			$new_nationality_insert_data = array(
			'telephone_no'  		=> $this->input->post('telephone_no'),
			'mobile_no' 			=> $this->input->post('mobile_no'),
			'fax_no'   				=> $this->input->post('fax_no'),
			'email'					=> $this->input->post('email'),	
			'address_id'		    => $address_id,
			'property_owner_id'     => $property_owner_id
			);	
			$insert = $this->db->insert('nationality', $new_nationality_insert_data);
			return $insert;
		}				
	}

	public function delete_nationality($id) {
		$this->db->where('tb_nationality_id', $id);
		$this->db->delete('nationality');
	}

	public function update_nationality($tb_nationality_id) {

		$new_address_insert_data = array(
			'address'  				=> $this->input->post('address'),
			'postalcode' 			=> $this->input->post('postalcode'),
			'postofficeboxnumber'   => $this->input->post('postofficeboxnumber'),
			'addressRegion'			=> $this->input->post('addressregion'),
			'addressLocality'   	=> $this->input->post('addresslocality'),
			'addressCountry'		=> $this->input->post('addresscountry'),
		);
		$this->db->where('address', $new_address_insert_data['address']);
		$this->db->where('postalcode', $new_address_insert_data['postalcode']);
		$this->db->where('postofficeboxnumber', $new_address_insert_data['postofficeboxnumber']);
		$this->db->where('addressRegion', $new_address_insert_data['addressRegion']);
		$this->db->where('addressLocality', $new_address_insert_data['addressLocality']);
		$this->db->where('addressCountry', $new_address_insert_data['addressCountry']);
		$query = $this->db->get('address');
		
		$address_id = null;

		if($query->num_rows() > 0) {
			$row = $query->row();
			$address_id = $row->tb_address_id;
		} else {
			$this->db->insert('address', $new_address_insert_data);
			$address_id = $this->db->insert_id();
		}		

		//$this->db->insert('address', $new_address_insert_data);
		//$address_id = $this->db->insert_id();

		$new_nationality_update_data = array(
		'telephone_no'  		=> $this->input->post('telephone_no'),
		'mobile_no' 			=> $this->input->post('mobile_no'),
		'fax_no'   				=> $this->input->post('fax_no'),
		'email'					=> $this->input->post('email'),	
		'address_id'		    => $address_id,
		'property_owner_id'     => $this->input->post('property_owner_id')
		);
		$this->db->where('tb_nationality_id', $tb_nationality_id);
		$update = $this->db->update('nationality', $new_nationality_update_data);

		return $update;	
	}	
}?>