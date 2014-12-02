<?php
/*   Created by  : Francis A.
     Date        : November 24, 2014
     Script Lines: All unless noted otherwise
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Unit_test extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('propertyfinder_model');
	}

	public function index() {

		$test_unit = '';
		/*
		$data['staff_menus']=$this->staff_menu_model->get_staff_menu();
		$parents            = $this->staff_menu_model->get_parent_staff_menu();
		
		foreach($parents as $parent) {
			foreach($data['staff_menus'] as $staff_menus) {
				//foreach($staff_menus as $staff_menu) {
					//echo $staff_menus['parent'].'<br>';	
					if($staff_menus['parent'] == $parent->menu) {
						echo $staff_menus['parent'].'=='.$staff_menus['menu'].'<br>';
					}
				//}
			}
		}
		*/
		/*
		$parents           = $this->staff_menu_model->get_parent_staff_menu();
		$children          = $this->staff_menu_model->get_child_staff_menu();
		$data['parents']   = $parents;
		$data['children']  = $children;
		
		foreach($parents as $parent) {
			echo '$parents: '.$parent->menu.'<br>';
		}
		*/
		/*
		$query = $this->db->select('menu')->from('staff_menu')->where('length(parent) = 0');
		$query->order_by("order asc");
		$query = $query->get();
		$query = $this->db->query('SELECT `menu` FROM `tb_staff_menu` WHERE length(`parent`) = 0 ORDER BY `order` asc');
		$query = $query->get();
		$this->db->order_by('order', 'asc');
		
		$this->db->select('menu')->from('staff_menu')->where('length(parent) !=', 0)->order_by('order', 'asc');
		$query = $this->db->get('staff_menu');
		$this->db->query("SELECT `menu` FROM `tb_staff_menu` WHERE length(`parent`) > 0 order by `order` asc");
		$query = $this->db->get();
		$query = $query->result();
		echo '$query: '.$query;
		foreach($query as $row){
			$test_unit = $row;
			echo '$row[menu]= '.$row->menu.'<br>';
		}
		*/
		/*
		$fields =array();		
		$query = $this->db->list_fields('staff_menu');
		foreach ($query as $field_meta){
   			//echo $field_meta.'<br>';
   			$fields[$field_meta] = $field_meta;
		}
		var_dump($fields);
		echo ($fields['id']);
		*/
		/*
		$fields =array();			
		$i = 0;
		$query = $this->db->list_fields('staff_menu');		
		$parents           = $this->staff_menu_model->get_parent_staff_menu();
		foreach ($query as $field_meta) {   		
   			$fields[$i] = $field_meta;
   			++$i;
		}
		*/			
		//return $fields;
$query = $this->db->query("select *
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

									select *
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
		$test_unit = count($query->result());
		echo $test_unit;
		echo 'done foreach<br>';

		if (is_null($test_unit)) 
        {
           echo '$query is null';
        }
        else if ( is_array($test_unit) )
        {
           echo '$query is an array';
        }
        else if ( is_object($test_unit) )
        {
            echo '$query is an object';
        }
        else if ( is_string($test_unit) )
        {
            echo '$test_unit = '.$test_unit;
        }
        else if (is_numeric($test_unit)){
        	echo '$query is a numerical value';
        }
        else if (is_double($test_unit)){
        	echo '$query is a double';
        }
        else if (is_nan($test_unit)){
        	echo '$query is a NAN';
        }
	}
}
?>