<?php
/*   Created by  : Francis A.
     Date        : November 23, 2014
     Script Lines: All unless noted otherwise
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Dept_tasks extends CI_Controller {

	public function index()		
	{
		$data['staffs'] = $this->slcs_staff_model->get_staff();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();
		$data['sections']   = $this->sections_model->get_sections();		
		$data['title'] = 'Department Records';

		$username = $this->session->userdata('username'); 			
		$data['username'] = ucfirst($username);	

		$this->load->helper('url');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu', $data);
		$this->load->view('layout/right_sidemenu');
		$this->load->view('dept_tasks/dept_tasks_table', $data);
		$this->load->view('layout/footer');	
	}

	public function view($dept_id)
	{
		$data['staffs'] = $this->slcs_staff_model->get_staff();
		$data['depttask'] = $this->dept_tasks_model->get_dept_tasks($dept_id);
		$data['sections']   = $this->sections_model->get_sections();
		$data['title'] = 'Department Records';

		$username = $this->session->userdata('username'); 			
		$data['username'] = ucfirst($username);	

		if (empty($data['depttask']))
		{
			show_404();			
		}		

		$this->load->helper('url');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu');
		$this->load->view('layout/right_sidemenu');
		$this->load->view('dept_tasks/blank');
		$this->load->view('layout/footer');	
	}

	public function create_dept_task()
	{
		//$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$data['staffs'] = $this->slcs_staff_model->get_staff();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();
		$data['sections'] = $this->sections_model->get_sections();
		$data['title'] = 'Add new Department Table';		

		$username = $this->session->userdata('username'); 			
		$data['username'] = ucfirst($username);	

		$this->form_validation->set_rules('dept_id', 'Department Name', 'required');
		$this->form_validation->set_rules('table_name', 'Table Name', 'required');	

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->helper('url');
			$this->load->view('layout/header', $data);
			$this->load->view('layout/topbar');
			$this->load->view('layout/admin_left_sidemenu');
			$this->load->view('layout/right_sidemenu');
			$this->load->view('dept_tasks/create_depttasks_form', $data);
			$this->load->view('layout/footer');				
		}
		else
		{
			if($query = $this->dept_tasks_model->create_dept_tasks()){
				$data['depttask_created'] = 'Department task has been created.<br>';

				redirect('dept_tasks');
			}
		}		
	}	
}
?>