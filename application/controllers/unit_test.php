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
		//$query = $this->staff_menu_model->get_field_name_staff_menu();
		$this->propertyfinder_model->get_city('a');
		$query = $this->db->get();
		var_dump($query->result_array());

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