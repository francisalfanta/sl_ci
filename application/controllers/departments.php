<?php
class Departments extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('sections_model');
	}

	public function index()
	{
		$data['sections'] = $this->sections_model->get_sections();
		$data['title'] = 'Departments';

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
		$data['sections'] = $this->sections_model->get_sections($id);
		$data['title'] = 'Departments';

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

	public function create_sec()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$data['sections'] = $this->sections_model->get_sections();
		$data['title'] = 'Add new sub-section';
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

				redirect('sections/create_sec');
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