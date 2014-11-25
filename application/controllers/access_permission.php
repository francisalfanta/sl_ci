<?php
/*   Created by  : Francis A.
     Date        : November 26, 2014
     Script Lines: All unless noted otherwise
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Access_permission extends CI_Controller {

	public function index()
	{		
		$data['staffs'] = $this->slcs_staff_model->get_staff();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();
		$data['sections'] = $this->sections_model->get_sections();
		$data['staff_menus']=$this->staff_menu_model->get_staff_menu();
		$data['title'] = 'SoftLine | Staff Permission';	
		
		$username = $this->session->userdata('username'); 			
		$data['username'] = ucfirst($username);		

		$this->load->helper('url');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu', $data);
		$this->load->view('layout/right_sidemenu');
		$this->load->view('access_permission/access_permission', $data);
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

	public function create_member()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$data['staffs'] = $this->slcs_staff_model->get_staff();
		$data['depttasks']  = $this->dept_tasks_model->get_dept_tasks();		
		$data['sections'] = $this->sections_model->get_sections();

		$username = $this->session->userdata('username'); 					
		$data['username'] = ucfirst($username);	
		$data['title'] = 'SoftLine | Add new staff';

		$data['table_fields'] = array(
			'fname' => array('fname', 'First Name'),
			'lname' => array('lname', 'Last Name'),
			'mnumber' => array('mnumber', 'Mobile No'),
			'username' => array('username', 'Username'),
			'password' => array('password', 'Password'),
			'passconf' => array('passconf', 'Password Confirm'),
			'placeofbirth' => array('placeofbirth', 'Place of Birth'),
			'passport_no' => array('passport_no', 'Passport No'),
			'nationality' => array('nationality', 'Nationality'),
			'marital_stat' => array('marital_stat', 'Marital Status'),
			'date_hired' => array('date_hired', 'Date Hired'),
			'date_started' => array('date_started', 'Date Started'),
			'dob' => array('dob', 'Date of Birth')
			);

		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[slcs_staff.email]');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|is_unique[slcs_staff.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('placeofbirth', 'Place of Birth', 'required');
		$this->form_validation->set_rules('passport_no', 'Passport No', 'required');
		$this->form_validation->set_rules('nationality', 'Nationality', 'required');
		$this->form_validation->set_rules('marital_stat', 'Marital Status', 'required');
		$this->form_validation->set_rules('date_hired', 'Date Hired', 'required');
		$this->form_validation->set_rules('date_started', 'Date Started', 'required');
		$this->form_validation->set_rules('dob', 'Date of Birth', 'required');		

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->helper('url');
			$this->load->view('layout/header', $data);
			$this->load->view('layout/topbar');
			$this->load->view('layout/admin_left_sidemenu');
			$this->load->view('layout/right_sidemenu');
			$this->load->view('slcs_staff/create_slcs_staff_form', $data);
			$this->load->view('layout/footer');				
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