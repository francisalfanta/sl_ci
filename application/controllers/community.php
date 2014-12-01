<?php
/*   Created by  : Francis A.
     Date        : November 29, 2014
     Script Lines: All unless noted otherwise
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class community extends CI_Controller {	

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

	public function assign_permission()
	{
		//$this->load->helper(array('form', 'url'));
		//$this->load->library('form_validation');		
		$data['staffs']     = $this->slcs_staff_model->get_staff();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();		
		$data['sections']   = $this->sections_model->get_sections();
		$data['staff_menus']= $this->staff_menu_model->get_staff_menu();
		$data['children']   = $this->staff_menu_model->get_child_staff_menu();

		$data['title']      = 'SoftLine | Staff Permission';	

		$username = $this->session->userdata('username'); 					
		$data['username'] = ucfirst($username);	

		$data = array(              
   		    'fanta' => ($this->input->post('fanta') === FALSE) ? 0 : 1,
        	//same for other checkboxes...
		); 
	
		if ($this->form_validation->run() == FALSE)
		{
			$this->index();			
		}
		else
		{
			if($query = $this->slcs_staff_model->create_staff()){
				$data['account_created'] = 'Your account has been created.<br>';

				redirect('slcs_staff/create_member');
			}
		}		
	}
}
?>