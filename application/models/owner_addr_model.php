<?php 
/*   Created by  : Francis A.
     Date        : December 1, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class owner_addr_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_owner_addr($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->query('select a.*, b.id as id_n, b.telephone_no, b.mobile_no, b.fax_no,
											  b.email, b.property_owner_id 
										from tb_address a, tb_nationality b
										where a.id = b.tb_address_id');
			return $query->result();
		}

		$query = $this->db->get_where('owner_addr', array('id' => $id));
		return $query->row_array();
	}

	public function view_owner_details($count_rows = FALSE)
	{
		$query = $this->db->query("select propertyfinder_id, full_name, mobile_no, telephone_no, re_property, property_type, building_name,
										  address, addressLocality, addressRegion, addressCountry, property_owner_id
									FROM
									(select *
									from (select owned_property.*, 
									tb_propertyfinder.id as propertyfinder_id, 
									tb_propertyfinder.city,
									tb_propertyfinder.community,
									tb_propertyfinder.re_property,
									tb_propertyfinder.property_type,
									tb_propertyfinder.building_name,
									tb_propertyfinder.unit_number,
									tb_propertyfinder.developer_name
									from (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
									FROM tb_property_owner a
									LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
									ON a.id = b.tb_property_owner_id

									UNION

									SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
									FROM tb_property_owner a
									RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
									ON a.id = b.tb_property_owner_id) as owned_property
									LEFT OUTER JOIN tb_propertyfinder
									ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id

									UNION

									select owned_property.*,
									tb_propertyfinder.id as propertyfinder_id, 
									tb_propertyfinder.city,
									tb_propertyfinder.community,
									tb_propertyfinder.re_property,
									tb_propertyfinder.property_type,
									tb_propertyfinder.building_name,
									tb_propertyfinder.unit_number,
									tb_propertyfinder.developer_name
									from (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
									FROM tb_property_owner a
									LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
									ON a.id = b.tb_property_owner_id

									UNION

									SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
									FROM tb_property_owner a
									RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
									ON a.id = b.tb_property_owner_id) as owned_property
									RIGHT OUTER JOIN tb_propertyfinder
									ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id) as owner_properties

									LEFT OUTER JOIN tb_nationality ON owner_properties.tb_property_owner_id = tb_nationality.property_owner_id

									UNION

									select *
									from (select owned_property.*, 
									tb_propertyfinder.id as propertyfinder_id, 
									tb_propertyfinder.city,
									tb_propertyfinder.community,
									tb_propertyfinder.re_property,
									tb_propertyfinder.property_type,
									tb_propertyfinder.building_name,
									tb_propertyfinder.unit_number,
									tb_propertyfinder.developer_name
									from (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
									FROM tb_property_owner a
									LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
									ON a.id = b.tb_property_owner_id

									UNION

									SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
									FROM tb_property_owner a
									RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
									ON a.id = b.tb_property_owner_id) as owned_property
									LEFT OUTER JOIN tb_propertyfinder
									ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id

									UNION

									select owned_property.*,
									tb_propertyfinder.id as propertyfinder_id, 
									tb_propertyfinder.city,
									tb_propertyfinder.community,
									tb_propertyfinder.re_property,
									tb_propertyfinder.property_type,
									tb_propertyfinder.building_name,
									tb_propertyfinder.unit_number,
									tb_propertyfinder.developer_name
									from (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
									FROM tb_property_owner a
									LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
									ON a.id = b.tb_property_owner_id

									UNION

									SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
									FROM tb_property_owner a
									RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
									ON a.id = b.tb_property_owner_id) as owned_property
									RIGHT OUTER JOIN tb_propertyfinder
									ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id) as owner_properties

									RIGHT OUTER JOIN tb_nationality ON owner_properties.tb_property_owner_id = tb_nationality.property_owner_id) as owner_prop_addr


									LEFT OUTER JOIN tb_address ON owner_prop_addr.address_id = tb_address.id

									 -- ------------------
									UNION 

									select propertyfinder_id, full_name, mobile_no, telephone_no, re_property, property_type, building_name,
									  address, addressLocality, addressRegion, addressCountry, property_owner_id						
									FROM
									(select *
									from (select owned_property.*, 
									tb_propertyfinder.id as propertyfinder_id, 
									tb_propertyfinder.city,
									tb_propertyfinder.community,
									tb_propertyfinder.re_property,
									tb_propertyfinder.property_type,
									tb_propertyfinder.building_name,
									tb_propertyfinder.unit_number,
									tb_propertyfinder.developer_name
									from (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
									FROM tb_property_owner a
									LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
									ON a.id = b.tb_property_owner_id

									UNION

									SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
									FROM tb_property_owner a
									RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
									ON a.id = b.tb_property_owner_id) as owned_property
									LEFT OUTER JOIN tb_propertyfinder
									ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id

									UNION

									select owned_property.*,
									tb_propertyfinder.id as propertyfinder_id, 
									tb_propertyfinder.city,
									tb_propertyfinder.community,
									tb_propertyfinder.re_property,
									tb_propertyfinder.property_type,
									tb_propertyfinder.building_name,
									tb_propertyfinder.unit_number,
									tb_propertyfinder.developer_name
									from (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
									FROM tb_property_owner a
									LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
									ON a.id = b.tb_property_owner_id

									UNION

									SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
									FROM tb_property_owner a
									RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
									ON a.id = b.tb_property_owner_id) as owned_property
									RIGHT OUTER JOIN tb_propertyfinder
									ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id) as owner_properties

									LEFT OUTER JOIN tb_nationality ON owner_properties.tb_property_owner_id = tb_nationality.property_owner_id

									UNION

									select *
									from (select owned_property.*, 
									tb_propertyfinder.id as propertyfinder_id, 
									tb_propertyfinder.city,
									tb_propertyfinder.community,
									tb_propertyfinder.re_property,
									tb_propertyfinder.property_type,
									tb_propertyfinder.building_name,
									tb_propertyfinder.unit_number,
									tb_propertyfinder.developer_name
									from (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
									FROM tb_property_owner a
									LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
									ON a.id = b.tb_property_owner_id

									UNION

									SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
									FROM tb_property_owner a
									RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
									ON a.id = b.tb_property_owner_id) as owned_property
									LEFT OUTER JOIN tb_propertyfinder
									ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id

									UNION

									select owned_property.*,
									tb_propertyfinder.id as propertyfinder_id, 
									tb_propertyfinder.city,
									tb_propertyfinder.community,
									tb_propertyfinder.re_property,
									tb_propertyfinder.property_type,
									tb_propertyfinder.building_name,
									tb_propertyfinder.unit_number,
									tb_propertyfinder.developer_name
									from (SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
									FROM tb_property_owner a
									LEFT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
									ON a.id = b.tb_property_owner_id

									UNION

									SELECT concat(a.first_name,' ',a.last_name) as full_name, a.gender, a.passport_no, b.tb_propertyfinder_id, b.tb_property_owner_id
									FROM tb_property_owner a
									RIGHT OUTER JOIN tb_property_owner_has_tb_propertyfinder b
									ON a.id = b.tb_property_owner_id) as owned_property
									RIGHT OUTER JOIN tb_propertyfinder
									ON owned_property.tb_propertyfinder_id = tb_propertyfinder.id) as owner_properties

									RIGHT OUTER JOIN tb_nationality ON owner_properties.tb_property_owner_id = tb_nationality.property_owner_id) as owner_prop_addr


									RIGHT OUTER JOIN tb_address ON owner_prop_addr.address_id = tb_address.id;

									");
		if($count_rows){
			$counting_rows = count($query->result());
			return $counting_rows;
		} else {
			return $query->result();
		}		
	}
	
	public function create_prop_owner() {

		$new_pro_owner_insert_data = array(
			'first_name'  => $this->input->post('first_name'),
			'middle_name' => $this->input->post('middle_name'),
			'last_name'   => $this->input->post('last_name')
		);

		$insert = $this->db->insert('nationality', $new_pro_owner_insert_data);
		return $insert;
	}

	public function delete_nationality($id) {
		$this->db->where('id', $id);
		$this->db->delete('nationality');
	}

	public function update_nationality($id, $data) {		
		$this->db->where('id', $id);
		$this->db->update('nationality', $data); 		
	}	
	// ------------------------------------------//
	public function get_field_name_staff_menu(){
		
		$fields =array();	
		$i = 0;		
		$query = $this->db->list_fields('staff_menu');
		foreach ($query as $field_meta) {   		
   			$fields[$i] = $field_meta;
   			++$i;
		}		
		return $fields;
	}

	public function get_parent_staff_menu()
	{
		$this->db->select('id')->select('menu')->from('staff_menu')->where('length(parent) = 0')->order_by('order', 'asc');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_child_staff_menu()
	{
		$this->db->select('id')->select('menu')->select('parent')->from('staff_menu')->where('length(parent) !=', 0)->order_by('order', 'asc'); 
		$query = $this->db->get();
		return $query->result();
	}	

	

}?>