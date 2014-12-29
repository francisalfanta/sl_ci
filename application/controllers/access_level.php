<?php
/*   Created by  : Francis A.
     Date        : November 26, 2014
     Script Lines: All unless noted otherwise
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Access_level extends CI_Controller {

	// on testing 12/28/2014
	// to be place in helper
	/*
	public function _permitted_menu(){
		// menu lists
		$parent_lists   = $this->staff_menu_model->get_parent_staff_menu();
		$children_lists = $this->staff_menu_model->get_child_staff_menu();
		// user info
		$username = $this->session->userdata('username');
		$user 	  = $this->slcs_staff_model->get_staff($username);

		// if not log in redirect

		// get user permission from tb_staff_permissions table located in staff_menu
        $permitted_lists = $this->staff_menu_model->get_staff_perm($user['id']);
        // for parent menu
        $permitted_parent = array();
        // for child menu
        $permitted_child = array();        

        foreach($permitted_lists as $perm){
            // loop to existing parent menu
            foreach($parent_lists as $row){
                if($row->id==$perm['accessable_table_id']){
                	if(count($permitted_parent)==0){
                		$permitted_parent = array($perm['accessable_table_id']);
                	} else {
                		array_push($permitted_parent, $perm['accessable_table_id']);	
                	}
                    
                }
            }
            // loop to existing child menu
            foreach($children_lists as $row){
                if($row->id==$perm['accessable_table_id']){
                    array_push($permitted_child, $perm['accessable_table_id']);
                }
            }
        }

        // to be place in model staff menu 
        if(count($permitted_parent)>0) { // contain lists then set parent permitted
        	$this->db->where_in('id',$permitted_parent);	
        }    	
        $permitted_parent_lists = $this->db->get('staff_menu');

	    if($permitted_parent_lists){ // contain lists then set only permitted
	        $data['parents'] = $permitted_parent_lists->result_array();	
        } else { // dont contain anything set to default
        	$data['parents']    = $this->staff_menu_model->get_parent_staff_menu();
        }
        // to be place in model staff menu        
        if($permitted_child){ // contain lists then set child permitted
        	$this->db->where_in('id',$permitted_child);	
        }    	
        $permitted_child_lists = $this->db->get('staff_menu');

	    if($permitted_child_lists){ // contain lists then set only permitted
	        $data['children'] = $permitted_child_lists->result_array();		        
        } else { // dont contain anything set to default
        	$data['children']   = $this->staff_menu_model->get_child_staff_menu();	
        }

        return $data;
	}	*/
	// added 12/29/2014
	function _header_data(){ 
        $data['staffs']          = $this->slcs_staff_model->get_staff();
        //$data['depttasks'] = $this->dept_tasks_model->get_dept_tasks();  // replacement for staff_permissions
        //$data['sections']  = $this->sections_model->get_sections();      // replacement for staff_menu

        $data['parent_lists']    = $this->staff_menu_model->get_parent_staff_menu();
        $data['children_lists']  = $this->staff_menu_model->get_child_staff_menu();
        $data['username']        = $this->session->userdata('username');
        $user                    = $this->slcs_staff_model->get_staff($data['username']);
        $data['permitted_lists'] = $this->staff_menu_model->get_staff_perm($user['id']);
        // check user permission on menus
        $data['staff_menus'] 	 = $this->staff_menu_model->get_staff_menu($user['id']);
   		// set $data['parents'] to be placed in menu header
        // $permitted_parent = permitted_parent_menu($parent_lists, $username, $permitted_lists);
        $permitted_parent = permitted_parent_menu($data['parent_lists'], $data['username'], $data['permitted_lists']);
        $data['parents']  = $this->staff_menu_model->permitted_menus($permitted_parent);

        // set $data['children'] to be placed in sub-menus
        //$permitted_child  = permitted_child_menu($children_lists, $username, $permitted_lists);
        $permitted_child = permitted_child_menu($data['children_lists'], $data['username'], $data['permitted_lists']);
        $data['children'] = $this->staff_menu_model->permitted_menus($permitted_child);   

        return $data;
    }

	public function index()
	{	
		$data = $this->_header_data(); 

		$data['parents']    = $this->staff_menu_model->get_parent_staff_menu();
		$data['children']   = $this->staff_menu_model->get_child_staff_menu();

		$data['title']      = 'SoftLine | Staff Permission';	
        
		$this->load->helper('url');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu', $data);
		$this->load->view('layout/right_sidemenu');
		$this->load->view('access_level/access_level', $data);
		$this->load->view('layout/footer');	
		
	}


	public function view($username)
	{
		$data['staff'] = $this->slcs_staff_model->get_staff($username);
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();
		$data['sections'] = $this->sections_model->get_sections();

		$username = $this->session->userdata('username'); 			
		$data['username'] = ucfirst($username);	
		$data['title'] = 'SoftLine | Staff';

		if (empty($data['staff']))
		{
			show_404();			
		}

		$data['title'] = $data['staff']['username'];

		$this->load->helper('url');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu');
		$this->load->view('layout/right_sidemenu');
		$this->load->view('slcs_staff/blank');
		$this->load->view('layout/footer');	
	}
	// tested 12/28/2014
	public function assign_permission()
	{	
		// added 12/28/2014		
        $staff_id    = $this->input->post('staff_id');
        // clear staff permission from tb_staff_permissions
        //$this->staff_menu_model->del_staff_perm();

        $staff_menus = $this->staff_menu_model->get_staff_menu();
        $menu_name   = $this->input->post('menu_name');

        $actual_name = strtolower(str_replace('_', ' ', $menu_name));
        foreach($staff_menus as $row){
            if($actual_name==strtolower($row['menu'])){                        
                // insert into tb_staff_permissions
                $this->staff_menu_model->insert_staff_perm($staff_id, $row['id']);                        
            }                    
        }  
        /*
        if(isset($menu_name)) {
            $optionArray = $menu_name;
            for ($i=0; $i<count($optionArray); $i++) {
                $optionArray[$i]."<br />";
                $actual_name = strtolower(str_replace('_', ' ', $optionArray[$i]));
                foreach($staff_menus as $row){
                    if($actual_name==strtolower($row['menu'])){                        
                        // insert into tb_staff_permissions
                        $this->staff_menu_model->insert_staff_perm($staff_id, $row['id']);                        
                    }                    
                }                
            }
        }
        */
        // end add
        echo 'insert add';
	}
	// tested 12/28/2014
	// fetch current user permission
	public function get_user_permission()
	{
		$staff_id = $this->input->post('staff_id');
		// model to be transfer to user model
		$query = $this->staff_menu_model->get_staff_perm($staff_id);		        
        // storage for permitted menu
        $permitted_lists = array();

        foreach($query as $row) {
            //echo '$row["accessable_table_id"]: ', $row['accessable_table_id']."<br>";
            // find menu name
            $menu = $this->staff_menu_model->get_staff_menu($row['accessable_table_id']);
            //echo strtolower(str_replace(' ', '_', $menu['menu']));
            array_push($permitted_lists, strtolower(str_replace(' ', '_', $menu['menu'])));
        }
        //print_r($permitted_lists);
        print json_encode($permitted_lists);
	}
	// tested 12/28/2014
	public function clear_permission(){
		$delete = $this->staff_menu_model->del_staff_perm();
		print 'success delete';
	}
}