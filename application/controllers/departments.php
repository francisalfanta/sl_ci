<?php
/*   Created by  : Francis A.
     Date        : November 23, 2014
     Script Lines: All unless noted otherwise
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Departments extends CI_Controller {

	public function index()
	{
		$data['staffs'] = $this->slcs_staff_model->get_staff();
		$data['sections'] = $this->sections_model->get_sections();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();
		$data['staff_menus']=$this->staff_menu_model->get_staff_menu();
		$data['title'] = 'Departments';

		$username = $this->session->userdata('username'); 			
		$data['username'] = ucfirst($username);	

		$this->load->helper('url');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu');
		$this->load->view('layout/right_sidemenu');
		$this->load->view('sections/section_table', $data);
		$this->load->view('layout/footer');		
	}

	public function view($id)
	{
		$data['staffs'] = $this->slcs_staff_model->get_staff();
		$data['sections'] = $this->sections_model->get_sections($id);
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();
		$data['staff_menus']=$this->staff_menu_model->get_staff_menu();
		$data['title'] = 'Departments';

		$username = $this->session->userdata('username'); 			
		$data['username'] = ucfirst($username);	


		if (empty($data['section']))
		{
			show_404();			
		}
		
		$this->load->helper('url');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu');
		$this->load->view('layout/right_sidemenu');
		$this->load->view('sections/blank');
		$this->load->view('layout/footer');	
	}

	public function create_sec()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$data['staffs'] = $this->slcs_staff_model->get_staff();
		$data['sections'] = $this->sections_model->get_sections();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();
		$data['staff_menus']=$this->staff_menu_model->get_staff_menu();
		$data['title'] = 'Add new Department';

		$username = $this->session->userdata('username'); 			
		$data['username'] = ucfirst($username);	

		$data['table_fields'] = array(
			'section_name' => array('section_name', 'Department Name')
			);

		$this->form_validation->set_rules('section_name', 'Department Name', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->helper('url');
			$this->load->view('layout/header', $data);
			$this->load->view('layout/topbar');
			$this->load->view('layout/admin_left_sidemenu');
			$this->load->view('layout/right_sidemenu');
			$this->load->view('sections/create_section_form', $data);
			$this->load->view('layout/footer');				
		}
		else
		{
			if($query = $this->sections_model->create_section()){
				$data['account_created'] = 'Your account has been created.<br>';

				redirect('departments');
			}
		}		
	}
}