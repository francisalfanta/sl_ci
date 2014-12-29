<?php 
/*   Created by  : Francis A.
     Date        : November 24, 2014
     Script Lines: All unless noted otherwise
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staff_menu_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_staff_menu($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('staff_menu');
			return $query->result_array();		
		}		
		$permitted_menu_id = array();

		$staff_permissions = $this->get_staff_perm($id); 		
 		$array_length = count($staff_permissions);
        
        $permitted_menu_id = array();
        for($i=0; $i<$array_length; ++$i){            
            array_push($permitted_menu_id, $staff_permissions[$i]['accessable_table_id']);
        }   
		$this->db->where_in('id', $permitted_menu_id);   		
		$query = $this->db->get('staff_menu');
		
		return $query->result_array();
	}

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

	public function create_staff_menu() {

		$new_staff_menu_insert_data = array(
			'menu' 		 => $this->input->post('menu'),
			'url' 		 => $this->input->post('url'),
			'send_value' => $this->input->post('send_value'),
			'method'     => $this->input->post('method'),
			'order'      => $this->input->post('order'),
			'parent'     => $this->input->post('parent'),
			'include'    => $this->input->post('include'),
			'active'     => $this->input->post('active')
		);

		$insert = $this->db->insert('staff_menu', $new_staff_menu_insert_data);
		return $insert;
	}

	public function delete_staff_menu($id) {
		$this->db->where('id', $id);
		$this->db->delete('staff_menu');
	}

	public function update_staff_menu($id, $data) {	
		$this->db->where('id', $id);
		$this->db->update('staff_menu', $data); 		
	}	
	// tested 12/28/2014
	public function del_staff_perm(){
		$staff_id = $this->input->post('staff_id');
		$this->db->where('staff_id', $staff_id);
		$this->db->delete('staff_permissions');
	}
	// tested 12/28/2014
	public function insert_staff_perm($staff_id, $permissions){
		$data = array(
			'staff_id' => $staff_id,
			'accessable_table_id' => $permissions
		);

		$this->db->insert('staff_permissions', $data); 
	}
	// tested 12/28/2014
	// to be transfered to user model
	// get user permission
	public function get_staff_perm($staff_id){
		$this->db->where('staff_id', $staff_id);
		$query = $this->db->get('staff_permissions');

		return $query->result_array();
	}
	// tested 12/29/2014
	public function permitted_menus($permitted_parent){
		// to be place in model staff menu 
        if(count($permitted_parent)>0) { // contain lists then set parent permitted
            $this->db->where_in('id', $permitted_parent);    
        }       
        $permitted_parent_lists = $this->db->get('staff_menu');

        if($permitted_parent_lists){ // contain lists then set only permitted
            $query = $permitted_parent_lists->result(); 
        } else { // dont contain anything set to default
            $query = $this->staff_menu_model->get_parent_staff_menu();
        }

        return $query;        
	}

}?>