<?php
/*   Created by  : Francis A.
     Date        : November 26, 2014
     Script Lines: All unless noted otherwise
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Access_level extends CI_Controller {

	public function index()
	{		
		$data['staffs']     = $this->slcs_staff_model->get_staff();
		//$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();
		//$data['sections']   = $this->sections_model->get_sections();
		$data['staff_menus']= $this->staff_menu_model->get_staff_menu();
		$data['parents']    = $this->staff_menu_model->get_parent_staff_menu();
		$data['children']   = $this->staff_menu_model->get_child_staff_menu();

		$data['title']      = 'SoftLine | Staff Permission';	
		
		$username = $this->session->userdata('username'); 			
		$data['username']   = ucfirst($username);		
		// added 12/28/2014
		// query for staff permissions
		//$data['staff_perm'] = $this->staff_menu_model->get_staff_perm();

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