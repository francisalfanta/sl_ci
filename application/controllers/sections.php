<?php
class Sections extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('sections_model');
	}

	public function index()
	{
		$data['staffs'] = $this->sections_model->get_sections();
		$data['title'] = 'Department Names';		
	}

	public function view($id)
	{
		$data['section'] = $this->sections_model->get_sections($id);
		$data['title'] = 'Deparment Name';
		if (empty($data['section']))
		{
			show_404();			
		}
		
		$this->load->helper('url');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/topbar');
		$this->load->view('layout/admin_left_sidemenu');
		$this->load->view('layout/right_sidemenu');
		$this->load->view('slcs_staff/index');
		$this->load->view('layout/footer');	
	}

	public function create_member()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$data['title'] = 'Add new staff';
		$data['table_fields'] = array(
			'fname' => array('fname', 'First Name'),
			'lname' => array('lname', 'Last Name'),
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

	public function validate_credentials()
	{
		//$this->load->model('slcs_staff_model'); //already called in __construct()
		$query = $this->slcs_staff_model->validate();


		if ($query)  // if the user's credentials validated...
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
			);

			$this->session->set_userdata($data);
			//redirect('site/member_area');
			redirect('dashboard');
		}
	}	
}