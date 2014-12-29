<?php
/*   Created by  : Francis A.
     Date        : November 29, 2014
     Script Lines: All unless noted otherwise
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class community extends CI_Controller {	

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

	public function create_comm_name(){		
		var_dump('create_comm_name entered');
		//$this->community_model->create_community();		
	}

	public function del_comm_name(){				
		$this->community_model->delete_city();		
	}

	public function get_comm(){
		$comm = $this->input->post('community_name');
	}

	public function getCommunity()
    {
        $this->db->select('city_id,community_name');
        $this->db->from('community'); 
        $query = $this->db->get();
         
         foreach($query->result_array() as $row){
            $data[$row['id']]=$row['community_name'];
        }
        return $data;
    }

	public function view($username)
	{
		$data = $this->_header_data();

		//$data['staff'] = $this->slcs_staff_model->get_staff($username);
		//$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();
		//$data['sections'] = $this->sections_model->get_sections();

		//$username = $this->session->userdata('username'); 			
		//$data['username'] = ucfirst($username);	
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
}
?>